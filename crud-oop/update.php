<?php

require_once 'signupConfig.php';

$data = new SignupConfig();
$id = $_GET['id'];
$data->setId($id);


if(isset($_POST['update'])){
    $data->setFirstName($_POST['firstname']);
    $data->setLastName($_POST['lastname']);
    $data->setAdress($_POST['adress']);
    echo $data->update();

    echo "<script>alert('data updated successufully');document.location='allData.php'</script>";
}

$record = $data->fetchOne();
$val = $record[0];
// echo '<pre>';
// var_dump($val);

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
    <h3 class="text-center mt-5">Fill out the information</h3>

    <div class=" m-5">

        <div class="bg-secondary mx-5 p-5">
            <form action="" method="post">
                <label class="text-white mb-1" for="fname">First Name:</label>
                <input class="form-control mb-5" type="text" id="fname" name="firstname" value="<?php echo $val['firstname']; ?>">
    
                <label class="text-white mb-1" for="lname">Last Name:</label>
                <input class="form-control mb-5" type="text" id="lname" name="lastname" value="<?php echo $val['lastname']; ?>">
    
                <label class="text-white mb-1" for="adress">First Name:</label>
                <input class="form-control mb-5" type="text" id="lname" name="adress" value="<?php echo $val['adress']; ?>">
    
                <input class="btn btn-success mt-2" type="submit" value="UPDATE" name="update">
            </form>
        </div>
    </div>
</body>
</html>