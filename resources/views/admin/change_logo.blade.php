@extends("admin.__layout")
@section("styles")

@stop
@section("scripts")

@stop
@section("mainbody")
    {!! Form::open(['url'=>'logol']) !!}
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name') !!}

    {!! Form::label('author','Author:') !!}
    {!! Form::text('author') !!}

    {!! Form::submit('Them moi')!!}
    {!! Form::close() !!}
@stop