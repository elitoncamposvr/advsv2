<?php
class trf3Controller extends controller
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
		$trf3 = new Trf3();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf3')) {
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

		$offset = (15 * ($data['p'] - 1));

		$data['trf3_list'] = $trf3->getList($offset, $u->getId());
		$data['trf3_count'] = $trf3->getCount($u->getId());
		$data['p_count'] = ceil($data['trf3_count'] / 15);
		$data['counter'] = $data['trf3_count'];
		$data['admin'] = $u->hasPermission('is_admin');

		$this->loadTemplate('trf3', $data);
	}

	public function create()
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf3')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$q1 = '1';
		$q2 = '10';
		$q3 = '13';
		$q4 = '15';
		$q5 = '16';

		$data['admin'] = $u->hasPermission('is_admin');
		$data['users'] = $u->getListQualifiedsUsers($q1, $q2, $q3, $q4, $q5);
		$this->loadTemplate('trf3_create', $data);
	}

	public function store()
	{
		$u = new Users();
		$trf3 = new Trf3();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf3')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$ano_proposta = addslashes($_POST['ano_proposta']);
		$numero = addslashes($_POST['numero']);
		$ofcreq = addslashes($_POST['ofcreq']);
		$proc_orig = addslashes($_POST['proc_orig']);
		$requerido = addslashes($_POST['requerido']);
		$requerentes = addslashes($_POST['requerentes']);
		$advogado = addslashes($_POST['advogado']);
		$data_conta_liq = addslashes($_POST['data_conta_liq']);
		$vlr_solicitado = addslashes($_POST['vlr_solicitado']);
		$vlr_inscritopr = addslashes($_POST['vlr_inscritopr']);
		$req_bloqueada = addslashes($_POST['req_bloqueada']);
		$situ_requisic = addslashes($_POST['situ_requisic']);
		$natureza = addslashes($_POST['natureza']);
		$cpf = addslashes($_POST['cpf']);
		$assunto = addslashes($_POST['assunto']);
		$status = addslashes($_POST['status']);
		$historico = addslashes($_POST['historico']);
		$tel = addslashes($_POST['tel']);
		$cel = addslashes($_POST['cel']);
		$tel_fixo = addslashes($_POST['tel_fixo']);
		$email = addslashes($_POST['email']);
		$endereco = addslashes($_POST['endereco']);
		$user_id = addslashes($_POST['user_id']);

		$trf3->create(
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
		);
		header("Location: " . BASE_URL . "trf3");
	}

	public function edit($id)
	{
		$data = array();
		$trf3 = new Trf3();
		$proposta = new Proposta();
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf3')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$q1 = '1';
		$q2 = '10';
		$q3 = '13';
		$q4 = '15';
		$q5 = '16';

		$data['trf3_info'] = $trf3->getInfo($id);
		$data['admin'] = $u->hasPermission('is_admin');
		$data['calculadora'] = $proposta->getInfo($id, 'trf3');
		$data['count_calc'] = $proposta->getLast($id, 'trf3');
		$data['users'] = $u->getListQualifiedsUsers($q1, $q2, $q3, $q4, $q5);
		$this->loadTemplate('trf3_update', $data);
	}

	public function update($id)
	{
		$u = new Users();
		$trf3 = new Trf3();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf3')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$ano_proposta = addslashes($_POST['ano_proposta']);
		$numero = addslashes($_POST['numero']);
		$ofcreq = addslashes($_POST['ofcreq']);
		$proc_orig = addslashes($_POST['proc_orig']);
		$requerido = addslashes($_POST['requerido']);
		$requerentes = addslashes($_POST['requerentes']);
		$advogado = addslashes($_POST['advogado']);
		$data_conta_liq = addslashes($_POST['data_conta_liq']);
		$vlr_solicitado = addslashes($_POST['vlr_solicitado']);
		$vlr_inscritopr = addslashes($_POST['vlr_inscritopr']);
		$req_bloqueada = addslashes($_POST['req_bloqueada']);
		$situ_requisic = addslashes($_POST['situ_requisic']);
		$natureza = addslashes($_POST['natureza']);
		$cpf = addslashes($_POST['cpf']);
		$assunto = addslashes($_POST['assunto']);
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

		$trf3->update(
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
		);
		header("Location: " . BASE_URL . "trf3/edit/".$id);
	}

	public function show($id)
	{
		$data = array();
		$u = new Users();
		$trf3 = new Trf3();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf3')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['trf3_info'] = $trf3->getInfo($id);
		$this->loadTemplate('trf3_show', $data);
	}

	public function search()
	{
		$data = array();
		$u = new Users();
		$trf3 = new Trf3();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf3')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$search_id = addslashes($_POST['search_id']);
		$search_numero = addslashes($_POST['search_numero']);
		$search_requerentes = addslashes($_POST['search_requerentes']);
		$search_cpf = addslashes($_POST['search_cpf']);
		$search_ano_proposta = addslashes($_POST['search_ano_proposta']);
		$search_status = addslashes($_POST['search_status']);

		if (!empty($_POST['search_id'])) {
			$id = "id LIKE '$search_id' OR";
		} else {
			$id = "";
		}

		if (!empty($_POST['search_numero'])) {
			$numero = "numero LIKE '%$search_numero%' OR";
		} else {
			$numero = "";
		}

		if (!empty($_POST['search_requerentes'])) {
			$requerentes = "requerentes LIKE '%$search_requerentes%' OR";
		} else {
			$requerentes = "";
		}

		if (!empty($_POST['search_cpf'])) {
			$cpf = "cpf LIKE '%$search_cpf%' OR";
		} else {
			$cpf = "";
		}

		if (!empty($_POST['search_ano_proposta'])) {
			$ano_proposta = "ano_proposta LIKE '%$search_ano_proposta%' OR";
		} else {
			$ano_proposta = "";
		}

		if (!empty($_POST['search_status'])) {
			$status = "status LIKE '%$search_status%' OR";
		} else {
			$status = "";
		}

		$search = "$id $numero $requerentes $cpf $ano_proposta $status";

		$data['list_search'] = $trf3->getSearch($search);
		$this->loadTemplate("trf3_search", $data);
	}

	public function destroy($id)
	{
		$u = new Users();
		$trf3 = new Trf3();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf3')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$trf3->destroy($id);
		header("Location: " . BASE_URL . "trf3");
	}

	public function settings_edit() {
		$u = new Users();
		$trf3 = new Trf3();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf3')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$q1 = '1';
		$q2 = '10';
		$q3 = '13';
		$q4 = '15';
		$q5 = '16';

		$trf3->settingsEdit($q1, $q2, $q3, $q4, $q5);
		header("Location: " . BASE_URL . "users/settings_success");
	}

	public function delete_check_users(){
		$u = new Users();
		$trf3 = new Trf3();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf3')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		
		$delete_values = addslashes($_POST['checks_value']);

		$trf3->deleteCheckUsers($delete_values);

		header("Location: " . BASE_URL . "trf3");

	}

}
