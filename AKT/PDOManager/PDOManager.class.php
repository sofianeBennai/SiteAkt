<?php

class PurseDatabase extends PDO {
	
	/**
	 * Constructor.
	 */
	public function __construct() {
            parent::__construct(DATABASE_TYPE.":dbname=".DATABASE_NAME.";host=".DATABASE_HOST.";user=".DATABASE_USER.";password=".DATABASE_PWD.";port=".DATABASE_PORT);
            $this->exec("SET NAMES 'UTF8'");
	}

	public function db()  {
            return $this;
	}

	public function close()  {
            //Do nothing.
	}
}

?>