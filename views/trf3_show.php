<div class="breadcrumb">
    <span class="breadcrumb-title">TRF3 <i class="fa-solid fa-chevron-right px-2"></i> Visualizar</span>
</div>

<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">#ID</span>
        <?php echo $trf3_info['id'];?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Procedimento</span>
        <?php echo $trf3_info['procedimento'];?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Ano Proposta</span>
        <?php echo $trf3_info['ano_proposta'];?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Número</span>
        <?php echo $trf3_info['numero'];?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Ofício</span>
        <?php echo $trf3_info['ofcreq'];?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Proc. Origem</span>
        <?php echo $trf3_info['proc_orig'];?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Requerido</span>
        <?php echo $trf3_info['requerido'];?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Requerentes</span>
        <?php echo $trf3_info['requerentes'];?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Advogado</span>
        <?php echo $trf3_info['advogado'];?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Data Conta</span>
        <?php echo $trf3_info['data_conta_liq'];?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Valor Solic.</span>
        <?php echo $trf3_info['vlr_solicitado'];?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Valor Inscrito</span>
        <?php echo $trf3_info['vlr_inscritopr'];?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Req. Bloqueada</span>
        <?php echo $trf3_info['req_bloqueada'];?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Situação Req.</span>
        <?php echo $trf3_info['situ_requisic'];?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Natureza</span>
        <?php echo $trf3_info['natureza'];?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">CPF</span>
        <?php echo $trf3_info['cpf'];?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Assunto</span>
        <?php echo $trf3_info['assunto'];?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Status</span>
        <?php echo $trf3_info['status'];?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Histórico</span>
        <?php echo $trf3_info['historico'];?>
    </div>
</div>

<div class="input-line justify-center">
    <a class="btn mx-1 hover:btn-hover" href="<?php echo BASE_URL; ?>trf3/edit/<?php echo $trf3_info['id'];?>"><i class="fa-solid fa-pen-to-square"></i> Editar Registro</a>
    <a class="btn-danger mx-1 hover:btn-danger--hover" href="<?php echo BASE_URL; ?>trf3/destroy/<?php echo $trf3_info['id'];?>"><i class="fa-solid fa-pen-to-square"></i> Excluir Registro</a>
</div>