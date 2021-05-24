@extends('backend.layouts.app')

@section('title', __('labels.backend.access.purchases.management') . ' | ' . __('labels.backend.access.purchases.edit'))

@section('breadcrumb-links')
    @include('backend.purchases.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($purchase, ['route' => ['admin.purchases.update', $purchase], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role', 'files' => true]) }}

    <div class="card">
        @include('backend.purchases.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.purchases.index', 'id' => $purchase->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection