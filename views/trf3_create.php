<div class="breadcrumb">
    <span class="breadcrumb-title">TRF3 <i class="fa-solid fa-chevron-right px-2"></i> Adicionar</span>
</div>

<form class="w-full py-2.5" action="<?php echo BASE_URL; ?>trf3/store" method="post">
    <div class="input-line">
        <div class="w-2/12 mr-1">
            <label for="numero">Número</label>
            <input type="text" name="numero" id="numero" class="w-full">
        </div>
        <div class="w-5/12 mr-1">
            <label for="requerido">Requerido</label>
            <input type="text" name="requerido" id="requerido" class="w-full">
        </div>
        <div class="w-3/12 mr-1">
            <label for="requerentes">Requerentes</label>
            <input type="text" name="requerentes" id="requerentes" class="w-full">
        </div>
        <div class="w-1/12 mr-1">
            <label for="idade">Idade</label>
            <input type="number" name="idade" id="idade" class="w-full">
        </div>
        <div class="w-1/12 mr-1">
            <label for="falecido">Falecido</label>
            <select name="falecido" id="falecido" class="w-full">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="ofcreq">Oficio</label>
            <input type="text" name="ofcreq" id="ofcreq" class="w-full">
        </div>
        <div class="w-2/6 mr-1">
            <label for="proc_orig">Processo Origem</label>
            <input type="text" name="proc_orig" id="proc_orig" class="w-full">
        </div>
        <div class="w-2/6">
            <label for="advogado">Advogado</label>
            <input type="text" name="advogado" id="advogado" class="w-full">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="ano_proposta">Ano Proposta</label>
            <input type="text" name="ano_proposta" id="ano_proposta" class="w-full">
        </div>

        <div class="w-2/6 mr-1">
            <label for="data_conta_liq">Data Conta</label>
            <input type="text" name="data_conta_liq" id="data_conta_liq" class="w-full">
        </div>
        <div class="w-2/6">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" class="w-full">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="vlr_solicitado">Valor Solicitado</label>
            <input type="text" name="vlr_solicitado" id="vlr_solicitado" class="w-full">
        </div>
        <div class="w-2/6 mr-1">
            <label for="vlr_inscritopr">Valor Inscrito</label>
            <input type="text" name="vlr_inscritopr" id="vlr_inscritopr" class="w-full">
        </div>
        <div class="w-2/6">
            <label for="req_bloqueada">Req. Bloqueada</label>
            <input type="text" name="req_bloqueada" id="req_bloqueada" class="w-full">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="situ_requisic">Situação Req.</label>
            <input type="text" name="situ_requisic" id="situ_requisic" class="w-full">
        </div>
        <div class="w-2/6 mr-1">
            <label for="natureza">Natureza</label>
            <input type="text" name="natureza" id="natureza" class="w-full">
        </div>
        <div class="w-2/6">
            <label for="status">Status</label>
            <select name="status" id="status" class="w-full bg-red-300">
                <option value="===">==========</option>
                <option value="VAI PENSAR">VAI PENSAR</option>
                <option value="RETORNAR">RETORNAR</option>
                <option value="DEIXEI CONTATO">DEIXEI CONTATO</option>
                <option value="JA VENDEU">JÁ VENDEU</option>
                <option value="NAO TEM INTERESSE">NÃO TEM INTERESSE</option>
                <option value="NAO SERVI">NÃO SERVI</option>
                <option value="VALOR BAIXO">VALOR BAIXO</option>
                <option value="OFICIO FISICO">OFICIO FISICO</option>
                <option value="OFICIO UNICO">OFICIO UNICO</option>
                <option value="COMPRAMOS">COMPRAMOS</option>
                <option value="REPROVADO">REPROVADO</option>
                <option value="SEM CONTATO">SEM CONTATO</option>
                <option value="SO CHAMA">SÓ CHAMA</option>
                <option value="FECHADO/ANALISE">FECHADO/ANALISE</option>
            </select>
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="tel">Telefone</label>
            <input type="text" name="tel" id="tel" class="w-full">
        </div>
        <div class="w-2/6 mr-1">
            <label for="tel_fixo">Telefone Fixo</label>
            <input type="text" name="tel_fixo" id="tel_fixo" class="w-full">
        </div>
        <div class="w-2/6">
            <label for="cel">Celular</label>
            <input type="text" name="cel" id="cel" class="w-full">
        </div>
    </div>
    <div class="input-line">
        <div class="w-4/6 mr-1">
            <label for="assunto">Assunto</label>
            <input type="text" name="assunto" id="assunto" class="w-full">
        </div>
        <div class="w-2/6">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="w-full">
        </div>
    </div>
    

    <div class="input-line flex-col">
        <label for="historico">Endereço</label>
        <input type="text" name="endereco" id="endereco" class="w-full">
    </div>
    <div class="input-line">
        <label for="historico">Histórico</label>
    </div>
    <div class="input-line">
        <textarea name="historico" id="historico" rows="4" class="w-full"></textarea>
    </div>
    <div class="input-line flex-col">
        <label for="user_id">Usuário Responsável</label>
        <?php if (!$admin) : ?>

            <select name="user_id" id="user_id" class="w-full bg-slate-300">
                <?php foreach ($users as $user) : ?>
                    <?php if ($user['id'] == $_SESSION['ccUser']) : ?>
                        <option value="<?php echo $user['id']; ?>" selected><?php echo $user['name_user']; ?></option>
                    <?php endif; ?>
                <?php endforeach ?>
            </select>
            
        <?php else : ?>

            <select name="user_id" id="user_id" class="w-full">
                <?php foreach ($users as $user) : ?>
                    <option value="<?php echo $user['id']; ?>" <?php echo ($user['id'] == $_SESSION['ccUser']) ? 'selected="selected"' : ""; ?>><?php echo $user['name_user']; ?></option>
                <?php endforeach ?>
            </select>

        <?php endif; ?>
    </div>
    <div class="input-line justify-center py-2">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-pen-to-square"></i> SALVAR INFORMAÇÕES</button>
    </div>
</form>