<?hh

class A {
    function foo() {
        $f = static function() {
            return static::class;
        };
        return $f();
    }
}

class B extends A {}
<<__EntryPoint>> function main() {
$b = new B;

var_dump($b->foo());
}
