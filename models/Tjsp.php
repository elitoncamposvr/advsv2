<?php
class Tjsp extends model
{

	public function getList($offset, $user_id)
	{
		$array = array();

		if ($user_id == 1) {
			$sql = $this->db->prepare("SELECT * FROM tjsp ORDER BY id DESC LIMIT $offset, 100");
			$sql->execute();
		}

		if ($user_id != 1) {
			$sql = $this->db->prepare("SELECT * FROM tjsp WHERE user_id = '$user_id' ORDER BY id DESC LIMIT $offset, 100");
			$sql->execute();
		}

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getCount($user_id)
	{
		$r = 0;

		if ($user_id == 1) {
			$sql = $this->db->prepare("SELECT COUNT(*) as sr FROM tjsp");
			$sql->execute();
		}

		if ($user_id != 1) {
			$sql = $this->db->prepare("SELECT COUNT(*) as sr FROM tjsp WHERE user_id = '$user_id'");
			$sql->execute();
		}

		$row = $sql->fetch();
		$r = $row['sr'];

		return $r;
	}

	public function getCountTotal()
	{
		$r = 0;

		$sql = $this->db->prepare("SELECT COUNT(*) as sr FROM tjsp");
		$sql->execute();
		$row = $sql->fetch();

		$r = $row['sr'];



		return $r;
	}


	public function getInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM tjsp WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function create(
		$processo,
		$nat,
		$nome,
		$cpf,
		$n_ordem,
		$nome_advg,
		$oab,
		$vlr_pago,
		$saldo,
		$tipo,
		$status,
		$historico,
		$tel,
		$cel,
		$tel_fixo,
		$email,
		$endereco,
		$user_id
	) {

		$sql = $this->db->prepare("
		INSERT INTO 
			tjsp 
		SET 
			processo = :processo,
			nat = :nat,
			nome = :nome,
			cpf = :cpf,
			n_ordem = :n_ordem,
			nome_advg = :nome_advg,
			oab = :oab,
			vlr_pago = :vlr_pago,
			saldo = :saldo,
			tipo = :tipo,
			status = :status,
			historico = :historico,
			tel = :tel,
			cel = :cel,
			tel_fixo = :tel_fixo,
			email = :email,
			endereco = :endereco,
			user_id = :user_id
		");
		$sql->bindValue(":processo", $processo);
		$sql->bindValue(":nat", $nat);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":n_ordem", $n_ordem);
		$sql->bindValue(":nome_advg", $nome_advg);
		$sql->bindValue(":oab", $oab);
		$sql->bindValue(":vlr_pago", $vlr_pago);
		$sql->bindValue(":saldo", $saldo);
		$sql->bindValue(":tipo", $tipo);
		$sql->bindValue(":status", $status);
		$sql->bindValue(":historico", $historico);
		$sql->bindValue(":tel", $tel);
		$sql->bindValue(":cel", $cel);
		$sql->bindValue(":tel_fixo", $tel_fixo);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":endereco", $endereco);
		$sql->bindValue(":user_id", $user_id);
		$sql->execute();
	}

	public function update(
		$id,
		$processo,
		$nat,
		$nome,
		$cpf,
		$n_ordem,
		$nome_advg,
		$oab,
		$vlr_pago,
		$saldo,
		$tipo,
		$status,
		$historico,
		$tel,
		$cel,
		$tel_fixo,
		$email,
		$endereco,
		$user_id

	) {

		$sql = $this->db->prepare("
		UPDATE 
			tjsp 
		SET  
		processo = :processo,
		nat = :nat,
		nome = :nome,
		cpf = :cpf,
		n_ordem = :n_ordem,
		nome_advg = :nome_advg,
		oab = :oab,
		vlr_pago = :vlr_pago,
		saldo = :saldo,
		tipo = :tipo,
		status = :status,
		historico = :historico,
		tel = :tel,
		cel = :cel,
		tel_fixo = :tel_fixo,
		email = :email,
		endereco = :endereco
		WHERE 
			id = :id");
		$sql->bindValue(":id", $id);
		$sql->bindValue(":processo", $processo);
		$sql->bindValue(":nat", $nat);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":n_ordem", $n_ordem);
		$sql->bindValue(":nome_advg", $nome_advg);
		$sql->bindValue(":oab", $oab);
		$sql->bindValue(":vlr_pago", $vlr_pago);
		$sql->bindValue(":saldo", $saldo);
		$sql->bindValue(":tipo", $tipo);
		$sql->bindValue(":status", $status);
		$sql->bindValue(":historico", $historico);
		$sql->bindValue(":tel", $tel);
		$sql->bindValue(":cel", $cel);
		$sql->bindValue(":tel_fixo", $tel_fixo);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":endereco", $endereco);
		$sql->execute();

