<?hh <<__EntryPoint>> function main() {
$im = imagecreate(100, 100);
$black = imagecolorallocate($im, 0, 0, 0);
if (imagepolygon($im, array(0, 0, 0, 0, 0, 0), -1, $black)) echo "should be false";
imagedestroy($im);
}
