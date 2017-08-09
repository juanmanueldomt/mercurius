<?php
/**
 * Created by PhpStorm.
 * User: kronoz
 * Date: 3/08/17
 * Time: 09:33 PM
 */
require_once __DIR__.'/../database/dataBase.php';
require_once __DIR__.'/../mail/registerMail.php';
require_once __DIR__.'/dataUsers.php';
require_once __DIR__.'/../session/session.php';
class user
{
    private $id;
    private $nombre;
    private $roll;
    private $avatar;
    function __construct($id, $nombre, $roll, $avatar){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->roll = $roll;
        $this->avatar = $avatar;
    }
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getRoll(){
        return $this->roll;
    }
    public function getAvatar(){
        return $this->avatar;
    }

    public static function validate($user,$password){

        if( isset($user) && isset($password)){

            $sql = "SELECT ID_USUARIO, NOMBRE, APELLIDOS, ROL, EMAIL FROM USUARIO WHERE EMAIL='{$user}' && PASSWORD='{$password}'";
            $db = new dataBase();
            $con = $db->getConection();
            $data = $con->query($sql);
            if($data!=null  && $data->num_rows>0)
            {
                $row = $data->fetch_array(MYSQLI_ASSOC);
                session::sessionInit();
                $user=new user($row['ID_USUARIO'],$row['NOMBRE'],$row['ROL'],'');
                $_SESSION['user'] = $user;
                $_SESSION['msgtype'] = "success";
                $_SESSION['msg']="<strong>Bienvenido</strong> a tu pagina de noticias";
                return true;
            }
            else {

                session::sessionInit();
                $_SESSION['msgtype'] = "danger";
                $_SESSION['msg'] = "<strong>Error</strong> Los valores ingresados no son validos";
                $_SESSION['msg'] = "<strong>Error</strong> Los valores ingresados no son validos";
            }
        }
        return false;
    }
    public static function register($name,$lastname,$email,$password){
        if(isset($name) &&  isset($lastname)  && isset($email)  &&  isset($password)){
            $sql = "INSERT INTO USUARIO (NOMBRE, APELLIDOS, ROL, EMAIL,PASSWORD) VALUES ('{$name}','{$lastname}','USUARIO','{$email}','{$password}')";
            $db = new dataBase();
            $con = $db->getConection();
            session::sessionInit();
            if ($con->query($sql) === TRUE) {
                $_SESSION['msgtype']="success";
                $_SESSION['msg']="<strong>Perfecto</strong> Revisa tu correo para confirmar tu cuenta";
                $mail = new registerMail($email);
                $mail->send();
                return true;
            } else {
                $_SESSION['msgtype']="danger";
                $_SESSION['msg']="<strong>ERROR</strong>". $sql . "<br>" . $con->error;
            }
        }
        else {
            $_SESSION['msgtype']="danger";
            $_SESSION['msg']="<strong>Ohhh Ohhh! </strong> Algo salio mal!";
        }
        return false;
    }

    public function validateAdminPermission(){
        if($this->getRoll() == dataUsers::$ROLLNAME_ADMNISTRATOR){
            return true;
        }
        return false;
    }

    public function validateEditPermission(){
        if($this->getRoll() == dataUsers::$ROLLNAME_EDITOR){
            return true;
        }
        return false;
    }


}