<?hh

class pass {
    protected static function show() {
        echo "Call pass::show()\n";
    }

    public static function do_show() {
        pass::show();
    }
}

class fail {
    public static function show() {
        echo "Call fail::show()\n";
        pass::show();
    }
}

<<__EntryPoint>> function main() {
pass::do_show();

fail::show();

echo "Done\n"; // shouldn't be displayed
}
