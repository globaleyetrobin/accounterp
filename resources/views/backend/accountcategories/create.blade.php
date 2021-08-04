@extends('backend.layouts.app')

@section('title', __('labels.backend.access.accountcategory.management') . ' | ' . __('labels.backend.access.accountcategory.create'))

@section('breadcrumb-links')
    @include('backend.accountcategories.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.accountcategories.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.accountcategories.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.accountcategories.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection