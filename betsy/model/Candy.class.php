<?php
/**
 * @author Copyright (C) 2015  Ismael Bernier
 * @license The GNU General Public License version 2 (GPLv2)
 * 
 */
class Candy 
{
		
	private $db;
	
	function __construct ()
	{

		$this->db = new mysqli(DB_HOST,DB_USER, DB_PASS, DB_NAME);
		$this->db->set_charset('UTF8');


		if ($this->db->connect_error) 
		{
			die('Connect Error (' . $this->db->connect_errno . ') '
	        . $this->db->connect_error);

		}
	}
	
	
	/**
	 * 
	 */ 
	public function checkUsername($username) 
	{
		$res = false;
		$query = "select id from human where username = ?";
		$stmt = $this->db->prepare($query);
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$stmt->bind_result($col1);
		$counter = 0;
		while ($stmt->fetch()) {
			$counter++;
		}
		$stmt->close();
		
		if($counter == 0)
		{
			$res = true;	
		}
		return $res;
	}
	
	/**
	 * 
	 */ 
	public function register($username, $password) 
	{
		if(strlen($password) == 32)
		{
			$query = "select id from human where username = ?";
			$stmt = $this->db->prepare($query);
			$stmt->bind_param("s", $username);
			$stmt->execute();
			$stmt->bind_result($col1);
			$nbRows = 0;
			while ($stmt->fetch()) {
				$nbRows++;
			}
			$stmt->close();
			
			if($nbRows == 0)
			{
					$query = "insert into human (username, password, role) values (?, ?, 0)";
					$stmt = $this->db->prepare($query);
					$stmt->bind_param("ss", $username, $password);
					$res = $stmt->execute();
					$stmt->close();
			}
			else{
				$res = false;
			}
		}
		else{
			$res = false;
		}
		return $res;
	}
	/**
	 * 
	 */ 
	public function login($username, $password) 
	{
		$res = false;
		$query = "select password from human where username = ?";
		$stmt = $this->db->prepare($query);
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$stmt->bind_result($col1);
		while ($stmt->fetch()) {
			$storedPass = $col1;
		}
		$stmt->close();
		
		if(md5($storedPass) == $password)
		{
			
			$res = true;	
		}
		return $res;
	}
	
	public function checkCandy($username, $candy) 
	{
		$res = false;
		$query = "select * from candy where user = ?";
		$stmt = $this->db->prepare($query);
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$stmt->bind_result($col1, $col2, $col3, $col4);
		$nbRows = 0;
		$date = date("Y-m-d");
		while ($stmt->fetch()) {
			$id = $col1;
			$user = $col2;
			$storedCandy = $col3;
			$storedDate = $col4;
			$nbRows++;
		}
		$stmt->close();
		$md5StoredCandy = md5($storedCandy);
		if($nbRows == 1)
		{
				if($date == $storedDate && $candy == $md5StoredCandy){
					$res = true;
				}
		}
		
		return $res;
	
	}
	
	public function checkRole($username, $candy) 
	{
		$res = false;
		$query = "select * from candy where user = ?";
		$stmt = $this->db->prepare($query);
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$stmt->bind_result($col1, $col2, $col3, $col4);
		$nbRows = 0;
		$date = date("Y-m-d");
		while ($stmt->fetch()) {
			$id = $col1;
			$user = $col2;
			$storedCandy = $col3;
			$storedDate = $col4;
			$nbRows++;
		}
		$stmt->close();
		$md5StoredCandy = md5($storedCandy);
		if($nbRows == 1)
		{
				if($candy == $md5StoredCandy && $date == $storedDate){
					$query = "select role from human where username = ?";
					$stmt = $this->db->prepare($query);
					$stmt->bind_param("s", $username);
					$stmt->execute();
					$stmt->bind_result($col1);
					while ($stmt->fetch()) {
						$isAdmin = $col1;
					}
					$stmt->close();
					if($isAdmin == 1){
					$res = true;
					}
				}
		}
		
		return $res;
	
	}
	
	public function setCandy($candy, $username) 
	{
		$query = "select id from candy where user = ?";
		$stmt = $this->db->prepare($query);
		$stmt->bind_param("s", $username);
		$res = $stmt->execute();
		$stmt->bind_result($col1);
		$nbRows = 0;
		while ($stmt->fetch()) {
			$id = $col1;
			$nbRows++;
		}
		$stmt->close();
		
		if($nbRows == 0)
		{
				$query = "insert into candy (user, candy, date) values (?, ?, CURDATE())";
				$stmt = $this->db->prepare($query);
				$stmt->bind_param("ss", $username, $candy);
				$res = $stmt->execute();
				$stmt->close();
		}
		
		elseif($nbRows == 1)
		{
				$res = $this->updateCandy($id, $candy);
		}
		else{
			$res = false;
		}
		
		return $res;
	}
	
	public function deleteCandy($username) 
	{
		$query = "delete from candy where user = ?";
		$stmt = $this->db->stmt_init();
		if(!$stmt->prepare($query))
		{
			$res = false;
		}
		else
		{
			$stmt->bind_param("s", $username);
			$res = $stmt->execute();
			
		}
		$stmt->close();
		return $res;
	}
	
	public function updateCandy($id, $candy) 
	{
		$query = "update candy set date = CURDATE(), candy = ? where id = ?";
		$stmt = $this->db->prepare($query);
		$stmt->bind_param("si", $candy, $id);
		$res = $stmt->execute();
		$stmt->close();
		
		return $res;
	}
	
}
?>
