<?php
namespace App\Core\Database;

use PDO;

class QueryBuilder{

	protected $pdo;

	function __construct(PDO $pdo){
		$this->pdo = $pdo;
	}
	// Generic//
	public function SELECT($table){
		$statement =$this->pdo->prepare('select * from '.$table);
			$statement->execute();
			return $statement->fetchAll(PDO::FETCH_OBJ);
		}
		public function INSERT_GET_ID($sql){
			$statement =$this->pdo->prepare($sql);
			$statement->execute();
			$sql = "select LAST_INSERT_ID()";
			$statement =$this->pdo->prepare($sql);
			$statement->execute();
			return $statement->fetchAll(PDO::FETCH_ASSOC);
		}

		public function SEARCHLIKE($table,$column,$keyword){
			$statement =$this->pdo->prepare('select * from '.$table.' where '.$column.' LIKE \''.$keyword.'%\'');
				$statement->execute();
				return $statement->fetchAll(PDO::FETCH_OBJ);
			}

		public function SELECTDISTINCT($table,$column){
			$statement =$this->pdo->prepare('SELECT DISTINCT '.$column.' FROM'.$table);
			$statement->execute();
			return $statement->fetchAll(PDO::FETCH_OBJ);
			}
		// End Of Generic//
		
		// ProductController-DataLayer //
		public function productInsert($pname,$rp,$ptype,$size,$cname,$sh_name){
			$str =  strtoupper($size);
			$unit_price = $rp/(explode("X",$str)[0]*explode("X",$str)[1]);
			$unit_price = round($unit_price,1);   
			$sql = "INSERT INTO product (pname,rp,ptype,size,cname,sh_name,unit_price,image1) VALUES (?,?,?,?,?,?,?,?)";
			$stmt= $this->pdo->prepare($sql)->execute([$pname,$rp,$ptype,$size,$cname,$sh_name,$unit_price,'public/images/product/na.jpg']);
			return $stmt;
		}
		
		public function productUpdate($p_id,$pname,$rp,$ptype,$size,$cname,$sh_name){
			$str =  strtoupper($size);
			   $unit_price = $rp/(explode("X",$str)[0]*explode("X",$str)[1]);
			   $unit_price = round($unit_price,1);
			$sql = "UPDATE product SET pname=?, rp=?, ptype=? , size=? , cname=? , sh_name=? , unit_price=? WHERE p_id=?";
			$stmt= $this->pdo->prepare($sql)->execute([$pname,$rp,$ptype,$size,$cname,$sh_name,$unit_price,$p_id]);
			return $stmt;
		}
		// ProductController-DataLayer //
		//Distributorcontroller->DataLayer//
		public function distributorInsert($distribution,$name,$status,$job,$contact1,$contact2,$contact3){
			$sql = "INSERT INTO distributor(distribution_id,name,jobtitle,status,contact1,contact2,contact3) VALUES (?,?,?,?,?,?,?)";
			$stmt= $this->pdo->prepare($sql)->execute([(int)$distribution,$name,$job,$status,$contact1,$contact2,$contact3]);
			return $stmt;
		}
		public function distributorUpdate($dis_id,$distribution,$name,$contact1,$contact2,$contact3){
			$sql = "UPDATE distributor SET distribution = ? ,name = ? ,job = ? ,status = ?,contact1 = ?,contact2 = ?,contact3 = ? WHERE dis_id= ?";
			$stmt= $this->pdo->prepare($sql)->execute([$distribution,$name,$job,$status,$contact1,$contact2,$contact3,$dis_id]);
			return $stmt;
		}
}

?>
