@extends('layouts.app')
@section('content')

<div class="container">

        <div class="col-sm-8"><br/>

            @if(!empty(session('success')))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered table-hover">


                <tr><th>Ime</th>
                    <td>{{$zaposleni->ime}}</td>
                </tr>
                <tr><th>Prezime</th>
                    <td>{{$zaposleni->prezime}}</td>
                </tr>
                <tr><th>Zanimanje</th>
                    <td>{{$zaposleni->zanimanje}}</td>
                </tr>
                <tr><th>Bivse firme</th>
                    <td>@foreach($zaposleni->bf as $zbf)
                            {{$zbf->ime_firme}}<br/>
                        @endforeach
                    </td>
                </tr>

                <!-- FORM FOR UPDATE -->
                {!! Form::open(['action'=>['ZaposleniController@azuriraj',$zaposleni->id],
                'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                <tr><th>Novo zanimanje</th>
                    <td>
                        {{Form::text('zanimanje',$zaposleni->zanimanje,['class' => 'form-control'])}}
                    </td>
                </tr>
                <tr><th></th>
                    <td>
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
                    </td>
                </tr>
                {!! Form::close() !!}

            </table>



        </div>
</div>

@endsection