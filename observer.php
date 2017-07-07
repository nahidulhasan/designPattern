<?php

/*
 * Defines a one-to-many dependency between objects so that
 *  when one object changes state, all its dependents are notified and updated automatically.
 */

interface Subject{
    public function attach($observable);
    public function detach($index);
    public function notify();
}

interface Observer{
    public function handle();
}

class Login implements Subject{

    protected $observers = [];

    public function attach($observable)
    {
        if(is_array($observable))
        {

          return  $this->attachObservers($observable);
        }

        $this->observers[] = $observable;

        return $this;

    }
    public function detach($index)
    {
       unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach($this->observers as $observer)
        {
            $observer->handle();
        }
    }

    /**
     * @param $observable
     * @throws exception
     */
    public function attachObservers($observable)
    {
        foreach ($observable as $observer) {
            if (!$observer instanceof Observer)
                throw new exception;
            $this->attach($observer);
        }
    }

    public function fire()
    {
        $this->notify();
    }

}

class LogHandler implements Observer{

    public function handle()
    {
        var_dump('Log Something Important');
    }

}

class EmailNotifier implements Observer{

    public function handle()
    {
        var_dump('Fire off an email');
    }

}

class LoginReporter implements Observer{

    public function handle()
    {
        var_dump('Do some for reporting');
    }

}

$login = new Login();
$login->attach([
    new LogHandler,
    new EmailNotifier,
    new LoginReporter
]);

$login->fire();