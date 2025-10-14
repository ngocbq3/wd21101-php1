<?php

include "Animal.php";
include "Dog.php";
require "Person.php";
require_once "Student.php";

$animal1 = new Animal("Cậu vàng", "Vàng", 10);

$animal1->run();

$animal2 = new Animal("Cún cưng", 'Đen', 7);
$animal2->run();

$scupidu = new Dog('Scupidu', 'vàng', 50);
// $scupidu->name = "Squibit";
$scupidu->setName('Long long');
$scupidu->setColor('Đen');
$scupidu->run();

$student1 = new Student('Nguyễn Văn An', '12/12/2005', 'Hà Nội', 'ph01234', 'nam', 'annv@gmail.com', 9);

$student2 = new Student('Nguyễn Văn Long', '12/12/2004', 'Hà Nội', 'ph01235', 'nam', 'longnv@gmail.com', 5.5);

$student3 = new Student('Trịnh Thị Mùi', '12/2/2005', 'Hà Nội', 'ph01236', 'nữ', 'muitt@gmail.com', 10);

$student1->info();
$student2->info();
$student3->info();
