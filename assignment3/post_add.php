<?php
if(count($_POST) > 0):

// nhan thong tin tu form
    $name = $_POST['name'];
    $category = $_POST['category'];

    // insert to table
    $book = new \assignment3\Book(null,$name,$category);
    $book->save();

    header("Location: ?route=books");// dieu huong tro lai trang danh sach
endif;
