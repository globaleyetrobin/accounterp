@extends('backend.layouts.app')

@section('title', __('labels.backend.access.salereturns.management') . ' | ' . __('labels.backend.access.salereturns.edit'))

@section('breadcrumb-links')
    @include('backend.salereturns.includes.breadcrumb-links')
@endsection

@section('content')

    {{ Form::model($salereturn, ['route' => ['admin.salereturns.update', $salereturn], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role', 'files' => true]) }}

    <div class="card">
        @include('backend.salereturns.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.salereturns.index', 'id' => $salereturn->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection