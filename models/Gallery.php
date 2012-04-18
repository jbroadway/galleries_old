<?php

namespace galleries;

class Gallery extends \Model {
	public $table = 'galleries';

	public $fields = array (
		'images' => array ('has_many' => 'galleries\Image')
	);

	public function cover () {
		if ($this->cover === 0) {
			$img = Image::query ()
				->where ('gallery', $this->id)
				->single ();
		} else {
			$img = new Image ($this->cover);
		}
		if (! $img) {
			return '/apps/galleries/css/missing.png';
		}
		return $img->image;
	}
}

?>