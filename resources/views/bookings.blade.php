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
                <form class="was-validated" method="POST" action="/booking/create/{{ $workroom->id }}" >
                    @csrf
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

                                    <div class="mb-3">
                                        <label for="validationTextarea">Booking Reason</label>
                                        <textarea class="form-control is-invalid" name="time_slot" id="validationTextarea" placeholder="Required reason for this booking" required></textarea>
                                        <div class="invalid-feedback">
                                        Please enter a reason for this booking
                                        </div>
                                    </div>

                                    <div class="custom-control custom-switch mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customControlValidation1" name="terms" required>
                                        <label class="custom-control-label" for="customControlValidation1">Terms and Conditions Aggreement</label>
                                        <div class="invalid-feedback">Please agree our terms and conditions</div>
                                        <div class="invalid-feedback">1. You shall not make noise in our facilities. </div>
                                        <div class="invalid-feedback">2. All cell phones shall be switched off at all times.</div>
                                        <div class="invalid-feedback">3. All booking cancellations shall be done 30 minutes prior to approved booking time </div>
                                        <div class="invalid-feedback">4. Should a cancellation be made within the 30 minute window, a penalty fee may apply.</div>
                                    </div>

                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" name="date" required/>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="custom" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>

                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">local_offer</i>
                                    <div class="">
                                        <button type="submit" class="btn btn-group-raised btn-rose"> Book Room</button>
                                        <button type="reset" class="btn btn-group-raised btn-rose"> Clear Form</button>
                                    </div>
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
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
 $(function () {
   var bindDatePicker = function() {
		$(".date").datetimepicker({
        format:'YYYY-MM-DD',
			icons: {
				time: "fa fa-clock-o",
				date: "fa fa-calendar",
				up: "fa fa-arrow-up",
				down: "fa fa-arrow-down"
			}
		}).find('input:first').on("blur",function () {
			// check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
			// update the format if it's yyyy-mm-dd
			var date = parseDate($(this).val());

			if (! isValidDate(date)) {
				//create date based on momentjs (we have that)
				date = moment().format('YYYY-MM-DD');
			}

			$(this).val(date);
		});
	}

   var isValidDate = function(value, format) {
		format = format || false;
		// lets parse the date to the best of our knowledge
		if (format) {
			value = parseDate(value);
		}

		var timestamp = Date.parse(value);

		return isNaN(timestamp) == false;
   }

   var parseDate = function(value) {
		var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
		if (m)
			value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

		return value;
   }

   bindDatePicker();
 });
</script>
@endsection

