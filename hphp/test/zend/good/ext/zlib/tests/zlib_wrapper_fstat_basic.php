<?hh <<__EntryPoint>> function main() {
$f = dirname(__FILE__)."/004.txt.gz";
$h = gzopen($f, "r");
var_dump(fstat($h));
fclose($h);
echo "===DONE===\n";
}
