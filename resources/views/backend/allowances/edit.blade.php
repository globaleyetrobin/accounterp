@extends('backend.layouts.app')

@section('title', __('labels.backend.access.allowance.management') . ' | ' . __('labels.backend.access.allowance.edit'))

@section('breadcrumb-links')
    @include('backend.allowances.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Allowance, ['route' => ['admin.allowances.update', $Allowance], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.allowances.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.allowances.index', 'id' => $Allowance->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection