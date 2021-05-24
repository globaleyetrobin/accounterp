@extends('backend.layouts.app')

@section('title', __('labels.backend.access.deduction.management') . ' | ' . __('labels.backend.access.deduction.create'))

@section('breadcrumb-links')
    @include('backend.deductions.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.deductions.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.deductions.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.deductions.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection