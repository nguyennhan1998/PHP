<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Danh sach hoc sinh</title>
</head>
<body>
<h1> thong tin sinh vien</h1>
<?php
include_once("students.php");

?>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">name</th>
        <th scope="col">age</th>
        <th scope="col">mark</th>
        <th scope="col">address</th>
        <th scope="col">phonenumber</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($students as $s):?>
        <tr>
            <td><?php echo $s->name?></td>
            <td><?php echo $s->age?></td>
            <td><?php echo $s->mark?></td>
            <td><?php echo $s->address?></td>
            <td><?php echo $s->phonenumber?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
