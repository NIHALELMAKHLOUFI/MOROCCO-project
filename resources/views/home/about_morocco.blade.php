@extends('layouts.front')
@section('content')

<a href="http://127.0.0.1:8000/home"><b class=" py-2"><i class="fa-solid fa-chevron-left mx-2"></i>Go back home</b></a>

<!--================ Start Packages Service Area =================-->
<section class="package-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="main_title">
                    <h1> Medinas</h1>
                   <p> Morocco's medinas,are ancient and vibrant quarters that epitomize Moroccan history and culture. With their narrow alleyways, bustling souks, and traditional buildings, these places offer an immersion into a world where past and present collide.<br>

                    Exploring these medinas is a sensory adventure, but getting lost is easy. Hiring a local guide can be wise to make the most of the experience. These quarters are not just tourist attractions; they are living parts of the city, where one can discover local craftsmanship, savor traditional cuisine, and appreciate the lively everyday life.</p>
                    
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-12">
                <div class="owl-carousel active-gallery-carousel">
                    <!-- single gallery -->
                   
                    <div class="single-gallery">
                        <img class="img-fluid" src="{{asset('newAssets/img/248abd71e2ed423c4d512931e47d99c0.jpg')}}" alt="" style=" height: 450PX;">

                        <div class="gallery-content">
                            <div class="title align-items-center justify-content-between d-flex">
                                <p>An Enchanting Labyrinth Where Tradition Meets Modernity</p>
                                </div>
                                <h4>Tetouan</h4>
                                </div>
                        </div>
                  
                    <!-- single gallery -->

                    <div class="single-gallery">
                        <img class="img-fluid" src="{{asset('newAssets/img/the-old-medina-in-fes.jpg')}}" alt=""style="height: 450PX;">
                        <div class="gallery-content">
                            <div class="title align-items-center justify-content-between d-flex">
                                <p>Immerse yourself in the vibrant tapestry of Fez</p>
                                </div>
                                <h4>Fez</h4>
                                </div>
                        </div>

                        <div class="single-gallery">
                        <img class="img-fluid" src="{{asset('newAssets/img/IMG_6414-9.jpg')}}" alt=""style="height: 450PX;">
                        <div class="gallery-content">
                            <div class="title align-items-center justify-content-between d-flex">
                                <p>Step into a whirlwind of sights, sounds, and aromas within the captivating Medina of Marrakech</p>
                                </div>
                                <h4>Marrakech</h4>
                                </div>
                        </div>


                         <div class="single-gallery">
                        <img class="img-fluid" src="{{asset('newAssets/img/medina-tanger.jpg')}}" alt=""style="height: 450PX;">
                        <div class="gallery-content">
                            <div class="title align-items-center justify-content-between d-flex">
                                <p>discover the unique charm that awaits you at every turn</p>
                                </div>
                                <h4>Tanger</h4>
                                </div>
                        </div>

                        <div class="owl-nav">
                            <div class="owl-prev"><img src="newAssets/img/cprev.png"></div>
                            <div class="owl-next"><img src="newAssets/img/cnext.png"></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--================ Start Packages Service Area =================-->
<section class="package-area" style="margin-top: 30px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="main_title">
                    <h1> Gastronomic </h1>
                   <p> Moroccan cuisine is renowned for its richness of flavors and subtle 
                    blend of Arab, Berber, and Mediterranean influences. Iconic dishes such 
                    as couscous, tagine, and pastilla are central to Moroccan meals. 
                    Couscous, made from durum wheat semolina, meat, and vegetables, 
                    is traditionally served on Fridays. Tagine, slow-cooked in a clay 
                    dish of the same name, is a blend of meats, vegetables, and spices.
                    
                Pastilla, a flaky pie filled with meat, dried fruits, and cinnamon,
                     combines sweet and savory flavors. In addition to these famous dishes,
                      Moroccan cuisine is abundant in sweet delights like gazelle horns and
                       makrout. It offers an unforgettable culinary experience, where each
                        dish tells a story of tradition and hospitality.</p>
                    
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-12">
                <div class="owl-carousel active-gallery-carousel">
                    <!-- single gallery -->
                   
                    <div class="single-gallery">
                        <img class="img-fluid" src="{{asset('newAssets/img/tajin.jpg')}}" alt="" style=" height: 350PX;">

                        <div class="gallery-content">
                            <div class="title align-items-center justify-content-between d-flex">
                                <p>Let the aroma of a Moroccan tajine transport you to the vibrant souks and bustling medinas of Morocco, a culinary journey awaits.</p>
                                </div>
                                <h4>Tajin</h4>
                                </div>
                        </div>
                  
                    <!-- single gallery -->

                    <div class="single-gallery">
                        <img class="img-fluid" src="{{asset('newAssets/img/pastila.jpg')}}" alt=""style="height: 350PX;">
                        <div class="gallery-content">
                            <div class="title align-items-center justify-content-between d-flex">
                                <p>Unwrap the layers of Morocco with a bite of pastilla. Crispy pastry unfolds a symphony of sweet and savory, a taste bud adventure awaits</p>
                                </div>
                                <h4>Pastilla</h4>
                                </div>
                        </div>

                        <div class="single-gallery">
                        <img class="img-fluid" src="{{asset('newAssets/img/koskos.jpg')}}" alt=""style="height: 350PX;">
                        <div class="gallery-content">
                            <div class="title align-items-center justify-content-between d-flex">
                                <p>Dive into the heart of Moroccan cuisine with fluffy couscous, a canvas for fragrant stews and vibrant vegetables</p>
                                </div>
                                <h4>Couscous</h4>
                                </div>
                        </div>


                         <div class="single-gallery">
                        <img class="img-fluid" src="{{asset('newAssets/img/The-menthe.jpg')}}" alt=""style="height: 350PX;">
                        <div class="gallery-content">
                            <div class="title align-items-center justify-content-between d-flex">
                                <p>From bustling souks to tranquil riads, Moroccan mint tea is a constant companion, a refreshing thread woven into the fabric of daily life</p>
                                </div>
                                <h4>Mint Tea</h4>
                                </div>
                        </div>

                        <div class="owl-nav">
                            <div class="owl-prev"><img src="newAssets/img/cprev.png"></div>
                            <div class="owl-next"><img src="newAssets/img/cnext.png"></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Portfolio Service Area =================-->


