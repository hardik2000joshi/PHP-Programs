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
        public function_construct() {
            $this->name='mymodule';
            $this->tab='front_office_features';
            $this->version='1.0.0';     
            $this->author='Hardik Joshi';
            $this->need_instance=0;
            // $this->need_instance  determines whether module class should be instaniated(to initialize object from class)
            // whether to load the module’s class when displaying the “Modules” page in the back office
            $this->ps_versions_compliancy=[  // which version of PrestaShop this module is compatible with
                'min' => '1.7.0.0',
                'max' => '8.99.99',
            ];
            $this->bootstrap=true;
            // By setting bootstrap= true, informing PrestaShop that your module's back office interface should be rendered
            // using Bootstrap-compatible HTML and CSS
            parent::_construct();

            $this->displayName=$this->trans('My Module', [], 'Modules.Mymodule.Admin');
            $this->description=$this->trans('Description of my module.', [], 'Modules.Mymodule.Admin'); 
            $this->confirmUninstall=$this->trans('Are you sure you want to uninstall?', [], 'Modules.Mymodule.Admin');
            // to make text strings translatable, to enable module to support multiple languages

        }

        public function install(){
            if(Shop::isFeatureActive()){  // to check whether multi-store feature is active or not
                Shop::setContext(Shop::CONTEXT_ALL); // changes the context in order to apply coming changes to all existing stores
                 /*Multistore allows merchants to manage multiple shops from single back office
                 returns true if multistore is active
                 returns false if not active*/  
            }
            return (
                parent::install() // :: scope resolution operator to access static methods
                && Configuration::updateValue('MYMODULE_NAME', 'my module') // updating the value in configuration
            );
        }
        
        public function uninstall(){
            // uninstall() method that would delete the data which added to the database during installation
            return(
                parent::uninstall()
                && Configuration::deleteByName('MYMODULE_NAME')
            )
            }

        }
        

    

         
    ?>
</body>
</html>