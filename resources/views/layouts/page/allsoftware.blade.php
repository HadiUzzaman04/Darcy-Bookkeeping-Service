@extends('layouts.master')
@section('content')

<div class="page-heading about-heading header-text" style="background-image: url({{url('website/images/all-software.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>All Software</h2>
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
                    <h2>EXPERTS IN ACCOUNTING SOFTWARE</h2>
                </div>
                <h5>Over 20 000 Hours bookkeeping Across 32 Different Industries Last Year For Local Businesses</h5>
                <p>The Team at Darcy Bookkeeping & Business Services are either Certified Consultants or experts in using Xero, MYOB, Quickbooks Online, Reckon and Saasu. We already service hundreds of clients that are using the software programs listed below, so you know you are in qualified and experienced hands with our bookkeepers.</p>
            </div>
        </div>
    </div>
</div>
<br>
<div id="accordion">
    <div class="col-md-12">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Which Software Best For You?
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
            Our bookkeepers have detailed knowledge of the accounting software we work with, and can recommend which software is best for your business based on your industry and unique bookkeeping requirements.
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Software Customation and Setup
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
            Our bookkeepers can come to you to discuss your bookkeeping needs and install and then customise your accounting software from our office or yours to suit your business, whichever you prefer.
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Want to Change From One Accounting Software to Another?
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
            Our bookkeepers can advise you of the advantages and disadvantages of each accounting software option including price, access, ease of use, key features and limitations. Should you wish we can then successfully transfer your accounting records from one program to another.
            </div>
        </div>
    </div>
</div>
<div id="accordion">
    <div class="col-md-12">
        <div class="card-header" id="headingFour">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Accounting Software Training
                </button>
            </h5>
        </div>

        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
            Our bookkeepers can also provide you with software training, so you can manage the basics of your own business bookkeeping needs. After the initial training we can assist as little or as much as your need, after all we are only a phone call or email away should you need any help.
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card-header" id="headingFive">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Use A Software Not Listed Here?
                </button>
            </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">
            Chances are we use it too. With over 40 bookkeepers on our team we have a huge knowledge and skill base. This means if you need bookkeeping for an ERP type software like SAP, Sage, Micronet, Syteline, Netsuite, MYOB EXO etc. there is a strong chance that we can help.
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card-header" id="headingSix">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Just Want Help With General Bookkeeping
                </button>
            </h5>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
            <div class="card-body">
            Do you need a bookkeeper to come to your office and assist with regular general bookkeeping or help to bring the books up to date. Well that is what we have done time after time for 100s of clients in happy clients in South East QLD.
            </div>
        </div>
    </div>
</div>
<br>

@endsection