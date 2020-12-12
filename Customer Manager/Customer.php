<?php
class Customer{
    private $name;
    private $birth;
    private $phone;
    private $address;
    
    public function __construct($name, $birth, $phone, $address)
    {
        $this->name = $name;
        $this->birth = $birth;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBirth()
    {
        return $this->birth;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getAddress()
    {
        return $this->address;
    }

}