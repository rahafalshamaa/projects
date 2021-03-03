@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Add Action</b></center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('action-store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="action_type">action type:</label>
                          <input type="text" class="form-control" placeholder="Enter action type" name="action_type" >
                        </div>
                        <div class="form-group">
                            <label for="subject">subject:</label>
                            <textarea class="form-control" name="subject"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="date">date:</label>
                            <input type="date" class="form-control" placeholder="Enter date" name="date" >
                        </div>
                        <div class="form-group">
                            <label for="customers_id">customers:</label>
                            <select class="form-control" name="customers_id">
                                @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}"> {{ $customer->first_name }} </option>

                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Add</button>

                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
