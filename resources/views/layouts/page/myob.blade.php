@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url({{url('website/images/all-software.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>MYOB Bookkeeping Services</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="team-members">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>MYOB Bookkeeping Services</h2>
                </div>
                <p>If you need a MYOB bookkeeper, we can help. No matter how big or small the MYOB requirement is, speak to us and see how we can help.</p>
            </div>
        </div>
    </div>
</div>
<br>
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product-item">
                    <img style="width: 80px; height: 80px; vertical-align: middle" src="{{asset('website/images/first.png')}}" alt="">
                    <div class="down-content">
                        <h4>OUR MYOB SERVICES</h4>
                        <p>If you need a MYOB bookkeeper, we can help. No matter how big or small the MYOB requirement is, speak to us and see how we can help.</p>
                        <span>
                            <a href="#" data-toggle="modal" data-target="#exampleModal1">Read More</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item">
                    <img style="width: 80px; height: 80px; vertical-align: middle" src="{{asset('website/images/second.png')}}" alt="">
                    <div class="down-content">
                        <h4>MYOB SOFTWARE</h4>
                        <p>Considering using MYOB? New to MYOB and need training? Already using MYOB? We know MYOB AccountRight, MYOB AccountEdge and MYOB Essentials.</p>
                        <span>
                            <a href="#" data-toggle="modal" data-target="#exampleModal2">Read More</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <img style="width: 80px; height: 80px; vertical-align: middle" src="{{asset('website/images/third.JPG')}}" alt="">
                    <div class="down-content">
                        <h4>LOCATIONS WE SERVICE</h4>
                        <p>Local face to face MYOB Bookkeeping in Brisbane, Gold Coast, Sunshine Coast, Adelaide, Perth and Newcastle. We also provide an Australia wide online service.</p>
                        <span>
                            <a href="#" data-toggle="modal" data-target="#exampleModal3">Read More</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <img style="width: 80px; height: 80px; vertical-align: middle" src="{{asset('website/images/forth.JPG')}}" alt="">
                    <div class="down-content">
                        <h4>BOOKKEEPING GUARANTEE</h4>
                        <p>Our MYOB bookkeepers are Accounting agents and Accountants. All our bookkeeping services are supported by our qualified tax agents.</p>
                        <span>
                            <a href="#" data-toggle="modal" data-target="#exampleModal4">Read More</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item">
                    <img style="width: 80px; height: 80px; vertical-align: middle" src="{{asset('website/images/fifth.png')}}" alt="">
                    <div class="down-content">
                        <h4>HOW IT ALL WORKS</h4>
                        <p>Low bookkeeping service fees without any lock in contracts. We can tailor our MYOB services just for you business to give you the best service.</p>
                        <span>
                            <a href="#" data-toggle="modal" data-target="#exampleModal5">Read More</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <img style="width: 80px; height: 80px; vertical-align: middle" src="{{asset('website/images/sixth.png')}}" alt="">
                    <div class="down-content">
                        <h4>OUR MYOB BOOKKEEPERS</h4>
                        <p>Our MYOB Bookkeepers are accounting professionals with skills and experience used by many businesses around Australia.</p>
                        <span>
                            <a href="#" data-toggle="modal" data-target="#exampleModal6">Read More</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal for MYOB Bookkeeping Services-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1Label">Our MYOB Services</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>We have serviced clients in nearly every industry you can think of using MYOB accounting software. If you use MYOB and need a little help or a lot of help we can get you on track and keep you on track with our bookkeeping services.</p>
                <p>Some of our regularly requested services include:</p>
                <li>Accounting and IAS</li>
                <li>General Bookkeeping</li>
                <li>Data Entry</li>
                <li>Accounting Software Set Up</li>
                <li>Accounting Software Training</li>
                <li>Business registrations</li>
                <li>Payroll</li>
                <li>Superannuation</li>
                <li>Accounts Payables and Receivable</li>
                <li>Inventory Management</li>
                <li>Budget Preparation</li>
                <li>Preparing Management Reports</li>
                <li>Preparation of Accounting Records For Your Accountant</li>
                <li>Get your back office sorted from Day 1 - If you are starting a new business we can implement processes and systems from day 1 that will put you ahead of your competitors and save you money and time with your bookkeeping and accounting.</li>
                <li>You are not just a number to us - Our clients success is important to us. We pride ourselves on our good name in the industry. Our philosophy is if we can make all our clients successful then our business will succeed in the process.</li>
            </div>
        </div>
    </div>
</div>

<!-- Modal for MYOB SOFTWARE-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2Label">MYOB SOFTWARE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>We tailor our MYOB bookkeeping services to suit each individual business that uses our services. We understand that there are a large number of small factors that make each business unique and need to be taken into account when developing a bookkeeping system.</p>
                <p>We service clients using MYOB AccountRight, MYOB AccountEdge and MYOB Essentials. A summary of our services are below:</p>
                <p>Our MYOB bookkeepers can assist you by:</p>
                <li>Become your accounts department and take care of all the day to day bookkeeping needs</li>
                <li>Our MYOB bookkeepers can train you to use MYOB and provide ongoing support.</li>
                <li>We can Install and customise your MYOB accounting software to suit your business.</li>
                <li>Our bookkeeping specialists can provide MYOB product selection advice to suit your business.</li>
                <p>If you have any questions or would like to bounce some bookkeeping ideas off us call 1300 728 875.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal for LOCATIONS WE SERVICE-->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal3Label">LOCATIONS WE SERVICE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <li>Trusted MYOB bookkeepers - We service a large number of businesses who use MYOB accounting software throughout Australia and have done for over 8 years now. We provide face to face bookkeeping services to Brisbane, Sunshine Coast, Gold Coast, Adelaide, Newcastle and Perth</li>
                <li>Local bookkeeping services - We have 6 offices in Australia so if you need a MYOB bookkeeper Brisbane, MYOB bookkeeper Gold Coast, MYOB bookkeeper Sunshine Coast, MYOB bookkeeper Adelaide, MYOB bookkeeper Perth or MYOB bookkeeper Newcastle we can provide the right bookkeeping solution for your business. Our bookkeepers provide a mobile MYOB bookkeeping service for businesses in South East QLD from Noosa on the Sunshine Coast to Tweed Heads on the Gold Coast and the surrounds of our other office locations.</li>
                <li>MYOB Bookkeeping to suit every occasion - We offer 2 different levels of service, firstly we offer a service where we can provide regular face to face bookkeeping where and when required. Secondly, we offer a cloud bookkeeping service where all bookkeeping is done online, via email and other online tools as a cheaper alternative.</li>
                <p>So, if you need MYOB bookkeeping support on the Sunshine Coast, Gold Coast, Brisbane, Adelaide, Perth or Newcastle contact us today to have one of our experienced MYOB bookkeepers organise a time to come and see you.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal for BOOKKEEPING GUARANTEE-->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModal4Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal4Label">BOOKKEEPING GUARANTEE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <li>MYOB certified bookkeepers - A number of our bookkeepers are also MYOB certified consultants which means you are in the very best of hands when it comes to having your bookkeeping managed by a professional.</li>
                <li>We have the answers - Because of the large knowledge base of our team we will already have access to the answers to your accounting questions so you get the accounting support you deserve for your business.</li>
                <li>Bookkeeping supported by Accountants - All our bookkeeping services are supported by Accountants that are on our team so your books get done right the first time. Our accountants hands on and are often looking after the bookkeeping for our clients.</li>
            </div>
        </div>
    </div>
</div>

<!-- Modal for HOW IT ALL WORKS-->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModal5Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal5Label">HOW IT ALL WORKS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>After looking after the bookkeeping needs of hundreds of businesses at any one time we understand what small businesses need and what is important to them. So we have developed our services around these requirements as follows:</p>
                <li>We offer a mobile or on site MYOB bookkeeping service where our bookkeepers can come to you.</li>
                <li>We can work from your office or our own or a combination of both, whatever suits you best.</li>
                <li>We can provide a pick up and drop off service where we pick up your paperwork, process it and return it to you.</li>
            </div>
        </div>
    </div>
</div>

<!-- Modal for OUR MYOB BOOKKEEPERS-->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModal6Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal6Label">OUR MYOB BOOKKEEPERS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Know that your books are looked after by a MYOB bookkeeping professional</p>
                <p>We only pick the best of the best to join our team. The typical MYOB bookkeeper from Darcy Bookkeeping looks like this:</p>
                <li>10 years plus accounting experience</li>
                <li>Current Accounting Agent Registration</li>
                <li>Accounting qualification - Degree, Diploma or minimum Certificate IV</li>
                <li>Experience working with Xero, MYOB, Quickbooks and Saasu</li>
                <li>Expert working with small businesses in different industries</li>
                <li>Able to fully support small businesses accounting requirements</li>
                <br>
                <p>Your bookkeeper is matched specifically to your business</p>
                <p>We make sure we hand pick the best member of our team for your business by taking into account the following criteria:</p>
                <li>The industry of your business</li>
                <li>The accounting requirements of your business</li>
                <li>Accounting software your business uses</li>
                <li>Where your business is located</li>

            </div>
        </div>
    </div>
</div>
@endsection