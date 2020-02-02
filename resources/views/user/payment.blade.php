@extends('layouts.user-dashboard')

@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
        <div class="card-header">
            <h5 class="card-title">DETAILS</h5>
        </div>
        <div class="card-body">
            <div class="card-header">
                    <h4 class="card-title">Pay for {{$course->title}}</h4>
                </div>
                <div class="card-body">
                    @php
                    $array = array('metaname' => 'course_id', 'metavalue' => $course->id);
                    @endphp
                    <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                        {{ csrf_field() }}
                        <input type="hidden" name="amount" value="{{$course->price}}" /> <!-- Replace the value with your transaction amount -->
                        <input type="hidden" name="payment_method" value="both" /> <!-- Can be card, account, both -->
                        <input type="hidden" name="description" value="{{$course->title}}" /> <!-- Replace the value with your transaction description -->
                        <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
                        <input type="hidden" name="currency" value="NGN" /> <!-- Replace the value with your transaction currency -->
                        <input type="hidden" name="email" value="{{$user->email}}" /> <!-- Replace the value with your customer email -->
                        <input type="hidden" name="firstname" value="{{$user->first_name}}" /> <!-- Replace the value with your customer firstname -->
                        <input type="hidden" name="lastname" value="{{$user->last_name}}" /> <!-- Replace the value with your customer lastname -->
                        <input type="hidden" name="metadata" value="{{ json_encode($array) }}" > <!-- Meta data that might be needed to be passed to the Rave Payment Gateway -->
                        <input type="hidden" name="phonenumber" value="{{$user->phone}}" /> <!-- Replace the value with your customer phonenumber -->
                        {{-- <input type="hidden" name="paymentplan" value="362" /> <!-- Ucomment and Replace the value with the payment plan id --> --}}
                        {{-- <input type="hidden" name="ref" value="MY_NAME_5uwh2a2a7f270ac98" /> <!-- Ucomment and  Replace the value with your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. --> --}}
                        {{-- <input type="hidden" name="logo" value="https://pbs.twimg.com/profile_images/915859962554929153/jnVxGxVj.jpg" /> <!-- Replace the value with your logo url (Optional, present in .env)--> --}}
                        {{-- <input type="hidden" name="title" value="Flamez Co" /> <!-- Replace the value with your transaction title (Optional, present in .env) --> --}}
                        <input type="submit" value="Pay"  />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection       
            
    