@extends('backend.layouts.app')

@section('title', __('labels.backend.access.sales.management') . ' | ' . __('labels.backend.access.sales.edit'))

@section('breadcrumb-links')
    @include('backend.sales.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($sale, ['route' => ['admin.sales.update', $sale], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role', 'files' => true]) }}

    <div class="card">
        @include('backend.sales.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.sales.index', 'id' => $sale->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection