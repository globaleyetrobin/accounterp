@extends('backend.layouts.app')

@section('title', __('labels.backend.access.accounttype.management') . ' | ' . __('labels.backend.access.accounttype.edit'))

@section('breadcrumb-links')
    @include('backend.accounttypes.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Accounttype, ['route' => ['admin.accounttypes.update', $Accounttype], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.accounttypes.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.accounttypes.index', 'id' => $Accounttype->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection