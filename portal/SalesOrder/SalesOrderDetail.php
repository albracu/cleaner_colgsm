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

 /* Funcion que formatea la salida de los comentarios */ 
 function escribeComentario($commentresult,$prin = true) {
	
	if (count($commentresult) > 0)
		$buffer = '
		<div class="box-comment">
				   
		<div class="comment-text">
			<img class="img-circle img-sm" src="images/DefaultUserIcon.png">
			<span class="username">
				'.$commentresult['owner'].'
				<span class="text-muted pull-right" style="padding-right:10px">'.$commentresult['createdtime'].'</span>
			  </span>'.$commentresult['comments'].'
		</div>';
		
		if (count($commentresult['relatedcomments']) > 0) {
			$buffer.= '<div class="box-comments" style="padding: 20px;background-color: #fff;">';
			foreach($commentresult['relatedcomments'] as $comment)
				$buffer.= escribeComentario($comment,$false);
			$buffer.= '</div>';
		}
		$buffer.= '</div>';
		
		if ($prin)
			$buffer.= '<br/>';
		
	return $buffer;
}


global $result;
global $client;
global $Server_Path;
echo '<!--Get Invoice Details Information -->';
$customerid = $_SESSION['customer_id'];
$sessionid = $_SESSION['customer_sessionid'];
if($id != '')
{

	//Get the Basic Information
	$block = "SalesOrder";
	$params = array('id' => "$id", 'block'=>"$block", 'contactid'=>"$customerid",'sessionid'=>"$sessionid");
	$result = $client->call('get_salesorder_detail', $params, $Server_Path, $Server_Path);
	
	// Check for Authorization
	if (count($result) == 1 && $result[0] == "#NOT AUTHORIZED#") {
		echo '<aside class="right-side">';
		echo '<section class="content-header" style="box-shadow:none;"><div class="alert"><b>'.getTranslatedString('LBL_NOT_AUTHORISED').'</b></div></section></aside>';
		include("footer.html");
		die();
	}
	$invinfo = $result[0][$block];
	echo '<aside class="right-side">';
	echo '<section class="content-header" style="box-shadow:none;">
			<div class="row-pad"><div class="col-sm-10">
				<input class="btn btn-primary btn-flat" type="button" value="'.getTranslatedString('LBL_BACK_BUTTON').'" onclick="window.history.back();"/>
			</div></div>
		 </section>';
	echo getblock_fieldlist($invinfo);
	
	echo '<tr><td colspan ="4"><table width="100%">';
	echo '</table></td></tr>';	
	echo '</table></td></tr></table></td></tr></table>';
	echo '<!-- --End--  -->
	</div>';
	if (isset($result[0][$module][0]['relatedproducts'])) {
		echo getblock_products($result[0][$module][0]['relatedproducts']);
	}
	
	$params = Array(Array('id'=>"$customerid", 'sessionid'=>"$sessionid", 'salesorderid' => "$id",));			
	$commentresult = $client->call('get_so_comments', $params, $Server_Path, $Server_Path);
	
	$socount = count($result);
	$commentscount = count($commentresult);
	
	if($commentscount >= 1 && is_array($commentresult)){
		$list .=  '<div class="widget-box">
					<div class = "widget-header">
						<h5 class = "widget-title"><b>'.getTranslatedString('LBL_TICKET_COMMENTS').'</b></h5>
					</div>
					<div class = "widget-body">
						<div class="widget-main no-padding single-entity-view">
							<div style="width:auto;padding:12px;display:block;" id="tblLeadInformation">';
	
	
		
		$list .= '<div class="box-footer box-comments" style="width:80%">';
				for($j=0;$j<$commentscount;$j++){
					
					$list .= escribeComentario($commentresult[$j]);
				}
				$list .= '</div>';
				
		echo $list;
	}
}
?>