<?php
$obj = new class () {
    public function sum($a, $b, $c)
    {
        echo "Difference=>" . $a - $b - $c . "<br>";
    }
    public function add($x, $y, $z)
    {
        echo "Total=> " . $x + $y + $z . "<br>";
    }
};
$obj->add(1, 2, 3);
$obj->sum(10, 2, 3);

//Using Interface

interface greeting
{
    public function greet($name);
}
$obj1 = new class () implements greeting {
    private $name;
    public function greet($name)
    {
        $this->name = $name;
        echo "Hi $this->name <br>";
    }
};
$obj1->greet("Dharanesh");

//Nesting an Anonymous Class
class MathOperation
{

    public function calculator($a, $b, $opr)
    {
        return new class ($a, $b, $opr) extends MathOperation {
            public $a, $b, $c, $x, $y;
            public function __construct($a, $b, $opr)
            {
                $this->a = $a;
                $this->b = $b;
                $this->c = $opr;
                if ($this->c == "Add") {
                    $this->add($this->a, $this->b);
                } elseif ($this->c == "Multiply") {
                    $this->multiply($this->a, $this->b);
                }
            }
            public function add($x, $y)
            {
                $this->x = $x;
                $this->y = $y;
                echo "Ur Answer >> " . $this->x + $this->y . "<br>";
            }
            public function multiply($x, $y)
            {
                $this->x = $x;
                $this->y = $y;
                echo "Ur Ansewer >> " . $this->x * $this->y . "<br>";
            }
        };
    }
}

$operation = new MathOperation();
$operation->calculator(5,19,"Multiply");