<?php
	include("modelo/mper.php");
	$obj = new mper();
	
	$defendant = isset($_POST["defendant"]) ? $_POST["defendant"]:NULL; 
	$debt =  isset($_POST["debt"]) ? $_POST["debt"]:NULL;
	$currency = isset($_POST["currency"]) ? $_POST["currency"]:NULL; 
	$plaintiffcountry = isset($_POST["plaintiffcountry"]) ? $_POST["plaintiffcountry"]:NULL;
	$defendantcountry = isset($_POST["defendantcountry"]) ? $_POST["defendantcountry"]:NULL;
	$cifdefendant = isset($_POST["cif"]) ? $_POST["cif"]:NULL; 
	$addressdefendant = isset($_POST["addressdefendant"]) ? $_POST["addressdefendant"]:NULL;
	$dfavper = "";
	for ($i=0;$i<=5;$i++){
		$valorchk = isset($_POST["dfavper".$i]) ? $_POST["dfavper".$i]:NULL;
		if($valorchk)
			$dfavper .= $valorchk." ";
			
	}
	//$fotper = isset($_POST["fotper"]) ? $_POST["fotper"]:NULL;
		 	
	if($defendant && $debt){
		$obj->insper($defendant, $cifdefendant, $addressdefendant, $debt, $currency, $plaintiffcountry, $defendantcountry);
	}
	
	if(isset($_POST['delete']))
	{
		$id = $_POST["hiddenid"];
		$obj->delper($id);
		
	}
	
	if(isset($_POST['sue']))
	{
		$id =  isset($_POST["hiddenid"]) ? $_POST["hiddenid"]:NULL;
		
		$suingdate = isset($_POST["sueday"]) ? $_POST["sueday"]:NULL;
		
		$obj->upddatesuing($id, $suingdate);
	}

	if(isset($_POST['decision']))
	{
		$id = $_POST["hiddenid"];
		$judicialdate = $_POST["decisiondate"];
		$debtwon =  $_POST["debtwon"];
		$obj->upddatejudicial($id, $debtwon, $judicialdate);
	}
	if(isset($_POST['radionewfase']))
	{
		$id = $_POST["hiddenid"];
		$appeal = $_POST["after_judicial"];
		$obj->updpostjudicial($id, $appeal);
	}	


	if(isset($_POST['appealdecision']))
	{
		$id = $_POST["hiddenid"];
		$appealdecisiondate = $_POST["appealdecisiondate"];
		$money_case = $_POST["money_case"];
		$money_case = str_replace(',','.',$money_case);
		$money_case = str_replace(' ','',$money_case);
		/*$fee_sue = $_POST["fee_win_sue"];
		$fee_lawyer = $_POST["fee_lawyer"];*/ 
		$obj->updappealend($id, $appealdecisiondate, $money_case);
	}
	
	if(isset($_POST['addpayment']))
	{
//no graba los datos bien, incluye pero no los suma con los existentes
		$id = $_POST["hiddenid"];
		$money_judicial = $_POST["money_judicial"];
		$money_cashflow = $_POST["money_cashflow"];
		$money_cashflow = str_replace(',','.',$money_cashflow);
		$money_cashflow = str_replace(' ','',$money_cashflow);
		$money_judicial = $money_judicial + $money_cashflow;
		$obj->updpayment($id, $money_judicial);
	}

//Finish
	if(isset($_POST['finish']))
	{
		$id = $_POST["hiddenid"];
		$obj->updend($id);
	}



	
	// variables you can SELECT
	$datper = $obj->selper();
	$dateshowsue = $obj->selsuingdate();
	$fasecourthouse = $obj->selcourt1();
	$fasedecision = $obj->seldecision2();
	$faseappeal = $obj->selappeal3();
	$faseejecutar = $obj->selejecutar4();
	$faseends = $obj->selcloseissues5();
	
