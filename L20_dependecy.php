<?php

//Change Everything from starting.
class Course{
    public $cid;

    function __construct($cid){
        
        $this->cid = $cid;
        
    }
}

class Lesson extends Course{
    
    public $lid;
    function __construct($lid, Course $c){

        $this->lid = $lid;

        $this->cid = $c->cid;

    }

    function showLessons(){

        echo "Here are the lessons <br>";

    }
}

class Quiz extends Course{
    
    public $qid;
    function __construct($qid, Course $c)
    {
        $this->qid = $qid;
        
        $this->cid = $c->cid;
    }
}



$course = new Course(1);

$lesson = new Lesson(100, $course);

$quiz= new Quiz(200, $course);

echo "Lesson ID:" . $course->cid . "<br>";
