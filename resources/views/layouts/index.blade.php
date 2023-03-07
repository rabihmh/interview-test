<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Test</title>
    @include('includes.links')
</head>
<body>
<header>
    <div class="hero-section">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" id="wave" style="transform:rotate(180deg); transition: 0.3s"
             viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(4, 33, 103, 1)" offset="0%"/>
                    <stop stop-color="rgba(25, 119, 215, 1)" offset="100%"/>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                  d="M0,245L80,245C160,245,320,245,480,220.5C640,196,800,147,960,130.7C1120,114,1280,131,1440,171.5C1600,212,1760,278,1920,326.7C2080,376,2240,408,2400,416.5C2560,425,2720,408,2880,383.8C3040,359,3200,327,3360,285.8C3520,245,3680,196,3840,212.3C4000,229,4160,310,4320,334.8C4480,359,4640,327,4800,261.3C4960,196,5120,98,5280,114.3C5440,131,5600,261,5760,285.8C5920,310,6080,229,6240,196C6400,163,6560,180,6720,196C6880,212,7040,229,7200,196C7360,163,7520,82,7680,73.5C7840,65,8000,131,8160,130.7C8320,131,8480,65,8640,73.5C8800,82,8960,163,9120,179.7C9280,196,9440,147,9600,179.7C9760,212,9920,327,10080,334.8C10240,343,10400,245,10560,212.3C10720,180,10880,212,11040,196C11200,180,11360,114,11440,81.7L11520,49L11520,490L11440,490C11360,490,11200,490,11040,490C10880,490,10720,490,10560,490C10400,490,10240,490,10080,490C9920,490,9760,490,9600,490C9440,490,9280,490,9120,490C8960,490,8800,490,8640,490C8480,490,8320,490,8160,490C8000,490,7840,490,7680,490C7520,490,7360,490,7200,490C7040,490,6880,490,6720,490C6560,490,6400,490,6240,490C6080,490,5920,490,5760,490C5600,490,5440,490,5280,490C5120,490,4960,490,4800,490C4640,490,4480,490,4320,490C4160,490,4000,490,3840,490C3680,490,3520,490,3360,490C3200,490,3040,490,2880,490C2720,490,2560,490,2400,490C2240,490,2080,490,1920,490C1760,490,1600,490,1440,490C1280,490,1120,490,960,490C800,490,640,490,480,490C320,490,160,490,80,490L0,490Z"/>
        </svg>
        <nav class="navbar navbar-expand-lg  transparent-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="logo" src="{{asset('assets/images/Mlay-Landing-Page23.jpg')}}" alt=""/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main"
                        aria-controls="main"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="main">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link p-2 p-lg-3 " aria-current="page" href="#">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 p-lg-3" href="#">الخدمات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 p-lg-3" href="#">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 p-lg-3" href="#">تواصل معنا</a>
                        </li>
                    </ul>
                    <a class="ml-auto my-btn" href="#">تسوق الان</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row hero-section-content">
                <div class="col-md-6 ">
                    <p>ليزر MLAY, الطريقة الآمنة والفعالة للتخلص من الشعر , بشرة ناعمة وحريرية في انتظارك!</p>
                    <p>تمنحك أجهزة الليزر المتطورة لدينا بشرة ناعمة كالحرير ووقتًا أطول. قل وداعًا لمشاحنات طرق إزالة
                        الشعر التقليدية ومرحبًا بالثقة التامة من خلال أجهزة إزالة الشعر بالليزر التي نقدمها.</p>
                    <button class="my-btn">تسوق الآن</button>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('assets/images/Mlay-Landing-Page2.jpg')}}" alt="image">
                </div>
            </div>
        </div>
    </div>

</header>

