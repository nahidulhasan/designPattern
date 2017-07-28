<?php
/**
 * Created by PhpStorm.
 * User: Nahidul Hasan
 * Date: 08-Jul-17
 * Time: 8:27 PM
 */

class Stack{

    private $stk = [];

    public function push($data)
    {
        array_push($this->stk, $data);
    }

    public  function pop()
    {
        return array_pop($this->stk);
    }
}

$stObj = new Stack();

$stObj->push('Mamun');
$stObj->push('Maruf');
$stObj->push('test');

echo $stObj->pop();
echo $stObj->pop();
echo $stObj->pop();