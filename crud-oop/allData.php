<?php
require_once 'signupConfig.php';

$data = new SignupConfig();
$all = $data->read();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="bg-secondary pt-5">

        <h2 class="text-center">List of records</h2>
        <div class="text-center">
            <a class="btn btn-success " href="signup.php">add new</a>
        </div>
        <br>

        <div class="bg-primary px-5 mx-5">
            <table class="table">
                <tr >
                    <th>Users</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Adress</th>
                    <th>action</th>
                </tr>
                
                
                <?php foreach($all as $i =>$user){ ?>
                    <tr>
                       <td><?php echo $i ?></td> 
                       <td><?php echo $user['firstname'] ?></td> 
                       <td><?php echo $user['lastname'] ?></td> 
                       <td><?php echo $user['adress'] ?></td> 
                       <td>
                        <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $user['id']?>&req=delete">DELETE</a>
                        <a class="btn btn-warning btn-sm" href="update.php?id=<?php echo $user['id']?>">UPDATE</a>
                    </td>
                    </tr>
                <?php } ?>

            </table>
        </div>
    </div>

</body>
</html>