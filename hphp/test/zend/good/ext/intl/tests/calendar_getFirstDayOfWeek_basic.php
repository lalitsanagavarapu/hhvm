<?hh <<__EntryPoint>> function main() {
ini_set("intl.error_level", E_WARNING);
ini_set("intl.default_locale", "nl");

$intlcal = IntlCalendar::createInstance('UTC');
var_dump($intlcal->getFirstDayOfWeek());
var_dump(intlcal_get_first_day_of_week($intlcal));
echo "==DONE==";
}
