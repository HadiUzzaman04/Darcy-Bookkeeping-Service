<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
            <div class="logo" style="height: 52px; width: 135px; ">
                    <img src="{{asset('website/images/bookkeeping_logo.JPG')}}" style="height: 130%; width:130%; object-fit: cover;" alt="Logo">
                </div>             </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Bookkeeping</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('payroll.service')}}">Payroll Service</a>
                            <a class="dropdown-item" href="{{route('account.payable')}}">Accounts Payable</a>
                            <a class="dropdown-item" href="{{route('accounts.recievable')}}">Accounts Recivable</a>
                            <a class="dropdown-item" href="{{route('virtual.cfo')}}">Virtual CFO</a>
                            <a class="dropdown-item" href="{{route('bas.service')}}">Bas Services</a>
                            <a class="dropdown-item" href="{{route('catch.up.bookkeeping')}}">Catch Up Bppkkeeping</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('accounting')}}">Accounting</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Software</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('allsoftware')}}">All Software</a>
                            <a class="dropdown-item" href="{{route('myob')}}">Myob</a>
                            <a class="dropdown-item" href="{{route('rackon')}}">Reckon</a>
                            <a class="dropdown-item" href="{{route('xero')}}">Xero</a>
                            <a class="dropdown-item" href="{{route('saasu')}}">Saasu</a>
                            <a class="dropdown-item" href="{{route('quickbooks')}}">QuickBooks Online</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Company</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('aboutus')}}">About Us</a>
                            <a class="dropdown-item" href="{{route('contactus')}}">Contact Us</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('testimonial')}}">Testimonials</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>