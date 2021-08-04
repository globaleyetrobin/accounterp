<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.journels.management') }}
                <small class="text-muted">{{ __('labels.backend.access.journels.create') }}</small>
            </h4>
        </div><!--col-->
    </div><!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('name', trans('validation.attributes.backend.access.journels.name'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.journels.name'), 'required' => 'required']) }}
                </div><!--col-->
            </div><!--form-group-->
			

             <div class="form-group row"  >
                {{ Form::label('journel_type', trans('validation.attributes.backend.access.journels.type'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::select('journel_type', $accounttype, null, ['class' => 'form-control journels box-size', 'data-placeholder' => trans('validation.attributes.backend.access.journels.type')]) }}
                </div>
                <!--col-->
            </div>
			
            <div class="form-group row"  >
                {{ Form::label('parent_id', trans('Category'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::select('journel_category', $catlist, null, ['class' => 'form-control journels box-size', 'data-placeholder' => trans('validation.attributes.backend.access.journels.journel_category')]) }}
                </div>
                <!--col-->
            </div>
            <!--form-group-->


               <div class="form-group row"  >
                {{ Form::label('parent_id', trans('Sub Category'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::select('journel_subcategory', $subcatlist, null, ['class' => 'form-control journels box-size', 'data-placeholder' => trans('validation.attributes.backend.access.journels.journel_category')]) }}
                </div>
                <!--col-->
            </div>


               <div class="form-group row"  >
                {{ Form::label('parent_id', trans('Credit/Debit'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::select('journel_entry', $creditdebits, null, ['class' => 'form-control journels box-size', 'data-placeholder' => trans('validation.attributes.backend.access.journels.journel_category')]) }}
                </div>
                <!--col-->
            </div>



			
              <div class="form-group row">
                {{ Form::label('name', trans('validation.attributes.backend.access.journels.amount'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('amount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.journels.amount'), 'required' => 'required']) }}
                </div><!--col-->
            </div><!--form-group-->
			

                <div class="form-group row">
                {{ Form::label('startdate', trans('validation.attributes.backend.access.journels.date'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::date('date', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.journels.date'), 'required' => 'required']) }}
                </div>
            </div> 
            
            <!--form-group-->
			
			
		<div class="form-group row">
                {{ Form::label('remarks', trans('validation.attributes.backend.access.journels.remarks'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::textarea('remarks', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.journels.remarks'), 'required' => 'required']) }}
                </div><!--col-->
            </div><!--form-group-->

            <div class="form-group row">
                {{ Form::label('status', trans('validation.attributes.backend.access.journels.status'), ['class' => 'col-md-2 from-control-label required']) }}
                
				@php
                $status = isset($Journel) ? '' : 'checked'
                @endphp
				
				
                <div class="col-md-10">
				
                    
						
						<div class="checkbox d-flex align-items-center">
                        <label class="switch switch-label switch-pill switch-primary mr-2" for="role-1"><input class="switch-input" type="checkbox" name="status" id="role-1" value="1" 
                         						 
						  {{ (isset($Journel->status) && $Journel->status === true) ? "checked" : $status }}
					
						 ><span class="switch-slider" data-checked="on" data-unchecked="off"></span></label>
                    </div>


				</div>
                </div><!--col-->
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
</div><!--card-body-->