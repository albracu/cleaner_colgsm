<?php
	
	global $result;
	global $client;
	
	$onlymine=$_REQUEST['onlymine'];
	if($onlymine == 'Mine')
		$onlymine = 'true';
	$onlymine = 'false';
	if($onlymine == 'true') {
	    $mine_selected = 'selected';
	    $all_selected = '';
	} else {
	    $mine_selected = '';
	    $all_selected = 'selected';
	}
	
	$params = array();
	echo '<aside class="right-side">';
	echo '<section class="content-header" style="box-shadow:none;">
			<div class="row-pad">';
	echo '<div class="col-sm-9"><b style="font-size:20px;">'.getTranslatedString("LBL_SALESORDER_INFORMATION").'</b></div>';    
	$allow_all = $client->call('show_all',array('module'=>'SalesOrder'),$Server_Path, $Server_Path);
	if($allow_all == 'true'){
	    	
	    /*echo '<div class="col-sm-1 search-form"><div class="btn-group">
	    	<button type="button" class="btn btn-default dropdown-toggle salesorder_owner_btn" data-toggle="dropdown">
	    		'.getTranslatedString('SHOW').'<span class="caret"></span> 
	    	</button>
	    	<ul class="dropdown-menu salesorder_owner">
	 		<li><a href="#">'.getTranslatedString('MINE').'</a></li>
			<li><a herf="#">'.getTranslatedString('ALL').'</a></li>
			</ul></div></div>';*/
	}
	
	echo '
			<div class="col-sm-2 search-form">
				<div class="input-group-btn">
					<input class="btn btn-primary" name="newticket" type="submit" value="'.getTranslatedString('LBL_NEW_SALESORDER').'" onclick="this.form.module.value=\'SalesOrder\';this.form.action.value=\'index\';this.form.fun.value=\'new\'">&nbsp;&nbsp;&nbsp;
				</div>
			
			</div>
		</div>
		</section>';
	      	
	echo '<section class="content"><div class="row">';
	echo '<div class="col-xs-12">';
	echo '<div class="box-body table-responsive no-padding">';
	    					
	if ($customerid != '' )
	{
		$block = "SalesOrder";
		$params = array('id' => "$customerid", 'block'=>"$block",'sessionid'=>$sessionid,'onlymine'=>$onlymine);
		$result = $client->call('get_list_values', $params, $Server_Path, $Server_Path);
		echo getblock_fieldlistview($result,$block);
	}
	

?>

