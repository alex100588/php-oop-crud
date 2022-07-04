<?php

require_once 'signupConfig.php';

$record = new SignupConfig();

if(isset($_GET['id']) ){
    
        $record->setId($_GET['id']);
        $record->delete();
        echo "<script>alert('data deleted successufully');document.location='allData.php'</script>";
    
}


// echo '<pre>';
// var_dump($record);