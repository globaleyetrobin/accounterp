@extends('backend.layouts.app')

@section('title', __('labels.backend.access.deduction.management') . ' | ' . __('labels.backend.access.deduction.edit'))

@section('breadcrumb-links')
    @include('backend.deductions.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($Deduction, ['route' => ['admin.deductions.update', $Deduction], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

    <div class="card">
        @include('backend.deductions.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.deductions.index', 'id' => $Deduction->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection