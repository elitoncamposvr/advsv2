<div class="breadcrumb">
    <span class="breadcrumb-title">TRF3 <i class="fa-solid fa-chevron-right px-2"></i> <?php echo $trf3_info['id']; ?> - <?php echo $trf3_info['requerentes']; ?></span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>trf3" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<form class="w-full py-2.5" action="<?php echo BASE_URL; ?>trf3/update/<?php echo $trf3_info['id']; ?>" method="post">
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="numero">Número</label>
            <input type="text" name="numero" id="numero" value="<?php echo $trf3_info['numero']; ?>" <?php if (!$admin) {
                                                                                                            echo "readonly class='w-full bg-slate-300'";
                                                                                                        } else {
                                                                                                            echo "class='w-full'";
                                                                                                        }; ?>>
        </div>
        <div class="w-2/6 mr-1">
            <label for="requerido">Requerido</label>
            <input type="text" name="requerido" id="requerido" value="<?php echo $trf3_info['requerido']; ?>" <?php if (!$admin) {
                                                                                                                    echo "readonly class='w-full bg-slate-300'";
                                                                                                                } else {
                                                                                                                    echo "class='w-full'";
                                                                                                                }; ?>>
        </div>
        <div class="w-2/6 mr-1">
            <label for="requerentes">Requerentes</label>
            <input type="text" name="requerentes" id="requerentes" value="<?php echo $trf3_info['requerentes']; ?>" class="w-full">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="ofcreq">Oficio</label>
            <input type="text" name="ofcreq" id="ofcreq" value="<?php echo $trf3_info['ofcreq']; ?>" <?php if (!$admin) {
                                                                                                            echo "readonly class='w-full bg-slate-300'";
                                                                                                        } else {
                                                                                                            echo "class='w-full'";
                                                                                                        }; ?>>
        </div>
        <div class="w-2/6 mr-1">
            <label for="proc_orig">Processo Origem</label>
            <input type="text" name="proc_orig" id="proc_orig" value="<?php echo $trf3_info['proc_orig']; ?>" <?php if (!$admin) {
                                                                                                                    echo "readonly class='w-full bg-slate-300'";
                                                                                                                } else {
                                                                                                                    echo "class='w-full'";
                                                                                                                }; ?>>
        </div>
        <div class="w-2/6">
            <label for="advogado">Advogado</label>
            <input type="text" name="advogado" id="advogado" class="w-full" value="<?php echo $trf3_info['advogado']; ?>">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="ano_proposta">Ano Proposta</label>
            <input type="text" name="ano_proposta" id="ano_proposta" value="<?php echo $trf3_info['ano_proposta']; ?>" <?php if (!$admin) {
                                                                                                                            echo "readonly class='w-full bg-slate-300'";
                                                                                                                        } else {
                                                                                                                            echo "class='w-full'";
                                                                                                                        }; ?>>
        </div>

        <div class="w-2/6 mr-1">
            <label for="data_conta_liq">Data Conta</label>
            <input type="text" name="data_conta_liq" id="data_conta_liq" value="<?php echo $trf3_info['data_conta_liq']; ?>" <?php if (!$admin) {
                                                                                                                                    echo "readonly class='w-full bg-slate-300'";
                                                                                                                                } else {
                                                                                                                                    echo "class='w-full'";
                                                                                                                                }; ?>>
        </div>
        <div class="w-2/6">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" class="w-full" value="<?php echo $trf3_info['cpf']; ?>">
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="vlr_solicitado">Valor Solicitado</label>
            <input type="text" name="vlr_solicitado" id="vlr_solicitado" value="<?php echo $trf3_info['vlr_solicitado']; ?>" <?php if (!$admin) {
                                                                                                                                    echo "readonly class='w-full bg-slate-300'";
                                                                                                                                } else {
                                                                                                                                    echo "class='w-full'";
                                                                                                                                }; ?>>
        </div>
        <div class="w-2/6 mr-1">
            <label for="vlr_inscritopr">Valor Inscrito</label>
            <input type="text" name="vlr_inscritopr" id="vlr_inscritopr" value="<?php echo $trf3_info['vlr_inscritopr']; ?>" <?php if (!$admin) {
                                                                                                                                    echo "readonly class='w-full bg-slate-300'";
                                                                                                                                } else {
                                                                                                                                    echo "class='w-full'";
                                                                                                                                }; ?>>
        </div>
        <div class="w-2/6">
            <label for="req_bloqueada">Req. Bloqueada</label>
            <input type="text" name="req_bloqueada" id="req_bloqueada" value="<?php echo $trf3_info['req_bloqueada']; ?>" <?php if (!$admin) {
                                                                                                                                echo "readonly class='w-full bg-slate-300'";
                                                                                                                            } else {
                                                                                                                                echo "class='w-full'";
                                                                                                                            }; ?>>
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="situ_requisic">Situação Req.</label>
            <input type="text" name="situ_requisic" id="situ_requisic" value="<?php echo $trf3_info['situ_requisic']; ?>" <?php if (!$admin) {
                                                                                                                                echo "readonly class='w-full bg-slate-300'";
                                                                                                                            } else {
                                                                                                                                echo "class='w-full'";
                                                                                                                            }; ?>>
        </div>
        <div class="w-2/6 mr-1">
            <label for="natureza">Natureza</label>
            <input type="text" name="natureza" id="natureza" value="<?php echo $trf3_info['natureza']; ?>" <?php if (!$admin) {
                                                                                                                echo "readonly class='w-full bg-slate-300'";
                                                                                                            } else {
                                                                                                                echo "class='w-full'";
                                                                                                            }; ?>>
        </div>
        <div class="w-2/6">
            <label for="status">Status</label>
            <select name="status" id="status" class="w-full bg-red-300">
                <option <?php echo ($trf3_info['status'] == '===') ? 'selected="selected"' : '';?> value="===">==========</option>
                <option <?php echo ($trf3_info['status'] == 'VAI PENSAR') ? 'selected="selected"' : '';?> value="VAI PENSAR">VAI PENSAR</option>
                <option <?php echo ($trf3_info['status'] == 'RETORNAR') ? 'selected="selected"' : '';?> value="RETORNAR">RETORNAR</option>
                <option <?php echo ($trf3_info['status'] == 'DEIXEI CONTATO') ? 'selected="selected"' : '';?> value="DEIXEI CONTATO">DEIXEI CONTATO</option>
                <option <?php echo ($trf3_info['status'] == 'JA VENDEU') ? 'selected="selected"' : '';?> value="JA VENDEU">JÁ VENDEU</option>
                <option <?php echo ($trf3_info['status'] == 'NAO TEM INTERESSE') ? 'selected="selected"' : '';?> value="NAO TEM INTERESSE">NÃO TEM INTERESSE</option>
                <option <?php echo ($trf3_info['status'] == 'NAO SERVI') ? 'selected="selected"' : '';?> value="NAO SERVI">NÃO SERVI</option>
                <option <?php echo ($trf3_info['status'] == 'VALOR BAIXO') ? 'selected="selected"' : '';?> value="VALOR BAIXO">VALOR BAIXO</option>
                <option <?php echo ($trf3_info['status'] == 'OFICIO FISICO') ? 'selected="selected"' : '';?> value="OFICIO FISICO">OFICIO FISICO</option>
                <option <?php echo ($trf3_info['status'] == 'OFICIO UNICO') ? 'selected="selected"' : '';?> value="OFICIO UNICO">OFICIO UNICO</option>
                <option <?php echo ($trf3_info['status'] == 'COMPRAMOS') ? 'selected="selected"' : '';?> value="COMPRAMOS">COMPRAMOS</option>
                <option <?php echo ($trf3_info['status'] == 'REPROVADO') ? 'selected="selected"' : '';?> value="REPROVADO">REPROVADO</option>
                <option <?php echo ($trf3_info['status'] == 'SEM CONTATO') ? 'selected="selected"' : '';?> value="SEM CONTATO">SEM CONTATO</option>
                <option <?php echo ($trf3_info['status'] == 'SO CHAMA') ? 'selected="selected"' : '';?> value="SO CHAMA">SÓ CHAMA</option>
                <option <?php echo ($trf3_info['status'] == 'FECHADO/ANALISE') ? 'selected="selected"' : '';?> value="FECHADO/ANALISE">FECHADO/ANALISE</option>
            </select>
        </div>
    </div>
    <div class="input-line">
        <div class="w-2/6 mr-1">
            <label for="tel">Telefone</label>
            <input type="text" name="tel" id="tel" class="w-full" value="<?php echo $trf3_info['tel']; ?>">
        </div>
        <div class="w-2/6 mr-1">
            <label for="tel_fixo">Telefone Fixo</label>
            <input type="text" name="tel_fixo" id="tel_fixo" class="w-full" value="<?php echo $trf3_info['tel_fixo']; ?>">
        </div>
        <div class="w-2/6">
            <label for="cel">Celular</label>
            <input type="text" name="cel" id="cel" class="w-full" value="<?php echo $trf3_info['cel']; ?>">
        </div>
    </div>
    <div class="input-line">
        <div class="w-4/6 mr-1">
            <label for="assunto">Assunto</label>
            <input type="text" name="assunto" id="assunto" class="w-full" value="<?php echo $trf3_info['assunto']; ?>">
        </div>
        <div class="w-2/6">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="<?php echo $trf3_info['email']; ?>" class="w-full">
        </div>
    </div>


    <div class="input-line flex-col">
        <label for="historico">Endereço</label>
        <input type="text" name="endereco" id="endereco" class="w-full" value="<?php echo $trf3_info['endereco']; ?>">
    </div>
    <div class="input-line flex-col">
        <label for="historico">Histórico</label>
    </div>
    <div class="input-line">
        <textarea name="historico" id="historico" rows="4" class="w-full"><?php echo $trf3_info['historico']; ?></textarea>
    </div>
    <div class="input-line flex-col">
        <label for="user_id">Usuário Responsável</label>
        <select name="user_id" id="user_id" <?php if (!$admin) {
                                                echo "disabled class='w-full bg-slate-300'";
                                            } else {
                                                echo "class='w-full'";
                                            }; ?>>
            <option value="0">Nenhum usuário indicado</option>
            <?php foreach ($users as $user) : ?>
                <option value="<?php echo $user['id']; ?>" <?php echo ($user['id'] == $trf3_info['user_id']) ? 'selected="selected"' : ''; ?>><?php echo $user['name_user']; ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="input-line justify-center py-2">
        <button class="btn hover:btn-hover" type="submit"><i class="fa-solid fa-pen-to-square"></i> SALVAR INFORMAÇÕES</button>
    </div>
