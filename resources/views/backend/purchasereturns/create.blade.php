@extends('backend.layouts.app')

@section('title', __('labels.backend.access.purchasereturns.management') . ' | ' . __('labels.backend.access.purchasereturns.create'))

@section('breadcrumb-links')
    @include('backend.purchasereturns.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.purchasereturns.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.purchasereturns.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.purchasereturns.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection