@extends('backend.layouts.app')

@section('title', __('labels.backend.access.currency.management') . ' | ' . __('labels.backend.access.currency.edit'))

@section('breadcrumb-links')
    @include('backend.currencies.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Currency, ['route' => ['admin.currencies.update', $Currency], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.currencies.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.currencies.index', 'id' => $Currency->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection