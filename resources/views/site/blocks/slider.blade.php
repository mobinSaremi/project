
<section class="cover height-100 imagebg" data-overlay="6">

                <div class="bg-img-holder" style="background: url('{{asset('assets/upload/'.$sliders->image)}}' ); opacity: 1;">
                    <img alt="background" src="{{asset('assets/upload/'.$sliders->image)}}">
                </div>
                
                <div class="container pos-vertical-center">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-6">
                            <h1 class="mb-4 font-2 font-normal">
                              {{$sliders->title}}
                            </h1>
                            <p>{{$sliders->post}}</p>
							
                        </div>
						
                    </div>
                    <!--end of row-->
                </div>
               
                <!--end of container-->
            </section>