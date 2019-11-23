<?php session_start();
ob_start();
class giay
{
	var $IDGiay;
	var $tenGIay;
	var $giaAo;
	var $giaThuc;
	var $productDetails;
	var $anhDemo;
	function __construct($IDGiay,$tenGIay,$giaAo,$giaThuc,$productDetails,$anhDemo) {
		$this->IDGiay         = $IDGiay;
		$this->tenGIay        = $tenGIay;
		$this->giaAo          = $giaAo;
		$this->giaThuc        = $giaThuc;
		$this->productDetails = $productDetails;
		$this->anhDemo        = $anhDemo;
	}
	static function connect(){
		$con = new mysqli("localhost","root","","shopcart");
		$con->set_charset("utf8");
		if ($con->connect_error) {
			die("ket noi that bai" .$con->connect_error);
		}
		return $con;
	}
	static function getListDB(){
		$con = giay::connect();
		$sql = "SELECT * FROM `giay`";
		$result = $con->query($sql);
		$lsGiay = array();
		if($result->num_rows >=0){
			while ($row = $result->fetch_assoc()) {
				$single = new giay($row["IDGiay"],$row["TenGiay"],$row["GiaAo"],$row["GiaThuc"],$row["ProductDetails"],$row["anhDemo"]);
				array_push($lsGiay, $single);
			}
		}
		$con->close();
		return $lsGiay;
	}
	static function getListImg($idmg){
		$con = giay::connect();
		$sql ="SELECT * FROM `images` WHERE IDgiay=$idmg";
		$result = $con->query($sql);
		$listImg= array();
		if($result->num_rows >=0){
			while ($row = $result->fetch_assoc()) {
				$single = $row["UrlImg"];
				array_push($listImg, $single);
			}
		}
		$con->close();
		return $listImg;
	}
	static function getGiay($mg){
		$con = giay::connect();
		$sql ="SELECT * FROM `giay` WHERE IDGiay=$mg";
		$result = $con->query($sql);
		if ($result->num_rows >=0) {
			while ($row = $result->fetch_assoc()) {
				$single = new giay($row["IDGiay"],$row["TenGiay"],$row["GiaAo"],$row["GiaThuc"],$row["ProductDetails"],$row["anhDemo"]);
			}
		}
		$con->close();
		return $single;
	}
}


class bag
{
	var $IDGiay;
	var $soLuong;
	function __construct($IDGiay,$soLuong) {
		$this->IDGiay  = $IDGiay;
		$this->soLuong = $soLuong;
	}
	static function addBag($mg){
		$listBagnew= array();
		if (empty($_SESSION["bag"])) {
			$gh=new bag($mg,1);
			array_push($listBagnew, $gh);
			$_SESSION["bag"]=$listBagnew;
		}
		else {
			$listBag = $_SESSION["bag"];
			$test = 0; 
			foreach ($listBag as $value) {
				if ($mg == $value->IDGiay) {
					$value->soLuong++;
					$test=1;
				}
				array_push($listBagnew, $value);
			}
			if ($test != 1) {
				$gh=new bag($mg,1);
				array_push($listBagnew, $gh);
			}
			$_SESSION["bag"] = $listBagnew;

		}
	}
	static function editSL($mgEdit, $editSL)
	{
		$listBagnew= array();
		$listBag = $_SESSION["bag"];
		foreach ($listBag as $value) {
			if ($mgEdit == $value->IDGiay) {
				$value->soLuong= $editSL;
			}
			array_push($listBagnew, $value);
		}
		$_SESSION["bag"]=$listBagnew;
	}
}


?>