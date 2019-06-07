<?hh

class foo {
    static public function abc() {
        throw new Exception('foo');
    }
    public function __call($a, $b) {
        printf("From %s:\n", __METHOD__);
        throw new Exception($a);
    }
}

<<__EntryPoint>> function main() {
$arr = array('foo', 'abc');

try {
    $arr();
}
catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

echo "------\n";

$foo = new foo;
$arr = array($foo, 'abc');

try {
    $arr();
}
catch (Exception $e) {
    echo $e->getMessage(), "\n";
}


$foo = new foo;
$arr = array($foo, '123');

try {
    $arr();
}
catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
}
