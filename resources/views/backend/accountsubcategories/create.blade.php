@extends('backend.layouts.app')

@section('title', __('labels.backend.access.accountsubcategory.management') . ' | ' . __('labels.backend.access.accountsubcategory.create'))

@section('breadcrumb-links')
    @include('backend.accountsubcategories.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.accountsubcategories.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.accountsubcategories.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.accountsubcategories.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection