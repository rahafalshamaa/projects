@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>{{ $customer->first_name }} Profile</center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card">
                        <center><img src="{{ asset('upload/customers/' . $customer->image )}}" alt="image" style="width:35%"><hr>

                        <h2><b>First name:</b>{{ $customer->first_name }}</h2>
                        <h2><b>Last name:</b>{{ $customer->last_name }}</h2>
                        <h2><b>Company name:</b>{{ $customer->company_name }}</h2>
                        <h2><b>Work financier:</b>{{ $customer->Work_financier }}</h2>
                        <h2><b>Mobile:</b>{{ $customer->mobile }}</h2>
                        <h2><b>Phone:</b>{{ $customer->phone }}</h2>
                        <h2><b>City:</b>{{ $customer->city }}</h2>
                        <h2><b>Country:</b>{{ $customer->country }}</h2>
                        <h2><b>Whatsapp:</b>{{ $customer->whatsapp }}</h2>
                        <h2><b>Web:</b>{{ $customer->web }}</h3>
                        <h2><b>Facebook:</b>{{ $customer->facebook }}</h2>

                        <p><button>Contact</button></p>
                    </center>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



{{--
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <img src="/w3images/team2.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
  </div>
  <p><button>Contact</button></p>
</div>

</body>
</html> --}}
