@extends('layouts.app')

@section('head')
<style type="text/css">
    .color_button {
        margin: 1.6%;
        color:white;
        min-width:15%;
        /*float: right*/
    }
    /*<style>*/
    .car{ 
        fill:red;
        stroke:#fff;
        stroke-miterlimit:10;
    }
    .window{ fill:rgb(40,56,200); }
    .seat{ fill:#0b68a8; }
    {{-- </style> --}}
        
</style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customize Your Vehicle</div>
                
                <div class="card-body">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1065 526">
                        <defs>
                            
                        </defs>
                        <title>car</title>
                        <path class="car" d="M115,566V443.36A97.36,97.36,0,0,1,212.36,346h39.28A97.36,97.36,0,0,0,349,248.64V224.36A97.36,97.36,0,0,1,446.36,127H847.64A97.36,97.36,0,0,1,945,224.36v24.28A97.36,97.36,0,0,0,1042.36,346h39.28A97.36,97.36,0,0,1,1179,443.36V566h-55.12c1.69-56.91-44.74-104.59-101.38-104.5S919.75,509.21,921.44,566H369.49c1.65-57.4-44.26-105.29-100-106.5C212.13,458.26,163.36,506.89,165,566ZM698.5,169.5h-298l-3,363h298Z" transform="translate(-114.5 -126.5)"/>
                        <path class="window" d="M611,43h62.77A108.23,108.23,0,0,1,782,151.23V214a0,0,0,0,1,0,0H611a0,0,0,0,1,0,0V43A0,0,0,0,1,611,43Z"/>
                        <circle cx="153.25" cy="437.75" r="87.25"/>
                        <path class="seat" d="M573,492.5H458.23a12.73,12.73,0,0,1-12.73-12.73V454.23a12.73,12.73,0,0,1,12.73-12.73H577.46a10.46,10.46,0,0,0,10.34-8.89L617,239.23a10.46,10.46,0,0,1,11.89-8.78l29.8,4.48a10.47,10.47,0,0,1,8.79,11.86L639.19,439.21a42.9,42.9,0,0,1-17.84,28.89l-23.83,16.66A42.85,42.85,0,0,1,573,492.5Z" transform="translate(-114.5 -126.5)"/>
                        <circle cx="909.25" cy="438.75" r="87.25"/>
                    </svg>
                </div>
                <div class="card-footer">
                    <? $colors = [
                        'Silver', 'Gray', 'Black', 'Red', 'Maroon', 'Yellow', 'Olive',
                        'Lime', 'Green', 'Aqua', 'Teal', 'Blue', 'Navy', 'Fuchsia', 'Purple',
                        ] ?>
                    <div>
                        <h3 style="display: inline;">
                            Exterior:
                        </h3>
                        <div style="width: 100%;overflow-x: scroll">
                        @foreach( $colors as $color)
                            <button class="btn color_button" style="background-color: {{ $color }};" onclick="exterior('{{ $color }}')">
                                {{ strtoupper($color) }}
                            </button>
                        @endforeach
                        </div>
                    </div>
                    <div>
                        <h3 style="display: inline;">
                            Interior:
                        </h3>
                        <div style="width: 100%;overflow-x: scroll">
                        @foreach( $colors as $color)
                            <button class="btn color_button" style="background-color: {{ $color }};" onclick="interior('{{ $color }}')">
                                {{ strtoupper($color) }}
                            </button>
                        @endforeach
                        </div>
                    </div>
                    <script type="text/javascript">
                        function exterior(color) {
                            $(".car").css("fill",color);
                        }
                        function interior(color) {
                            $(".seat").css("fill",color);
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
'White', 'Silver', 'Gray', 'Black', 'Red', 'Maroon', 'Yellow', 'Olive', 'Lime', 'Green', 'Aqua', 'Teal', 'Blue', 'Navy', 'Fuchsia', 'Purple',
