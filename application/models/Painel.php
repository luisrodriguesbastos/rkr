<?php

class Application_Model_Painel extends Zend_Db_Table_Abstract {

    /**
     * The default table name
     */
    protected $_login = 'painel';

    /**
     * isUniqueName
     *
     * @desc check if is unique name
     * @param <string> $name
     */
    public function isUniqueName($name) {
        $where = $this->getDefaultAdapter()->quoteInto('login = ?', $name);
        return (count($this->fetchAll($where)) == 0) ? true : false;
    }
    
    public function gravaNovosDados($param) {
        $painel = new Zend_Db_Table('painel');
        $painel->insert($param);
        $where = $this->getAdapter()->quoteInto('id= ?', 1);
        //aqui executo o update
        $this->update(array('login' => 'maria'), $where);
    }

}
