<?php

require_once 'database.php';

class SignupConfig{
    private $id;
    private $firstName;
    private $lastName;
    private $adress;
    protected $dbCnx;

    public function __construct($id=0, $firstName = '', $lastName='', $adress='')
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->adress = $adress;

        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER,DB_PWD,[ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setAdress($adress){
        $this->adress = $adress;
    }

    public function getAdress(){
        return $this->adress;
    }

    public function create(){
        try {
            $stm = $this->dbCnx->prepare("INSERT INTO users(firstName, lastName, adress) values(?,?,?)");
            $stm->execute([$this->firstName, $this->lastName,$this->adress]);
            echo "<script>alert('data saved successufully');document.location='allData.php'</script>";
        } catch (Exception $e) {
           return $e->getMessage();
        }
    }

    public function read(){
        try{
            $stm = $this->dbCnx->prepare("SELECT * FROM users ORDER BY adress ASC");
            $stm->execute();
            return $stm->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function fetchOne(){
        try{
            $stm = $this->dbCnx->prepare("SELECT * FROM users WHERE id = ?");  
            $stm->execute([$this->id]);
            return $stm->fetchAll();

        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function update(){
        try {
            $stm = $this->dbCnx->prepare("UPDATE users SET firstName = ?, lastName = ?, adress = ? WHERE id=?");
            $stm->execute([$this->firstName, $this->lastName,$this->adress, $this->id]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(){
        try{
            $stm = $this->dbCnx->prepare('DELETE FROM users WHERE id=?');
            $stm->execute([$this->id]);
            return $stm->fetchAll();
            echo "<script>alert('data deleted successufully');document.location='allData.php'</script>";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}