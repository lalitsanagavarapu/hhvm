<?hh
class dooh {
    public $blah;
}
<<__EntryPoint>> function main() {
$d = new dooh;
var_dump(is_subclass_of($d, 'dooh'));
}
