<?php
    
    class model {
        var $servername = "Localhost";
        var $username = "root";
        var $password = "";
        var $db = "registration";
        private $conn;
        
        //database table
        public function __construct($table){
            $this->table = $table;
            $this->connect();
        }
        //connection
        function connect(){
            $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->db);
        }
        //insert data
        public function insert($fields=[]){
            $tableColumns=[];
            $tableValues=[];
            foreach ($fields as $columnkey => $value) {
                $tableColumns[] = $columnkey;
                $tableValues [] = $value;
            }
            $result = $this->conn->query("INSERT INTO " . $this->table . "("  . implode(', ', $tableColumns)  . ") VALUES ('" . implode("','", $tableValues) . "')");
            return $result;
        }
        
        public function readLatestInserted(){
            
            $result = $this->conn->query("SELECT * FROM " . $this->table . " ORDER BY id DESC LIMIT 1 ");
            return $result;
        }
       
    }