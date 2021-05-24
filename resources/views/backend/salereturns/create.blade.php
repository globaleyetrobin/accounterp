@extends('backend.layouts.app')

@section('title', __('labels.backend.access.salereturns.management') . ' | ' . __('labels.backend.access.salereturns.create'))

@section('breadcrumb-links')
    @include('backend.salereturns.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.salereturns.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.salereturns.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.salereturns.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection