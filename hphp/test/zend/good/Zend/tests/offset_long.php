<?hh
<<__EntryPoint>> function main() {
$long = 1;

var_dump($long[1]);
var_dump($long[0.0836]);
var_dump($long[NULL]);
var_dump($long["run away"]);

var_dump($long[TRUE]);
var_dump($long[FALSE]);

$fp = fopen(__FILE__, "r");
var_dump($long[$fp]);

$obj = new stdClass;
var_dump($long[$obj]);

$arr = array(1,2,3);
var_dump($long[$arr]);

echo "Done\n";
}
