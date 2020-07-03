<?php

require_once "Course.php";
require_once "Lesson.php";

$course = new Course(100, "OOP Basics");

$course1 = new Course(200, "Inheritance");

$lesson = new Lesson(101, "What is OOP?", $course1);
$lesson->printCourseDetails();
$lesson->printLessonDetails();

