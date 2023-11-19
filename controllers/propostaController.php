<?php

require_once __DIR__ . '/../vendor/autoload.php';
class propostaController extends controller
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
	}

	public function store()
	{
		$data = array();
		$u = new Users();
		$proposta = new Proposta();
		$u->setLoggedUser();

		if (!$u->hasPermission('proposta')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

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

		$proposta->store(
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
			$id_tabela);
	}

	public function store_without_pdf()
	{
		$data = array();
		$u = new Users();
		$proposta = new Proposta();
		$u->setLoggedUser();

		if (!$u->hasPermission('proposta')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

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

		$proposta->store(
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
			$id_tabela);

		$data['success'] = "Proposta cadastrada com sucesso!";
		header("Location: " . BASE_URL . $tipo . "/edit/" . $id_tabela);
	}

	public function update($id)
	{
		$data = array();
		$u = new Users();
		$proposta = new Proposta();
		$u->setLoggedUser();

		if (!$u->hasPermission('proposta')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}


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

		$proposta->update(
			$id, 
			$vlr_atualizado, 
			$honorarios_perc, 
			$honorarios_vlr, 
			$ir_perc, $ir_vlr, 
			$rra_perc, $rra_vlr, 
			$pss_perc, 
			$pss_vlr, 
			$vlr_liquido, 
			$proposta_perc, 
			$proposta_vlr, 
			$max_perc, 
			$max_vlr, 
			$id_processo, 
			$tipo, 
			$id_tabela);
	}

	public function update_without_pdf($id)
	{
		$data = array();
		$u = new Users();
		$proposta = new Proposta();
		$u->setLoggedUser();

		if (!$u->hasPermission('proposta')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}


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

		$proposta->update(
			$id, 
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
			$id_tabela);
		$data['success'] = "Proposta alterada com sucesso!";
		header("Location: ".BASE_URL.$tipo."/edit/".$id_tabela);
	}
}
