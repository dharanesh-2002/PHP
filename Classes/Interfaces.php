<?php

interface Data
{
    public function setData($name, $rollNo, $place);
    public function getData();
}
interface Check5 extends Data
{
    public function verify();
}
class LoadData implements Data
{
    public $name, $rollNo, $place;
    public function setData($name, $rollNo, $place)
    {
        $this->name = $name;
        $this->rollNo = $rollNo;
        $this->place = $place;
    }
    public function getData()
    {
        echo "Name :$this->name <br> RollNo :$this->rollNo <br> Place :$this->place <br><br><br>";
    }
}
class VerifyData implements Check5
{
    public $name, $rollNo, $place;
    public function setData($name, $rollNo, $place)
    {
        $this->name = $name;
        $this->rollNo = $rollNo;
        $this->place = $place;
    }
    public function getData()
    {
        echo "Name :$this->name <br> RollNo :$this->rollNo <br> Place :$this->place <br><br><br>";
    }
    public function verify()
    {
        if ($this->name == "King" & $this->rollNo == 21) {
            $this->getData();
        } else {
            echo <<<PRINT
            Data Not found!!!!!
            PRINT;
            echo "<br>";
        }
    }
}

//Mutliple interface inheritance
interface LandTransport
{
    public function startDriving();
    public function stopDriving();
}
interface AirTransport
{
    public function takeOff();
    public function land();
}
interface WaterTransport extends LandTransport, AirTransport
{
    public function startSail();
    public function stopSail();
}
class MultiTransport implements WaterTransport
{
    public function startDriving()
    {
        echo "MultiTransport started driving on land.<br>";
    }
    public function stopDriving()
    {
        echo "MultiTransport stopped driving on land.<br>";
    }
    public function takeOff()
    {
        echo "MultiTransport took off in air.<br>";

    }
    public function land()
    {
        echo "MultiTransport landed from the air.<br>";

    }
    public function startSail()
    {
        echo "MultiTransport started sailing  in the Water.<br>";

    }
    public function stopSail()
    {
        echo "MultiTransport stopped sailing  in the Water.<br>";

    }
}
