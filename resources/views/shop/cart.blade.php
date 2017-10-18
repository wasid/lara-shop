@extends('layouts.master')

@section('title')
Total Cart
@endsection

@section('content')
      <a href="{{route('shop.index')}}"><button  class="btn btn-success">Shop Again</button></a>
      <div class="row">
        @foreach($totalcart as $product)
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail cartimg">
              <!--<img src="{{ $product->imgPath }}" alt="..." class="img-reponsive">-->
              <div class="caption text-center">
                <h3>{{ $product->name }}</h3>
                <h4>Quantity: {{ $product->qty}}</h4>
                <p>Price: ${{ $product->price }}</p>
              </div>
            </div>
        </div>
       @endforeach
       </div>
@endsection