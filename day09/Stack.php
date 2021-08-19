<?php
class Stack {
    public $stack;
    public $limit;

    public function __construct($limit = 10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item){
        if (count ($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);

        }else {
            throw new RuntimeException('Stack is full!');
        }

      
    }
    public function pop() {
        if ($this->isEmpty()) {
            
            throw new RuntimeException('Stack is Empty!');
        } else {
            return array_shift($this->stack);
        }
    }
    public function top(){
        return current($this->stack);
    }

    public function isEmpty(){
        return empty($this->stack);
    }
}


$sumAbs = new Stack();

$sumAbs->push(0);
$sumAbs->push(2);
$sumAbs->push(4);
$sumAbs->push(8);
$sumAbs->push(10);
echo $sumAbs->pop() . '<br>';
echo $sumAbs->pop() . '<br>';
echo $sumAbs->pop() . '<br>';
$sumAbs->push(5);
$sumAbs->push(3);

echo $sumAbs->pop(). '<br>';
echo $sumAbs->pop() . '<br>';
echo $sumAbs->pop() . '<br>';
echo $sumAbs->pop() . '<br>';
$sumAbs->push(1);
