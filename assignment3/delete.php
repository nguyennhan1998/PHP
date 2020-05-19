<?php
if(!empty($_GET["id"])):
    $book = new \assignment3\Book();
    $book = $book->find($_GET["id"]);
    $book->delete();
    header("Location: ?route=books");// dieu huong tro lai trang danh sach
endif;