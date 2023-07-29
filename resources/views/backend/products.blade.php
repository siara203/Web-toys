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
            
        </ul>
    </nav>
   
</div>
</div>   
<!-- main -->    
<div class="content-page">
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3"> List Products</h4>
                        <p class="mb-0">@include('errors.note')</p>
                    </div>
                    <a  href="{{ url('admin-toy-add') }}"class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add Product</a>
                </div>
            </div>
            <div class="col-lg-12">
            <div class="table-responsive rounded mb-3">
                <table class="data-table table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>SKU</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        @foreach($products as $product)
                        <tr>
                            <td>
                                <img src="{{ asset('images/products/'.$product->image) }}" class="img-fluid rounded avatar-50 mr-3" alt="{{ $product->name }}">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>$ {{ $product->price }}</td>
                            <td>{{ $product->sku }}</td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('getproductedit', ['id' => $product->id]) }}"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="Delete" href="{{ route('deleteproduct', ['id' => $product->id]) }}"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach                    
            </tbody>
        </table>
    </div>
</div>
        </div>
    </div>
        <!-- Page end  -->
    </div>
    <!-- Wrapper End-->
@stop