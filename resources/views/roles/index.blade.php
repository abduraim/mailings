@extends('layouts.app')

@section('content')

    <a href=" {{ route('roles.create') }}" class="btn btn-success">Create</a>


    <table>
        <thead>
        <tr>
            <td>Name:</td>
            <td>Actions:</td>
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)

            <tr>

                <td>
                    <a href="{{ route('roles.show', ['role' => $role->id]) }}">{{ $role->name }}</a>
                </td>

                <td>
                    <a href="{{ route('roles.show', ['role' => $role->id]) }}">Show</a>
                    <a href="{{ route('roles.edit', ['role' => $role->id]) }}">Edit</a>
                </td>

            </tr>



        @endforeach
        </tbody>
    </table>



@endsection
