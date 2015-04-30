<?php 

require_once 'config.php';

class bd{

   private static $instance;
   public $pdo;

   public function __CONSTRUCT(){
     
   }
   
   public function getConnection(){
             $this->pdo = null;
            try{
             $this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER,DB_PASS);
             $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
           }catch(PDOExeception $e){
               
               print $e->getMessage();
            
           }
          return $this->pdo;
         }
   
   private static function getInstance(){

       if(!isset(self::$instance)){
        try{

            self::$instance = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER,DB_PASS);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        }catch(PDOExeception $e){

          echo $e->getMessage();

        }

         return self::$instance;

       }

   }

   public static function prepare($sql){

      return self::getInstance()->prepare($sql);
   }

   protected static function getDB(){
       return self::getInstance();
   }

}



