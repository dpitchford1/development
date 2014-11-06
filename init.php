<?php
$path_inc = $_SERVER['DOCUMENT_ROOT'] . "/development/master/includes";
$mediaDIR = "/development/media/";
$url  = $_SERVER['HTTP_HOST'].($_SERVER['REQUEST_URI']);
?>

<?php echo $_SERVER['HTTP_HOST'] ?><br>
<?php echo $_SERVER['DOCUMENT_ROOT'] ?><br>
<?php echo $path_inc; ?><br>
<?php echo $mediaDIR; ?><br>
<?php echo $url; ?>