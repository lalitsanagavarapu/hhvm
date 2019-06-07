<?hh <<__EntryPoint>> function main() {
$tz = new DateTimeZone('Europe/Berlin');

echo "FROM TIMESTAMP, NO TZ:\n";

$date = new DateTime('@'.strtotime('2012-08-22 00:00:00 CEST'));
echo $date->format('Y-m-d H:i:s T').' (offset '.$date->getOffset().")\n";

$date->modify('+0 days');
echo $date->format('Y-m-d H:i:s T').' (offset '.$date->getOffset().")\n";

echo "FROM TIMESTAMP, WITH TZ:\n";

$date = new DateTime('@'.strtotime('2012-08-22 00:00:00 CEST'));
$date->setTimezone($tz);
echo $date->format('Y-m-d H:i:s T').' (offset '.$date->getOffset().")\n";

$date->modify('+0 days');
echo $date->format('Y-m-d H:i:s T').' (offset '.$date->getOffset().")\n";

echo "FROM STRING:\n";

$date = new DateTime('2012-08-22 00:00:00 CEST', $tz);
echo $date->format('Y-m-d H:i:s T').' (offset '.$date->getOffset().")\n";

$date->modify('+0 days');
echo $date->format('Y-m-d H:i:s T').' (offset '.$date->getOffset().")\n";
}
