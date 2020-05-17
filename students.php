<?php
$json_str=file_get_contents("data/students.json");
//chuoi json chuan
$students=json_decode($json_str);
//chuyen thanh mang doi tuong students
//chuan resful