@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('more.product')}}" method="GET">
        <div class="form-row">
            <div class="col-md-8">
                <input type="text" name="search" class="form-control" placeholder="キーワード">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-secondary">検索</button>
            </div>
        </div>
    </form>
    <br>

    <div class="row">
      @foreach($products as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{Storage::url($product->image)}}" height="200" style="width:100%">
            <div class="card-body">
                <p><b>{{$product->name}}</b></p>
              <p class="card-text">{{Str::limit($product->description,120)}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{route('product.view',[$product->id])}}"><button type="button" class="btn btn-sm btn-outline-success">詳細</button></a>
                  <a href="{{route('add.cart',[$product->id])}}"><button type="button" class="btn btn-sm btn-outline-primary">カートに追加</button></a>
                </div>
                <small class="price h4">{{$product->price}}円</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    {{$products->links()}}
</div>

<!-- Footer -->
@include('footer')
<!-- Footer -->

@endsection