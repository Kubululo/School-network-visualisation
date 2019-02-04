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
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Zariadenia:</div>

                    <div class="panel-body">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="side-"></div>
                        @if(Session::has('serverError'))
                            <p class="alert alert-danger">{{Session::get('serverError')}}</p>
                        @endif

                        <div class="container">
                            <div class="row">

                                <div class="col-xs-6 col-md-4 col-lg-3">
                                    @foreach($status as $status)

                                        @if($status == 1)
                                            <img src="{{url('icons/zap.png')}}" alt="" width="50px" height="50px">
                                        @elseif($status == 0)
                                            <img src="{{url('icons/vyp.png')}}" alt="" width="50px" height="50px">
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-xs-6 col-md-4 col-lg-3">
                                    @foreach($computers as $computers)
                                        Computer: {{$computers['room']}},

                                        {{$computers['name']}},

                                        Výrobca: {{$computers['manufacturer']}},

                                        CPU: {{$computers['CPU']}},

                                        RAM: {{$computers['RAM']}},

                                        HDD:{{$computers['HDD']}},

                                        komentar: {{$computers['comment']}}
                                    @endforeach
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
