<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Application extends CI_Controller {
    
    protected $data = array(); //parameter for viewcomponents
    protected $id; // idientifier for content
    protected $choices = array( //menu navar
        'Home' => '/', 'Gallery' => '/gallery', 'About' => '/about'
    );
    
    //constructor
    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['pagetitle'] = 'Sample Image Gallery';
    }
    
    //render this page
    function render() {
        $this->data['menubar'] = build_menu_bar($this->choices);
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        $this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }
}

