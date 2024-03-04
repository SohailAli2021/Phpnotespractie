<?php
class Employee
{
    public $name;
    public $age;





    function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    
    }


    function info()
    {
        echo "<h2>Employee Profile</h2>";
        echo "Employee name is".$this->name."<br>";
        echo "Employee Age is".$this->age."<br>";
    }

}

Class Manager extends Employee{

    public  $salary;

    function __construct($salary)
    {
        $this->salary=$salary;
    }

    function info()
    {
        echo "Manager Salary is ".$this->salary."<br>";
    }
}


class Worker extends Employee{
    public $salary;

    function __construct($salary)
    {
        $this->salary=$salary;
    }

    function info()
    {
        echo "Worker Salary is ".$this->salary."<br>";
    }
}

$emp = new  Employee("Aslam",34);
$emp->info();
$manager = new Manager(120000);
$manager->info();



$emp1 = new Employee("Shan",34);
$emp1->info();
$worker = new Worker(120009);
$worker->info();


?>