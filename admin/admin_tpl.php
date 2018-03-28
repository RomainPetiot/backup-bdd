<?php
class menu_admin_backup_bdd{

    public function __construct(){

        if(is_admin() ){
    	    add_action('admin_menu', array($this, 'add_plugin_page'));
    	}
    }

    public function add_plugin_page(){
		add_management_page(
	           'BackupBDD',
	           'BackupBDD',
	           'manage_options',
	           'rp_ig_setting_backup',
	           array($this, 'setting_form_backup')
	       );
    }

    public function setting_form_backup(){

        ?>
    	<div class="wrap">

			<h2>Backup BDD</h2>
			<p><form action="" method="post" enctype="multipart/form-data">
		    <input type="submit" name="submitBackup" value="submit" class="button">
		    </form></p>
			<p>
				<?php $csvExport = new backup(); ?>
			</p>
    	</div>
    	<?php
    }
}

$ig = new menu_admin_backup_bdd();
