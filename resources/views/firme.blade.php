@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Firme u kojima su nasi radnici radili</h1>
        <div class="col-sm-12">

            <table class="table table-bordered table-hover">
                <tr>
                    <th>Firme</th>

                </tr>
            @foreach($firme as $f)
                <tr>
                    <td>{{$f->ime_firme}}</td>
                </tr>
            @endforeach

            </table>
            {{$firme->links()}}
        </div>
    </div>

@endsection