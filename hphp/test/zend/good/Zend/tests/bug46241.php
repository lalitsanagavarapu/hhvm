<?hh

class ErrorHandling
{
    public function errorHandler1( $errno, $errstr )
    {
        echo "Caught on first level: '$errstr'\n";
        return true;
    }

    public function errorHandler2( $errno, $errstr )
    {
        echo "Caught on second level: '$errstr'\n";
        return true;
    }
}

function errorHandler1( $errno, $errstr )
{
    echo "Caught on first level: '$errstr'\n";
    return true;
}

function errorHandler2( $errno, $errstr )
{
    echo "Caught on second level: '$errstr'\n";
    return true;
}
<<__EntryPoint>> function main() {
$err = new ErrorHandling();

set_error_handler( array( $err, 'errorHandler1' ) );
set_error_handler( array( $err, 'errorHandler2' ) );

trigger_error( 'Foo', E_USER_WARNING );

set_error_handler( 'errorHandler1' );
set_error_handler( 'errorHandler2' );

trigger_error( 'Foo', E_USER_WARNING );

echo "==END==";
}
