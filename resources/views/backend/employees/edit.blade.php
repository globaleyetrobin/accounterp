@extends('backend.layouts.app')

@section('title', __('labels.backend.access.employees.management') . ' | ' . __('labels.backend.access.employees.edit'))

@section('breadcrumb-links')
    @include('backend.employees.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Employee, ['route' => ['admin.employees.update', $Employee], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.employees.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.employees.index', 'id' => $Employee->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection