@extends('layouts.app')

@section('content')


    <div class="container">
        <h2 class="price h4">メニュー</h2>

      <div class="row">
        <div class="col-md-2">
             <form action="{{route('product.list',[$slug])}}" method="GET">
            <!--foreach subcategories-->
            @foreach($subcategories as $subcategory)
              <p><input type="checkbox" name="subcategory[]" value="{{$subcategory->id}}"
              @if(isset($filterSubcategories))
              {{in_array($subcategory->id,$filterSubcategories)?'checked ="checked"' :''}}
              @endif
              >
              {{$subcategory->name}}</p>
           <!--end foreach-->
           @endforeach
          <br><input type="submit" value="ソート" class="btn btn-secondary">
         </form>
         <br><hr><br>
         <h3 class="price h4">価格</h3>
         <form  action="{{route('product.list',[$slug])}}" method="GET">
             <input type="text" name="min" class="form-control" placeholder="最低価格" required="">
             〜
             <input type="text" name="max" class="form-control" placeholder="最高価格" required=""  >
             <input type="hidden" name="categoryId" value="{{$categoryId}}">
             <br>
            <input type="submit" value="ソート" class="btn btn-secondary">
         </form>
         <br>
         <a href="{{route('product.list',[$slug])}}">条件をクリア</a>
         <br><hr><br>
        </div>
      <div class="col-md-10">
        <div class="row">
      <!--foreach products-->
      @foreach($products as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{Storage::url($product->image)}}" height="200" style="width: 100%">
            <div class="card-body">
                <p><b>{{$product->name}}</b></p>
              <p class="card-text">
              {{Str::limit($product->description,120)}}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a href="{{route('product.view',[$product->id])}}"> 
                    <button type="button" class="btn btn-sm btn-outline-success">詳細</button></a>
                 <a href="{{route('add.cart',[$product->id])}}">
                  <button type="button" class="btn btn-sm btn-outline-primary">カートに追加</button></a>
                </div>
                <small class="price h4">{{$product->price}}円</small>
              </div>
            </div>
          </div>
        </div>
    <!--endforeach-->
    @endforeach
      </div>
    </div>
</div>
</div>

<!-- Footer -->
@include('footer')
<!-- Footer -->      

@endsection
