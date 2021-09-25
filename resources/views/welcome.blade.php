@extends('layouts.main')

@section('title', 'Interwebs')

@section('content')


<div id="titleCenter" class="col-md-12">
    <h1>URL's Registradas</h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Endereço</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($urls as $url)
        <tr>
            <th scope="row">{{$url->id}}</th>
            <td>{{$url->title}}</td>
            <td><a href="{{$url->url}}" id="link{{$url->id}}" target="_blank"
                    rel="noopener noreferrer">{{$url->url}}</a></td>
            <td>Status</td>
        </tr>
        @endforeach
    </tbody>
    @php
    foreach ($urls as $key => $value) {
        // print_r($value->url);
        $URL = $value->url;
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $URL);
        curl_setopt($curlHandle, CURLOPT_HEADER, true);
        curl_setopt($curlHandle, CURLOPT_NOBODY , true); // we don't need body
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_exec($curlHandle);
        $response = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
        curl_close($curlHandle); // Don't forget to close the connection
        echo $response,"" . PHP_EOL;
    }
    @endphp
</table>
@endsection
