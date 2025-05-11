<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2>using interface in plugins</h2>";
    interface pluginInterface {
        public function register();
    }
    class pluginManager{
        private $plugins=[];
        // method to load a plugin
        public function loadPlugins($directory){
            foreach(glob($directory."/*.php")as $file)
            // glob() is a function that searches for files matching a pattern and returns an array of matching file names.
            {
                require_once $file;
                $className=basename($file, ".php");
                // basename() is a function that returns the filename of a file path without the directory part.
                if(class_exists($className)){
                    $plugin=new $className();
                    if($plugin instanceof pluginInterface){
                        $plugin->register();
                        // instance of is keyword used to check if an object is an instance of a specific class or interface.

                        $this->plugins[]=$plugin;
                    }
                }
                
        }
    }
}
class MyPlugin implements pluginInterface{
    public function register(){
        echo "My plugin is registered!";
    }
}

$pluginManager=new pluginManager();
$pluginManager->loadPlugins(_DIR_."/plugins");
// _DIR_is a magic constant in php that returns directory of current file.

    ?>
</body>
</html>