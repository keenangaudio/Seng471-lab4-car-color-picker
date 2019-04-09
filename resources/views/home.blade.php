@extends('layouts.app')

@section('head-spot')
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<style type="text/css">
    .color_button {
        margin: 1.6%;
        color:white;
        min-width:15%;
        /*float: right*/
    }
    .color_section {
        /*height: 100px; */
        /*overflow-y: scroll;*/
    }
    .car{
        fill:black;
        stroke-miterlimit:10;
        stroke:black;
    }
    .car_accent {
        fill:#919191;
    }
    .window{ fill:rgb(40,56,200); }
    .seat{ fill:#0b68a8;
        stroke-width:2px;
    }
    .card-body{
      background-image: linear-gradient(red, yellow);
    }
</style>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Customize Your Vehicle</div>

                <div class="card-body">

                    <div id="carSelector" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active" id="0">
                                <h3>2019 Porsche 911</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1065 526">
                                    <title>car</title>
                                    <path class="car" d="M115,566V443.36A97.36,97.36,0,0,1,212.36,346h39.28A97.36,97.36,0,0,0,349,248.64V224.36A97.36,97.36,0,0,1,446.36,127H847.64A97.36,97.36,0,0,1,945,224.36v24.28A97.36,97.36,0,0,0,1042.36,346h39.28A97.36,97.36,0,0,1,1179,443.36V566h-55.12c1.69-56.91-44.74-104.59-101.38-104.5S919.75,509.21,921.44,566H369.49c1.65-57.4-44.26-105.29-100-106.5C212.13,458.26,163.36,506.89,165,566ZM698.5,169.5h-298l-3,363h298Z" transform="translate(-114.5 -126.5)"/>
                                    <path class="seat" d="M573,492.5H458.23a12.73,12.73,0,0,1-12.73-12.73V454.23a12.73,12.73,0,0,1,12.73-12.73H577.46a10.46,10.46,0,0,0,10.34-8.89L617,239.23a10.46,10.46,0,0,1,11.89-8.78l29.8,4.48a10.47,10.47,0,0,1,8.79,11.86L639.19,439.21a42.9,42.9,0,0,1-17.84,28.89l-23.83,16.66A42.85,42.85,0,0,1,573,492.5Z" transform="translate(-114.5 -126.5)"/>
                                    <path class="window" d="M611,43h62.77A108.23,108.23,0,0,1,782,151.23V214a0,0,0,0,1,0,0H611a0,0,0,0,1,0,0V43A0,0,0,0,1,611,43Z"/>
                                    <circle cx="153.25" cy="437.75" r="87.25"/>
                                    <circle cx="909.25" cy="438.75" r="87.25"/>
                                </svg>
                            </div>
                            <div class="carousel-item" id="1">
                              <h3>Jaguar I-Pace Electric SUV</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1065.23 527">
                                    <title>suv</title>
                                    <path class="car" d="M116,565V442.36A97.36,97.36,0,0,1,213.36,345h39.28A97.36,97.36,0,0,0,350,247.64V223.36A97.36,97.36,0,0,1,447.36,126l492.34.34c133,.09,240.68,108,240.53,241L1180,565h-55.12c1.69-56.91-44.74-104.59-101.38-104.5S920.75,508.21,922.44,565H370.49c1.65-57.4-44.26-105.29-100-106.5C213.13,457.26,164.36,505.89,166,565ZM699.5,168.5h-298l-3,363h298Z" transform="translate(-115.5 -125.5)"/>
                                    <path class="seat" d="M574,492.5H459.23a12.73,12.73,0,0,1-12.73-12.73V454.23a12.73,12.73,0,0,1,12.73-12.73H578.46a10.46,10.46,0,0,0,10.34-8.89L618,239.23a10.46,10.46,0,0,1,11.89-8.78l29.8,4.48a10.47,10.47,0,0,1,8.79,11.86L640.19,439.21a42.9,42.9,0,0,1-17.84,28.89l-23.83,16.66A42.85,42.85,0,0,1,574,492.5Z" transform="translate(-115.5 -125.5)"/>
                                    <circle cx="153.25" cy="438.75" r="87.25"/>
                                    <circle cx="909.25" cy="439.75" r="87.25"/>
                                    <path class="window" d="M832.21,54.5h53.06A108.23,108.23,0,0,1,993.5,162.73v53.06a9.71,9.71,0,0,1-9.71,9.71H832.21a9.71,9.71,0,0,1-9.71-9.71V64.21A9.71,9.71,0,0,1,832.21,54.5Z"/>
                                    <rect class="window" x="615.5" y="54.5" width="171" height="171" rx="8.15"/>
                                </svg>
                            </div>
                            <div class="carousel-item" id="2">
                              <h3>2019 Mercedes-Benz Sprinter Crew Van</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1065.23 526.66">
                                    </defs><title>van</title>
                                    <path class="car" d="M116,565l.23-197.67c.15-133.06,108-240.85,241.1-240.88l582.37-.11c133,.09,240.68,108,240.53,241L1180,565h-55a.07.07,0,0,1-.07-.08c1.64-56.87-44.77-104.51-101.39-104.42S920.76,508.2,922.44,565l0,0H370.68a.18.18,0,0,1-.18-.19c1.54-57.32-44.33-105.1-100-106.31C213.13,457.26,164.36,505.89,166,565ZM699.5,168.5h-298l-3,363h298Z" transform="translate(-115.5 -125.84)"/>
                                    <path class="seat" d="M574,492.5H459.23a12.73,12.73,0,0,1-12.73-12.73V454.23a12.73,12.73,0,0,1,12.73-12.73H578.46a10.46,10.46,0,0,0,10.34-8.89L618,239.23a10.46,10.46,0,0,1,11.89-8.78l29.8,4.48a10.47,10.47,0,0,1,8.79,11.86L640.19,439.21a42.9,42.9,0,0,1-17.84,28.89l-23.83,16.66A42.85,42.85,0,0,1,574,492.5Z" transform="translate(-115.5 -125.84)"/>
                                    <circle cx="153.25" cy="438.41" r="87.25"/>
                                    <circle cx="909.25" cy="439.41" r="87.25"/>
                                    <path class="window" d="M832.21,54.16h53.06A108.23,108.23,0,0,1,993.5,162.39v53.06a9.71,9.71,0,0,1-9.71,9.71H832.21a9.71,9.71,0,0,1-9.71-9.71V63.87A9.71,9.71,0,0,1,832.21,54.16Z"/>
                                    <rect class="window" x="615.5" y="54.16" width="171" height="171" rx="8.15"/>
                                    <path class="window" d="M200.71,180H352.29a9.71,9.71,0,0,1,9.71,9.71v53.06A108.23,108.23,0,0,1,253.77,351H200.71a9.71,9.71,0,0,1-9.71-9.71V189.71A9.71,9.71,0,0,1,200.71,180Z" transform="translate(437.5 405.16) rotate(-180)"/>
                                </svg>
                            </div>
                            <div class="carousel-item" id="3">
                                <h3>Ford F150 Supercharger</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1065 566">
                                    <title>truck</title>
                                    <path class="car" d="M115.5,563.53V446.83A100.33,100.33,0,0,1,215.83,346.5h33.34A100.33,100.33,0,0,0,349.5,246.17V227.83A100.33,100.33,0,0,1,449.83,127.5H652.28a18.22,18.22,0,0,1,18.22,18.22V328.28a18.22,18.22,0,0,0,18.22,18.22h476.33A14.45,14.45,0,0,1,1179.5,361V563.53a3,3,0,0,1-3,3h-49.28a3,3,0,0,1-3-2.87c-2.64-67.6-59.78-121-125.8-119.13C935,446.27,882.05,498.63,879.58,563.67a3,3,0,0,1-3,2.83l-241.36-.25L403.58,566a3,3,0,0,1-2.93-2.56c-9.18-61.32-63.4-105.83-123.15-102.94-55.86,2.7-103.43,46.17-111.63,103.42a3,3,0,0,1-2.94,2.58H118.47A3,3,0,0,1,115.5,563.53ZM629,169.5H383.47L381,478H626.53Z" transform="translate(-115 -127)"/>
                                    <path class="seat" d="M521.45,455H406.73A12.73,12.73,0,0,1,394,442.27V416.73A12.73,12.73,0,0,1,406.73,404H526a10.46,10.46,0,0,0,10.34-8.89l29.19-193.38A10.46,10.46,0,0,1,577.38,193l29.8,4.48A10.47,10.47,0,0,1,616,209.29L587.69,401.71a42.9,42.9,0,0,1-17.84,28.89L546,447.26A42.85,42.85,0,0,1,521.45,455Z" transform="translate(-115 -127)"/>
                                    <circle cx="166.5" cy="455.5" r="110.5"/>
                                    <circle cx="885.5" cy="439.5" r="110.5"/>
                                </svg>
                            </div>
                            <div class="carousel-item" id="4">
                              <h3>Dodge Tomahawk</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 643.5 356.48" style="transform: scale(0.75);">
                                    <title>bike</title>
                                    <circle cx="87.25" cy="269.23" r="87.25"/>
                                    <circle cx="556.25" cy="269.23" r="87.25"/>
                                    <path class="car" d="M556,370.34,519.81,324a13.61,13.61,0,0,1,1.62-18.49h0A13.6,13.6,0,0,1,541,307l88.35,107.4a13.6,13.6,0,0,0,6.2,4.27,76.42,76.42,0,0,1,19.24,10.05l7,4.88a15.55,15.55,0,0,0,10.4,2.7l39.17-3.92a15.47,15.47,0,0,0,10.88-6.15l1.36-1.81a87.35,87.35,0,0,1,17.65-17.12,13.57,13.57,0,0,0,5-7.56l4-16.09A13.61,13.61,0,0,1,764,373.33L933,378.48a13.6,13.6,0,0,1,12.76,17l-6.6,25.86a13.63,13.63,0,0,1-5.1,7.58l-48,35.45a13.61,13.61,0,0,0-1.26,20.84l62.69,59.17c8.11,7.65,10,20.07,4,29.44a22.91,22.91,0,0,1-32.79,6.11l-84.07-61.41a13.6,13.6,0,0,0-19.43,3.59l-23.37,36A13.59,13.59,0,0,1,781,564.31l-141.83,6.37a13.59,13.59,0,0,1-11.48-5.41l-57-75.75a13.59,13.59,0,0,0-22.27.76l-57.19,87.88a25.08,25.08,0,0,1-35.5,6.79h0a25.07,25.07,0,0,1-6.51-34.18L556.68,386.14A13.59,13.59,0,0,0,556,370.34Z" transform="translate(-381.5 -302.02)"/>
                                    <path class="car_accent" d="M521.47,352.33h18a8,8,0,0,1,8,8v63.53a8,8,0,0,1-8,8h-18a39.76,39.76,0,0,1-39.76-39.76v0a39.76,39.76,0,0,1,39.76-39.76Z" transform="translate(647.66 482.16) rotate(-180)"/>
                                    <rect class="seat" x="735" y="347" width="225" height="62" rx="20.6" transform="translate(-400.25 -256.81) rotate(-3.02)"/>
                                </svg>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carSelector" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carSelector" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="card-footer">

                    <div>
                        <h3 style="display: inline;">
                            Exterior:
                        </h3>
                        <div class="color_section">
                        @foreach( $colors as $color)
                            <button class="btn color_button" style="background-color: {{ $color }};" onclick="colorize('.car','{{ $color }}')">
                                {{ strtoupper($color) }}
                            </button>
                        @endforeach
                        </div>
                    </div>
                    <div >
                        <h3 style="display: inline;">
                            Interior:
                        </h3>
                        <div class="color_section">
                        @foreach( $colors as $color)
                            <button class="btn color_button" style="background-color: {{ $color }};" onclick="colorize('.seat','{{ $color }}')">
                                {{ strtoupper($color) }}
                            </button>
                        @endforeach
                        </div>
                    </div>
                    <div>
                        <h3 style="display: inline;">
                            Trim:
                        </h3>
                        <div class="color_section">
                        @foreach( $colors as $color)
                            <button class="btn color_button" style="background-color: {{ $color }};"
                            onclick="stroke('.seat','{{ $color }}');colorize('.car_accent','{{ $color }}')">
                                {{ strtoupper($color) }}
                            </button>
                        @endforeach
                        </div>
                        <div class="form-group">
                            <label for="formControlRange">Trim size</label>
                            <input type="range" class="form-control-range" id="formControlRange">
                        </div>

                        <button class="btn btn-primary" id="ajaxSubmit" onclick="sendSomething()">Submit</button>
                    </div>
                    <script type="text/javascript">

                        $(document).ready(function() {
                            // $( ".stroke_slider" ).slider( "enable" );
                            $('.carousel').carousel('pause');

                            $('#formControlRange').on('change', function() {
                                let width = $(this).val() / 15;
                                $('.seat').css("stroke-width",width + 'px');
                            })
                        });

                        function colorize(el, color) {
                            $(el).css("fill",color);
                        }
                        function stroke(el, color) {
                            $(el).css("stroke",color);
                        }
                    </script>
                    <!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"
                          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                          crossorigin="anonymous">
                    </script> -->

                    <script>
                        window.Laravel = { csrfToken: '{{ csrf_token() }}' };
                    </script>

                    <form method="post" action="/home/save">
                      @csrf
                      <input type="text" name="blah" value="yes">
                      <input type="submit">
                    </form>

                    <script>
                    /*none of this works lol */
                    function sendSomething() {
                    var xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                      this.innerHtml = this.responseText;
                                    }
                                  };
                                  xmlhttp.open("GET", "/home/save", true);
                                  xmlhttp.send();
                    // $(document).ready(function() {
                    //     $('#ajaxSubmit').click(function (e) {
                    //         e.preventDefault();
                    //
                    //         // var title = $('#carSelector').val();
                    //         // var body = $('.carouselitem').val();
                    //         var test = "oh yes";
                    //
                    //         $.ajaxSetup({
                    //           headers: {
                    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    //           }
                    //         });
                    //
                    //         $.ajax({
                    //             datatype : "json",
                    //             type: "POST",
                    //             url: 'home/save',
                    //             data: {test : test},
                    //             success: function( data ) {
                    //               $("#ajaxResponse").append("<div>"+data.msg+"</div>");
                    //             }
                    //         });
                    //     });
                    // });
                    //
                    //    // jQuery(document).ready(function(){
                    //    //    jQuery('#ajaxSubmit').click(function(){
                    //    //
                    //    //      // $.ajax({
                    //    //      //                type:'POST',
                    //    //      //                url:'/getmsg',
                    //    //      //                data:'name = hello','_token = <?php echo csrf_token() ?>',
                    //    //      //                success:function(data) {
                    //    //      //                   $("#msg").html(data.msg);
                    //    //      //                }
                    //    //      //             });
                    //    //
                    //    //      var x = new XMLHttpRequest();
                    //    //      x.open("GET", "/home", true);
                    //    //      x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    //    //      x.setRequestHeader("X-CSRF-TOKEN", '{{ csrf_token() }}');
                    //    //      x.send();
                    //    //    //  x.send("fnam";
                    //    //      x.onreadystatechange = function() {
                    //    //        if (this.readyState == 4 && this.status == 200) {
                    //    //          // this.innerHtml = responseText;
                    //    //        }
                    //    //      }
                    //    //    });
                    //    //  });
                  }
                    </script>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
