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
                                    <i class="material-icons">today</i>
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
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card card-stats">
                            <div class="card-header card-header-danger card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <p class="card-category">Fill in you desired Booking Condtraints</p>
                                <h3 class="card-title">Booking  information</h3>
                            </div>
                            <div class="card-body">
                                <form class="was-validated">
                                    <div class="mb-3">
                                        <label for="validationTextarea">Textarea</label>
                                        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                                        <div class="invalid-feedback">
                                        Please enter a message in the textarea.
                                        </div>
                                    </div>

                                    <div class="custom-control custom-switch mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                        <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                                        <div class="invalid-feedback">Example invalid feedback text</div>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                        <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                        <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                                        <div class="invalid-feedback">More example invalid feedback text</div>
                                    </div>

                                    <div class="form-group">
                                        <select class="custom-select" required>
                                        <option value="">Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        </select>
                                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                    </form>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">local_offer</i> Tracked from Github
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card card-stats">
                            <div class="card-header card-header-danger card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <p class="card-category">Fill in you desired Booking Condtraints</p>
                                <h3 class="card-title">Booking  information</h3>
                            </div>
                            <div class="card-body">

                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">local_offer</i> Tracked from Github
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

