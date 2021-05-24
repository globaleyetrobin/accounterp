@extends('backend.layouts.app')

@section('title', __('labels.backend.access.companies.management') . ' | ' . __('labels.backend.access.companies.edit'))

@section('breadcrumb-links')
    @include('backend.companies.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Company, ['route' => ['admin.companies.update', $Company], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.companies.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.companies.index', 'id' => $Company->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection