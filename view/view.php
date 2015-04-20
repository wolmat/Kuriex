<?php

abstract class View{
 
    /**
     * Tworzenie obiektu z klasy modelu
     * @param string $name nazwa klasy
     * @param string $path ścieżka do pliku z klasą
     * @return object
     */
    public function loadModel($name, $path='model/'){
		$path=$path.$name.'.php';
        $name=$name.'Model';
        try {
            if(is_file($path)) {
                require $path;
                $ob=new $name();
            } else {
                throw new Exception('Nie udało się otworzyć modelu '.$name.' w '.$path);
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
     * Generowanie widoku
     */
    public function render($name, $path='templates/'){
	    $path=$path.$name.'.php';
        try {
            if(is_file($path)) {
                require $path;
            } else {
                throw new Exception('Nie można otworzyć '.$name.' w '.$path);
            }
        }
        catch(Exception $e) {
            echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line: '.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
            exit;
        }
    }
    /**
     * Ustawia dane
	 */
    public function set($name, $value) {
        $this->$name=$value;
    }
	
    /**
     * Pobiera dane
     */
    public function get($name) {
        return $this->$name;
    }
}