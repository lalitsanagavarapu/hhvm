<?hh <<__EntryPoint>> function main() {
echo "Basic test of POSIX posix_mknod function\n";
var_dump(posix_mknod('', 0, 0, 0));
echo "===DONE====";
}
