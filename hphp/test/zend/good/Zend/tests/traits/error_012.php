<?hh

trait foo {
    public function test() { return 3; }
}

class bar {
    use foo { test as protected; }
}
<<__EntryPoint>> function main() {
$x = new bar;
var_dump($x->test());
}
