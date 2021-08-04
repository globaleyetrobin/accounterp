@extends('backend.layouts.app')

@section('title','Ledger')





@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Ledger <small class="text-muted">Ledger List</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->
		
		<table class="table">
		  <tr>
		  <td>
		    <label> <strong>Account Type </strong></label>
			<select class="form-control assets box-size" data-placeholder="Account Type" id="asset_type" name="asset_type"><option value="" selected="selected">Please Select</option><option value="1">Assets</option><option value="2">Liability</option><option value="3">eyet global</option><option value="4">Income</option></select>
		  </td>
		  
		   <td>
		    <label><strong>Category </strong></label>
			<select class="form-control assets box-size" data-placeholder="Account Type" id="asset_type" name="asset_type"><option value="" selected="selected">Please Select</option><option value="1">Assets</option><option value="2">Liability</option><option value="3">eyet global</option><option value="4">Income</option></select>
		  </td>
		  
		   <td>
		    <label><strong>Sub Category </strong></label>
			<select class="form-control assets box-size" data-placeholder="Account Type" id="asset_type" name="asset_type"><option value="" selected="selected">Please Select</option><option value="1">Assets</option><option value="2">Liability</option><option value="3">eyet global</option><option value="4">Income</option></select>
		  </td>
		  </tr>
		  <tr>
		  <td>
		    <label><strong>Start Date </strong></label>
			<input class="form-control" placeholder=" STart Date " required="required" name="date" type="date" id="name">
		  </td>
		  
		  		  <td>
		    <label><strong>End Date </strong></label>
			<input class="form-control"  placeholder=" STart Date " required="required" name="date" type="date" id="name">
		  </td>


         <td> <input  style="margin-top:30px; padding:10px 40px" class="btn btn-success btn-sm pull-left" type="submit" value="Submit"> </td>
		  
		  
		  </tr>
		</table>

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="expense" class="table" data-ajax_url="{{ route("admin.expenses.get") }}">
                        <thead>
                            <tr>
                                <th>Ledger Name</th>
								
                                <th>{{ trans('labels.backend.access.expense.table.amount') }}</th>
								
                                <th>{{ trans('labels.backend.access.expense.table.category') }}</th>
                                <th>{{ trans('labels.backend.access.expense.table.date') }}</th>
                           
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
    FTX.Utils.documentReady(function() {
		
	
        FTX.Expenses.list.init();
		
    });
</script>
@stop