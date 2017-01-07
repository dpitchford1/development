<?php
	ini_set('display_errors', 1);

	$rootUrl = $_SERVER['DOCUMENT_ROOT'];

	$rootPath = "/development/resources/";

	$inc_global = $_SERVER['DOCUMENT_ROOT'] . "/includes/";
	$inc_local = $_SERVER['DOCUMENT_ROOT'] . "/resources/includes/";

	//define('mediaDIR', '/development/media/');
	define('globalCSS', '/media/css/');
	//define('globalJS', '/development/media/js/');
	//define('templateDir', '/development/master/template/');
	//define('resourcesDir', '/development/master/template/resources/');

	$paths = array(
		"global" =>  array(
			'media' => "/development/media/",
			'css' => "/media/css/",
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

	// $currentUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	// $hostname = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

	// $homeurl = $_SERVER['REQUEST_URI'];


	// $content = array(


	// 	"urls" =>  array(
	// 		//'root'    => "/kwest",
	// 		'media'   => "/media",
	// 		'images'  => "/media/img",
	// 		'content' => "/media/img/content",
	// 		'icons'   => "/media/img/icons",
	// 		'cssDev'  => "/media/css/",
	// 		'cssProd' => "/media/css/build/",
	// 		'jsDev'   => "/media/js/",
	// 		'jsProd'  => "/media/js/build/"
	// 	),

	// 	"config" =>  array(
	// 		'indexing'   => "index,follow,archive"
	// 	),

	// 	"general" =>  array(
	// 		'title'       => "Kwest",
	// 		'url'         => "http://www.kwest.tv",
	// 		'shortURL'    => "www.kwest.tv",
	// 		'email'       => "info@kwest.tv",
	// 		'keywords' 	  => "Commissions, Installation, Sculpture, Artwork, Kwest, Finely crafted, Typography, Type studies, Street art, Collectors, Roskilde, Roskilde Festival, OVO, OVO Sound, Frings, Custom Built, Graffiti, Toronto"
	// 	),

	// 	"sections" =>  array(

	// 		"home" =>  array(
	// 			'title'    		=> "",
	// 			'heading'    	=> "Kwest",
	// 			'url'      		=> "/",
	// 			'imgPath'  	  	=> "/media/img/content/home/",
	// 			'description' 	=> "Contemporary graffiti based Commissions, Installations, Sculptures, Artwork from artist Kwest based in Toronto."
	// 		),

	// 		"section0" =>  array(
	// 			'title'    		=> "About",
	// 			'heading'    	=> "About Kwest",
	// 			'url'      		=> "/about/",
	// 			'imgPath'  		=> "/media/img/content/about/",
	// 			'description'   => "About Kwest"
	// 		),
	// 		"section1" =>  array(
	// 			'title'    		=> "Installation",
	// 			'url'      		=> "/installation/",
	// 			'imgPath'  		=> "/media/img/content/installation/",
	// 			'description'   => "Contemporary graffiti based sculptures/artwork created with an emphasis on public space, site specific, to work with that environment using lower cost materials and faster construction methods."
	// 		),
	// 		"section2" =>  array(
	// 			'title'    		=> "Sculpture",
	// 			'url'      		=> "/sculpture/",
	// 			'imgPath'  		=> "/media/img/content/sculpture/",
	// 			'description'   => "Sculptures from Kwest"
	// 		),
	// 		"section3" =>  array(
	// 			'title'    		=> "Type Study",
	// 			'url'      		=> "/type-study/",
	// 			'imgPath'  		=> "/media/img/content/type-study/",
	// 			'description'   => "Contemporary graffiti based sculptures/artwork produced as individual or in series, ranging in materials and technique, often available for purchase."
	// 		),
	// 		"section4" =>  array(
	// 			'title'    		=> "Commission",
	// 			'url'      		=> "/commission/",
	// 			'imgPath'  		=> "/media/img/content/commission/",
	// 			'description'   => "One of a kind contemporary graffiti based sculptures, commissioned for specific collectors and clients."
	// 		),
	// 		"section5" =>  array(
	// 			'title'    		=> "Applied Surface",
	// 			'url'      		=> "/applied-surface/",
	// 			'imgPath'  		=> "/media/img/content/applied-surface/",
	// 			'description'   => "Applied Surfaces from Kwest"
	// 		),
	// 		"section6" =>  array(
	// 			'title'    		=> "Wildlife",
	// 			'url'      		=> "/wildlife/",
	// 			'imgPath'  		=> "/media/img/content/wildlife/",
	// 			'description'   => "Contemporary graffiti based sculptures, focusing on Wildlife, finely crafted with the greatest of detail and enhanced materials."
	// 		),
	// 		"section7" =>  array(
	// 			'title'    		=> "Shop",
	// 			'url'      		=> "/shop/",
	// 			'imgPath'  		=> "/media/img/content/shop/",
	// 			'description'   => "Shop items for sale by Kwest, graffiti artist based in Toronto Ontario Canada."
	// 		),
	// 		"section8" =>  array(
	// 			'title'    		=> "Instagram Feed",
	// 			'url'      		=> "/instagram/",
	// 			'imgPath'  		=> "/media/img/content/instagram/",
	// 			'description'   => "Kwest Instagram Feed"
	// 		),
	// 		"section9" =>  array(
	// 			'title'    		=> "Offcuts",
	// 			'url'      		=> "/offcuts/",
	// 			'imgPath'  		=> "/media/img/content/offcuts/",
	// 			'description'   => "A curated collection of Features, articles and resources for Kwest around the internet."
	// 		),
	// 	),

	// 	"copy" =>  array(
	// 		'top' => "Top of Page",
	// 		'chooseProject' => "Choose a Project:"

	// 	)

	// );

	//$rootUrl = $content['urls']['root'];
	//$siteTitle = $content['general']['title'];
	//$indexMeta = $content['general']['description'];
	//$keyz = $content['general']['keywords'];

?>