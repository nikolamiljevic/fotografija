@extends('inc.index')

@section('content')


        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
            <div>
<!--=================== image card start here  (has two section left and right )====================-->
                <div class="img_card">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-7 content_section">
                            <div class="content_box">
                                <div class="content_box_inner">
                                    <div class="row justify-content-center">
<!--=================== services boxes start here  ====================-->
                                        <div class="col-md-6 col-12">
                                            <div class="img_box_one text-left">
                                                {{-- <img src="{{asset('images/icon5.png')}}" alt="services icon"> --}}
                                                <div class="content">
                                                    <h5>
                                                        Enterijer-eksterijer
                                                    </h5>
                                                    <p>
                                                    Stranice na kojima se nalaze profesionalne fotografije imaju 70-90% više poseta od stranica sa nedovoljno dobrim fotografijama.
                                                    Ucinite da vas prostor bude u punom sjaju na vasoj poslovnoj stranici.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="img_box_one text-left">
                                                {{-- <img src="{{asset('images/icon5.png')}}" alt="services icon"> --}}
                                                
                                                <div class="content">
                                                    <h5>
                                                       Fotografisanje proizvoda
                                                    </h5>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="img_box_one text-left">
                                                {{-- <img src="{{asset('images/icon5.png')}}" alt="services icon"> --}}
                                                <div class="content">
                                                    <h5>
                                                       Fotografisanje dogadjaja
                                                    </h5>
                                                    <p>
                                                        Momenti od znacaja zasluzuju da budu zabelezeni na najbolji nacin.
                                                        Zajedno stvaramo momente koje sa ponosom delite sa drugima.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="img_box_one text-left">
                                                {{-- <img src="{{asset('images/icon5.png')}}" alt="services icon"> --}}
                                                <div class="content">
                                                    <h5>
                                                       Portreti-Lifestyle
                                                    </h5>
                                                    <p>
                                                        Prikazite sebe u najboljem svetlu. Neka vasa jedinstvenost i kreativnost izadje u prvi plan.
                                                        
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6 col-12">
                                            <div class="img_box_one text-left">
                                                <img src="assets/img/icons/idea.png" alt="services icon">
                                                <div class="content">
                                                    <h5>
                                                        Interior Design
                                                    </h5>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="img_box_one text-left">
                                                <img src="assets/img/icons/satelite.png" alt="services icon">
                                                <div class="content">
                                                    <h5>
                                                        Collateral Design
                                                    </h5>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div> --}}
 <!--=================== services boxes end here  ====================-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-5 img_section" style="background-image: url('{{asset('storage/photos/'.$photos->photo)}}');"></div>
                    </div>
                </div>
<!--=================== image card end here ====================-->
            </div>
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>


@endsection