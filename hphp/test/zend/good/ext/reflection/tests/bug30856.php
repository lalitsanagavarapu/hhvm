<?hh
class bogus {
        const C = 'test';
        static $a = bogus::C;
}
<<__EntryPoint>> function main() {
$class = new ReflectionClass('bogus');

var_dump($class->getStaticProperties());
echo "===DONE===\n";
}
