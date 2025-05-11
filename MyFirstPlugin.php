<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Plugins in php</h1>
        <?php
        echo "<h2>Plugins are used to add functionality to a web browser</h2>";
        echo "<p>Web plugins in php</p>";
        function web_plugins(){
            return "<h2>Plugins are used to add functionality to a web browser</h2>;
              <p>Web plugins in php</p>
            <p>Hello world!</p>";
        }
        // Register the shortcode [Welcome] to call the web_plugins function
        // This will allow you to use [Welcome] in your WordPress posts or pages
        add_shortcode('Welcome', 'web_plugins');

        function my_plugin_activate() {
            // code to run when plugin is activated
        }
        function my_plugin_deactivate(){
            // code to run when plugin is deactivated
        }
        /* Wrong code - function my_plugin_terminate(){
            // code to run when plugin is terminated
            // does not have built-in terminate hook
        }*/
        function my_plugin_uninstall(){
            // code to run when plugin is uninstalled
        }
        function my_plugin_shutdown(){
            // code to run when plugin is shutdown
        }
        // Register the activation, deactivation, terminate and uninstall hooks
        register_activation_hook(__FILE__, 'my_plugin_activate');
        register_deactivation_hook(__FILE__, 'my_plugin_deactivate');
        register_terminate_hook(__FILE__, 'my_plugin_terminate');
        register_uninstall_hook(__FILE__, 'my_plugin_uninstall');

        add_action('shutdown', 'my_plugin_shutdown');
        ?>
</body>
</html> 