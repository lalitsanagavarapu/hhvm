<?hh

class MyRecursiveFilterIterator extends RecursiveFilterIterator
{
    function accept()
    {
        return true;
    }
}
<<__EntryPoint>> function main() {
$ar = array(1, array(21, 22), 3);
$it = new RecursiveArrayIterator($ar);
$it = new MyRecursiveFilterIterator($it);
$it = new RecursiveIteratorIterator($it);

foreach($it as $k => $v)
{
    echo "===\n";
    var_dump($it->getDepth());
    var_dump($k);
    var_dump($v);
}

echo "===DONE===\n";
}
