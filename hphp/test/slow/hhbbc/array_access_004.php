<?hh

class X implements ArrayAccess {
  function offsetExists($offset) { return false; }
  function offsetGet($offset) { return 1; }
  function offsetSet($offset, $value) { return 1; }
  function offsetUnset($offset) { return; }

  public function __construct() {
    $y = ($this[new stdclass] = 2);
    var_dump(is_int($y));
    var_dump($y);
  }
}

function foo() {
  (new X)->__construct();
}


<<__EntryPoint>>
function main_array_access_004() {
foo();
}
