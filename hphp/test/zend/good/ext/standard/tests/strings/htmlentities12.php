<?hh <<__EntryPoint>> function main() {
print ini_get('default_charset')."\n";
var_dump(htmlentities("\xe4\xf6\xfc", ENT_QUOTES, ''));
}
