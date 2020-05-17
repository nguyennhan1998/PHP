<?php
require_once "Student.php";
if(!empty($_GET["id"])):
    $student = new \assignment2\Student();
    $student = $student->find($_GET["id"]);
    $student->delete();
    header("Location: students.php");// dieu huong tro lai trang danh sach
endif;
