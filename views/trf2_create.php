<div class="breadcrumb">
    <span class="breadcrumb-title">TRF2 <i class="fa-solid fa-chevron-right px-2"></i> Adicionar</span>
</div>

<form class="w-full py-2.5" action="<?php echo BASE_URL; ?>trf2/store" method="post">
    <div class="input-line">
        <div class="w-1/12 mr-1">
            <label for="ANO_PROPOSTA">Ano Proposta</label>
            <input class="w-full" type="text" name="ANO_PROPOSTA" id="ANO_PROPOSTA" autofocus>
        </div>
        <div class="w-6/12 mr-1">
            <label for="CREDOR">Credor</label>
            <input type="text" name="CREDOR" id="CREDOR" class="w-full">
        </div>
        <div class="w-3/12 mr-1">
            <label for="NUMERO_DO_PRECATORIO">Número do Precatório</label>
            <input type="text" name="NUMERO_DO_PRECATORIO" id="NUMERO_DO_PRECATORIO" class="w-full">
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
            <label for="CPF_CNPJ">CPF/CNPJ</label>
            <input type="text" name="CPF_CNPJ" id="CPF_CNPJ" class="w-full">
        </div>
        <div class="w-2/6 mr-1">
            <label for="ADVOGADO">Advogado</label>
            <input type="text" name="ADVOGADO" id="ADVOGADO" class="w-full">

        </div>
        <div class="w-2/6">
            <label for="OAB">OAB</label>
            <input type="text" name="OAB" id="OAB" class="w-full">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="REQUERIDO">REQUERIDO</label>
            <input type="text" name="REQUERIDO" id="REQUERIDO" class="w-full">
        </div>
        <div class="w-2/6 mr-1">
            <label for="VALOR">Valor</label>
            <input type="text" name="VALOR" id="VALOR" class="w-full">
        </div>
        <div class="w-2/6">
            <label for="OFICIO">Ofício</label>
            <input type="text" name="OFICIO" id="OFICIO" class="w-full">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="PROCESSO_ORIGINARIO">Processo Originário</label>
            <input type="text" name="PROCESSO_ORIGINARIO" id="PROCESSO_ORIGINARIO" class="w-full">
        </div>
        <div class="w-2/6 mr-1">
            <label for="TEL">Telefone</label>
            <input type="text" name="TEL" id="TEL" class="w-full">
        </div>
        <div class="w-2/6">
            <label for="CEL">Celular</label>
            <input type="text" name="CEL" id="CEL" class="w-full">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="TEL_FIXO">Telefone Fixo</label>
            <input type="text" name="TEL_FIXO" id="TEL_FIXO" class="w-full">
        </div>
        <div class="w-2/6 mr-1">
            <label for="EMAIL">EMAIL</label>
            <input type="text" name="EMAIL" id="EMAIL" class="w-full">
        </div>
        <div class="w-2/6">
            <label for="STATUS">Status</label>
            <select name="STATUS" id="STATUS" class="w-full bg-red-300">
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
    <div class="input-line flex-col">
        <label for="ENDERECO">Endereço</label>
        <input type="text" name="ENDERECO" id="ENDERECO" class="w-full">
    </div>
    <div class="input-line">
        <label for="HISTORICO">Histórico</label>
    </div>
    <div class="input-line">
        <textarea name="HISTORICO" id="HISTORICO" rows="4" class="w-full"></textarea>
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
    <div class="input-line justify-center">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-plus"></i> Criar Registro</button>
    </div>
</form>