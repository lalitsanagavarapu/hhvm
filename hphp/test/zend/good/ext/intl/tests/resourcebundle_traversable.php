<?hh
	include "resourcebundle.inc";

	$r = new ResourceBundle( 'es', $bundle );

	// This is actually HH\Traversable due to autoimport
	var_dump($r instanceof Traversable);
	var_dump(iterator_to_array($r->get('testarray')));
