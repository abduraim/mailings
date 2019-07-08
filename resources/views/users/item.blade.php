@extends('layouts.app')

@section('content')

    <a href="{{ route('users.index') }}" class="btn btn-success">Back to list</a>


    <h2>Roles:</h2>
    <table>
        <thead>
        <tr>
            <td>Name:</td>
            <td>Actions:</td>
        </tr>
        </thead>
        <tbody>
        @foreach($user->roles as $role)

            <tr>

                <td>
                    <a href="#">{{ $role->name }}</a>
                </td>

                <td>
                    <a href="#">Unsign</a>
                </td>

            </tr>



        @endforeach
        </tbody>
    </table>

    {!! Form::open() !!}

    {!! Form::label('name', 'Name:') !!}


    {!! Form::close() !!}


    <form action="{{ route('user.asign_roles', ['user' => $user->id]) }}" method="post">

        @foreach($roles as $role)
            <label for="{{$role->name}}">{{$role->name}}</label>
            <input type="checkbox" name="{{$role->name}}" id="{{$role->name}}">
            <br>
        @endforeach

            <button type="submit" class="btn btn-success">Submit</button>

    </form>




@endsection
