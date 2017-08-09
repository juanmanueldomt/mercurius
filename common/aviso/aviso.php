<?php
/**
 * Created by PhpStorm.
 * User: kronoz
 * Date: 7/08/17
 * Time: 08:17 PM
 */
require_once __DIR__."/../database/dataBase.php";
require_once __DIR__."/../user/user.php";
require_once __DIR__."/../session/session.php";
class aviso
{
    private $categoria;
    private $titulo;
    private $contenido;
    private $id;

    public function __construct(int $id,string $categoria, string $titulo, string $contenido)
    {
        $this->categoria = $categoria;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->id=$id;
    }

    public function save(){
        $db = new dataBase();
        $con = $db->getConection();
        $sql = "INSERT INTO AVISO(CATEGORIA,AV_TITULO,AV_CONTENIDO) VALUES ('{$this->categoria}','{$this->titulo}','{$this->contenido}')" ;
        $data=$con->query($sql);
        $con->close();
        if($data!=null ){
            session::sessionInit();
            $_SESSION['msgtype']="success";
            $_SESSION['msg']="<strong>Perfecto</strong> Se ha agregado una nueva entrada.";
            return true;

        } else {
            $_SESSION['msgtype']="danger";
            $_SESSION['msg']="<strong>Error</strong> ".$sql."<br>".$con->error;
        }
        return false;
    }

    public function delete(){
        $sql = "DELETE FROM AVISO WHERE ID_AVISO='{$this->id}'";
        $db = new dataBase();
        $con = $db->getConection();
        $data = $con->query($sql);

        if ($data != null) {
            $_SESSION['msgtype'] = "success";
            $_SESSION['msg'] = "<strong>Perfecto</strong> Se ha eliminado un aviso";
            $con->close();
            return true;
        } else {
            $_SESSION['msgtype'] = "danger";
            $_SESSION['msg'] = "<strong>Error</strong> " . $sql . "<br>" . $con->error;
            $con->close();
            return false;
        }
    }

    public static function find(int $id){
        $db = new dataBase();
        $con = $db->getConection();

        $sql="SELECT * FROM AVISO WHERE ID_AVISO ={$id}";
        $data = $con->query($sql);
        if($data!=null && $data->num_rows>0){
            $row = $data->fetch_array(MYSQLI_ASSOC);
            $aviso = new static($row['ID_AVISO'],$row['CATEGORIA'],$row['AV_TITULO'],$row['AV_CONTENIDO']);
            return $aviso;
        }
    }

}