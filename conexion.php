<?php

define('Host', 'localhost');
define('User', 'root');
define('Pass', '');
define('Name_BD', 'placetoplay');
define('DB_CHARSET', 'utf-8');

class conectar
{
		protected $_db;

		
	public function __construct()
	{
		 $conectar=$this->_db = new mysqli(Host, User, Pass, Name_BD);

        if ($conectar=$this->_db->connect_errno )
        {
            echo "Fallo al conectar a MySQL: ". $conectar=$this->_db->connect_error;
            return;    
        }
	}
}


?>