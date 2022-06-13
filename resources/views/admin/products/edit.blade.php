

<x-dashboard-layout>

    <div class="row">

      <h1 class="mb-5">
        Edit Food
      </h1>

        <div class="col-md-8 grid-margin stretch-card">

            <div class="card">
              
              <div class="card-body">
                <h4 class="card-title">Edit Food: {{ $food->name }}</h4>
                <form class="forms-sample" action="{{ route('product.update', $food->slug) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                  
                  <!-- Session Status -->
                  <x-auth-session-status class="mb-4" :status="session('success')" />
                  <!-- Validation Errors -->
                  <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
                    
                  <div class="form-group">
                    <label for="exampleInputUsername1">Fullname</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Fullname" name="name" value="{{ $food->name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername2">Slug</label>
                    <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Slug" name="slug" value="{{ $food->slug }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectType">Type</label>
                    <select class="form-control" id="exampleSelectType" name="type_id">
                        @foreach (App\models\Type::all() as $type)
                        <option value="{{ $type->id }}" {{ $food->type->id == $type->id ? 'selected' : ''}}>{{ $type->name }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Descripation</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="5" name="description" >{{ $food->description }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputprice1">Price</label>
                    <input type="text" class="form-control" id="exampleInputprice1" placeholder="Price" name="price" value="{{ $food->price }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputAlias1">Alias</label>
                    <input type="text" class="form-control" id="exampleInputAlias1" placeholder="Alias" name="alias" value="{{ $food->alias }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectDescount">Discount Type</label>
                    <select class="form-control" id="exampleSelectDescount" name="discount_type">
                      <option value="fixed" {{ $food->discount_type == 'fixed' ? 'selected' : '' }}>Fixed</option>
                      <option value="percent" {{ $food->discount_type == 'percent' ? 'selected' : '' }}>Percent</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDescountValue1">Discount Value</label>
                    <input type="text" class="form-control" id="exampleInputDescountValue1" placeholder="Discount value" name="discount_value" value="{{ $food->discount_value }}">
                  </div>
                  <button type="submit" class="btn btn-primary me-2">update</button>
                </form>
              </div>
            </div>
        </div>
    </div>
  
  </x-dashboard-layout>