<?php
class Users extends model{

	private $userInfo;
	private $permissions;

	public function isLogged(){

		if(isset($_SESSION['ccUser']) && !empty($_SESSION['ccUser'])){
			return true;
		} else {
			return false;
		}
	}

	public function doLogin($email, $password){

		$sql = $this->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
		$sql->bindValue(':email', $email);
		$sql->bindValue(':password', md5($password));
		
		$sql->execute();


		if($sql->rowCount() > 0){
			$row =$sql->fetch();

			$_SESSION['ccUser'] = $row['id'];

			return true;
		} else{
			return false;
		}

	}

	public function setLoggedUser(){
		if(isset($_SESSION['ccUser']) && !empty($_SESSION['ccUser'])){
			$id = $_SESSION['ccUser'];
			
			$sql = $this->db->prepare("SELECT * FROM users WHERE id = :id");
			$sql->bindValue(':id', $id);
			$sql->execute();

			if($sql->rowCount() > 0 ){
				$this->userInfo = $sql->fetch();
				$this ->permissions = new Permissions();
				$this->permissions->setGroup($this->userInfo['id_group']);

			}

		}

	}

	public function logout() {
		unset($_SESSION['ccUser']);
	}

	public function hasPermission($name){
		return $this->permissions->hasPermission($name);

	}

	public function getCompany(){
		if(isset($this->userInfo['id_company'])){
			return $this->userInfo['id_company'];
		} else {
			return 0;
		}

	}
	public function getEmail(){
		if(isset($this->userInfo['email'])){
			return $this->userInfo['email'];
		} else {
			return '';

		}
	}

	public function getId(){
		if(isset($this->userInfo['id'])){
			return $this->userInfo['id'];
		} else {
			return '';

		}
	}

	public function getName(){
		if(isset($this->userInfo['name_user'])){
			return $this->userInfo['name_user'];
		} else {
			return '';

		}
	}

	public function getInfo($id){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM users WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
		
	}


	public function findUsersInGroup($id){

		$sql = $this->db->prepare("SELECT COUNT(*) as c FROM users WHERE id_group = :group");
		$sql->bindValue(":group", $id);
		$sql->execute();
		$row = $sql->fetch();
		if($row['c'] == '0'){
			return false;
		} else {
			return true;
		}
	}

	public function getList(){
		$array = array();

		$sql = $this->db->prepare("
			SELECT
				users.id,
				users.email,
				users.name_user,
				permission_groups.name
			FROM 
				users
			LEFT JOIN 
				permission_groups ON permission_groups.id = users.id_group
			");
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;

	}

	public function getListAll(){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM users");
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;

	}

	public function getListQualifiedsUsers($q1, $q2, $q3, $q4, $q5){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM users WHERE id_group = '$q1' OR id_group = '$q2' OR id_group = '$q3' OR id_group = '$q4' OR id_group = '$q5'");
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;

	}

	public function create($name_user, $email, $pass, $group){
		$sql = $this->db->prepare("SELECT COUNT(*) as c FROM users WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();
		$row = $sql->fetch();

		if($row['c'] == '0'){
			$sql = $this->db->prepare("INSERT INTO users SET name_user = :name_user,  email = :email, password = :password, id_group = :id_group");
			$sql->bindValue(":name_user", $name_user);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":password", md5($pass));
			$sql->bindValue(":id_group", $group);
			$sql->execute();

			return '1';

		} else {
			return '0';
		}

	}

	public function update($name_user, $pass, $group, $id){
		$sql = $this->db->prepare("UPDATE users SET name_user = :name_user, id_group = :id_group WHERE id = :id");
		$sql->bindValue(":name_user", $name_user);
		$sql->bindValue(":id_group", $group);
		$sql->bindValue("id", $id);
		$sql->execute();

		if(!empty($pass)){
			$sql = $this->db->prepare("UPDATE users SET password = :password WHERE id = :id");
			$sql->bindValue(":password", md5($pass));
			$sql->bindValue(":id", $id);
			$sql->execute();

		}

	}

	public function destroy($id){
		$sql = $this->db->prepare("DELETE FROM users WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

	}
}