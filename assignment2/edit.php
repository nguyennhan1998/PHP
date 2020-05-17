<?php require_once "Student.php" ;?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Edit</h1>
        <form action="post_edit.php" method="post">
            <?php
            $id = $_GET["id"];
            $student = new \assignment2\Student();
            $student = $student->find($id);
            ?>
            <input type="hidden" name="id" value="<?php echo $student->id;?>"/>
            <div class="form-group">
                <input class="form-control" value="<?php echo $student->name;?>" name="name" type="text" placeholder="Name"/>
            </div>
            <div class="form-group">
                <input class="form-control" value="<?php echo $student->age;?>" name="age" type="text" placeholder="Age"/>
            </div>
            <div class="form-group">
                <input class="form-control" value="<?php echo $student->mark;?>" name="mark" type="text" placeholder="Mark"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Update</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
