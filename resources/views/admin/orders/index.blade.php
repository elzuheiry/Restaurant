

<x-dashboard-layout>

    <div class="row">

        <h1 class="mb-5">
            All Orders
        </h1>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

                <h4 class="card-title">All Orders</h4>

                <div class="table-responsive">

                    @if ($orders->count())
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>NUMBER</th>
                            <th>NAME</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
    
                            @foreach ($orders as $order)
                                <tr>
                                    <td class="py-1">{{ $order->id }}</td>
                                    <td>
                                        {{ $order->client->name }}
                                    </td>
                                    <td>
                                        {{ $order->order_status }}
                                    </td>
                                    <td>
                                        <form action="{{ route('order.edit', $order->id) }}" style="display: inline-block" method="POST">
                                            @csrf
                                            @method('PATCH')

                                            <button order="submit" class="btn btn-danger btn-icon-text">
                                                <i class="ti-file btn-icon-prepend"></i>
                                                Edit Status
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
    
                        </tbody>
                    </table>

                    {{ $orders->links() }}
                    @else
                        <h4>No Orders now, please checked later</h4>
                    @endif
                  
                </div>
              </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>