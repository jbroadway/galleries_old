<?php

$page->layout = 'admin';

$this->require_admin ();

if ($this->installed ('galleries', $appconf['Admin']['version']) === true) {
	$page->title = 'Already up-to-date';
	echo '<p><a href="/">Home</a></p>';
	return;
}

$page->title = 'Upgrading app: galleries';

echo '<p>Done.</p>';

$this->mark_installed ('galleries', $appconf['Admin']['version']);

?>