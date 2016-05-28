<?php

/**
 * Class Foo
 */
class Foo {

    /**
     * static variable
     *
     * @var string
     */
    public static $static_variable = "STATIC";
    /**
     * static method
     *
     * @method aStaticMethod
     */
    public static function aStaticMethod() {
        echo "Called a static function '<strong>". __FUNCTION__."</strong>' in class". __CLASS__;
    }
}

/**
 * Class Bar
 */
class Bar extends Foo {

    /**
     * static method
     *
     * @method anotherStatic
     */
    public static function anotherStatic(){
        echo parent::$static_variable;
        parent::aStaticMethod();
    }
}


Foo::aStaticMethod();
echo "</br>";
printf("Access static variable - %s",Foo::$static_variable);
echo "</br>";
Bar::anotherStatic();
?>