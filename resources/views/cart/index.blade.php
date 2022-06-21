
<x-app-layout>

  <div class="centralize">
    <div class="topBar">
      <a href="{{ route('cart.index') }}"><i class="fa-solid fa-cart-shopping"></i></a>
      <h4>السلة</h4>
      <a href="{{ route('index') }}" class="bk"><i class="fas fa-chevron-right"></i></a>  
    </div>

    <div class="clearfix"></div>
    <!-- <img src="data/WhatsApp Unknown 2022-01-26 at 11.11.04 AM/WhatsApp Image 2022-01-26 at 11.10.09 AM (3).jpeg" alt=""> -->

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
                <td>33.00 sr</td>
                {{-- <input type="text" hidden name="subTotal" value="{{ $total }}"> --}}
              </tr>
              <tr>
                <td>المجموع</td>
                <td>{{ number_format($total, 2) . " " . "SR" }}</td>
                <input type="text" hidden name="subTotal" value="{{ $total }}">
              </tr>
              <tr>
                <td>رسوم التوصيل</td>
                <td>30.00 sr</td>
                <input type="text" hidden name="shippingFee" value="{{ 30.00 }}">
              </tr>
              <tr>
                <td>قيمة الطلب</td>
                <td>{{ number_format($total + 33 + 30, 2) . " " . "SR" }}</td>
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
  </div>

</x-app-layout>