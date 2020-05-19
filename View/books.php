<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sách</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<h1>Danh sách sách</h1>
<?php
$book = new \Model\Book();
$current = $_SESSION['book'];
?>
<?php foreach ($book->getBooks() as $s): // ket hop ma html - php  // goi thuoc tinh cua doi tuong dung ky hieu -> ?>
    <ul>
        <li><a href="?route=edit&id=<?php echo $s["id"]; ?>"><?php echo $s["name"] ?></a></li>
        <li><?php echo $s["category"] ?></li>
        <li><a href="?route=delete&id=<?php echo $s["id"]; ?>">delete</a></li>
    </ul>
<?php endforeach;// lam the nay de khoi lan voi dau {} cua bon khac nhu if else ... ?>

</body>
</html>
