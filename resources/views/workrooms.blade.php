@extends('layouts.app')
@section('content')
<div class="container">
    <div class="">
        <h3 class="">All Avialable Rooms : University of Venda</h3>
        <hr class="hr-danger" />
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <img class="img img-thumbnail rounded" src="img/workrooms.jpg" alt="Card Image">
                    </th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img class="img img-thumbnail rounded" src="img/workrooms.jpg" alt="Card Image">
                    </th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img class="img img-thumbnail rounded" src="img/workrooms.jpg" alt="Card Image">
                    </th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

@endsection
