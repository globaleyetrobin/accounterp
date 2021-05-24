@extends('backend.layouts.salesreturn')

@section('title', __('labels.backend.access.sales.management') . ' | ' . __('labels.backend.access.sales.create'))

@section('breadcrumb-links')
    @include('backend.sales.includes.breadcrumb-links')
@endsection

@section('content')
  
  
    <div class="container">
		<div class="row">
		<div class="col-md-12 printbox">
             <button class="btn btn-danger hidden-print" onclick="invoice_print('invoice_print')"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
	    </div>
	   </div>
    </div>

	
	<section class="back" id="invoice_print">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="invoice-wrapper">
						<div class="invoice-top">
							<div class="row">
								<div class="col-sm-6">
									<div class="invoice-top-left">
									
									<div class="logo-wrapper">
											<img  src="https://www.globaleyet.com/images/logo.png" class="img-responsive pull-left logo print_logo" />
										</div>
										
										<h1 class="invoice_heading">INVOICE</h1>
										
									</div>
								</div>
								<div class="col-sm-6">
									<div class="invoice-top-right">
										<h2>Global Eyet Solutions</h2>
										<h3>VVMRA- 28, Veeralam, Near KSRTC Stand, Attinga</h3>
										<h5>Thiruvananthapuram-695101</h5>
										<h5>+91 470 - 2629202</h5>
										<h5>info@globaleyet.com</h5>

										
									</div>
								</div>
							</div>
						</div>
						
						<div class="front-invoice-bottom">
							<div class="row">
								
								<div class="col-xs-12 col-sm-12 col-md-12">
									<table class="table borderless custom-table" style="border-bottom:solid 1px #ccc">
										<tbody>
											<tr >
												<td width="50%">
												<h5>BILL To:</h5>
												<p class="billdetails"><?php echo $purchases->supplier_name?></p>
												<p class="billdetails"><?php echo $purchases->supplier_address?> </p>
												<p class="billdetails"><?php echo $purchases->supplier_email?>  </p>
												<p class="billdetails"><?php echo $purchases->supplier_phoneno?> </p>
												
												</td>
												<td width="50%" align="right">
												<h5>INVOICE#:</h5>
												<p class="billdetails"><?php echo $purchases->purchase_no?></p>
												<p class="billdetails font12px"><strong>DATE:</strong></p>
												<p class="billdetails"><?php echo date('d/m/Y',strtotime($purchases->purchase_date))?></p>
												<p class="billdetails font12px"><strong>INVOICE DUE DATE:</strong></p>
												<p class="billdetails"><?php echo date('d/m/Y',strtotime($purchases->purchase_date))?></p>
												
												</td>
											</tr>
											
											<tr >
											<td> </td>
											<td> </td>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
							
							
								<div class="row">
								<div class="col-md-12">
									<div class="task-table-wrapper">
										<table class="table">
											<thead>
												<tr>
													<th>Item</th>
													<th>Quantity</th>
													<th>Price</th>
													<th>Actual Price</th>
													<th>Discount</th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
											
											<?php
											if(isset($purchaseitems))
					                         {
					                            foreach($purchaseitems as $items)
		                                        {
												?>
												<tr>
													<td >
														<?php echo $items->product_name?>
														
													</td>
													<td><?php echo $items->purchaseitems_quantity?></td>
													<td>₹<?php echo $items->purchaseitems_price?></td>
													<td>₹<?php echo $items->purchaseitems_actual_amount?></td>
													<td>
													<?php
													 if($items->purchaseitems_discount_amount !='')
													 {
                                                      ?> 														 
													   ₹
													   <?php
													   echo $items->purchaseitems_discount_amount;
													 }
													 else
														 
														 {
															 echo "-";
														 }
													   ?>
													   
													</td>
													<td>₹<?php echo $items->purchaseitems_final_amount?></td>
												</tr>
											
											<?php
												}
											}
                                            ?>											
											</tbody>
										</table>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-md-12">
									<div class="invoice-bottom-total">
										<div class="col-sm-8 no-padding float-left">
											<div class="sub-total-box">
												<h6>SUBTOTAL</h6>
												<h5>₹<?php echo $purchases->purchase_amount?></h5>
											</div>
											<div class="add-box">
												<h3>-</h3>
											</div>
											<div class="tax-box">
												<h6>DISCOUNT</h6>
												<h5>₹
												<?php 
												if($purchases->purchase_discountamount !='')
												{
												echo $purchases->purchase_discountamount;
												}
												else
												{
													echo "0";
                                                }													
												?>
												</h5>
											</div>
											
											<div class="add-box">
												<h3>+</h3>
											</div>
											<div class="tax-box">
												<h6>TAXES</h6>
												<h5>₹<?php echo $purchases->purchase_taxamount?></h5>
											</div>
											
										</div>
										<div class="col-sm-4 no-padding float-left">
											<div class="total-box">
												<h6>TOTAL</h6>
												<h3>₹<?php echo $purchases->purchase_netamount?></h3>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-xs-12">
									<hr class="divider">
								</div>
								
								
							</div>
							<div class="bottom-bar"></div>
						
						
						
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</section>
	
	

