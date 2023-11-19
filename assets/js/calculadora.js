$(function(){

    $('input[id=saldo]').mask('000.000.000.000.000,00', {reverse:true, placeholder:"0,00"});
    $('input[id=vlr_pago]').mask('000.000.000.000.000,00', {reverse:true, placeholder:"0,00"});
    $('input[id=vlr_liquido]').mask('000.000.000.000.000,00', {reverse:true, placeholder:"0,00"});
    $('input[id=honorarios_vlr]').mask('000.000.000.000.000,00', {reverse:true, placeholder:"0,00"});
    $('input[id=ir_vlr]').mask('000.000.000.000.000,00', {reverse:true, placeholder:"0,00"});
    $('input[id=rra_vlr]').mask('000.000.000.000.000,00', {reverse:true, placeholder:"0,00"});
    $('input[id=pss_vlr]').mask('000.000.000.000.000,00', {reverse:true, placeholder:"0,00"});
    $('input[id=max_vlr]').mask('000.000.000.000.000,00', {reverse:true, placeholder:"0,00"});
    $('input[id=proposta_perc]').mask('00,00%', {reverse:false, placeholder:"0"});

  
});

function valorAtualizado() {
    let vlr_pago = document.getElementById('vlr_atualizado').value
    let value2 = vlr_pago.replace('R$', '').replace('.', '').replace('.', '').replace('.', '').replace('.', '').replace(',', '.')
    let vlr_atualizado2 = Number(value2) * 1

    document.getElementById('vlr_atualizado').value = vlr_atualizado2.toLocaleString("pt-BR", {style:"currency", currency:"BRL"})

    
    let honorarios_perc = document.getElementById('honorarios_perc').value
    let honorarios_value = honorarios_perc.replace(',', '.').replace('%', '')
    let honorarios = vlr_atualizado2 * honorarios_value / 100
    document.getElementById('honorarios_vlr').value  = honorarios
    document.getElementById('honorarios_vlr_exib').value  = honorarios.toLocaleString("pt-BR", {style:"currency", currency:"BRL"})
    document.getElementById('honorarios_perc').value = honorarios_value + '%'
    
    let ir_perc = document.getElementById('ir_perc').value
    let ir_value = ir_perc.replace(',', '.').replace('%', '')
    let ir = vlr_atualizado2 * ir_value / 100
    document.getElementById('ir_vlr').value = ir
    document.getElementById('ir_vlr_exib').value = ir.toLocaleString("pt-BR", {style:"currency", currency:"BRL"})
    document.getElementById('ir_perc').value = ir_value + '%'

    let rra_perc = document.getElementById('rra_perc').value
    let rra_value = rra_perc.replace(',', '.').replace('%', '')
    let rra = vlr_atualizado2 * rra_value / 100
    document.getElementById('rra_vlr').value = rra
    document.getElementById('rra_vlr_exib').value = rra.toLocaleString("pt-BR", {style:"currency", currency:"BRL"})
    document.getElementById('rra_perc').value = rra_value + '%'
    
    let pss_perc = document.getElementById('pss_perc').value
    let pss_value = pss_perc.replace(',', '.').replace('%', '')
    let pss = vlr_atualizado2 * pss_value / 100
    document.getElementById('pss_vlr').value = pss
    document.getElementById('pss_vlr_exib').value = pss.toLocaleString("pt-BR", {style:"currency", currency:"BRL"})
    document.getElementById('pss_perc').value = pss_value + '%'

    let vlr_liquido = vlr_atualizado2 - honorarios - ir - rra - pss
    let vlr_liquido_value = vlr_liquido
    let vlr2 = vlr_liquido_value.toLocaleString("pt-BR", {style:"currency", currency:"BRL"})
    document.getElementById('vlr_liquido').value = vlr_liquido
    document.getElementById('vlr_liquido_exib').value = vlr2
    

    let max_perc = document.getElementById('max_perc').value
    let max_perc_1 = max_perc.replace(',', '.').replace('%', '')
    let max_vlr = vlr_liquido * max_perc_1 / 100
    let valor_exibir = max_vlr.toLocaleString("pt-BR", {style:"currency", currency:"BRL"})
    document.getElementById('max_vlr').value = max_vlr
    document.getElementById('max_vlr_exib').value = valor_exibir
    document.getElementById('max_perc').value = max_perc_1 + '%'
    
    let proposta_vlr = document.getElementById('proposta_vlr').value
    let proposta_value1 = proposta_vlr.replace('R$', '').replace('.', '').replace('.', '').replace('.', '').replace('.', '').replace(',', '.')
    let proposta_value = Number(proposta_value1) * 1
    let vlr_liq = document.getElementById('vlr_liquido').value
    let liquido = vlr_liq.replace(',', '.')
    let proposta = proposta_value / liquido * 100

    let proposta_teste = proposta_value.toLocaleString("pt-BR", {style:"currency", currency:"BRL"})
    

    document.getElementById('proposta_perc').value = proposta.toFixed(2).replace('.', ',') + '%'
    document.getElementById('proposta_vlr').value = proposta_teste


}

valorAtualizado()
