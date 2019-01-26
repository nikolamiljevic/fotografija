@extends('inc.index')

@section('content')

        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">
            <div>
                <div class="img_card">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-7 content_section">
                            <div class="content_box">
                                <div class="content_box_inner">
                                    <div>
                                        <h3>
                                            O meni 
                                        </h3>
                                        <p>
                                            Fotografijom sam poceo da se bavim 2014. godine inspirisan našim i stranim majstorima ulične fotografije.
                                            To je ujedno i vrsta fotografije koju najviše volim. U početku kao i većina ljudi slikao sam sve što mi je delovalo 
                                            zanimljivo, a toga je bilo mnogo, dok je kasnije  stil počeo da dobija svoju formu i da bude dosta svedeniji.
                                            Vremenom sam počeo da trazim nove izazove pa sam tako krenuo prvo sa fotografisanjem događaja, a zatim i 
                                            portreta koje smatram izuzetno zanimljivim
                                            i vrlo pogodnim za kreativan rad. 
                                        </p>
                                        <p>Osim toga u mojim galerijama preovladavaju ulična, urbana i dokumentarna fotografija. Volim da hvatam scene sa ulica
                                             u kojima ja vidim nešto, a onome ko gleda ostavljam da to doživi na svoj način.
                                            Dobre fotografije su svuda oko nas tako da nije bitno gde se nalazim, uvek i svuda fotografišem jer me to ispunjava. 
                                        </p>
                            
                                    </div>
                                    <!--===================testimonial start====================-->
                        
                                        <div class="testimonial_carousel mt50">
                                            @foreach( $quotes as $quote)
                                                <div class="testimonial_box">
                                                    <p>{{$quote->content}}</p>
                                                        <div class="testimonial_author">
                                                            <h5>{{$quote->name}}</h5>
                                                        </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    <!--===================testimonial end====================-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-5 img_section" style="background-image: url('{{asset('storage/photos/'.$photos->photo)}}')"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>

@endsection