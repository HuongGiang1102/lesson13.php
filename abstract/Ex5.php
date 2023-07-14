<?php
abstract class Database {
    protected $dbType;
    protected $dbHosst;
    protected $dbName;
    protected $user;
    protected $password;
    protected $connect;
    public function __construct ($dbHost, $dbName, $user, $password) {
        $this -> dbHost = $dbHost;
        $this -> dbName = $dbName;
        $this -> user = $user;
        $this -> password = $password;
    }

    public function connect()
    {
        try {
            $connect = new PDO("$this->dbType:host=$this->dbHost:dbname=$this->dbName",$this->user,$this->password);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->connect = connection;
        }
        catch (Exception $e) {
            die("Connection failed: " . $e->getMessage());
        }
        }
    abstract public function query($sql);
    public function disconnect()
    {
        $this->connect = null;
    }
}

class MySQLDatabase extends Database {
    public function __construct ($dbHost, $dbName, $user, $password) {
        parent::__construct ($dbHost, $dbName, $user, $password);
        $this -> dbType = 'mysql';
    }
    public function query($sql)
    {
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
}

class PostgreSQLDatabase extends Database {
    public function __construct ($dbHost, $dbName, $user, $password) {
        parent::__construct ($dbHost, $dbName, $user, $password);
        $this -> dbType = 'postgre';
    }
    public function query($sql)
    {
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
}
?>