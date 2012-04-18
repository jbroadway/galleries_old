<?php

require_once ('apps/filemanager/lib/Functions.php');

if (count ($this->params) === 0) {
	$page->title = i18n_get ($appconf['Galleries']['title']);
	$page->add_style ('/apps/galleries/css/style.css');
	
	echo $tpl->render ('galleries/index', array (
		'galleries' => galleries\Gallery::query ()
			->order ('sort', 'desc')
			->fetch ()
	));
	return;
}

$gallery = new galleries\Gallery ($this->params[0]);
info ($gallery);

?>