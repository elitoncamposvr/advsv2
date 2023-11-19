<?php
class reportController extends controller
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
		$u->setLoggedUser();
		$company = new Companies($u->getCompany());
		$data['company_name'] = $company->getName();
		$data['user_email'] = $u->getEmail();

		if ($u->hasPermission('report_view')) {

			$this->loadTemplate('report', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function total()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();
		$company = new Companies($u->getCompany());
		$data['company_name'] = $company->getName();
		$data['user_email'] = $u->getEmail();

		$pd = new Provider();

		if ($u->hasPermission('report_view')) {
			

			$data['users_list'] = $u->getListAll($u->getCompany());
			$data['provider_list'] = $pd->getListProvider($u->getCompany());

			$this->loadTemplate('report_total', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function total_pdf()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();


		if ($u->hasPermission('report_view')) {
			$sch = new Schedule();
			$period1 = addslashes($_GET['period1']);
			$period2 = addslashes($_GET['period2']);
			$id_user = addslashes($_GET['id_user']);
			$provider_id = addslashes($_GET['provider_id']);

			if ($id_user != 0){
				$where_user = "schedule.id_user = $id_user AND";
			} else{
				$where_user = "";
			}

			if ($provider_id != 0){
				$where_provider = "schedule.provider_id = $provider_id AND";
			} else{
				$where_provider = "";
			}

			$data['total_list'] = $sch->getTotalFiltered($period1, $period2, $where_user, $where_provider, $u->getCompany());

			$data['filters'] = $_GET;

			$data['filters'] = $_GET;

			$this->loadTemplate('report_total_pdf', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function services()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();
		$company = new Companies($u->getCompany());
		$data['company_name'] = $company->getName();
		$data['user_email'] = $u->getEmail();

		$sch = new Schedule();
		$pd = new Provider();

		if ($u->hasPermission('report_view')) {
			
			$data['provider_list'] = $pd->getListProvider($u->getCompany());

			$this->loadTemplate('report_services', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function services_pdf()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();
		
		if ($u->hasPermission('report_view')) {
			$sch = new Schedule();
			$period1 = addslashes($_GET['period1']);
			$period2 = addslashes($_GET['period2']);
			$provider_id = addslashes($_GET['provider_id']);

			if ($provider_id != 0){
				$where_provider = "schedule_services.provider_id = $provider_id AND";
			} else{
				$where_provider = "";
			}

			$data['total_list'] = $sch->getServicesFiltered($period1, $period2, $where_provider, $u->getCompany());

			$data['filters'] = $_GET;

			$this->loadTemplate('report_services_pdf', $data);

	
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function comissions()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();
		$company = new Companies($u->getCompany());
		$data['company_name'] = $company->getName();
		$data['user_email'] = $u->getEmail();

		$pd = new Provider();

		if ($u->hasPermission('report_view')) {

			$data['provider_list'] = $pd->getListProvider($u->getCompany());
			$this->loadTemplate('report_comissions', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function comissions_pdf()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();


		if ($u->hasPermission('report_view')) {
			$fn = new Financial();
			$period1 = addslashes($_GET['period1']);
			$period2 = addslashes($_GET['period2']);
			$supplier = addslashes($_GET['supplier']);

			if ($supplier != 0){
				$where_provider = "fn_comissions.supplier = $supplier AND";
			} else{
				$where_provider = "";
			}

			$data['total_list'] = $fn->getComissionsFiltered($period1, $period2, $where_provider, $u->getCompany());

			$data['filters'] = $_GET;

			$this->loadTemplate('report_comissions_pdf', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function averagecost()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();
		$company = new Companies($u->getCompany());
		$data['company_name'] = $company->getName();
		$data['user_email'] = $u->getEmail();

		$pd = new Provider();

		if ($u->hasPermission('report_view')) {

			$data['provider_list'] = $pd->getListProvider($u->getCompany());
			$this->loadTemplate('report_average_cost', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}

	public function averagecost_pdf()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();


		if ($u->hasPermission('report_view')) {
			$sch = new Schedule();
			$period1 = addslashes($_GET['period1']);
			$period2 = addslashes($_GET['period2']);
			$provider_id = addslashes($_GET['provider_id']);

			if ($provider_id != 0){
				$where_provider = "schedule.provider_id = $provider_id AND";
			} else{
				$where_provider = "";
			}

			$data['total_list'] = $sch->getAverageCost($where_provider, $period1, $period2, $u->getCompany());

			$data['filters'] = $_GET;

			$this->loadTemplate('report_average_cost_pdf', $data);
		} else {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
	}
}
