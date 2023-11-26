<?php
require_once __DIR__ . '/../vendor/autoload.php';

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
		$proposta = new Proposta();
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

		$vlr_atualizado = addslashes($_POST['vlr_atualizado']);
		$honorarios_perc = addslashes($_POST['honorarios_perc']);
		$honorarios_vlr = addslashes($_POST['honorarios_vlr_exib']);
		$ir_perc = addslashes($_POST['ir_perc']);
		$ir_vlr = addslashes($_POST['ir_vlr']);
		$rra_perc = addslashes($_POST['rra_perc']);
		$rra_vlr = addslashes($_POST['rra_vlr']);
		$pss_perc = addslashes($_POST['pss_perc']);
		$pss_vlr = addslashes($_POST['pss_vlr_exib']);
		$vlr_liquido = addslashes($_POST['vlr_liquido_exib']);
		$proposta_vlr = addslashes($_POST['proposta_vlr']);
		$proposta_perc = addslashes($_POST['proposta_perc']);
		$max_perc = addslashes($_POST['max_perc']);
		$max_vlr = addslashes($_POST['max_vlr_exib']);
		$id_processo = addslashes($_POST['id_processo']);
		$tipo = addslashes($_POST['tipo']);
		$id_tabela = addslashes($_POST['id_tabela']);
		$calc_id = addslashes($_POST['calc_id']);


		$data['proposta'] = $_POST;


		ob_start();
		$this->loadView('proposta', $data);
		$proposta_pg = ob_get_contents();
		ob_end_clean();

		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'margin_left' => 0,
			'margin_right' => 0,
			'margin_top' => 0
		]);

		$mpdf->WriteHTML($proposta_pg);
		$mpdf->Output();

		if (!empty($_POST['user_id'])) {
			$user_id = addslashes($_POST['user_id']);
		} else {
			$user_id = 'empty';
		}
		$proposta->update(
			$calc_id,
			$vlr_atualizado,
			$honorarios_perc,
			$honorarios_vlr,
			$ir_perc,
			$ir_vlr,
			$rra_perc,
			$rra_vlr,
			$pss_perc,
			$pss_vlr,
			$vlr_liquido,
			$proposta_perc,
			$proposta_vlr,
			$max_perc,
			$max_vlr,
			$id_processo,
			$tipo,
			$id_tabela
		);

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
		header("Location: " . BASE_URL . "tjsp/edit/" . $id);
	}

	public function update_without_pdf($id)
	{
		$u = new Users();
		$tjsp = new Tjsp();
		$proposta = new Proposta();
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

		$vlr_atualizado = addslashes($_POST['vlr_atualizado']);
		$honorarios_perc = addslashes($_POST['honorarios_perc']);
		$honorarios_vlr = addslashes($_POST['honorarios_vlr_exib']);
		$ir_perc = addslashes($_POST['ir_perc']);
		$ir_vlr = addslashes($_POST['ir_vlr']);
		$rra_perc = addslashes($_POST['rra_perc']);
		$rra_vlr = addslashes($_POST['rra_vlr']);
		$pss_perc = addslashes($_POST['pss_perc']);
		$pss_vlr = addslashes($_POST['pss_vlr_exib']);
		$vlr_liquido = addslashes($_POST['vlr_liquido_exib']);
		$proposta_vlr = addslashes($_POST['proposta_vlr']);
		$proposta_perc = addslashes($_POST['proposta_perc']);
		$max_perc = addslashes($_POST['max_perc']);
		$max_vlr = addslashes($_POST['max_vlr_exib']);
		$id_processo = addslashes($_POST['id_processo']);
		$tipo = addslashes($_POST['tipo']);
		$id_tabela = addslashes($_POST['id_tabela']);
		$calc_id = addslashes($_POST['calc_id']);

		if (!empty($_POST['user_id'])) {
			$user_id = addslashes($_POST['user_id']);
		} else {
			$user_id = 'empty';
		}

		$proposta->update(
			$calc_id,
			$vlr_atualizado,
			$honorarios_perc,
			$honorarios_vlr,
			$ir_perc,
			$ir_vlr,
			$rra_perc,
			$rra_vlr,
			$pss_perc,
			$pss_vlr,
			$vlr_liquido,
			$proposta_perc,
			$proposta_vlr,
			$max_perc,
			$max_vlr,
			$id_processo,
			$tipo,
			$id_tabela
		);

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
		header("Location: " . BASE_URL . "tjsp/edit/" . $id);
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

	public function files($id)
	{
		$data = array();
		$u = new Users();
		$tjsp = new Tjsp();
		$u->setLoggedUser();

		if (!$u->hasPermission('tjsp')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['tjsp_info'] = $tjsp->getInfo($id);
		$data['images'] = $tjsp->getImages();
		$data['admin'] = $u->hasPermission('is_admin');
		$this->loadTemplate("tjsp_files", $data);
	}

	public function files_send()
	{
		$u = new Users();
		$tjsp = new Tjsp();
		$u->setLoggedUser();

		if (!$u->hasPermission('tjsp')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}


		if (isset($_FILES['image']) && !empty($_FILES['image'])) {
			$doc_name = addslashes($_POST['doc_name']);
			$client_id = addslashes($_POST['client_id']);
			$allowedFormats = array("png", "jpg", "jpeg", "gif", "doc", "docx", "xlxs", "csv", "xls",  "pdf", "txt");
			$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

			if (in_array($extension, $allowedFormats)) :
				$dir = "images/tjsp/";
				$tempFile = $_FILES['image']['tmp_name'];
				$image = "tjsp_" .  $client_id . "_" . uniqid() . ".$extension";

				if (move_uploaded_file($tempFile, $dir . $image)) :
					echo "Upload feito com sucesso";
				else :
					echo "Erro! Não foi possivel fazer o upload";
				endif;
			else :
				echo "Formato inválido";

			endif;
		}

		$tjsp->sendFiles(
			$doc_name,
			$client_id,
			$image,
			$u->getId()
		);

		header("Location: " . BASE_URL . "tjsp/files/" . $client_id);
	}

	public function settings_edit()
	{
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


	public function delete_check_users()
	{
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
