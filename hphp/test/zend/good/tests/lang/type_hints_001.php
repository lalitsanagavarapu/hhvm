<?hh

class Foo {
}

class Bar {
}

function type_hint_foo(Foo $a) {
}
<<__EntryPoint>> function main() {
$foo = new Foo;
$bar = new Bar;

type_hint_foo($foo);
type_hint_foo($bar);
}
