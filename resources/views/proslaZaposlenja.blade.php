@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Istorija promene firmi zaposlenih</h1>
        <div class="col-sm-12">

            <table class="table table-bordered table-hover">
                <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Zanimanje</th>
                    <th>Prosle firme</th>

                </tr>
        @foreach($zaposleni as $z)
                <tr>
                    <td>{{$z->ime}}</td>
                    <td>{{$z->prezime}}</td>
                    <td>{{$z->zanimanje}}</td>
                    <td>
                        @foreach($z->bf as $zz)
                            {{$zz->ime_firme}} <br/>
                        @endforeach
                    </td>
                </tr>
        @endforeach

            </table>
            {{$zaposleni->links()}}
        </div>
    </div>

@endsection