<?php

class Controller{

    public function login(){
        require_once "View/login.php";
    }

    public function postLogin(){
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $user = new \Model\User();
        $user = $user->attempt($email,$pwd);
        if(!is_null($user)){
            $_SESSION['user']= $user;
            header("Location: ?route=users");
        }else{
            header("Location: ?route=login");
        }
    }

    public function register(){
        require_once "View/register.php";
    }

    public function postRegister(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];

        // insert to table
        $user = new \Model\User(null,$name,$email,$pwd);
        $user->save();

        header("Location: ?route=users");// dieu huong tro lai trang danh sach
    }

    public function users(){
        require_once "View/users.php";
    }
    public function add(){
        require_once "View/add.php";
    }
    public function postAdd(){
        $name=$_POST['name'];
        $category=$_POST['categories'];
        $book=new \Model\Book(null,$name,$category);
        $book->save();
        header("Location:?rote=books");//dieu huong tro lai danh sach
    }
    public function books(){
        require_once "View/books.php";
    }
}
