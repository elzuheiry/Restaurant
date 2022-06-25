

<x-dashboard-layout>

    <div class="row">

        <h1 class="mb-5">
            The Settings
        </h1>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

                <h4 class="card-title">The Settings</h4>

                <div class="table-responsive">

                    <table class="table table-striped" id="datatable">
                        <thead>
                          <tr>
                            <th>NAME</th>
                            <th>THE TAX</th>
                            <th>DELIVERY PRICE</th>
                            <th>ACTIVE</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td class="py-1">{{ $site_name }}</td>
                              <td>{{ $the_tax }}</td>
                              <td>{{ $delivery_price }}</td>
                              <td>{{ $site_active }}</td>
                              <td>
                                <a href="{{ route('setting.edit') }}" class="btn btn-dark btn-icon-text">
                                  Edit
                                  <i class="ti-file btn-icon-append"></i>  
                                </a>
                              </td>
                          </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>