@extends('layouts.app')
@section('content')


<div class="container">
    <div class="col-sm-12">

        @if(!empty(session('success')))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('success') }}
            </div>
        @endif

        @if(!empty(session('error')))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('error') }}
            </div>
        @endif
<div class="f">
        {!! Form::open(['action'=>'ZaposleniController@kreiraj','method'=>'POST',
        'enctype'=>'multipart/form-data']) !!}

            {{Form::label('Ime','Ime')}}
            {{Form::text('ime','',['class'=>'form-control','required'])}}
            <br/>
            {{Form::label('Prezime','Prezime')}}
            {{Form::text('prezime','',['class'=>'form-control','required'])}}
            <br/>
            {{Form::label('Zanimanje','Zanimanje')}}
            {{Form::text('zanimanje','',['class'=>'form-control','required'])}}
            <br/>

            {{Form::label('Bivse firme','Bivse firme')}}
            <div class="row">
                <div class=" b col-sm-6">
                    {{Form::text('ime_firme','',['name'=>'arr[]', 'class'=>'form-control','placeholder'=>'1'])}}
                </div>
                <div class="col-sm-6">
                    {{Form::text('ime_firme','',['name'=>'arr[]','class'=>'form-control','placeholder'=>'2'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    {{Form::text('ime_firme','',['name'=>'arr[]','class'=>'form-control','placeholder'=>'3'])}}
                </div>
                <div class="col-sm-6">
                    {{Form::text('ime_firme','',['name'=>'arr[]','class'=>'form-control','placeholder'=>'4'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    {{Form::text('ime_firme','',['name'=>'arr[]','class'=>'form-control','placeholder'=>'5'])}}
                </div>
                <div class="col-sm-6">
                    {{Form::text('ime_firme','',['name'=>'arr[]','class'=>'form-control','placeholder'=>'6'])}}
                </div>
            </div>
<br/>
    {{Form::submit('Kreiraj',['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
</div>
    </div>
</div>

@endsection