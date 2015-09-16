<?
session_start();

$text = $_POST['text'];

$fp = fopen("log.html", 'a');
fwrite($fp, "<div class='msgln'> <b> You</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
fclose($fp);

    
?>