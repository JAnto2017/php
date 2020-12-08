<?php
    function getArchivo(){
        return $_POST['txtArchivo'];
    }
    function verificar($archivo){
        if (file_exists($archivo)) {
            return 'Es correcto el archivo..!';
        } else {
            return 'El archivo NO existe...!';
        }
        
    }
    function ultimaModificacion($archivo){
        if (file_exists($archivo)) {
            return date("F d Y H:i:s.",filectime($archivo));        
        } else {
            return '';
        }
        
    }
    function tipoArchivo($archivo){
        return filetype($archivo);
    }
    function tamanioARchivo($archivo){
        return filesize($archivo);
    }
    function esEjecutable($archivo){
        if (is_executable($archivo)) {
            return 'Archivo ejecutable';
        } else {
            return 'Archivo NO ejecutable';
        }
        
    }
?>