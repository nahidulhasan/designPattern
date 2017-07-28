<?php
/**
 * Created by PhpStorm.
 * User: Nahidul Hasan
 * Date: 09-Jul-17
 * Time: 6:15 PM
 */

class Queue {

    protected $stack;
    protected $limit;

    public function __construct($limit = 5)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($data)
    {
        if(count($this->stack)< $this->limit){
            array_push($this->stack, $data);
        }else{
            throw new RuntimeException('Stack OverFlow');
        }

    }

    public function pop()
    {
        if(!empty($this->stack)) {
            return array_shift($this->stack);
        }else{
            throw new RuntimeException('Stack Empty');
        }
    }
}

$q = new Queue();

$q->push(5);
$q->push(7);
$q->push(8);
$q->push(10);
$q->push(15);
//$q->push(18);

echo $q->pop();
echo $q->pop();
echo $q->pop();
echo $q->pop();
echo $q->pop();
echo $q->pop();