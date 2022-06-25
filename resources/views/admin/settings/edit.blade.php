

<x-dashboard-layout>

    <div class="row">
  
      <h1 class="mb-5">
        Edit The Setting
      </h1>
  
      <div class="col-md-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit The Setting</h4>
              <form class="forms-sample" action="{{ route('setting.update') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('success')" />
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                  
                <div class="form-group">
                  <label for="exampleInputUsername1">Site Name</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Site Name" name="site_name" value="{{ old('site_name', $site_name) }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputUsername2">The Tax</label>
                  <input type="text" class="form-control" id="exampleInputUsername2" placeholder="The Tax" name="the_tax" value="{{ old('the_tax', $the_tax) }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputprice1">Delivery Price</label>
                  <input type="text" class="form-control" step="0.01" id="exampleInputprice1" placeholder="Delivery Price" name="delivery_price" value="{{ old('delivery_price', $delivery_price) }}">
                </div>

                <button type="submit" class="btn btn-primary me-2">Update</button>
              </form>
            </div>
          </div>
      </div>
    </div>
  
  </x-dashboard-layout>