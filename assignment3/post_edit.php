<?php
if(count($_POST) > 0):


// nhan thong tin tu form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category= $_POST['category'];

    // insert to table
    $book = new \assignment3\Book($id,$name,$category);
    $book->save();

    header("Location: ?route=books");// dieu huong tro lai trang danh sach
endif;
