<?hh <<__EntryPoint>> function main() {
date_default_timezone_set("Europe/Oslo");

echo date(DATE_ATOM, strtotime('2006-01-31T19:23:56Z')) . "\n";
echo date(DATE_ATOM, strtotime('2006-01-31T19:23:56')) . "\n";
}