</form>

<?php if ($count_calc > 0) : ?>
    <form class="forms border rounded-md px-1 bg-slate-100" target="_blank" method="post" action="<?php echo BASE_URL; ?>proposta/update/<?php echo $count_calc; ?>">
        <input type="hidden" name="tipo" id="tipo" value="trf3">
        <input type="hidden" name="id_processo" id="id_processo" value="<?php echo $trf3_info['numero']; ?>">
        <input type="hidden" name="id_tabela" id="id_tabela" value="<?php echo $trf3_info['id']; ?>">
        <input type="hidden" name="requerente" id="requerente" value="<?php echo $trf3_info['requerentes']; ?>">
        <input type="hidden" name="devedor" id="devedor" value="<?php echo $trf3_info['requerido']; ?>">
        <input type="hidden" name="precatorio" id="precatorio" value="<?php echo $trf3_info['numero']; ?>">
        <input type="hidden" name="advogado" id="advogado" value="<?php echo $trf3_info['advogado']; ?>">
        <div class="input-line">
            <div class="w-1/12 text-sm flex items-center">
                Valor atualizado:
            </div>
            <div class="w-5/12 mr-4">
                <input type="text" name="vlr_atualizado" id="vlr_atualizado" autofocus class="w-full" value="<?php echo $calculadora['vlr_atualizado']; ?>" onblur="valorAtualizado()">
            </div>
            <div class="w-1/12 text-sm flex items-center">
                Valor Líquido:
            </div>
            <div class="w-5/12">
                <input type="hidden" name="vlr_liquido" id="vlr_liquido" value="<?php echo $calculadora['vlr_liquido']; ?>">
                <input type="text" name="vlr_liquido_exib" id="vlr_liquido_exib" readonly class="w-full input-readonly" value="<?php echo $calculadora['vlr_liquido']; ?>">
            </div>
        </div>
        <div class="input-line">
            <div class="w-1/12 text-sm flex items-center">
                Honorários:
            </div>
            <div class="w-5/12 flex mr-4">
                <input type="text" name="honorarios_perc" id="honorarios_perc" class="w-1/2 mr-1" value="<?php echo $calculadora['honorarios_perc']; ?>" onblur="valorAtualizado()">
                <input type="hidden" name="honorarios_vlr" id="honorarios_vlr" value="<?php echo $calculadora['honorarios_vlr']; ?>">
                <input type="text" name="honorarios_vlr_exib" id="honorarios_vlr_exib" readonly value="<?php echo $calculadora['honorarios_vlr']; ?>" class="w-1/2 input-readonly">
            </div>
            <div class="w-1/12 text-sm flex items-center">
                Proposta:
            </div>
            <div class="w-5/12 flex">
                <input type="text" name="proposta_vlr" id="proposta_vlr" class="w-1/2 mr-1" value="<?php echo $calculadora['proposta_vlr']; ?>" onblur="valorAtualizado()">
                <input type="text" name="proposta_perc" id="proposta_perc" readonly value="<?php echo $calculadora['proposta_perc']; ?>" class="w-1/2 input-readonly">
            </div>
        </div>
        <div class="input-line">
            <div class="w-1/12 text-sm flex items-center">
                IR:
            </div>
            <div class="w-5/12 flex mr-4">
                <input type="text" name="ir_perc" id="ir_perc" class="w-1/2 mr-1" value="<?php echo $calculadora['ir_perc']; ?>" onblur="valorAtualizado()">
                <input type="hidden" name="ir_vlr" id="ir_vlr" value="<?php echo $calculadora['ir_vlr']; ?>">
                <input type="text" name="ir_vlr" id="ir_vlr_exib" readonly value="<?php echo $calculadora['ir_vlr']; ?>" class="w-1/2 input-readonly">
            </div>
            <div class="w-1/12">

            </div>
            <div class="w-5/12">

            </div>
        </div>
        <div class="input-line">
            <div class="w-1/12 text-sm flex items-center">
                RRA:
            </div>
            <div class="w-5/12 flex mr-4">
                <input type="text" name="rra_perc" id="rra_perc" class="w-1/2 mr-1" value="<?php echo $calculadora['rra_perc']; ?>" onblur="valorAtualizado()">
                <input type="hidden" name="rra_vlr" id="rra_vlr" value="<?php echo $calculadora['rra_vlr']; ?>">
                <input type="text" name="rra_vlr" id="rra_vlr_exib" value="<?php echo $calculadora['rra_vlr']; ?>" readonly class="w-1/2 input-readonly">
            </div>
            <div class="w-1/12 text-sm flex items-center">

            </div>
            <div class="w-5/12">

            </div>
        </div>
        <div class="input-line">
            <div class="w-1/12 text-sm flex items-center">
                PSS:
            </div>
            <div class="w-5/12 flex mr-4">
                <input type="text" name="pss_perc" id="pss_perc" class="w-1/2 mr-1" value="<?php echo $calculadora['pss_perc']; ?>" onblur="valorAtualizado()">
                <input type="hidden" name="pss_vlr" id="pss_vlr" value="<?php echo $calculadora['pss_vlr']; ?>">
                <input type="text" name="pss_vlr_exib" id="pss_vlr_exib" readonly value="<?php echo $calculadora['pss_vlr']; ?>" class="w-1/2 input-readonly">
            </div>
            <div class="w-1/12 text-sm flex items-center bg-teal-500 py-1 rounded-l-md">
                Máximo a Pagar:
            </div>
            <div class="w-5/12 flex bg-teal-500 p-1 rounded-r-md">
                <input type="text" name="max_perc" id="max_perc" class="w-1/2 mr-1" value="<?php echo $calculadora['max_perc']; ?>" onblur="valorAtualizado()">
                <input type="hidden" name="max_vlr" id="max_vlr" value="<?php echo $calculadora['max_vlr']; ?>">
                <input type="text" name="max_vlr_exib" id="max_vlr_exib" readonly value="<?php echo $calculadora['max_vlr']; ?>" class="w-1/2 input-readonly">
            </div>
        </div>
        <div class="w-full flex justify-center py-3">
            <button class="btn-success hover:btn-success--hover" type="submit"><i class="fa-solid fa-file-contract"></i> GERAR PROPOSTA</button>
        </div>
    </form>