		if ($user_id != 'empty') {
			$sql = $this->db->prepare("UPDATE tjsp SET user_id = '$user_id' WHERE id = '$id'");
			$sql->execute();
		}
	}

	public function update_without_pdf(
		$id,
		$processo,
		$nat,
		$nome,
		$cpf,
		$n_ordem,
		$nome_advg,
		$oab,
		$vlr_pago,
		$saldo,
		$tipo,
		$status,
		$historico,
		$tel,
		$cel,
		$tel_fixo,
		$email,
		$endereco,
		$user_id

	) {

		$sql = $this->db->prepare("
		UPDATE 
			tjsp 
		SET  
		processo = :processo,
		nat = :nat,
		nome = :nome,
		cpf = :cpf,
		n_ordem = :n_ordem,
		nome_advg = :nome_advg,
		oab = :oab,
		vlr_pago = :vlr_pago,
		saldo = :saldo,
		tipo = :tipo,
		status = :status,
		historico = :historico,
		tel = :tel,
		cel = :cel,
		tel_fixo = :tel_fixo,
		email = :email,
		endereco = :endereco
		WHERE 
			id = :id");
		$sql->bindValue(":id", $id);
		$sql->bindValue(":processo", $processo);
		$sql->bindValue(":nat", $nat);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":n_ordem", $n_ordem);
		$sql->bindValue(":nome_advg", $nome_advg);
		$sql->bindValue(":oab", $oab);
		$sql->bindValue(":vlr_pago", $vlr_pago);
		$sql->bindValue(":saldo", $saldo);
		$sql->bindValue(":tipo", $tipo);
		$sql->bindValue(":status", $status);
		$sql->bindValue(":historico", $historico);
		$sql->bindValue(":tel", $tel);
		$sql->bindValue(":cel", $cel);
		$sql->bindValue(":tel_fixo", $tel_fixo);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":endereco", $endereco);
		$sql->execute();

		if ($user_id != 'empty') {
			$sql = $this->db->prepare("UPDATE tjsp SET user_id = '$user_id' WHERE id = '$id'");
			$sql->execute();
		}
	}

	public function getSearch($search)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM tjsp WHERE $search is_active = 0");
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getImages($id){
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM client_files WHERE client_type = 'tjsp' AND client_id = :id");
		$sql->bindValue(':id',$id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function sendFiles(
		$doc_name,
		$client_id,
		$image,
		$user_id
	) {
		$sql = $this->db->prepare("
		INSERT INTO 
			client_files
		SET 
			doc_name = :doc_name,
			client_id = :client_id,
			client_type = 'tjsp',
			image = :image,
			user_id = :user_id,
			date_send = NOW()
		");
		$sql->bindValue(":doc_name", $doc_name);
		$sql->bindValue(":client_id", $client_id);
		$sql->bindValue(":image", $image);
		$sql->bindValue(":user_id", $user_id);
		$sql->execute();
	}

	public function destroy($id)
	{
		$sql = $this->db->prepare("DELETE FROM tjsp WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();
	}

	public function deleteCheckUsers($delete_values)
	{
		$array = explode(",", $delete_values);

		foreach ($array as $id) {
			$sql = $this->db->prepare("DELETE FROM tjsp WHERE id = $id");
			$sql->execute();
		}
	}


	public function settingsEdit($q1, $q2, $q3, $q4, $q5)
	{
		$clientsQuant = 0;
		$sqlClients = $this->db->prepare("SELECT COUNT(*) as sr FROM tjsp WHERE user_id < 1");
		$sqlClients->execute();
		$row = $sqlClients->fetch();
		$clientsQuant = $row['sr'];

		if ($clientsQuant > 500) {
			$clientsQuant = 500;
		}

		$usersQuant = 0;
		$sqlUsers = $this->db->prepare("SELECT COUNT(*) as sr FROM users WHERE id_group = '$q1' OR id_group = '$q2' OR id_group = '$q3' OR id_group = '$q4' OR id_group = '$q5'");
		$sqlUsers->execute();
		$row = $sqlUsers->fetch();
		$usersQuant = $row['sr'] - 1;

		$usersArray = array();
		$sqlUsersArray = $this->db->prepare("SELECT * FROM users WHERE id_group = '$q1' OR id_group = '$q2' OR id_group = '$q3' OR id_group = '$q4' OR id_group = '$q5'");
		$sqlUsersArray->execute();
		if ($sqlUsersArray->rowCount() > 0) {
			$usersArray = $sqlUsersArray->fetchAll();
			array_shift($usersArray);
		}

		$clients_usuarios = $clientsQuant / $usersQuant;

		foreach ($usersArray as $user) {

			for ($i = 0; $i < $clients_usuarios; $i++) {
				$sql = $this->db->prepare("UPDATE tjsp SET user_id = '$user[id]' WHERE user_id < 1 LIMIT 1");
				$sql->execute();
			}
		}

		$_SESSION['clients_quant'] = $clientsQuant;
	}
}
