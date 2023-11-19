<div class="breadcrumb">
    <span class="breadcrumb-title">TJSP <i class="fa-solid fa-chevron-right px-2"></i> Adicionar</span>
</div>

<form class="w-full py-2.5" action="<?php echo BASE_URL; ?>tjsp/store" method="post">
    <div class="input-line">
        <div class="w-2/5 mr-1">
            <label for="processo">Processo</label>
            <input class="w-full" type="text" name="processo" id="processo" autofocus>
        </div>
        <div class="w-2/5 mr-1">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="w-full">
        </div>
        <div class="w-1/5">
            <label for="nat">Nat</label>
            <select name="nat" id="nat" class="w-full">
                <option value="A">A</option>
                <option value="O">O</option>
            </select>
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/5 mr-1">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" class="w-full">
        </div>
        <div class="w-2/5 mr-1">
            <label for="nome_advg">Nome Advogado</label>
            <input type="text" name="nome_advg" id="nome_advg" class="w-full">

        </div>
        <div class="w-1/5">
            <label for="n_ordem">Nº Ordem</label>
            <input type="text" name="n_ordem" id="n_ordem" class="w-full">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="oab">OAB</label>
            <input type="text" name="oab" id="oab" class="w-full">
        </div>
        <div class="w-2/6 mr-1">
            <label for="vlr_pago">Valor Pago</label>
            <input type="text" name="vlr_pago" id="vlr_pago" class="w-full">
        </div>
        <div class="w-2/6">
            <label for="saldo">Saldo</label>
            <input type="text" name="saldo" id="saldo" class="w-full">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="w-full">
        </div>
        <div class="w-2/6 mr-1">
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
        <div class="w-2/6">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" class="w-full">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="tel">Telefone</label>
            <input type="text" name="tel" id="tel" class="w-full">
        </div>
        <div class="w-2/6 mr-1">
            <label for="cel">Celular</label>
            <input type="text" name="cel" id="cel" class="w-full">
        </div>
        <div class="w-2/6">
            <label for="tel_fixo">Telefone Fixo</label>
            <input type="text" name="tel_fixo" id="tel_fixo" class="w-full">
        </div>
    </div>
    <div class="input-line flex-col">
        <label for="endereco">Endereço</label>
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
    <div class="input-line justify-center">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-plus"></i> Criar Registro</button>
    </div>
</form>