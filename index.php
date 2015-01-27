<?php
	require 'libs/controller.php';
	require 'libs/router.php';
	require 'libs/view.php';
	require 'libs/model.php';
	require 'config/db.php';
	require 'config/paths.php';
	echo ROOT_DIR;
	$app = new router();
?>