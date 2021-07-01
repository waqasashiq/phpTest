<?php
include_once 'dbConfig.php';
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$Chk=0;
$CSVFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
error_reporting(E_ALL ^ E_WARNING);
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.".PHP_EOL;
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.".PHP_EOL;
    $uploadOk = 0;
}

// Allow certain file formats
if($CSVFileType != "csv") {
    echo "Sorry, only CSV files are allowed. test".PHP_EOL;
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.".PHP_EOL;
// if everything is ok, try to upload file
}


else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.".PHP_EOL;
    } else {
        echo "Sorry, there was an error uploading your file.".PHP_EOL;
    }

    // Counter
    $i=0;
    // Open uploaded CSV file with read-only mode
    $csvFile = fopen($target_file, 'r');
    // Skip the first line
    fgetcsv($csvFile);
    while(($line = fgetcsv($csvFile)) !== FALSE){
        // Get row data
        $First_Name= $line[0];
        $Last_Name= $line[1];
        $Email= $line[2];
        $User_name= $line[3];
        $Password= $line[4];
        $Street= $line[5];
        $City  = $line[6];
        $County= $line[7];
        $PostCode= $line[8];


        if (preg_match("/^[a-zA-Z0-9]*$/",$User_name)) {
            // Check whether member already exists in the database with the same email

            $prevQuery = "SELECT UserName FROM users WHERE UserName = '".$line[1]."'";
            $prevResult = $db->query($prevQuery);

            if($prevResult->num_rows <= 0){
                if (preg_match( "/^[a-zA-Z0-9]{4,16}$/" , $Password)) {
                    if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                        if (preg_match(
                            "~^(GIR 0AA)|(TDCU 1ZZ)|(ASCN 1ZZ)|(BIQQ 1ZZ)|(BBND 1ZZ)"
                            . "|(FIQQ 1ZZ)|(PCRN 1ZZ)|(STHL 1ZZ)|(SIQQ 1ZZ)|(TKCA 1ZZ)"
                            . "|[A-PR-UWYZ]([0-9]{1,2}|([A-HK-Y][0-9]"
                            . "|[A-HK-Y][0-9]([0-9]|[ABEHMNPRV-Y]))"
                            . "|[0-9][A-HJKS-UW])\\s?[0-9][ABD-HJLNP-UW-Z]{2}$~i",
                            $PostCode)) {
                            // Insert member data in the database
                            $db->query("INSERT INTO users (FName, LName, UserName, Email, Password)
                                        VALUES ('".$First_Name."', '".$Last_Name."', '".$User_name."', '".$Email."', '".$Password."')");
                            $db->query("INSERT INTO address (UserName, Street, City, County, PostCode)
                                        VALUES ('".$User_name."', '".$Street."', '".$City."', '".$County."', '".$PostCode."')");

                            $i++;

                        }
                    }
                }
            }
        }
        else{
            print_r($line);

            $Chk=1;
        }
    }
    fclose($csvFile);
    if($Chk==1){
        if (!unlink($target_file)) {
            echo ("$target_file cannot be deleted due to an error".PHP_EOL);
        }
        else {
            echo ("$target_file has been deleted".PHP_EOL);
        }
        $prevQuery = ("DELETE FROM address");
        $prevResult2 = $db->query($prevQuery);
        $prevQuery = ("DELETE FROM users");
        $prevResult1 = $db->query($prevQuery);
    }
    else{
        $i--;
        echo"The number of records uploaded is: $i".PHP_EOL;
    }
}
?>