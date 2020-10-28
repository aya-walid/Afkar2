<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- <script src="https://cdn.optimizely.com/js/3986509403.js"></script> -->
    <link href="{{asset('css/css.css')}}" rel="stylesheet">

    <title>Davison - Turning New Ideas, Inventions, and Patents into New Products.</title>
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet">
    <meta name="description" content="Davison confidentially works with people to develop their new product ideas. The inventions have sold in Wal-Mart, Target, Lowes, Amazon and more."/>
    <link rel="canonical" href="http://idea.davison.com/"/>
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,700,800,900|Open+Sans:400,700" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="images/davison_favicon.ico" /> -->
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">
    <style>
        .lp-form.pages .action-button{
                padding: .5rem 2rem .8rem 1rem;
        }
        .lp-form.pages .submit div:last-child{
                padding-top: .7rem;
        }
        #agreement_aff-error{
            display:block;
        }.fa-caret-right,.fa-caret-left{
           
            position: relative;
             top: 3px;
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
    <div class="shape shape-lp-form">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2600 131.1" preserveAspectRatio="none">
            <path class="shape-fill" d="M0 0L2600 0 2600 69.1 0 0z"></path>
            <path class="shape-fill" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 69.1z"></path>
            <path class="shape-fill" style="opacity:0.25" d="M2600 0L0 0 0 130.1 2600 69.1z"></path>
        </svg>
    </div>


    <section class="lp-form pages">
        <div class="content-wrapper">
            <a href="#form-action" class="action-button mobile-button scroll-to">Read and sign below:</a>
            <h2><strong>Step 3:</strong> Affirmative Disclosure Statement</h2>
            <div class="buttons">
                <a href="javascript:window.print()" class="print-button">Print</a>
                <!--<a href="/downloads/ad.zip" class="print-button">Save</a>-->
            </div>


            <p><strong>You should read all of this information before proceeding.</strong></p>
            <form action="{{route('step4')}}" id="form3" class="form-base">

                <input type="hidden" name="step" value="4" />
                <p>The total number of consumers who submitted new product ideas to Davison during the past five years is six hundred forty five thousand nineteen (645,019).  Davison does not provide evaluation of commercial potential; thus, it has provided no positive or negative evaluation of this or any other product idea in the last five years.  The total number of consumers who were offered a Pre-Development agreement (or similar contract for research services) is two hundred forty eight thousand three hundred thirty (248,330).  The total number of consumers who were offered a Contingency Agreement (or other contract for licensing representation) is two hundred two hundred forty eight thousand three hundred thirty (248,330).  The total number of consumers who purchased a Pre-Development Agreement or similar contract for research services is forty seven thousand two hundred eighty four (47,284). The total number of consumers who signed a Contingency Agreement or other licensing representation agreement is forty seven thousand two hundred eighty four (47,284). The total number of consumers who were offered a New Product Sample Agreement (or any other contract for design services for a virtual or a product sample) is thirty five thousand three hundred seventy seven (35,377). The number of consumers who signed a New Product Sample Agreement or similar agreement is seventeen thousand four hundred eighty (17,480). The number of consumers who obtained a written license with a company that is not affiliated with Davison is fifty eight (58). <strong>The total number of consumers in the last five years who made more money in royalties or sales proceeds than they paid to Davison, in total, under any and all agreements with Davison, is fifteen (15).  This number includes people who first made a profit more than 5 years ago, if they continued to make additional profit during the past five years. The percentage of Davison’s income that came from royalties paid on licenses of consumers’ products is .001%.</strong></p>
                <p align="right">September 24, 2020</p>

                <div id="form-action"></div>
                <fieldset class="disclaimer-checkbox">
                    @if(Session::get('agreement1_confirmed') == 'confirmed')
                       <input name="agreement_aff" id="agreement_aff" type="checkbox" value="1" checked>
                    @else
                        <input name="agreement_aff" id="agreement_aff" type="checkbox" value="1">
                    @endif
                    <label for="agreement_aff">I have received and read the above information.</label><br>
                    @error('agreement_aff')
                    <span style="color: red; font-size: 16px;">{{ $message }}</span>
                    @enderror
                </fieldset>
                <div class="submit">

                    <div>
                        <button type="submit"  class="action-button btnStep1" id="step3Val1" style="padding-right: 1rem!important;">next<i class="fas fa-caret-right" style="font-size: -17px;margin-left: 21px;font-size: 25px; "></i> </button>
                        <!-- <input type="submit" value="Next" class="action-button"> -->
                       
                        <!--<button  class="action-button btnStep1" id="step2Val1" style="padding-right: 1rem!important;background-color: #808080a3"> <a style="color: white;background-color: none;text-decoration:none"  href="{{route('back','2')}}"> -->
                        <button  class="action-button btnStep1" id="step2Val1" style="padding-right: 1rem!important;background-color: #808080a3"> 
                      <i class="fas fa-caret-left" style="margin-right: 21px;font-size: 25px; "></i>back</button>
                    </div>
                    <div>Step 3 of 4</div>
                </div>
            </form>
        </div>
    </section>


<script>
   document.getElementById("step2Val1").addEventListener("click", function(event) {
        event.preventDefault();
        window.location.href = "{{ route('back',2)}}";

    });
  

  document.getElementById("step3Val1").addEventListener("click", function(event) {
        var err =  document.getElementById('agreement_aff-error');
        var field =  document.getElementsByClassName('disclaimer-checkbox')[0];
        if(err!=null){
          field.appendChild(err);
       
      }
    });


  

</script>

</main>

<div class="footer footer-pages">
    <div class="content-wrapper">


        <div class="copyright">&copy; MMXX Davison</div>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="{{asset('js/ideas/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/ideas/validation.js')}}"></script>



</body>

</html>
