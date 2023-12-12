<?php
class Schedule extends model
{

	public function getList($user_id, $offset)
	{
		$array = array();

		$sql = $this->db->prepare("
			SELECT 
				* 
			FROM 
				schedule 
			WHERE 
				user_id = :user_id 
			AND 
				status = 1 
			LIMIT $offset, 10
			");
		$sql->bindValue(':user_id', $user_id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
	public function getListAll($id_company)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM clients WHERE id_company = :id_company");
		$sql->bindValue(":id_company", $id_company);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getInfo($id, $id_company)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM clients WHERE id = :id AND id_company = :id_company");
		$sql->bindValue(":id", $id);
		$sql->bindValue("id_company", $id_company);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getCount()
	{
		$r = 0;

		$sql = $this->db->prepare("SELECT COUNT(*) as c FROM schedule");
		$sql->execute();
		$row = $sql->fetch();

		$r = $row['c'];

		return $r;
	}

	public function add($client_name, $reason, $schedule_date, $client_type, $user_id) {

		$sql = $this->db->prepare("INSERT INTO schedule SET client_name = :client_name, reason = :reason, schedule_date = :schedule_date, client_type = :client_type, user_id = :user_id");
		$sql->bindValue(":client_name", $client_name);
		$sql->bindValue(":reason", $reason);
		$sql->bindValue(":schedule_date", $schedule_date);
		$sql->bindValue(":client_type", $client_type);
		$sql->bindValue(":user_id", $user_id);
		$sql->execute();

		return $this->db->lastInsertId();
	}

	public function edit($id, $id_company, $client_name, $email, $phone, $cellphone, $whatsapp, $cpf, $identity, $passport, $birth_date, $aditional_info, $address_zipcode, $address, $address_number, $address2, $address_neighb, $address_city, $address_state, $date_register)
	{

		$sql = $this->db->prepare("UPDATE clients SET client_name = :client_name, email = :email, phone = :phone, cellphone = :cellphone, whatsapp = :whatsapp, cpf = :cpf, identity = :identity, passport = :passport, birth_date =:birth_date, aditional_info = :aditional_info, address_zipcode = :address_zipcode, address = :address, address_number = :address_number, address2 = :address2, address_neighb = :address_neighb, address_city = :address_city, address_state = :address_state, date_register = :date_register WHERE id = :id AND id_company = :id_company");
		$sql->bindValue(":id", $id);
		$sql->bindValue(":id_company", $id_company);
		$sql->bindValue(":client_name", $client_name);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":phone", $phone);
		$sql->bindValue(":cellphone", $cellphone);
		$sql->bindValue(":whatsapp", $whatsapp);
		$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":identity", $identity);
		$sql->bindValue(":passport", $passport);
		$sql->bindValue(":birth_date", $birth_date);
		$sql->bindValue(":aditional_info", $aditional_info);
		$sql->bindValue(":address_zipcode", $address_zipcode);
		$sql->bindValue(":address", $address);
		$sql->bindValue(":address_number", $address_number);
		$sql->bindValue(":address2", $address2);
		$sql->bindValue(":address_neighb", $address_neighb);
		$sql->bindValue(":address_city", $address_city);
		$sql->bindValue(":address_state", $address_state);
		$sql->bindValue(":date_register", $date_register);

		$sql->execute();
	}

	public function searchClientByName($name)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT clients_name, id FROM clients WHERE clients_name LIKE :clients_name LIMIT 10");
		$sql->bindValue(':name', '%' . $name . '%');
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function searchClient($sp, $id_company)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT client_name, phone, cellphone, cpf, id FROM clients WHERE client_name LIKE '%$sp%' OR cpf LIKE '%$sp%' ORDER BY client_name ASC");
		$sql->bindValue(":client_name", $sp . '%');
		$sql->bindValue(":phone", $sp . '%');
		$sql->bindValue(":cellphone", $sp . '%');
		$sql->bindValue(":cpf", $sp . '%');
		$sql->bindValue(":id_company", $id_company);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;
	}

	public function delete($id, $id_company)
	{
		$sql = $this->db->prepare("DELETE FROM clients WHERE id = :id AND id_company = :id_company");
		$sql->bindValue(":id", $id);
		$sql->bindValue(':id_company', $id_company);
		$sql->execute();
	}
}
