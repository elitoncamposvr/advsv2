<?php
class ajaxController extends controller
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

	// public function search_clients(){
	// 	$data = array();
	// 	$u = new Users();
	// 	$u->setLoggedUser();
	// 	$c = new Clients();

	// 	if(isset($_GET['q']) && !empty($_GET['q'])){
	// 		$q = addslashes($_GET['q']);

	// 		$clients = $c->searchClientByName($q, $u->getCompany());

	// 		foreach($clients as $citem){
	// 			$data[] = array(
	// 				'name' => $citem['name'],
	// 				'link' => BASE_URL.'clients/view/'.$citem['id'],
	// 				'id' => $citem['id']
	// 			);
	// 		}
	// 	}

	// 	echo json_encode($data);
	// }

	// public function search_products(){
	// 	$data = array();
	// 	$u = new Users();
	// 	$u->setLoggedUser();
	// 	$i = new Inventory();

	// 	if(isset($_GET['q']) && !empty($_GET['q'])){
	// 		$q = addslashes($_GET['q']);

	// 		$data = $i->searchProductsByName($q, $u->getCompany());
	// 	}

	// 	echo json_encode($data);

	// }

	public function add_client(){
		$data = array();
		$u = new Users();
		$u->setLoggedUser();
		$sh = new Schedule();

		if(isset($_POST['name']) && !empty($_POST['name'])){
			$name = addslashes($_POST['name']);
			$reason = addslashes($_POST['reason']);
			$schedule_date = addslashes($_POST['schedule_date']);
			$client_type = addslashes($_POST['client_type']);

			$data['id'] = $client_id = $sh->add($name, $reason, $schedule_date, $client_type, $u->getId());
		}

		echo json_encode($data);
	}
}
