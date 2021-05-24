@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.purchasereturns.management'))

@section('breadcrumb-links')
@include('backend.purchasereturns.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.purchasereturns.management') }} <small class="text-muted">{{ __('labels.backend.access.purchasereturns.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="purchasereturns-table" class="table" data-ajax_url="{{ route("admin.purchasereturns.get") }}">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.purchasereturns.table.title') }}</th>
                                <th>{{ trans('labels.backend.access.purchasereturns.table.code') }}</th>
                                <th>{{ trans('labels.backend.access.purchasereturns.table.status') }}</th>
                                <th>{{ trans('labels.backend.access.purchasereturns.table.createdby') }}</th>
                                <th>{{ trans('labels.backend.access.purchasereturns.table.createdat') }}</th>
                                <th>{{ trans('labels.general.actions') }}</th>
                            </tr>
                        </thead>

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
		
		
		
        FTX.Purchasereturns.list.init();
		
	
    });
</script>
@stop