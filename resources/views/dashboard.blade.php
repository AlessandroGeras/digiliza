@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-black">Lista de Reservas</div>

                <div class="card-body">
                    <form method="get" action="{{ route('dashboard') }}" class="mb-3">
                        <select name="sort" onchange="this.form.submit()" class="form-select">
                            <option value="default" {{ Request::get('sort') == 'default' ? 'selected' : '' }}>Amostra por ID</option>
                            <option value="custom" {{ Request::get('sort') == 'custom' ? 'selected' : '' }}>Amostra por Datas</option>
                        </select>
                    </form>
                    @if(count($reservations) > 0)
                        <ul class="list-group">
                            @foreach($reservations as $key => $reservation)
                                @php $bgClass = $key % 2 === 0 ? 'bg-light' : 'bg-white'; @endphp
                                <li class="list-group-item {{$bgClass}}">
                                    <div>
                                        <span>ID: {{ $reservation->id }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span>Nome: {{ $reservation->name }}</span>
                                        </div>
                                        <div>
                                            <span>Email: {{ $reservation->email }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span>Data de Reserva: {{ \Carbon\Carbon::parse($reservation->date)->format('d/m/Y') }}</span>
                                        </div>
                                        <div>
                                            <span>Hora de Início: {{ $reservation->start_time }}</span>
                                        </div>
                                        <div>
                                            <span>Hora de Término: {{ $reservation->end_time }}</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-center">Nenhuma reserva encontrada.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
