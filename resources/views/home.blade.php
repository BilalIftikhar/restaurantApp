@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Main Functions</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row text-center">
                        <div class="col-sm-4">
                            <h4><a href="/management"> Management</a></h4>
                            <img width="50px" src="{{asset('images/management.png')}}" />
                        </div>
                        <div class="col-sm-4">
                            <h4><a href="/cashier"> Cachier</a></h4>
                            <img width="50px" src="{{asset('images/cashier-machine.png')}}" />
                        </div>
                        <div class="col-sm-4">
                            <h4><a href="/report"> Report</a></h4>
                            <img width="50px" src="{{asset('images/statistics.png')}}" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection