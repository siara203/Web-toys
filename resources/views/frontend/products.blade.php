<link rel="stylesheet" href="{{ asset('backend/product.css') }}" />

@extends('frontend.master')
@section('title','List Songs')
@section('content')

<div class="container">

<h2>Toys</h2>


<!-- form -->

  <div class="products-group">
  <div class="row-index">
    @foreach($products as $product)
    <div class="col-xs-18 col-sm-6 col-md-4-index" >
      <div class="img_thumbnail productlist-index">
        <div id="carousel-{{ $product->id }}" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item"><img src="{{ asset('images/products/' . $product->image) }}" class="img-fluid rounded avatar-50 mr-3" alt="image"></div>
          </div>
          <a class="carousel-control-prev" href="#carousel-{{ $product->id }}" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-{{ $product->id }}" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="caption">
        <h3>{{ $product->name }}</h3>
        <h4>SKU: {{ $product->price }}</h4>
        <strong>SKU: {{ $product->sku }}</strong>
        <p class="purchase-info"><a href="#" class="btn btn-primary btn-block text-center" role="button">Add Car</a></p>
      </div>
    </div>
    @endforeach
  </div>
</div>

      
</div>
                     <div class="text-center">
                     <ul class="pagination">
                     <li class="disabled"><a href="#">«</a></li>
                     <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                     <li><a href="#">»</a></li>
                     </ul>
                     </div>


</div>
@stop