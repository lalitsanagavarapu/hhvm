<?hh
trait T1 {
  function foo() {echo "T1\n";}
}
trait T2 {
  function bar() {echo "T2\n";}
}
class C {
  use T1 {
    T1::foo insteadof T2;
  }
}

<<__EntryPoint>> function main() {}
