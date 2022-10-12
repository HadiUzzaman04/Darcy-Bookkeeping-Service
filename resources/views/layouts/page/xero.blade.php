@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url({{url('website/images/all-software.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>XERO BOOKKEEPING SERVICES</h2>
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
                    <h2>XERO BOOKKEEPING SERVICES</h2>
                </div>
                <p>We Have Helped Hundreds Of Local businesses With Their Xero Bookkeeping. We Are Platinum Xero Partners and Advisors Ready To Help You With Xero Too.</p>
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
                        <h4>OUR XERO SERVICES</h4>
                        <p>If you have a requirement that has something to do with Xero we can help. We offer a wide range of services from Data entry through to tax lodgement.</p>
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
                        <h4>XERO SOFTWARE</h4>
                        <p>Are you new to Xero or wondering whether Xero would suit your business? Speak to us now and get the answers to your questions.</p>
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
                        <p>We provide Xero bookkeeping Australia wide. We have offices in Brisbane, Sunshine Coast, Gold Coast, Perth, Adelaide and Newcastle.</p>
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
                        <p>We strive to provide the highest level of service. Our Bookkeepers are supported by qualified Accountants so we get it right everytime.</p>
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
                        <p>We make our Xero bookkeeper services flexible to suit your business needs. Use our Xero services where and how you need them.</p>
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
                        <h4>OUR XERO BOOKKEEPERS</h4>
                        <p>All our bookkeepers are qualified BAS agents and Accountants. They have a wealth of experience dealing with Xero and small/medium businesses.</p>
                        <span>
                            <a href="#" data-toggle="modal" data-target="#exampleModal6">Read More</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal for Our Xero Services-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1Label">Our Xero Services</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>No matter what your bookkeeping requirements are we can assist. Whether your behind in your bookkeeping and BAS lodgements, need regular ongoing bookkeeping or just needs some one off assistance we have a solution for you.</p>
                <p>Some of the services we provide are:</p>
                <br>
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
                <li>Get The books right from Day 1 - If you are a starting up or buying a new business, speak to us today and save your business time and money by setting up systems and processes that will work for you today and into the future.</li>
            </div>
        </div>
    </div>
</div>

<!-- Modal for XERO SOFTWARE-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2Label">XERO SOFTWARE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Whether you are currently using a different accounting software package or you are considering whether Xero might be the best option for your business our bookkeepers can help you. We can help you in the following ways if you are interested in or already using Xero.</p>
                <li>We can transfer your current accounting data through to Xero.</li>
                <li>We can create a new Xero accounting file for your business.</li>
                <li>We can advise on alternatives and Add On's for your Xero software.</li>
                <li>If you are a current Xero client we can provide a bookkeeping solution to suit your business.</li>
                <li>We can also provide training so you can understand how Xero works too.</li>
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
                <li>Reliable Local Bookkeeping services - We provide a mobile service where we can come to you or you to us whatever works best for you, for these areas including Brisbane, Sunshine Coast, Gold Coast, Adelaide, Perth, Newcastle and the surrounding suburbs.</li>
                <li>A Leading Australian Xero Bookkeeper Firm - We have 5 offices in Australia that specialise in Brisbane Xero bookkeeping, Sunshine Coast Xero bookkeeping, Gold Coast Xero bookkeeping, Adelaide Xero bookkeeping, Perth Xero bookkeeping and Newcastle Xero bookkeeping. We can come to you if you are located from Noosa on the Sunshine Coast and south to Brisbane then down to Tweed Heads on the Gold Coast or in or around one of our other office locations.</li>
                <li>Australia Wide Xero Bookkeeping - If you are located outside of our office locations we also have a solution for you. We find as some of our clients relocate to other parts of Australia they want to take our Xero services with them. So if you are outside of our positioned offices contact us today and find out how our online Xero bookkeeping services work.</li>
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
                <li>Certified Xero Specialists - Our Xero bookkeepers Brisbane, Xero bookkeepers Gold Coast, Xero bookkeepers Sunshine Coast, Xero bookkeepers Adelaide, Xero bookkeepers Perth and Xero bookkeepers Newcastle are certified by Xero which means we are specialists at using this software. Our bookkeepers stay up to date with new features of Xero as they are rolled out so we can take advantage of these new features to manage your bookkeeping as efficiently as possible</li>
                <li>Understanding Each Individual Business - We understand that each of our clients are unique and as such partner one of our bookkeeping professionals to suit the individual business needs. We take into account the industry you operate in, current accounting software, location and specific requirements of the role you need to fill.</li>
                <li>Our Vast Collective Knowledge - Because of the size of our firm and the experience and expertise of the people involved in our business we are often able to answer the difficult questions that our competitors cannot. And if we cannot give you the answer right away chances are we know where to find it.</li>
                <li>Trusted Bookkeeping Professionals - Our bookkeepers are all Accountants or BAS Agent qualified so you know that a professional is managing your bookkeeping requirements. Our bookkeepers also bring with them many years accounting experience in a wide range of industries.</li>
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
                <p>We tailor our Xero bookkeeping services in a number of different ways by taking a one size does not fit all approach. We have found that with our service options below we able to meet all our clients needs.</p>
                <li>Our bookkeepers offer an on site Bookkeeping Service (we can come to you).</li>
                <li>Our bookkeepers offer a remote or online Xero Bookkeeping Service where no face to face meetings are required.</li>
                <li>Our bookkeeper can pick up and drop off your paperwork once your Xero Accounting file has been updated</li>
                <li>Our firm also offers a full suite of Bookkeeping, Accounting and Taxations services so you don't need to go anywhere else.</li>
            </div>
        </div>
    </div>
</div>

<!-- Modal for OUR XERO BOOKKEEPERS-->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModal6Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal6Label">OUR XERO BOOKKEEPERS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Feel at ease with fuss free Xero bookkeeping</p>
                <p>We are strict with the standard of Bookkeepers that join our firm. The typical Xero bookkeeper at Darcy Bookkeeping would have a profile that would look something like this:</p>
                 <br>
                <li>Generally 10 years or more accounting experience</li>
                <li>Is a Registered BAS Agent or Accountant</li>
                <li>Tertiary Qualifications of either an Accounting Degree, Diploma or Certificate IV</li>
                <li>Xero certified</li>
                <li>Experience managing the bookkeeping needs for different businesses across different industries</li>
                <li>Able to with ease carry out general bookkeeping task</li>
                <br>
                <p>We Match A Bookkeeper To Suit Your Unique Business</p>
                <p>We ask each potential client a number of different questions prior to engaging our services, in order for us to best match the right bookkeeper for your business based on the following criteria:</p>
                <br>
                <li>What industry you operate in?</li>
                <li>Bookkeeping needs of the business?</li>
                <li>What accounting software if any?</li>
                <li>Where the business is located?</li>
            </div>
        </div>
    </div>
</div>
@endsection