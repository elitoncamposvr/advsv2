<div class="breadcrumb">
	<span class="breadcrumb-title">Usuários <i class="fa-solid fa-chevron-right px-2"></i> Editar</span>
</div>

<?php if (isset($error_msg) && !empty($error_msg)) : ?>
	<div class="flash_warning"><?php echo $error_msg; ?></div>
<?php endif; ?>

<div class="data_info">
	<p><span class="bold">Usuário: </span><?php echo $user_info['email']; ?></p>
</div>

<form method="post" class="w-full flex flex-col" action="<?php echo BASE_URL; ?>users/update/<?php echo $user_info['id']; ?>">
	<div class="input-line">
		<div class="w-1/2 mr-2">
			<label for="name_user">Nome de Usuário</label>
			<input type="text" name="name_user" id="name_user" required class="w-full" value="<?php echo $user_info['name_user']; ?>">
		</div>
		<div class="w-1/2">
			<label for="password">Senha</label>
			<input type="password" name="password" id="password" class="w-full">
		</div>
	</div>
	<div class="input-line">
		<div class="w-1/2">
			<label for="group">Grupo de Permissões</label>
			<select name="group" id="group" class="txt-up w-full">
				<?php foreach ($group_list as $g) : ?>
					<option value="<?php echo $g['id']; ?>" <?php echo ($g['id'] == $user_info['id_group']) ? 'selected="selected"' : ''; ?>><?php echo $g['name']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>

	<div class="input-line justify-center">
		<button type="submit" class="btn">
			Editar Usuário
		</button>
	</div>
</form>