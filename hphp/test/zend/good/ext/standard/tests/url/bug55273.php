<?hh
function test($s) {
    $v = chunk_split(base64_encode($s));
    $r = base64_decode($v, True);
    var_dump($v, $r);
}
<<__EntryPoint>> function main() {
test('PHP');
test('PH');
test('P');
}
