@extends('layout')

@section('content')
    <div class="container">
        <div class="heading">
            <h1>PRODUCT PDF</h1>
            <div class="wrapper">
                <table>
                    <thead>
                        <tr>
                            <td>BRAND</td>
                            <td>MODEL</td>
                            <td>TYPE</td>
                            <td>COLOR</td>
                            <td>PRICE</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keyboards as $k)
                        <tr>
                            <img src="data:image/png;base64,{{ base64_encode(QrCode::size(50)->generate($k->id)) }}" alt="QR Code">
                            <td>{{$k->brand}}</td>
                            <td>{{$k->model}}</td>
                            <td>{{$k->type}}</td>
                            <td>{{$k->color}}</td>
                            <td>{{$k->price}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection