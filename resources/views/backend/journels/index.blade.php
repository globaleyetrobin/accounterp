@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.journels.management'))

@section('breadcrumb-links')
@include('backend.journels.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.journels.management') }} <small class="text-muted">{{ __('labels.backend.access.journels.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

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
                                <th>{{ trans('labels.general.actions') }}</th>
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
		
	
        FTX.Journels.list.init();
		
    });
</script>
@stop