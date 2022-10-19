@extends('layouts.master')
@section('content')
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Find the best bookkeepers under one roof</h4>
                <a href="{{route('contactus')}}" class="filled-button">Give us a message</a>
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <h4>To know more about us</h4>
                <a href="{{route('aboutus')}}" class="filled-button">About us</a>
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <h4>Find the best bookkeepers under one roof</h4>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->
<br>
<div class="products">
    <div class="container">
        <h3>WHY CHOOSE US</h3>
        <p>Here are some of the reasons why local businesses are rushing to use our expert bookkeeping services:</p>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="product-item">
                    <div class="down-content">
                        <h4>AFFORDABLE</h4>
                        <p>Our service rates are one of the best in the industry from $33/hour or $22/week</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <div class="down-content">
                        <h4>QUALIFIED</h4>
                        <p>We are Registered BAS and Registered Tax Agents</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <div class="down-content">
                        <h4>SATISFIED</h4>
                        <p>Over 1000+ happy clients around Australia and still counting</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <div class="down-content">
                        <h4>REPUTABLE</h4>
                        <p>We have been in business for 10 years, improving our service to our clients each year</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <div class="down-content">
                        <h4>MOBILE</h4>
                        <p>Our Bookkeepers can work at your office, work from our office or pick up paperwork</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <div class="down-content">
                        <h4>FLEXIBLE</h4>
                        <p>We don't lock our clients in contracts and have no sign up costs or hidden service fees</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <div class="down-content">
                        <h4>INSURED</h4>
                        <p>Fully Insured with Professional Indemnity and Public Liability insurance</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <div class="down-content">
                        <h4>CONVENIENT</h4>
                        <p>You can combine your bookkeeping and accounting with us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <p>We are one of the fastest growing bookkeeping and accounting services firms in Saskatoon.</p>
                    <p>Why are we growing so quickly? Because we provide a top quality service at affordable service rates that make our services sustainable for small and medium businesses.</p>
                    <a href="{{route('aboutus')}}" class="filled-button">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="assets/images/about-1-570x350.jpg" alt="">
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
                    <h2>Why Choose Us</h2>
                </div>
                <p>Here are some of the reasons why local businesses are rushing to use our expert bookkeeping services:</p>
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
                        <h4>OUR BOOKKEEPING SERVICES</h4>
                        <p>We look after the bookkeeping needs of over 500 businesses in many different industries and of varying sized. Our Bookkeepers can come to you or we can work at our office. Common bookkeeping services that we provide for our clients include:</p>
                        <li>BAS preparation and lodgement</li>
                        <li>Bookkeeping and Tax Catch up</li>
                        <li>Payroll and Superannuation</li>
                        <li>General bookkeeping services</li>
                        <li>Accounts Payable/Receivable Management</li>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item">
                    <img style="width: 80px; height: 80px; vertical-align: middle" src="{{asset('website/images/forth.JPG')}}" alt="">
                    <div class="down-content">
                        <h4>LOW COST BOOKKEEPING RATES</h4>
                        <p>Whilst achieving the highest level of service quality we also try our best to make our bookkeeping services cost effective for our clients. We tailor our services to meet the demands and the budget of your business no matter if your business is well established and needs us on daily or weekly basis or if you are a start -up business and only need us on an as required basis. Our goal is to help our clients succeed by making the business “back office” work as efficiently as possible.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <img style="width: 80px; height: 80px; vertical-align: middle" src="{{asset('website/images/computerSoftware.png')}}" alt="">
                    <div class="down-content">
                        <h4>SOFTWARE WE USE EVERY DAY</h4>
                        <p>As small to medium business bookkeeping experts we leverage accounting software to try and help our clients realise cost and time savings. We understand that not all businesses need a complete end to end accounting system, and as such help to implement systems and processes based on our clients business needs, industry, business goals and budget. General accounting software programs we provide bookkeeping services for everyday include:</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <img style="width: 80px; height: 80px; vertical-align: middle" src="{{asset('website/images/fifth.png')}}" alt="">
                    <div class="down-content">
                        <h4>ACCOUNTING AND TAX SERVICES</h4>
                        <p>Our bookkeeping services come hand in hand with our accounting and taxation services. We have CPA qualified Accountants who can prepare and manage your taxation requirements. This makes our firm a one stop destination for all your bookkeeping, accounting and taxation requirements which saves our clients time, hassle and money. If you already have an Accountant you work with that's fine with us and are happy to work with your current Accountant to help you achieve your business goals and grow your business.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item">
                    <img style="width: 80px; height: 80px; vertical-align: middle" src="{{asset('website/images/second.png')}}" alt="">
                    <div class="down-content">
                        <h4>WHY OUR SERVICES WORK</h4>
                        <p>We have proven internal bookkeeping systems that continue to work for our clients week in and week out. When a client or business comes on board with Darcy Bookkeeping & Business Services we try to best match one of our Bookkeepers with your business based on your industry, the size of your business, the accounting software your business uses, your business location and your general business bookkeeping needs in order to make a difference in your business immediately which helps the client business to grow.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <img style="width: 80px; height: 80px; vertical-align: middle" src="{{asset('website/images/sixth.png')}}" alt="">
                    <div class="down-content">
                        <h4>OUR QUALIFIED BOOKKEEPERS</h4>
                        <p>We take the greatest of care when choosing a bookkeeper to join the Darcy Bookkeeping team. All our bookkeepers must meet the minimum qualification and experience requirements to have the privilege of servicing our clients. We are always striving to achieve the best results we can for our clients and realise the strength of our business lies in the quality of our bookkeeping team. As such all our Bookkeepers must either be registered BAS Agents or qualified Accountants and this is one of the ways we can guarantee the quality of our services to our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="happy-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Happy Clients</h2>

                    <a href="{{route('testimonial')}}">View More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-clients owl-carousel text-center">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Jhon Smith</h4>
                            <p class="n-m"><em>"Darcy Bookkeeping has provided a high level bookkeeping service at a time in our business when it was sorely needed."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Jane Snow</h4>
                            <p class="n-m"><em>"I have been very satisfied with the MYOB bookkeeping services they have provided for my business."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Antony Davis</h4>
                            <p class="n-m"><em>"We have been very happy and satisfied with his highly professional service in preparing our monthly accounts."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Steave Smith</h4>
                            <p class="n-m"><em>"I needed to bring my MYOB accounts up to date fast and Darcy Bookkeeping really delivered."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Jane Smith</h4>
                            <p class="n-m"><em>"Depth of knowledge with both accounting and business operation has proven invaluable for my business."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Charls Brown</h4>
                            <p class="n-m"><em>"Where their services have really hit the mark is with the level of financial insight that we now have into the business."</em></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>you can contact us through here </h4>
                            <p>Contact us or request a cllback from us</p>
                        </div>
                        <div class="col-lg-4 col-md-6 text-right">
                            <a href="{{route('contactus')}}" class="filled-button">Contact Us</a>
                        </div>
                    </div>
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
                    <h2>MORE ABOUT US</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="accordion">
    <div class="col-md-12">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Our company values
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            Our firm holds strong core values for the benefit of our clients. Our chosen values influence the way our bookkeepers and accountants do business and governs the relationship our firm has with our clients
            <li>Integrity</li>
            <p>We are proud to stand by strong moral principles when providing financial related services to our clients. You can trust us to conduct business ethically and to the highest standard.</p>
            <li>Trust</li>
            <p>Trust is vital in any business relationship, especially for a company that is handling the books for your company. With a positive reputation and a wealth of happy customers praising our services, you can trust us with handling your business bookkeeping needs.</p>
            <li>Reliability</li>
            <P>Our Bookkeepers are readily available to provide bookkeeping Brisbane wide. We also offer bookkeeping Sunshine Coast wide as well as bookkeeping Gold Coast wide, bookkeeping Adelaide wide, bookkeeping Perth wide and bookkeeping Newcastle wide. We are easily accessible and you can rely on us to work however, whenever and wherever you need. We are happy to answer any of your questions and assist with any bookkeeping, tax or accounting needs you may have at a time that suits you.</P>
            <li>Strong Relationships</li>
            <p>The cornerstone to any successful partnership is a strong relationship. We strive to maintain strong relationships with our clients across Brisbane, Sunshine Coast, Gold Coast, Adelaide and Newcastle via regular contact in person, over the phone and via email. We keep our clients informed across everything that we do and we regularly provide updates on any progress the client wishes to know about. We strongly believe in contributing to the success of every business we cater to.</p>
            <p>Our aim to establish long lasting business relationships with our clients is built upon our core values. If you appreciate the values we hold and wish to work with a company that delivers on these core values, talk to us at Darcy Bookkeeping and Business Services. We are committed to providing you with a bookkeeping, tax and accounting service that is suited to your business needs and aligned to your company values.</p>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Why do you need a personal bookkeeping service?
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
            Managing the bookkeeping, taxation and accounting needs for your business can be a very time consuming task. Don't waste your precious hours on bookkeeping when you could spend your time more productively by focusing on running your business.
            This is why it is extremely worthwhile to seek out professionals like Darcy Bookkeeping & Business Services to take care of the books for you in a professional manner with our qualified bookkeepers.
            Benefits of having a professional bookkeeping service handle your books
            <li>Save time and money</li>
            <p>By handing over the responsibility to a professional, qualified bookkeeping service that specialises in ensuring your business finances and bookkeeping are in top shape. You save time by taking the responsibility off your hands and you also save money thanks to the efficiency of our experienced bookkeepers who will help improve the current processes and systems in place.</p>
            <li>Meet Tax Office Obligations</li>
            <p>Our qualified bookkeepers ensure that all Tax office deadlines are met monthly, quarterly and annually for BAS, Superannuation and taxation so you never fall behind.</p>
            <li>Get your finances and records in order</li>
            <p>We are very experienced at helping businesses bring their bookkeeping, accounting and taxation affairs up to date. We have helped many local businesses across Brisbane, Gold Coast, Sunshine Coast, Adelaide, Perth and Newcastle to bring their lodgements up to date and manage existing tax debt whilst working with the tax office to reduce the pressure on our clients.</p>
            <p>When relying on a professional bookkeeping service to take care of your bookkeeping and finances, make sure that you approach a company that you can trust. At Darcy Bookkeeping & Business Services, we have the qualified staff and positive client feedback you need to feel secure in choosing us for your bookkeeping needs.</p>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Choose Darcy bookkeeping & business services for your accounting and bookkeeping needs
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
            <p>We have the qualified bookkeepers you need, providing you with a full range of services including payroll, superannuation, general bookkeeping and accounts payable just to name a few. Our bookkeeping also goes hand in hand with our accounting and taxation services for your benefit. All of this is offered to you at an affordable price and at a convenient location near you.</p>
            <li>If you need bookkeeping in Brisbane, visit out office at Level 21, 345 Queen Street or we can come out and visit at a time that is convenient to you.</li>
            <li>If you require bookkeeping on the Sunshine Coast, Unit 4/61 Bulcock Street Caloundra is the location for you to visit. We can also come at to you for your convenience.</li>
            <li>If you're on the Gold Coast, come see us at 13/50 Cavill Avenue, Surfers Paradise. Alternatively we can arrange to meet you at your place.</li>
            <li>If you're located in Adelaide, you can visit us at Level 3, 97 Pirie Street, Adelaide. Another option is if it suits you better we can also come to you.</li>
            <li>If you're business is located in Perth you can visit our office at Level 24/77 St Georges Terrace, Perth or if you prefer our Perth bookkeepers can come to you.</li>
            <li>If you require Newcastle bookkeeping services we are located at 17 Bolton Street, Newcastle. Alternatively we can come to your office or place of business.</li>
            <p>Darcy Bookkeeping & Business Services is the leading one stop destination for all your bookkeeping, accounting and taxation requirements in South East Queensland with a rich history of satisfying our client's bookkeeping needs. Contact us today and receive the best bookkeeping and accountant services to suit your needs.</p>
            </div>
        </div>
    </div>
</div>
<br>
@endsection