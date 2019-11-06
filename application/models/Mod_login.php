<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_login extends CI_Model
{


	public function __construct()
	{
		parent::__construct();
	}

	function db_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
	public function tabel()
	{
		$sql = $this->db->query("SELECT * FROM login");
		return $sql->result();
	}
}
