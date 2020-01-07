<?php
namespace Employee;
use EmployeeMethods;
include ('../traits/loans.php');
include ('../interfaces/interfaces.php');
class Location
{
    public $city;          //properties
    public $street;
    public $houseNo;

    public function getLocation($city, $street, $houseNo) // class methods›
    {
        return array($city, $street, $houseNo);
    }
}

class Employee extends Location implements EmployeeMethods
{
    use Loan;
    private $name;
    private $emp_Id;
    private $position;
    private $salary;
    private $location;

    public function _construct()
    {

    }

//   getter
    public function getEmpId()
    {
        return $this->emp_Id;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

//    setters
    public function setEmpId($emp_Id)
    {
        $this->emp_Id = $emp_Id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function displayName($name)
    {
        return $name;
    }

    public function displaySalary($salary)
    {
        return $salary;
    }
}

$software_dev = new Employee();
$software_dev->setEmpId("CYT1987");
$software_dev->setName("Cetric Okola");
$software_dev->setSalary(20000);
$software_dev->setPosition("Software Intern");
$city = $software_dev->city = "Nairobi";
$street = $software_dev->street = "Kasarani-Hunters";
$house_no = $software_dev->houseNo = "C13";
$name = $software_dev->displayName($software_dev->getName());
$salary = $software_dev->displaySalary($software_dev->getSalary());
$software_dev->getLocation($city, $street, $house_no);
$loanAmount = $software_dev->calculateLoans(250000, 10,11.5);
$monthly_installments = $software_dev->calculateInstallmentAmount(250000, 10,11.5);
echo "Employee Loan Amount $loanAmount";
echo "";
echo "Loan repayment amount chunks $monthly_installments";
var_dump($software_dev->calculateInstallmentAmount());
