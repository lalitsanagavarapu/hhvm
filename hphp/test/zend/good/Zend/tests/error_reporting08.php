<?hh

function foo1($arg) {
}

function foo2($arg) {
}

function foo3($arg) {
    error_reporting(E_ALL|E_STRICT);
    echo $undef3;
    throw new Exception("test");
}
<<__EntryPoint>> function main() {
error_reporting(E_ALL);

try {
    @foo1(@foo2(@foo3(1)));
} catch (Exception $e) {
}

var_dump(error_reporting());

echo "Done\n";
}
