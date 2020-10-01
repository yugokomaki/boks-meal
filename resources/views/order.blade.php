@extends('layouts.app')

@section('content')

 <div class="container">
 	
 	<div class="row justify-content-center">
 		<div class="col-md-8">
 			@foreach($carts as $cart)
 			<div class="card mb-3">
 				<div class="card-body">
 					@foreach($cart->items as $item)
 					<span class="float-right">
 						<img src="{{Storage::url($item['image'])}}" width="100">
 					</span>

 					<p>名称:{{$item['name']}}</p>
 					<p>価格:{{$item['price']}}円</p>
 					<p>数量:{{$item['qty']}}</p>
                    <br>
 					@endforeach
 					
 				</div>

 			</div>
 			<p>
 				<button type="button" class="btm btn-info" style="color: #fff;">
 					<span class="">
                         合計:{{$cart->totalPrice}}円
                     </span>
                 </button>
             </p>
             <br>
 			<hr>
 			@endforeach
 		</div>
 	</div>
 	
 </div>


 @endsection