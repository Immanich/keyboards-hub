@extends('layout')

@section('content')
    <div class="container bg-gray-200 w-full max-w-full h-max p-8">
        <div class="heading">
            <div class="wrapper px-32 py-16 flex content-center justify-center">
                <table class="w-1/2">
                    <thead class="w-1/4">
                        <tr class="border border-black border-solid">
                            <td class="p-2 w-2/5">BRAND</td>
                            <td class="p-2 border-black border">{{ $keyboards->brand }}</td>
                        </tr>
                        <tr class="border border-black border-solid">
                            <td class="p-2 w-2/5">MODEL</td>
                            <td class="p-2 border-black border">{{ $keyboards->model }}</td>
                        </tr>
                        <tr class="border border-black border-solid">
                            <td class="p-2 w-2/5">TYPE</td>
                            <td class="p-2 border-black border">{{ $keyboards->type }}</td>
                        </tr>
                        <tr class="border border-black border-solid">
                            <td class="p-2 w-2/5">COLOR</td>
                            <td class="p-2 border-black border">{{ $keyboards->color }}</td>
                        </tr>
                        <tr class="border border-black border-solid">
                            <td class="p-2 w-2/5">PRICE</td>
                            <td class="p-2 border-black border">₱{{ number_format($keyboards->price, 2) }}</td>
                        </tr>
                        <tr class="border border-black border-solid">
                            <td class="p-2 w-2/5">QRCODE</td>
                            <td class="p-2 border-black border">
                                {!! 
                                    QrCode::size(300)->encoding('UTF-8')->generate(
                                    'Brand: '.$keyboards->brand."\n".   
                                    'Model: '.$keyboards->model."\n".   
                                    'Type: '.$keyboards->type."\n".
                                    'Color: '.$keyboards->color."\n".
                                    'Price: ₱'.number_format($keyboards->price, 2)) 
                                !!}
                            </td>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        <tr>
                            <td>
                                <img src="data:image/png;base64,{{ base64_encode(QrCode::size(50)->generate($keyboards->id)) }}" alt="QR Code">
                            </td>
                        </tr>
                    </tbody> --}}
                </table>
                {{-- <br> --}}
                {{-- <div class="qrcode">
                    <img src="data:image/png;base64,{{ base64_encode(QrCode::size(50)->generate($keyboards->id)) }}" alt="QR Code">
                </div> --}}
            </div>
        </div>
    </div>
@endsection
