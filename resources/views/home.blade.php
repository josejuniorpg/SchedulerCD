@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                        <h1>Lista de usuarios</h1>
                        <ul>
                            @foreach ($users as $user)
                                <li>Nombre: {{ $user->name }}</li>
                                <li>Correo: {{ $user->email }}</li>
                                <li>----------------------------------</li>
                            @endforeach
                        </ul>
                        <h1>Lista de Horarios</h1>
                        @foreach ($shiftD as $shiftD)
                            <li> Notas: {{ $shiftD->notes }}</li>
                            <li> Id Del horario: {{ $shiftD->shift_id }}</li>
                            <li> Materia: {{ $shiftD->matter_id }}</li>
                            <li> Salon: {{ $shiftD->classmate_id }}</li>
                            <li> Modalidad: {{ $shiftD->modality }}</li>
                            <li> Status: {{ $shiftD->status }}</li>
                            <li> Grupo: {{ $shiftD->group }}</li>
                            <li> Dia: {{ $shiftD->day }}</li>
                            <li>----------------------------------</li>
                        @endforeach
                        <h1>Lista de Materias</h1>
                        @foreach ($matter as $matter)
                            <li> Nombre: {{ $matter ->name }}</li>
                            <li> Descripcion: {{ $matter ->description }}</li>
                            <li> Status: {{ $matter ->status }}</li>
                            <li>----------------------------------</li>
                        @endforeach
                        <h1>Lista de Salones</h1>
                        @foreach ($classmate as $classmate)
                            <li> Nombre: {{ $classmate->name }}</li>
                            <li> Edificio: {{ $classmate->building }}</li>
                            <li> Facultad: {{ $classmate->faculty }}</li>
                            <li> Piso: {{ $classmate->floor }}</li>
                            <li> Status: {{ $classmate->status }}</li>
                            <li>----------------------------------</li>
                        @endforeach
                        <h1>Lista de Horas</h1>
                        @foreach ($scheduler as $scheduler)
                            <li> Inicia: {{ $scheduler->start }}</li>
                            <li> Termina: {{ $scheduler->end }}</li>
                            <li> Status: {{ $scheduler->status }}</li>
                            <li>----------------------------------</li>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
