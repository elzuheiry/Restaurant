
<x-app-layout>

    <div class="centralize">
        <div class="topBar">
          <a href="{{ route('cart.index') }}"><i class="fa-solid fa-cart-shopping"></i></a>
          <h4>السلة</h4>
          <a href="{{ route('index') }}" class="bk"><i class="fas fa-chevron-right"></i></a>  
        </div>
        <div class="clearfix"></div>
        <!-- <img src="data/WhatsApp Unknown 2022-01-26 at 11.11.04 AM/WhatsApp Image 2022-01-26 at 11.10.09 AM (3).jpeg" alt=""> -->
        <div class="item">
            <button class="del"><i class="fas fa-times"></i></button>
            <div class="media">
              <img src="{{ asset("assets/img/1.png") }}" alt="...">
              <div class="media-body">
                  <h5 class="mt-0">ساندوتش فاهيتا فراخ</h5>
                  <p> ساندوتش فاهيتا فراخ ساندوتش فاهيتا فراخ 
                  </p>
                  <h6>رقم الطلب  <span> 234566</span></h6>
                  <div class="inc_dec">
                      <div class="button-container">
                          <button class="cart-qty-plus" type="button" value="+">+</button>
                      </div>
                      <input type="text" name="qty" class="qty" maxlength="12" value="0" class="input-text qty" />
                      <div class="button-container">
                          <button class="cart-qty-minus" type="button" value="-">-</button>
                      </div>
                      <h6 class="price">200 س.ر</h6>
                  </div>
              </div>
            </div>
        </div>
        <div class="item">
            <button class="del"><i class="fas fa-times"></i></button>
            <div class="media">
              <img src="{{ asset("assets/img/1.png") }}" alt="...">
              <div class="media-body">
                  <h5 class="mt-0">ساندوتش فاهيتا فراخ</h5>
                  <p> ساندوتش فاهيتا فراخ ساندوتش فاهيتا فراخ 
                  </p>
                  <div class="inc_dec">
                      <div class="button-container">
                          <button class="cart-qty-plus" type="button" value="+">+</button>
                      </div>
                      <input type="text" name="qty" class="qty" maxlength="12" value="0" class="input-text qty" />
                      <div class="button-container">
                          <button class="cart-qty-minus" type="button" value="-">-</button>
                      </div>
                      <h6 class="price">44 س.ر</h6>
                  </div>
              </div>
            </div>
        </div>
        <div class="item">
            <button class="del"><i class="fas fa-times"></i></button>
            <div class="media">
              <img src="{{ asset("assets/img/1.png") }}" alt="...">
              <div class="media-body">
                  <h5 class="mt-0">ساندوتش فاهيتا فراخ</h5>
                  <p> ساندوتش فاهيتا فراخ ساندوتش فاهيتا فراخ 
                  </p>
                  <div class="inc_dec">
                      <div class="button-container">
                          <button class="cart-qty-plus" type="button" value="+">+</button>
                      </div>
                      <input type="text" name="qty" class="qty" maxlength="12" value="0" class="input-text qty" />
                      <div class="button-container">
                          <button class="cart-qty-minus" type="button" value="-">-</button>
                      </div>
                      <h6 class="price">44 س.ر</h6>
                  </div>
              </div>
            </div>
        </div>
  
        <br>
        <table class="table crtTbl">
          <tr>
            <td>الضريبة</td>
            <td>33.00 sr</td>
          </tr>
          <tr>
            <td>المجموع</td>
            <td>12.00 sr</td>
          </tr>
          <tr>
            <td>رسوم التوصيل</td>
            <td>30.00 sr</td>
          </tr>
          <tr>
            <td>قيمة الطلب</td>
            <td>127.00 sr</td>
          </tr>
        </table>
  
         <div class="d-flex">
          <button class="grayBtn">اكمل الطلب</button>
          <button class="grBtn">اضف المزيد</button>
         </div>
         
        
    </div>

</x-app-layout>