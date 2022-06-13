



<x-dashboard-layout>

    <div class="row">

        <h1 class="mb-5">
            Publish New Type Food
          </h1>


        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Publish New Type Food</h4>
                <form class="forms-sample" action="{{ route('type.create') }}" method="POST" autocomplete="off">
                  @csrf
                  
                  <!-- Session Status -->
                  <x-auth-session-status class="mb-4" :status="session('success')" />
                  <!-- Validation Errors -->
                  <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    
                  <div class="form-group">
                    <label for="exampleInputUsername1">Fullname</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Fullname" name="name" value="{{ old('name') }}">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputUsername2">Slug</label>
                    <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Slug" name="slug" value="{{ old('slug') }}">
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Publish</button>
                </form>
              </div>
            </div>
        </div>
    </div>
  
  </x-dashboard-layout>