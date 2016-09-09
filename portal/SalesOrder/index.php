<?php
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
*
 ********************************************************************************/
require_once("include/utils/utils.php");

@include("../PortalConfig.php");
if(!isset($_SESSION['customer_id']) || $_SESSION['customer_id'] == '')
{
	@header("Location: $Authenticate_Path/login.php");
	exit;
}
	global $result;
	$customerid = $_SESSION['customer_id'];
	$sessionid = $_SESSION['customer_sessionid'];
	
	if ($_REQUEST['ajax'] == 'true') {
		if ($_REQUEST['action'] == 'getPrice') {
			global $client;
			$productid = $_REQUEST['productid'];
			$customerid = $_SESSION['customer_id'];
			$sessionid = $_SESSION['customer_sessionid'];

			$params = array(array('productid' => "$productid", 'id'=>$customerid,'sessionid'=>"$sessionid"));
			$result = $client->call('get_product_price', $params, $Server_Path, $Server_Path);
			
			$output['price'] = $result[0];
			echo json_encode($output);
			
		}
		
	} else {
		include("index.html");
	
		if($_REQUEST['fun'] == 'new') {
			include("NewSalesOrder.php");
		}elseif($_REQUEST['fun'] == 'save') {
			
			$customerid = $_SESSION['customer_id'];
			$sessionid = $_SESSION['customer_sessionid'];

			$i = 0;
			foreach($_REQUEST['qty'] as $qty) {
				if ($_REQUEST['productid'][$i] != '') {
					$products[] = array('productid'=>$_REQUEST['productid'][$i],
										'quantity'=>$_REQUEST['qty'][$i],
										'listprice'=>$_REQUEST['unitprice'][$i],
										'discount_percent'=>0,
										'discount_amount'=>0,
										'comment'=>'',
										'description'=>'',
										'incrementondel'=>'',
										'tax1'=>0,
										'tax2'=>0,
										'tax3'=>0,
										);
				}
				$i++;
			}
			$fields = array('subject'=>$_REQUEST['title'],
							'description'=>$_REQUEST['description'],
							'products'=>$products);
			$params = array(array('id'=>$customerid,'sessionid'=>"$sessionid", 'fields'=>$fields));
			
			$result = $client->call('create_salesorder', $params, $Server_Path, $Server_Path);
			$_REQUEST['id'] = $result[0];
			$id = $_REQUEST['id'];
			include("SalesOrderDetail.php");
		}elseif($_REQUEST['id'] != '') {
			$id=$_REQUEST['id'];
			$status =$_REQUEST['status'];
			$block = "SalesOrder";
			if($status != true)
			{
				$params = array('id' => "$id", 'block'=>"$block", 'contactid'=>"$customerid",'sessionid'=>"$sessionid");
				$filecontent = $client->call('get_pdf', $params, $Server_Path, $Server_Path);
				if($filecontent != 'failure')
				{
					$filename="$Server_Path/test/product/".portal_purify($id)."_Invoice.pdf";
					header("Content-type: text/pdf");
					header("Cache-Control: private");
					header("Content-Disposition: attachment; filename=$filename");
					header("Content-Description: PHP Generated Data");
					echo base64_decode($filecontent);

					exit;

				}
				else
				{
					echo getTranslatedString('LBL_PDF_CANNOT_GENERATE');//We have to show the error message like "PDF output cannot be generated. Please contact admin"
				}
			}
			else
			{
			include("SalesOrderDetail.php");
			}	

		}
		else
		{
			include("SalesOrderList.php");
			echo '</div></div></div></section></form>';
		}
	}

?>

	