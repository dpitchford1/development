<?php
//$path_inc = $_SERVER['DOCUMENT_ROOT'] . "/development/master/includes";
//$mediaDIR = $_SERVER['DOCUMENT_ROOT'] . "/development/media/";
//$url  = $_SERVER['HTTP_HOST'].($_SERVER['REQUEST_URI']);

//$rootMedia  = "/development/media";

//$fontsCSS = "/development/media/css/modules/fonts.css";

$rootPath = "/development/master/";


$inc_global = $_SERVER['DOCUMENT_ROOT'] . "/development/master/includes/";
$inc_local = $_SERVER['DOCUMENT_ROOT'] . "/development/master/resources/includes/";

define('mediaDIR', '/development/media/');
define('globalCSS', '/development/media/css/');
define('globalJS', '/development/media/js/');

//$page = basename($_SERVER['SCRIPT_NAME']);


// main menu selected states
// $directoryURI = $_SERVER['REQUEST_URI'];
// $path = parse_url($directoryURI, PHP_URL_PATH);
// $components = explode('/', $path);
// $first_part = $components[1];


?>

<!-- host: <?php echo $_SERVER['HTTP_HOST'] ?><br>
document root: <?php echo $_SERVER['DOCUMENT_ROOT'] ?><br>
global inc path: <?php echo $path_inc; ?><br>
media directory: <?php echo $mediaDIR; ?><br>
root media: <?php echo $rootMedia; ?><br>
fonts css: <?php echo $fontsCSS; ?><br>
url of page: <?php echo $url; ?><br><br> -->


<?php
//echo '<script type="text/javascript">alert("hello!");</script>';
?>