@extends('layouts.master')

@section('title')
Lara Shop
@endsection

@section('content')
    <p><a href="{{ route('cart.show') }}" class="btn btn-success float-right" role="button">Total Item <span class="badge">
        
          @if(count($cart) > 0)
            {{$cart}}
          @else
            0
          @endif

      </span></a></p>
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
        @foreach($productChunk as $product)
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail cartimg">
              <img src="{{ $product->imgPath }}" alt="..." class="img-reponsive">
              <div class="caption text-center">
                <h3>{{ $product->title }}</h3>
                <h4>${{ $product->price}}</h4>
                <p>{{ $product->description }}</p>
                <p><a href="{{ route('cart.add', ['id' => $product->id]) }}" class="btn btn-primary float-right" role="button">Add to Cart</a></p>
              </div>
            </div>
        </div>
       @endforeach
    </div>
    @endforeach
@endsection