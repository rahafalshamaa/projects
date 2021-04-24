@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <form class="form-inline" type="get" action="{{ route('search_action')}}">
                    <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search">
                    <button class="btn btn-secondary" type="submit">Search</button>
                  </form>
                  <form class="form-inline" type="get" action="{{ route('showbydate')}}">
                    <input class="form-control mr-sm-2" name="first_date" type="date" >
                    <input class="form-control mr-sm-2" name="last_date" type="date">
                    <button class="btn btn-secondary" type="submit">Show</button>
                  </form>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary">Sort</button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                    </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('sort_type') }}">type</a>
                      <a class="dropdown-item" href="{{ route('sort_date_desc') }}">Date Desc</a>
                      <a class="dropdown-item" href="{{ route('sort_date_asc') }}">Date Asc</a>

                    </div>
                  </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <center><b>All Actions</b></center><hr>
                        <table class="table table-dark table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Image</th>
                                {{-- <th>control</th> --}}

                              </tr>
                            </thead>
                            <tbody>
                             @foreach ($actions as $action)
                              <tr>
                                <td>{{ $action->id }}</td>
                                <td>{{ $action->action_type }}</td>
                                <td>{{ $action->subject }}</td>
                                <td>{{ $action->date }}</td>
                                <td><img src="{{ asset('upload/actions/' . $action->image )}}" alt="image" width="100px;" height="100px;"> </td>
                                {{-- <td><a href="/action/delete/{{ $action->id }}" class="btn btn-danger">delete</a></td> --}}

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
