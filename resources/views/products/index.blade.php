

<x-app-layout>

    <div class="centralize">
      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      <form action="{{ route('product.store', $food->id) }}" method="post">
        @csrf

        <div class="prod">
          <img src="{{ asset("upload_files/foods/" . $food->thumbnail) }}" alt="..." />
          <div class="">
            <h5 class="mt-0">{{ $food->name }}</h5>
            <p>{{ $food->description }}</p>
            
            <div class="accordion proAccord" id="proAccord">
  
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button
                      class="btn btn-link"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      <i class="fa-solid fa-angles-down"></i> الحجم
                    </button>
                  </h2>
                </div>
  
                <div
                  id="collapseOne"
                  class="collapse show"
                  aria-labelledby="headingOne"
                  data-parent="#proAccord"
                >
                  <div class="card-body">
                    <div class="chkItm">
                      <label class="radioCont">
                        <input type="radio" name="sizes"  value="small" />
                        <span class="checkmark"></span>
                      </label>
                      <h5>small</h5>
                    </div>
                    <div class="chkItm">
                      <label class="radioCont">
                        <input type="radio" name="sizes" value="medium" />
                        <span class="checkmark"></span>
                      </label>
                      <h5>medium</h5>
                    </div>
                    <div class="chkItm">
                      <label class="radioCont">
                        <input type="radio" name="sizes" value="large" />
                        <span class="checkmark"></span>
                      </label>
                      <h5>large</h5>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button
                      class="btn btn-link collapsed"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                      <i class="fa-solid fa-angles-down"></i>
                      الاضافات
                    </button>
                  </h2>
                </div>
                <div
                  id="collapseTwo"
                  class="collapse"
                  aria-labelledby="headingTwo"
                  data-parent="#proAccord"
                >
                  <div class="card-body">
                    <div class="chkItm">
                      <label class="radioCont">
                        <input type="radio" name="additions" value="tartar sauce"/>
                        <span class="checkmark"></span>
                      </label>
                      <h5>صوص التارتار</h5>
                    </div>
                    <div class="chkItm">
                      <label class="radioCont">
                        <input type="radio" name="additions" value="ranch sauce"/>
                        <span class="checkmark"></span>
                      </label>
                      <h5>صوص رانش</h5>
                    </div>
                    <div class="chkItm">
                      <label class="radioCont">
                        <input type="radio" name="additions" value="turkish mixture sauce" />
                        <span class="checkmark"></span>
                      </label>
                      <h5>صوص الخلطة التركية</h5>
                    </div>
  
                    <div class="chkItm">
                      <label class="radioCont">
                        <input type="radio" name="additions" value="Garlic mixture sauce" />
                        <span class="checkmark"></span>
                      </label>
                      <h5>صوص خلطة التوم</h5>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button
                      class="btn btn-link collapsed"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      <i class="fa-solid fa-angles-down"></i>
                      ملاحظات
                    </button>
                  </h2>
                </div>
                <div
                  id="collapseThree"
                  class="collapse"
                  aria-labelledby="headingThree"
                  data-parent="#proAccord"
                >
                  <div class="card-body">
                    <div class="chkItm">
                      <label class="radioCont">
                        <input type="radio" name="notes" value="spicy" />
                        <span class="checkmark"></span>
                      </label>
                      <h5>حار</h5>
                    </div>
                    <div class="chkItm">
                      <label class="radioCont">
                        <input type="radio" name="notes" value="normal" />
                        <span class="checkmark"></span>
                      </label>
                      <h5>عادى</h5>
                    </div>
                  </div>
                </div>
              </div>
  
            </div>
  
            <div class="inc_dec">
              <div class="button-container">
                <button class="cart-qty-plus" type="button" onclick="buttonClick()" value="+">+</button>
              </div>
              <input
                type="text"
                name="quantity"
                class="qty"
                maxlength="12"
                value="1"
                class="input-text qty"
              />
              <div class="button-container">
                <button class="cart-qty-minus" type="button" value="-">-</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Button trigger modal -->
        <button
        type="submit"
        class="btn grBtn"
        data-toggle="modal"
        data-target="#notify1"
        >
          اطلب الان
        </button>

      </form>

      <!-- Modal -->
      <div
        class="modal fade"
        id="notify1"
        tabindex="-1"
        role="dialog"
        aria-labelledby="notify1Label"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="notify1Label">الاشعارات</h5>
            </div>
            <div class="modal-body">
              <h5>تم بنجاح</h5>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                اوك
              </button>
              <!-- <a href="cart.html" class="btn btn-secondary" >اوك</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>

</x-app-layout>