<!--================ Start Packages Service Area =================-->
<section class="package-area" style="margin-top: 30px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="main_title">
                    <h1> Moroccan Traditional craft </h1>
                   <p> Traditional craftsmanship and design form a core part of
                    
                   cultural heritage, deeply embedded in various practices.
                    Artisans skillfully manipulate diverse materials using both
                     machines and traditional tools to craft decorative everyday items. 
                     Whether it's tableware, furniture, jewelry, or clothing, you'll find 
                     yourself tempted by Moroccan souvenirs. 
                     Morocco is renowned for its artisanal goods. From the carpets of Ouarzazate to 
the leather of Marrakech and the pottery of Safi, Fez, or Zagora, these cities offer 
a plethora of charming and aesthetically innovative items. Explore a variety of products 
including slippers and lounge décor, each radiating unique allure.</p>
                    
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-12">
                <div class="owl-carousel active-gallery-carousel">
                    <!-- single gallery -->
                   
                    <div class="single-gallery">
                        <img class="img-fluid" src="{{asset('newAssets/img/c76699a34e65b5677486ad6439898361.jpg')}}" alt="" style=" height: 450PX;">

                        <div class="gallery-content">
                            <div class="title align-items-center justify-content-between d-flex">
                                <p>Let the aroma of a Moroccan tajine transport you to the vibrant souks and bustling medinas of Morocco, a culinary journey awaits.</p>
                                </div>
                                <h4>Tajin</h4>
                                </div>
                        </div>
                  
                    <!-- single gallery -->

                    <div class="single-gallery">
                        <img class="img-fluid" src="{{asset('newAssets/img/l-steward-masweneng-axTLYW8opeU-unsplash.png')}}" alt=""style="height: 450PX;">
                        <div class="gallery-content">
                            <div class="title align-items-center justify-content-between d-flex">
                                <p>Unwrap the layers of Morocco with a bite of pastilla. Crispy pastry unfolds a symphony of sweet and savory, a taste bud adventure awaits</p>
                                </div>
                                <h4>Pastilla</h4>
                                </div>
                        </div>

                        <div class="single-gallery">
                        <img class="img-fluid" src="{{asset('newAssets/img/Moroccan-Culture-950x640.jpg')}}" alt=""style="height: 450PX;">
                        <div class="gallery-content">
                            <div class="title align-items-center justify-content-between d-flex">
                                <p>Dive into the heart of Moroccan cuisine with fluffy couscous, a canvas for fragrant stews and vibrant vegetables</p>
                                </div>
                                <h4>Couscous</h4>
                                </div>
                        </div>


                         <div class="single-gallery">
                        <img class="img-fluid" src="{{asset('newAssets/img/saharadeserttour_012.jpg')}}" alt=""style="height: 450PX;">
                        <div class="gallery-content">
                            <div class="title align-items-center justify-content-between d-flex">
                                <p>From bustling souks to tranquil riads, Moroccan mint tea is a constant companion, a refreshing thread woven into the fabric of daily life</p>
                                </div>
                                <h4>Mint Tea</h4>
                                </div>
                        </div>

                        <div class="owl-nav">
                            <div class="owl-prev"><img src="newAssets/img/cprev.png"></div>
                            <div class="owl-next"><img src="newAssets/img/cnext.png"></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Portfolio Service Area =================-->







@endsection