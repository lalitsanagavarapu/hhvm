<?hh

abstract class test_base
{
    abstract function func();
}

class test extends test_base
{
    function func()
    {
        echo __METHOD__ . "()\n";
    }
}
<<__EntryPoint>> function main() {
$o = new test;

$o->func();

call_user_func(array($o, 'test_base::func'));

echo "===DONE===\n";
}
