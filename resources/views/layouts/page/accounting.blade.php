@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url({{url('website/images/bannar.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>ACCOUNTING AND TAX SERVICES</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="products">
    <div class="container">
        <h3>LEARN WHY BUSINESSES ARE TURNING TO US FOR THEIR ACCOUNTING NEEDS</h3>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="product-item">
                    <div class="down-content">
                        <h4>We Can Save You Money</h4>
                        <p>We are chuffed that we can Achieve exceptional results for our clients that are costing hundreds and sometimes even thousands of dollars more at other accounting firms. We are extremely transparent with our billing and will always provide a quote or approximation of fees involved prior to the start of each project we undertake so their are no surprises.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item">
                    <div class="down-content">
                        <h4>We Are Good At What We Do</h4>
                        <p>You are in the hands of accounting and tax experts when you choose to engage us. We have a team of Accountants with many years experience spanning across a large number of industries with a proven track record. Our firm is also a registered tax agent business which provides you with an assurance that we meet the criteria required by the Tax Practitioners Board.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item">
                    <div class="down-content">
                        <h4>Accountants You Can talk To</h4>
                        <p>Our promise to you is that your Accountant will take or return your phone call and will return your emails in a prompt and timely fashion. We understand that sometimes business gets really busy but if you are tired of continually having your accountant ignore or not return your calls or emails then you should consider moving your accounting service requirements to us.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item">
                    <div class="down-content">
                        <h4>We Are On Your Team</h4>
                        <p>We consider ourselves one of your business strategic partners with a vested interest in seeing your business win. Beyond ensuring your business remains compliant your success is very important to us because without our clients we would soon be out of business, so we will do our best to help you make and keep as much money in your pocket as possible.</p>
                    </div>
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
                    <h2>OUR ACCOUNTING SERVICES ADVANTAGE</h2>
                </div>
                <li>No need to be worried about a huge bill from us at tax time</li>
                <li>Know That we will return your phone call or email promptly</li>
                <li>We will do our best to ensure you don't miss a tax office due date again</li>
                <li>Feel at ease picking up the phone without looking at the clock</li>
                <li>Option of your bookkeeping and accounting needs completed all by us</li>
            </div>
        </div>
    </div>
</div>
<br>
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="product-item">
                    <img style="width: 440px; height: 250px" src="{{asset('website/images/business.jpg')}}" alt="">
                    <div class="down-content">
                        <h4>SERVICES FOR BUSINESSES</h4>
                        <p>Here are a list of services and solutions we regularly provide to businesses</p>
                        <li>Company, sole traders and trust tax returns</li>
                        <li>Prepare business financial statements</li>
                        <li>New business structure set up for trading</li>
                        <li>Due diligence on purchase of a business</li>
                        <li>Strategic tax advice and tax planning</li>
                        <li>Business performance review and advice</li>
                        <li>Capital gains tax advice and calculation</li>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="product-item">
                    <img style="width: 440px; height: 250px" src="{{asset('website/images/individual.jpg')}}" alt="">
                    <div class="down-content">
                        <h4>SERVICES FOR INDIVIDUALS</h4>
                        <p>Below is a list of services and solutions we provide regularly to our clients:</p>
                        <li>Individual tax returns</li>
                        <li>Strategic tax advice</li>
                        <li>End of year tax planning</li>
                        <li>Capital gains tax</li>
                        <li>Rental and investment properties</li>
                        <li>Foreign income</li>
                        <li>Self managed super funds</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection