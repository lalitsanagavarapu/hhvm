<?hh <<__EntryPoint>> function main() {
$dom = new DOMDocument('1.0');
$ref = $dom->createEntityReference('nbsp');
$dom->appendChild($ref);
echo $dom->saveXML();
}
