@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <form class="form-inline" type="get" action="{{ route('search_customer') }}">
                    <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search">
                        <button class="btn btn-secondary" type="submit">Search</button>
                      </form>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group">
                       <center> <b>All Customers</b></center><hr>
                        <table class="table table-dark table-striped">
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
                                <a href="{{ route('edit_customer' , $customer->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('delete_customer' , $customer->id) }}" class="btn btn-danger">delete</a>
                                <a href="{{ route('profile_customer' , $customer->id) }}" class="btn btn-primary">Your profile</a>
                                <a href="{{ route('all_actions' , $customer->id) }}" class="btn btn-warning">All Actions</a>
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