@endsection

<script>
function invoice_print(invoice_print) {
   
	 var printContents = document.getElementById(invoice_print).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
	 
}
</script>


<style>
.printbox
{
	margin-top:15px;
	
}
.printbox button
{
	float:right;
}

.font12px
{
	font-size:12px ! important;
}

.print_logo
{
	margin-top: 2%;
}
.invoice_heading
{
	margin-top:2%;
	margin-left:3%;
}

.billdetails
{
	margin-bottom: 2px ! important;
}


.front-invoice-wrapper{
	margin: 20px auto;
	
	box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
.front-invoice-top{
	background-color: #323149;
	padding: 40px 60px;
}
.front-invoice-top-left h2, .front-invoice-top-right h2{
	color: #ffffff;
	font-size: 22px;
	margin-bottom: 4px;
}
.front-invoice-top-left h3, .front-invoice-top-right h3{
	color: rgba(255,255,255,0.7);
	font-size: 15px;
	font-weight: 400;
	margin-top: 0;
	margin-bottom: 5px;
}
.front-invoice-top-left h5, .front-invoice-top-right h5{
	color: rgba(255,255,255,0.7);
	font-size: 14px;
	font-weight: 400;
	margin-top: 0;
}

.front-invoice-top-right{
	text-align: right;
}

.service-name{
	color: #ffffff;
	font-size: 22px;
	font-weight: 500;
	margin-top: 60px;
}
.date{
	color: rgba(255,255,255,0.8);
	font-size: 14px;
}

.front-invoice-bottom{
	background-color: #ffffff;
	padding: 40px 60px;
	position: relative;
}
.borderless td, .borderless th {
    border: none !important;
}
.custom-table td{
	font-size: 13px;
    padding: 6px !important;
    font-weight: 500;
}
.description{
	line-height: 1.6;
}
.specs{
	margin-top: 30px;
	font-size: 14px;
}

.back{}
.invoice-wrapper{
	margin: 20px auto;
	
	box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
.invoice-top{
	/*background: linear-gradient(135deg, #fafafa, #eeeeee);*/
	
	/*background:#0d538ef7;*/
	
	background:#323149;
	
	padding: 20px 60px 20px;
}
.invoice-top-left{
	/*margin-top: 60px;*/
	color:#FFF;
}
.invoice-top-left h2, .invoice-top-right h2{	
	font-size: 22px;
	margin-bottom: 4px;
}
.invoice-top-left h3, .invoice-top-right h3{
	font-size: 15px;
	font-weight: 400;
	margin-top: 0;
	margin-bottom: 5px;
}
.invoice-top-left h5, .invoice-top-right h5{
	font-size: 14px;
	font-weight: 400;
	margin-top: 0;
}

.invoice-top-left h4{
	margin-top: 40px;
	font-size: 22px;
}
.invoice-top-left h6{
	font-size: 14px;
    font-weight: 400;
}

.invoice-top-right
{
	color: #ffffff;
}

.invoice-top-right h2, .invoice-top-right h3, .invoice-top-right h5{
	text-align: right;
}

.logo-wrapper{ overflow: auto; }


.invoice-bottom{
	background-color: #ffffff;
	padding: 40px 60px;
	position: relative;
}

.task-table-wrapper{
	/*margin-top: -14%;*/
}
.task-table-wrapper .table > thead > tr> th{
	border: none;
	padding-left: 0;
	/*padding-bottom: 30px;*/
}
.task-table-wrapper .table> tbody> tr:first-child > td{
	border-top: 0;
}
.task-table-wrapper .table> tbody> tr> td{
	padding-top: 25px;
	padding-left: 0;
}
.task-table-wrapper .table> tbody> tr> td> h4{
	margin-top: 0;
}
.task-table-wrapper .table tbody .desc{
	width:60%;
}
.desc h3{
	margin-top: 0;
	font-size: 20px;
}
.desc h5{
	font-weight: 400;
	line-height: 1.4;
	font-size: 14px;
}
.invoice-bottom-total{
	background-color: #ccc;
	overflow: auto;
	margin-top: 50px;
}
.invoice-bottom-total .no-padding{
	padding-left: 0;
	padding-right: 0;
}
.invoice-bottom-total .tax-box, .invoice-bottom-total .add-box, .invoice-bottom-total .sub-total-box{
	display: inline-block;
	margin-right: 10px;
	padding: 10px;
}
.invoice-bottom-total .total-box{
	background-color: #323149;
	padding: 10px;
}
.invoice-bottom-total .total-box h6{
	margin-top: 0;
	color: #ffffff;
	text-align: right;
}
.invoice-bottom-total .total-box h3{
	margin-bottom: 0;
	color: #ffffff;
	text-align: right;
}



.bottom-bar{
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	height: 26px;
	background-color: #323149;
}
</style>