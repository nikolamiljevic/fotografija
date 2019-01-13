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
                                <div class="content_box_inner">
                                    <div>
                                        <h3>
                                            Get in touch with us
                                        </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue.
                                        </p>

                                        <ul class="nosyely_list pt50">
                                            <li>
                                                <div class="img_box_two">
                                                    <img src="assets/img/icons/satelite.png" alt="info list">
                                                    <div class="content align-items-center">
                                                        <p>
                                                            Rosia Road , No234/56<br/>
                                                            Gibraltar , UK
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_box_two">
                                                    <img src="assets/img/icons/scheme.png" alt="info list">
                                                    <div class="content align-items-center">
                                                        <p>
                                                            contact@cocoontemplate.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="img_box_two">
                                                    <img src="assets/img/icons/smartphone.png" alt="info list">
                                                    <div class="content align-items-center">
                                                        <p>
                                                            +5463 834 53 2245
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="mt75 row justify-content-center">
                                            <div class="col-lg-6 col-12">
                                                <input type="text" placeholder="Name" class="form-control">
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <input type="email" placeholder="E-Mail" class="form-control">
                                            </div>
                                            <div class="col-12">
                                                <input type="text" placeholder="Subject" class="form-control">
                                            </div>
                                            <div class="col-12">
                                                <textarea  placeholder="Massage" class="form-control" cols="4" rows="4"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--=================== contact info and form end====================-->
                        </div>
                        <div class="col-md-6 col-5 img_section" style="background-color:#000;">
                            <!--map -->
                            <div id="map" data-lon="24.036176" data-lat=" 57.039986" class="map"></div>
                            <!--map end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>


@endsection