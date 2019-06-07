<?hh

class first {
    function show() {
        echo "Call to function first::show()\n";
    }
}

class second extends first {
    final function show() {
        echo "Call to function second::show()\n";
    }
}

<<__EntryPoint>> function main() {
$t = new first();
$t->show();

$t2 = new second();
$t2->show();

echo "Done\n";
}
