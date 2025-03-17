@extends('layout.app')

@section('content')
    <h1>Welcome to my Skills</h1>

    <ul>
        @foreach ($skills as $skills)
            <li>{{ $skill->name}} - Description: {{$row->description}}</li>

        @endforeach
    </ul>
@endsection