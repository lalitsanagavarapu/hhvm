<?hh <<__EntryPoint>> function main() {
$inputFileName = dirname(__FILE__)."/004.txt.gz";
$outputFileName = __FILE__.'.tmp';

$srcFile = "compress.zlib://$inputFileName";
$destFile = $outputFileName;
copy($srcFile, $destFile);

$h = gzopen($inputFileName, 'r');
$org_data = gzread($h, 4096);
gzclose($h);

// can only read uncompressed data
$h = fopen($outputFileName, 'r');
$copied_data = fread($h, 4096);
gzclose($h);

if ($org_data == $copied_data) {
   echo "OK: Copy identical\n";
}
else {
   echo "FAILED: Copy not identical";
}
unlink($outputFileName);
echo "===DONE===\n";
}
