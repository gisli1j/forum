@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>
                Bjarmi Anes Eiðsson 
                <small>Meðlimur í 3 vikur</small>
            </h2>
            
        </div>
        <hr class="col-md-8 col-md-offset-2">

        <div class="col-md-5 col-md-offset-2">
            @foreach($statuses as $status)
                <div class="col-md-12">
                    
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            {{$status['nafn']}} published
                            <a href="">{{$status['link']}}</a>
                        </div>

                        <div class="panel-body">{{$status['text']}}</div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Nafn</h4>
                    <p>Bjarmi Anes Eiðsson</p>
                    <h4>Netfang</h4>
                    <p>Bjarmiae@gmail.com</p>
                    <h4>Fjöldu Þráða: 14</h4>

                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection