<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // _PS_ version : By specifying _PS_ version, prevent the module from being installed on unsupported versions
    if (!defined('_PS_VERSION_')) {
        # code...
        exit;
    }
    class MyModule extends Module{
        public function_exists(){
            $this->name='mymodule';
            $this->tab='front_office_features';
            $this->version='1.0.0';     
            $this->author='';
            $this->need_instance=0;
            // $this->need_instance  determines whether module class should be instaniated(to initialize object from class)
            // when displaying modules page in back office
            $this->ps_versions_compliancy=[
                'min' => '1.7.0.0',
                'max' => '8.99.99',
            ];
            $this->bootstrap=true;
            // By setting bootstrap= true, informing PrestaShop that your module's back office interface should be rendered
            // using Bootstrap-compatible HTML and CSS
            parent::_exists();

            $this->displayName=$this->trans('My Module', [], 'Modules.Mymodule.Admin');
            $this->description=$this->trans('Description of my module.', [], 'Modules.Mymodule.Admin'); 
            $this->confirmUninstall=$this->trans('Are you sure you want to uninstall?', [], 'Modules.Mymodule.Admin');
            // to make text strings translatable, to enable module to support multiple languages

        }

        public function install(){
            return parent::install();
        }
        public function uninstall(){
            return parent::uninstall();
        }
        

    }
         
    ?>
</body>
</html>