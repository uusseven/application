<?php 
	class user extends CI_Model{
		function login($username,$password){
			return $this->db->query("select *from user where username='$username' and password='$password'");

		}
	}
?>