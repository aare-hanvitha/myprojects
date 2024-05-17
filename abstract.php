<?php
abstract class employees {
    abstract public function SetEmployeeId();
    public function EmployeeDetails(){
        return "We will get the employee details<br>";
    }
}

class ItEmployees extends employees{
    public function SetEmployeeId() {
        echo "IT_EmployeeID<br>";
    }

}

class NonItEmployees extends employees{
    public function SetEmployeeId() {
        echo "NonIT_EmployeeID<br>";
    }
    
}

$ITemp = new ItEmployees();
echo $ITemp->EmployeeDetails();
echo $ITemp->SetEmployeeId();

$NonITemp = new NonItEmployees();
echo $NonITemp->EmployeeDetails();
echo $NonITemp->SetEmployeeId();


?>