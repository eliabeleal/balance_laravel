@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <div class="col-lg-3 col-xs-6">
                <a href="{{route('balance.deposit')}}" class="btn btn-primary">
                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                Recarregar</a>
                
                @if ($amount > 0)
                <a href="{{ route('balance.withdraw')}}" class="btn btn-danger">
                <i class="fa fa-money" aria-hidden="true"></i>
                Sacar</a>
                @endif

                @if ($amount > 0)
                <a href="{{ route('balance.transfer')}}" class="btn btn-info">
                <i class="fa fa-exchange" aria-hidden="true"></i>
                Transferir</a>
                @endif

            </div>
        </div>
        <div class="box-body">
            <div class="col-lg-3 col-xs-6">
            @include('admin.includes.alerts')
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                <h3><sup style="font-size: 20px">R$</sup>{{ number_format($amount, 2, ',', '')}}</h3>
                </div>
                <div class="icon">
                <i class="ion ion-cash"></i>
                </div>
                <a href="#" class="small-box-footer">Histórico <i class="fa fa-arrow-circle-right"></i></a>
            </div>
            </div>
        </div>
    </div>
@stop