@extends('backend.layouts.app')

@section('title', __('labels.backend.access.brand.management') . ' | ' . __('labels.backend.access.brand.edit'))

@section('breadcrumb-links')
    @include('backend.brands.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Brand, ['route' => ['admin.brands.update', $Brand], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.brands.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.brands.index', 'id' => $Brand->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection