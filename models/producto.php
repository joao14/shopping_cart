<?php
require_once ("../db/db_conn.php");
  
class Documento {     

    private $producto;
    private $productos;    
    private $db;  
 
    public function __construct() { 
        $this->productos = array();
        $this->producto = null;
        $this->db = Conectar::conexion();  
    }  
    
    public function getProductbyId($id_producto){  
        $sql = "SELECT * FROM producto WHERE id_producto=" . $id_producto . "";
        $producto=$this->db->query($sql);        
        return $producto;
        $this->db = null;  
    }

    public function updateProduct($id_estado,$observacion, $id_documento){ 
        $sql = "UPDATE producto SET id_estado=?, observacion=? ,updated_at=NOW() WHERE id_documento=?";
        $stmt = $this->db->prepare($sql); 
        $stmt->bind_param("sss", $id_estado, $observacion, $id_documento);
        $stmt->execute();
        return $stmt;
        $this->db = null;
    }


    public function createProduct($name,$stock,$price,$description,$file){
        $sql="INSERT INTO producto (name,stock,price,description,image,created_at, updated_at) VALUES (?,?,?,?,?,NOW(), NOW())";
        $stmt=$this->db->prepare($sql);
        $stmt->bind_param("sssss", $name,$stock,$price,$description,$file);
        $stmt->execute();
        return $stmt;
        $this->db = null;
    }


    public function getAllProducts(){        
       
        $sql = "SELECT d.* FROM producto d WHERE d.stock > 0 ORDER BY created_at asc";
        foreach ($this->db->query($sql) as $res) {
            $this->productos[] = $res;
        }
        return $this->productos;
        $this->db = null;  
    }


    





}