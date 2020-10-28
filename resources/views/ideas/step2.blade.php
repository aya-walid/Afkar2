
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{asset('css/css.css')}}" rel="stylesheet">
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet">
    <title>Davison - Turning New Ideas, Inventions, and Patents into New Products.</title>
    <meta name="description" content="Davison confidentially works with people to develop their new product ideas. The inventions have sold in Wal-Mart, Target, Lowes, Amazon and more."/>
    <link rel="canonical" href="http://idea.davison.com/"/>
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,700,800,900|Open+Sans:400,700" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="images/davison_favicon.ico" /> -->
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">
    <style>
        .action-button{
            font-size:1.1rem!important;
        }#next , #back{
            display: inline-block;
            position: absolute;
            top: -8px;
        }em{
            font-style: normal;
            position:relative;
            top:-2px;
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
            <li style="display: inline-block;"><a href="{{route('language.change' , 'ar')}}"  style="text-decoration: none;">AR </a></li>

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




                <h1>Submit your idea</h1>
                <img src="{{asset('images/ideas/company_photo.jpg')}}" class="company-photo">
                <ol>
                    <li>Tell us what your idea is.</li>
                    <li>When did you come up with your idea?</li>
                    <li>Explain the problem your idea solves.</li>
                </ol>
                <hr>
                <h2>Your idea is kept 100% Confidential and Secure</h2>
                <img src="{{asset('images/ideas/security_logos3.png')}}" class="security-logos">
                <hr><h3>Our products have been featured on:</h3>
                <img src="{{asset('images/ideas/media_logos_split1.png')}}" class="media-logos"><br><br>
                <img src="{{asset('images/ideas/media_logos_split2b.png')}}" class="media-logos">









            </div>


            <div class="right">


                <div class="form" id="form-action">
                    <div class="form-header">

                        <h1><strong>Step 2:</strong> Idea Security Agreement</h1>
                    </div>


                    <form action="{{route('step3')}}" id="form2" class="form-base" >

                        <fieldset class="single">
                            <div>

                                <label for="ideaname">Product Idea Name</label>
                                <input type="text" name="idea_name" value="{{Session::get('idea_name')}}" autofocus tabindex="1">

                                @error('idea_name')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset class="single">
                            <div>

                                <label for="idea_description">Product Idea Description</label>
                                <textarea name="idea_description" tabindex="2" id="idea_description">{{Session::get('idea_description')}}</textarea>
                                @error('idea_description')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset class="single">
                            <div class="disclaimer">
                                <h3>Confidentiality Agreement</h3>
                                <p><b>This agreement keeps your idea safe between you and Davison.</b></p>
                                <p>  <p>I understand that the product idea information I submit cannot be used, disclosed or sold without my express written permission. I also understand that all Davison employees are required to sign an ethics and confidentiality agreement for my protection. I believe that I am the original inventor of the idea described herein. I authorize Davison to review my idea and contact me in 3 to 5 business days to give me a no-cost consultation about my idea. I acknowledge that Davison monitors and records telephone calls for quality assurance. I understand that Davison does not promise any financial gain from development of any new product idea.</p>
                                <p>By clicking the “submit” button below as my electronic signature, I expressly consent to being contacted about Davison’s services by phone call, auto-dialed phone call including prerecorded voice messages, text messages or email at any number or email address I provide. I understand that my consent is not a requirement for purchase of services. </p>
                                </p>

                                <!--<p>Fee based service.</p>-->
                                <!--<div class="signature">-->
                                <!--    <input type="text" value="{{Session::get('initial_fees')}}" size="2" name="initial" tabindex="3"> <span>Initial here if you’ve read and understand the above agreement.</span>-->
                                <!--    @error('initial')-->
                                <!--    <span style="color: red; font-size: 16px;">{{ $message }}</span>-->
                                <!--    @enderror-->
                                <!--</div>-->
                            </div>
                        </fieldset>
                        <fieldset class="single checkboxes">
                            <div>
                                @if(Session::get('age') == 'confirmed')
                                     <input id="ack_eighteen" type="checkbox" name="ack_eighteen" value="1" tabindex="4" checked>
                                @else
                                    <input id="ack_eighteen" type="checkbox" name="ack_eighteen" value="1" tabindex="4">
                                @endif
                                <label for="ack_eighteen"> I am 18 years old or older</label>
                                @error('ack_eighteen')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset class="submit">
                            <div >
                                <input name="step" type="hidden" id="step" value="3" />
                                <!-- <input type="submit" value="Submit your idea" class="action-button button-shadow-border"> -->
                                <button type="submit"  class="action-button btnStep1" id="step2Val1" style="padding-right: 1rem!important;"><p id="next">Submit your idea</p><i class="fas fa-caret-right" style="font-size: -17px;margin-left: 200px;font-size: 25px; "></i> </button>

                                <!--<button  class="action-button btnStep1" id="step2Val1" style="padding-right: 1rem!important;background-color: #808080a3"> <a style="color: white;padding: 11px;background-color: none;text-decoration:none"  href="{{route('back','1')}}"><i class="fas fa-caret-left" style="margin-right: 21px;font-size: 25px; "></i>back</a></button>-->
                                <button  class="action-button btnStep1" id="step1Val1" style="padding-right: 1rem!important;background-color: #808080a3"> <i class="fas fa-caret-left" style="margin-right: 21px;font-size: 25px; "></i><em>back</em></button>

                            </div>
                            <div>
                                <p>Step 2 of 4</p>

                            </div>


                        </fieldset>
                    </form>
                </div>

            </div>
        </div>
    </section>






</main>

<div class="footer footer-pages">
    <div class="content-wrapper">


        <div class="copyright">&copy; MMXX Davison</div>
    </div>
</div>



<script>
    
     document.getElementById("step1Val1").addEventListener("click", function(event) {
        event.preventDefault();
        window.location.href = "{{ route('back',1)}}";

    });

</script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="{{asset('js/ideas/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/ideas/validation.js')}}" id="validate"></script>

</body>
</html>
