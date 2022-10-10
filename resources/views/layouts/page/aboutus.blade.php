@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url(website/images/heading-1-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>about us</h4>
                    <h2>our company</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="best-features about-features">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="right-image">
                    <img src="{{asset('website/images/about-1-570x350.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <h4>About Our Company</h4>
                    <p>We are one of the fastest growing bookkeeping and accounting services firms in Australia.</p>
                    <p>Why are we growing so quickly? Because we provide a top quality service at affordable service rates that make our services sustainable for small and medium businesses.</p>
                    <p>We aim to make our services sustainable as we understand the needs and challenges for businesses in Brisbane, Adelaide, Perth, Sunshine Coast, Gold Coast and Newcastle.</p>
                    <p>Our qualified and experienced Bookkeepers and Accountants take great pleasure in helping our clients to meet their obligations and get ahead of the competition in their industry.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="team-members">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{asset('website/images/team_01.jpg')}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>Johnny William</h4>
                        <span>CO-Founder</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{asset('website/images/team_02.jpg')}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>Karry Pitcher</h4>
                        <span>Product Expert</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{asset('website/images/team_03.jpg')}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>Michael Soft</h4>
                        <span>Chief Marketing</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{asset('website/images/team_04.jpg')}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>Mary Cool</h4>
                        <span>Product Specialist</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{asset('website/images/team_05.jpg')}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>George Walker</h4>
                        <span>Product Photographer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="thumb-container">
                        <img src="{{asset('website/images/team_06.jpg')}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>Kate Town</h4>
                        <span>General Manager</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection