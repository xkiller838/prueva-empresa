@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row d-flex justify-content-center">
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
              <h6>Eliminar</h6>
            </th>
            <th scope="col">
              <h6>Modificar</h6>
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cities as $citie)
          <tr>
            <td data-label="No">
              <h5>{{$citie->id}}</h5>
            </td>
            <td class="w" data-label="codigo">
              <h5>{{$citie->cod}}</h5>
            </td>
            <td data-label="ombreN">
              <h5>{{$citie->name}}</h5>
            </td>
            <td data-label="Editar">
              <a href=" {{ route('city.editar', $citie->id)}}">
                <button type="button" class="btn btn-primary">Editar</button>
              </a>
            </td>
            <td data-label="Eliminar">
              <a href="{{ route('city.eliminar', $citie->id)}}">
                <button type="button" class="btn btn-danger ml-3">Eliminar</button>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-12 col-md-7 text-center d-flex justify-content-center mt-3">
      {!! $cities->render() !!}
    </div>
  </div>
</div>
@endsection
