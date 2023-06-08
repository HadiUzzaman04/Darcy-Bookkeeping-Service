@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url({{url('website/images/all-software.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>RECKON BOOKKEEEPING SERVICES</h2>
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
                    <h2>RECKON BOOKKEEEPING SERVICES</h2>
                </div>
                <p>We help many businesses everyday with Reckon Accounts and Reckon One Bookkeeping needs. Our bookkeepers are proven experts with Reckon Software.</p>
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
                        <h4>OUR RECKON SERVICES</h4>
                        <p>No matter how big or small your Reckon bookkeeping need is - we can help. General bookkeeping, Payroll, Accounting and more</p>
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
                        <h4>RECKON SOFTWARE</h4>
                        <p>Not sure whether Reckon Accounts/One is right for your business? Don't know much about bookkeeping or how to use software?</p>
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
                        <p>Our bookkeepers can come to you. We provide a face to face service in Brisbane, Sunshine Coast, Gold Coast, Adelaide, Perth and Newcastle.</p>
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
                        <p>We are Accounting Agents registered with the Tax Practitioners Board and all our services are supported by qualified Accountants.</p>
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
                        <p>We understand every business is unique and make our Reckon bookkeeping services flexible to suit each individual business.</p>
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
                        <h4>OUR RECKON BOOKKEEPERS</h4>
                        <p>Our Reckon bookkeepers are all Registered Accounting Agents or qualified Accountants, with years of experience working with small businesses..</p>
                        <span>
                            <a href="#" data-toggle="modal" data-target="#exampleModal6">Read More</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal for OUR RECKON SERVICES-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1Label">OUR RECKON SERVICES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>We offer our clients advanced software set up and regular bookkeeping and accounting services. We can tailor make our bookkeeping services to ensure your business is tax compliant and the regular functions of your business happen like clockwork with minimal effort and cost.</p>
                <p>Some of our services include:</p>
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
                <li>Save time and future hassle - If you have just started or purchased a new business contact us and find out what software would work best for your business. We can also establish systems and processes for your business that could save you thousands of dollars and hundreds ow working hours.</li>
                <li>We want your business to succeed - Finally, we are focussed on our clients success. If we can help your business to succeed, we get a great name in the industry and hopefully you will rave about us to other business people you know which results in referral work for our busines</li>
            </div>
        </div>
    </div>
</div>

<!-- Modal for RECKON SOFTWARE-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2Label">RECKON SOFTWARE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Our specialised and highly trained Reckon bookkeepers know the software from the inside out. Let us help you by taking on the bookkeeping load of your business or by providing training so you can take on some of the bookkeeping load yourself.</p>
                <p>We service clients using Reckon One and Reckon Accounts. A summary of our services are below:</p>
                <p>Our Reckon bookkeepers can assist you by:</p>
                <li>Become your accounts department and take care of all the day to day bookkeeping needs.</li>
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
                <li>The Trusted Local Bookkeepers - Our expert bookkeepers provide a local mobile service where we can come to you in the foolwoing are of Australia including Brisbane, Gold Coast, Sunshine Coast, Adelaide, Perth and Newcastle.</li>
                <li>Local office Near You - Our offices in Brisbane, the Sunshine Coast, Gold Coast, Adelaide, Perth and Newcastle provide a strong local partnership with the community and surrounding suburbs. Our bookkeeping professionals can come to give you the maximum benefit of our affordable services.</li>
                <li>Bookkeeping How You Need It - We believe in face to face contact for you to get the best result for your business. But, we also offer off-site or virtual bookkeeping support and services to allow more freedom with your time.</li>
                <p>Our low pricing and high value service is one of the best in Australia. We are your local bookkeeping service and want to work with you in order to strengthen the local community and help grow your bottom line by streamlining your in-house procedures.</p>
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
                <li>Making Your Business The Priority - We aim to provide excellent bookkeeping services held to the highest level of professionalism and expertise in the industry. Understanding and meeting our client's needs is one of our top priorities. We work with your situation to provide the best bookkeeping and accounting service that suits your needs.</li>
                <li>Knowledge You Need To Succeed - Due to this size of the professional collective knowledge of our bookkeepers and accountants we can come up with the correct answer to the hard questions. We work hard to provide you with comprehensive knowledge of industry advice and guidance, procedures and law to make sure your business stays on track.</li>
                <li>The Right Bookkeeper For Your Business - All of our professionals are fully qualified and experienced in the field allowing us to meet the needs of each client. We know no two businesses are the same, and our team will hand pick one of our professional bookkeepers or accountants based on your criteria to ensure the right fit to your needs the first time.</li>
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
                <p>Our Reckon bookkeeping services are specifically structured to fit within our client's business needs. We focus on three key points - affordability, flexibility and quality to ensure our clients get the best service possible.</p>
                <li>Affordability - Low cost services to easily fit into your budget.</li>
                <li>Flexibility - Our bookkeepers come to you through our mobile on-site service, or we can pick up the paperwork and return them to you on a specified date. We also offer virtual bookkeeping, relaying completed documents via email on a secure network.</li>
                <li>Quality - Each member of our team has years of experience in the field and are highly qualified in bookkeeping and confidentiality allowing them to provide safe, secure, trusted and accurate bookkeeping services and support.</li>
            </div>
        </div>
    </div>
</div>

<!-- Modal for OUR RECKON BOOKKEEPERS-->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModal6Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal6Label">OUR RECKON BOOKKEEPERS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Rest easy and know that you are in good hands with Darcy Bookkeeping</p>
                <p>At Darcy Bookkeeping & Business Services we employ only the best individuals to help you with your business needs. Each member of our staff is carefully selected to make sure they meet our strict criteria and guidelines. All of our bookkeepers have a similar profile to this</p>
                 <br>
                <li>10 years+ in the bookkeeping and accounting profession</li>
                <li>Either a Registered Accounting agent or Accountant level professional</li>
                <li>Qualifications including either Degree, Diploma or Certificate IV in accounting</li>
                <li>Certified consultant or experienced working with Reckon software</li>
                <li>Extensive experience working with small and medium businesses</li>
                <li>Able to breeze through day to day bookkeeping tasks required by everyday businesses</li>
                <br>
                <p>A bookkeeper ready made for your business</p>
                <p>Each business is unique, so where possible we will match your requirements and wishes to one of our bookkeepers who are most familiar with your line of business. This can save time, money, hassle. The right bookkeeper can provide valuable industry insight and add value to your business. We allocate our bookkeeper to a business based on this criteria:</p>
                <br>
                <li>The industry of the business</li>
                <li>Regular bookkeeping needs of the business</li>
                <li>Accounting software type of the business</li>
                <li>The location of the business</li>
            </div>
        </div>
    </div>
</div>
@endsection