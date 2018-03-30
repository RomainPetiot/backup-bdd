<?php
set_time_limit(0);
/**
 * import des données
 */

class backup
{
	/**
	* Constructor
	*/
	public function __construct()
    {
		if(isset($_POST['submitBackup'])) {
        	$this->dump();
        }
    }

    public function dump()
	{
		$date = date("Y-m-d_H-i-s");
		$file = get_template_directory()."/backup/database/dump_".$date.".sql";
		system("/Applications/MAMP/Library/bin/mysqldump --user=".DB_USER." --password=".DB_PASSWORD." --host ".DB_HOST." ".DB_NAME." > ".$file);
		echo '<a href="'.get_template_directory_uri().'/backup/database/dump_'.$date.'.sql" download="dump_'.$date.'.sql">Fichier</a>';
	}
}
