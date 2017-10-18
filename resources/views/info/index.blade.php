@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Информация:</h1>
                <hr/>
                @foreach ($users as $user)
                    <p>Пользоватьель: {{ $user->name }}</p>
                    <p>Задач: {{ $userTasks[$user->id] }}</p>
                    <hr/>
                @endforeach
            </div>
        </div>
    </div>
@endsection