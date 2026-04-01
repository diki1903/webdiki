@extends('layouts.app')
@section('content')
<h2>Galeri Keluarga</h2>


<div class="grid-cerita">
    <div class="kartu"><img src="{{ asset('img/keluarga1.jpg') }}" width="100%"></div>
    <div class="kartu"><img src="{{ asset('img/keluarga2.jpg') }}" width="100%"></div>
    <div class="kartu"><img src="{{ asset('img/keluarga3.jpg') }}" width="100%"></div>
</div>
@endsection