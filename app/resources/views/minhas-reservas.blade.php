@extends('layouts.app')

@section('content')


    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
        </div>
    </section>

<!-- Dashboard Area -->
    <section id="dashboard_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="dashboard_sidebar">
                        <div class="dashboard_sidebar_user">
                            <img src="public\assets\img\padraoa.png" alt="padraoa">
                            <h3>{{ auth()->user()->name }}</h3>
                            <p><a href="#">{{ auth()->user()->email }}</a></p>
                        </div>
                        <div class="dashboard_menu_area">
                            <ul>
                                <li><a href="dashboard.html"><i class="fas fa-address-card"></i>Minhas reservas</a></li>
                                
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dashboard_common_table">
                        <h3>Minhas reservas</h3>
                        <div class="table-responsive-lg table_common_area"> 
                        <table class="table">
                            
                                <thead>
                                    <tr>
                                        <th>Ticket</th>
                                        <th>Origem</th>
                                        <th>Destino</th>
                                        <th>Passageiros</th>
                                        <th>Data partida</th>
                                        <th>Data retorno</th>
                                        <th>Classe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($dados['reservas'] as $reserva)
                                    <tr>
                                        <td>{{ $reserva['ticket']}}</td>
                                        <td>{{config('enum.aeroportos.' . $reserva['origem']) }}</td>
                                        <td>{{config('enum.aeroportos.' . $reserva['destino']) }}</td>
                                        <td>{{$reserva['adulto']}}</td>
                                        <td>{{$reserva['data_partida']}}</td>
                                        <td>{{$reserva['data_retorno']}}</td>
                                        <td>{{$reserva['classe']}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- <div class="pagination_area">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

@endsection