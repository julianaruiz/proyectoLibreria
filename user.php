<?php
include_once 'DB.php';


class User extends BD{
    private $id;
    private $nombre;
    private $username;


    public function userExist($user, $pass, $enlace){
        /*$sql = "SELECT * FROM suscriptores WHERE email_sus= :user AND clave_sus= :pass";
        $query = $this->connect()->prepare($sql);
        $query->bindValue(':user', $user);
        $query->bindValue(':pass', $pass);
        $quey->execute();
        return $query->fetch(PDO::FETCH_OBJ)->id_sus;*/
        $sql = "SELECT id_sus FROM suscriptores WHERE email_sus = '$user' AND clave_sus = '$pass'";
        $query = mysqli_query($enlace, $sql);
        return $query->num_rows;
    }

    public function setUser($user, $enlace){
        $sql = "SELECT * FROM suscriptores WHERE email_sus = '$user'";
        $query = mysqli_query($enlace, $sql);

        while($row = $query->fetch_assoc()){
            $this->id = $row['id_sus'];
            $this->nombre = $row['nombre_sus'];
            $this->username = $row['email_sus'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getId(){
        return $this->id;
    }
}

?>  