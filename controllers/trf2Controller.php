<?php
class trf2Controller extends controller
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
		$trf2 = new Trf2();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf2')) {
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

		$data['trf2_list'] = $trf2->getList($offset, $u->getId());
		$data['trf2_count'] = $trf2->getCount($u->getId());
		$data['p_count'] = ceil($data['trf2_count'] / 15);
		$data['counter'] = $data['trf2_count'];
		$data['admin'] = $u->hasPermission('is_admin');

		$this->loadTemplate('trf2', $data);
	}

	public function create()
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf2')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$q1 = '1';
		$q2 = '10';
		$q3 = '12';
		$q4 = '14';
		$q5 = '16';

		$data['admin'] = $u->hasPermission('is_admin');
		$data['users'] = $u->getListQualifiedsUsers($q1, $q2, $q3, $q4, $q5);
		$this->loadTemplate('trf2_create', $data);
	}

	public function store()
	{
		$u = new Users();
		$trf2 = new Trf2();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf2')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$ANO_PROPOSTA = addslashes($_POST['ANO_PROPOSTA']);
		$NUMERO_DO_PRECATORIO = addslashes($_POST['NUMERO_DO_PRECATORIO']);
		$CREDOR = addslashes($_POST['CREDOR']);
		$CPF_CNPJ = addslashes($_POST['CPF_CNPJ']);
		$ADVOGADO = addslashes($_POST['ADVOGADO']);
		$OAB = addslashes($_POST['OAB']);
		$REQUERIDO = addslashes($_POST['REQUERIDO']);
		$VALOR = addslashes($_POST['VALOR']);
		$OFICIO = addslashes($_POST['OFICIO']);
		$PROCESSO_ORIGINARIO = addslashes($_POST['PROCESSO_ORIGINARIO']);
		$STATUS = addslashes($_POST['STATUS']);
		$HISTORICO = addslashes($_POST['HISTORICO']);
		$TEL = addslashes($_POST['TEL']);
		$CEL = addslashes($_POST['CEL']);
		$TEL_FIXO = addslashes($_POST['TEL_FIXO']);
		$EMAIL = addslashes($_POST['EMAIL']);
		$ENDERECO = addslashes($_POST['ENDERECO']);
		$user_id = addslashes($_POST['user_id']);

		$trf2->create(
			$ANO_PROPOSTA,
			$NUMERO_DO_PRECATORIO,
			$CREDOR,
			$CPF_CNPJ,
			$ADVOGADO,
			$OAB,
			$REQUERIDO,
			$VALOR,
			$OFICIO,
			$PROCESSO_ORIGINARIO,
			$STATUS,
			$HISTORICO,
			$TEL,
			$CEL,
			$TEL_FIXO,
			$EMAIL,
			$ENDERECO,
			$user_id
		);
		header("Location: " . BASE_URL . "trf2");
	}

	public function edit($ID)
	{
		$data = array();
		$trf2 = new Trf2();
		$proposta = new Proposta();
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf2')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$q1 = '1';
		$q2 = '10';
		$q3 = '12';
		$q4 = '14';
		$q5 = '16';

		$data['trf2_info'] = $trf2->getInfo($ID);
		$data['admin'] = $u->hasPermission('is_admin');
		$data['calculadora'] = $proposta->getInfo($ID, 'trf2');
		$data['count_calc'] = $proposta->getLast($ID, 'trf2');
		$data['users'] = $u->getListQualifiedsUsers($q1, $q2, $q3, $q4, $q5);
		$this->loadTemplate('trf2_update', $data);
	}

	public function update($ID)
	{
		$u = new Users();
		$trf2 = new Trf2();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf2')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$ANO_PROPOSTA = addslashes($_POST['ANO_PROPOSTA']);
		$NUMERO_DO_PRECATORIO = addslashes($_POST['NUMERO_DO_PRECATORIO']);
		$CREDOR = addslashes($_POST['CREDOR']);
		$CPF_CNPJ = addslashes($_POST['CPF_CNPJ']);
		$ADVOGADO = addslashes($_POST['ADVOGADO']);
		$OAB = addslashes($_POST['OAB']);
		$REQUERIDO = addslashes($_POST['REQUERIDO']);
		$VALOR = addslashes($_POST['VALOR']);
		$OFICIO = addslashes($_POST['OFICIO']);
		$PROCESSO_ORIGINARIO = addslashes($_POST['PROCESSO_ORIGINARIO']);
		$STATUS = addslashes($_POST['STATUS']);
		$HISTORICO = addslashes($_POST['HISTORICO']);
		$TEL = addslashes($_POST['TEL']);
		$CEL = addslashes($_POST['CEL']);
		$TEL_FIXO = addslashes($_POST['TEL_FIXO']);
		$EMAIL = addslashes($_POST['EMAIL']);
		$ENDERECO = addslashes($_POST['ENDERECO']);

		
		if (!empty($_POST['user_id'])) {
			$user_id = addslashes($_POST['user_id']);
		} else {
			$user_id = 'empty';
		}

		$trf2->update(
			$ID,
			$ANO_PROPOSTA,
			$NUMERO_DO_PRECATORIO,
			$CREDOR,
			$CPF_CNPJ,
			$ADVOGADO,
			$OAB,
			$REQUERIDO,
			$VALOR,
			$OFICIO,
			$PROCESSO_ORIGINARIO,
			$STATUS,
			$HISTORICO,
			$TEL,
			$CEL,
			$TEL_FIXO,
			$EMAIL,
			$ENDERECO,
			$user_id
		);
		header("Location: " . BASE_URL . "trf2/edit/".$ID);
	}

	public function show($id)
	{
		$data = array();
		$u = new Users();
		$trf2 = new Trf2();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf2')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['trf2_info'] = $trf2->getInfo($id);
			$this->loadTemplate('trf2_show', $data);
	}

	public function destroy($id)
	{
		$u = new Users();
		$trf2 = new Trf2();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf2')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$trf2->destroy($id);
			header("Location: " . BASE_URL . "trf2");
	}

	public function search()
    {
        $data = array();
        $u = new Users();
		$trf2 = new Trf2();
        $u->setLoggedUser();

		if (!$u->hasPermission('trf2')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$search_id = addslashes($_POST['search_id']);
		$search_numero = addslashes($_POST['search_numero']);
		$search_credor = addslashes($_POST['search_credor']);
		$search_cpf_cnpj = addslashes($_POST['search_cpf_cnpj']);
		$search_ano_proposta = addslashes($_POST['search_ano_proposta']);
		$search_status = addslashes($_POST['search_status']);

		if(!empty($_POST['search_id'])) {
			$id = "ID LIKE '$search_id' OR";
		} else{
			$id = "";
		}

		if(!empty($_POST['search_numero'])) {
            $numero = "NUMERO_DO_PRECATORIO LIKE '%$search_numero%' OR";
        } else{
            $numero = "";
        }

		if(!empty($_POST['search_credor'])) {
            $credor = "CREDOR LIKE '%$search_credor%' OR";
        } else{
            $credor = "";
        }

		if(!empty($_POST['search_cpf_cnpj'])) {
            $cpf_cnpj = "CPF_CNPJ LIKE '%$search_cpf_cnpj%' OR";
        } else{
            $cpf_cnpj = "";
        }

		if(!empty($_POST['search_ano_proposta'])) {
            $ano_proposta = "ANO_PROPOSTA LIKE '%$search_ano_proposta%' OR";
        } else{
            $ano_proposta = "";
        }

		if(!empty($_POST['search_status'])) {
            $status = "STATUS LIKE '%$search_status%' OR";
        } else{
            $status = "";
        }

		$search = "$id $numero $credor $cpf_cnpj $ano_proposta $status";


        $data['list_search'] = $trf2->getSearch($search);
        $this->loadTemplate("trf2_search", $data);
    }

	public function settings_edit() {
		$u = new Users();
		$trf2 = new Trf2();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf2')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$q1 = '1';
		$q2 = '10';
		$q3 = '12';
		$q4 = '14';
		$q5 = '16';

		$trf2->settingsEdit($q1, $q2, $q3, $q4, $q5);
		header("Location: " . BASE_URL . "users/settings_success");
	}

	public function delete_check_users(){
		$u = new Users();
		$trf2 = new Trf2();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf2')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		
		$delete_values = addslashes($_POST['checks_value']);

		$trf2->deleteCheckUsers($delete_values);

		header("Location: " . BASE_URL . "trf2");

	}

}
