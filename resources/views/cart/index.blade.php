
<x-app-layout>

  <div class="centralize">
    <div class="topBar">
      <a href="{{ route('cart.index') }}"><i class="fa-solid fa-cart-shopping"></i></a>
      <h4>السلة</h4>
      <a href="{{ route('index') }}" class="bk"><i class="fas fa-chevron-right"></i></a>  
    </div>

    <div class="clearfix"></div>
    @auth
      @if ($carts->count())
        @foreach ($carts as $cart)
          <div class="item">
            <form action="{{ route('cart.destroy', $cart->id) }}" method="post">
              @csrf
              @method("DELETE")

              <button class="del" type="submit"><i class="fas fa-times"></i></button>
            </form>
            <div class="media">
              <img src="{{ asset("upload_files/foods/" . $cart->food->thumbnail) }}" alt="...">
              <div class="media-body">
                  <h5 class="mt-0">{{ $cart->food->name }}</h5>
                  <p>{{ $cart->food->description }}</p>
                  <div class="inc_dec">
                      <div class="button-container">
                          <button class="cart-qty-plus" type="button" value="+">+</button>
                      </div>
                      <input type="text" name="qty" class="qty" maxlength="12" value="{{ $cart->quantity }}" class="input-text qty" />
                      <div class="button-container">
                          <button class="cart-qty-minus" type="button" value="-">-</button>
                      </div>
                      <h6 class="price">{{ number_format($cart->subTotal, 2) . ' ' . 'SR' }}</h6>
                  </div>
              </div>
            </div>
          </div>
        @endforeach
        <br>
        <form action="{{ route('cart.store') }}" method="post">
          @csrf
          
          <table class="table crtTbl">
            <tr>
              <td>الضريبة</td>
              <td>{{ $the_tax . " " . "SR" }}</td>
              {{-- <input type="text" hidden name="subTotal" value="{{ $total }}"> --}}
            </tr>
            <tr>
              <td>المجموع</td>
              <td>{{ number_format($total, 2) . " " . "SR" }}</td>
              <input type="text" hidden name="subTotal" value="{{ $total }}">
            </tr>
            <tr>
              <td>رسوم التوصيل</td>
              <td>{{ $delivery_price . " " . "SR" }}</td>
              <input type="text" hidden name="shippingFee" value="{{ 30.00 }}">
            </tr>
            <tr>
              <td>قيمة الطلب</td>
              <td>{{ number_format($total, 2) . " " . "SR" }}</td>
              <input type="text" hidden name="total" value="{{ $total + 33 + 30 }}">
            </tr>
          </table>
    
          <div class="d-flex">
            <button class="grayBtn" type="submit">اكمل الطلب</button>
          </div>
        </form>
      @else
        <p>لم تقم بعمل طلب لاى وجبة من قبل</p>
      @endif
    @endauth

    @if (Session::has('foods'))
      @foreach (Session::get('foods') as $cart)
        <div class="item">
          @php $food = App\Models\Food::firstWhere('id', $cart['food_id']) @endphp
          <form action="" method="post">
            @csrf
            @method("DELETE")
    
            <button class="del" type="submit"><i class="fas fa-times"></i></button>
          </form>
          <div class="media">
            <img src="{{ asset("upload_files/foods/" . $food->thumbnail) }}" alt="...">
            <div class="media-body">
              <h5 class="mt-0">{{ $food->name }}</h5>
              <p>{{ $food->description }}</p>
              <div class="inc_dec">
                  <div class="button-container">
                    <button class="cart-qty-plus" type="button" value="+">+</button>
                  </div>
                  <input type="text" name="qty" class="qty" maxlength="12" value="{{ $cart['quantity'] }}" class="input-text qty" />
                  <div class="button-container">
                    <button class="cart-qty-minus" type="button" value="-">-</button>
                  </div>
                  <h6 class="price">{{ $cart['subTotal'] }}</h6>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      <br>
      <form action="{{ route('cart.store') }}" method="post">
        @csrf
        
        <table class="table crtTbl">
          <tr>
            <td>الضريبة</td>
            <td>{{ $the_tax . " " . "SR" }}</td>
            <input type="text" hidden name="the_tax" value="{{ $the_tax }}">
          </tr>
          <tr>
            <td>المجموع</td>
            <td></td>
            <input type="text" hidden name="subTotal" value="">
          </tr>
          <tr>
            <td>رسوم التوصيل</td>
            <td>{{ $delivery_price . " " . "SR" }}</td>
            <input type="text" hidden name="delivery_price" value="{{ $delivery_price }}">
          </tr>
          <tr>
            <td>قيمة الطلب</td>
            <td></td>
            <input type="text" hidden name="total" value="">
          </tr>
        </table>
  
        <div class="d-flex">
          <button class="grayBtn" type="submit">اكمل الطلب</button>
        </div>
      </form>
    @else
      <p>لم تقم بعمل طلب لاى وجبة من قبل</p>
    @endif
  </div>

</x-app-layout>