@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Edit Customer</b></center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="first_name">first name:</label>
                          <input type="text" class="form-control" placeholder="Enter first name" name="first_name" value="{{ $customer->first_name }}">
                        </div>
                        <div class="form-group">
                            <label for="last_name">last name:</label>
                            <input type="text" class="form-control" placeholder="Enter last name" name="last_name" value="{{ $customer->last_name }}">
                          </div>
                          <div class="form-group">
                            <label for="company_name">company name:</label>
                            <input type="text" class="form-control" placeholder="Enter company name" name="company_name" value="{{ $customer->company_name }}">
                          </div>
                          <div class="form-group">
                            <label for="Work_financier">Work financier:</label>
                            <input type="text" class="form-control" placeholder="Enter Work financier" name="Work_financier" value="{{ $customer->Work_financier }}">
                          </div>
                          <div class="form-group">
                            <label for="mobile">mobile:</label>
                            <input type="text" class="form-control" placeholder="Enter mobile" name="mobile" value="{{ $customer->mobile }}">
                          </div>
                          <div class="form-group">
                            <label for="phone">phone:</label>
                            <input type="text" class="form-control" placeholder="Enter phone" name="phone" value="{{ $customer->phone }}">
                          </div>
                          <div class="form-group">
                            <label for="city">city:</label>
                            <input type="text" class="form-control" placeholder="Enter city" name="city" value="{{ $customer->city }}">
                          </div>
                          <div class="form-group">
                            <label for="country">country:</label>
                            <input type="text" class="form-control" placeholder="Enter country" name="country" value="{{ $customer->country }}">
                          </div>
                          <div class="form-group">
                            <label for="whatsapp">whatsapp:</label>
                            <input type="text" class="form-control" placeholder="Enter whatsapp" name="whatsapp" value="{{ $customer->whatsapp }}">
                          </div>
                          <div class="form-group">
                            <label for="web">web:</label>
                            <input type="text" class="form-control" placeholder="Enter web" name="web" value="{{ $customer->web }}">
                          </div>
                          <div class="form-group">
                            <label for="facebook">facebook:</label>
                            <input type="text" class="form-control" placeholder="Enter facebook" name="facebook" value="{{ $customer->facebook }}" >
                          </div>


                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
