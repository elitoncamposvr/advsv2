<?php
class tjspController extends controller
{
	public function __construct()
	{

		$u = new Users();
		if ($u->isLogged() == false) {
			header("Location: " . BASE_URL . "login");
			exit;
		}
	}

	public function index()
	{
		$data = array();
		$u = new Users();
		$tjsp = new Tjsp();
		$u->setLoggedUser();

		if (!$u->hasPermission('tjsp')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$offset =  0;

		$data['p'] = 1;
		if (isset($_GET['p']) && !empty($_GET['p'])) {
			$data['p'] = intval($_GET['p']);
			if ($data['p'] == 0) {
				$data['p'] = 1;
			}
		}

		$offset = (100 * ($data['p'] - 1));

		$data['tjsp_list'] = $tjsp->getList($offset, $u->getId());
		$data['tjsp_count'] = $tjsp->getCount($u->getId());
		$data['p_count'] = ceil($data['tjsp_count'] / 100);
		$data['counter'] = $data['tjsp_count'];
		$data['admin'] = $u->hasPermission('is_admin');

		$this->loadTemplate('tjsp', $data);
	}

	public function create()
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('tjsp')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$q1 = '1';
		$q2 = '10';
		$q3 = '11';
		$q4 = '14';
		$q5 = '15';

		$data['admin'] = $u->hasPermission('is_admin');
	$data['users'] = $u->getListQualifiedsUsers($q1, $q2, $q3, $q4, $q5);
		$this->loadTemplate('tjsp_create', $data);
	}

