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
		system("/Applications/MAMP/Library/bin/mysqldump --user=".DB_USER." --password=".DB_PASSWORD." --host ".DB_HOST." ".DB_NAME." > ".get_template_directory()."/dump.sql");
	}
}
