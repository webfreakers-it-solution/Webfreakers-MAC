<?php

class DBConnection
	{
		public function dbConnect()
		{
			try{
				$conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME , USERNAME, PASSWORD);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			}
			catch(PDOException $e){
				echo "Connection failed: " . $e->getMessage();
			}
		}
	}
?>