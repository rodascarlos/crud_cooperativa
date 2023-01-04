@extends('layouts.app')

@section('template_title')
    {{ $caracteristicaproducto->name ?? 'Show Caracteristicaproducto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Caracteristicaproducto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('caracteristicaproductos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $caracteristicaproducto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Contactado:</strong>
                            {{ $caracteristicaproducto->fecha_contactado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Presentara:</strong>
                            {{ $caracteristicaproducto->fecha_presentara }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $caracteristicaproducto->usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $caracteristicaproducto->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $caracteristicaproducto->producto_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
