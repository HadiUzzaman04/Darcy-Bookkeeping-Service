@extends('layouts.app')

@section('content')

<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                        <h5>{{ $data->name}}</h5>
                    </div>
                </div>
                <div class="sidebar-item recent-posts">
                    <div class="content">
                        <h5>{{ $data->details}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection