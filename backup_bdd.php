<?php
/**
 * Plugin name: Backup BDD local with IOS
 * Plugin URI: https://www.romainpetiot.com/
 * Description: Dump database file to the actif theme<br /> /Applications/MAMP/Library/bin/mysqldump
 * Author : Romain Petiot
 *
 */

//Bloquer les accès directs
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require plugin_dir_path( __FILE__ ) . 'admin/backup.php';

require plugin_dir_path( __FILE__ ) . 'admin/admin_tpl.php';

//add_action( 'admin_enqueue_scripts', 'function_name' );
