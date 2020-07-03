<?php 



 class Student{

    public $html = "Html";
    public $css = "Css";
    public $php = "PHP";
    public $max = 100;
    public $min = 35;

    function examResults($htmlscore, $cssscore, $phpscore){

        if($htmlscore >= $this->min && $htmlscore < $this->max){

            echo "Has passed the $this->html with $htmlscore marks! <br>";

        }else{

            echo "Has failed the $this->html with $htmlscore marks! <br>";

        }

        if($cssscore >= $this->min && $cssscore < $this->max){

            echo "Has passed the $this->css with $cssscore marks! <br>";

        }else{

            echo "Has failed the $this->css with $cssscore marks! <br>";

        }

        if($phpscore >= $this->min && $phpscore < $this->max){

            echo "Has passed the $this->php with $phpscore marks! <br>";

        }else{

            echo "Has failed the $this->php with $phpscore marks! <br>";

        }

    }

 }

$student1 = new Student();

echo "Student1's result is: <br>";

$student1->examResults(80, 75, 101);

$student2 = new Student;

echo "Student2's result is: <br>";

$student2->examResults(40, 35, 30);

?>