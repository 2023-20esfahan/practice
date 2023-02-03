<?php

if (file_exists("images/" . $_FILES["upload"]["name"]))
{
 echo $_FILES["upload"]["name"] . " این فایل از قبل موجود است. ";
}
else
{
 move_uploaded_file($_FILES["upload"]["tmp_name"],
 "images/" . $_FILES["upload"]["name"]);
 echo " ذخیره شد " . "images/" . $_FILES["upload"]["name"];
}


?>