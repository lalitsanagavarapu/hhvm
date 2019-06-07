<?hh

interface i {
    function test();
}

class foo implements i {
    function test() {
        var_dump(get_parent_class());
    }
}

class bar extends foo {
    function test_bar() {
        var_dump(get_parent_class());
    }
}
<<__EntryPoint>> function main() {
$bar = new bar;
$foo = new foo;

$foo->test();
$bar->test();
$bar->test_bar();

var_dump(get_parent_class($bar));
var_dump(get_parent_class($foo));
var_dump(get_parent_class("bar"));
var_dump(get_parent_class("foo"));
var_dump(get_parent_class("i"));

var_dump(get_parent_class(""));
var_dump(get_parent_class("[[[["));
var_dump(get_parent_class(" "));
var_dump(get_parent_class(new stdclass));
var_dump(get_parent_class(array()));
var_dump(get_parent_class(1));

echo "Done\n";
}
