<?php
	
namespace App\DC;

abstract class DependencyContainer {
	
	private static $oConexao;
	private static $oDAOFactory;

	public static function getConection():Conection {
		return self::$oConexao;
	}

}