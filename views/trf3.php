<div class="breadcrumb">
	<span class="breadcrumb-title">TRF3</span>
	<span class="breadcrumb-btns flex">
		<form action="<?php echo BASE_URL; ?>trf3/delete_check_users" method="post">
			<input type="hidden" name="checks_value" id="checks_value">

			<?php if ($admin) : ?>
				<input type="submit" class="btn-danger hover:btn-danger--hover cursor-pointer" value="Excluir">
			<?php endif; ?>

			<a href="<?php echo BASE_URL; ?>trf3/create" class="btn hover:btn-hover"><i class="fa-solid fa-plus"></i> Novo</a>
		</form>
	</span>
</div>

<div class="forms">
	<form class="form-search-right" action="<?php echo BASE_URL; ?>trf3/search" method="post">
		<span class="mb-2 w-full flex">
			<input type="text" class="w-2/12 mr-1" name="search_id" id="search_id" placeholder="ID">
			<input type="text" class="w-2/12 mr-1" name="search_numero" id="search_numero" placeholder="Número de protocolo">
			<input type="text" class="w-2/12 mr-1" name="search_requerentes" id="search_requerentes" placeholder="Requerentes">
			<input type="text" class="w-2/12 mr-1" name="search_cpf" id="search_cpf" placeholder="CPF">
			<input type="text" class="w-2/12 mr-1" name="search_ano_proposta" id="search_ano_proposta" placeholder="Ano Proposta">
			<input type="text" class="w-2/12" name="search_status" id="search_status" placeholder="Status">
			<button class="hidden" type="submit">Enviar Pesquisa</button>
		</span>
	</form>
</div>

<?php if ($trf3_list) : ?>
	<div class="table-header">
		<div class="w-1/12 flex">
			<?php if ($admin) : ?>
				<span>
					<input type="checkbox" name="checkall" id="checkall" onclick="toggle(this);">
				</span>
			<?php endif; ?>
			<span>#</span>
		</div>
		<div class="w-1/12">Ano Proposta</div>
		<div class="w-1/12">Número</div>
		<div class="w-1/12">CPF/CNPJ</div>
		<div class="w-1/12">Proc. Orig</div>
		<div class="w-1/12">Requerido</div>
		<div class="w-1/12">Requerentes</div>
		<div class="w-1/12">Advogado</div>
		<div class="w-1/12">Data Conta Liq.</div>
		<div class="w-1/12">Valor Solic.</div>
		<div class="w-1/12">Status</div>
		<div class="w-1/12">Ação</div>
	</div>
	<?php foreach ($trf3_list as $trf3) : ?>
		<div class="table-data hover:bg-slate-200">
			<div class="w-1/12">

				<?php if ($admin) : ?>
					<input type="checkbox" name="check" onclick="getChecks()" id="check[<?php echo $trf3['id']; ?>]" value="<?php echo $trf3['id']; ?>">
				<?php endif; ?>

				<?php echo $trf3['id']; ?>
			</div>
			<div class="w-1/12"><?php echo $trf3['ano_proposta']; ?></div>
			<div class="w-1/12"><?php echo $trf3['numero']; ?></div>
			<div class="w-1/12"><?php echo $trf3['cpf']; ?></div>
			<div class="w-1/12"><?php echo $trf3['proc_orig']; ?></div>
			<div class="w-1/12"><?php echo $trf3['requerido']; ?></div>
			<div class="w-1/12"><?php echo $trf3['requerentes']; ?></div>
			<div class="w-1/12"><?php echo $trf3['advogado']; ?></div>
			<div class="w-1/12"><?php echo $trf3['data_conta_liq']; ?></div>
			<div class="w-1/12"><?php echo $trf3['vlr_solicitado']; ?></div>
			<div class="w-1/12 text-red-500"><?php echo $trf3['status']; ?></div>
			<div class="w-1/12">
				<a href="<?php echo BASE_URL; ?>trf3/edit/<?php echo $trf3['id']; ?>">Ver</a>
			</div>
		</div>
	<?php endforeach; ?>

	<?php if ($p_count > 1) { ?>
		<div class="pagination">
			<a class="pagination-item" href="<?php echo BASE_URL; ?>trf3?p=1">Primeira</a>
			<?php
			for ($q = $p - 5; $q <= $p - 1; $q++) {
				if ($q >= 1) { ?>
					<a class="pagination-item" href="<?php echo BASE_URL; ?>trf3?p=<?php echo $q; ?>"><?php echo $q; ?></a>
			<?php }
			} ?>
			<div class="pagination-item pg-active"><?php echo "$q"; ?></div>
			<?php for ($q = $p + 1; $q <= $p + 5; $q++) {
				if ($q <= $p_count) { ?>
					<a class="pagination-item" href="<?php echo BASE_URL; ?>trf3?p=<?php echo $q; ?>"><?php echo $q; ?></a>
			<?php }
			}
			?>
			<a class="pagination-item" href="<?php echo BASE_URL; ?>trf3?p=<?php echo $p_count; ?>">Última</a>
		</div>

	<?php } ?>

<?php else : ?>
	<div class="input-line justify-center items-center py-5">
		<span>
			<i class="fas fa-exclamation-circle fa-2x mr-2"></i>
		</span>
		<span>Nenhum registro encontrado!</span>
	</div>
<?php endif; ?>

<!-- SCRIPTS JS -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/delete-users.js"></script>