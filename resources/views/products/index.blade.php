

<x-app-layout>

    <div class="centralize">
      <div class="prod">
        <img src="{{ asset("assets/img/2.png") }}" alt="..." />
        <div class="">
          <h5 class="mt-0">ساندوتش سورى فاهيتا</h5>
          <p>ساندوتش سورى فاهيتا ساندوتش سورى فاهيتا ساندوتش سور فاهيتا</p>
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
                      <input type="radio" checked="checked" name="rad1" />
                      <span class="checkmark"></span>
                    </label>
                    <h5>small</h5>
                  </div>
                  <div class="chkItm">
                    <label class="radioCont">
                      <input type="radio" name="rad1" />
                      <span class="checkmark"></span>
                    </label>
                    <h5>medium</h5>
                  </div>
                  <div class="chkItm">
                    <label class="radioCont">
                      <input type="radio" name="rad1" />
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
                      <input type="radio" checked="checked" name="radsauce" />
                      <span class="checkmark"></span>
                    </label>
                    <h5>صوص التارتار</h5>
                  </div>
                  <div class="chkItm">
                    <label class="radioCont">
                      <input type="radio" name="radsauce" />
                      <span class="checkmark"></span>
                    </label>
                    <h5>صوص رانش</h5>
                  </div>
                  <div class="chkItm">
                    <label class="radioCont">
                      <input type="radio" name="radsauce" />
                      <span class="checkmark"></span>
                    </label>
                    <h5>صوص الخلطة التركية</h5>
                  </div>

                  <div class="chkItm">
                    <label class="radioCont">
                      <input type="radio" name="radsauce" />
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
                      <input type="radio" checked="checked" name="nots" />
                      <span class="checkmark"></span>
                    </label>
                    <h5>حار</h5>
                  </div>
                  <div class="chkItm">
                    <label class="radioCont">
                      <input type="radio" name="nots" />
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
              <button class="cart-qty-plus" type="button" value="+">+</button>
            </div>
            <input
              type="text"
              name="qty"
              class="qty"
              maxlength="12"
              value="0"
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
        type="button"
        class="btn grBtn"
        data-toggle="modal"
        data-target="#notify1"
      >
        اطلب الان
      </button>

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