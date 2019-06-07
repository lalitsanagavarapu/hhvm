<?hh
/* Prototype  : string realpath(string path)
 * Description: Return the resolved path 
 * Source code: ext/standard/file.c
 * Alias to functions: 
 */
<<__EntryPoint>> function main() {
echo "*** Testing realpath() : variation ***\n";

$paths = array('c:\\', 
               'c:', 
               'c' , 
               '\\' , 
               '/', 
               'c:temp', 
               'c:\\/', 
               '/tmp/',
               '/tmp/\\', 
               '\\tmp',                 
               '\\tmp\\');

foreach($paths as $path) {
      echo "\n--$path--\n";
      var_dump( realpath($path) );
};

echo "===DONE===\n";
}
