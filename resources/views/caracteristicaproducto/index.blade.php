@extends('layouts.app')

@section('template_title')
    Caracteristicaproducto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Caracteristicaproducto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('caracteristicaproductos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Fecha Contactado</th>
										<th>Fecha Presentara</th>
										<th>Usuario Id</th>
										<th>Cliente Id</th>
										<th>Producto Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caracteristicaproductos as $caracteristicaproducto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caracteristicaproducto->nombre }}</td>
											<td>{{ $caracteristicaproducto->fecha_contactado }}</td>
											<td>{{ $caracteristicaproducto->fecha_presentara }}</td>
											<td>{{ $caracteristicaproducto->usuario_id }}</td>
											<td>{{ $caracteristicaproducto->cliente_id }}</td>
											<td>{{ $caracteristicaproducto->producto_id }}</td>

                                            <td>
                                                <form action="{{ route('caracteristicaproductos.destroy',$caracteristicaproducto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('caracteristicaproductos.show',$caracteristicaproducto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('caracteristicaproductos.edit',$caracteristicaproducto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $caracteristicaproductos->links() !!}
            </div>
        </div>
    </div>
@endsection
