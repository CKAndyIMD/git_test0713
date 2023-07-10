<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    //這裡是用明碼實作密碼，正式環境中請記得透過 SHA1或 MD5 加密。
    public function getUser($account,$password){
        $this->db->select("*");
        $query = $this->db->get_where("user",Array("account" => $account, "password" => $password ));
        
        if ($query->num_rows() > 0){ //如果數量大於0
            return $query->row();  //回傳第一筆
        }else{
            return null;
        }
    }
    function insert($account,$password){
        //$this->db 是 CI 幫 Model 內建的變數，負責專門處理資料庫操作，
        //在 CI 裡面他稱之為 Active Record 。
        $this->db->insert("user", 
            Array(
            "account" =>  $account,
            "password" => $password
        )); 
        //＠ 難道我們不能自己下 SQL 嗎？
        //可以，可以透過 $this->db->query($sql); ，
        //來下 SQL 指令        
        //但、惡意字元進行 SQL 注入攻擊，(SQL Injection )
        //用外部的變數，來串接 SQL 都是一個風險很高的作法。
    }    

    function checkUserExist($account){
        $this->db->select("COUNT(*) AS users");
        $this->db->from("user");
        $this->db->where("account", $account);
        $query = $this->db->get(); 

        return $query->row()->users > 0 ;
    }
}