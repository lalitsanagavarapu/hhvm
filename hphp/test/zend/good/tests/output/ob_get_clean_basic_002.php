<?hh
/* 
 * proto bool ob_get_clean(void)
 * Function is implemented in main/output.c
*/ 
<<__EntryPoint>> function main() {
ob_start();

echo "Hello World";

$out = ob_get_clean();
$out = strtolower($out);

var_dump($out);
}
