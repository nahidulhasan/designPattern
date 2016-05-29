<?php

/**
 * Define a family of algorithms, encapsulate each one, and make them interchangeable.
 * Strategy lets the algorithm vary independently from clients that use it.
 */

interface Logger{

    public function log($data);
}


// Define a family of algorithm

class LogToFile implements Logger{

    public function log($data)
    {

        var_dump('Log the data to a file');
    }
}

class LogToDatabase implements Logger{

    public function log($data)
    {

        var_dump('Log the data to database');
    }
}

class LogToXWebService implements Logger{

    public function log($data)
    {
        var_dump('Log the data to a Saas site');
    }
}


class App {

    public function log($data, Logger $logger = null){

        $logger = $logger ? : new LogToFile();
        $logger->log($data);
    }
}


$app = new App();

$app->log('Some information from here');

$app->log('Some information from here', new LogToDatabase());

$app->log('Some information from here', new LogToXWebService());