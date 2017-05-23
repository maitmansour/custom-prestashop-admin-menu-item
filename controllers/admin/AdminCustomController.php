<?php

class AdminCustomController extends AdminControllerCore
{
    public function __construct()
    {


        $this->bootstrap = true;
        $this->controller_name = "AdminCustom";
        
        parent::__construct();
    }

    public function initContent()
    {
        parent::initContent();

        // Assign variables to template
        $smarty = $this->context->smarty;
        $smarty->assign('var', 'Custom Variable');
     //   var_dump("expression"); exit();
        // TEMPLATE
        $this->setTemplate('custom.tpl');
    }
}