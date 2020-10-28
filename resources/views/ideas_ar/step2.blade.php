<!DOCTYPE html>
<html dir="rtl">
<head>
    <!-- <script src="https://cdn.optimizely.com/js/3986509403.js"></script> -->
    <link href="{{asset('css/css_ar.css')}}" rel="stylesheet">

    <title>Davison - Turning New Ideas, Inventions, and Patents into New Products.</title>
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet">
    <meta name="description" content="Davison confidentially works with people to develop their new product ideas. The inventions have sold in Wal-Mart, Target, Lowes, Amazon and more."/>
    <link rel="canonical" href="http://idea.davison.com/"/>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,700,800,900|Open+Sans:400,700" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="images/davison_favicon.ico" /> -->
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">
    <style>
        .action-button{
            font-size:1.1rem!important;
            padding: .6rem 2.2rem .8rem 1.2rem;
        }
        .fa-caret-left{
            margin-left: 10px;
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
        <div class="nav-top-mobile-wrapper" style="display: inline-block;">
            <a href="https://www.davison.com" class="logo ir" title="Davison's Home Page"><span>Davison's Home Page</span></a>

        </div>

        <ul id="nav" style="display: inline-block;float:left;margin-top: 1.4rem;">
            <li style="display: inline-block;"><a href="{{route('language.change' , 'en')}}" style="text-decoration: none;">EN </a></li>
            <!--<li style="display: inline-block;"><a href="{{route('language.change' , 'ar')}}"  style="text-decoration: none;">AR </a></li>-->

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




                <h1>أرسل فكرتك</h1>
                <img src="{{asset('images/ideas/company_photo.jpg')}}" class="company-photo">
                <ol>
                    <li>1-أخبرنا ما هي فكرتك؟

                    </li>
                    <li>2-متى أتيت بفكرتك؟

                    </li>
                    <li>3-اشرح المشكلة التي تحلها فكرتك؟
                    </li>
                </ol>
                <hr>
                <h2>تظل فكرتك سرية وآمنة بنسبة %100
                </h2>
                <div style="text-align: right;">

                    <img src="{{asset('images/ideas/security_logos3.png')}}" class="security-logos">

                </div>
                <hr><h3> بيعت منتجاتنا في:
                </h3>
                <div style="text-align: right;">

                    <img src="{{asset('images/ideas/media_logos_split1.png')}}" class="media-logos"><br><br>

                </div>

                <div style="text-align: right;">

                    <img src="{{asset('images/ideas/media_logos_split2b.png')}}" class="media-logos">

                </div>










            </div>


            <div class="right">


                <div class="form" id="form-action">
                    <div class="form-header">

                        <h1><strong>الخطوة 2: </strong> اتفاقية أمان الفكرة</h1>
                    </div>


                    <form action="{{route('step3')}}" id="form2" class="form-base" >
                        <fieldset class="single">
                            <div>

                                <label for="ideaname" style="float: right;">اسم فكرة المنتج
                                </label>
                                <input type="text" name="idea_name" autofocus value="{{Session::get('idea_name')}}">
                                @error('idea_name')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset class="single">
                            <div>

                                <label for="address" style="float: right;">وصف فكرة المنتج
                                </label>
                                <textarea name="idea_description">{{Session::get('idea_description')}}</textarea>
                                @error('idea_description')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset class="single">
                            <div class="disclaimer">
                                <h3>اتفاقية السرية</h3>
                                <p><b>تحافظ هذه الاتفاقية على سرية فكرتك بينك وبين شركة دافيسون وعلم.
                                    </b></p>
                                <p>  <p>

                                    أدرك أن معلومات فكرة المنتج التي أرسلتها لا يمكن استخدامها أو الكشف عنها أو بيعها بدون إذن كتابي صريح مني. أدرك أيضًا أن جميع موظفي دافيسون وعلم مطالبون بتوقيع اتفاقية الأخلاق والسرية لحماية فكرتي. باعتقادي أنني المخترع الأصلي للفكرة الموصوفة هنا. أفوض دافيسون وعلم بمراجعة فكرتي والاتصال بي خلال 3 إلى 5 أيام عمل لإعطائي استشارة مجانية حول فكرتي. أقر بأن دافيسون وعلم يقومان بمراقبة المكالمات الهاتفية وتسجيلها لضمان الجودة. أتفهم أن دافيسون وعلم لا يعدان بأي عائد مالي من تطوير فكرة أي منتج جديد.
                                </p>
                                <p>
                                    من خلال النقر على الزر "إرسال" أدناه كتوقيع إلكتروني خاص بي، أوافق على الاتصال بي ضمن خدمات دافيسون وعلم عن طريق مكالمة هاتفية أو مكالمة هاتفية تلقائية بما في ذلك الرسائل الصوتية المسجلة مسبقًا أو الرسائل النصية أو البريد الإلكتروني على أي رقم أو عنوان بريد إلكتروني أقدمه. أدرك أن موافقتي ليست شرطًا لشراء الخدمات.   </p>
                                </p>

                                <!--<p>خدمة مدفوعة الأجر</p>-->
                    <!--            <div class="signature">-->
                    <!--<span>لقد قرأت وفهمت الاتفاقية أعلاه.-->
                    <!--</span> <input type="text" size="2" name="initial" value="{{Session::get('initial_fees')}}">-->
                    <!--                @error('initial')-->
                    <!--                <span style="color: red; font-size: 16px;">{{ $message }}</span>-->
                    <!--                @enderror-->
                    <!--            </div>-->
                            </div>
                        </fieldset>
                        <fieldset class="single checkboxes">
                            <div style="
                text-align: right;
            ">
                                <label for="ack_eighteen"> عمري 18 سنة أو أكبر
                                </label>
                                @if(Session::get('age') == 'confirmed')
                                    <input id="ack_eighteen" type="checkbox" name="ack_eighteen" value="1" tabindex="4" checked>
                                @else
                                    <input id="ack_eighteen" type="checkbox" name="ack_eighteen" value="1" tabindex="4">
                                @endif

                                @error('ack_eighteen')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror

                            </div>
                        </fieldset>
                        <fieldset  class="submit" style="
              text-align: right;
          ">



                            <div>
                                <input name="step" type="hidden" id="step" value="3" />
                                <!-- <input type="submit" value="أرسل فكرتك
                                " class="action-button button-shadow-border" style="width: 60%;"> -->

                                <button type="submit"  id="step2Val1" class="action-button btnStep1"  style="padding-right: 1rem!important;">ارسال الفكرة<i class="fas fa-caret-left" style="font-size: -17px;margin-right: 21px;font-size: 25px; "></i> </button>
                                <!--<button  class="action-button btnStep1" id="step2Val1" style="padding-right: 1rem!important;background-color: #808080a3"> <a style="color: white;padding: 11px;background-color: none;text-decoration:none"  href="{{route('back','1')}}"><i class="fas fa-caret-left" style="margin-right: 21px;font-size: 25px; "></i>السابق</a></button>-->
                                <button  class="action-button btnStep1" id="step1Val1" style="padding-right: 1rem!important;background-color: #808080a3"> <i class="fas fa-caret-left" style="margin-right: 10px;font-size: 25px; "></i>السابق</a></button>

                            </div>

                            <div>
                                <p>الخطوة 2 من 4
                                </p>
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
document.getElementById("step1Val1").addEventListener("click", function(event){
  event.preventDefault();
          window.location.href = "{{ route('back',1)}}";

});

</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="{{asset('js/jquery_ar.validate.min.js')}}"></script>
<script src="{{asset('js/validation.js')}}"></script>
</body>
</html>
