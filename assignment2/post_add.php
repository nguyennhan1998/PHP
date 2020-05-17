<?php
if(count($_POST) > 0):
    require_once "Student.php";

// nhan thong tin tu form
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mark = $_POST['mark'];

    // insert to table
    $student = new \assignment2\Student(null,$name,$age,$mark);
    $student->save();

    header("Location: students.php");// dieu huong tro lai trang danh sach
endif;
