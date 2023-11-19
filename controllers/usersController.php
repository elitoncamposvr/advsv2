<?php
class usersController extends controller
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

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['users_list'] = $u->getList();
		$this->loadTemplate('users', $data);
	}

	public function create()
	{
		$data = array();
		$u = new Users();
		$p = new Permissions();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['group_list'] = $p->getGroupList();
		$this->loadTemplate('users_create', $data);
	}

	public function store()
	{
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		if (isset($_POST['email']) && !empty($_POST['email'])) {
			$name_user = addslashes($_POST['name_user']);
			$email = addslashes($_POST['email']);
			$pass = addslashes($_POST['password']);
			$group = addslashes($_POST['group']);

			$a = $u->create($name_user, $email, $pass, $group);

			if ($a == '1') {
				header("Location: " . BASE_URL . "users");
			} else {
				$data['error_msg'] = "Usuário já existe!";
			}
		}
	}

	public function edit($id)
	{
		$data = array();
		$u = new Users();
		$p = new Permissions();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['user_info'] = $u->getInfo($id);
		$data['group_list'] = $p->getGroupList();
		$this->loadTemplate('users_update', $data);
	}

	public function update($id)
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		if (isset($_POST['group']) && !empty($_POST['group'])) {
			$name_user = addslashes($_POST['name_user']);
			$pass = addslashes($_POST['password']);
			$group = addslashes($_POST['group']);

			$u->update($name_user, $pass, $group, $id);
			header("Location: " . BASE_URL . "users");
		}
	}

	public function destroy($id)
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$u->destroy($id);
		header("Location: " . BASE_URL . "users");
	}

	public function permissions()
	{
		$data = array();
		$u = new Users();
		$permissions = new Permissions();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
		$data['permissions_list'] = $permissions->getList();
		$this->loadTemplate('permissions', $data);
	}

	public function permissions_group()
	{
		$data = array();
		$u = new Users();
		$permissions = new Permissions();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['permissions_groups_list'] = $permissions->getGroupList();
		$this->loadTemplate('permissions_group', $data);
	}


	public function permissions_create()
	{
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}
		$this->loadTemplate('permissions_create');
	}

	public function permissions_store()
	{
		$data = array();
		$u = new Users();
		$permissions = new Permissions();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		if (isset($_POST['name']) && !empty($_POST['name'])) {
			$pname = addslashes($_POST['name']);
			$permission_title = addslashes($_POST['permission_title']);

			$permissions->create($pname, $permission_title);
			header("Location: " . BASE_URL . "users/permissions");
		}
	}

	public function permissions_create_group()
	{
		$data = array();
		$u = new Users();
		$permissions = new Permissions();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['permissions_list'] = $permissions->getList();
		$this->loadTemplate('permissions_create_group', $data);
	}


	public function permissions_store_group()
	{
		$data = array();
		$u = new Users();
		$permissions = new Permissions();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		if (isset($_POST['name']) && !empty($_POST['name'])) {
			$pname = addslashes($_POST['name']);
			$plist = $_POST['permissions'];

			$permissions->createGroup($pname, $plist);
			header("Location: " . BASE_URL . "users/permissions_group");
		}
	}

	public function permissions_destroy($id)
	{
		$u = new Users();
		$permissions = new Permissions();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$permissions->destroy($id);
		header("Location: " . BASE_URL . "users/permissions");
	}

	public function permissions_destroy_group($id)
	{
		$u = new Users();
		$permissions = new Permissions();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$permissions->destroyGroup($id);
		header("Location: " . BASE_URL . "users/permissions_group");
	}

	public function permissions_edit_group($id)
	{
		$data = array();
		$u = new Users();
		$permissions = new Permissions();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$data['permissions_list'] = $permissions->getList();
		$data['group_info'] = $permissions->getGroup($id);
		$this->loadTemplate('permissions_update_group', $data);
	}

	public function permissions_update_group($id)
	{
		$u = new Users();
		$permissions = new Permissions();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");	
		}

		if (isset($_POST['name']) && !empty($_POST['name'])) {
			$pname = addslashes($_POST['name']);
			$plist = $_POST['permissions'];

			$permissions->updateGroup($pname, $plist, $id);
			header("Location: " . BASE_URL . "users/permissions_group");
		}
	}

	public function clients(){
		$data = array();
		$u = new Users();
		$permissions = new Permissions();
		$u->setLoggedUser();

		if (!$u->hasPermission('users')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$this->loadTemplate('settings_clients');
	}

	public function settings_success(){
		$data = array();
		$u = new Users();
		$u->setLoggedUser();

		if (!$u->hasPermission('trf3')) {
			header("Location: " . BASE_URL . "home/unauthorized");
		}

		$this->loadTemplate("settings_success", $data);
	}
}
