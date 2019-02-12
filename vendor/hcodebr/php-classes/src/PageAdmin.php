<?php
namespace Hcode;

 class PageAdmin extends Page{

 	public function __construct($opts = array(), $tpl_dir = "/views/admin/"){//passa como paramentro a outra pasta para salvar os dados do 	adm
 		 parent:: __construct($opts,$tpl_dir); //Chama o construtor da page views já criada
 	}
 }

 ?>