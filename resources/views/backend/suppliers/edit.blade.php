@extends('backend.layouts.app')

@section('title', __('labels.backend.access.suppliers.management') . ' | ' . __('labels.backend.access.suppliers.edit'))

@section('breadcrumb-links')
    @include('backend.suppliers.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Supplier, ['route' => ['admin.suppliers.update', $Supplier], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.suppliers.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.suppliers.index', 'id' => $Supplier->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection