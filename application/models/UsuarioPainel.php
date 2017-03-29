<?php

class Application_Model_UsuarioPainel {

    public function gravaNovosDados($param) {
        $locale = new Zend_Locale('de_AT');
        $dataNascimento = new Zend_Date($param['data_nascimento'], false, $locale);
        $param['data_nascimento'] = $dataNascimento->toString("YYYY-MM-dd");

        $dataAdm = new Zend_Date($param['data_admissao'], false, $locale);
        $param['data_admissao'] = $dataAdm->toString("YYYY-MM-dd");

        $dataExpIni = new Zend_Date($param['data_exp_inicio'], false, $locale);
        $param['data_exp_inicio'] = $dataExpIni->toString("YYYY-MM-dd");

        $dataExpFim = new Zend_Date($param['data_exp_fim'], false, $locale);
        $param['data_exp_fim'] = $dataExpFim->toString("YYYY-MM-dd");


        $painel = new Zend_Db_Table('painel');
        $painel->insert($param);
    }

    public function editaDados($param) {
        $locale = new Zend_Locale('de_AT');
        $dataNascimento = new Zend_Date($param['data_nascimento'], false, $locale);
        $param['data_nascimento'] = $dataNascimento->toString("YYYY-MM-dd");

        $dataAdm = new Zend_Date($param['data_admissao'], false, $locale);
        $param['data_admissao'] = $dataAdm->toString("YYYY-MM-dd");

        $dataExpIni = new Zend_Date($param['data_exp_inicio'], false, $locale);
        $param['data_exp_inicio'] = $dataExpIni->toString("YYYY-MM-dd");

        $dataExpFim = new Zend_Date($param['data_exp_fim'], false, $locale);
        $param['data_exp_fim'] = $dataExpFim->toString("YYYY-MM-dd");


        $painel = new Zend_Db_Table('painel');
        $where = $painel->getAdapter()->quoteInto('id= ?', $param['id']);
        $painel->update($param, $where);
    }

    public function deleteDados($id) {
        $painel = new Zend_Db_Table('painel');
        $where = $painel->getAdapter()->quoteInto('id= ?', $id);
        $painel->delete($where);
    }

}
