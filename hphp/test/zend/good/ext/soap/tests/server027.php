<?hh
class Foo {

  function Foo() {
  }

  function test() {
    return $this->str;
  }
}
<<__EntryPoint>> function main() {
$foo = new Foo();
$server = new SoapServer(null,array('uri'=>"http://testuri.org"));
$server->setObject($foo);
var_dump($server->getfunctions());
echo "ok\n";
}
