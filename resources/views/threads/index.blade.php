@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Creat new thred</div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                     </span>
                    </div>
                  </div>
                </div>
            
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                  <div class="btn-group" role="group">
                   <button type="button" class="btn btn-default">Sumit</button>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
