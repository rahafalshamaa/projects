@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>All Customers</b></center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>first name</th>
                                <th>last name</th>
                                <th>control</th>
                              </tr>
                            </thead>
                            <tbody>
                             @foreach ($customers as $customer)
                              <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->first_name }}</td>
                                <td>{{ $customer->last_name }}</td>
                                <td>
                                <a href="/customer/edit/{{ $customer->id }}" class="btn btn-info">Edit</a>
                                <a href="/customer/delete/{{ $customer->id }}" class="btn btn-danger">delete</a>
                                <a href="/customer/profile/{{ $customer->id }}" class="btn btn-primary">Your profile</a>
                                <a href="/customer/all_action/{{ $customer->id }}" class="btn btn-warning">All Actions</a>
                                </td>
                              </tr>
                              @endforeach

                            </tbody>
                          </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
