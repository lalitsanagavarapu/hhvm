<?hh

class foo extends ArrayObject
{
    public function offsetGet($key)
    {
        echo __METHOD__ . "($key)\n";
        throw new Exception("hi");
    }
}
<<__EntryPoint>> function main() {
$test = new foo();

try
{
    var_dump($test['bar']);
}
catch (Exception $e)
{
    echo "got exception\n";
}

echo "===DONE===\n";
}
