<?hh
/* Do not change this test it is a README.TESTING example. */
<<__EntryPoint>> function main() {
$trans = array("hello"=>"hi", "hi"=>"hello", "a"=>"A", "world"=>"planet");
var_dump(strtr("# hi all, I said hello world! #", $trans));
}
