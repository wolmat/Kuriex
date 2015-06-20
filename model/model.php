<?php

abstract class Model{
    /**
     * Obiekt PDO
     */
    protected $pdo;
 
    /**
     * Konstruktor łączący się z bazą danych
     */
    public function  __construct() {
        $this->pdo = new MysqlDriver();
    }
	
    /**
     * Tworzenie obiektu z klasy modelu
     * @param string $name nazwa klasy
     * @param string $path ścieżka do pliku z klasą
     * @return object
     */
    public function loadModel($name, $path='model/') {
		$path=$path.$name.'.php';
        $name=$name.'Model';
        try {
            if(is_file($path)) {
                require $path;
                $ob=new $name();
            } else {
                throw new Exception('Nie udało się otworzyć modelu '.$name.' z '.$path);
            }
        }
        catch(Exception $e) {
            echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line: '.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
            exit;
        }
        return $ob;
    }
	
    /**
     * Tworzy zapytanie SELECT
     *
     * @param string $from Table
     * @param <type> $select Records to select (default * (all))
     * @param <type> $where Condition to query
     * @param <type> $order Order ($record ASC/DESC)
     * @param <type> $limit LIMIT
     * @return array
     */
    public function select($from, $select='*', $where=NULL, $order=NULL, $limit=NULL) {
        $query='SELECT '.$select.' FROM '.$from;
        if($where!=NULL)
            $query=$query.' WHERE '.$where;
        if($order!=NULL)
            $query=$query.' ORDER BY '.$order;
        if($limit!=NULL)
            $query=$query.' LIMIT '.$limit;
 
        $select=$this->pdo->query($query);
        foreach ($select as $row) {
            $data[]=$row;
        }
        $select->closeCursor();
 
        return $data;
    }
	
	
}