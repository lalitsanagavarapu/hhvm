<?hh
<<__EntryPoint>> function main() {
$object = new ArrayIterator;
$object->append(1);

foreach($object as $key => $value)
{
	$object->offsetUnset($key);
}

echo "===DONE===\n";
}
