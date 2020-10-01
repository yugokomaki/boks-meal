@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="row">
            <aside class="col-sm-5 border-right">
                <section class="gallery-wrap">
                    <div class="img-big-wrap">
                        <a href="#">
                            <img src="{{Storage::url($product->image)}}" height="200" style="width:100%">
                        </a>
                    </div> 
                </section>
            </aside>

            <aside class="col-sm-7">
                <section class="card-body p-5">
                    <h3 class="price h3">
                        {{$product->name}}
                    </h3> 
                    <p class="price-detail-wrap">
                        <span class="price h3">
                            <span class="currency">{{$product->price}}円</span>
                        </span>
                    </p><br>

                    <h3>【説明】</h3>
                    <p>{!!$product->description!!}</p><br>
                    <h3>【中身】</h3>
                    <p>{!!$product->additional_info!!}</p><br>

                    <hr><br>

                    <!-- <div class="row">
                        <div class="form-inline">
                            <h3>Quantity:</h3>
                            <input type="text" name="qty" class="form-control">
                            <input type="submit" class="btn btn-primary ml-2">
                        </div>
                    </div>

                    <hr> -->

                    <a href="{{route('add.cart',[$product->id])}}" class="btn btn-lg btn-outline-primary text-uppercase">カートに追加</a>

                </section>
            </aside>
        </div>
    </div>

    @if(count($productFromSameCategories)>0)
    <div class="jumbotron">
     <h3 class="price h3">この商品をチェックした人はこんな商品もチェックしています</h3>   
     <div class="row">
      @foreach($productFromSameCategories as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{Storage::url($product->image)}}">
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
    </div>
    @endif
</div>

<!-- Footer -->
@include('footer')
<!-- Footer -->
@endsection
