

<x-dashboard-layout>

    <div class="row">
        <div class="col-sm-12">
          <div class="home-tab">
            <div class="tab-content tab-content-basic">
              <div
                class="tab-pane fade show active"
                id="overview"
                role="tabpanel"
                aria-labelledby="overview"
              >
                <div class="row">
                  <div class="col-sm-12">
                    <div
                      class="statistics-details d-flex align-items-center justify-content-between"
                    >
                      <div>
                        <p class="statistics-title">All Foods</p>
                        <h3 class="rate-percentage">{{ App\models\Food::count() }}</h3>
                      </div>

                      <div class="d-none d-md-block">
                        <p class="statistics-title">All Orders</p>
                        <h3 class="rate-percentage">{{ App\models\Order::count() }}</h3>
                      </div>

                      <div class="d-none d-md-block">
                        <p class="statistics-title">All Carts</p>
                        <h3 class="rate-percentage">{{ App\models\Cart::count() }}</h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">

                    

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

</x-dashboard-layout>