<?php else : ?>


    <form class="forms border rounded-md px-1 bg-slate-100" target="_blank" method="post" action="<?php echo BASE_URL; ?>proposta/store">
        <input type="hidden" name="tipo" id="tipo" value="trf3">
        <input type="hidden" name="id_processo" id="id_processo" value="<?php echo $trf3_info['numero']; ?>">
        <input type="hidden" name="id_tabela" id="id_tabela" value="<?php echo $trf3_info['id']; ?>">
        <input type="hidden" name="requerente" id="requerente" value="<?php echo $trf3_info['requerido']; ?>">
        <input type="hidden" name="devedor" id="devedor" value="<?php echo $trf3_info['requerido']; ?>">
        <input type="hidden" name="precatorio" id="precatorio" value="<?php echo $trf3_info['numero']; ?>">
        <input type="hidden" name="advogado" id="advogado" value="<?php echo $trf3_info['advogado']; ?>">
        <div class="input-line">
            <div class="w-1/12 text-sm flex items-center">
                Valor atualizado:
            </div>
            <div class="w-5/12 mr-4">
                <input type="text" name="vlr_atualizado" id="vlr_atualizado" autofocus class="w-full" value="0,00" onblur="valorAtualizado()">
            </div>
            <div class="w-1/12 text-sm flex items-center">
                Valor Líquido:
            </div>
            <div class="w-5/12">
                <input type="hidden" name="vlr_liquido" id="vlr_liquido" readonly value="0">
                <input type="text" name="vlr_liquido_exib" id="vlr_liquido_exib" readonly class="w-full input-readonly" value="0">
            </div>
        </div>
        <div class="input-line">
            <div class="w-1/12 text-sm flex items-center">
                Honorários:
            </div>
            <div class="w-5/12 flex mr-4">
                <input type="text" name="honorarios_perc" id="honorarios_perc" class="w-1/2 mr-1" value="0" onblur="valorAtualizado()">
                <input type="hidden" name="honorarios_vlr" id="honorarios_vlr">
                <input type="text" name="honorarios_vlr_exib" id="honorarios_vlr_exib" readonly class="w-1/2 input-readonly">
            </div>
            <div class="w-1/12 text-sm flex items-center">
                Proposta:
            </div>
            <div class="w-5/12 flex">
                <input type="text" name="proposta_vlr" id="proposta_vlr" class="w-1/2 mr-1" value="0" onblur="valorAtualizado()">
                <input type="text" name="proposta_perc" id="proposta_perc" readonly class="w-1/2 input-readonly">
            </div>
        </div>
        <div class="input-line">
            <div class="w-1/12 text-sm flex items-center">
                IR:
            </div>
            <div class="w-5/12 flex mr-4">
                <input type="text" name="ir_perc" id="ir_perc" class="w-1/2 mr-1" value="0" onblur="valorAtualizado()">
                <input type="hidden" name="ir_vlr" id="ir_vlr">
                <input type="text" name="ir_vlr_exib" id="ir_vlr_exib" readonly class="w-1/2 input-readonly">
            </div>
            <div class="w-1/12">

            </div>
            <div class="w-5/12">

            </div>
        </div>
        <div class="input-line">
            <div class="w-1/12 text-sm flex items-center">
                RRA:
            </div>
            <div class="w-5/12 flex mr-4">
                <input type="text" name="rra_perc" id="rra_perc" class="w-1/2 mr-1" value="0" onblur="valorAtualizado()">
                <input type="hidden" name="rra_vlr" id="rra_vlr">
                <input type="text" name="rra_vlr_exib" id="rra_vlr_exib" readonly class="w-1/2 input-readonly">
            </div>
            <div class="w-1/12 text-sm flex items-center">

            </div>
            <div class="w-5/12">

            </div>
        </div>
        <div class="input-line">
            <div class="w-1/12 text-sm flex items-center">
                PSS:
            </div>
            <div class="w-5/12 flex mr-4">
                <input type="text" name="pss_perc" id="pss_perc" class="w-1/2 mr-1" value="0" onblur="valorAtualizado()">
                <input type="hidden" name="pss_vlr" id="pss_vlr">
                <input type="text" name="pss_vlr_exib" id="pss_vlr_exib" readonly class="w-1/2 input-readonly">
            </div>
            <div class="w-1/12 text-sm flex items-center bg-teal-500 py-1 rounded-l-md">
                Máximo a Pagar:
            </div>
            <div class="w-5/12 flex bg-teal-500 p-1 rounded-r-md">
                <input type="text" name="max_perc" id="max_perc" class="w-1/2 mr-1" value="0" onblur="valorAtualizado()">
                <input type="hidden" name="max_vlr" id="max_vlr">
                <input type="text" name="max_vlr_exib" id="max_vlr_exib" readonly class="w-1/2 input-readonly">
            </div>
        </div>
        <div class="w-full flex justify-center py-3">
            <button class="btn-success hover:btn-success--hover" type="submit"><i class="fa-solid fa-file-contract"></i> GERAR PROPOSTA</button>
        </div>
    </form>

<?php endif; ?>

<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/calculadora.js"></script>