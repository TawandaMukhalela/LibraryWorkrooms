@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Workrooms</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">My Bookings</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Manage Bookings</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <hr class="hr-primary" />
                <h3 class="">All Avialable Rooms : University of Venda</h3>
                <hr class="hr-primary" />
                <div class="card-deck">
                    @php
                        $items = array(1,2,3,4,5);
                        $count = 0;
                    @endphp
                    @foreach ($items as $item)
                        @php
                        if ($count === 0){
                            echo '<div class="row">';
                            $count = $count + 1;
                        }
                        if ($count<=3) {
                           echo '
                                <div class="card">
                                    <img src="" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>';
                        }else {
                            $count = 0;
                            echo '</div>';
                        }

                        @endphp
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <hr class="hr-primary" />
                <h3 class="">All Bookings : University of Venda</h3>
                <hr class="hr-primary" />
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <hr class="hr-primary" />
                <h3 class="">Manage Your Bookings : University of Venda</h3>
                <hr class="hr-primary" />
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <hr class="hr-primary" />
                <h3 class=""> : University of Venda</h3>
                <hr class="hr-primary" />
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
