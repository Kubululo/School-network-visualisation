@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Používatelia:</div>

                    <div class="panel-body fadeIn animated">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach($users as $users)
                            @if(session("admin")==0 AND $users["remember"]==1)
                                Meno: {{$users["name"]}} Email: {{$users["email"]}}
                                Registrovaný: {{$users["created_at"]}}
                            @endif
                            @if(session("admin")==1 AND $users["admin"]==0 AND $users["remember"]==1)
                                <div class="sideByside">
                                    <form class="left" action="/promote" method="POST">
                                        {{csrf_field()}}
                                        Meno: {{$users["name"]}} Email: {{$users["email"]}}
                                        Registrovaný: {{$users["created_at"]}}
                                        <br>
                                        <input type="hidden" name="id" value="{{$users["id"]}}">
                                        <button type="submit" class="w3-button w3-green">Promote</button>
                                    </form>
                                    <form class="right" action="/forget" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{$users["id"]}}">
                                        <button type="submit" class="w3-button w3-orange">Vymazať</button>
                                    </form>
                                </div>
                            @endif
                            @if(session("admin")==1 AND $users["admin"]==1 AND $users["remember"]==1)
                                <div class="sideByside">
                                    <form class="left" action="/demote" method="POST">
                                        {{csrf_field()}}
                                        Meno: {{$users["name"]}} Email: {{$users["email"]}}
                                        Registrovaný: {{$users["created_at"]}}
                                        <br>
                                        <input type="hidden" name="id" value="{{$users["id"]}}">
                                        <button type="submit" class="w3-button w3-red">Demote</button>
                                    </form>
                                    <form class="right" action="/forget" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{$users["id"]}}">
                                        <button type="submit" class="w3-button w3-orange">Vymazať</button>
                                    </form>
                                </div>
                            @endif
                            @if(session("admin")==1 AND $users["remember"]==0)
                                <div class="sideByside" style="background-color: yellow;">

                                        Užívateľ vymazaný
                                        Meno: {{$users["name"]}} Email: {{$users["email"]}}
                                        Registrovaný: {{$users["created_at"]}}
                                        <br>
                                    </form>
                                    <form class="right" action="/remember" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{$users["id"]}}">
                                        <button type="submit" class="w3-button w3-orange">Obnoviť</button>
                                    </form>
                                </div>
                            @endif
                            <br>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection