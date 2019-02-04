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
                        @if(session("admin")==1)
                            <button onclick="document.getElementById('id01').style.display='block'"
                                    class="w3-button w3-blue fadeIn animated" style="border-radius: 8px">Pridať
                            </button>
                                <button onclick="location.href = '/home/computers/edit';"
                                        class="w3-button w3-blue fadeIn animated" style="border-radius: 8px">Edit
                                </button>

                        @endif
                        <div id="id01" class="w3-modal fadeIn  animated">
                            <div class="w3-modal-content w3-card-4 w3-animate-zoom">
                                <header class="w3-container w3-blue">
                                        <span onclick="document.getElementById('id01').style.display='none'"
                                              class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
                                    <h2>Header</h2>
                                </header>

                                <div class="w3-bar w3-border-bottom">
                                    <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'add-pc')">
                                        Pridať PC
                                    </button>
                                    <button class="tablink w3-bar-item w3-button" onclick="openCity(event, 'add-ntb')">
                                        Pridať notebook
                                    </button>
                                    <button class="tablink w3-bar-item w3-button"
                                            onclick="openCity(event, 'add-printer')">Pridať tlačiareň
                                    </button>
                                </div>

                                <div id="add-pc" class="w3-container city">
                                    <form action="/insertPC" method="post">
                                        <table>
                                            <tr>
                                                {{csrf_field()}}
                                                <td>*Učebňa:</td>
                                                <td><input type="text" name="room" required></td>
                                                <td>*Označenie PC:</td>
                                                <td><input type="text" name="name" required></td>
                                            </tr>
                                            <tr>
                                                <td>Výrobca:</td>
                                                <td><input type="text" name="manufacturer"></td>
                                                <td>CPU:</td>
                                                <td><input type="text" name="CPU"></td>
                                            </tr>
                                            <tr>
                                                <td>RAM:</td>
                                                <td><input type="text" name="RAM"></td>
                                                <td>HDD:</td>
                                                <td><input type="text" name="HDD"></td>
                                            </tr>


                                            </tr>
                                            <tr>
                                                <td>*MAC:</td>
                                                <td><input type="text" name="MAC_adress" required></td>
                                                <td>*IP:</td>
                                                <td><input type="text" name="ip_adress" required></td>
                                            <tr>
                                                <td>VNC adresa:</td>
                                                <td><input type="text" name="VNC_adress"></td>
                                                <td>AIRYTEC adresa:</td>
                                                <td><input type="text" name="AIRYTEC_adress"></td>
                                            </tr>
                                            <tr>
                                                <td>Komentár:</td>
                                                <td><input type="text" name="comment"></td>

                                            </tr>


                                        </table>
                                        <input name="pc-add" type="submit">
                                    </form>
                                </div>

                                <div id="add-ntb" class="w3-container city">
                                    <form action="/insertNTB" method="post">
                                        <table>
                                            <tr>
                                                {{csrf_field()}}
                                                <td>*Učebňa:</td>
                                                <td><input type="text" name="room" required></td>
                                                <td>*Označenie:</td>
                                                <td><input type="text" name="name" required></td>
                                            </tr>
                                            <tr>
                                                <td>Výrobca:</td>
                                                <td><input type="text" name="manufacturer"></td>
                                                <td>CPU:</td>
                                                <td><input type="text" name="CPU"></td>
                                            </tr>
                                            <tr>
                                                <td>RAM:</td>
                                                <td><input type="text" name="RAM"></td>
                                                <td>HDD:</td>
                                                <td><input type="text" name="HDD"></td>
                                            </tr>
                                            <tr>
                                                <td>*MAC:</td>
                                                <td><input type="text" name="MAC_adress" required></td>
                                                <td>*IP:</td>
                                                <td><input type="text" name="ip_adress" required></td>
                                            </tr>
                                            <tr>
                                                <td>*Učiteľ:</td>
                                                <td><input type="text" name="teacher" required></td>
                                            </tr>
                                        </table>
                                        <input name="ntb-add" type="submit">
                                    </form>
                                </div>

                                <div id="add-printer" class="w3-container city">
                                    <form action="/insertPrinter" method="post">
                                        <table>
                                            <tr>
                                                {{csrf_field()}}
                                                <td>*Názov:</td>
                                                <td><input type="text" name="name" required></td>
                                                <td>*Miestnosť:</td>
                                                <td><input type="text" name="room" required></td>
                                            </tr>
                                            <tr>
                                                <td>Typ:</td>
                                                <td><input type="text" name="type"></td>
                                                <td>*MAC:</td>
                                                <td><input type="text" name="MAC_adress" required></td>
                                            </tr>
                                            <tr>
                                                <td>*IP:</td>
                                                <td><input type="text" name="IP_adress" required></td>
                                            </tr>
                                        </table>
                                        <input name="printer-add" type="submit" *>
                                    </form>
                                </div>

                                <div class="w3-container w3-light-grey w3-padding">
                                    <button class="w3-button w3-right w3-white w3-border"
                                            onclick="document.getElementById('id01').style.display='none'">Close
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="computers wow fadeIn animated" data-wow-delay="1s" style="align-content: center">
                            Zoznam počítačov: <br>
                            <form action="/pcdel" method="post">
                                @foreach($computers as $computers)
                                    <tr class="table_bottom">
                                        <td>
                                            Computer: {{$computers['name']}},
                                        </td>
                                        <td>
                                            Miestnosť: {{$computers['room']}},
                                        </td>
                                        <td>
                                            Výrobca: {{$computers['manufacturer']}},
                                        </td>
                                        <td>
                                            CPU: {{$computers['CPU']}},
                                        </td>
                                        <td>
                                            RAM: {{$computers['RAM']}},
                                        </td>
                                        <td>
                                            HDD:{{$computers['HDD']}},
                                        </td>
                                        <td>
                                            komentar: {{$computers['comment']}}
                                        </td>
                                    </tr>

                                    <br>
                                @endforeach
                            </form>

                        </div>
                        <div class="notebooks wow fadeIn animated" data-wow-delay="1.5s" style="align-content: center">
                            <br>
                            Zoznam notebookov: <br>
                            @foreach($notebooks as $notebooks)
                                <tr>
                                    <td>
                                        Notebook: {{$notebooks['name']}},
                                    </td>
                                    <td>
                                        Miestnosť: {{$notebooks['room']}},
                                    </td>
                                    <td>
                                        Výrobca: {{$notebooks['manufacturer']}},
                                    </td>
                                    <td>
                                        CPU: {{$notebooks['CPU']}},
                                    </td>
                                    <td>
                                        RAM: {{$notebooks['RAM']}},
                                    </td>
                                    <td>
                                        HDD:{{$notebooks['HDD']}},
                                    </td>
                                    <td>
                                        Učiteľ: {{$notebooks['teacher']}}
                                    </td>
                                </tr>
                                <br>
                            @endforeach
                        </div>
                        <div class="printers wow fadeIn animated" data-wow-delay="2s" style="align-content: center">
                            <br>
                            Zoznam tlačiarní: <br>
                            @foreach($printers as $printers)
                                <tr>
                                    <td>
                                        Názov: {{$printers['name']}},
                                    </td>
                                    <td>
                                        Miestnosť: {{$printers['room']}},
                                    </td>
                                    <td>
                                        Typ: {{$printers['type']}}
                                    </td>
                                </tr>
                                <br>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
