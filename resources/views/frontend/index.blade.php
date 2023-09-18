@extends('frontend.layouts.app')
@section('content')
<div class="main">
    <div class="hero">
       
        <div class="hero-img">
            <div class="header">

                <div class="hamburger-menu">
                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                      <span></span>
                    </label>
                
                    <ul class="menu__box">
                            <li><a class="menu__item home" href="#">Home</a></li>
                            <li><a class="menu__item" href="#">Store</a></li>
                            <li><a class="menu__item" href="#">New Arrivals</a></li>
                            <li><a class="menu__item" href="#">LOOKBOOKS</a></li>
                    </ul>
                </div>
                <div class="logo">
                    <!--the logo goes here-->
                    <img class="logo_img" src="{{asset('')}}asset/img/outerspace_logo.png" alt="">
                </div>
        
                <div class="nav icons">
                    <!--navigation icons go here-->
                    <a href="#"><i class="fa-regular fa-user"></i></a><!-- User Icon -->
                    <a href="#"> <i class="fas fa-shopping-cart"></i></a> <!-- Cart Icon -->
                    <a href="#"> <i class="fas fa-search"></i></a> <!-- Search Icon -->
                </div>
        
            </div>
            <!--hero image goes here-->
            
        </div>
    </div>

    <div class="clothe_section">
        <h3>
            JUST IN
        </h3>
        <a  class="shop_all" href="#">SHOP ALL</a>

        <div class="clothes">
            @foreach ($products as $product)
            <div class="apparel">
                <img class="apparel_image" src="{{asset('dist/img/products/'.$product->image)}}" alt="">
                <img class="overlay_image" src="{{asset('dist/img/products/sample/'.$product->sample_image)}}" alt="">
                <div class="prod_details">
                    <h4>{{$product->name}}</h4>
                    <p class="price">${{$product->price}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>



    <div class="slider_div">
        <div class="slider_1">

            <h5 class="slider_text">Summer</h5>

           <h1 class="slider_text">UNTITLED</h1>
           <P class="slider_text">
            Untitled is a high-quality, 
            stylish fabric made from a blend of natural and synthetic fibers, 
            which gives it a soft and luxurious feel.
           </P>

           <button class="shop_now" >
            SHOP NOW 
           </button>
        </div>

        <div class="slider_2">
            <!--<img class="slider_img" src="./asset/img/slider2.jpeg" alt="">-->  
        </div>
  </div>

    <div class="gallery">
        <div class="promo-container">
            <div class="promo">
                <a href="#"><p>PROMOTIONS</p></a>
            </div>
            <div class="new-arrivals">
                <a href="#"><p>NEW ARRIVALS</p></a>
            </div>
        </div>
    </div>

    <div class="gallery-container">
        <div class="gallery-section full-width" id="gallery1_div">
            <img class="gallery-image" id="gallery1" src="{{asset('asset/img/gallery1.jpg')}}" alt="">
        </div>
        <div class="gallery-section">
            <img class="gallery-image" src="{{asset('asset/img/gallery2.jpg')}}" alt="">
        </div>
        <div class="gallery-section">
            <img class="gallery-image" src="{{asset('asset/img/gallery3.jpg')}}" alt="">
        </div>
        <div class="gallery-section">
            <img class="gallery-image" src="{{asset('asset/img/gallery4.jpg')}}" alt="">
            <a class="gallery_desc" href="#">Baseball Caps</a>
        </div>
        <div class="gallery-section2">
            <img class="gallery-image2" src="{{asset('asset/img/gallery5.jpg')}}" alt="">
            <a class="gallery_desc" href="#">COOKIES</a>
        </div>
        <div class="gallery-section2">
            <img class="gallery-image2" src="{{asset('asset/img/gallery6.jpg')}}" alt="">
            <a class="gallery_desc" href="#">TOTE BAG</a>
        </div>
    </div>


    <div class="pre_footer">
        <div class="info_container">

            
            <div class="container gift_card">
                <div class="giftcard_icon">
                    <img src="{{asset('asset/img/gift_card.svg')}}" alt="">
                </div>
                <div class="gitcard_details">
                    <h2>
                        GIFT CARD
                    </h2>
                    <P>
                        Don’t know their size or favorite color? No need to worry – give 
                        them a Gift card and let them decide.
                    </P>
                    <a href="#">Get a gift card</a>
                </div>

            </div>


            <div class="container">
                <div class="custom-icon">
                    <i class=" icon fas fa-money-check-alt fa-5x"></i>
                </div>
                <h2>
                    14 DAYS RETURN
                </h2>
                <P>
                    You have 14 days to change your mind and 
                    return the item. 
                    No questions asked!
                </P>
                

            </div>


            <div class="container delivery">
                <div class="delivery-icon">
                    <i class=" icon fas fa-shopping-cart fa-5x"></i>
                </div>
                <h2>
                    Worldwide Delivery
                </h2>
                <P>
                    We deliver order to all countries at $1,000 R delivery. Receive your order within 3 to 5 working days.
                    <br>
                    <br>
                    Yes, we ship to Ghana!
                </P>
                

            </div>

        </div>
            <div class="mail_list">
                <h1>
                    GET 10% OFF
                </h1>
                <P>
                    Get 10% off your first purchase by joining our mailing list,
                    <br> 
                    and receive some of the best deals possible.
                </P>

                <form action="#">
                    <input type="text" id="email" name="email" placeholder="email address">
                    <input type="submit" value="JOIN NOW">
                </form>
                

                <div class="social_container">
                    <h5 class="socials">FOLLOW US</h5>
                    <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
    </div> 
</div>
@endsection