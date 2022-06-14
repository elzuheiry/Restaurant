

<x-app-layout>

    <div class="centralize">
        <div class="topBar">
            <h4>قاىمة الطعام</h4>
            <button class="openbtn">☰</button>
        </div>
       <div class="col-md-12 mnuImg">
         <img src="{{ asset('assets/img/menu.jpg') }}" alt="">
       </div>
        
        <!-- tabs -->
        <div class="tabBar">
          <div class="categories-list-container">
            <ul class="nav nav-tabs" id="mainTB2" role="tablist">
              <li class="srchMnu nav-item">
                <button type="button" class="nav-link" data-toggle="modal" data-target="#srchModl">
                  <i class="fas fa-search"></i>
                </button>
  
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="type1-tab" data-toggle="tab" href="#type1" role="tab" aria-controls="type1" aria-selected="true">burger</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="type2-tab" data-toggle="tab" href="#type2" role="tab" aria-controls="type2" aria-selected="false">fries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="type3-tab" data-toggle="tab" href="#type3" role="tab" aria-controls="type3" aria-selected="false">sides</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="type4-tab" data-toggle="tab" href="#type4" role="tab" aria-controls="type4" aria-selected="false">sause</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="type4-tab" data-toggle="tab" href="#type4" role="tab" aria-controls="type4" aria-selected="false">sause</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="type4-tab" data-toggle="tab" href="#type4" role="tab" aria-controls="type4" aria-selected="false">sause</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="type4-tab" data-toggle="tab" href="#type4" role="tab" aria-controls="type4" aria-selected="false">sause</a>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="mainTB2Content">
            <div class="tab-pane fade show active" id="type1" role="tabpanel" aria-labelledby="type1-tab">
              <div class="content">
                <div class="menu-list col-md-12 row">
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="type2" role="tabpanel" aria-labelledby="type2-tab">
              <div class="content">
                <div class="menu-list col-md-12 row">
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/3.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش بطاطس</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/3.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش بطاطس</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/2.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="type3" role="tabpanel" aria-labelledby="type3-tab">
              <div class="content">
                <div class="menu-list col-md-12 row">
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/2.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/2.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="type4" role="tabpanel" aria-labelledby="type4-tab">
              <div class="content">
                <div class="menu-list col-md-12 row">
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/4.jpg') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>صوص1</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/5.jpg') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>صوص 2</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/2.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                      <img src="{{ asset('assets/img/1.png') }}" alt="">
                      <div class="clearfix"></div>
                      <div class="menu-product-content">
                        <p>سندوتش برجر</p>
                        <div class="d-flex">
                          <h5>22 ر.س</h5>
                          <h6>NEW</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
              <!-- srchModl -->
              <div class="modal fade" id="srchModl" tabindex="-1" role="dialog" aria-labelledby="srchModlLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">search</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="">
                        <input type="search" name="" id="">
                      </form>
                      <div class="content">
                      <h6 class="menuTit">الساندوتشات</h6>
                        <div class="menu-list col-md-12 row">
                          <div class="col-md-6">
                            <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                              <img src="{{ asset('assets/img/1.png') }}" alt="">
                              <div class="clearfix"></div>
                              <div class="menu-product-content">
                                <p>سندوتش برجر</p>
                                <div class="d-flex">
                                  <h5>22 ر.س</h5>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-md-6">
                            <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                              <img src="{{ asset('assets/img/1.png') }}" alt="">
                              <div class="clearfix"></div>
                              <div class="menu-product-content">
                                <p>سندوتش برجر</p>
                                <div class="d-flex">
                                  <h5>22 ر.س</h5>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-md-6">
                            <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                              <img src="{{ asset('assets/img/1.png') }}" alt="">
                              <div class="clearfix"></div>
                              <div class="menu-product-content">
                                <p>سندوتش برجر</p>
                                <div class="d-flex">
                                  <h5>22 ر.س</h5>
                                  <h6>NEW</h6>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-md-6">
                            <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                              <img src="{{ asset('assets/img/1.png') }}" alt="">
                              <div class="clearfix"></div>
                              <div class="menu-product-content">
                                <p>سندوتش برجر</p>
                                <div class="d-flex">
                                  <h5>22 ر.س</h5>
                                  <h6>NEW</h6>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-md-6">
                            <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                              <img src="{{ asset('assets/img/1.png') }}" alt="">
                              <div class="clearfix"></div>
                              <div class="menu-product-content">
                                <p>سندوتش برجر</p>
                                <div class="d-flex">
                                  <h5>22 ر.س</h5>
                                  <h6>NEW</h6>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      <h6 class="menuTit">البطاطس</h6>
                        <div class="menu-list col-md-12 row">
                          <div class="col-md-6">
                            <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                              <img src="{{ asset('assets/img/3.png') }}" alt="">
                              <div class="clearfix"></div>
                              <div class="menu-product-content">
                                <p>سندوتش بطاطس</p>
                                <div class="d-flex">
                                  <h5>22 ر.س</h5>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-md-6">
                            <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                              <img src="{{ asset('assets/img/3.png') }}" alt="">
                              <div class="clearfix"></div>
                              <div class="menu-product-content">
                                <p>سندوتش بطاطس</p>
                                <div class="d-flex">
                                  <h5>22 ر.س</h5>
                                  <h6>NEW</h6>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-md-6">
                            <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                              <img src="{{ asset('assets/img/1.png') }}" alt="">
                              <div class="clearfix"></div>
                              <div class="menu-product-content">
                                <p>سندوتش برجر</p>
                                <div class="d-flex">
                                  <h5>22 ر.س</h5>
                                  <h6>NEW</h6>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-md-6">
                            <a class="menu-product card " data-aos="zoom-in" data-aos-offset="80"type="button" class="nav-link" data-toggle="modal" data-target="#proModl">
                              <img src="{{ asset('assets/img/2.png') }}" alt="">
                              <div class="clearfix"></div>
                              <div class="menu-product-content">
                                <p>سندوتش برجر</p>
                                <div class="d-flex">
                                  <h5>22 ر.س</h5>
                                  <h6>NEW</h6>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              
              <!-- proModl -->
              <div class="modal fade" id="proModl" tabindex="-1" role="dialog" aria-labelledby="proModlLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="prod">
                        <img src="{{ asset('assets/img/2.png') }}" alt="...">
                        <div class="">
                            <h5 class="mt-0">ساندوتش سورى فاهيتا</h5>
                            <p>
                          ساندوتش سورى فاهيتا ساندوتش سورى فاهيتا ساندوتش سور فاهيتا 
                            </p>
                            <div class="accordion proAccord" id="proAccord">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="fa-solid fa-angles-down"></i> الحجم
                                    </button>
                                  </h2>
                                </div>
                            
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#proAccord">
                                  <div class="card-body">
                                    <div class="chkItm">
                                        <label class="radioCont">
                                        <input type="radio" checked="checked" name="rad1">
                                        <span class="checkmark"></span>
                                        </label>
                                        <h5>small</h5>
                                    </div>
                                    <div class="chkItm">
                                        <label class="radioCont">
                                        <input type="radio" name="rad1">
                                        <span class="checkmark"></span>
                                    </label>
                                    <h5>medium</h5>
                                    </div>
                                    <div class="chkItm">
                                        <label class="radioCont">
                                        <input type="radio" name="rad1">
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
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa-solid fa-angles-down"></i> 
                                     الاضافات
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#proAccord">
                                  <div class="card-body">
                                   
                                    <div class="chkItm">
                                      <label class="radioCont">
                                      <input type="radio" checked="checked" name="radsauce">
                                      <span class="checkmark"></span>
                                      </label>
                                      <h5>صوص التارتار</h5>
                                  </div>
                                  <div class="chkItm">
                                      <label class="radioCont">
                                      <input type="radio" name="radsauce">
                                      <span class="checkmark"></span>
                                  </label>
                                  <h5>صوص رانش  </h5>
                                  </div>
                                  <div class="chkItm">
                                      <label class="radioCont">
                                      <input type="radio" name="radsauce">
                                      <span class="checkmark"></span>
                                  </label>
                                  <h5>صوص الخلطة التركية</h5>
                                  </div>
                                  
                                  <div class="chkItm">
                                    <label class="radioCont">
                                    <input type="radio" name="radsauce">
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
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa-solid fa-angles-down"></i>
                                     ملاحظات
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#proAccord">
                                  <div class="card-body">
                                    <div class="chkItm">
                                      <label class="radioCont">
                                      <input type="radio" checked="checked" name="nots">
                                      <span class="checkmark"></span>
                                      </label>
                                      <h5>حار</h5>
                                  </div>
                                  <div class="chkItm">
                                      <label class="radioCont">
                                      <input type="radio" name="nots">
                                      <span class="checkmark"></span>
                                  </label>
                                  <h5>عادى  </h5>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
            
                            <div class="inc_dec">
                                <div class="button-container">
                                    <button class="cart-qty-plus" type="button" value="+">+</button>
                                </div>
                                <input type="text" name="qty" class="qty" maxlength="12" value="0" class="input-text qty" />
                                <div class="button-container">
                                    <button class="cart-qty-minus" type="button" value="-">-</button>
                                </div>
                            </div>
                        </div>
                  </div>
            
                    <!-- Button trigger modal -->
                  <button type="button" class="btn grBtn" data-toggle="modal" data-target="#notify1">
                    اطلب الان
                  </button> 
                    </div>
                  </div>
                </div>
              </div>
        </div>
  
        
      </div>

</x-app-layout>