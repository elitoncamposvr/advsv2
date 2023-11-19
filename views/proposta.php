<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Proposta - <?php echo $proposta['id_processo']; ?></title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    .table-header {
        width: 100%;
        background-color: #14b8a6;
    }

    .header-line {
        padding: 20px 0;
        text-align: center;
    }

    .p-header {
        font-size: 22px;
        font-weight: bold;
    }

    .p-title {
        font-size: 16px;
        font-weight: bold;
    }

    .table-line {
        width: 100%;
        padding: 0 60px;
        display: inline-block;
        margin-bottom: 8px;
    }

    .py-10 {
        padding: 10px 0;
    }

    .title {
        background-color: black;
        color: white;
        border-radius: 6px;
        font-size: 22px;
        font-weight: bold;
        text-align: center;
        margin: 10px 60px;
        padding: 5px 0;
    }

    .label {
        width: 39%;
        background-color: black;
        color: white;
        float: left;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
        font-weight: bold;
    }

    .data {
        width: 59%;
        float: right;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
    }

    .label-2 {
        width: 59%;
        background-color: black;
        color: white;
        float: left;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
        font-weight: bold;
    }

    .data-2 {
        width: 39%;
        float: right;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
    }

    .label-3 {
        width: 46%;
        background-color: black;
        color: white;
        float: left;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
        font-weight: bold;
    }

    .data-perc {
        width: 12%;
        background-color: black;
        color: white;
        float: left;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
        font-weight: bold;
        margin-left: 1%;
    }

    .data-3 {
        width: 39%;
        float: right;
        border: 1px solid black;
        border-radius: 6px;
        padding: 10px 0;
        text-align: center;
    }

    h1 {
        text-align: center;
        font-size: 20px;
        margin: 20px;
        font-weight: 500;
    }

    .clear {
        clear: both;
    }

    footer {
        width: 100%;
        position: absolute;
        bottom: 0;
        text-align: center;
        border-top: 2px solid #14b8a6;
    }

    .center{
        text-align: center;
    }
</style>

<body>
    <table class="table-header">
        <tr class="header">
            <td width="40%" class="header-line">
                <img src="<?php echo BASE_URL; ?>assets/images/logo.png" width="150px" alt="Logo">
            </td>
            <td width="60%">
                <p class="p-header">Olá!</p>
                <p class="p-header">Está é uma proposta de intenção de Compra e Antecipação de Precatório.</p>
            </td>
        </tr>
    </table>

    <table class="table-line">
        <tr>
            <td class="p-header py-10">
                A/C: 
                <?php 
                $abreviado = explode(" ", $proposta['requerente']);
                echo $abreviado[0];
                ?>
            </td>
        </tr>
        <tr>
            <td class="p-title">
                Antecipe seus sonhos com a venda e antecipação do seu precatório! <br>
                Milhares de famílias já foram beneficiadas com a venda do precatório.
            </td>
        </tr>
    </table>

    <div class="title">
        DADOS DO PRECATÓRIO
    </div>

    <div class="table-line">
        <div class="label">
            REQUERENTE:
        </div>
        <div class="data">
            <?php echo $proposta['requerente']; ?>
        </div>
    </div>

    <div class="table-line">
        <div class="label">
            ADVOGADO:
        </div>
        <div class="data">
            &nbsp;<?php echo $proposta['advogado']; ?>
        </div>
    </div>

    <div class="table-line">
        <div class="label">
            PRECATÓRIO Nº:
        </div>
        <div class="data">
            &nbsp;<?php echo $proposta['precatorio']; ?>
        </div>
    </div>

    <div class="table-line">
        <div class="label">
            DEVEDOR:
        </div>
        <div class="data">
            &nbsp;<?php echo $proposta['devedor']; ?>
        </div>
    </div>

    <div class="table-line">
        <div class="label">
            PROCESSO:
        </div>
        <div class="data">
            &nbsp;<?php echo $proposta['id_processo']; ?>
        </div>
    </div>

    <div class="table-line">
        <div class="label-2">
            VALOR ATUALIZADO DO PRECATÓRIO:
        </div>
        <div class="data-2">
            &nbsp;<?php echo $proposta['vlr_atualizado']; ?>
        </div>
    </div>

    <div class="table-line">
        <div class="label-3">
            SIMULAÇÃO IMPOSTO IR:
        </div>
        <div class="data-perc">
            &nbsp;<?php echo $proposta['ir_perc']; ?>
        </div>
        <div class="data-3">
            &nbsp;<?php echo $proposta['ir_vlr']; ?>
        </div>
    </div>

    <div class="table-line">
        <div class="label-3">
            RETENÇÃO IMPOSTO IR-RRA:
        </div>
        <div class="data-perc">
            &nbsp;<?php echo $proposta['rra_perc']; ?>
        </div>
        <div class="data-3">
            &nbsp;<?php echo $proposta['rra_vlr']; ?>
        </div>
    </div>

    <div class="table-line">
        <div class="label-3">
            RETENÇÃO IMPOSTO PSS:
        </div>
        <div class="data-perc">
            &nbsp;<?php echo $proposta['pss_perc']; ?>
        </div>
        <div class="data-3">
            &nbsp;<?php echo $proposta['pss_vlr_exib']; ?>
        </div>
    </div>

    <div class="table-line">
        <div class="label-3">
            RESERVA DE HONORÁRIOS:
        </div>
        <div class="data-perc">
            &nbsp;<?php echo $proposta['honorarios_perc']; ?>
        </div>
        <div class="data-3">
            &nbsp;<?php echo $proposta['honorarios_vlr_exib']; ?>
        </div>
    </div>

    <div class="table-line">
        <div class="label-2">
            VALOR LIQUIDO NEGOCIÁVEL:
        </div>
        <div class="data-2">
            &nbsp;<?php echo $proposta['vlr_liquido_exib']; ?>
        </div>
    </div>

    <div class="table-line">
        <div class="label-2">
            PROPOSTA DE ANTECIPAÇÃO AO CREDOR:
        </div>
        <div class="data-2">
            &nbsp;<?php echo $proposta['proposta_vlr']; ?>
        </div>
    </div>

    <h1>PROCEDIMENTOS DA NEGOCIAÇÃO</h1>

    <div class="center">
        <img src="<?php echo BASE_URL; ?>assets/images/pdf.png" width="75%" alt="PDF">
    </div>

    <div class="clear"></div>
    <footer>
        (11) 2351-3823 | www.agapeinvest.com.br <br>
        Rua Marques de Marica, 964 - Sacomã - CEP 04252-000 - São Paulo – SP
    </footer>
</body>

</html>