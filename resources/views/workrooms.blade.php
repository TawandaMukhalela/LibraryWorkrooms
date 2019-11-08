@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
            <div class="card-header card-header-tabs card-header-rose">
                <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <span class="nav-tabs-title"> </span>
                    <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#workrooms" data-toggle="tab">
                        <i class="material-icons">home</i> Workrooms
                        <div class="ripple-container"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#bookings" data-toggle="tab">
                        <i class="material-icons">code</i> My Bookings
                        <div class="ripple-container"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#allbookings" data-toggle="tab">
                        <i class="material-icons">cloud</i> Server
                        <div class="ripple-container"></div>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active table-responsive" id="workrooms">
                        <table class="table table-hover">
                            <thead class="text-rose text-center">
                                <th>Room Number</th>
                                <th>Category</th>
                                <th>RoomLocation</th>
                                <th >Capacity</th>
                                <th>Room Availability</th>
                                <th></th>
                            </thead>
                            <tbody>

                                @foreach ($workrooms as $workroom)
                                    <tr>
                                        <td>{{ $workroom->id }}</td>
                                        <td class="text-center">{{ $workroom->category }}</td>
                                        <td>{!! $workroom->address !!}</td>
                                        <td class="text-center">{{ $workroom->capacity }}</td>
                                        <td class="text-center">
                                        @if ($workroom->is_available == 1)
                                            {{ 'Available' }}
                                        @else
                                            {{ 'Un-Available' }}
                                        @endif
                                        </td>
                                        <td>
                                        @if ($workroom->is_available == 1)
                                        <a href="/workrooms/book/{{ $workroom->id }}" class="btn btn-raised btn-outline-info">Reserve Room</a>
                                        @endif
                                            <a data-whatever="{{ $workroom->id }}" class="btn btn-raised btn-outline-danger" data-toggle="modal" data-target="#slots_modal">View Slots</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot class="text-center">
                                <th>Room Number</th>
                                <th>Room Category</th>
                                <th>Room Location</th>
                                <th >Capacity</th>
                                <th>Room Availability</th>
                                <th></th>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane active" id="bookings">

                    </div>
                    <div class="tab-pane active" id="allbookings">

                    </div>
                </div>
            </div>
            </div>
        </div>
</div>

<div class="modal fade" id="slots_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection
