@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Add Customer</b></center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form  action="{{ route('customer_store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="first_name">first name:</label>
                          <input type="text" class="form-control" placeholder="Enter first name" name="first_name" >

                        </div>
                        <div class="form-group">
                            <label for="last_name">last name:</label>
                            <input type="text" class="form-control" placeholder="Enter last name" name="last_name" >
                          </div>
                          <div class="form-group">
                            <label for="company_name">company name:</label>
                            <input type="text" class="form-control" placeholder="Enter company name" name="company_name">
                          </div>
                          <div class="form-group">
                            <label for="Work_financier">Work financier:</label>
                            <input type="text" class="form-control" placeholder="Enter Work financier" name="Work_financier" >
                          </div>
                          <div class="form-group">
                            <label for="mobile">mobile:</label>
                            <input type="text" class="form-control" placeholder="Enter mobile" name="mobile" >
                          </div>
                          <div class="form-group">
                            <label for="phone">phone:</label>
                            <input type="text" class="form-control" placeholder="Enter phone" name="phone">
                          </div>
                          <div class="form-group">
                            <label for="city">city:</label>
                            <input type="text" class="form-control" placeholder="Enter city" name="city" >
                          </div>
                          <div class="form-group">
                            <label for="country">country:</label>
                            <input type="text" class="form-control" placeholder="Enter country" name="country">
                          </div>
                          <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control"  id="image" name="image">
                          </div>
                          <div class="form-group">
                            <label for="whatsapp">whatsapp:</label>
                            <input type="text" class="form-control" placeholder="Enter whatsapp" name="whatsapp">
                          </div>
                          <div class="form-group">
                            <label for="web">web:</label>
                            <input type="text" class="form-control" placeholder="Enter web" name="web">
                          </div>
                          <div class="form-group">
                            <label for="facebook">facebook:</label>
                            <input type="text" class="form-control" placeholder="Enter facebook" name="facebook" >
                          </div>


                        <button type="submit" class="btn btn-success">Add</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
