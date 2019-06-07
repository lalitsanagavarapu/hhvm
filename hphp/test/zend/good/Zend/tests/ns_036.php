<?hh
namespace A;
use A as B;
class ArrayObject {
    const STD_PROP_LIST = 2;
}
function f1($x = ArrayObject::STD_PROP_LIST) {
    \var_dump($x);
}
function f2($x = \ArrayObject::STD_PROP_LIST) {
    \var_dump($x);
}
function f3($x = \A\ArrayObject::STD_PROP_LIST) {
    \var_dump($x);
}
function f4($x = B\ArrayObject::STD_PROP_LIST) {
    \var_dump($x);
}
<<__EntryPoint>> function main() {
\var_dump(ArrayObject::STD_PROP_LIST);
\var_dump(\ArrayObject::STD_PROP_LIST);
\var_dump(B\ArrayObject::STD_PROP_LIST);
\var_dump(\A\ArrayObject::STD_PROP_LIST);
f1();
f2();
f3();
f4();
}
