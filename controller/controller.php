<?php

abstract class Controller{
 
    /**
     * Przekierowanie na konkretny adres URL
     * @param adres url
     */
    public function redirect($url) {
		header("location:".$url);
    }
	
    /**
     * Wczytywanie konkretnego widoku
     * @param string $name nazwa klasy
     * @param string $path ścieżka do pliku z klasą
     * @return object
     */
    public function loadView($name, $path='view/') {
		$path=$path.$name.'.php';
        $name=$name.'View';
        try {
            if(is_file($path)) {
                require $path;
                $ob=new $name();
            } else {
                throw new Exception('Nie znaleziono '.$name.' w '.$path);
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
     * Wczytywanie modelu
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
                throw new Exception('Nie znaleziono modelu '.$name.' w '.$path);
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

}