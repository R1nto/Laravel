@extends('tugas')

@section('content')
<h1>Zodiak</h1>
<form action="{{ url('zodiak') }}" method="post">
    @csrf
    Bulan:
    <input type="text" name="bulan" id="">
    Tanggal:
    <input type="text" name="tanggal" id="">
    <input type="submit" value="kirim" name="kirim">
</form>    
@endsection

@section('menu')
    <a href="/">home</a>
@endsection


