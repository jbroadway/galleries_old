<?php

$this->require_admin ();

$page->layout = 'admin';

$page->title = i18n_get ('Galleries');

$galleries = galleries\Gallery::query ()
	->order ('sort', 'desc')
	->fetch ();

echo $tpl->render ('galleries/admin', array (
	'galleries' => $galleries
));

?>