<?hh
class Test
{
   const FIRST = 1;
   const SECOND = 2;
   const THIRD = 3;

   protected static $array = [
       self::FIRST => 'first',
       'second',
       'third'
   ];

   public function __construct()
   {
       var_export(self::$array);
   }
}
<<__EntryPoint>> function main() {
$test = new Test();
}
