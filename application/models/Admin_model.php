<?php
/**
 * 
 */
class Admin_model extends CI_Model
{
	
	function auth_admin($username, $password)
	{
		# code...
		$query=$this->db->query("SELECT * FROM admin WHERE id='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}
}