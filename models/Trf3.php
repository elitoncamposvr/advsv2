<?php
class Trf3 extends model
{

	public function getList($offset, $user_id)
	{
		$array = array();

		if ($user_id == 1) {
			$sql = $this->db->prepare("SELECT * FROM trf3 ORDER BY id DESC LIMIT $offset, 100");
			$sql->execute();
		}

		if ($user_id != 1) {
			$sql = $this->db->prepare("SELECT * FROM trf3 WHERE user_id = '$user_id' ORDER BY id DESC LIMIT $offset, 100");
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
			$sql = $this->db->prepare("SELECT COUNT(*) as sr FROM trf3");
			$sql->execute();
		}

		if ($user_id != 1) {
			$sql = $this->db->prepare("SELECT COUNT(*) as sr FROM trf3 WHERE user_id = '$user_id'");
			$sql->execute();
		}

		$row = $sql->fetch();
		$r = $row['sr'];

		return $r;
	}

	public function getCountTotal()
	{
		$r = 0;

		$sql = $this->db->prepare("SELECT COUNT(*) as sr FROM trf3");
		$sql->execute();
		$row = $sql->fetch();

		$r = $row['sr'];



		return $r;
	}


	public function getInfo($id)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM trf3 WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function create(
		$ano_proposta,
		$numero,
		$ofcreq,
		$proc_orig,
		$requerido,
		$requerentes,
		$advogado,
		$data_conta_liq,
		$vlr_solicitado,
		$vlr_inscritopr,
		$req_bloqueada,
		$situ_requisic,
		$natureza,
		$cpf,
		$assunto,
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
            trf3 
		SET 
			ano_proposta = :ano_proposta,
			numero = :numero,
			ofcreq = :ofcreq,
			proc_orig = :proc_orig,
			requerido = :requerido,
			requerentes = :requerentes,
			advogado = :advogado,
			data_conta_liq = :data_conta_liq,
			vlr_solicitado = :vlr_solicitado,
			vlr_inscritopr = :vlr_inscritopr,
			req_bloqueada = :req_bloqueada,
			situ_requisic = :situ_requisic,
			natureza = :natureza,
			cpf = :cpf,
			assunto = :assunto,
			status = :status,
			historico = :historico,
			tel = :tel,
			cel = :cel,
			tel_fixo = :tel_fixo,
			email = :email,
			endereco = :endereco,
			user_id = :user_id
		");

		$sql->bindValue(":ano_proposta", $ano_proposta);
		$sql->bindValue(":numero", $numero);
		$sql->bindValue(":ofcreq", $ofcreq);
		$sql->bindValue(":proc_orig", $proc_orig);
		$sql->bindValue(":requerido", $requerido);
		$sql->bindValue(":requerentes", $requerentes);
		$sql->bindValue(":advogado", $advogado);
		$sql->bindValue(":data_conta_liq", $data_conta_liq);
		$sql->bindValue(":vlr_solicitado", $vlr_solicitado);
		$sql->bindValue(":vlr_inscritopr", $vlr_inscritopr);
		$sql->bindValue(":req_bloqueada", $req_bloqueada);
		$sql->bindValue(":situ_requisic", $situ_requisic);
		$sql->bindValue(":natureza", $natureza);
		$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":assunto", $assunto);
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
		$ano_proposta,
		$numero,
		$ofcreq,
		$proc_orig,
		$requerido,
		$requerentes,
		$advogado,
		$data_conta_liq,
		$vlr_solicitado,
		$vlr_inscritopr,
		$req_bloqueada,
		$situ_requisic,
		$natureza,
		$cpf,
		$assunto,
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
            trf3 
		SET  
			ano_proposta = :ano_proposta,
			numero = :numero,
			ofcreq = :ofcreq,
			proc_orig = :proc_orig,
			requerido = :requerido,
			requerentes = :requerentes,
			advogado = :advogado,
			data_conta_liq = :data_conta_liq,
			vlr_solicitado = :vlr_solicitado,
			vlr_inscritopr = :vlr_inscritopr,
			req_bloqueada = :req_bloqueada,
			situ_requisic = :situ_requisic,
			natureza = :natureza,
			cpf = :cpf,
			assunto = :assunto,
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
		$sql->bindValue(":ano_proposta", $ano_proposta);
		$sql->bindValue(":numero", $numero);
		$sql->bindValue(":ofcreq", $ofcreq);
		$sql->bindValue(":proc_orig", $proc_orig);
		$sql->bindValue(":requerido", $requerido);
		$sql->bindValue(":requerentes", $requerentes);
		$sql->bindValue(":advogado", $advogado);
		$sql->bindValue(":data_conta_liq", $data_conta_liq);
		$sql->bindValue(":vlr_solicitado", $vlr_solicitado);
		$sql->bindValue(":vlr_inscritopr", $vlr_inscritopr);
		$sql->bindValue(":req_bloqueada", $req_bloqueada);
		$sql->bindValue(":situ_requisic", $situ_requisic);
		$sql->bindValue(":natureza", $natureza);
		$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":assunto", $assunto);
		$sql->bindValue(":status", $status);
		$sql->bindValue(":historico", $historico);
		$sql->bindValue(":tel", $tel);
		$sql->bindValue(":cel", $cel);
		$sql->bindValue(":tel_fixo", $tel_fixo);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":endereco", $endereco);
		$sql->execute();


		if ($user_id != 'empty') {
			$sql = $this->db->prepare("UPDATE trf3 SET user_id = '$user_id' WHERE id = '$id'");
			$sql->execute();
		}
	}

	public function getSearch($search)
	{
		$array = array();

		$sql = $this->db->prepare("SELECT * FROM trf3 WHERE $search is_active = 0");
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function destroy($id)
	{
		$sql = $this->db->prepare("DELETE FROM trf3 WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();
	}

	public function deleteCheckUsers($delete_values)
	{
		$array = explode(",", $delete_values);

		foreach ($array as $id){
			$sql = $this->db->prepare("DELETE FROM trf3 WHERE id = $id");
			$sql->execute();
		}
	}

	public function settingsEdit($q1, $q2, $q3, $q4, $q5)
	{
		$clientsQuant = 0;
		$sqlClients = $this->db->prepare("SELECT COUNT(*) as sr FROM trf3 WHERE user_id < 1");
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
				$sql = $this->db->prepare("UPDATE trf3 SET user_id = '$user[id]' WHERE user_id < 1 LIMIT 1");
				$sql->execute();
			}
		}

		$_SESSION['clients_quant'] = $clientsQuant;
	}
}
