<?php
class Management{
    private $customers = [];
    private $file = 'data.json';
    public function __construct()
    {
        $this->load();
    }

    public function addCustomer($customer)
    {
        array_push($this->customers, $customer);
        $this->save();
    }

    public function getCustomers()
    {
        return $this->customers;
    }

    public function save(){
        $data = json_encode($this->customers);
        file_put_contents($this->file, $data);
    }

    public function load(){
        $data = file_get_contents($this->file);
        $this->customers = json_decode($data);
    }

}