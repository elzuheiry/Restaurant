



<x-dashboard-layout>

    <div class="row">

        <h1 class="mb-5">
            All Types
        </h1>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

                <h4 class="card-title">All types</h4>

                <div class="table-responsive">

                    @if ($types->count())
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>NUMBER</th>
                            <th>NAME</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
    
                            @foreach ($types as $index => $type)
                                <tr>
                                    <td class="py-1">{{ $index + 1 }}</td>
                                    <td>
                                        {{ $type->name }}
                                    </td>
                                    <td>
                                        <a href="{{ route('type.edit', $type->slug) }}" class="btn btn-dark btn-icon-text">
                                            Edit
                                            <i class="ti-file btn-icon-append"></i>  
                                        </a>

                                        <form action="{{ route('type.destroy', $type->slug) }}" style="display: inline-block" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-icon-text">
                                                <i class="ti-file btn-icon-prepend"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
    
                        </tbody>
                    </table>

                    {{ $types->links() }}
                    @else
                        <h4>No types now, please checked later</h4>
                    @endif
                  
                </div>
              </div>
            </div>
          </div>
    </div>

</x-dashboard-layout>