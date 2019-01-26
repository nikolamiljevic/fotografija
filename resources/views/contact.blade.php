@extends('inc.index')

@section('content')


        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
            <div>
                <div class="img_card">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-7 content_section">
                            <!--=================== contact info and form start====================-->
                            <div class="content_box">
                                @if(Session::has('flash_message'))
                            <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                                @endif
                                <div class="content_box_inner">
                                    <div>
                                        <h3>
                                            Kontakt
                                        </h3>
                                        <p>
                                        Hajde da radimo zajedno. <br>
                                        Za sva pitanja i poslovne ponude slobodno me kontaktirajte.    
                                        </p>

                                        <ul class="nosyely_list pt50">
                                            <li>
                                                <div class="img_box_two">
                                     
                                                    <div class="content align-items-center">
                                <img src="{{asset('images/instagram.png')}}" alt="services icon" style="height:30px"></a> 
                                <a href="https://www.instagram.com/iksi_lucius/" style="color:black" target="_blanc" >Instagram</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_box_two">
                                                   
                                                    <div class="content align-items-center">
                                                            <img src="{{asset('images/facebook.png')}}" alt="services icon" style="height:30px"></a> 
                                                        <a href="https://www.facebook.com/nikola.miljevic.98" style="color:black" target="_blanc">Facebook</a>
                                                    </div>
                                                </div>
                                            </li>
                                    
                                        </ul>

                                    <form method="post" action="{{route('contact.store')}}">
                                        {{ csrf_field() }}
                                            <div class="mt75 row justify-content-center">
                                                <div class="col-lg-6 col-12">
                                                    <input type="text" placeholder="Name" class="form-control" name="name">
                                            @if($errors->has('name'))
                                                <small class="form-text invalid-feedback">{{$errors->first('name')}}</small>
                                            @endif
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <input type="email" placeholder="E-Mail" class="form-control" name="email">
                                            @if($errors->has('email'))
                                                    <small class="form-text invalid-feedback">{{$errors->first('email')}}</small>
                                            @endif
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" placeholder="Subject" class="form-control" name="subject">
                                                    
                                                </div>
                                                <div class="col-12">
                                                    <textarea  placeholder="Message" class="form-control" name="message" cols="4" rows="4"></textarea>
                                            @if($errors->has('message'))
                                                    <small class="form-textarea invalid-feedback">{{$errors->first('message')}}</small>
                                            @endif
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary">Posalji</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!--=================== contact info and form end====================-->
                        </div>
                    

                        <div class="col-md-6 col-5 img_section" style="background-image: url('{{asset('storage/photos/'.$photos->photo)}}')">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>


@endsection