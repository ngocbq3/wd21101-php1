<?php

class Student extends Person
{
    protected $id;
    protected $gender;
    protected $email;
    protected $point;

    public function __construct($name, $birthday, $address, $id, $gender, $email, $point)
    {
        parent::__construct($name, $birthday, $address);
        $this->id = $id;
        $this->gender = $gender;
        $this->point = $point;
        $this->email = $email;
    }

    //Hiển thị thông tin sinh viên
    public function info()
    {
        echo "Name: $this->name <br>";
        echo "ID: $this->id <br>";
        echo "Birthday: $this->birthday <br>";
        echo "Address: $this->address <br>";
        echo "Point: $this->point <br>";
    }
}
