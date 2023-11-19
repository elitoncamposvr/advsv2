<div class="breadcrumb">
	<span class="breadcrumb-title">Usuários</span>
	<span class="breadcrumb-btns">
		<span class="px-2">
			<a href="<?php echo BASE_URL; ?>users/create" class="btn hover:btn-hover"><i class="fa-solid fa-plus"></i> Novo</a>
		</span>
	</span>
</div>

<!-- Cabeçalho da Tabela (Table Header) -->
<div class="table-header">
	<div class="w-5/12">Email/Login</div>
	<div class="w-3/12 txt-center">Nome de Usuário</div>
	<div class="w-3/12 txt-center">Grupo de Permissões</div>
	<div class="w-1/12"></div>
</div>

<!-- Dados da Tabela (Table Data) -->
<?php foreach ($users_list as $us) : ?>
	<div class="table-data hover:bg-slate-200">
		<div class="w-5/12"><?php echo $us['email']; ?></div>
		<div class="w-3/12 txt-center"><?php echo $us['name_user']; ?></div>
		<div class="w-3/12 txt-center"><?php echo $us['name']; ?></div>
		<div class="w-1/12 text-center">
			<a class="mx-2" href="<?php echo BASE_URL; ?>users/edit/<?php echo $us['id']; ?>"><i class="fas fa-edit"></i></a>
			<a href="<?php echo BASE_URL; ?>users/destroy/<?php echo $us['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i></a>
		</div>
	</div>
<?php endforeach; ?>