<table id="cart" class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">商品</th>
      <th scope="col">価格</th>
      <th scope="col">数量</th>
    </tr>
  </thead>
  <tbody>
    @php $i=1 ; @endphp
  @foreach($cart->items as $product)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$product['name']}}</td>
      <td>{{$product['price']}}円</td>
      <td>{{$product['qty']}}</td>
    </tr>
  @endforeach
    <br>
    合計:{{$cart->totalPrice}}円<br><br>
    詳細は以下リンクからご確認頂けます<a href="{{url('/orders')}}">click here</a>
  </tbody>
</table>	