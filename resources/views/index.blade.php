@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Reservas</div>

                <div class="card-body">
                    <form method="post" action="" class="row g-3 justify-content-center">
                        @csrf
                        <div class="col-4 text-center">
                            <label for="start_time" class="form-label">Hora de Início:</label>
                            <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
                        </div>
                        <div class="col-4 text-center">
                            <label for="end_time" class="form-label">Hora de Término:</label>
                            <input type="datetime-local" class="form-control" id="end_time" name="end_time" required>
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
