<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_file;
$uploadOk = 1;
$CSVFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($CSVFileType != "csv") {
    echo "Sorry, only CSV files are allowed. test";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}


else {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    // Open uploaded CSV file with read-only mode
    $csvFile = fopen($target_file, 'r');
    echo "File is not opened 1";

    // Skip the first line
    fgetcsv($csvFile);

    while(($line = fgetcsv($csvFile)) !== FALSE){
        // Get row data
        echo "File is opened";
        echo $line[0];

        $first_Name= $line[0];
        $Last_Name= $line[1];
        $Email= $line[2];
        $User_name= $line[3];
        $Password= $line[4];
        $Street= $line[5];
        $City  = $line[6];
        $County= $line[7];
        $PostCode= $line[8];

        if (preg_match("/^[a-zA-Z0-9]*$/",$User_name)) {

            if (preg_match( "^[a-zA-Z0-9]{4,16}$" , $Password)) {
                if (preg_match( "([a-z0-9_\-]+)@([a-z0-9_\-]+\.[a-z0-9\-\._\-]+)" , $Email)) {
                        if (preg_match(
                            "~^(GIR 0AA)|(TDCU 1ZZ)|(ASCN 1ZZ)|(BIQQ 1ZZ)|(BBND 1ZZ)"
                            . "|(FIQQ 1ZZ)|(PCRN 1ZZ)|(STHL 1ZZ)|(SIQQ 1ZZ)|(TKCA 1ZZ)"
                            . "|[A-PR-UWYZ]([0-9]{1,2}|([A-HK-Y][0-9]"
                            . "|[A-HK-Y][0-9]([0-9]|[ABEHMNPRV-Y]))"
                            . "|[0-9][A-HJKS-UW])\\s?[0-9][ABD-HJLNP-UW-Z]{2}$~i",
                            $PostCode)) {
                            


                            echo "this is sucessfull record can be uploaded";
                            echo $i;
                            $i++;
                        }
                }
            }
        }
        else{
            echo "this is NOT sucessfull record cant be uploaded";
        }
    }
}
?>