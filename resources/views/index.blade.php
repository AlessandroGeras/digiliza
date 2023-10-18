@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card">
                <div class="card-header text-center">Reservas</div>

                <div class="card-body">
                    <form method="post" action="{{ route('reservation.create') }}" class="row g-3 justify-content-center">
                        @csrf
                        <div class="col-6 text-center">
                            <label for="name" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-6 text-center">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-12 text-center">
                            <label for="date" class="form-label" style="margin-bottom: 0;">Dia:</label>
                            <input type="date" class="form-control text-center" id="date" name="date" style="max-width: 50%; margin: 0 auto;" required min="{{ date('Y-m-d') }}">
                        </div>
                        <div class="col-6 text-center">
                            <label for="start_time" class="form-label">Data de Início:</label>
                            <input type="time" class="form-control" id="start_time" name="start_time" required min="{{ date('H:i') }}">
                        </div>
                        <div class="col-6 text-center">
                            <label for="end_time" class="form-label">Data de Término:</label>
                            <input type="time" class="form-control" id="end_time" name="end_time" required min="{{ date('H:i') }}">
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn" style="background-color: #00cfc0; color: #ffffff;">Criar Reserva</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
