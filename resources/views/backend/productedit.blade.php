@extends('backend.master')

@section('main')
<div class="data-scrollbar" data-scroll="1">
    <nav class="iq-sidebar-menu">
        <ul id="iq-sidebar-toggle" class="iq-menu">
            <li class="">
                <a href="{{ url('admin-dashboard') }}" class="svg-icon">                        
                    <svg  class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                    </svg>
                    <span class="ml-4">Dashboards</span>
                </a>
            </li>
            <li class=" ">
                <a href="#people" class="collapsed" data-toggle="collapse" aria-expanded="false">
                    <svg class="svg-icon" id="p-dash8" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span class="ml-4">Users</span>
                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                    </svg>
                </a>
                <ul id="people" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  <li class="">
                                <a href="{{ url('admin-users') }}">
                                    <i class="las la-minus"></i><span>Users</span>
                                </a>
                        </li>
                        <li class="">
                                <a href="{{ url('admin-user-add') }}">
                                    <i class="las la-minus"></i><span>Add User</span>
                                </a>
                        </li> 
                </ul>
            </li>
            <li class=" ">
                <a href="#purchase" class="collapsed" data-toggle="collapse" aria-expanded="false">
                    <svg class="svg-icon" id="p-dash5" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                        <line x1="1" y1="10" x2="23" y2="10"></line>
                    </svg>
                    <span class="ml-4">Products</span>
                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                    </svg>
                </a>
                <ul id="purchase" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="active">
                                <a href="{{ url('admin-products') }}">
                                    <i class="las la-minus"></i><span>List Products</span>
                                </a>
                        </li>
                        <li class="">
                                <a href="{{ url('admin-product-add') }}">
                                    <i class="las la-minus"></i><span>Add Product</span>
                                </a>
                        </li>
                </ul>
            </li>
            <li class=" ">
                <a href="#product" class="collapsed" data-toggle="collapse" aria-expanded="false">
                    <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                    <span class="ml-4">Orders</span>
                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                    </svg>
                </a>
                <ul id="product" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    <li class="">
                        <a href="#">
                            <i class="las la-minus"></i><span>List Order</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <i class="las la-minus"></i><span>Add Order</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
   
</div>
</div>  
<!-- main -->    
<div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Update Product</h4>
                            <p>@include('errors.note')</p>
                        </div>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('postproductedit', $product->id) }}" method="POST" enctype="multipart/form-data" data-toggle="validator">
                @csrf
                            <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Name *</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Name" value="{{ $product->name }}" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Price *</label>
                        <div class="input-group">
                            
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input placeholder="Enter Price"  name="price" type="text" class="form-control" value="{{ $product->price }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >SKU *</label>
                            <input placeholder="Enter SKU"  name="sku" type="text" class="form-control" value="{{ $product->sku }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Image *</label>
                            <input type="file" class="form-control image-file" name="image" accept="image/*">
                        </div>
                    </div>                    
                    <div class="col-md-12" >
                        <div class="form-group">
                            <img style="width: 400px;heght:200px" src="{{ asset('images/products/'.$product->image) }}"class="img-fluid" alt="{{ $product->name }}">
                        </div>
                    </div>
                    
                </div>

                <button type="submit" class="btn btn-primary mr-2">Update Product</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>


                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
      </div>
        <!-- Page end  -->
    </div>
      </div>
    </div>
 <!--end main  -->
    </div>
    </div>
    <!-- Wrapper End-->
@stop