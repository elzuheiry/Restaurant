

<x-dashboard-layout>

    <div class="row">

        <h1 class="mb-5">
            All Foods
        </h1>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

                <h4 class="card-title">All Foods</h4>

                <div class="table-responsive">

                    @if ($foods->count())
                    <table class="table table-striped" id="datatable">
                        <thead>
                          <tr>
                            <th>NUMBER</th>
                            <th>TITLE</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($foods as $index => $food)
                          <tr>
                              <td class="py-1">{{ $index + 1 }}</td>
                              <td>
                                  <a href="{{ route('product.edit', $food->slug) }}">{{ $food->name }}</a>
                              </td>
                              <td>
                                  <a href="{{ route('product.edit', $food->slug) }}" class="btn btn-dark btn-icon-text">
                                    Edit
                                    <i class="ti-file btn-icon-append"></i>  
                                  </a>

                                  <form action="{{ route('product.destroy', $food->slug) }}" style="display: inline-block" method="POST">
                                      @csrf
                                      @method('DELETE')

                                      <button food="submit" class="btn btn-danger btn-icon-text">
                                          <i class="ti-file btn-icon-prepend"></i>
                                          Delete
                                      </button>
                                  </form>
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>

                    {{ $foods->links() }}

                    @else
                        <h4>No foods now, please checked later</h4>
                    @endif
                </div>
              </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>