<?php 
function upload_file()
{
 if(isset($_FILES["file"]))
 {
  $file_name = $_FILES['file']['name'];		
  $extension = explode('.', $_FILES['file']['name']);
  $new_name = $file_name;
  $destination = '../../upload/' . $new_name;
  move_uploaded_file($_FILES['file']['tmp_name'], $destination);
  // return $new_name;
  return $destination;
 }
}
?>