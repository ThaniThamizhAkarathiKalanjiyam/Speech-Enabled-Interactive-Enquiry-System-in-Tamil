<?php
  $old_path = getcwd();
  // echo $old_path;
  // chdir('scripts/');
  // $new_path = getcwd();
  // $filesinnewpath = scandir($new_path);
  // echo $filesinnewpath[2];
  // echo $new_path;

// or die("Unable to open file!")
//TO WRITE TO A FILE
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  $myfile = fopen("tasker.txt", "w") or die("Unable to open file!");
  $txt = $_POST["command"];
  // echo $txt;
  fwrite($myfile, $txt);
  fclose($myfile);

//TO EXECUTE A SCRIPT FILE
  // $output = "<pre>".shell_exec("bash test.sh")."</pre>";
  // echo $output;
  // chdir($old_path);
 ?>
