<?hh <<__EntryPoint>> function main() {
$x = array();
$x[] = clone new stdclass;
$x[] = clone new stdclass;
$x[] = clone new stdclass;

$x[0]->a = 1;

var_dump($x);
}
