@extends('layouts.master')

@section('title')
    customers
@endsection

@section('styles')
<style type="text/css">
    .adjust {
        margin-top: -15px;
    }
</style>
@endsection


@section('header_title')
    
<span></span>
@endsection


@section('breadcrumbs')
<div class="page-header-breadcrumb">
    <ul class="breadcrumb-title" style="float:left;">
        <li class="breadcrumb-item">
            <a href="index-1.htm">
                <i class="icofont icofont-home"></i>
            </a>
        </li>


        <li class="breadcrumb-item"><a href="#!">Page Layouts</a>
        </li>
        <li class="breadcrumb-item"><a href="#!">Horizontal</a>
        </li>
        <li class="breadcrumb-item"><a href="#!">fixed Layout</a>
        </li>
    </ul>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
              
              <div class="card-body">
                <div class="mb-4" id="app">
                    <span class="card-title">Manage Customers</span>
                    <h3 class="text-center text-muted">Note:Yajra Search is applying in ajax </h3>
                    <button class="btn btn-sm btn-primary float-right" onclick="onFetchFormModal(event,'','#md_add_customer','#modal_add_customer')">Add customer</button>
                    <!--event, route, target_model, bind_model-->
                </div>
                @include('customers.components.view_customer_component')
              </div>
            </div>

            
        </div>
    </div>
@endsection

@section('modals')
    <div id="modal_add_customer"></div>
    <div id="modal_update_customer"></div>
    
@endsection


@section('scripts')
    

@endsection





