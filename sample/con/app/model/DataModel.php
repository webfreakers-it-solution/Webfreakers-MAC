<?php
	class DataModel extends DBConnection
	{
		public function select($table, $field = '*', $conditionData = null, $condition = 'and')
		{
			$con = $this->dbConnect();
			
			$conditionValue = null;

			if($conditionData != null)
			{
				foreach($conditionData as $key => $value)
				{
					$conditionValue .= "`".$key."`='".$value."' ".$condition." ";
				}

				if($condition == 'and')
				{
					$conditionValue = substr($conditionValue, 0, -5);
				}
				else
				{
					$conditionValue = substr($conditionValue, 0, -4);
				}
			}
			else
			{
				$conditionValue = 1;
			}

			$query = "select ".$field." from `".$table."` where ".$conditionValue."";

			$sql = $con->prepare($query);

			$sql->execute();

			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $result;
		}
		
		public function selectLike($table, $field = '*', $conditionData = null, $condition = 'and')
		{
			$con = $this->dbConnect();

			$conditionValue = null;

			if($conditionData != null)
			{
				foreach($conditionData as $key => $value)
				{
					$conditionValue .= $key." like '%".$value."%' ".$condition." ";
				}

				if($condition == 'and')
				{
					$conditionValue = substr($conditionValue, 0, -5);
				}
				else
				{
					$conditionValue = substr($conditionValue, 0, -4);
				}
			}
			else
			{
				$conditionValue = 1;				
			}

			$query = "select ".$field." from `".$table."` where ".$conditionValue."";

			$sql =  $con->prepare($query);

			$sql->execute();

			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $result;
		}

		public function selectRandom($table, $field = '*', $conditionData = null, $condition = 'and', $limit = null)
		{
			$con = $this->dbConnect();			

			$conditionValue = null;

			if($conditionData != null)
			{
				foreach($conditionData as $key => $value)
				{
					$conditionValue .= "`".$key."`='".$value."' ".$condition." ";
				}

				if($condition == 'and')
				{
					$conditionValue = substr($conditionValue, 0, -5);
				}
				else
				{
					$conditionValue = substr($conditionValue, 0, -4);
				}
			}
			else
			{
				$conditionValue = 1;				
			}

			$query = "select ".$field." from `".$table."` where ".$conditionValue." order by rand() limit ".$limit;

			$sql =  $con->prepare($query);

			$sql->execute();

			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $result;
		}
		
		public function insert($table, $data)
		{
			$con = $this->dbConnect();
			
			$index = null;

			$insertData = null;

			foreach($data as $key => $value)
			{
				$index .= "`".$key."`, ";
				$insertData .= "'".$value."', ";
			}

			$index = substr($index, 0, -2);

			$insertData = substr($insertData, 0, -2);

			$query = "insert into `".$table."`(".$index.") value(".$insertData.")";

			$result = $con->prepare($query);

			$result->execute();
			
			$id =$con->lastInsertId();	

			return $id;
		}

		public function update($table, $updateData, $conditionData = null, $condition = 'and')
		{
			$con = $this->dbConnect();

			$updateValue = null;

			$conditionValue = null;

			foreach($updateData as $key => $value)
			{
				$updateValue .= "`".$key."`='".$value."', ";
			}

			$updateValue = substr($updateValue, 0, -2);

			if($conditionData != null)
			{
				foreach($conditionData as $key => $value)
				{
					$conditionValue .= "`".$key."`='".$value."' ".$condition." ";
				}				
				if($condition == 'and')
				{
					$conditionValue = substr($conditionValue, 0, -5);
				}
				else
				{
					$conditionValue = substr($conditionValue, 0, -4);
				}
			}
			else
			{
				$conditionValue = 1;
			}

			$query = "update `".$table."` set ".$updateValue." where ".$conditionValue."";

			$result = $con->prepare($query);
			$result->execute();

			return $result;
		}
		
		public function delete($table, $conditionData = null, $condition = 'and')
		{
			$con = $this->dbConnect();

			$conditionValue = null;

			if($conditionData != null)
			{
				foreach($conditionData as $key => $value)
				{
					$conditionValue .= "`".$key."`='".$value."' ".$condition." ";
				}

				if($condition == 'and')
				{
					$conditionValue = substr($conditionValue, 0, -5);
				}
				else
				{
					$conditionValue = substr($conditionValue, 0, -4);
				}
			}
			else
			{
				$conditionValue = 1;
			}

			$query = "delete from `".$table."` where ".$conditionValue."";

			$result =$con->prepare($query);

			$result->execute();

			return $result;
		}

		public function getdataLimit($table,$start,$end)
		{
			$con = $this->dbConnect();
			
			$query = "SELECT * FROM `".$table."` LIMIT ".$start.",".$end."";

			$result = $con->prepare($query);

			$result->execute();
			
			return $result;
		}
		public function selectBetween($table, $field = '*', $conditionData = null, $start=null, $end = null)
		{
			$con = $this->dbConnect();   

			$conditionValue = null;

			if($conditionData != null)
			{
				foreach($conditionData as $key => $value)
				{
				 $conditionValue .= "`".$key."`='".$value."'";
				}

			}
			else
			{
				$conditionValue = 1;    
			}

			$query = "select ".$field." from `".$table."` where ".$conditionValue." and date between '".$start."' and '".$end."'";

			// print_r($query);
			// die();

			$sql =  $con->prepare($query);

			$sql->execute();

			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $result;
		}
		public function AselectBetween($table, $field = '*', $conditionData = null, $start=null, $end = null)
		{
			$con = $this->dbConnect();			

			$conditionValue = null;

			if($conditionData != null)
			{
				foreach($conditionData as $key => $value)
				{
					$conditionValue .= "`".$key."`='".$value."'";
				}

			}
			else
			{
				$conditionValue = 1;
			}

			$query = "select ".$field." from `".$table."` where ".$conditionValue." and date between '".$start."' and '".$end."'";

			$sql =  $con->prepare($query);

			$sql->execute();

			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

			return $result;
		}
	}
?>