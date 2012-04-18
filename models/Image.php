<?php

namespace galleries;

class Image extends \Model {
	public $table = 'galleries_image';

	public $fields = array (
		'gallery' => array ('belongs_to' => 'galleries\Gallery')
	);
}

?>