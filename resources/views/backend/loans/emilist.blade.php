@extends('backend.layouts.salesreturn')

@section('title', app_name() . ' | ' . __('labels.backend.access.employees.management'))

@section('breadcrumb-links')
@include('backend.employees.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                   Paid EMI  List
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
				
				    <table id="employee_salary" class="table">
                        <thead>
                            <tr>
                                <th>
								 Amount 
								 </th>
								 <th>
								 Emi Date 
								 </th>
								  <th>
								 Paid Date
								 </th>
							</tr>
						  </thead>
                        <tbody>
						  <tr>
						  <td> 1000 </td>
						  <td> 17-05-2021 </td>
						  <td> 17-05-2021 </td>
						  </tr>
						  
						   </tbody>
                    </table>
					
					
					
                    <table id="employee_salary" class="table" style="margin-top:70px">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.loan.table.name') }} : <?php echo $loans->name?></th>
								 
								 <th>Employee Name : <?php echo $loans->employee_id?></th>
								 <th>
								 
								 Emi Date : 
								 
								 	<?php 
									//print_r($loans->startdate);
									
							
							   $emi_date=$loans->stratdate;
							//echo $d=date('d-m-y',strtotime($emi_date));
							echo $emi_date=date('Y-m-d');
							
							
							?>
								 </th>
                                
                             
                            </tr>
							
							<tr>
							
							 <td>
							 
							 Loan Amount : <?php echo $loans->amount?>
							 
							 </td>
							 
							 <td>
							 
							 Durations : <?php echo $loans->duration?>
							 
							 </td>
							 
							 <td>
							 
							 Emi : <?php echo $loans->emi?>
							 
						
							 
							 </td>
                                
                             
                            </tr>
							
							<tr>
							
							 <td>
							 
							 Total  Paid : 1000
							 
							 </td>
							 
							 <td>
							 
							 Pending : 9000
							 
							 </td>
							 
							 <td>
							 
						
						
							 
							 </td>
                                
                             
                            </tr>
							
							
                        </thead>
                        <tbody>
						   </tbody>
                    </table>
					
					
					
						
							
							
				  
                     
                </div>
            </div>
            <!--col-->
        </div>
        <!--row-->

    </div>
    <!--card-body-->
</div>
<!--card-->
@endsection

@section('pagescript')
<script>
   
    //deduction_count  allowance_count basic_salary total_allowance total_deduction net_salary
   $(document).ready(function(){
	   
	   function cal_salary_total()
	   {
		  var allowance_count=  $('#allowance_count').val();
		  
		  
		  var deduction_count=  $('#deduction_count').val();
		  
		  
		  
		  var  final_amount = 0;
          var allowance_amount = 0;
		  
		  var deduction_amount = 0;
		  
		  
		  var basic_salary=  $('#basic_salary').val() || 0;
		  
		   var allowance = 0;
          for(j=1; j<=allowance_count; j++)
          {

            allowance = $('#allowance'+j).val() || 0;
			
		
            allowance_amount = parseFloat(allowance_amount) + parseFloat(allowance);
			  
			
           }
		   var deduction = 0;
		   for(k=1; k<=deduction_count; k++)
          {

          
           
            deduction = $('#deduction'+k).val() || 0;
			
            deduction_amount = parseFloat(deduction_amount) + parseFloat(deduction);
			  
			
           }
		   
		   $('#total_allowance').val(allowance_amount);
		   
		   $('#total_deduction').val(deduction_amount);
		   
		   final_amount = parseFloat(basic_salary) + parseFloat(allowance_amount)- parseFloat(deduction_amount);
		   
		   $('#net_salary').val(final_amount);
	   }
	   
	   
	     $(document).on('blur', '#basic_salary', function(){
			
          cal_salary_total();
        });
		
		 $(document).on('blur', '.allowance', function(){
			
          cal_salary_total();
        });
		
		 $(document).on('blur', '.deduction', function(){
			
          cal_salary_total();
        });







      });
</script>
@stop