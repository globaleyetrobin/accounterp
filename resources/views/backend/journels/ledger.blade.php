@extends('backend.layouts.salesreturn')

@section('title', app_name() . ' | ' . __('Ledger'))


@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('Ledger') }} <small class="text-muted">{{ __('Ledger List') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->


     
  

    <div class="row mt-4 mb-4">
        <div class="row">
        
            

          
                <div class="col-md-3 mb-4">
                    {{ Form::select('journel_type', $accounttype, null, ['class' => 'form-control journels box-size', 'data-placeholder' => trans('validation.attributes.backend.access.journels.type')]) }}
                </div>
             
                <div class="col-md-3">
                    {{ Form::select('journel_category', $catlist, null, ['class' => 'form-control journels box-size', 'data-placeholder' => trans('validation.attributes.backend.access.journels.journel_category')]) }}
                </div>
             



                <div class="col-md-3">
                    {{ Form::select('journel_subcategory', $subcatlist, null, ['class' => 'form-control journels box-size', 'data-placeholder' => trans('validation.attributes.backend.access.journels.journel_category')]) }}
                </div>
                


                <div class="col-md-3">
                    {{ Form::select('journel_entry', $creditdebits, null, ['class' => 'form-control journels box-size', 'data-placeholder' => trans('validation.attributes.backend.access.journels.journel_category')]) }}
                </div>
                <!--col-->
           

            
                
                <div class="col-md-3">
                    {{ Form::text('amount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.journels.amount'), 'required' => 'required']) }}
                </div><!--col-->
           
            
                
                <div class="col-md-3">
                    {{ Form::date('date', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.journels.date'), 'required' => 'required']) }}
                </div>

                <div class="col-md-3 ">
                 

                  <button type="button" class="btn btn-success">Submit</button>


                 </div>   
            
            
            <!--form-group-->
            
            
        

         
          
    </div><!--row-->
</div><!--card-body-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="journel" class="table" data-ajax_url="{{ route("admin.journels.get") }}">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.journels.table.name') }}</th>
								
                                <th>{{ trans('labels.backend.access.journels.table.amount') }}</th>
								
                                <th>Date</th>
                                <th>A/c Type</th>

                                <th>Category</th>
                                <th>Sub Category</th>

                                <th>Credit/Debit</th>
                                
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
		
	
        FTX.Journels.list.init1();
		
    });
</script>
@stop