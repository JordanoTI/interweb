@extends('layouts.main')

@section('title', 'Registrar URL')

@section('content')
<div id="titleCenter" class="col-md-12">
    <h1>Registrar URL</h1>
</div>
<div id="url-registration-container" class="col-md-6 offset-md-3">
    <form action="/urls" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titulo da URL">
        </div>
        <div class="form-group">
            <label for="url">Endereço</label>
            <input type="url" class="form-control" id="url" name="url" placeholder="Endereço da URL"
            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?">
        </div>
        <input type="submit" class="btn btn-primary" value="Registrar URL">
    </form>
</div>
@endsection
