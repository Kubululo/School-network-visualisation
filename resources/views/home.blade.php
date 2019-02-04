@extends('layouts.app')

@section('content')
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 fadeIn  animated">
                <div class="panel panel-default">
                    <div class="panel-heading">Vitajte</div>

                    <div class="panel-body">
                        Vitajte
                        @if(session('admin')==1)
                            administrátor
                        @endif
                        {{ Auth::user()->name }} na stránke vizualizácie počítačovej siete adlerka. Momentálne je táto stránka vo výstavbe a nie všetky funkcie sú dostupné.
                        Pre nahliadnutie do dokumentácie môžete použiť tento hypertextový odkaz: <a href="http://127.0.0.1:8000/documentation/">Dokumentácia</a>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="side-"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
