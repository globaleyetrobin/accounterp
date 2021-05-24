@extends('backend.layouts.app')

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
                    {{ __('labels.backend.access.employees.management') }} <small class="text-muted">{{ __('labels.backend.access.employees.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="employee" class="table" data-ajax_url="{{ route("admin.employees.get") }}">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.employees.table.name') }}</th>
								 <th>{{ trans('labels.backend.access.employees.table.companyname') }}</th>
								 <th>{{ trans('labels.backend.access.employees.table.email') }}</th>
                                <th>{{ trans('labels.backend.access.employees.table.phoneno') }}</th>
                                <th>{{ trans('labels.backend.access.employees.table.status') }}</th>
                               
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
        FTX.Employees.list.init();
    });
</script>
@stop