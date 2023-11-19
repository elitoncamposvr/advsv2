<div class="breadcrumb">
    <span class="breadcrumb-title">TRF3 <i class="fa-solid fa-chevron-right px-2"></i> Resultado Pesquisa</span>
</div>

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

<?php if (isset($error) && !empty($error)) : ?>
    <div class="warning"><?php echo $error; ?></div>
<?php endif; ?>

<?php if ($list_search) : ?>
    <div class="table-header">
		<div class="w-1/12">#</div>
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
    <?php foreach ($list_search as $trf3) : ?>
        <div class="table-data hover:bg-slate-200">
			<div class="w-1/12"><span><?php echo $trf3['id']; ?></div>
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


<?php else : ?>
    <div class="input-line justify-center items-center py-5">
        <span>
            <i class="fas fa-exclamation-circle fa-2x mr-2"></i>
        </span>
        <span>Nenhum registro encontrado!</span>
    </div>
<?php endif; ?>