	public function store()
	{
		$u = new Users();
		$tjsp = new Tjsp();
		$u->setLoggedUser();

		if (!$u->hasPermission('tjsp')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$processo = addslashes($_POST['processo']);
		$nat = addslashes($_POST['nat']);
		$nome = addslashes($_POST['nome']);
		$cpf = addslashes($_POST['cpf']);
		$n_ordem = addslashes($_POST['n_ordem']);
		$nome_advg = addslashes($_POST['nome_advg']);
		$oab = addslashes($_POST['oab']);
		$vlr_pago = addslashes($_POST['vlr_pago']);
		$saldo = addslashes($_POST['saldo']);
		$tipo = addslashes($_POST['tipo']);
		$status = addslashes($_POST['status']);
		$historico = addslashes($_POST['historico']);
		$tel = addslashes($_POST['tel']);
		$cel = addslashes($_POST['cel']);
		$tel_fixo = addslashes($_POST['tel_fixo']);
		$email = addslashes($_POST['email']);
		$endereco = addslashes($_POST['endereco']);
		$user_id = addslashes($_POST['user_id']);

		$tjsp->create(
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
		);
		header("Location: " . BASE_URL . "tjsp");
	}

	public function edit($id)
	{
		$data = array();
		$tjsp = new Tjsp();
		$proposta = new Proposta();
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('tjsp')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$q1 = '1';
		$q2 = '10';
		$q3 = '11';
		$q4 = '14';
		$q5 = '15';

		$data['tjsp_info'] = $tjsp->getInfo($id);
		$data['admin'] = $u->hasPermission('is_admin');
		$data['calculadora'] = $proposta->getInfo($id, 'tjsp');
		$data['count_calc'] = $proposta->getLast($id, 'tjsp');
		$data['users'] = $u->getListQualifiedsUsers($q1, $q2, $q3, $q4, $q5);
		$this->loadTemplate('tjsp_edit', $data);
	}

	public function update($id)
	{
		$u = new Users();
		$tjsp = new Tjsp();
		$u->setLoggedUser();

		if (!$u->hasPermission('tjsp')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$processo = addslashes($_POST['processo']);
		$nat = addslashes($_POST['nat']);
		$nome = addslashes($_POST['nome']);
		$cpf = addslashes($_POST['cpf']);
		$n_ordem = addslashes($_POST['n_ordem']);
		$nome_advg = addslashes($_POST['nome_advg']);
		$oab = addslashes($_POST['oab']);
		$vlr_pago = addslashes($_POST['vlr_pago']);
		$saldo = addslashes($_POST['saldo']);
		$tipo = addslashes($_POST['tipo']);
		$status = addslashes($_POST['status']);
		$historico = addslashes($_POST['historico']);
		$tel = addslashes($_POST['tel']);
		$cel = addslashes($_POST['cel']);
		$tel_fixo = addslashes($_POST['tel_fixo']);
		$email = addslashes($_POST['email']);
		$endereco = addslashes($_POST['endereco']);

		if (!empty($_POST['user_id'])) {
			$user_id = addslashes($_POST['user_id']);
		} else {
			$user_id = 'empty';
		}

		$tjsp->update(
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
		);
		header("Location: " . BASE_URL . "tjsp/edit/".$id);
	}

	public function show($id)
	{
		$data = array();
		$u = new Users();
		$tjsp = new Tjsp();
		$u->setLoggedUser();

		if (!$u->hasPermission('tjsp')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['tjsp_info'] = $tjsp->getInfo($id);
		$this->loadTemplate('tjsp_show', $data);
	}

	public function search()
	{
		$data = array();
		$u = new Users();
		$tjsp = new Tjsp();
		$u->setLoggedUser();

		if (!$u->hasPermission('tjsp')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$search_id = addslashes($_POST['search_id']);
		$search_nome = addslashes($_POST['search_nome']);
		$search_cpf = addslashes($_POST['search_cpf']);
		$search_processo = addslashes($_POST['search_processo']);
		$search_n_ordem = addslashes($_POST['search_n_ordem']);
		$search_tipo = addslashes($_POST['search_tipo']);
		$search_status = addslashes($_POST['search_status']);

		if (!empty($_POST['search_id'])) {
			$id = "id LIKE '$search_id' OR";
		} else {
			$id = "";
		}

		if (!empty($_POST['search_nome'])) {
			$nome = "nome LIKE '%$search_nome%' OR";
		} else {
			$nome = "";
		}

		if (!empty($_POST['search_cpf'])) {
			$cpf = "cpf LIKE '%$search_cpf%' OR";
		} else {
			$cpf = "";
		}

		if (!empty($_POST['search_processo'])) {
			$processo = "processo LIKE '%$search_processo%' OR";
		} else {
			$processo = "";
		}

		if (!empty($_POST['search_n_ordem'])) {
			$n_ordem = "n_ordem LIKE '%$search_n_ordem%' OR";
		} else {
			$n_ordem = "";
		}

		if (!empty($_POST['search_tipo'])) {
			$tipo = "tipo LIKE '%$search_tipo%' OR";
		} else {
			$tipo = "";
		}

		if (!empty($_POST['search_status'])) {
			$status = "status LIKE '%$search_status%' OR";
		} else {
			$status = "";
		}

		$search = "$id $nome $cpf $processo $n_ordem $tipo $status";

		$data['list_search'] = $tjsp->getSearch($search);
		$this->loadTemplate("tjsp_search", $data);
	}

	public function destroy($id)
	{
		$u = new Users();
		$tjsp = new Tjsp();
		$u->setLoggedUser();

		if (!$u->hasPermission('tjsp')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$tjsp->destroy($id);
		header("Location: " . BASE_URL . "tjsp");
	}

	public function settings_edit() {
		$u = new Users();
		$tjsp = new Tjsp();
		$u->setLoggedUser();

		if (!$u->hasPermission('tjsp')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$q1 = '1';
		$q2 = '10';
		$q3 = '11';
		$q4 = '14';
		$q5 = '15';

		$tjsp->settingsEdit($q1, $q2, $q3, $q4, $q5);
		header("Location: " . BASE_URL . "users/settings_success");
	}

	public function delete_check_users(){
		$u = new Users();
		$tjsp = new Tjsp();
		$u->setLoggedUser();

		if (!$u->hasPermission('tjsp')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		
		$delete_values = addslashes($_POST['checks_value']);

		$tjsp->deleteCheckUsers($delete_values);

		header("Location: " . BASE_URL . "tjsp");

	}
}
