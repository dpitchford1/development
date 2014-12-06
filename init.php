<?php
//$path_inc = $_SERVER['DOCUMENT_ROOT'] . "/development/master/includes";
//$mediaDIR = $_SERVER['DOCUMENT_ROOT'] . "/development/media/";
//$url  = $_SERVER['HTTP_HOST'].($_SERVER['REQUEST_URI']);
//$rootMedia  = "/development/media";
//$fontsCSS = "/development/media/css/modules/fonts.css";

$rootPath = "/development/resources/";

$inc_global = $_SERVER['DOCUMENT_ROOT'] . "/development/includes/";
$inc_local = $_SERVER['DOCUMENT_ROOT'] . "/development/resources/includes/";

//define('mediaDIR', '/development/media/');
//define('globalCSS', '/development/media/css/');
//define('globalJS', '/development/media/js/');
//define('templateDir', '/development/master/template/');
//define('resourcesDir', '/development/master/template/resources/');

$paths = array(
	"global" =>  array(
		'media' => "/development/media/",
		'css' => "/development/media/css/",
		'js' => "/development/media/js/",
		'template' => "/development/style-guide/",
		'resources' => "/development/resources/"
		),

	"local" =>  array(
		'fonts' => '/fonts/',
		'Primary' => "Primary Colours",
		'Supporting' => "Supporting Colours",
		'textIcons' => 'Textual Icons'

		)

);


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