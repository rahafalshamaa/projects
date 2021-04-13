@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>All Actions</b></center></div>

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
                                <th>Action Type</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Image</th>

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
