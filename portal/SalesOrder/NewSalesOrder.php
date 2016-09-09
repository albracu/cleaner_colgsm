<?php

global $client;

$customerid = $_SESSION['customer_id'];
$sessionid = $_SESSION['customer_sessionid'];

$params = Array(Array('id'=>"$customerid", 'sessionid'=>"$sessionid"));
$result = $client->call('get_combo_values', $params, $Server_Path, $Server_Path);



?>

<aside class="right-side">
	<form name="Save" method="post" action="index.php" role="form">
	   			<input type="hidden" name="module" value="SalesOrder">
	   			<input type="hidden" name="action" value="index">
	   			<input type="hidden" name="fun" value="save">
	<section class="content-header">
		<h1><?PHP echo getTranslatedString('LBL_NEW_SALESORDER');?></h1>
	</section>
	<section class="content">
		<div class="row">			
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-body">
					
						<div class="form-group">
							<label><font color="red">*</font><?PHP echo getTranslatedString('SUBJECT');?></label>								
							<input type="text" name="title" class = "form-control" placeholder="<?PHP echo getTranslatedString('SUBJECT');?>">
						</div>
						
						<div class="form-group">
							<label><?PHP echo getTranslatedString('LBL_DESCRIPTION');?></label>
							<textarea name="description" cols="55" rows="5" class="form-control"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">			
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-body">
						<div class="widget-box">
							<div class="widget-header">
								<h5 class="widget-title"><b>Productos</b></h5>
							</div>
							<div class="widget-main no-padding single-entity-view">
								<table class="table table-hover" id="tableProducts">
									<thead>
										<th colspan="2">Detalle del Elemento</th>
										<th colspan="1">Moneda:</th>
										<th colspan="2">Impuesto:</th>
									</thead>
									<tbody>
										<tr>
											<td colspan="2"><span class="redColor">*</span><b>Producto</b></td>
											<td><b>Cantidad</b></td>
											<td><b>Precio Unitario</b></td>
											<td><b>Total</b></td>
										</tr>
									</tbody>
									<tr id="html0" style="display:none">
										<td>
										<a href="#" onclick="deleteRow(this);">
										<i class="glyphicon glyphicon-trash"></i>
										</a>
										</td>
										<td>
											<select data-placeholder="Seleccione..." class="chosen-select" name="productid[]" style="min-width:200px;max-width:400px;" onchange="getPrice(this);">
											<option value="">Seleccione...</option>
											<?php
											$i = 0;
											foreach($result[0]['productid'] as $productid) {
												echo '<option value="'.$productid.'">'.$result[1]['productname'][$i].'</option>';
												$i++;
											}
											?>
											</select>
										</td>
										<td>
											<input type="text" name="qty[]" class = "form-control qty" placeholder="<?PHP echo getTranslatedString('Cantidad');?>" onblur="updatePrices();">
										</td>
										<td>
											<input type="text" name="unitprice[]" class = "form-control unitprice" value="0" readonly="readonly" style="text-align:right">
										</td>
										<td class="netprice" style="text-align:right;min-width:100px;">
											<span class="spannetprice">0.00</span>
										</td>
									</tr>
									<tr>
										<td>
										<a href="#" onclick="deleteRow(this);">
										<i class="glyphicon glyphicon-trash"></i>
										</a>
										</td>
										<td>
											<select data-placeholder="Seleccione..." class="chosen-select" name="productid[]" style="min-width:200px;max-width:400px;" onchange="getPrice(this);">
											<option value="">Seleccione...</option>
											<?php
											$i = 0;
											foreach($result[0]['productid'] as $productid) {
												echo '<option value="'.$productid.'">'.$result[1]['productname'][$i].'</option>';
												$i++;
											}
											?>
											</select>
										</td>
										<td>
											<input type="text" name="qty[]" class = "form-control qty" placeholder="<?PHP echo getTranslatedString('Cantidad');?>" onblur="updatePrices();">
										</td>
										<td>
											<input type="text" name="unitprice[]" class = "form-control unitprice pull-right" value="0" readonly="readonly" style="text-align:right">
										</td>
										<td class="netprice"  style="text-align:right;min-width:100px;">
											<span class="spannetprice">0.00</span>
										</td>
									</tr>
								</table>
								<table class="table table-bordered">
								<tbody><tr>
								<td width="83%">
									<div class="pull-right">
									<b>Total Elementos</b>
									</div>
								</td>
								<td>
									<span class="pull-right totalproducts" >
									0.00
									</span>
								</td>
								</tr>
								</tbody></table>
								 <button title="<?PHP echo getTranslatedString('ADD_PRODUCT');?>" accessKey="S" class="btn btn-warning" value="<?PHP echo getTranslatedString('ADD_PRODUCT');?>" onclick="onAddProduct();" type="button">
									<?PHP echo getTranslatedString('ADD_PRODUCT');?>
	                            </button>
							</div>
							<div class="box-footer">
	                            <button title="<?PHP echo getTranslatedString('LBL_SAVE_ALT');?>" accessKey="S" class="btn btn-primary" value="<?PHP echo getTranslatedString('LBL_SAVE');?>" onclick="return formvalidate(this.form)" type="submit" name="button">
	                            	Submit
	                            </button>
	                            <button title="<?PHP echo getTranslatedString('LBL_CANCEL_ALT');?>" accessKey="X" class="btn btn-primary" onclick="window.history.back()" type="button" name="button"  value="<?PHP echo getTranslatedString('LBL_CANCEL');?>">
	                            	Cancel
	                           	</button>
							</div>
						</div>
	   				</div>
	   			</div>
	   		</div>
		</form>
		</div>
	</section>
</aside>
<script>
function formvalidate(form)
{
	if(trim(form.title.value) == '')
	{
		alert("Ticket Title is empty");
		return false;
	}
	return true;
}
function trim(s) 
{
	while (s.substring(0,1) == " ")
	{
		s = s.substring(1, s.length);
	}
	while (s.substring(s.length-1, s.length) == ' ')
	{
		s = s.substring(0,s.length-1);
	}

	return s;
}

</script>
<?php

?>
