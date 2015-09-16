<?php
// Get the document root
$doc_root = $_SERVER['DOCUMENT_ROOT'];

// Get the application path
$uri = $_SERVER['REQUEST_URI'];
$dirs = explode('/', $uri);
$app_path = '/' . $dirs[1] . '/';

// Set the include path
set_include_path($doc_root . $app_path);

// Get common code
require_once('util/database.php');

// Define some common functions
function display_db_error($error_message) {
    global $app_path;
    include 'util/db_error.php';
    exit;
}

function display_error($error_message) {
    global $app_path;
    include 'util/error.php';
    exit;
}

function redirect($url) {
    session_write_close();
    header("Location: " . $url);
    exit;
}


//function writeToFile($content){
//    $file="backup.txt";
//    $content=$content."\t";
//    file_put_contents($file, $content, FILE_APPEND | LOCK_EX);
//}

$drop_down_list= "<option value=1>1</option>
  <option value=2>2</option>
  <option value=3>3</option>
  <option value=4>4</option>
  <option value=5>5</option>
  <option value=6>6</option>
  <option value=7>7</option>";



// Start session 
session_start();
?>
