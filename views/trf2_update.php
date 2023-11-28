<div class="breadcrumb">
    <span class="breadcrumb-title">TRF2 <i class="fa-solid fa-chevron-right px-2"></i> <?php echo $trf2_info['ID']; ?> - <?php echo $trf2_info['CREDOR']; ?></span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>trf2" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<div class="w-full">
    <a href="<?php echo BASE_URL; ?>trf2/files/<?php echo $trf2_info['ID']; ?>" class="btn-success hover:btn-success--hover"><i class="fa-solid fa-file-pdf"></i> ARQUIVOS DO CLIENTE</a>
</div>

<?php if ($count_calc > 0) : ?>
    <form class="forms px-1" method="post">
    <?php else : ?>
        <form class="forms border rounded-md px-1 bg-slate-100" target="_blank" method="post" action="<?php echo BASE_URL; ?>proposta/store">
        <?php endif; ?>
        <div class="py-2.5">
            <div class="input-line">
                <div class="w-2/6 mr-1">
                    <label for="ANO_PROPOSTA">Ano Proposta</label>
                    <input type="text" name="ANO_PROPOSTA" id="ANO_PROPOSTA" value="<?php echo $trf2_info['ANO_PROPOSTA']; ?>" <?php if (!$admin) {
                                                                                                                                    echo "readonly class='w-full bg-slate-300'";
                                                                                                                                } else {
                                                                                                                                    echo "class='w-full'";
                                                                                                                                }; ?>>
                </div>
                <div class="w-2/6 mr-1">
                    <label for="CREDOR">Credor</label>
                    <input type="text" name="CREDOR" id="CREDOR" class="w-full" value="<?php echo $trf2_info['CREDOR']; ?>">
                </div>
                <div class="w-2/6 mr-1">
                    <label for="NUMERO_DO_PRECATORIO">Número do Precatório</label>
                    <input type="text" name="NUMERO_DO_PRECATORIO" id="NUMERO_DO_PRECATORIO" value="<?php echo $trf2_info['NUMERO_DO_PRECATORIO']; ?>" <?php if (!$admin) {
                                                                                                                                                            echo "readonly class='w-full bg-slate-300'";
                                                                                                                                                        } else {
                                                                                                                                                            echo "class='w-full'";
                                                                                                                                                        }; ?>>
                </div>
            </div>
            <div class="input-line">
                <div class="w-2/6 mr-1">
                    <label for="CPF_CNPJ">CPF/CNPJ</label>
                    <input type="text" name="CPF_CNPJ" id="CPF_CNPJ" class="w-full" value="<?php echo $trf2_info['CPF_CNPJ']; ?>">
                </div>
                <div class="w-2/6 mr-1">
                    <label for="ADVOGADO">Advogado</label>
                    <input type="text" name="ADVOGADO" id="ADVOGADO" value="<?php echo $trf2_info['ADVOGADO']; ?>" <?php if (!$admin) {
                                                                                                                        echo "readonly class='w-full bg-slate-300'";
                                                                                                                    } else {
                                                                                                                        echo "class='w-full'";
                                                                                                                    }; ?>>

                </div>
                <div class="w-2/6">
                    <label for="OAB">OAB</label>
                    <input type="text" name="OAB" id="OAB" value="<?php echo $trf2_info['OAB']; ?>" <?php if (!$admin) {
                                                                                                        echo "readonly class='w-full bg-slate-300'";
                                                                                                    } else {
                                                                                                        echo "class='w-full'";
                                                                                                    }; ?>>
                </div>
            </div>
            <div class="input-line">
                <div class="w-2/6 mr-1">
                    <label for="REQUERIDO">REQUERIDO</label>
                    <input type="text" name="REQUERIDO" id="REQUERIDO" value="<?php echo $trf2_info['REQUERIDO']; ?>" <?php if (!$admin) {
                                                                                                                            echo "readonly class='w-full bg-slate-300'";
                                                                                                                        } else {
                                                                                                                            echo "class='w-full'";
                                                                                                                        }; ?>>
                </div>
                <div class="w-2/6 mr-1">
                    <label for="VALOR">Valor</label>
                    <input type="text" name="VALOR" id="VALOR" value="<?php echo $trf2_info['VALOR']; ?>" <?php if (!$admin) {
                                                                                                                echo "readonly class='w-full bg-slate-300'";
                                                                                                            } else {
                                                                                                                echo "class='w-full'";
                                                                                                            }; ?>>
                </div>
                <div class="w-2/6">
                    <label for="OFICIO">Ofício</label>
                    <input type="text" name="OFICIO" id="OFICIO" value="<?php echo $trf2_info['OFICIO']; ?>" <?php if (!$admin) {
                                                                                                                    echo "readonly class='w-full bg-slate-300'";
                                                                                                                } else {
                                                                                                                    echo "class='w-full'";
                                                                                                                }; ?>>
                </div>
            </div>
            <div class="input-line">
                <div class="w-2/6 mr-1">
                    <label for="PROCESSO_ORIGINARIO">Processo Originário</label>
                    <input type="text" name="PROCESSO_ORIGINARIO" id="PROCESSO_ORIGINARIO" class="w-full" value="<?php echo $trf2_info['PROCESSO_ORIGINARIO']; ?>">
                </div>
                <div class="w-2/6 mr-1">
                    <label for="TEL">Telefone</label>
                    <input type="text" name="TEL" id="TEL" class="w-full" value="<?php echo $trf2_info['TEL']; ?>">
                </div>
                <div class="w-2/6">
                    <label for="CEL">Celular</label>
                    <input type="text" name="CEL" id="CEL" class="w-full" value="<?php echo $trf2_info['CEL']; ?>">
                </div>
            </div>
            <div class="input-line">
                <div class="w-2/6 mr-1">
                    <label for="TEL_FIXO">Telefone Fixo</label>
                    <input type="text" name="TEL_FIXO" id="TEL_FIXO" class="w-full" value="<?php echo $trf2_info['TEL_FIXO']; ?>">
                </div>
                <div class="w-2/6 MR-1">
                    <label for="EMAIL">EMAIL</label>
                    <input type="text" name="EMAIL" id="EMAIL" value="<?php echo $trf2_info['EMAIL']; ?>" class="w-full">
                </div>
                <div class="w-2/6">
                    <label for="STATUS">Status</label>
                    <select name="STATUS" id="STATUS" class="w-full bg-red-300">
                        <option <?php echo ($trf2_info['STATUS'] == '===') ? 'selected="selected"' : ''; ?> value="===">==========</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'VAI PENSAR') ? 'selected="selected"' : ''; ?> value="VAI PENSAR">VAI PENSAR</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'RETORNAR') ? 'selected="selected"' : ''; ?> value="RETORNAR">RETORNAR</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'DEIXEI CONTATO') ? 'selected="selected"' : ''; ?> value="DEIXEI CONTATO">DEIXEI CONTATO</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'JA VENDEU') ? 'selected="selected"' : ''; ?> value="JA VENDEU">JÁ VENDEU</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'NAO TEM INTERESSE') ? 'selected="selected"' : ''; ?> value="NAO TEM INTERESSE">NÃO TEM INTERESSE</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'NAO SERVI') ? 'selected="selected"' : ''; ?> value="NAO SERVI">NÃO SERVI</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'VALOR BAIXO') ? 'selected="selected"' : ''; ?> value="VALOR BAIXO">VALOR BAIXO</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'OFICIO FISICO') ? 'selected="selected"' : ''; ?> value="OFICIO FISICO">OFICIO FISICO</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'OFICIO UNICO') ? 'selected="selected"' : ''; ?> value="OFICIO UNICO">OFICIO UNICO</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'COMPRAMOS') ? 'selected="selected"' : ''; ?> value="COMPRAMOS">COMPRAMOS</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'REPROVADO') ? 'selected="selected"' : ''; ?> value="REPROVADO">REPROVADO</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'SEM CONTATO') ? 'selected="selected"' : ''; ?> value="SEM CONTATO">SEM CONTATO</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'SO CHAMA') ? 'selected="selected"' : ''; ?> value="SO CHAMA">SÓ CHAMA</option>
                        <option <?php echo ($trf2_info['STATUS'] == 'FECHADO/ANALISE') ? 'selected="selected"' : ''; ?> value="FECHADO/ANALISE">FECHADO/ANALISE</option>
                    </select>
                </div>
            </div>
            <div class="input-line flex-col">
                <label for="ENDERECO">Endereço</label>
                <input type="text" name="ENDERECO" id="ENDERECO" class="w-full" value="<?php echo $trf2_info['ENDERECO']; ?>">
            </div>
            <div class="input-line">
                <label for="HISTORICO">Histórico</label>
            </div>
            <div class="input-line">
                <textarea name="HISTORICO" id="HISTORICO" rows="4" class="w-full"><?php echo $trf2_info['HISTORICO']; ?></textarea>
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
                        <option value="<?php echo $user['id']; ?>" <?php echo ($user['id'] == $trf2_info['user_id']) ? 'selected="selected"' : ''; ?>><?php echo $user['name_user']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>

        </div>

        <div class="input-line justify-center py-2">
            <?php if (isset($success) && !empty($success)) : ?>
                <div class="flash_info"><?php echo $success; ?></div>
            <?php endif; ?>
        </div>

        <?php if ($count_calc > 0) : ?>
            <div class="forms border rounded-md px-1 bg-slate-100">
                <input type="hidden" name="calc_id" id="calc_id" value="<?php echo $count_calc; ?>">
                <input type="hidden" name="tipo" id="tipo" value="trf2">
                <input type="hidden" name="id_processo" id="id_processo" value="<?php echo $trf2_info['NUMERO_DO_PRECATORIO']; ?>">
                <input type="hidden" name="id_tabela" id="id_tabela" value="<?php echo $trf2_info['ID']; ?>">
                <input type="hidden" name="requerente" id="requerente" value="<?php echo $trf2_info['CREDOR']; ?>">
                <input type="hidden" name="devedor" id="devedor" value="<?php echo $trf2_info['REQUERIDO']; ?>">
                <input type="hidden" name="precatorio" id="precatorio" value="<?php echo $trf2_info['NUMERO_DO_PRECATORIO']; ?>">
                <input type="hidden" name="advogado" id="advogado" value="<?php echo $trf2_info['ADVOGADO']; ?>">
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
                        <input type="hidden" name="max_vlr_exib" id="max_vlr_exib" value="<?php echo $calculadora['max_vlr']; ?>">
                        <input type="text" name="max_vlr" id="max_vlr" readonly value="<?php echo $calculadora['max_vlr']; ?>" class="w-1/2 input-readonly">
                    </div>
                </div>
                <div class="w-full flex justify-center py-3">
                    <button class="btn-success hover:btn-success--hover mx-1" type="submit" formaction="<?php echo BASE_URL; ?>trf2/update/<?php echo $trf2_info['ID']; ?>"><i class="fa-solid fa-file-contract"></i> GERAR PROPOSTA</button>
                    <button class="btn hover:btn-hover mx-1" type="submit" formaction="<?php echo BASE_URL; ?>trf2/update/<?php echo $trf2_info['ID']; ?>"><i class="fa-regular fa-floppy-disk"></i> SALVAR PROPOSTA</button>
                </div>
            </div>
        </form>

    <?php else : ?>
        <input type="hidden" name="tipo" id="tipo" value="trf2">
        <input type="hidden" name="id_processo" id="id_processo" value="<?php echo $trf2_info['NUMERO_DO_PRECATORIO']; ?>">
        <input type="hidden" name="id_tabela" id="id_tabela" value="<?php echo $trf2_info['ID']; ?>">
        <input type="hidden" name="requerente" id="requerente" value="<?php echo $trf2_info['CREDOR']; ?>">
        <input type="hidden" name="devedor" id="devedor" value="<?php echo $trf2_info['REQUERIDO']; ?>">
        <input type="hidden" name="precatorio" id="precatorio" value="<?php echo $trf2_info['NUMERO_DO_PRECATORIO']; ?>">
        <input type="hidden" name="advogado" id="advogado" value="<?php echo $trf2_info['ADVOGADO']; ?>">
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