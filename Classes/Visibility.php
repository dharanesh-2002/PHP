<?php
class Verification
{
    protected $name;
    private $password;
    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }
    public function verify()
    {
        if (($this->name == "Dharan") && ($this->password == "Don@123")) {
            return "Hello {$this->name}!!!, Welcome to your " . __CLASS__ . "<br>";
        } else {
            return "Invalid Name or Password";
        }
    }
}

class BankAccount
{
    protected  $balance = 1000;
    private $deposit;
    private $withdraw;
    public function __construct($deposit = null, $withdraw = null)
    {
        $this->deposit = $deposit;
        $this->withdraw = $withdraw;
        if ($this->deposit != null) {
            $this->deposit($this->deposit);
        } else {
            $this->withdraw($this->withdraw);
        }
    }
    protected function deposit($deposit)
    {
        $this->deposit = $deposit;
        $this->balance = $this->balance + $this->deposit;
    }
    protected function withdraw($withdraw)
    {
        $this->withdraw = $withdraw;
        $this->balance = $this->balance - $this->withdraw;
    }
    protected function balance(){
        return $this->balance;
    }
}
Class AccountBalance extends BankAccount{
    public function getBalance(){
        if ($this->balance <= 0) {
            return "You don't have sufficient Balance";
        } else {
            return "Your Account Balance is " . $this->balance();
        }
    }
}