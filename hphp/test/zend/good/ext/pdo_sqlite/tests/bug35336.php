<?hh
class EEE {
    function __set ($field, $value) {
        echo "hello world\n";
    }
}
<<__EntryPoint>> function main() {
$a = new PDO("sqlite::memory:");// pool ("sqlite::memory:");
$a->query ("CREATE TABLE test (a integer primary key, b text)");
$b = $a->prepare("insert into test (b) values (?)");
$b->execute(array (5));
$rez = $a->query ("SELECT * FROM test")->fetchAll(PDO::FETCH_CLASS, 'EEE');

echo "Done\n";
}
