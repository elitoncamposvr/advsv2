<div class="breadcrumb">
	<span class="breadcrumb-title">Usuários <i class="fa-solid fa-chevron-right px-2"></i> Permissões <i class="fa-solid fa-chevron-right px-2"></i> Adicionar</span>
</div>


<form class="w-full flex flex-col" action="<?php echo BASE_URL; ?>users/permissions_store" method="POST">
	<div class="input-line">
		<div class="w-1/2 mr-2">
			<label for="name">Nome da Permissão</label>
			<input type="text" name="name" id="name" class="w-full" required>
		</div>
		<div class="w-1/2">
			<label for="permission_title">Título da Permissão</label>
			<input type="text" name="permission_title" id="permission_title" class="w-full">
		</div>
	</div>

	<div class="input-line justify-center">
		<button class="btn" type="submit">
			Adicionar Permissão
		</button>
	</div>
</form>