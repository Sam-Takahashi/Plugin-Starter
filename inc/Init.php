<?php
/**
 * @package SamsPlugin
 */

 namespace Inc;

 // disallow extention of Init class
 final class Init {

    /**
     * Store all the classes inside an array
     * return array Full list of classes
     */
    public static function get_services(){
        return [
            Pages\AdminPages::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class
        ];
    }

    /**
     * Loop through the classes, initialize them,
     * and call the register() method if it exists
     */
     public static function register_services(){

        foreach(self::get_services() as $class){
            $services = self::instantiate($class);
            if (method_exists($services, 'register')) {
                $services->register();
            }
        }
     }

    /**
     * Initialize the $class
     * return new instance of the class
     */
    private static function instantiate( $class ){
        $services = new $class();

        return $services;
    }
 }

//Namespaces
// use Inc\Base\ActivatePlugin;
// use Inc\Base\DeactivatePlugin;
// use Inc\Pages\AdminPages;


// if (!class_exists('SamsPlugin')) {

//     class SamsPlugin
//     {


//         function __construct()
//         {
//             $this->plugName = plugin_basename(__FILE__);
//         }

//         // register function calls all hooks






//         protected function create_post_type()
//         {
//             add_action('init', array($this, 'custom_post_type'));
//         }

//         //generate CPT
//         function custom_post_type()
//         {
//             register_post_type('book', ['public' => true, 'label' => 'MF-Books']);
//         }



//         // static call
//         function activate()
//         {
//             ActivatePlugin::activate();
//         }
//     }

//     //calling static method
//     $myPlugin = new SamsPlugin();
//     $myPlugin->register();



//     //activation
//     register_activation_hook(__FILE__, array($myPlugin, 'activate'));

//     //deactivation(static)
//    // require_once plugin_dir_path(__FILE__) . 'inc/deactivate.php';
//     register_deactivation_hook(__FILE__, array('DeactivatePlugin', 'deactivate'));
// }
