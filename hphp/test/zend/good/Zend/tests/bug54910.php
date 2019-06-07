<?hh
class A {
    public function __call($method, $args) {
        if (stripos($method, 'get') === 0) {
            return $this->get();
        }
        die("No such method - '$method'\n");
    }

    protected function get() {
        $class = get_class($this);
        $call = array($class, 'noSuchMethod');

        //if (is_callable($call)) {
            $call();
        //}
    }
}

class B extends A {}
<<__EntryPoint>> function main() {
$input = new B();
echo $input->getEmail();
}
