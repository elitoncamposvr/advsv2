<div class="breadcrumb">
<span class="breadcrumb-title">TJSP <i class="fa-solid fa-chevron-right px-2"></i> Resultado Pesquisa</span>
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

<?php if ($list_search) : ?>
	<div class="table-header">
		<div class="w-1/12">#</div>
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
	<?php foreach ($list_search as $tjsp) : ?>
		<div class="table-data hover:bg-slate-200">
			<div class="w-1/12"><?php echo $tjsp['id']; ?></div>
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

<?php else : ?>
	<div class="flash_info mt-6">
		<p><i class="fas fa-exclamation-circle fa-2x px-2 text-red-600"></i></p><span>Nenhum registro encontrado!</span>
	</div>
	<p class="flash_info text-sm">*Refaça sua busca ou volte a página inicial do TJSP.</p>
<?php endif; ?>