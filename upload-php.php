<?php
if ( isset($_POST["submit"]) ) {

   if ( isset($_FILES["file"])) {

            //if there was an error uploading the file
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

        }
        else {
                 //Print file details
             echo "Upload: " . $_FILES["file"]["name"] . "<br />";
             echo "Type: " . $_FILES["file"]["type"] . "<br />";
             echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
             echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

                 //if file already exists
             if (file_exists("data-train/" . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . " already exists. ";
             }
             else {
                    //Store file in directory "upload" with the name of "uploaded_file.txt"
            $storagename = "uploaded_file"&date.now()&".txt";
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $storagename);
            echo "Stored in: " . "data-train/" . $_FILES["file"]["name"] . "<br />";
            }
        }
         header( "location: http://localhost:8080/catalog.php" );
 exit(0);
     } else {
             header( "location: http://localhost:8080/upload.php" );
 exit(0);
     }
}

?>

<?php

?>
