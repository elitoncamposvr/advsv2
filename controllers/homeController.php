<?php
class homeController extends controller
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
        $trf2 = new Trf2();
        $trf3 = new Trf3();
		$u->setLoggedUser();
        $data['username'] = $u->getName();
        $data['tsjp_count'] = $tjsp->getCountTotal();
        $data['trf2_count'] = $trf2->getCountTotal();
        $data['trf3_count'] = $trf3->getCountTotal();

        $this->loadTemplate('home', $data);
    }

    public function unauthorized()
    {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();

        $this->loadTemplate('unauthorized', $data);
    }
}
