<?hh
<<__EntryPoint>> function main() {
$n = gmp_nextprime(-1);
var_dump(gmp_strval($n));
$n = gmp_nextprime(0);
var_dump(gmp_strval($n));
$n = gmp_nextprime(-1000);
var_dump(gmp_strval($n));
$n = gmp_nextprime(1000);
var_dump(gmp_strval($n));
$n = gmp_nextprime(100000);
var_dump(gmp_strval($n));
$n = gmp_nextprime(array());
var_dump(gmp_strval($n));
$n = gmp_nextprime("");
var_dump(gmp_strval($n));
$n = gmp_nextprime(new stdclass());
var_dump(gmp_strval($n));
	
echo "Done\n";
}
