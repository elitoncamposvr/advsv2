<?php
class Permissions extends model{

	private $group;
	private $permissions;

	public function setGroup($id){
		$this->group = $id;
		$this->permissions = array();

		$sql = $this->db->prepare("SELECT params FROM permission_groups WHERE id = :id");
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$row = $sql->fetch();

			if(empty($row['params'])){
				$row['params'] = '0';
			}

			$params = $row['params'];

			$sql = $this->db->prepare("SELECT name FROM permission_params WHERE id IN ($params)");
			$sql->execute();

			if($sql->rowCount() > 0){
				foreach($sql->fetchAll() as $item) {
					$this->permissions[] = $item['name'];
				}

			}
		}
	}

	public function hasPermission($name){
		if(in_array($name, $this->permissions)){
			return true;
		} else {
			return false;
		}
	}

	public function getList(){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM permission_params ORDER BY permission_title ASC");
		$sql->execute();

		if($sql->rowCount() > 0 ){
			$array = $sql->fetchAll();

		}

		return $array;
	}

	public function getGroupList(){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM permission_groups");
		$sql->execute();

		if($sql->rowCount() > 0 ){
			$array = $sql->fetchAll();

		}

		return $array;
	}

	public function getGroup($id){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM permission_groups WHERE id = :id");
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0 ){
			$array = $sql->fetch();

			$array['params'] = explode(',', $array['params']);

		}

		return $array;

	}

	public function create($name, $permission_title){
		

		$sql = $this->db->prepare("INSERT INTO permission_params SET name = :name, permission_title = :permission_title");
		$sql->bindValue(":name", $name);
		$sql->bindValue(":permission_title", $permission_title);
		$sql->execute();
	}

	public function createGroup($name, $plist){
		$params = implode(',', $plist);

		$sql = $this->db->prepare("INSERT INTO permission_groups SET name = :name, params = :params");
		$sql->bindValue(":name", $name);
		$sql->bindValue(":params", $params);
		$sql->execute();
	}

	public function destroy($id){

		$sql = $this->db->prepare("DELETE FROM permission_params WHERE id = :id");
		$sql->bindValue(':id', $id);
		$sql->execute();

	}

	public function destroyGroup($id){
		$u = new Users();

		if($u->findUsersInGroup($id) == false){
			$sql = $this->db->prepare("DELETE FROM permission_groups WHERE id = :id");
			$sql->bindValue(':id', $id);
			$sql->execute();
		}

	}

	public function updateGroup($name, $plist, $id){
		$params = implode(',', $plist);

		$sql = $this->db->prepare("UPDATE permission_groups SET name = :name, params = :params WHERE id = :id");
		$sql->bindValue(":name", $name);
		$sql->bindValue(":params", $params);
		$sql->bindValue(":id", $id);
		$sql->execute();
	}
}