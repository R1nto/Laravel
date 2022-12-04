@extends('tugas')

@section('content')
<h1>Kalkulator</h1>
<form action="{{ url('kalkulator') }}" method="post">
    @csrf
    angka 1:
    <input type="number" name="angka1" id="">
    angka 2:
    <input type="number" name="angka2" id="">
    <input type="submit" value="X" name="kali">
    <input type="submit" value=":" name="bagi">
    <input type="submit" value="+" name="tambah">
    <input type="submit" value="-" name="kurang">
</form>
@endsection

@section('menu')
    <a href="/">home</a>
@endsection