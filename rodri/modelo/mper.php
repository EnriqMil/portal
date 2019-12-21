<?php
include("conexion.php");

class mper{

	
	function mper(){
		
	}
	
	function selcon($sql){
			$conBD = new conexion();
			$conBD-> conectarBD();
			$conBD-> ejecon($sql,2);
			$conBD-> desconectarBD();
			echo $sql;
	}
	
	function selcot($sql){
			$conBD = new conexion();
			$conBD-> conectarBD();
			$data = $conBD->ejecon($sql,1);
			$conBD->desconectarBD();
			return $data;
	}	
//Insert or update function	
	function insper($defendant, $cifdefendant, $addressdefendant, $debt, $currency, $plantiffcountry, $defendantcountry){
		$sql = "INSERT INTO gestion (defendant, cifdefendant, addressdefendant, debt, currency, plaintiffcountry, defendantcountry) VALUES ('$defendant', '$cifdefendant', '$addressdefendant', '$debt', '$currency', '$plantiffcountry', '$defendantcountry');";
		$this->selcon($sql);
	}
	
	
	function updper($defendant, $debt, $currency, $plantiffcountry, $defendantcountry){
	//	$sql ="UPDATE gestion SET (defendant = '$defendant', debt = '$debt', currency = '$currency', plaintiffcountry = '$plantiffcountry', defendantcountry = '$defendantcountry' WHERE ndocper = '$ndocper';"; 
		//$this->selcon($sql);
	}
	
	function upddatesuing($id, $suingdate){
		$sql ="UPDATE gestion SET (suingdate = '$suingdate') WHERE id= '$id';"; 
		$this->selcon($sql);
	}

	function upddatejudicial($id, $debtwon, $judicialdate){
		$sql ="UPDATE gestion SET (judicialdebt = '$debtwon', judicialdate = '$judicialdate') WHERE id= '$id';"; 
		$this->selcon($sql);
	}
	
	function updpostjudicial($id, $appeal){
		$sql ="UPDATE gestion SET (appeal = '$appeal') WHERE id= $id"; 
		$this->selcon($sql);
	}

	function updappealend($id, $appealdecisiondate, $money_case){
		$sql ="UPDATE gestion SET (appeal = 2, appealdate = '$appealdecisiondate', lastdecision = '$appealdecisiondate', judicialdebt = '$money_case') WHERE id= '$id';"; 
		$this->selcon($sql);
	}
	
	function updpayment($id, $money_judicial){
		$sql ="UPDATE gestion SET paydebt = '$money_judicial' WHERE id= '$id';"; 
		$this->selcon($sql);
	}	

	function updend($id){
		$sql ="UPDATE gestion SET  (appeal= 4) WHERE id= '$id';"; 
		$this->selcon($sql);
	}

//delete funcition 
	function delper($id){
		$sql ="DELETE FROM gestion WHERE id= '$id';"; 
		$this->selcon($sql);
	}
	
//SELECT function 
	function selper(){
		$sql="SELECT * FROM gestion";
		$data = $this->selcot($sql);
		return $data;
	}
	
	function selsuingdate(){
		$sql="SELECT * FROM gestion WHERE suingdate IS NULL";
		$data = $this->selcot($sql);
		return $data;
	}
	//Sql information suingdate IS NOT NULL AND judicialdate IS NULL, remember $casos1['id'] and not 1
	function selcourt1(){
		$sql="SELECT * FROM gestion WHERE suingdate IS NOT NULL AND judicialdate IS NULL";
		$data = $this->selcot($sql);
		return $data; 
	}
	
	function seldecision2(){
		$sql="SELECT * FROM gestion WHERE judicialdate IS NOT NULL AND appeal = 0";
		$data = $this->selcot($sql);
		return $data; 
	}
	
	function selappeal3(){
		$sql="SELECT * FROM gestion WHERE judicialdate IS NOT NULL AND appeal = 1 AND appealdate IS NULL";
		$data = $this->selcot($sql);
		return $data; 
	}
	
	function selejecutar4(){
		$sql="SELECT * FROM gestion WHERE appeal= 2";
		$data = $this->selcot($sql);
		return $data; 
	}

	function selcloseissues5(){
		$sql="SELECT * FROM gestion WHERE appeal= 4";
		$data = $this->selcot($sql);
		return $data; 
	}
	
	//opcion para buscar con numero de id
	function selper1($id){
		$sql="SELECT * FROM gestion WHERE id= '$id';";
		//$data = $this->selcot($sql);
		//return $data; 
	}
	function UNAMASDEMOSTRAR($id){
		$sql="SELECT defendant, debt, currency, plaintiffcountry, defendantcountry FROM gestion WHERE id= '$ndocper';";
		//$data =$this->selcot($sql);
		//return $data; 
	}
}

