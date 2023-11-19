<!-- Breadcrumbs -->
<div class="breadcrumb">
	<h2>Fornecedores<i class="fas fa-angle-right fa-xs"></i>Adicionar</h2>

	<span>
		<a class="btn" href="<?php echo BASE_URL; ?>provider"><i class="fas fa-angle-double-left"></i> Voltar</a>
	</span>
</div>

<div class="content">
	<!-- Message Error (Mensagem de Erro) -->
	<?php if (isset($error_msg) && !empty($error_msg)) : ?>
		<div class="flash_warning"><?php echo $error_msg; ?></div>
	<?php endif; ?>

	<!-- Formulário - Dados Pessoais (Form - Personal Data) -->
	<form method="POST" autocomplete="off">
		<div class="w-100 wrap my-s rounded-m">
			<label for="provider_type" class="w-100 wrap">Tipo de Fornecedor</label><br>
			<select class="my-s change_type" name="provider_type" id="provider_type">
				<option value="1" id="cpf">Pessoa Física</option>
				<option value="2" id="cnpj">Pessoa Jurídica</option>
			</select>
		</div>
		<div class="table-line">
			<div class="table-70 my-s space-input">
				<label for="name_provider" class="cpf hide">Nome</label>
				<label for="name_provider" class="cnpj hide">Razão Social</label>
				<input class="w-100" type="text" name="name_provider" id="name_provider" autofocus required>
			</div>
			<div class="table-30 my-s">
				<label for="contact_name">Contato</label>
				<input class="w-100" type="text" name="contact_name" id="contact_name">
			</div>
		</div>

		<!-- Telefones (Phones) -->
		<div class="table-line">
			<div class="table-35 my-s space-input">
				<label for="phone">Telefone</label>
				<input class="w-100" type="text" name="phone" id="phone">
			</div>
			<div class="table-30 my-s space-input">
				<label for="cellphone">Celular</label>
				<input class="w-100" type="text" name="cellphone" id="cellphone">
			</div>
			<div class="table-35 my-s">
				<label for="whatsapp">WhatsApp</label>
				<input class="w-100" type="text" name="whatsapp" id="whatsapp">
			</div>
		</div>

		<!-- Documentos Pessoais (Personal Documents) -->
		<div class="table-line">
			<div class="table-35 my-s space-input">
				<label for="cpf" class="hide cpf">CPF</label>
				<label for="cpf" class="hide cnpj">CNPJ</label>
				<input class="cpf w-100 hide" type="text" name="cpf" id="cpf" placeholder="CPF">
				<input class="cnpj w-100 hide" type="text" name="cnpj" id="cnpj" placeholder="CNPJ">
			</div>
			<div class="table-35 my-s space-input">
				<label for="rg">RG</label>
				<input class="w-100" type="text" name="identity" id="identity">
			</div>
			<div class="table-30 my-s">
				<label for="birth_date">Data Nascimento</label>
				<input class="w-100" type="text" name="birth_date" id="birth_date">
			</div>
		</div>

		<!-- Dados Adicionais (Optional Data) -->
		<div class="table-line">
			<div class="table-35 my-s space-input">
				<label for="state_registration">Inscrição Estadual</label>
				<input class="w-100" type="text" name="state_registration" id="state_registration">
			</div>
			<div class="table-35 my-s space-input">
				<label for="email">Email</label>
				<input class="w-100" type="text" name="email" id="email">
			</div>
            <div class="table-30 my-s">
				<label for="site">Site</label>
				<input class="w-100" type="text" name="site" id="site">
			</div>
		</div>
		<div class="w-100">
			<label for="aditional_info">Observações</label>
			<textarea name="aditional_info" id="aditional_info" class="w-100"></textarea>
		</div>

		<!-- Endereço (Adress) -->
		<h2 class="w-100 spt my-l">Endereço</h2>
		<div class="table-line">
			<div class="table-25 my-s space-input">
				<label for="address_zipcode">CEP</label>
				<input type="text" class="w-100" name="address_zipcode" id="address_zipcode" onblur="pesquisacep(this.value);">
			</div>
			<div class="table-50 my-s space-input">
				<label for="rg">Rua</label>
				<input class="w-100" type="text" name="address" id="address">
			</div>
			<div class="table-25 my-s">
				<label for="address_number">Número</label>
				<input class="w-100" type="text" name="address_number" id="address_number">
			</div>
		</div>
		<div class="table-line">
			<div class="table-35 my-s space-input">
				<label for="address2">Complemento</label>
				<input type="text" class="w-100" name="address2" id="address2">
			</div>
			<div class="table-25 my-s space-input">
				<label for="address_neighb">Bairro</label>
				<input type="text" class="w-100" name="address_neighb" id="address_neighb">
			</div>
			<div class="table-25 my-s space-input">
				<label for="address_city">Cidade</label>
				<input type="text" class="w-100" name="address_city" id="address_city">
			</div>
			<div class="table-15 my-s">
				<label for="address_state">Estado</label>
				<input type="text" class="w-100" name="address_state" maxlength="2" id="address_state">
			</div>
		</div>

		<!-- Botões (Button) -->
		<div class="w-100 txt-center my-el">
			<button type="submit">
				Adicionar Cliente
			</button>
		</div>
	</form>
</div>

<!-- SCRIPTS JS -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/general_mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/change_items.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/cep.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_price.js"></script>