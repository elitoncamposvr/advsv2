<div class="breadcrumb">
    <span class="breadcrumb-title">TJSP <i class="fa-solid fa-chevron-right px-2"></i> <?php echo $tjsp_info['id']; ?> - <?php echo $tjsp_info['nome']; ?></span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>tjsp" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<?php if ($count_calc > 0) : ?>
    <form class="forms px-1" method="post">
    <?php else : ?>
        <form class="forms border rounded-md px-1 bg-slate-100" target="_blank" method="post" action="<?php echo BASE_URL; ?>proposta/store_without_pdf">
        <?php endif; ?>

        <div class="py-2.5 forms px-1">
            <div class="input-line">
                <div class="w-2/5 mr-1">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="w-full" value="<?php echo $tjsp_info['nome']; ?>">
                </div>
                <div class="w-2/5 mr-1">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" class="w-full" value="<?php echo $tjsp_info['cpf']; ?>">
                </div>
                <div class="w-1/5">
                    <label for="nat">Nat</label>
                    <input type="text" name="nat" id="nat" value="<?php echo $tjsp_info['nat']; ?>" <?php if (!$admin) {
                                                                                                        echo "readonly class='w-full bg-slate-300'";
                                                                                                    } else {
                                                                                                        echo "class='w-full'";
                                                                                                    }; ?>>
                </div>
            </div>
            <div class="input-line">
                <div class="w-2/5 mr-1">
                    <label for="processo">Processo</label>
                    <input type="text" name="processo" id="processo" <?php if (!$admin) {
                                                                            echo "readonly class='w-full bg-slate-300'";
                                                                        } else {
                                                                            echo "class='w-full'";
                                                                        }; ?> value="<?php echo $tjsp_info['processo']; ?>">
                </div>
                <div class="w-2/5 mr-1">
                    <label for="nome_advg">Nome Advogado</label>
                    <input type="text" name="nome_advg" id="nome_advg" value="<?php echo $tjsp_info['nome_advg']; ?>" <?php if (!$admin) {
                                                                                                                            echo "readonly class='w-full bg-slate-300'";
                                                                                                                        } else {
                                                                                                                            echo "class='w-full'";
                                                                                                                        }; ?>>
                </div>
                <div class="w-1/5">
                    <label for="oab">OAB</label>
                    <input type="text" name="oab" id="oab" value="<?php echo $tjsp_info['oab']; ?>" <?php if (!$admin) {
                                                                                                        echo "readonly class='w-full bg-slate-300'";
                                                                                                    } else {
                                                                                                        echo "class='w-full'";
                                                                                                    }; ?>>
                </div>
            </div>
            <div class="input-line">
                <div class="w-2/6 mr-1">
                    <label for="n_ordem">Nº Ordem</label>
                    <input type="text" name="n_ordem" id="n_ordem" value="<?php echo $tjsp_info['n_ordem']; ?>" <?php if (!$admin) {
                                                                                                                    echo "readonly class='w-full bg-slate-300'";
                                                                                                                } else {
                                                                                                                    echo "class='w-full'";
                                                                                                                }; ?>>
                </div>
                <div class="w-2/6 mr-1">
                    <label for="vlr_pago">Valor Pago</label>
                    <input type="text" name="vlr_pago" id="vlr_pago" value="<?php echo $tjsp_info['vlr_pago']; ?>" <?php if (!$admin) {
                                                                                                                        echo "readonly class='w-full bg-slate-300'";
                                                                                                                    } else {
                                                                                                                        echo "class='w-full'";
                                                                                                                    }; ?>>
                </div>
                <div class="w-2/6">
                    <label for="saldo">Saldo</label>
                    <input type="text" name="saldo" id="saldo" value="<?php echo $tjsp_info['saldo']; ?>" <?php if (!$admin) {
                                                                                                                echo "readonly class='w-full bg-slate-300'";
                                                                                                            } else {
                                                                                                                echo "class='w-full'";
                                                                                                            }; ?>>
                </div>
            </div>
            <div class="input-line">
                <div class="w-2/6 mr-1">
                    <label for="tipo">Tipo</label>
                    <input type="text" name="tipo" id="tipo" value="<?php echo $tjsp_info['tipo']; ?>" <?php if (!$admin) {
                                                                                                            echo "readonly class='w-full bg-slate-300'";
                                                                                                        } else {
                                                                                                            echo "class='w-full'";
                                                                                                        }; ?>>
                </div>
                <div class="w-2/6 mr-1">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="w-full bg-red-300">
                        <option <?php echo ($tjsp_info['status'] == '===') ? 'selected="selected"' : ''; ?> value="===">==========</option>
                        <option <?php echo ($tjsp_info['status'] == 'VAI PENSAR') ? 'selected="selected"' : ''; ?> value="VAI PENSAR">VAI PENSAR</option>
                        <option <?php echo ($tjsp_info['status'] == 'RETORNAR') ? 'selected="selected"' : ''; ?> value="RETORNAR">RETORNAR</option>
                        <option <?php echo ($tjsp_info['status'] == 'DEIXEI CONTATO') ? 'selected="selected"' : ''; ?> value="DEIXEI CONTATO">DEIXEI CONTATO</option>
                        <option <?php echo ($tjsp_info['status'] == 'JA VENDEU') ? 'selected="selected"' : ''; ?> value="JA VENDEU">JÁ VENDEU</option>
                        <option <?php echo ($tjsp_info['status'] == 'NAO TEM INTERESSE') ? 'selected="selected"' : ''; ?> value="NAO TEM INTERESSE">NÃO TEM INTERESSE</option>
                        <option <?php echo ($tjsp_info['status'] == 'NAO SERVI') ? 'selected="selected"' : ''; ?> value="NAO SERVI">NÃO SERVI</option>
                        <option <?php echo ($tjsp_info['status'] == 'VALOR BAIXO') ? 'selected="selected"' : ''; ?> value="VALOR BAIXO">VALOR BAIXO</option>
                        <option <?php echo ($tjsp_info['status'] == 'OFICIO FISICO') ? 'selected="selected"' : ''; ?> value="OFICIO FISICO">OFICIO FISICO</option>
                        <option <?php echo ($tjsp_info['status'] == 'OFICIO UNICO') ? 'selected="selected"' : ''; ?> value="OFICIO UNICO">OFICIO UNICO</option>
                        <option <?php echo ($tjsp_info['status'] == 'COMPRAMOS') ? 'selected="selected"' : ''; ?> value="COMPRAMOS">COMPRAMOS</option>
                        <option <?php echo ($tjsp_info['status'] == 'REPROVADO') ? 'selected="selected"' : ''; ?> value="REPROVADO">REPROVADO</option>
                        <option <?php echo ($tjsp_info['status'] == 'SEM CONTATO') ? 'selected="selected"' : ''; ?> value="SEM CONTATO">SEM CONTATO</option>
                        <option <?php echo ($tjsp_info['status'] == 'SO CHAMA') ? 'selected="selected"' : ''; ?> value="SO CHAMA">SÓ CHAMA</option>
                        <option <?php echo ($tjsp_info['status'] == 'FECHADO/ANALISE') ? 'selected="selected"' : ''; ?> value="FECHADO/ANALISE">FECHADO/ANALISE</option>
                    </select>
                </div>
                <div class="w-2/6">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" value="<?php echo $tjsp_info['email']; ?>" class="w-full">
                </div>
            </div>
            <div class="input-line">
                <div class="w-2/6 mr-1">
                    <label for="tel">Telefone</label>
                    <input type="text" name="tel" id="tel" class="w-full" value="<?php echo $tjsp_info['tel']; ?>">
                </div>
                <div class="w-2/6 mr-1">
                    <label for="cel">Celular</label>
                    <input type="text" name="cel" id="cel" class="w-full" value="<?php echo $tjsp_info['cel']; ?>">
                </div>
                <div class="w-2/6">
                    <label for="tel_fixo">Telefone Fixo</label>
                    <input type="text" name="tel_fixo" id="tel_fixo" class="w-full" value="<?php echo $tjsp_info['tel_fixo']; ?>">
                </div>
            </div>
            <div class="input-line flex-col">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" class="w-full" value="<?php echo $tjsp_info['endereco']; ?>">
            </div>
            <div class="input-line">
                <label for="historico">Histórico</label>
            </div>
            <div class="input-line">
                <textarea name="historico" id="historico" rows="4" class="w-full"><?php echo $tjsp_info['historico']; ?></textarea>
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
                        <option value="<?php echo $user['id']; ?>" <?php echo ($user['id'] == $tjsp_info['user_id']) ? 'selected="selected"' : ''; ?>><?php echo $user['name_user']; ?></option>
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
            <div class="py-2.5 forms border rounded-md px-1 bg-slate-100">
                <input type="hidden" name="tipo" id="tipo" value="tjsp">
                <input type="hidden" name="calc_id" id="calc_id" value="<?php echo $count_calc; ?>">
                <input type="hidden" name="id_processo" id="id_processo" value="<?php echo $tjsp_info['processo']; ?>">
                <input type="hidden" name="id_tabela" id="id_tabela" value="<?php echo $tjsp_info['id']; ?>">
                <input type="hidden" name="requerente" id="requerente" value="<?php echo $tjsp_info['nome']; ?>">
                <input type="hidden" name="precatorio" id="precatorio" value="<?php echo $tjsp_info['processo']; ?>">
                <input type="hidden" name="devedor" id="devedor" value="NOME DO DEVEDOR">
                <input type="hidden" name="advogado" id="advogado" value="<?php echo $tjsp_info['nome_advg']; ?>">
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
                    <button class="btn-success hover:btn-success--hover mx-1" type="submit" formaction="<?php echo BASE_URL; ?>tjsp/update/<?php echo $tjsp_info['id']; ?>"><i class="fa-solid fa-file-contract"></i> GERAR PROPOSTA</button>
                    <button class="btn-success hover:btn-success--hover mx-1" type="submit" formaction="<?php echo BASE_URL; ?>tjsp/update_without_pdf/<?php echo $tjsp_info['id']; ?>"><i class="fa-regular fa-floppy-disk"></i> SALVAR PROPOSTA</button>
                </div>
            </div>
        </form>

    <?php else : ?>

            <input type="hidden" name="tipo" id="tipo" value="tjsp">
            <input type="hidden" name="id_processo" id="id_processo" value="<?php echo $tjsp_info['processo']; ?>">
            <input type="hidden" name="id_tabela" id="id_tabela" value="<?php echo $tjsp_info['id']; ?>">
            <input type="hidden" name="requerente" id="requerente" value="<?php echo $tjsp_info['nome']; ?>">
            <!-- <input type="hidden" name="devedor" id="devedor" value="<?php echo $tjsp_info['NUMERO_DO_PRECATORIO']; ?>"> -->
            <!-- <input type="hidden" name="precatorio" id="precatorio" value="<?php echo $tjsp_info['numero']; ?>"> -->
            <input type="hidden" name="advogado" id="advogado" value="<?php echo $tjsp_info['nome_advg']; ?>">
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