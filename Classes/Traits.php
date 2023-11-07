<?php
trait logger
{
    public function log()
    {
        echo "Logged: " . __CLASS__ . "<br>";
    }
}
class Users
{
    use logger;
}
class Product
{
    use Logger;
}

trait Author
{
    public function writeContent()
    {
        echo "Creation Process Ongoing...<br>";
    }
}
trait Editor
{
    public function reviewContent()
    {
        echo "Review Process Ongoing...<br>";
    }
}

class ContentCreator
{
    use Author {
        writeContent as editContent;
    }
    public function editContent()
    {
        echo "Creation Process Stars...<br>";
        $this->writeContent();
        echo "Creation Process End... <br>";
    }
}
class ReviewContent
{
    use Editor {
        reviewContent as reviewStart;
    }
    public function reviewStart()
    {
        echo "Review Process Stars...<br>";
        $this->reviewContent();
        echo "Review Process End... <br>";
    }
}

trait ShopA
{
    public function mobile()
    {
        echo "BRAND AVAILABLE[ShopA]  : <BR>";
        echo "1)Vivo <br> 2)RealMe <br> 4)Infinix <br>";
    }
    public function laptop()
    {
        echo "BRAND AVAILABLE[ShopA] : <br>";
        echo "1]Lenovo <br>2]HP <br>3]Dell <br>4]Asus <br>";
    }
}
trait ShopB
{
    public function mobile()
    {
        echo "BRAND AVAILABLE[ShopB] : <BR>";
        echo "1)Vivo <br> 2)RealMe <br> 3)Redmi <br> 4)Infinix <br>";
    }
    public function laptop()
    {
        echo "BRAND AVAILABLE[ShopB] : <br>";
        echo "1]Lenovo <br>2]HP <br>3]Dell <br>";
    }
}

class Buyer
{
    use ShopA, ShopB {
        ShopB::mobile insteadof ShopA;
        ShopA::laptop insteadof ShopB;
    }
}

//Abstract Trait Member

trait login
{
    abstract public function log($name);
}
class FileLogger
{
    use login;
    public $name;
    public function log($name)
    {
        echo "Hi $this->name=$name, your are in " . __CLASS__ . " Class<br>";
    }
}
class DatabaseLogger
{
    use Login;
    public $name;
    public function log($name)
    {
        $this->name=$name;
        echo "Hi $this->name, your are in " . __CLASS__ . " Class<br>";
    }
}