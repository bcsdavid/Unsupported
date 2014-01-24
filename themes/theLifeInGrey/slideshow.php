<?php header('Last-Modified: ' . gmdate('D, d M Y H:i:s').' GMT'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo getBareGalleryTitle(); ?></title>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo getOption('charset'); ?>" />
	<?php zenJavascript(); ?>
	<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/design/slideshow.css" type="text/css" />
	<?php printSlideShowJS(); ?>
</head>

<body>
	<div id="slideshowpage">
			<?php printSlideShow(true,true); ?>
	</div>

</body>
</html>