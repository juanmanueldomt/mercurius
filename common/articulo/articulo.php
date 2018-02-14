<?php
/**
 * Created by PhpStorm.
 * User: kronoz
 * Date: 6/08/17
 * Time: 08:57 PM
 */
    require_once __DIR__.'/../database/dataBase.php';
class articulo
{
    private $id;
    private $titulo;
    private $autor;
    private $cargo;
    private $fecha;
    private $portada;
    private $cabecera;
    private $contenido;
    private $autorizacion;

    public function __construct( $id,  $titulo = null,  $autor = null,  $cargo = null,  $portada = null,  $cabecera = null, $contenido = null)
    {
        if( $id == null) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->cargo = $cargo;
            $this->fecha = null;
            $this->portada = $portada;
            $this->cabecera = $cabecera;
            $this->contenido = $contenido;
            $this->autorizacion = "Authorized";
        }else{
            $articulo=self::find($id);
            if($articulo!=null) {
                $this->id = $id;
                $this->titulo = $articulo->getTitulo();
                $this->autor = $articulo->getAutor();
                $this->cargo = $articulo->getCargo();
                $this->fecha = $articulo->getFecha();
                $this->portada = $articulo->getPortada();
                $this->cabecera = $articulo->getCabecera();
                $this->contenido = $articulo->getContenido();
                $this->autorizacion = "Authorized";
            }
        }
    }



    public function getId()
    {
        return $this->id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getPortada()
    {
        return $this->portada;
    }

    public function getCabecera()
    {
        return $this->cabecera;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function isAuthorized()
    {
        if ($this->autorizacion == articuloData::$SHOWPERMISSION) {
            return true;
        }
        return false;
    }

    public function setTitulo(string $titulo){
        $this->titulo = $titulo;
    }
    public function setAutor(string $autor)
    {
        $this->autor = $autor;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function setPortada($portada)
    {
        $this->portada = $portada;
    }

    public function setCabecera($cabecera)
    {
        $this->cabecera = $cabecera;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    public function setAuthorized($authorization)
    {
        $this->autorizacion = $authorization;
    }


    public function update()
    {
        $db = new dataBase();
        $con = $db->getConection();
        $sql = "UPDATE NOTICIA 
                SET TITULO='{$this->titulo}',
                AUTOR='{$this->autor}',
                CARGO='{$this->cargo}',
                CABECERA='{$this->cabecera}',
                PORTADA= '{$this->portada}',
                CONTENIDO='{$this->contenido}',
                AUTORIZACION='{$this->autorizacion}'
                WHERE ID_NOTICIA='{$this->id}'";
        $data = $con->query($sql);
        $con->close();
        if ($data != null) {
            $_SESSION['msgtype'] = "success";
            $_SESSION['msg'] = "<strong>Perfecto</strong> Se ha actualizado una nueva entrada.";
            return true;
        } else {
            $_SESSION['msgtype'] = "danger";
            $_SESSION['msg'] = "<strong>Error</strong> " . $sql . "<br>" . $con->error;
        }
        return false;
    }

    private function addSlashContenido($contenido){
        return addslashes($contenido);
    }

    public function save(){
        $db = new dataBase();
        $con = $db->getConection();
        $contenido = $this->addSlashContenido($this->contenido);
        $sql = "SELECT INSERT_NOTICIA( '{$this->titulo}','{$this->autor}','{$this->cargo}','{$this->cabecera}', '{$this->portada}' ,'" . date('Y-m-d H:i:s') . "','{$contenido}')";
        $data = $con->query($sql);
        $con->close();
        if ($data != null && $data->num_rows > 0) {
            $row = $data->fetch_array(MYSQLI_NUM);

           /* foreach ($_POST['Etiqueta'] as $label) {
                $sql = "INSERT INTO ETIQUETA SET ID_NOTICIA =" . $row[0] . ", ETIQUETA ='" . $label . "'";
                $con->query($sql);
            }*/
            $_SESSION['msgtype'] = "success";
            $_SESSION['msg'] = "<strong>Perfecto</strong> Se ha agregado una nueva entrada.";
            return true;
        } else {
            $_SESSION['msgtype'] = "danger";
            $_SESSION['msg'] = "<strong>Error</strong> " . $sql . "<br>" . $con->error;
            return false;
        }

    }

    public static function find(int $id)
    {
        $db = new dataBase();
        $con = $db->getConection();

        $sql = "SELECT TITULO, AUTOR, CARGO, FECHA, PORTADA, CONTENIDO, AUTORIZACION FROM NOTICIA WHERE ID_NOTICIA='{$id}'";
        $data = $con->query($sql);
        if ($data != null && $data->num_rows > 0) {
            $row = $data->fetch_array(MYSQLI_ASSOC);
            $articulo = new articulo(null,$row['TITULO'],$row['AUTOR'],$row['CARGO'],$row['FECHA'],$row['PORTADA'],$row['CONTENIDO'],$row['AUTORIZACION']);
            return $articulo;
        }
        return null;
    }


    public static function maxId(){
        $db = new dataBase();
        $con = $db->getConection();

        $sql = "SELECT MAX(ID_NOTICIA) FROM NOTICIA";
        $data = $con->query($sql);
        $row = $data->fetch_array(MYSQLI_ASSOC);
        return $row['MAX(ID_NOTICIA)'];
    }


}