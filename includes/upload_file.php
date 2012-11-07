<?php

  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "File <span style='color:red'>" . $_FILES["file"]["name"] . "</span>";

    if (file_exists("../uploads/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../uploads/" . $_FILES["file"]["name"]);
      }
		$fileName = $_FILES['file']['name'];
		$tmpName  = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileType = $_FILES['file']['type'];
		$content = $tmpName;
		
		if(!get_magic_quotes_gpc())
		{
			$fileName = addslashes($fileName);
		}
		include '../config.php';
		
		$query = "INSERT INTO upload (name, size, type, content ) ".
		"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
		
		mysql_query($query) or die('Error, query failed'); 
		
		echo "<br>File $fileName uploaded<br>";
    }


?>
<br/>
<a href="profile.php">Back to profile</a><br>
<br>
