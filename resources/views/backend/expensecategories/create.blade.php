@extends('backend.layouts.app')

@section('title', __('labels.backend.access.expensecategory.management') . ' | ' . __('labels.backend.access.expensecategory.create'))

@section('breadcrumb-links')
    @include('backend.expensecategories.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.expensecategories.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.expensecategories.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.expensecategories.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection