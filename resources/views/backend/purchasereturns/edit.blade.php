@extends('backend.layouts.app')

@section('title', __('labels.backend.access.purchasereturns.management') . ' | ' . __('labels.backend.access.purchasereturns.edit'))

@section('breadcrumb-links')
    @include('backend.purchasereturns.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($purchasereturn, ['route' => ['admin.purchasereturns.update', $purchasereturn], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role', 'files' => true]) }}

    <div class="card">
        @include('backend.purchasereturns.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.purchasereturns.index', 'id' => $purchasereturn->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection