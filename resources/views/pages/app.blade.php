@extends("pages.layout")

@section('head')

@endsection

@section('content')
<div class='appscreen'>
    <div class='topnav'>        
        <div class='left'>
            <span> Hello </span>
            <p> Lim </p>
        </div>
        <div class='right'>
            <img src='/img/icon/profile.png' class=' under-development' data-title='My Profile' data-message='Allow user to manage their account details, account setting and to set their charity preference'/>
        </div>
    </div>

    <div class='amount'>        
        <p>Your Balance </p>
        <a href='/transaction'><small class='badge badge-primary beat-animation'> Total Donation <span> RM 33.80 </span> </small> </a>
        <h1> RM 5,000.00 </h1>
    </div>

    <div class='action'>
        <div class='action-item item-1 under-development' data-title='Payment' data-message='Allow user to generate payment QR or scan QR code to make payment.'>
            <i class='ti ti-money'></i>
            <span>Payment</span>
        </div>
        <div class='action-item item-2 under-development' data-title='Transfer' data-message='Allow user to perform peer-to-peer balance transfer.'>
        <i class='ti ti-control-shuffle'></i>
            <span>Transfer</span>
        </div>
        <div class='action-item item-3 under-development' data-title='Topup' data-message='Allow user to topup their Ewallet balance with FPX or credit card'>
        <i class='ti ti-heart'></i>
            <span>Topup</span>
        </div>
        <div class='action-item item-4 under-development' data-title='Cash Out' data-message='Allow users to withdraw cash to their bank account without charging any fees'>
        <i class='ti ti-share'></i>
            <span>Cash Out</span>
        </div>
    </div>
    <div class='help'>
        <div class='help-title'>
            <h2>Need to help </h2>            
        </div>
        <div class='help-item help-1 under-development' data-title='Charity' data-message='Allow users to view more detailed information, donate directly and view their latest news and updates.'>
        <i class="fa fa-heart" aria-hidden="true"></i>
            <h3>Donate for Nursing home</h3>
        </div>
        <div class='help-item help-2 under-development' data-title='Charity' data-message='Allow users to view more detailed information, donate directly and view their latest news and updates.'>
            <h3>Donate for Orphanage</h3>
        </div>
        <div class='help-item help-3 under-development' data-title='Charity' data-message='Allow users to view more detailed information, donate directly and view their latest news and updates.'>
            <h3>Donate for Poor School </h3>
        </div>                    
    </div>
</div>

@stop