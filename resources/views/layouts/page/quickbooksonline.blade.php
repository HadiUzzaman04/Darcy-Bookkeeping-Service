@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url({{url('website/images/all-software.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>QUICKBOOKS BOOKKEEPER SERVICES</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team-members">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>QUICKBOOKS BOOKKEEPER SERVICES</h2>
                </div>
                <p>Every week businesses turn to us for their Intuit Quickbooks bookkeeping needs. Certified Quickbooks bookkeepers ready to help you today.</p>
            </div>
        </div>
    </div>
</div>

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product-item">
                    <img style="width: 80px; height: 80px; vertical-align: middle" src="{{asset('website/images/first.png')}}" alt="">
                    <div class="down-content">
                        <h4>OUR QUICKBOOKS SERVICES</h4>
                        <p>We provide everyday BAS and bookkeeping services for regular businesses using Intuit Quickbooks Online. Learn more about our services.</p>
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
                        <h4>QUICKBOOKS ONLINE SOFTWARE</h4>
                        <p>Not sure if Intuit Quickbooks Online is right for your business? Not sure what Quickbooks Online has to offer? Ask us, we can help you.</p>
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
                        <p>Our Quickbooks bookkeeping reaches the whole of Australia but we offer face to face services in Brisbane, Sunshine Coast, Gold Coast, Adelaide, Perth and Newcastle.</p>
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
                        <p>We aim to exceed our clients expectation by employing only the best bookkeepers to look after your books. All services are supported by tax agents</p>
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
                        <p>We offer our Intuit Quickbooks bookkeeper services in a number of different forms to suit the growing demand for our services.</p>
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
                        <h4>QUICKBOOKS BOOKKEEPING EXPERTS</h4>
                        <p>We have Quickbooks bookkeepers who are certified by Intuit who are ready to help you. All our bookkeepers are tertiary qualified.</p>
                        <span>
                            <a href="#" data-toggle="modal" data-target="#exampleModal6">Read More</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal for OUR QUICKBOOKS SERVICES-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1Label">OUR QUICKBOOKS SERVICES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>We are ready to assist with any Intuit Quickbooks Online bookkeeping problems or questions you may have, from basic data entry to BAS lodgement and complex management reports, we can assist. Let us help you stay tax office complaint and start gaining financial insight into your business.</p>
                <p>Listed below are a few of the services we can help you with:</p>
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
                <br>
                <p>Get Your Business Off to The Best Start - Make sure you employ the best accounting software, systems and processes for your business which will save you money and time now and well into the future. Darcy Bookkeeping can help you create the perfect system suited for your business.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal for QUICKBOOKS ONLINE SOFTWARE-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2Label">QUICKBOOKS ONLINE SOFTWARE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Let us help you discover if Quickbooks Online bookkeeping software is right for your business. Give your business a leg up on the competition, we are here to help you each step of the way.</p>
                <p>Our Intuit Quickbooks Online qualified bookkeepers are ready to help you in the following ways with your bookkeeping needs:</p>
                <br>
                <li>Import your accounting data from other software to Quickbooks Online</li>
                <li>Set up your new Quickbooks Online files suited for your business</li>
                <li>Integrate with other business applications like online shopping carts</li>
                <li>General day to day BAS and bookkeeping services using Quickbooks Online</li>
                <li>Training and Tutorials to make you familiar with Quickbooks Online</li>
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
                <li>Local Bookkeeping Experts - We provide bookkeeping services even in the comfort of your own office! Our Bookkeepers will visit you or you can drop by our offices at Brisbane, Sunshine Coast, Gold Coast, Adelaide, Perth and Newcastle.</li>
                <li>Face to Face Bookkeeping Services - From one of our 6 offices, our bookkeepers can come to you. We provide mobile bookkeeping services from Noosa on the Sunshine Coast to Brisban</li>
                <li>Bookkeeping Anywhere in Australia - Darcy Bookkeeping & Business Services does not only provide services in South East QLD, but anywhere in Australia! Get the Quickbooks Online bookkeeping Assistance you need regardless of where your business is located, as Quickbooks Online is a cloud based accounting software program.</li>
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
                <p>We take pride in providing excellent and reliable bookkeeping services, hiring only expert Quickbooks bookkeepers assisted by our Qualified Accountants.</p>
                <br>
                <li>Certified Quickbooks Online Specialists - Our Quickbooks Online Bookkeepers are trained and certified by Intuit to ensure accurate and efficient bookkeeping solutions are being provided. We know Quickbooks Online from end to end. Also, we ensure we are up to date with the latest news and developments regarding Quickbooks Online so we can take full advantage to provide you with the best possible bookkeeping service.</li>
                <li>Customised Business Solutions - Every business and business owner is unique, which means what suits one business may need to suit your business. So we create bookkeeping solutions tailored to suit your business needs and management style, we amke our services work around our clients.</li>
                <li>Years of Experience, Vast Pool of Knowledge - With decades of experience collectively from our bookkeeping experts, and the size of our organisation, we are able to meet the tough questions and challenges that businesses require. We have all the necessary resources to get the job done right and done quickly.</li>
                <li>Accountant Supported Bookkeeping Service - Our bookkeepers are all supported by qualified accountants and thoroughly trained to solve bookkeeping problems regardless of your industry. Our experts are armed with years of accounting experience across a wide variety of industries to ensure your business needs are met.</li>

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
                <p>With Quickbooks Online, we provide the most versatile solutions to ensure the software fits perfectly with your business requirements. We make Quickbooks online seem like it's made specifically for you. How does it work?</p>
                <br>
                <li>We can provide onsite bookkeeping services. You don't have to leave your office; we will be right there to assist you.</li>
                <li>Quickbooks Online makes it possible to remotely assist you with your bookkeeping requirements, without the need of personal meetings.</li>
                <li>Our Quickbooks bookkeeper will pick up and drop off all the necessary documents once we have updated your accounting file.</li>
                <li>Use Darcy Bookkeeping & Business Services for all your bookkeeping, accounting and taxation needs. You won't need to look anywhere else.</li>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Quickbooks Bookkeeping Experts-->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModal6Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal6Label">Quickbooks Bookkeeping Experts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Rest Easy With Our Certified Intuit Quickbooks Bookkeepers - We have a very strict criteria which we apply when it comes to hiring a Darcy Bookkeeping - bookkeeper. This ensures that we provide only the very best bookkeeping services to businesses who seek our bookkeeping assistance. A typical work history for our bookkeepers look similar to this:</p>
                 <br>
                <li>10 years or more of accounting experience</li>
                <li>Registered BAS Agent or qualified Accountant</li>
                <li>Tertiary Qualification with an Accounting Degree, Diploma or Certificate IV</li>
                <li>Quickbooks Online Certified</li>
                <li>Experience working in a number of different industries</li>
                <li>Ability to meet daily bookkeeping and accounting challenges</li>
                <br>
                <p>The Right Bookkeeper For Your Business - To ensure we achieve the best possible bookkeeping service for each business, we look at a number of different factors that will determine who is the best bookkeeper to fit your business needs:</p>
                <br>
                <li>Industry the business is active in</li>
                <li>Your unique Bookkeeping needs</li>
                <li>Existing accounting software, if applicable</li>
                <li>Where the business is located</li>
            </div>
        </div>
    </div>
</div>
@endsection