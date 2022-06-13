





<x-dashboard-layout>

    <div class="row">

        <h1 class="mb-5">
            Edit Type Food
          </h1>


        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Type Food: {{ $type->slug }}</h4>
                <form class="forms-sample" action="{{ route('type.update', $type->slug) }}" method="POST" autocomplete="off">
                  @csrf
                  @method("PATCH")
                  
                  <!-- Session Status -->
                  <x-auth-session-status class="mb-4" :status="session('success')" />
                  <!-- Validation Errors -->
                  <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    
                  <div class="form-group">
                    <label for="exampleInputUsername1">Fullname</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Fullname" name="name" value="{{ $type->name }}">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputUsername2">Slug</label>
                    <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Slug" name="slug" value="{{ $type->slug }}">
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Update</button>
                </form>
              </div>
            </div>
        </div>
    </div>
  
  </x-dashboard-layout>