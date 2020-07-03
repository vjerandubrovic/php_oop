<?php 

declare(strict_types=1);

require_once "L11.1_university.php";

require_once "L11.2_teacher.php";

$university1 = new University("Boston1 University", "Europa2", "ABC123");

$university2 = new University("Boston2 University", "Europa2", "ABC456");

$teacher1 = new Teacher("John", 45, "Maths", $university1);

$teacher2 = new Teacher("Jane", 32, "Physics", $university2);

$teacher1->printTeacherDetails();

$teacher1->printUniversityDetails();

echo "-------------------------------------- <br>";

$teacher2->printTeacherDetails();

$teacher2->printUniversityDetails();

?>