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
                                    <i class="material-icons">today</i> Room Booking
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
                                </thead>
                                <tbody>

                                    {{-- @foreach ($workrooms as $workroom) --}}
                                        <tr>
                                            <td class="text-center">{{ $workroom->id }}</td>
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

                                        </tr>
                                    {{-- @endforeach --}}

                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <form class="was-validated" method="POST" action="/booking/create/{{ $workroom->id }}" >
                    @csrf
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                        <div class="card">
                            <div class="card-header card-header-rose">
                            <h4 class="card-title">Edit Profile</h4>
                            <p class="card-category">Complete your profile</p>
                            </div>
                            <div class="card-body">
                            <form>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" for="exampleFormControlSelect2">Available Times</label>
                                        <select class="form-control" id="exampleFormControlSelect2" required>
                                            {{ $bookings = App\Booking::all()}}
                                            <?php $slots = ['01-02', '02-03','03-04','04-05','05-06','06-07','07-08','08-09','09-10','10-11','11-12','12-13','13-14','14-15','15-16'
                                                        , '16-17', '17-18','18-19','19-20','20-21','21-22','22-23','23-00','00-01'
                                                        ]

                                            ?>
                                            <option>{{ $slots[2] }}</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="bmd-label-floating">Fist Name</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="bmd-label-floating">Last Name</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label class="bmd-label-floating">Adress</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="bmd-label-floating">City</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="bmd-label-floating">Country</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="bmd-label-floating">Postal Code</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label>About Me</label>
                                    <div class="form-group">
                                        <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <button class="btn pull-left" onclick="window.history.back()">Back</button>
                                <button type="submit" class="btn btn-rose pull-right">Book Room</button>
                                <div class="clearfix"></div>
                            </form>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="/img/new_logo.png" />
                            </a>
                            </div>
                            <div class="card-body">
                            <h6 class="card-category text-gray">Logged In User</h6>
                            <h4 class="card-title">{{ Auth::user()->name }}</h4>
                            <p class="card-description">
                                Hi <strong>{{ Auth::user()->name }}</strong> please make sure you fill in all the manadatory fields to secure your booking successfully
                            </p>
                            {{-- <a href="#pablo" class="btn btn-primary btn-round"></a> --}}
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

