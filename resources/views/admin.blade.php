@extends('layouts/admin-template')

@section('content')
<div class="container">
    <div class="p-2"><h2>Grid 1</h2></div>
    <div class="row text-center justify-content-start">
      <div class="p-1 col-1 bg-primary text-white rounded">Kolom 1</div>
      <div class="p-1 col-1 bg-secondary text-white rounded">Kolom 2</div>
      <div class="p-1 col-1 bg-success text-white rounded">Kolom 3</div>
      <div class="p-1 col-1 bg-danger text-white rounded">Kolom 4</div>
    </div>
    <div class="p-2"><h2>Grid 2</h2></div>
    <div class="row justify-content-end">
        <div class="p-1 col-1 bg-primary text-white rounded">Kolom 1</div>
        <div class="p-1 col-1 bg-secondary text-white rounded">Kolom 2</div>
        <div class="p-1 col-1 bg-success text-white rounded">Kolom 3</div>
        <div class="p-1 col-1 bg-danger text-white rounded">Kolom 4</div>
    </div>
    <div class="p-2"><h2>Grid 3</h2></div>
    <div class="row justify-content-center">
        <div class="p-1 col-1 bg-primary text-white rounded">Kolom 1</div>
        <div class="p-1 col-1 bg-secondary text-white rounded">Kolom 2</div>
        <div class="p-1 col-1 bg-success text-white rounded">Kolom 3</div>
        <div class="p-1 col-1 bg-danger text-white rounded">Kolom 4</div>
    </div>
    <div class="p-2"><h2>Grid 4</h2></div>
    <div class="row justify-content-between">
        <div class="p-1 col-1 bg-primary text-white rounded">Kolom 1</div>
        <div class="p-1 col-1 bg-secondary text-white rounded">Kolom 2</div>
        <div class="p-1 col-1 bg-success text-white rounded">Kolom 3</div>
        <div class="p-1 col-1 bg-danger text-white rounded">Kolom 4</div>
    </div>
    <div class="p-2"><h2>Grid 5</h2></div>
    <div class="row justify-content-around">
        <div class="p-1 col-1 bg-primary text-white rounded">Kolom 1</div>
        <div class="p-1 col-1 bg-secondary text-white rounded">Kolom 2</div>
        <div class="p-1 col-1 bg-success text-white rounded">Kolom 3</div>
        <div class="p-1 col-1 bg-danger text-white rounded">Kolom 4</div>
    </div>
    <div class="p-2"><h2>Grid 7</h2></div>
    <div class="row justify-content-around">
        <div class="p-1 col-1 bg-primary text-white rounded">Kolom 1</div>
        <div class="p-1 col-2 bg-secondary text-white rounded">Kolom 2</div>
        <div class="p-1 col-3 bg-success text-white rounded">Kolom 3</div>
        <div class="p-1 col-4 bg-danger text-white rounded">Kolom 4</div>
    </div>
  </div>
@endsection