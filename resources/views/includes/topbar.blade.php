<div class="navbar custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header">
    {{-- <div class="row"> --}}
        {{-- <div class="col-2"> --}}
        
        {{-- </div> --}}
        <div class="container" style="display:flex">
            <div>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- Car<span>Rental</span> --}}
                    <img src="/images/logo_a.png"  style="width:8rem; height:8rem;">
                </a>
            </div>
         
            <div>
                <nav class="navbar navbar-expand-lg navbar-light" style="float:right">          
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                            class="navbar-toggler-icon"></span> 
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <button class="close-toggler" type="button" data-toggle="offcanvas">
                            <span><i class="fas fa-times-circle" aria-hidden="true"></i></span>
                        </button>
                        <ul class="navbar-nav mr-auto" style="padding-left:30vw">
                            {!! removeTags(get_menus(1)) !!}
                            <li class="nav-item"><span class="calltxt" style="float:right"><i class="fa fa-phone" aria-hidden="true"></i>
                                    {{ widget(1)->extra_field_3 }}</span></li>
                        </ul>
                    </div>
                </nav>
            </div>
        

            <!-- NAVBAR HEADER -->

        </div>
    {{-- </div> --}}
</div>
