<?php

/**
 * Class Foo
 */
class Foo {

    /**
     * @method aStaticMethod
     */
    public static function aStaticMethod() {
        echo "Called a static function '<strong>". __FUNCTION__."</strong>' in class". __CLASS__;
    }
}
Foo::aStaticMethod();
?>