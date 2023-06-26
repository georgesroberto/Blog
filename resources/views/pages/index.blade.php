@include('layouts.head')

@include('layouts.header')

   <body class="main-layout">
      <!-- blog_main -->
      <div class="blog_main" id="blogs">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>My Blogs</h2>
                     <span>Thank you for visiting my poetry blog, where words flow across the page and feelings are given voice. Explore the alluring world of lyrical expression as I honor the creative genius of poets and the force of language. My site is a haven for everyone looking for comfort, inspiration, and a deep connection with the human experience. It contains sonnets, haikus, emotional musings, and lively verses. Come along on this thrilling voyage with me as I invite you to discover the beauty and depth of poetry's limitless cosmos, where each phrase becomes a brushstroke painting the canvas of our souls. Join this lyrical journey and let the symphony of words inspire your creativity.</span>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="our_two_box">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="our_img">
                              <figure><img class="he_img" src="{{asset('assets/img/our_img5.jpg')}}" alt="#" style="position: contain; width: 100%; height=auto; "/></figure>
                           <div class="our_text_box position_box">
                              <h3 class="awesome withi_color">Current Trending Blogs</h3>
                              <h4 style="color:aliceblue;">Welcome to most current trending blog</h4>
                              <p class="hiuouh">I am the most current trending blog</p>
                              <div class="post_box">
                                 <h4 class="flot_left1 withi_color">Post By : Blogger </h4>
                                 <ul class="like withi_color">
                                    <li><a href="#"><img src="{{asset('assets/img/like1.png')}}" alt="#"/>Like</a></li>
                                    <li><a href="#"><img src="{{asset('assets/img/comm1.png')}}" alt="#"/>Comment</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
                  <div class="col-md-6 padding_bottom2">
                  <div class="our_img">
                     <figure><img src="{{asset('assets/img/our_img3.jpg')}}" alt="#"/></figure>
                  </div>
                  <div class="our_text_box three_box">
                     <div class="post_box d_flex padding_top3">
                        <h3 class="awesome padding_flot">Reprogram</h3>
                        <h4 class="flot_left1">Post By : Poet </h4>
                        <ul class="like padding_left2">
                           <li><a href="#"><img src="{{asset('/assets/img/like.png')}}" alt="#"/>Like</a></li>
                              <li><a href="#"><img src="{{asset('assets/img/comm.png')}}" alt="#"/>Comment</a></li>
                        </ul>
                     </div>
                     <p>Dropping real soon</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="our_img">
                     <figure><img src="{{asset('assets/img/our_img4.jpg')}}" alt="#"/></figure>
                  </div>
                  <div class="our_text_box three_box">
                     <div class="post_box d_flex padding_top3">
                           <h3 class="awesome padding_flot">A singing bird</h3>
                        <h4 class="flot_left1">Post By : Blogger </h4>
                        <ul class="like padding_left2">
                           <li><a href="#"><img src="{{asset('assets/img/like.png')}}" alt="#"/>Like</a></li>
                              <li><a href="#"><img src="{{asset('assets/img/comm.png')}}" alt="#"/>Comment</a></li>
                        </ul>
                     </div>
                     <p>Dropping real soon</p>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="our_two_box magna_top90">
                     <div class="row d_flex">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                           <div class="our_img">
                              <figure><img src="{{ asset('assets/img/our_img1.jpg') }}" alt="#"/></figure>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                           <div class="our_text_box">
                              <h3 class="awesome pa_wi">Manifestation Mantra </h3>
                              <p>Manifesting is part of the law of attraction and it’s all about creating what you want.
                              For example you’re pitching a book to a publication . You keep thinking to yourself:
                              “This is a long shot I don’t stand a chance .They’ll never accept an article from someone like me.”
                              Guess what happens ?<br><br>
                              <a href="Manifest.blade.php" class="read-more">Read More</a> 
                           </p>
                              
                              <div class="post_box padding_bottom1">
                                 <h4 class="flot_left1">Post By : Faith Okioga </h4>
                                 <ul class="like">
                                    <li><a href="#"><img src="{{asset('assets/img/like.png')}}" alt="#"/>Like</a></li>
                                     <li><a href="#"><img src="{{asset('assets/img/comm.png')}}" alt="#"/>Comment</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end blog_main -->
    
      <!-- Testimonial -->
      <div class="section">
        <div>
            <div id="" class="Testimonial">
                <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="titlepage">
                        <h2>Testimonial</h2>
                     </div>
                  </div>
               </div>
               <div class="row d_flex">
                  <div class="col-md-3">
                     <div class="Testimonial_box">
                        <i><img src="{{asset('assets/img/logo.png')}}" alt="image"/></i>
                    </div>
                  </div>
                  <div class="col-md-9">
                     <div class="Testimonial_box">
                        <h4>Web Developer</h4>
                        <p>The poetry blog has been a profound instance, where gifted poets have inspired others and expressed intense feelings. The platform offers a haven for submerging oneself in the beauty of words and the poetic minds, bringing comfort, inspiration, and a connection to the human experience. The dedicated poets and artists have sparked their passion for poetry and opened them spaces for introspection and imagination.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Testimonial -->

      <!-- contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact me</h2>
                     <span>Send me a personalized feedback in the feedback form below: </span>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <form class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="form_contril" placeholder="Name " type="text" name="Name ">
                        </div>
                        <div class="col-md-12">
                           <input class="form_contril" placeholder="Phone Number" type="text" name=" Phone Number">
                        </div>
                        <div class="col-md-12">
                           <input class="form_contril" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="text" name="Message" maxlength="100vh"></textarea>
                        </div>
                        <div class="col-sm-12">
                           <button class="send_btn" href="#" type="submit" target="blank">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
   </body>

@include('layouts.footer')
