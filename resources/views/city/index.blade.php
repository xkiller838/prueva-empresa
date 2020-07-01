@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-12 col-md-5 shadow" style="background-color: #fff">
      <form action="{{ route('city.guardar') }}" method="POST">
        @csrf

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
            <a href="{{ route('city.listar') }}" class="btn btn-outline-secondary">Ver todos</a>
        </div>

      </form>
    </div>
  </div>
</div>

@endsection
