@extends('backend.layouts.app')

@section('title', __('labels.backend.access.subcategory.management') . ' | ' . __('labels.backend.access.subcategory.create'))

@section('breadcrumb-links')
    @include('backend.subcategories.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.subcategories.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.subcategories.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.subcategories.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection