@extends('layouts.app')

@section('content')

    <a href="{{ route('roles.index') }}" class="btn btn-success">Back to list</a>

    <table>
        <thead>
        <tr>
            <td>Name:</td>
            <td>Actions:</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

            <tr>

                <td>
                    <a href="{{ route('users.show', ['user' => $user->id]) }}">{{ $user->name }}</a>
                </td>

                <td>
                    <a href="{{ route('roles.show', ['role' => $role->id]) }}">Unsign</a>
                </td>

            </tr>



        @endforeach
        </tbody>
    </table>

@endsection
