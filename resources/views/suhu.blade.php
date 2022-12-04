@extends('tugas')

@section('content')
<h1>Konversi Suhu</h1>
<form action="" method="post">
    @csrf
    Konversi dari:
    <select name="before" id="">
        <option selected value="c" >Celcius</option>
        <option value="k" >Kelvin</option>
        <option value="r" >Reamur</option>
        <option value="f" >Fahrenheit</option>
    </select>
    <input type="number" name="suhu" id="">
    ke:
    <select name="after" id="">
        <option selected value="c" >Celcius</option>
        <option value="k" >Kelvin</option>
        <option value="r" >Reamur</option>
        <option value="f" >Fahrenheit</option>
    </select>
    <input type="submit" value="ok" name="kirim">
</form>  
<h2>{{ $suhu }}</h2>  
@endsection
@section('menu')
    <a href="/">home</a>
@endsection
