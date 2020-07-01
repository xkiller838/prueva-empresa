@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-12 col-md-5 shadow" style="background-color: #fff">
      <form action="{{ route('clientes.guardar') }}" method="POST">
        @csrf

        <div class="form-group mt-4">
          <label for="city">Ciudad</label>
          <select class="custom-select" name="city" id="city">
            <option selected>Selecione una ciudad</option>
            @foreach ($cities as $item)
            <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group mt-3">
          <label for="codigo">Codigo</label>
          <input type="text" name="cod" class="form-control" id="codigo" required placeholder="Digita un codigo">
        </div>

        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="name" class="form-control" id="nombre" required placeholder="Digita un nombre">
        </div>

        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary mr-3">Guardar</button>
          <a href="{{ route('clientes.listar') }}" class="btn btn-outline-secondary">Ver todos</a>
        </div>

      </form>
    </div>
  </div>
</div>

@endsection
