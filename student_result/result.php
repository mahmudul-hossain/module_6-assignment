<?php

// Different marks of the student in different five subjects (If change the marks in any subject will also change the result)

$bangla = 90;
$english = 97;
$math = 84;
$physics = 71;
$chemistry = 42;

// Take this function name to calculate the student's result
calculateStudentResult($bangla, $english, $math, $physics, $chemistry);

// Used the function to calculate total marks, average marks and grade
function calculateStudentResult($bangla, $english, $math, $physics, $chemistry) {
    
    // Condition-1. Mark Range Validation to checked for invalid marks
    if ($bangla <0 || $bangla >100 || $english <0 || $english >100 || $math <0 || $math >100 || $physics <0 || $physics >100 || $chemistry <0 || $chemistry >100) {
        echo "Mark range is invalid.<br/>";
        return;
    }

    // Condition-2. Fail condition to check failure status (if condition-1 mark range is valid then this condition will check)
    if ($bangla <33 || $english <33 || $math <33 || $physics <33 || $chemistry <33) {
        echo "Student has failed.<br/>";
        return;
    }

    // Condition-3. Grade Calculation (if condition-2 doesn't fail in any subject then this condition will check)

    // Calculated total and average marks from subjects marks
    $total_mark = $bangla + $english + $math + $physics + $chemistry;
    $average_mark = $total_mark/5;

    // Calculated grade from average marks
    switch(true){
        case($average_mark<=100 && $average_mark>=80):
            $grade = 'A+';
        break;
    
        case($average_mark<80 && $average_mark>=70):
            $grade = 'A';
        break;
    
        case($average_mark<70 && $average_mark>=60):
            $grade = 'A-';
        break;
    
        case($average_mark<60 && $average_mark>=50):
            $grade = 'B';
        break;
    
        case($average_mark<50 && $average_mark>=40):
            $grade = 'C';
        break;
    
        case($average_mark<40 && $average_mark>=33):
            $grade = 'D';
        break;
    
        default:
        $grade = 'F';
    }

    // ALl output result as per requirements
    echo "Total Marks: $total_mark <br/>";
    echo "Average Marks: " . number_format($average_mark, 2) . "<br/>";
    echo "Grade: $grade <br/>";
}

?>