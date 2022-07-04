<?php

if(isset($_POST['save'])){
    require_once('signupConfig.php');
    $sc = new SignupConfig();

    $sc->setFirstName($_POST['firstname']);
    $sc->setLastName($_POST['lastname']);
    $sc->setAdress($_POST['adress']);
    $sc->create();

    echo "<script>alert('data saved successufully');document.location='allData.php'</script>";
}