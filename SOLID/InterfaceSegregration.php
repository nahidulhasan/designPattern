<?php
/**
 *  A client should never be forced to implement an interface that it doesn’t use
 */

/*interface workerInterface{
    public  function work();
    public  function  sleep();
}


class HumanWorker implements workerInterface{

    public  function work()
    {
      var_dump('works');
    }
    public  function  sleep()
    {
        var_dump('sleep');
    }

}

class AndroidWorker implements workerInterface{

    public  function work()
    {
        var_dump('works');
    }
    public  function sleep()
    {
       // No need
    }
}*/

interface WorkAbleInterface{
    public  function work();
}

interface SleepAbleInterface{
    public  function  sleep();
}


class HumanWorker implements WorkAbleInterface, SleepAbleInterface{

    public  function work()
    {
        var_dump('works');
    }
    public  function  sleep()
    {
        var_dump('sleep');
    }

}

class AndroidWorker implements WorkAbleInterface{

    public  function work()
    {
        var_dump('works');
    }
    public  function  sleep()
    {
        // No need
    }
}
