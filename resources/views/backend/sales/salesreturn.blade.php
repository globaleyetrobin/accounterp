@extends('backend.layouts.salesreturn')

@section('title', __('labels.backend.access.sales.management') . ' | ' . __('labels.backend.access.sales.create'))

@section('breadcrumb-links')
    @include('backend.sales.includes.breadcrumb-links')
@endsection

@section('content')
  
   {{ Form::open(['route' => 'admin.salereturns.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.sales.salesform')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.sales.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection