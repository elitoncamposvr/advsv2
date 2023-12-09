<div class="breadcrumb">
	<span class="breadcrumb-title">TJSP</span>
	<span class="breadcrumb-btns flex">
		<form action="<?php echo BASE_URL; ?>tjsp/delete_check_users" method="post">
			<input type="hidden" name="checks_value" id="checks_value">

			<?php if ($admin) : ?>
				<input type="submit" class="btn-danger hover:btn-danger--hover cursor-pointer" value="Excluir">
			<?php endif; ?>

			<a href="<?php echo BASE_URL; ?>tjsp/create" class="btn hover:btn-hover"><i class="fa-solid fa-plus"></i> Novo</a>
		</form>
	</span>
</div>

<div class="forms">
	<form class="form-search-right" action="<?php echo BASE_URL; ?>tjsp/search" method="post">
		<span class="mb-2 w-full flex">
			<input type="text" class="w-1/12 mr-1" name="search_id" id="search_id" placeholder="ID">
			<input type="text" class="w-2/12 mr-1" name="search_nome" id="search_nome" placeholder="Nome">
			<input type="text" class="w-2/12 mr-1" name="search_cpf" id="search_cpf" placeholder="CPF">
			<input type="text" class="w-2/12 mr-1" name="search_processo" id="search_processo" placeholder="Processo">
			<input type="text" class="w-1/12 mr-1" name="search_n_ordem" id="search_n_ordem" placeholder="Nº de ordem">
			<input type="text" class="w-2/12 mr-1" name="search_tipo" id="search_tipo" placeholder="INSS, FAZENDA ou PREFEITURA">
			<input type="text" class="w-2/12" name="search_status" id="search_status" placeholder="Status">
			<button class="hidden" type="submit">Enviar Pesquisa</button>
		</span>
	</form>
</div>

<?php if ($tjsp_list) : ?>
	<div class="table-header">
		<div class="w-1/12 flex">
			<?php if ($admin) : ?>
				<span>
					<input type="checkbox" name="checkall" id="checkall" onclick="toggle(this);">
				</span>
			<?php endif; ?>
			<span>#</span>
		</div>
		<div class="w-2/12">Processo</div>
		<div class="w-1/12">Nome</div>
		<div class="w-1/12">CPF</div>
		<div class="w-1/12">Nº Ordem</div>
		<div class="w-1/12">Advogado</div>
		<div class="w-1/12">Vlr Pago</div>
		<div class="w-1/12">Saldo</div>
		<div class="w-1/12">Tipo</div>
		<div class="w-1/12">Status</div>
		<div class="w-1/12 flex justify-end">Ação</div>
	</div>
	<?php foreach ($tjsp_list as $tjsp) : ?>
		<div class="table-data hover:bg-slate-200">
			<div class="w-1/12">

				<?php if ($admin) : ?>
					<input type="checkbox" name="check" onclick="getChecks()" id="check[<?php echo $tjsp['id']; ?>]" value="<?php echo $tjsp['id']; ?>">
				<?php endif; ?>

				<?php echo $tjsp['id']; ?>
			</div>
			<div class="w-2/12 text-xs"><?php echo $tjsp['processo']; ?></div>
			<div class="w-1/12"><?php echo $tjsp['nome']; ?></div>
			<div class="w-1/12"><?php echo $tjsp['cpf']; ?></div>
			<div class="w-1/12"><?php echo $tjsp['n_ordem']; ?></div>
			<div class="w-1/12"><?php echo $tjsp['nome_advg']; ?></div>
			<div class="w-1/12"><?php echo $tjsp['vlr_pago']; ?></div>
			<div class="w-1/12"><?php echo $tjsp['saldo']; ?></div>
			<div class="w-1/12"><?php echo $tjsp['tipo']; ?></div>
			<div class="w-1/12 text-red-500"><?php echo $tjsp['status']; ?></div>
			<div class="w-1/12 flex justify-end">
				<a href="<?php echo BASE_URL; ?>tjsp/edit/<?php echo $tjsp['id']; ?>">Ver</a>
			</div>
		</div>
	<?php endforeach; ?>

	<?php if ($p_count > 1) { ?>
		<div class="pagination">
			<a class="pagination-item" href="<?php echo BASE_URL; ?>tjsp?p=1">Primeira</a>
			<?php
			for ($q = $p - 5; $q <= $p - 1; $q++) {
				if ($q >= 1) { ?>
					<a class="pagination-item" href="<?php echo BASE_URL; ?>tjsp?p=<?php echo $q; ?>"><?php echo $q; ?></a>
			<?php }
			} ?>
			<div class="pagination-item pg-active"><?php echo "$q"; ?></div>
			<?php for ($q = $p + 1; $q <= $p + 5; $q++) {
				if ($q <= $p_count) { ?>
					<a class="pagination-item" href="<?php echo BASE_URL; ?>tjsp?p=<?php echo $q; ?>"><?php echo $q; ?></a>
			<?php }
			}
			?>
			<a class="pagination-item" href="<?php echo BASE_URL; ?>tjsp?p=<?php echo $p_count; ?>">Última</a>
		</div>

	<?php } ?>

<?php else : ?>
	<div class="flash_info my-x">
		<p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
	</div>
<?php endif; ?>

<!-- SCRIPTS JS -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/delete-users.js"></script>