<div class="breadcrumb">
	<span class="breadcrumb-title">Usuários <i class="fa-solid fa-chevron-right px-2"></i> Permissões</span>
	<span class="breadcrumb-btns">
		<span class="px-2">
			<a href="<?php echo BASE_URL; ?>users/permissions_create" class="btn hover:btn-hover"><i class="fa-solid fa-plus"></i> Nova Permisssão</a>
		</span>
		<span>
			<a href="<?php echo BASE_URL; ?>users/permissions_group" class="btn hover:btn-hover"><i class="fa-solid fa-key"></i> Grupo de Permissões</a>
		</span>
	</span>
</div>

<div class="table-header">
	<div class="w-2/5">
		Título da Permissão
	</div>
	<div class="w-2/5">
		Nome da Permissão
	</div>
	<div class="w-1/5"></div>
</div>

<?php foreach ($permissions_list as $p) : ?>
	<div class="table-data hover:bg-slate-200">
		<div class="w-2/5">
			<?php echo $p['permission_title']; ?>
		</div>
		<div class="w-2/5">
			<?php echo $p['name']; ?>
		</div>
		<div class="w-1/5 text-center">
			<a href="<?php echo BASE_URL; ?>users/permissions_destroy/<?php echo $p['id']; ?>" onclick="return confirm('Deseja realmente excluir?')" title="Excluir"><i class="fas fa-trash-alt fa-lg"></i></a>
		</div>
	</div>
<?php endforeach; ?>