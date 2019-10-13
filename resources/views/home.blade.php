@extends('layouts.app')

@section('content')
<div class="container">
            <!--<div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @//if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {/{ session('status') }}
                        </div>
                    @//endif

                    You are logged in!
                </div>
            </div>-->

<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card">
      <img class="card-img-top" src="img/workrooms.jpg" alt="Card Image">
      <div class="card-body">
        <h4 class="card-title">Room Booking Made Easy</h4>
        <ul class="list-group list-group-flush card-text">
          <li class="list-group-item">Instantly tell if a workroom is available or occupied in the Library</li>
          <li class="list-group-item">No more "stolen" rooms, disrupted study or empty rooms due to no-shows</li>
          <li class="list-group-item">Easy and Fast</li>
        </ul>
        <a href="/workrooms" class="btn btn-rose">Book a Workroom</a>
      </div>
      <div class="card-footer">
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card">
      <img class="card-img-top" src="img/easy-view.webp" alt="Card Image">
      <div class="card-body">
        <h4 class="card-title">Unbeatable Workroom Overview</h4>
        <ul class="list-group list-group-flush card-text">
          <li class="list-group-item">Overview of the entire Library and available workrooms</li>
          <li class="list-group-item">Book a room right away on your device, with clear pictures of what you are booking.</li>
          <li class="list-group-item">View and Only book what fits your purpose!</li>
        </ul>
        <a href="#" class="btn btn-rose">View our Workrooms</a>
      </div>
      <div class="card-footer">
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card">
      <img class="card-img-top" src="img/online-booking.webp" alt="Card Image">
      <div class="card-body">
        <h4 class="card-title">Mobile Booking On The Go</h4>
        <ul class="list-group list-group-flush card-text">
          <li class="list-group-item">Schedule meetings and study rooms on your phone from anywhere</li>
          <li class="list-group-item">No more searching the Library for available rooms</li>
          <li class="list-group-item">Complete overview of free meeting rooms.</li>
        </ul>
        <a href="#" class="btn btn-rose">Download Workroom App</a>
      </div>
      <div class="card-footer">
      </div>
    </div>
  </div>
</div>
</div>



@endsection
