<?hh
class Test {
    protected $x = array();

    function __get($name) {
        if (isset($this->x[$name])) {
            return $this->x[$name];
        }
        else
        {
            return NULL;
        }
    }

    function __set($name, $val) {
        $this->x[$name] = $val;
    }
}
<<__EntryPoint>> function main() {
$foo = new Test();
$bar = new Test();
$bar->baz = "Check";

$foo->bar = $bar;

var_dump($bar->baz);
var_dump($foo->bar->baz);

echo "===DONE===\n";
}
