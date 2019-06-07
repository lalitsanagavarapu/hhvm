<?hh
/* Prototype  : public string DateTimeZone::getName  ( void  )
 * Description: Returns the name of the timezone
 * Source code: ext/date/php_date.c
 * Alias to functions: timezone_name_get()
 */
<<__EntryPoint>> function main() {
echo "*** Testing DateTimeZone::getName() : basic functionality ***\n";

//Set the default time zone 
date_default_timezone_set("GMT");

$tz1 = new DateTimeZone("Europe/London");
var_dump( $tz1->getName() );

$tz2 = new DateTimeZone("America/New_York");
var_dump( $tz2->getName() );

$tz3 = new DateTimeZone("America/Los_Angeles");
var_dump( $tz3->getName() );

echo "===DONE===\n";
}
