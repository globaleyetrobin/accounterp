@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.companies.management'))

@section('breadcrumb-links')
@include('backend.companies.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.companies.management') }} <small class="text-muted">{{ __('labels.backend.access.companies.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="company" class="table" data-ajax_url="{{ route("admin.companies.get") }}">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.companies.table.name') }}</th>
								 <th>{{ trans('labels.backend.access.companies.table.email') }}</th>
                                <th>{{ trans('labels.backend.access.companies.table.phoneno') }}</th>
                                <th>{{ trans('labels.backend.access.companies.table.status') }}</th>
                               
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
        FTX.Companies.list.init();
    });
</script>
@stop