<?hh

class Test {
    function func($x, $y = NULL){
    }
}

<<__EntryPoint>> function main() {
$f = new ReflectionMethod('Test', 'func');
var_dump($f->getNumberOfParameters());
var_dump($f->getNumberOfRequiredParameters());

$p = new ReflectionParameter(array('Test', 'func'), 'x');
var_dump($p->isOptional());

$p = new ReflectionParameter(array('Test', 'func'), 'y');
var_dump($p->isOptional());

try {
    $p = new ReflectionParameter(array('Test', 'func'), 'z');
    var_dump($p->isOptional());
}
catch (Exception $e) {
    var_dump($e->getMessage());
}

echo "===DONE===\n";
}
