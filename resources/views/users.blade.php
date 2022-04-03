<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        //2ta table er sathe realation one to one
        foreach ($users as $user) {
            echo '<pre>';
            echo $user->name; //username
            echo '<pre>';
            echo $user->profile->name; //profile name
            echo '<pre>';
            echo $user->email;
            echo '<pre>';
            echo $user->profile->telephone;
        }
        
    ?>
</body>
</html>