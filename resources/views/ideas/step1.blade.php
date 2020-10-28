<?php
use Illuminate\Support\Facades\Session;
if (Session::get('locale') == 'ar'){
    return route('step1');
}

?>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- <script src="https://cdn.optimizely.com/js/3986509403.js"></script> -->
    <title>Davison - Turning New Ideas, Inventions, and Patents into New Products.</title>
    <meta name="description" content="Davison confidentially works with people to develop their new product ideas. The inventions have sold in Wal-Mart, Target, Lowes, Amazon and more."/>
    <!-- <link rel="canonical" href="http://idea.davison.com/"/> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet">

    <link href="{{asset('css/css.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,700,800,900|Open+Sans:400,700" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="images/davison_favicon.ico" /> -->
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">
   

     <style>
            .action-button{
                font-size:1.1rem!important;
            }
            body{
                font-family:Overpass;
            }
            label{
                font-weight:300;
            }#next{
                display: inline-block;
                position: absolute;
                top: -8px;
            }
        </style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FBBCZG0RFR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FBBCZG0RFR');
</script>

</head>
<body>


<div id="header" class="header">
    <div class="utility disable-sticky">
        <div class="content-wrapper">
            <div class="utility-menu">
            </div>
        </div>
    </div>


    <div class="content-wrapper">
        <div class="nav-top-mobile-wrapper" style="display: inline-block;" >
            <a href="https://www.davison.com" class="logo ir" title="Davison's Home Page" ><span>Davison's Home Page</span></a>

        </div>

        <ul id="nav" style="display: inline-block; float:right; margin-top: 1.4rem;">
            <!--<li style="display: inline-block;"><a href="{{route('language.change' , 'en')}}" style="text-decoration: none;">EN </a></li>-->
            <li style="display: inline-block;"><a href="{{route('language.change' , 'ar')}}"  style="text-decoration: none;font-size:18px;color:black">AR </a></li>

        </ul>
    </div>
</div>

<main class="page">
    <div class="shape shape-lp-fan">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 19.6" preserveAspectRatio="none">
            <path class="shape-fill1" style="opacity:0.33" d="M0 0L0 18.8 141.8 4.1 283.5 18.8 283.5 0z"></path>
            <path class="shape-fill2" style="opacity:0.33" d="M0 0L0 12.6 141.8 4 283.5 12.6 283.5 0z"></path>
            <path class="shape-fill2" style="opacity:0.33" d="M0 0L0 6.4 141.8 4 283.5 6.4 283.5 0z"></path>
            <path class="shape-fill4" style="opacity:1" d="M0 0L0 1.2 141.8 4 283.5 1.2 283.5 0z"></path>
        </svg>
        <svg style="width:0;height:0;position:absolute;" aria-hidden="true" focusable="false">
            <linearGradient id="sky-gradient" x2="1" y2="1">
                <stop offset="50%" stop-color="#8cc1e0" />
                <stop offset="100%" stop-color="#3388bb" />
            </linearGradient>
        </svg>
    </div>




    <section class="lp-form">

        <div class="content-wrapper">




            <div class="left form-content">




                <a href="#form-action" class="action-button mobile-button scroll-to">Submit your idea</a>
                <h1>Submit your idea</h1>
                <img src="{{asset('images/ideas/company_photo.jpg')}}" class="company-photo">









                <div class="text-wrapper">
                    <p>Davison’s Team has been helping “Idea People” for over 30 years. Our process is an affordable way to make their product or app ideas a reality. Complete the submission form and we will send you free information so you can get started.</p>
                </div>
                <hr>
                <h3>Why Davison is <span>"A Better Way to Invent"</span></h3>
                <div class="video"><iframe src="https://player.vimeo.com/video/303498030" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>





                <hr id="form-action">
                <h2>Your idea is kept 100% Confidential and Secure</h2>
                <img src="{{asset('images/ideas/security_logos3.png')}}" class="security-logos">





            </div>


            <div class="right " >



                <div class="form" >
                    <div class="form-header">

                        <h1><strong>Step 1:</strong> Fill out the form to get started with your idea</h1>
                    </div>
                    <form id="form" class="form-base" action="{{route('step2')}}">

                        <fieldset class="pair">
                            <div>
                                <label for="firstname">First Name</label>
                                <input type="text" id="firstname" name="first_name" value="{{Session::get('first_name')}}" tabindex="1" >
                                @error('first_name')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" value="{{Session::get('last_name')}}" tabindex="2">
                                @error('last_name')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset class="single">
                            <div>
                                <label for="address">Address</label>
                                <input type="text" name="address" value="{{Session::get('address')}}" tabindex="3">
                                @error('address')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="city">
                                <label for="city">City</label>
                                <input type="text" name="city" value="{{Session::get('city')}}" tabindex="4">
                                @error('city')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>


                        </fieldset>
                        @php
                            $countries = \App\Country::all();
                        @endphp
                        <fieldset class="single">
                            <div>
                                <label for="country">Country</label>
                                <select  id="country" name="country" class="country" tabindex="7">
                                   
                                    <option></option>
                                   
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset class="pair">
                            <div>
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{Session::get('email')}}" tabindex="8">
                                @error('email')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="phone">Phone</label>
                                
                                @if(Session::get('country_name') == 'Palestine')
                                <div class="input-group">
                                     <span class="input-group-addon"><img src="{{asset('images/icons/palestine-flag.png')}}" style="width:27px;height:23px"></span>
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{Session::get('phone')}}" tabindex="9" placeholder="0594316109" style="height: 38px;">
                                </div>
                                  
                                @elseif(Session::get('country_name') == 'Hashemite Kingdom of Jordan')
                                 <div class="input-group">
                                     <span class="input-group-addon"><img src="{{asset('images/icons/Jordan.png')}}" style="width:27px;height:19px;"></span>
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{Session::get('phone')}}" tabindex="9" placeholder="0502113311" style="height: 38px;">
                                 </div>
                                 @elseif(Session::get('country_name') == 'Saudi Arabia')
                                 <div class="input-group">
                                     <span class="input-group-addon"><img src="{{asset('images/icons/KSA.png')}}" style="width:27px;height:19px"></span>
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{Session::get('phone')}}" tabindex="9" placeholder="0502113311" style="height: 38px;">
                                 </div>
                                 @else
                                   <input id="phone" type="text" name="phone" value="{{Session::get('phone')}}" tabindex="9">

                                @endif
                                 
                                @error('phone')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>





                        <div class="disclaimer">
                            <p><br>By clicking the “Next” button below as my electronic signature, I expressly consent to being contacted about Davison’s services by phone call, auto-dialed phone call including prerecorded voice messages, text messages or email at any number or email address I provide. I understand that my consent is not a requirement for purchase of services.</p>
                        </div>





                        <fieldset class="submit">
                            <div>
                                <input name="step" type="hidden" id="step" value="2" />



                                <button type="submit"  class="action-button btnStep1" id="step1" style="padding-right: 1rem!important;"><p id="next">Next</p><i class="fas fa-caret-right" style="
                      font-size: -17px;
                      margin-left: 70px;
                      font-size: 25px;
                  "></i> </button>
                                <!-- <button><i class="fa fa-home"></i></button> -->
                            </div>



                        </fieldset>
                    </form>
                </div>







            </div>







        </div>
        </div>
    </section>






    <section class="store-logos-confidential">
        <h2>Our clients' and our own ideas have sold in over 1200 stores, industrial supply houses and online.</h2>
        <img src="{{asset('images/ideas/product_pile2019_logos.png')}}" class="store-logos">
        <img src="{{asset('images/ideas/product_pile2019b.jpg')}}" class="product-pile">
    </section>






