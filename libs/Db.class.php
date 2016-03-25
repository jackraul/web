<?php 

/**
 * This is a class file for db.
 * This is a simple clss.
 * You can add more function.
 * Date:2016/3/20
 * Author:lxw
 */

class Db{

    private $db_host;
    private $db_user;
    private $db_pwd;
    private $db_name;
    private $db_con;

    function __construct(){
        $this->db_host='localhost';
        $this->db_user='root';
        $this->db_pwd='root';
        $this->db_name='test';
        $this->connect();
    }
    //link database
    function connect(){
        $this->db_con=mysql_connect($this->db_host,$this->db_user,$this->db_pwd);
        if(!$this->db_con){
            die("Database link error!".mysql_error());
        }
        mysql_select_db($this->db_name,$this->db_con);
        mysql_query("set names utf8");
    }

    //query data
    function query($sql){
        $data= '';
        if($sql!=''){
            $result = mysql_query($sql);
            while($res=mysql_fetch_assoc($result)){
                $data[]=$res;
            }
        }
        return $data;
    }
    //close link
    function __destruct(){
        mysql_close($this->db_con);
    }

}
