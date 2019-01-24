@extends('inc.index')

@section('content')



        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
            <div class="blog">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="sidebar">
                        
                            <br>
                            <div class="widget widget_categories">
                                <h4 >
                                    National Geographic fotografije nedelje
                                </h4>
                                <p>U novembru 2018 godine moja fotografija koju mozete videti na ovoj stranici je
                                    usla u fotografije nedelje na National Geographic Your Shot, izabrana 
                                    od strane editora Kristen McNicholas.</p>
                                <div class="testimonial_box" style="border:2px solid #99896e;padding:10px;border-radius:5px">
                                            <p>
                                                "This nightscape is just delightful.
                                                 I love the little pockets of light shining on the autumnal colors. 
                                                 There is an interesting mystery of this photograph, like the moments before
                                                  *something* is about to happen. Great work creating a mood and suspense 
                                                  to a quiet moment."
                                            </p>
                                            <div style="background-color:rgb(51,51,51,0.2);padding:5px;border-radius:5px">
                                                <h5>Kristen McNicholas</h5>
                                                <p>Associate Photo Editor <span>Nat Geo Your Shot</span></p>
                                            </div>
                                </div>
<hr>
                                <ul>
                                    <li><a href="https://yourshot.nationalgeographic.com/photos/13043096/" style="color:black" target="_blanc">National Geographic</a></li>
                                    <li><a href="https://www.instagram.com/iksi_lucius/" style="color:black" target="_blanc" >Instagram</a></li>
                                    <li><a href="#" style="color:black" target="_blanc">Facebook</a></li>
                                    
                                </ul>
                            </div>
                            <div class="widget widget_instagram">
                                 
                                 <ul> 
                               
                                    <h4>Najnovije objave</h4>
                            @foreach($instagram as $insta)
                            <li><a href="#"><img src="{{asset('storage/photos/'.$insta->photo)}}" alt="instagram"></a></li>
                            @endforeach    
                       
                                </ul>  
                            </div>
                            <div class="widget widget_tags">
                           
                                <ul>
                                    <li><a href="#">branding</a></li>
                                    <li><a href="#">identity</a></li>
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">inspiration</a></li>
                                    
                                    <li><a href="#">photography</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <article class="blog_card">
                            <div class="blog_card_top">
                                    <img src="{{asset('storage/photos/'.$photos->photo)}}" alt="blog title " />
                               
                                <div class="blog_date">
                                    16
                                    <span>
                                        novembar 2018
                                    </span>
                                </div>
                            </div>
                            
                                
                        </article>
                       
                        {{-- <article class="blog_card">
                            <div class="blog_card_top">
                                <img src="assets/img/blog/blog3.png" alt="blog title " />
                                <div class="blog_date">
                                    31
                                    <span>
                                        october 2017
                                    </span>
                                </div>
                            </div>
                            <div class="blog_card_bottom">
                                <h4>
                                    <a href="#">
                                        A short blog post about design
                                    </a>
                                </h4>
                                <div class="meta_data">
                                    <span>By Loredana Papp-Dinea</span>
                                    <span>Design, Inspiration, Creative</span>
                                    <span>3 Comments</span>
                                </div>
                                <p>
                                    Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximusLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vestibulum...
                                </p>
                            </div>
                        </article> --}}
                    </div>
                </div>
            </div>
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>


@endsection