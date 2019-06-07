<?hh
<<__EntryPoint>> function main() {
$xml =<<<EOF
<?xml version='1.0'?>
<!DOCTYPE sxe SYSTEM "notfound.dtd">
<sxe id="elem1">
 Plain text.
 <elem1 attr1='first'>
  Bla bla 1.
  <!-- comment -->
  <elem2>
   Here we have some text data.
   <elem3>
    And here some more.
    <elem4>
     Wow once again.
    </elem4>
   </elem3>
  </elem2>
 </elem1>
 <elem11 attr2='second'>
  Bla bla 2.
  <elem111>
   Foo Bar
  </elem111>
 </elem11>
</sxe>
EOF;

$sxe = simplexml_load_string((binary)$xml, 'SimpleXMLIterator');

foreach(new RecursiveIteratorIterator($sxe, 1) as $name => $data) {
	var_dump($name);
	var_dump(get_class($data));
	var_dump(trim((string)$data));
}

echo "===DUMP===\n";

var_dump(get_class($sxe));
var_dump(trim((string)$sxe->elem1));

echo "===DONE===\n";
}
