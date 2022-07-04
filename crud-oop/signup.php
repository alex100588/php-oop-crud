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
            <form action="signupProcess.php" method="post">
                <label class="text-white mb-1" for="fname">First Name:</label>
                <input class="form-control mb-5" type="text" id="fname" name="firstname" placeholder="Your name..">
    
                <label class="text-white mb-1" for="lname">Last Name:</label>
                <input class="form-control mb-5" type="text" id="lname" name="lastname" placeholder="Your last name..">
    
                <label class="text-white mb-1" for="adress">First Name:</label>
                <input class="form-control mb-5" type="text" id="lname" name="adress" placeholder="Your adress..">
    
                <input class="btn btn-success mt-2" type="submit" value="Save" name="save">
            </form>
        </div>
    </div>
</body>
</html>