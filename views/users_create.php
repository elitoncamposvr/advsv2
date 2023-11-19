<div class="breadcrumb">
	<span class="breadcrumb-title">Usuários <i class="fa-solid fa-chevron-right px-2"></i> Adicionar</span>
</div>

<form class="flex w-full flex-col" action="<?php echo BASE_URL; ?>users/store" method="post">
	<div class="input-line">
		<div class="w-1/2 mr-2">
			<label for="name_user">Nome de Usuário</label>
			<input type="text" name="name_user" id="name_user" required class="w-full" autofocus>
		</div>
		<div class="w-1/2">
			<label for="email">E-mail</label>
			<input type="email" name="email" id="email" required class="w-full">
		</div>
	</div>

	<div class="input-line">
		<div class="w-1/2 mr-2">
			<label for="password">Senha</label>
			<input type="password" name="password" id="password" required class="w-full">
		</div>
		<div class="w-1/2">
			<label for="group">Grupo de Permissões</label>
			<select name="group" id="group" class="w-full">
				<?php foreach ($group_list as $g) : ?>
					<option value="<?php echo $g['id']; ?>"><?php echo $g['name']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="input-line justify-center">
		<button type="submit" class="btn">
			Adicionar Usuário
		</button>
	</div>
</form>