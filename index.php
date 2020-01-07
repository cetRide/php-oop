<!DOCTYPE html>
<html lang="">
<body>

<h1>My first PHP page</h1>
<?php
function __autoload($classname)
{
    $filename = "classes/" . $classname . ".php";
    require($filename);
}
use vehicles\vehicle;
use Employee\Employee;
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
$loanAmount = $software_dev->calculateLoans(250000, 10, 11.5);
$monthly_installments = $software_dev->calculateInstallmentAmount(250000, 10, 11.5);
echo "Employee Loan Amount $loanAmount";
echo "";
echo "Loan repayment amount chunks $monthly_installments";
var_dump($software_dev->calculateInstallmentAmount());
?>
</body>
</html>
