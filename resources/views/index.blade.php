@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Nasi zaposleni</h1>

        @if(!empty(session('success')))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('success') }}
            </div>
        @endif

        <div class="col-sm-12">

            <table class="table table-bordered table-hover">
                <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Zanimanje</th>
                    <th>Promeni</th>
                    <th>Obrisi</th>
                </tr>
    @foreach($zaposleni as $radnik)
                    <tr>
                        <td>{{$radnik->ime}}</td>
                        <td>{{$radnik->prezime}}</td>
                        <td>{{$radnik->zanimanje}}</td>


                        <td>    <a href="{{route('promeni',['id'=>$radnik->id])}}">
                                <button class="btn btn-dark">Promeni podatke</button>
                            </a>
                        </td>


                        {!! Form::open(['action'=> ['ZaposleniController@obrisi',$radnik->id],
                        'method'=>'post','enctype'=>'multipart\form_data']) !!}
                        <td>
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('✘',['class'=>'btn btn-danger'])}}

                        </td>

                        {!! Form::close() !!}

                    </tr>
    @endforeach

            </table>
            {{$zaposleni->links()}}
        </div>
    </div>

@endsection