</main>

<div class="footer firstpage">
    <div class="content-wrapper">
        <div class="legal">
            <p>
                <a href="http://www.davison.com/legal/privacy/" style="color:#38b">Privacy Policy</a>
            </p>
            <p><b>Davison's research, development and presentation services are provided for an upfront fee paid by the client and a contingent fee (which is a percentage of royalties obtained by the client, if any). New product development is an uncertain endeavor and the use of Davison's services typically does not result in a license agreement, sales on any market or profit to the inventor. Davison does not perform analysis of the feasibility, marketability, patentability or profitability of ideas submitted to it.</b></p>
            <p>Depiction of any trademarks/logos does not represent endorsement of Davison, its services, or products by the trademark owner. The Home Depot, Walmart, JC Whitney, Rite Aid, Target, Ace Hardware, Toys 'R Us, KMart, Lowe's, Sky Mall, Sears, amazon.com, Bed Bath & Beyond, Sam's Club, JoAnn Fabrics, Walgreens, Cabela's, Pepboys Auto, Avon, and Kohl's are registered trademarks of their respective companies.</p>
        </div>


        <div class="copyright">&copy; MMXX Davison</div>
    </div>
</div>






<img src="https://secure.adnxs.com/px?id=937950&seg=11046139&t=2" width="1" height="1">



@if(Session::has('country_id'))
    @php

        $country = \App\Country::findOrFail(Session::get('country_id'));
        $countryName = $country->country_name;

    @endphp
    <input  type="hidden" id="hdnSession" value="{{$countryName}}" />

@endif


<script>

    var countries = document.getElementById('country');
    var selectedCountry = document.getElementById('hdnSession').value;

    function selectCountry(country){
        for(let i=0 ; i<countries.options.length ; i++)
        {
            if(countries.options[i].text===selectedCountry  )
            {
                countries.options[i].selected = true;
                return
            }
        }
    }
    selectCountry(selectedCountry)

</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="{{asset('js/ideas/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/ideas/validation.js')}}"></script>



</body>
</html>
