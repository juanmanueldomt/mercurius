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

    public function __construct( $id, string $titulo = null, string $autor = null, string $cargo = null, string $portada = null, string $cabecera = null,string $contenido = null)
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

    private function addSlashContenido(string $contenido){
        return addslashes($contenido);
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


}