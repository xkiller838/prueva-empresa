@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-7 text-left">
      <form class="d-flex flex-row" action=" {{ route('cliente.buscar') }} " method="GET">
          @csrf
        <div class="form-group col-7 p-0">
          <input type="text" class="form-control" name="buscar" autocomplete="off" placeholder="Digita una ciudad">
        </div>
        <div class="form-group col-3 p-0">
            <button type="submit" class="btn btn-primary">BUSCAR</button>
        </div>
      </form>
    </div>
    <div class="col-12 col-md-7">
      <table>
        <thead>
          <tr>
            <th scope="col">
              <h6>N<small>o</small></h6>
            </th>
            <th scope="col">
              <h6>Codigo</h6>
            </th>
            <th scope="col">
              <h6>Nombre</h6>
            </th>
            <th scope="col">
              <h6>Ciudad</h6>
            </th>
            <th scope="col">
              <h6>Eliminar</h6>
            </th>
            <th scope="col">
              <h6>Modificar</h6>
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($clients as $cl)
          <tr>
            <td data-label="No">
              <h5>{{$cl->id}}</h5>
            </td>
            <td data-label="codigo">
              <h5>{{$cl->cod}}</h5>
            </td>
            <td data-label="nombre">
              <h5>{{$cl->name}}</h5>
            </td>
            <td data-label="ciudad">
              <h5>{{$cl->city}}</h5>
            </td>
            <td data-label="Editar">
              <a href=" {{ route('clientes.editar', $cl->id)}}">
                <button type="button" class="btn btn-primary">Editar</button>
              </a>
            </td>
            <td data-label="Eliminar">
              <a href=" {{ route('clientes.eliminar', $cl->id)}}">
                <button type="button" class="btn btn-danger ml-3">Eliminar</button>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-12 col-md-7 text-center d-flex justify-content-center mt-3">
      {!! $clients->render() !!}
    </div>
  </div>
</div>
@endsection
