<?php
class View_OAuth extends View {
    function init(){
        parent::init();
    }
    function setController($c){
        parent::setController($c);
        $c=$this->getController();
        $c->scope='http://docs.google.com/feeds/';
        $c->check();
    }

}
