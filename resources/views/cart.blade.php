@extends('layouts.app')

@section('content')

<div class="container">
    @if($errors->any())

    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach

    @endif

<table id="cart" class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">画像</th>
      <th scope="col">商品</th>
      <th scope="col">価格</th>
      <th scope="col">数量</th>
      <th>削除</th>
    </tr>
  </thead>

  <tbody>
      @if($cart)
      @php $i=1 @endphp
    @foreach($cart->items as $product)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td><img src="{{Storage::url($product['image'])}}" width="100"></td>
      <td>{{$product['name']}}</td>
      <td>{{$product['price']}}円</td>
      <td>
    <form action="{{route('cart.update',$product['id'])}}" method="post">@csrf
      	<input type="text" name="qty" size="3" value="{{$product['qty']}}">
          <button class="btn btn-secondary btn-sm"><i class="fas fa-sync"></i>更新</button>
    </form>
      </td>
      <td>
        <form action="{{route('cart.remove',$product['id'])}}" method="post">@csrf
          <button class="btn btn-danger">削除</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>	
<hr>
<div class="card-footer">
    <a href="{{route('home')}}">
	<button class="btn btn-warning">買い物を続ける</button></a>
	<span style="margin-left:300px;">合計:{{$cart->totalPrice}}円</span>
    <a href="{{route('cart.checkout',$cart->totalPrice)}}">
    <button class="btn btn-info float-right">チェックアウト</button></a>
</div>	
@else
<td>カートに商品は入っておりません</td>	
@endif	
</div>


@endsection