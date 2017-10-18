@extends('layouts.master')

@section('title')
Total Cart
@endsection

@section('content')
      <a href="{{route('shop.index')}}"><button  class="btn btn-info">Shop Again</button></a>
      <a href="{{ route('cart.removeall') }}"><button  class="btn btn-danger float-right">Remove All Items</button></a>
      <div class="row">
        @foreach($totalcart as $product)
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail cartimg">
              <!--<img src="{{ $product->imgPath }}" alt="..." class="img-reponsive">-->
              <div class="caption text-center">
                <h3>{{ $product->name }}</h3>
                <h4>Quantity: {{ $product->qty}}</h4>
                <p>Price: ${{ $product->price }}</p>
                <p>ID: ${{ $product->rowId }}</p>
                <a href="{{ route('cart.remove', ['id' => $product->rowId] ) }}" ><button  class="btn btn-warning btn-sm glyphicon glyphicon-minus"></button></a>
                <a href="{{ route('cart.addqt', ['id' => $product->rowId] ) }}"><button  class="btn btn-success btn-sm glyphicon glyphicon-plus"></button></a>
                <br>
                <br>
                <a href="{{ route('cart.removethis', ['id' => $product->rowId]) }}"><button  class="btn btn-danger">Remove Item</button></a>
              </div>
            </div>
        </div>
       @endforeach
       </div>
@endsection