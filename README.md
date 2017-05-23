# CUSTOM ADMIN MENU ITEM

How to add a custom menu item on prestashop.

# HOW TO 
To create custom back office menu on prestashop, you must follow following steps :

Create AdminCustomController.php
Move your controller to /public_html/Controllers/Admin/AdminCustomController.php
Create custom.tpl
Move your tpl to /public_html/Admin/themes/default/template/controllers/custom/custom.tpl
Now you must create menu in : Back Office -> Administration->Menus->create

```sh
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
        $smarty->assign('var', 'My Custom Var');
        // TEMPLATE
        $this->setTemplate('custom.tpl');
    }
}
```
# MAGICAL !
