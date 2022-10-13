@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url({{url('website/images/all-software.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>SAASU BOOKKEEPING SERVICES</h2>
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
                    <h2>SAASU BOOKKEEPING SERVICES</h2>
                </div>
                <p>Every week we help everyday businesses with their Saasu bookkeeping needs. We have certified Saasu bookkeepers ready to help you.</p>
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
                        <h4>OUR SAASU SERVICES</h4>
                        <p>Get the Saasu bookkeeping services you need how and where you need it. From data entry through to BAS lodgement we do it all.</p>
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
                        <h4>SAASU SOFTWARE</h4>
                        <p>New to Saasu or wondering if it might be the right accounting software for your business? Contact us today and get your questions answered.</p>
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
                        <p>Our Saasu bookkeepers can come to you in Brisbane, Sunshine Coast, Gold Coast, Adelaide and Perth Or let us do your books online at our office.</p>
                        <span>
                            <a href="#" data-toggle="modal" data-target="#exampleModal3">Book Now</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <img style="width: 80px; height: 80px; vertical-align: middle" src="{{asset('website/images/forth.JPG')}}" alt="">
                    <div class="down-content">
                        <h4>BOOKKEEPING GUARANTEE</h4>
                        <p>Feel at ease knowing your Saasu bookkeeping is completed by BAS Agents and Accountants. All services are supported by our accounting services firm</p>
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
                        <p>Let our Saasu bookkeepers tailor our services to suit your management style and the type of business you run. Our services work for you.</p>
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
                        <h4>OUR SAASU BOOKKEEPERS</h4>
                        <p>Let one of our Saasu experienced and certified bookkeepers help you with your bookkeeping needs and add value to your business.</p>
                        <span>
                            <a href="#" data-toggle="modal" data-target="#exampleModal6">Read More</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal for OUR SAASU BOOKKEEPING SERVICES-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1Label">OUR SAASU BOOKKEEPING SERVICES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>We are one of the largest Saasu bookkeeping service providers in Australia. We have a proven track record of delivering affordable bookkeeping solutions for our clients that work today, tomorrow and well into the future.</p>
                <p>Some of our most popular services include:</p>
                <li>BAS and IAS</li>
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
                <li>Start your business off right - Have you just bought or started a new business? Have one of our bookkeepers come and set up your accounting systems and processes which will save you valuable time and money from day 1.</li>
                <li>We want your business to succeed - We are one of the few bookkeeping and accounting firms where you are not just a number. We want you to succeed because we want you to refer us to your business colleagues. Our vision is to help you to grow your business and in the process we hope you can help us grow our business.</li>
            </div>
        </div>
    </div>
</div>

<!-- Modal for SAASU SOFTWARE-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2Label">SAASU SOFTWARE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>New to Saasu and not sure how to use it to its full potential? Need to have Saasu set up correctly for your business? Just want the bookkeeping and BAS done? WE can assist you with Saasu in the following ways:</p>
                <br>
                <li>We can transfer your current accounting information to a new Saasu file.</li>
                <li>We can create and customise a new Saasu accounting file for new businesses.</li>
                <li>We can advise on and integrate 3rd party plug ins for your Saasu software.</li>
                <li>We can provide an affordable Saasu bookkeeping solution to suit your business.</li>
                <li>We can also provide training so you can understand how Saasu works too.</li>
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
                <li>Local experienced bookkeeping experts - Our Saasu Bookkeepers provide a mobile bookkeeping service for businesses in Brisbane, Gold Coast, Sunshine Coast, Adelaide, Perth, Newcastle and any of the surrounding suburbs.</li>
                <li>Let our bookkeepers come to you - With offices in Brisbane, Sunshine Coast, Gold Coast, Adelaide, Perth and Newcastle we can provide our mobile bookkeeping service to Noosa, southward to to Tweed Heads and westward out to Ipswich.</li>
                <li>Australia wide Saasu bookkeeping - No matter where in Australia you are if you need Saasu bookkeeping services we have you covered. As our clients have moved around Australia they have wanted to take our services with them, so we have refined our Saasu bookkeeping service so we can offer it anywhere in Australia. Please call us and ask how it works.</li>
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
                <li>Certified Saasu professionals - We Have Saasu certified bookkeepers ready to help you. All our bookkeepers stay up to date with changes in small business legislation and new developments with Saasu in order to deliver the highest level of service to our clients.</li>
                <li>We understand small business - We understand the challenges that small businesses face in today's ever changing economy as our bookkeepers work with small businesses everyday. We try to make our services flexible, affordable and readily available so you get the bookkeeping support when you need it.</li>
                <li>Use our knowledge for your business - We have a large team of bookkeeping and accounting professionals at Darcy Bookkeeping. Collectively we have an extremely large knowledge base for our clients to draw from so we can answer the tough questions right the first time.</li>
                <li>Get the right bookkeeper for your business - We trust only the best accounting specialists to manage your books, we take our time when bringing on new bookkeepers to join our team. We do our best to match the bookkeeper with the right skill sets to match your business needs as we understand all businesses are different.</li>
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
                <p>Our bookkeeping services come in different modes to suit our clients of varying sizes from different industries. We mix and match our services in order to suit each of our clients:</p>
                <li>Our Saasu bookkeepers provide a face to face service where we can come to you in South East QLD.</li>
                <li>We offer a remote (off site) or online bookkeeping service where all work is done form our office.</li>
                <li>Our bookkeepers provide a pick up and drop off service where we process your paperwork and return it when we are done.</li>
                <li>We provide bookkeeping, accounting and taxation services so you can get everything done at the one place.</li>
            </div>
        </div>
    </div>
</div>

<!-- Modal for OUR SAASU BOOKKEEPERS-->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModal6Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal6Label">OUR SAASU BOOKKEEPERS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Rest easy when your books are in our hands</p>
                <p>Our bookkeeping team is the back bone of our business. We know that our services are only as good as the people we have, as such we are very picky about who joins our team. Below is a profile of one of our typical bookkeepers:</p>
                 <br>
                <li>Highly experienced 10 years +</li>
                <li>Accountant or Registered BAS Agent</li>
                <li>Formal qualification - Degree, Diploma or Certificate IV in accounting</li>
                <li>Experts in SAASU software</li>
                <li>Strong track record working with small businesses</li>
                <li>Easily take care of the day to day bookkeeping</li>
                <br>
                <p>Have a bookkeeper matched to your specific business needs</p>
                <p>We use the following criteria to match the right bookkeeper from our team to your business:</p>
                <br>
                <li>Industry you operate in</li>
                <li>Your bookkeeping needs</li>
                <li>Your business structure</li>
                <li>Your business's location</li>
            </div>
        </div>
    </div>
</div>
@endsection