{{-- end header--}}
{{-- start favorite product section--}}
<section class="favorite">
    <div class=" container">
        <h3 class="main-title">منتج مميز</h3>
        <div class=" row content">
            <div class="col-md-6 ">
                <h2>ليزر ملاي T14 الجديد بالتبريد 3 عدسات 500 الف ومضة</h2>
                <p>ليزر ملاي T14 الجديد التبريد 3 عدسات 500 الف ومضة إمكانية تغيير العدسات حسب الإحتياج يتوفر الجهاز
                    باللون الأزرق واللون الأحمر بثلاث عدسات متخصصة ومناسبة لجميع اجزاء الجسم هذا الليزر مناسب للرجال
                    والنساء احدث اصدارات شركة ملاي و افضلها لحد الان T14 العدسات المرفقة ( عدسة ازالة الشعر + عدسة حب
                    الشباب + عدسة النظارة ) مع امكانية التبديل حسب الحاجة.</p>
                <button>مشاهدة المزيد</button>
            </div>
            <div class="col-md-6">
                <div class="img-cover">
                    <img src="{{asset('assets/images/Mlay-Landing-Page22.jpg')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end favorite product section--}}
{{-- Start Stats--}}
<section class="stats" id="stats">
    <div class="container">
        <div class="box">
            <span class="number">15</span>
            <span class="text">سنوات الخبرة</span>
        </div>
        <div class="box">
            <span class="number">30M </span>
            <span class="text">سنوات الخبرة</span>
        </div>
        <div class="box">
            <span class="number">21K</span>
            <span class="text">قاعدة العملاء</span>
        </div>
        <div class="box">
            <span class="number">4.7</span>
            <span class="text">تقييم النجمات</span>
        </div>
    </div>
</section>
{{--End Stats--}}
{{--Start App Section--}}
<section class="app" id="app">
    <div class="container">
        <img class="image" src="{{asset('assets/images/Mlay-Landing-Page24.jpg')}}">
        <div class="text">
            <h3 class="main-title">تطبيق الجوال</h3>
            <h2>يمكنك استخدام تطبيق الجوال ، احصل عليه الآن!</h2>
            <p>قم بتثبيت تطبيق الهاتف المحمول الخاص بنا وستتمكن من الوصول إلى حسابك أينما كنت. البساطة في أفضل
                حالاتها.</p>
            <div class="download-btn">
                <img src="{{asset('assets/images/aplle.jpg')}}">
                <img src="{{asset('assets/images/aplle.jpg')}}">
            </div>
        </div>
    </div>
</section>
{{--End  App Section--}}
{{--Start  Our Services Section--}}
<section class="services">
    <div class="container">
        <h3 class="main-title">عن خدماتنا</h3>
        <h4>قائمة الميزات لدينا!</h4>
        <div class="content">
            <div class="box">
                <img src="{{asset('assets/images/3.PNG')}}">
                <h5>الضمان التجاري</h5>
                <span>ضمان عامين من تاريخ الشراء</span>
            </div>
            <div class="box">
                <img src="{{asset('assets/images/2.PNG')}}">
                <h5>طرق الدفع</h5>
                <span>تتوفر وسائل الدفع الآمنة، (التقسيط متاح)</span>
            </div>
            <div class="box">
                <img src="{{asset('assets/images/1.PNG')}}">
                <h5>الشحن السريع</h5>
                <span>مستودعنا بالمملكة العربية السعودية</span>
            </div>
        </div>

    </div>
</section>
{{--End  Our Services Section--}}
{{--start footer--}}
<div class="footer">
    <div class="container">
        <div class="box">
            <img src="{{asset('assets/images/Mlay-Landing-Page26.jpg')}}">
            <p>مؤسسة ملاي التجارية بسجل تجاري 4031263082 تقدم منتجات ملاي مع ضمان عامين .</p>
            <ul class="social">
                <li>
                    <a href="#" class="whatsapp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="box">
            <h3>روابط مهمة</h3>
            <ul class="links">
                <li><a href="#">الذهاب الى المتجر</a></li>
                <li><a href="#">سياسة الاستبدال والاسترجاع</a></li>
                <li><a href="#">بنود الشحن</a></li>
                <li><a href="#">بنود الضمان</a></li>
            </ul>
        </div>
        <div class="box">
            <h3>تواصل معنا</h3>
            <div class="line">
                <i class="fa-solid fa-envelope"></i>
                <div class="info">info@mlaystor.com</div>
            </div>
            <div class="line">
                <i class="fas fa-map-marker-alt fa-fw"></i>
                <div class="info">شارع الملك فهد, جدة
                    المملكة العربية السعودية
                </div>
            </div>

            <div class="line">
                <i class="fa fa-phone"></i>
                <div class="info">
                    <span>+966 59 091 6824</span>
                </div>
            </div>

        </div>
    </div>
    <p class="copyright">Code With &lt;3 By Rabih Mahmoud</p>
</div>

{{--end footer--}}
@include('includes.scripts')

</body>
</html>
