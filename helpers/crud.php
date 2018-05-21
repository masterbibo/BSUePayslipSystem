<?php

function _getAllData($tablename){
    if ($tablename != NULL){
        require_once("config.php");
        $result = mysql_query("SELECT * FROM " . $tablename)  or die (mysql_error());

        if($result){
            $data['data'] = $result;
            $data['count'] = mysql_num_rows($result);
            return $data;
        }
        else{
            $data['data'] = NULL;
            $data['count'] = 0;
            return $data;
        }
    }
}


function _getAllDataByParam($tablename,$param){
    if ($tablename != NULL){
        require_once("config.php");
        $result = mysql_query("SELECT * FROM " . $tablename . " WHERE " . $param)  or die (mysql_error());

        if($result){
            $data['data'] = $result;
            $data['count'] = mysql_num_rows($result);
            return $data;
        }
        else{
            $data['data'] = NULL;
            $data['count'] = 0;
            return $data;
        }
    }
}

function _saveData($tablename,$tableColumns,$ColumnValues){

    if ($tablename != NULL){
        require_once("../config/config.php");
        $result = mysql_query("INSERT INTO " . $tablename . 
                     " ( " . $tableColumns . " ) 
                     VALUES (" . $ColumnValues . " )") or die (mysql_error());
        
        if($result){
            $data['data'] = 1;
            $data['count'] = mysql_num_rows($result);
            return $data;
        }
        else{
            $data['data'] = 0;
            $data['count'] = 0;
            return $data;
        }
    }
    
}

?>