

<x-app-layout>

    <div class="tabBar">
      <div class="col-md-12 ofr">
        <button class="del"><i class="fas fa-times"></i></button>
        <img src="{{ asset("assets/img/ofr.jpeg") }}" alt="">
      </div>

        <ul class="nav nav-tabs" id="mainTB" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="meals-tab" data-toggle="tab" href="#meals" role="tab" aria-controls="meals" aria-selected="true"> 
              <i class="fa-solid fa-utensils fa-2x"></i> وجبات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="sandwitches-tab" data-toggle="tab" href="#sandwitches" role="tab" aria-controls="sandwitches" aria-selected="false"><i class="fa-solid fa-burger fa-2x"></i>سندوتشات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="offers-tab" data-toggle="tab" href="#offers" role="tab" aria-controls="offers" aria-selected="false"><i class="fa-solid fa-percent fa-2x"></i>
              منطقة العروض</a>
          </li>
        </ul>
        <div class="tab-content" id="mainTBContent">
          <div class="tab-pane fade show active" id="meals" role="tabpanel" aria-labelledby="meals-tab">

            <div class="content col-md-12">
              <a href="{{ route("product.show") }}"  class="witchItm">
                <img src="{{ asset("assets/img/1.png") }}" alt="">
                <div class="pad-10">
                  <h5>مكسيكيان باكدج</h5> 
                  <h4>
                    <span>4.5</span>
                    <fieldset class="rating">
                      <input type="radio" id="star5" name="rating" value="5" />
                      <label class = "full fas fa-star" for="star5" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star4half" name="rating" value="4 and a half" />
                      <label class="half fas fa-star-half" for="star4half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star4" name="rating" value="4" />
                      <label class = "full fas fa-star" for="star4" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star3half" name="rating" value="3 and a half" />
                      <label class="half fas fa-star-half" for="star3half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star3" name="rating" value="3" />
                      <label class = "full fas fa-star" for="star3" title="Meh - 3 stars"></label>
                      <input type="radio" id="star2half" name="rating" value="2 and a half" />
                      <label class="half fas fa-star-half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star2" name="rating" value="2" />
                      <label class = "full fas fa-star" for="star2" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star1half" name="rating" value="1 and a half" />
                      <label class="half fas fa-star-half" for="star1half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star1" name="rating" value="1" />
                      <label class = "full fas fa-star" for="star1" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf" name="rating" value="half" />
                      <label class="half fas fa-star-half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6>وجبات</h6> 
                  <h4>
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <span>35.00 SR</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6></h6> 
                  <h4>
                    <i class="fa-solid fa-circle-info"></i>
                    <span>امكانية تتبع الطلب</span>
                  </h4>
                  <h4>
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span>35-25 دقيقة</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                </div>
              </a>
              <div class="clearfix"></div>
              <a href="{{ route("product.show") }}"  class="witchItm">
                <img src="{{ asset("assets/img/2.png") }}" alt="">
                <div class="pad-10">
                  <h5>فاهيتا سورى</h5> 
                  <h4>
                    <span>4.5</span>
                    <fieldset class="rating">
                      <input type="radio" id="star5" name="rating" value="5" />
                      <label class = "full fas fa-star" for="star5" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star4half" name="rating" value="4 and a half" />
                      <label class="half fas fa-star-half" for="star4half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star4" name="rating" value="4" />
                      <label class = "full fas fa-star" for="star4" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star3half" name="rating" value="3 and a half" />
                      <label class="half fas fa-star-half" for="star3half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star3" name="rating" value="3" />
                      <label class = "full fas fa-star" for="star3" title="Meh - 3 stars"></label>
                      <input type="radio" id="star2half" name="rating" value="2 and a half" />
                      <label class="half fas fa-star-half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star2" name="rating" value="2" />
                      <label class = "full fas fa-star" for="star2" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star1half" name="rating" value="1 and a half" />
                      <label class="half fas fa-star-half" for="star1half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star1" name="rating" value="1" />
                      <label class = "full fas fa-star" for="star1" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf" name="rating" value="half" />
                      <label class="half fas fa-star-half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6>وجبات</h6> 
                  <h4>
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <span>35.00 SR</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6></h6> 
                  <h4>
                    <i class="fa-solid fa-circle-info"></i>
                    <span>امكانية تتبع الطلب</span>
                  </h4>
                  <h4>
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span>35-25 دقيقة</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                </div>
              </a>
              <div class="clearfix"></div>
              <a href="{{ route("product.show") }}"  class="witchItm">
                <img src="{{ asset("assets/img/1.png") }}" alt="">
                <div class="pad-10">
                  <h5>مكسيكيان باكدج</h5> 
                  <h4>
                    <span>4.5</span>
                    <fieldset class="rating">
                      <input type="radio" id="star5" name="rating" value="5" />
                      <label class = "full fas fa-star" for="star5" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star4half" name="rating" value="4 and a half" />
                      <label class="half fas fa-star-half" for="star4half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star4" name="rating" value="4" />
                      <label class = "full fas fa-star" for="star4" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star3half" name="rating" value="3 and a half" />
                      <label class="half fas fa-star-half" for="star3half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star3" name="rating" value="3" />
                      <label class = "full fas fa-star" for="star3" title="Meh - 3 stars"></label>
                      <input type="radio" id="star2half" name="rating" value="2 and a half" />
                      <label class="half fas fa-star-half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star2" name="rating" value="2" />
                      <label class = "full fas fa-star" for="star2" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star1half" name="rating" value="1 and a half" />
                      <label class="half fas fa-star-half" for="star1half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star1" name="rating" value="1" />
                      <label class = "full fas fa-star" for="star1" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf" name="rating" value="half" />
                      <label class="half fas fa-star-half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6>وجبات</h6> 
                  <h4>
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <span>35.00 SR</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6></h6> 
                  <h4>
                    <i class="fa-solid fa-circle-info"></i>
                    <span>امكانية تتبع الطلب</span>
                  </h4>
                  <h4>
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span>35-25 دقيقة</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                </div>
              </a>
              <div class="clearfix"></div>
              <a href="{{ route("product.show") }}"  class="witchItm">
                <img src="{{ asset("assets/img/2.png") }}" alt="">
                <div class="pad-10">
                  <h5>فاهيتا سورى</h5> 
                  <h4>
                    <span>4.5</span>
                    <fieldset class="rating">
                      <input type="radio" id="star5" name="rating" value="5" />
                      <label class = "full fas fa-star" for="star5" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star4half" name="rating" value="4 and a half" />
                      <label class="half fas fa-star-half" for="star4half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star4" name="rating" value="4" />
                      <label class = "full fas fa-star" for="star4" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star3half" name="rating" value="3 and a half" />
                      <label class="half fas fa-star-half" for="star3half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star3" name="rating" value="3" />
                      <label class = "full fas fa-star" for="star3" title="Meh - 3 stars"></label>
                      <input type="radio" id="star2half" name="rating" value="2 and a half" />
                      <label class="half fas fa-star-half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star2" name="rating" value="2" />
                      <label class = "full fas fa-star" for="star2" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star1half" name="rating" value="1 and a half" />
                      <label class="half fas fa-star-half" for="star1half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star1" name="rating" value="1" />
                      <label class = "full fas fa-star" for="star1" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf" name="rating" value="half" />
                      <label class="half fas fa-star-half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6>وجبات</h6> 
                  <h4>
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <span>35.00 SR</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6></h6> 
                  <h4>
                    <i class="fa-solid fa-circle-info"></i>
                    <span>امكانية تتبع الطلب</span>
                  </h4>
                  <h4>
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span>35-25 دقيقة</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                </div>
              </a>
              <div class="clearfix"></div>

            </div>

          </div>

          <div class="tab-pane fade" id="sandwitches" role="tabpanel" aria-labelledby="sandwitches-tab">
            <div class="content">
              <div class="content col-md-12">
                <a href="{{ route("product.show") }}" class="witchItm">
                  <img src="{{ asset("assets/img/1.png") }}" alt="">
                  <div class="pad-10">
                    <h5>مكسيكيان باكدج</h5> 
                    <h4>
                      <span>4.5</span>
                      <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label class = "full fas fa-star" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" />
                        <label class="half fas fa-star-half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label class = "full fas fa-star" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" />
                        <label class="half fas fa-star-half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label class = "full fas fa-star" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" />
                        <label class="half fas fa-star-half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label class = "full fas fa-star" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" />
                        <label class="half fas fa-star-half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label class = "full fas fa-star" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" />
                        <label class="half fas fa-star-half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                    </h4>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pad-10">
                    <h6>وجبات</h6> 
                    <h4>
                      <i class="fa-solid fa-hand-holding-dollar"></i>
                      <span>35.00 SR</span>
                    </h4>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pad-10">
                    <h6></h6> 
                    <h4>
                      <i class="fa-solid fa-circle-info"></i>
                      <span>امكانية تتبع الطلب</span>
                    </h4>
                    <h4>
                      <i class="fa-solid fa-clock-rotate-left"></i>
                      <span>35-25 دقيقة</span>
                    </h4>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pad-10">
                  </div>
                </a>

                <div class="clearfix"></div>

                <a href="{{ route("product.show") }}" class="witchItm">
                  <img src="{{ asset("assets/img/2.png") }}" alt="">
                  <div class="pad-10">
                    <h5>فاهيتا سورى</h5> 
                    <h4>
                      <span>4.5</span>
                      <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label class = "full fas fa-star" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" />
                        <label class="half fas fa-star-half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label class = "full fas fa-star" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" />
                        <label class="half fas fa-star-half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label class = "full fas fa-star" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" />
                        <label class="half fas fa-star-half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label class = "full fas fa-star" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" />
                        <label class="half fas fa-star-half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label class = "full fas fa-star" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" />
                        <label class="half fas fa-star-half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                    </h4>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pad-10">
                    <h6>وجبات</h6> 
                    <h4>
                      <i class="fa-solid fa-hand-holding-dollar"></i>
                      <span>35.00 SR</span>
                    </h4>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pad-10">
                    <h6></h6> 
                    <h4>
                      <i class="fa-solid fa-circle-info"></i>
                      <span>امكانية تتبع الطلب</span>
                    </h4>
                    <h4>
                      <i class="fa-solid fa-clock-rotate-left"></i>
                      <span>35-25 دقيقة</span>
                    </h4>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pad-10">
                  </div>
                </a>
                <div class="clearfix"></div>
                <a href="{{ route("product.show") }}" class="witchItm">
                  <img src="{{ asset("assets/img/1.png") }}" alt="">
                  <div class="pad-10">
                    <h5>مكسيكيان باكدج</h5> 
                    <h4>
                      <span>4.5</span>
                      <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label class = "full fas fa-star" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" />
                        <label class="half fas fa-star-half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label class = "full fas fa-star" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" />
                        <label class="half fas fa-star-half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label class = "full fas fa-star" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" />
                        <label class="half fas fa-star-half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label class = "full fas fa-star" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" />
                        <label class="half fas fa-star-half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label class = "full fas fa-star" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" />
                        <label class="half fas fa-star-half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                    </h4>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pad-10">
                    <h6>وجبات</h6> 
                    <h4>
                      <i class="fa-solid fa-hand-holding-dollar"></i>
                      <span>35.00 SR</span>
                    </h4>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pad-10">
                    <h6></h6> 
                    <h4>
                      <i class="fa-solid fa-circle-info"></i>
                      <span>امكانية تتبع الطلب</span>
                    </h4>
                    <h4>
                      <i class="fa-solid fa-clock-rotate-left"></i>
                      <span>35-25 دقيقة</span>
                    </h4>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pad-10">
                  </div>
                </a>
                <div class="clearfix"></div>
                <a href="{{ route("product.show") }}" class="witchItm">
                  <img src="{{ asset("assets/img/2.png") }}" alt="">
                  <div class="pad-10">
                    <h5>فاهيتا سورى</h5> 
                    <h4>
                      <span>4.5</span>
                      <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label class = "full fas fa-star" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" />
                        <label class="half fas fa-star-half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label class = "full fas fa-star" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" />
                        <label class="half fas fa-star-half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label class = "full fas fa-star" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" />
                        <label class="half fas fa-star-half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label class = "full fas fa-star" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" />
                        <label class="half fas fa-star-half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label class = "full fas fa-star" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" />
                        <label class="half fas fa-star-half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                    </h4>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pad-10">
                    <h6>وجبات</h6> 
                    <h4>
                      <i class="fa-solid fa-hand-holding-dollar"></i>
                      <span>35.00 SR</span>
                    </h4>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pad-10">
                    <h6></h6> 
                    <h4>
                      <i class="fa-solid fa-circle-info"></i>
                      <span>امكانية تتبع الطلب</span>
                    </h4>
                    <h4>
                      <i class="fa-solid fa-clock-rotate-left"></i>
                      <span>35-25 دقيقة</span>
                    </h4>
                  </div>
                  <div class="clearfix"></div>
                  <div class="pad-10">
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
          </div>

          <div class="tab-pane fade" id="offers" role="tabpanel" aria-labelledby="offers-tab">
            <div class="content col-md-12">
              <a href="{{ route("product.show") }}" class="witchItm">
                <img src="{{ asset("assets/img/1.png") }}" alt="">
                <div class="pad-10">
                  <h5>مكسيكيان باكدج</h5> 
                  <h4>
                    <span>4.5</span>
                    <fieldset class="rating">
                      <input type="radio" id="star5" name="rating" value="5" />
                      <label class = "full fas fa-star" for="star5" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star4half" name="rating" value="4 and a half" />
                      <label class="half fas fa-star-half" for="star4half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star4" name="rating" value="4" />
                      <label class = "full fas fa-star" for="star4" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star3half" name="rating" value="3 and a half" />
                      <label class="half fas fa-star-half" for="star3half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star3" name="rating" value="3" />
                      <label class = "full fas fa-star" for="star3" title="Meh - 3 stars"></label>
                      <input type="radio" id="star2half" name="rating" value="2 and a half" />
                      <label class="half fas fa-star-half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star2" name="rating" value="2" />
                      <label class = "full fas fa-star" for="star2" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star1half" name="rating" value="1 and a half" />
                      <label class="half fas fa-star-half" for="star1half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star1" name="rating" value="1" />
                      <label class = "full fas fa-star" for="star1" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf" name="rating" value="half" />
                      <label class="half fas fa-star-half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6>وجبات</h6> 
                  <h4>
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <span>35.00 SR</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6></h6> 
                  <h4>
                    <i class="fa-solid fa-circle-info"></i>
                    <span>امكانية تتبع الطلب</span>
                  </h4>
                  <h4>
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span>35-25 دقيقة</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                </div>
              </a>
              <div class="clearfix"></div>
              <a href="{{ route("product.show") }}"  class="witchItm">
                <img src="{{ asset("assets/img/2.png") }}" alt="">
                <div class="pad-10">
                  <h5>فاهيتا سورى</h5> 
                  <h4>
                    <span>4.5</span>
                    <fieldset class="rating">
                      <input type="radio" id="star5" name="rating" value="5" />
                      <label class = "full fas fa-star" for="star5" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star4half" name="rating" value="4 and a half" />
                      <label class="half fas fa-star-half" for="star4half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star4" name="rating" value="4" />
                      <label class = "full fas fa-star" for="star4" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star3half" name="rating" value="3 and a half" />
                      <label class="half fas fa-star-half" for="star3half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star3" name="rating" value="3" />
                      <label class = "full fas fa-star" for="star3" title="Meh - 3 stars"></label>
                      <input type="radio" id="star2half" name="rating" value="2 and a half" />
                      <label class="half fas fa-star-half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star2" name="rating" value="2" />
                      <label class = "full fas fa-star" for="star2" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star1half" name="rating" value="1 and a half" />
                      <label class="half fas fa-star-half" for="star1half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star1" name="rating" value="1" />
                      <label class = "full fas fa-star" for="star1" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf" name="rating" value="half" />
                      <label class="half fas fa-star-half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6>وجبات</h6> 
                  <h4>
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <span>35.00 SR</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6></h6> 
                  <h4>
                    <i class="fa-solid fa-circle-info"></i>
                    <span>امكانية تتبع الطلب</span>
                  </h4>
                  <h4>
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span>35-25 دقيقة</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                </div>
              </a>
              <div class="clearfix"></div>
              <a href="{{ route("product.show") }}"  class="witchItm">
                <img src="{{ asset("assets/img/1.png") }}" alt="">
                <div class="pad-10">
                  <h5>مكسيكيان باكدج</h5> 
                  <h4>
                    <span>4.5</span>
                    <fieldset class="rating">
                      <input type="radio" id="star5" name="rating" value="5" />
                      <label class = "full fas fa-star" for="star5" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star4half" name="rating" value="4 and a half" />
                      <label class="half fas fa-star-half" for="star4half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star4" name="rating" value="4" />
                      <label class = "full fas fa-star" for="star4" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star3half" name="rating" value="3 and a half" />
                      <label class="half fas fa-star-half" for="star3half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star3" name="rating" value="3" />
                      <label class = "full fas fa-star" for="star3" title="Meh - 3 stars"></label>
                      <input type="radio" id="star2half" name="rating" value="2 and a half" />
                      <label class="half fas fa-star-half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star2" name="rating" value="2" />
                      <label class = "full fas fa-star" for="star2" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star1half" name="rating" value="1 and a half" />
                      <label class="half fas fa-star-half" for="star1half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star1" name="rating" value="1" />
                      <label class = "full fas fa-star" for="star1" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf" name="rating" value="half" />
                      <label class="half fas fa-star-half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6>وجبات</h6> 
                  <h4>
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <span>35.00 SR</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6></h6> 
                  <h4>
                    <i class="fa-solid fa-circle-info"></i>
                    <span>امكانية تتبع الطلب</span>
                  </h4>
                  <h4>
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span>35-25 دقيقة</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                </div>
              </a>
              <div class="clearfix"></div>
              <a href="{{ route("product.show") }}"  class="witchItm">
                <img src="{{ asset("assets/img/2.png") }}" alt="">
                <div class="pad-10">
                  <h5>فاهيتا سورى</h5> 
                  <h4>
                    <span>4.5</span>
                    <fieldset class="rating">
                      <input type="radio" id="star5" name="rating" value="5" />
                      <label class = "full fas fa-star" for="star5" title="Awesome - 5 stars"></label>
                      <input type="radio" id="star4half" name="rating" value="4 and a half" />
                      <label class="half fas fa-star-half" for="star4half" title="Pretty good - 4.5 stars"></label>
                      <input type="radio" id="star4" name="rating" value="4" />
                      <label class = "full fas fa-star" for="star4" title="Pretty good - 4 stars"></label>
                      <input type="radio" id="star3half" name="rating" value="3 and a half" />
                      <label class="half fas fa-star-half" for="star3half" title="Meh - 3.5 stars"></label>
                      <input type="radio" id="star3" name="rating" value="3" />
                      <label class = "full fas fa-star" for="star3" title="Meh - 3 stars"></label>
                      <input type="radio" id="star2half" name="rating" value="2 and a half" />
                      <label class="half fas fa-star-half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                      <input type="radio" id="star2" name="rating" value="2" />
                      <label class = "full fas fa-star" for="star2" title="Kinda bad - 2 stars"></label>
                      <input type="radio" id="star1half" name="rating" value="1 and a half" />
                      <label class="half fas fa-star-half" for="star1half" title="Meh - 1.5 stars"></label>
                      <input type="radio" id="star1" name="rating" value="1" />
                      <label class = "full fas fa-star" for="star1" title="Sucks big time - 1 star"></label>
                      <input type="radio" id="starhalf" name="rating" value="half" />
                      <label class="half fas fa-star-half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                  </fieldset>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6>وجبات</h6> 
                  <h4>
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <span>35.00 SR</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                  <h6></h6> 
                  <h4>
                    <i class="fa-solid fa-circle-info"></i>
                    <span>امكانية تتبع الطلب</span>
                  </h4>
                  <h4>
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span>35-25 دقيقة</span>
                  </h4>
                </div>
                <div class="clearfix"></div>
                <div class="pad-10">
                </div>
              </a>
              <div class="clearfix"></div>

            </div>
          </div>
        </div>
      </div>

</x-app-layout>