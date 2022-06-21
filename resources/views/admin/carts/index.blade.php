


<x-dashboard-layout>

    <div class="row">

        <h1 class="mb-5">
            All Carts
        </h1>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

                <h4 class="card-title">All Carts</h4>

                <div class="table-responsive">

                    @if ($carts->count())
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>NUMBER</th>
                            <th>USER NAME</th>
                            <th>FOOD NAME</th>
                            <th>ADDITIONS</th>
                            <th>NOTES</th>
                            <th>SIZE</th>
                            <th>QUANTITY</th>
                          </tr>
                        </thead>
                        <tbody>
    
                            @foreach ($carts as $cart)
                                <tr>
                                    <td class="py-1">{{ $cart->id }}</td>
                                    <td>
                                        {{ $cart->client->name }}
                                    </td>
                                    <td>
                                        {{ $cart->food->name }}
                                    </td>
                                    <td>
                                        {{ $cart->additions }}
                                    </td>
                                    <td>
                                        {{ $cart->notes }}
                                    </td>
                                    <td>
                                        {{ $cart->sizes }}
                                    </td>
                                    <td>
                                        {{ $cart->quantity }}
                                    </td>
                                </tr>
                            @endforeach
    
                        </tbody>
                    </table>

                    {{ $carts->links() }}
                    @else
                        <h4>No carts now, please checked later</h4>
                    @endif
                  
                </div>
              </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>