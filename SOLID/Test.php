<?php
/**
 * Testing git flow hotfix
 */

class Singleton {

    protected static $instance;

    protected function __construct()
    {

    }

    public static function getInstance()
    {
        if(!self::$instance){
            echo 'test1';
           return self::$instance = new self;
        }

        echo 'test2';
        return self::$instance;
    }
}


//var_dump(Singleton::getInstance());

class Foo extends Singleton{


    public function __wakeup()
    {

    }
};

var_dump(Foo::getInstance());
