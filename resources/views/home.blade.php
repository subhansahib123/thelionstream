@extends('layout.master')
@section('content')



<div class="owl-carousel owl-theme home-slider-01">
        <div class="item">
            <img src="assets/images/silde01.jpg" alt="">
        </div>
        <div class="item">
            <img src="assets/images/silde01.jpg" alt="">
        </div>
</div>
<div class="portion-10 portion-one">
    <button class="btn btn-brown">
        About Our Company
    </button>
    <p>
        Welcome to The Lion Streams! We are thrilled that you stopped by to see what we are all about. Lion Streams was not designed by chance, but with a very specific purpose. That purpose is to help impact and benefit the lives of many thousands of people all over Pakistan. With an unprecedented affordable business, only $10 for our membership. And finally, our All-in-One Online Marketing System to help you grow any business you currently have or help you start a lucrative online business, As a preferred member you can purchase any of our products wholesale, Use our Business development Program for customizing business cards or web designs,
    </p>
</div>
<div class="portion-20 portion-two">
    <h5>Featured Services</h5>
    <div class="row">
        <div class="col-4">
            <div class="row services mx-1">
                <div class="col-4"><i class="ln ln-icon-Add-User"></i></div>
                <div class="col-8">
                    <h6>We Brand You</h6>
                    <p>We help build your business no matter what it is by driving traffic to your site.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row services mx-1">
                <div class="col-4"><i></i></div>
                <div class="col-8">
                    <h6>Design</h6>
                    <p>We do all your design work from web design to business cards.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row services mx-1">
                <div class="col-4"><i></i></div>
                <div class="col-8">
                    <h6>Security</h6>
                    <p>We provide Secure SSL We protect your security, & never sell your info to other companies.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="row services mx-1">
                <div class="col-4"><i></i></div>
                <div class="col-8">
                    <h6>Buy Wholesale</h6>
                    <p>Own your own Marketing site. Buy Wholesale/Sell Retail, For another stream of income,</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row services mx-1">
                <div class="col-4"><i></i></div>
                <div class="col-8">
                    <h6>Analysis</h6>
                    <h6 class="parah">We treat everyone as an individual. With their needs ,income & business design. Unique to them.</h6>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row services mx-1">
                <div class="col-4"><i></i></div>
                <div class="col-8">
                    <h6>Marketing</h6>
                    <p>We lead the field in marketing. No matter what your business is. We will drive customers & traffic to your site.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portion-30 portion-three" >
    <h4>Lion Streams is breaking all the rules. We have the expertise, the tools & systems. Along with our High tech in-demand products, as a member, you can purchase wholesale!</h4>
    <button class="btn btn-purple">Join Now</button>
</div>
<div class="portion-40 portion-four">
    <h2>Some Of Our Happy Clients, <span>Join To Them!</span></h2>
    <section id="demos">
        <div class="row">
          <div class="large-12 columns">
            <div class="gallery owl-theme">
              <div class="item">
                <img src="assets/images/gallery.png" alt="sorry">
              </div>
              <div class="item">
                <img src="assets/images/gallery.png" alt="">
              </div>
              <div class="item">
                <img src="assets/images/gallery.png" alt="">
              </div>
              <div class="item">
                <img src="assets/images/gallery.png" alt="">
              </div>
              <div class="item">
                <img src="assets/images/gallery.png" alt="">
              </div>
              <div class="item">
                <img src="assets/images/gallery.png" alt="">
              </div>
              <div class="item">
                <img src="assets/images/gallery.png" alt="">
              </div>
              <div class="item">
                <img src="assets/images/gallery.png" alt="">
              </div>
              <div class="item">
                <img src="assets/images/gallery.png" alt="">
              </div>
              <div class="item">
                <img src="assets/images/gallery.png" alt="">
              </div>
              <div class="item">
                <img src="assets/images/gallery.png" alt="">
              </div>
              <div class="item">
                <img src="assets/images/gallery.png" alt="">
              </div>
            </div>
            <h3 id="overview">Overview</h3>
          <p>Basic usage of Owl Carousel. I used <code>loop:true</code> and <code>margin:10</code>. The structure works with any kind of DOM element. In all of my examples i used <code>&lt;div class=&quot;item&quot;&gt;...&lt;/div&gt;</code> but you could
            put any other element <code>div/span/a/img...</code></p>
          <h3 id="setup">Setup</h3>
          <pre><code>$(&#39;.owl-carousel&#39;).owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})</code></pre>
          <h3 id="html">html</h3>
          <pre><code>&lt;div class=&quot;owl-carousel owl-theme&quot;&gt;
    &lt;div class=&quot;item&quot;&gt;&lt;h4&gt;1&lt;/h4&gt;&lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;&lt;h4&gt;2&lt;/h4&gt;&lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;&lt;h4&gt;3&lt;/h4&gt;&lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;&lt;h4&gt;4&lt;/h4&gt;&lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;&lt;h4&gt;5&lt;/h4&gt;&lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;&lt;h4&gt;6&lt;/h4&gt;&lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;&lt;h4&gt;7&lt;/h4&gt;&lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;&lt;h4&gt;8&lt;/h4&gt;&lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;&lt;h4&gt;9&lt;/h4&gt;&lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;&lt;h4&gt;10&lt;/h4&gt;&lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;&lt;h4&gt;11&lt;/h4&gt;&lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;&lt;h4&gt;12&lt;/h4&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
      </div>
    </section>
</div>
<div class="portion-50 portion-five ">
    <div class="col-xl-3 col-md-6 mx-1"></div>
    <div class="col-xl-3 col-md-6 mx-1"></div>
    <div class="col-xl-3 col-md-6 mx-1"></div>
    <div class="col-xl-3 col-md-6 mx-1"></div>
</div>
@endsection