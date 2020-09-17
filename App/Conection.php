<?php

    namespace App;

	use PDO;

	/**
	 * Class Conexao
	 *
	 * @package App
	 * @version 1.0.0 - Versionamento inicial da classe.
	 */
	class Conection
	{	
		
		private static $oInstance = null;

		public static function Conectar():PDO
		{
			if (null === self::$oInstance) {

				try {
					self::$oInstance = new PDO(
						"mysql:host=mysql;port=3306;dbname=praticando_php;
						charset=utf8", 
						"root",
						"123456"
					);
					return self::$oInstance;;
				} catch (PDOException $e) {
					echo '<p>' . $e->getMessage() . '</p>';
				}
			}
		}

	}
