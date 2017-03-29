<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PainelController extends Zend_Controller_Action {

    public function init() {
        if (!Zend_Auth::getInstance()->hasIdentity()) {
            return $this->_helper->redirector->goToRoute(array('controller' => 'auth'), null, true);
        }
        $this->_model = new Application_Model_Painel();
    }

    public function indexAction() {
        $this->view->headScript()->appendFile('/rkr/public/js/funcoes.js');
        $usuario = Zend_Auth::getInstance()->getIdentity();
        $usuarioPainel = new Zend_Db_Table('painel');
        $painel = $usuarioPainel->fetchAll();
        $this->view->usuario = $usuario;
        $this->view->painel = $painel;
    }

    public function newAction() {
        $this->view->headScript()->appendFile('/rkr/public/js/funcoes.js');
        $usuario = Zend_Auth::getInstance()->getIdentity();
        $this->view->usuario = $usuario;
    }

    public function postAction() {

        $modelPerfil = new Application_Model_UsuarioPainel();
        $dados = $this->getRequest()->getPost();

        if ($dados['id']) {
            $modelPerfil->editaDados($dados);
        } else {
            $modelPerfil->gravaNovosDados($dados);
        }
        return $this->_redirect('/painel');
    }

    public function editAction() {
        $this->view->headScript()->appendFile('/rkr/public/js/funcoes.js');
        $usuarioPainel = new Zend_Db_Table('painel');
        $painel = $usuarioPainel->find($this->getRequest()->getParam('id'));
        $this->view->painel = $painel;
    }

    public function deleteAction() {

        $modelPerfil = new Application_Model_UsuarioPainel();
        $modelPerfil->deleteDados($this->getRequest()->getParam('id'));
        return $this->_redirect('/painel');
    }

}
