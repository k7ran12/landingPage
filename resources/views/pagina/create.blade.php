@extends('layouts.app')

@section('template_title')
    Create Pagina
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default border-primary">
                    <div style="background-color: #003785;color: white;" class="card-header">
                        <h3 class="card-title">Crear Pagina</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('paginas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pagina.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
