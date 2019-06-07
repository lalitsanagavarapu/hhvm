<?hh <<__EntryPoint>> function main() {
$data = "openssl_decrypt() tests";
$method = "AES-128-CBC";
$password = "openssl";
$wrong = "wrong";
$iv = str_repeat("\0", openssl_cipher_iv_length($method));

$encrypted = openssl_encrypt($data, $method, $password);
var_dump($encrypted); /* Not passing $iv should be the same as all-NULL iv, but with a warning */
var_dump(openssl_encrypt($data, $method, $password, 0, $iv));
var_dump(openssl_decrypt($encrypted, $method, $wrong));
var_dump(openssl_decrypt($encrypted, $wrong, $password));
var_dump(openssl_decrypt($wrong, $method, $password));
var_dump(openssl_decrypt($wrong, $wrong, $password));
var_dump(openssl_decrypt($encrypted, $wrong, $wrong));
var_dump(openssl_decrypt($wrong, $wrong, $wrong));
try { var_dump(openssl_decrypt(array(), $method, $password)); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; }
try { var_dump(openssl_decrypt($encrypted, array(), $password)); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; }
try { var_dump(openssl_decrypt($encrypted, $method, array())); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; }

// invalid using of an authentication tag
var_dump(openssl_encrypt($data, $method, $password, 0, $iv, &$wrong));
}
