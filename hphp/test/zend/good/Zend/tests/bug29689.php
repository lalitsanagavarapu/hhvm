<?hh
class foo {
    private $foo = 'foo';
    private $foo2 = 'foo2';

    function printFoo()
    {
        echo __CLASS__, ': ', $this->foo, " ", $this->foo2, "\n";
    }
}

class bar extends foo {
    protected $foo = 'bar';

    function printFoo()
    {
        parent::printFoo();
        echo __CLASS__, ': ', $this->foo, " ", $this->foo2, "\n";
    }
}

class baz extends bar {
    protected $foo = 'baz';
    protected $foo2 = 'baz2';
}

class bar2 extends foo {
    function printFoo()
    {
        parent::printFoo();
        echo __CLASS__, ': ', $this->foo, " ", $this->foo2, "\n";
    }
}

class baz2 extends bar2 {
    protected $foo = 'baz2';
    protected $foo2 = 'baz22';
}
<<__EntryPoint>> function main() {
$bar = new bar;
$bar->printFoo();
echo "---baz--\n";
$baz = new baz();
$baz->printFoo();
echo "---baz2--\n";
$baz = new baz2();
$baz->printFoo();
}
