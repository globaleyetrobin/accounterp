@extends('backend.layouts.app')

@section('title', __('labels.backend.access.loan.management') . ' | ' . __('labels.backend.access.loan.create'))

@section('breadcrumb-links')
    @include('backend.loans.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.loans.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.loans.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.loans.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection