<?php
class Proposta extends model
{

    // public function getList($offset, $id_company)
    // {
    //     $array = array();

    //     $sql = $this->db->prepare("SELECT * FROM services WHERE id_company = :id_company ORDER BY name_service ASC LIMIT $offset, 10");
    //     $sql->bindValue(":id_company", $id_company);
    //     $sql->execute();

    //     if ($sql->rowCount() > 0) {
    //         $array = $sql->fetchAll();
    //     }

    //     return $array;
    // }

    // public function getListAll($id_company)
    // {
    //     $array = array();

    //     $sql = $this->db->prepare("SELECT * FROM services WHERE id_company = :id_company ORDER BY name_service ASC");
    //     $sql->bindValue(":id_company", $id_company);
    //     $sql->execute();

    //     if ($sql->rowCount() > 0) {
    //         $array = $sql->fetchAll();
    //     }

    //     return $array;
    // }

    public function getInfo($id_tabela, $tipo)
    {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM calculadora WHERE id_tabela = :id_tabela AND tipo = :tipo");
        $sql->bindValue(":id_tabela", $id_tabela);
        $sql->bindValue(":tipo", $tipo);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getLast($id_tabela, $tipo)
    {
        $r = 0;

        $sql = $this->db->prepare("SELECT MAX(id) as c FROM calculadora WHERE id_tabela = :id_tabela AND tipo = :tipo");
        $sql->bindValue(":id_tabela", $id_tabela);
        $sql->bindValue(":tipo", $tipo);
        $sql->execute();
        $row = $sql->fetch();

        $r = $row['c'];

        return $r;
    }

    // public function getCount($id_company){
    // 	$r = 0;

    // 	$sql = $this->db->prepare("SELECT COUNT(*) as c FROM services WHERE id_company = :id_company");
    // 	$sql->bindValue('id_company', $id_company);
    // 	$sql->execute();
    // 	$row = $sql->fetch();

    // 	$r = $row['c'];



    // 	return $r;
    // }

    public function store(
        $vlr_atualizado,
        $honorarios_perc,
        $honorarios_vlr,
        $ir_perc,
        $ir_vlr,
        $rra_perc,
        $rra_vlr,
        $pss_perc,
        $pss_vlr,
        $vlr_liquido,
        $proposta_perc,
        $proposta_vlr,
        $max_perc,
        $max_vlr,
        $id_processo,
        $tipo,
        $id_tabela
    ) {

        $sql = $this->db->prepare("INSERT INTO calculadora SET vlr_atualizado = :vlr_atualizado, honorarios_perc = :honorarios_perc, honorarios_vlr = :honorarios_vlr, ir_perc = :ir_perc, ir_vlr = :ir_vlr, rra_perc = :rra_perc, rra_vlr = :rra_vlr, pss_perc = :pss_perc, pss_vlr = :pss_vlr, vlr_liquido = :vlr_liquido, proposta_perc = :proposta_perc, proposta_vlr = :proposta_vlr, max_perc = :max_perc, max_vlr = :max_vlr, id_processo = :id_processo, tipo = :tipo, id_tabela = :id_tabela");

        $sql->bindValue(":vlr_atualizado", $vlr_atualizado);
        $sql->bindValue(":honorarios_perc", $honorarios_perc);
        $sql->bindValue(":honorarios_vlr", $honorarios_vlr);
        $sql->bindValue(":ir_perc", $ir_perc);
        $sql->bindValue(":ir_vlr", $ir_vlr);
        $sql->bindValue(":rra_perc", $rra_perc);
        $sql->bindValue(":rra_vlr", $rra_vlr);
        $sql->bindValue(":pss_perc", $pss_perc);
        $sql->bindValue(":pss_vlr", $pss_vlr);
        $sql->bindValue(":vlr_liquido", $vlr_liquido);
        $sql->bindValue(":proposta_perc", $proposta_perc);
        $sql->bindValue(":proposta_vlr", $proposta_vlr);
        $sql->bindValue(":max_perc", $max_perc);
        $sql->bindValue(":max_vlr", $max_vlr);
        $sql->bindValue(":id_processo", $id_processo);
        $sql->bindValue(":tipo", $tipo);
        $sql->bindValue(":id_tabela", $id_tabela);
        $sql->execute();
    }

    public function update(
        $id,
        $vlr_atualizado,
        $honorarios_perc,
        $honorarios_vlr,
        $ir_perc,
        $ir_vlr,
        $rra_perc,
        $rra_vlr,
        $pss_perc,
        $pss_vlr,
        $vlr_liquido,
        $proposta_perc,
        $proposta_vlr,
        $max_perc,
        $max_vlr,
        $id_processo,
        $tipo,
        $id_tabela
    ) {
        $sql = $this->db->prepare("UPDATE calculadora SET vlr_atualizado = :vlr_atualizado, honorarios_perc = :honorarios_perc, honorarios_vlr = :honorarios_vlr, ir_perc = :ir_perc, ir_vlr = :ir_vlr, rra_perc = :rra_perc, rra_vlr = :rra_vlr, pss_perc = :pss_perc, pss_vlr = :pss_vlr, vlr_liquido = :vlr_liquido, proposta_perc = :proposta_perc, proposta_vlr = :proposta_vlr, max_perc = :max_perc, max_vlr = :max_vlr, id_processo = :id_processo, tipo = :tipo, id_tabela = :id_tabela WHERE id = :id");

        $sql->bindValue(":id", $id);
        $sql->bindValue(":vlr_atualizado", $vlr_atualizado);
        $sql->bindValue(":honorarios_perc", $honorarios_perc);
        $sql->bindValue(":honorarios_vlr", $honorarios_vlr);
        $sql->bindValue(":ir_perc", $ir_perc);
        $sql->bindValue(":ir_vlr", $ir_vlr);
        $sql->bindValue(":rra_perc", $rra_perc);
        $sql->bindValue(":rra_vlr", $rra_vlr);
        $sql->bindValue(":pss_perc", $pss_perc);
        $sql->bindValue(":pss_vlr", $pss_vlr);
        $sql->bindValue(":vlr_liquido", $vlr_liquido);
        $sql->bindValue(":proposta_perc", $proposta_perc);
        $sql->bindValue(":proposta_vlr", $proposta_vlr);
        $sql->bindValue(":max_perc", $max_perc);
        $sql->bindValue(":max_vlr", $max_vlr);
        $sql->bindValue(":id_processo", $id_processo);
        $sql->bindValue(":tipo", $tipo);
        $sql->bindValue(":id_tabela", $id_tabela);
        $sql->execute();
    }


    // public function delete($id, $id_company)
    // {
    //     $sql = $this->db->prepare("DELETE FROM services WHERE id = :id AND id_company = :id_company");
    //     $sql->bindValue(":id", $id);
    //     $sql->bindValue(":id_company", $id_company);
    //     $sql->execute();
    // }

    // public function searchService($sp, $id_company){
    // 	$array = array();

    // 	$sql = $this->db->prepare("SELECT name_service, standard_value, sale_value, time_standard, children_value, children_cost, id FROM services WHERE name_service LIKE '%$sp%' ORDER BY name_service ASC");
    // 	$sql->bindValue(":name_service", $sp.'%');
    // 	$sql->bindValue(":id_company", $id_company);
    // 	$sql->execute();

    // 	if($sql->rowCount() > 0) {
    // 		$array = $sql->fetchAll();
    // 	}
    // 	return $array;
    // }
}
