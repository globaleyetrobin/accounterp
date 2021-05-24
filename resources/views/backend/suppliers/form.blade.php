<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.suppliers.management') }}
                <small class="text-muted">{{ __('labels.backend.access.suppliers.create') }}</small>
            </h4>
        </div><!--col-->
    </div><!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('name', trans('validation.attributes.backend.access.suppliers.name'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.suppliers.name'), 'required' => 'required']) }}
                </div><!--col-->
            </div><!--form-group-->
			
			
			<div class="form-group row">
                {{ Form::label('company_id', trans('validation.attributes.backend.access.suppliers.companyname'), ['class' => 'col-md-2 from-control-label required']) }}

                <div class="col-md-10">
                    {{ Form::select('company_id', $companies, null, ['class' => 'form-control categories box-size', 'data-placeholder' => trans('validation.attributes.backend.access.suppliers.company_id'), 'required' => 'required']) }}
                </div>
                <!--col-->
            </div>
            <!--form-group-->
			
			
			
			<div class="form-group row">
                {{ Form::label('name', trans('validation.attributes.backend.access.suppliers.email'), ['class' => 'col-md-2 from-control-label ']) }}
                
                <div class="col-md-10">
                    {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.suppliers.email')]) }}
                </div><!--col-->
            </div><!--form-group-->
			
			
			<div class="form-group row">
                {{ Form::label('phoneno', trans('validation.attributes.backend.access.suppliers.phoneno'), ['class' => 'col-md-2 from-control-label ']) }}
                
                <div class="col-md-10">
                    {{ Form::text('phoneno', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.suppliers.phoneno')]) }}
                </div><!--col-->
            </div><!--form-group-->
			
			
			<div class="form-group row">
                {{ Form::label('website', trans('validation.attributes.backend.access.suppliers.website'), ['class' => 'col-md-2 from-control-label ']) }}
                
                <div class="col-md-10">
                    {{ Form::text('website', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.suppliers.website')]) }}
                </div><!--col-->
            </div><!--form-group-->
			
			<div class="form-group row">
                {{ Form::label('address', trans('validation.attributes.backend.access.suppliers.address'), ['class' => 'col-md-2 from-control-label ']) }}
                
                <div class="col-md-10">
                    {{ Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.suppliers.address')]) }}
                </div><!--col-->
            </div><!--form-group-->
			
			

            <div class="form-group row">
                {{ Form::label('status', trans('validation.attributes.backend.access.suppliers.status'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    <div class="checkbox d-flex align-items-center">
                        <label class="switch switch-label switch-pill switch-primary mr-2" for="role-1"><input class="switch-input" type="checkbox" name="status" id="role-1" value="1" 
                        {{ (!isset($Supplier->status) ||(isset($Supplier->status) && $Supplier->status === 1)) ? "checked" : "" }}><span class="switch-slider" data-checked="on" data-unchecked="off"></span></label>
                    </div>
                </div><!--col-->
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
</div><!--card-body-->