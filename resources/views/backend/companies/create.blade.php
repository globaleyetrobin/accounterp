@extends('backend.layouts.app')

@section('title', __('labels.backend.access.companies.management') . ' | ' . __('labels.backend.access.companies.create'))

@section('breadcrumb-links')
    @include('backend.companies.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.companies.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.companies.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.companies.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection