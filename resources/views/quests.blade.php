
@extends("layout.main")


@section("content")



    <style>

@media only screen and (max-width: 900px) {

        .game-iframe {
            width: 96%;
            height: 96vh;
            margin-left: -2rem;
            position: fixed;
            top: 0;
            left: 0;
        }

        .top-nav{
            display: none;
        }

        .btn-fullscreen{
            display: none;
        }

    }



    .btn-fullscreen{
        display: block;
        position: fixed;
        bottom: 5rem;
        right: 5rem;
        padding: 1rem;
        color: #fff;
        cursor: pointer;
        z-index: 9999;
        width: 70px;
        height: 70px;
    }

    .btn-fullscreen > i{
        font-size: 4rem;
    }

    #footer{
        display: none;
    }

    </style>

    

    <div class="col-md-12 mt-4">
        <div class="container">

            <!-- <div class="row">
                <div class="col-md-12">
                    <h6 class = "page-title">challenge {{ $msg }}</h6>
                </div>
            </div> -->


           


            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://portal.bitpool.gg/?c={{$cid}}&u={{$uid}}" frameborder="0" class = "game-iframe" id = "iframe"></iframe>
                </div>
            </div>

            

            <span class = "btn-fullscreen" onClick = "openFullscreen()">
                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
            </span>


        </div>



        <script>
        /* Get the element you want displayed in fullscreen */ 
        var elem = document.getElementById("iframe");

        /* Function to open fullscreen mode */
        function openFullscreen() {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.webkitRequestFullScreen) { /* Safari */
            elem.webkitRequestFullScreen();
        } else if (elem.msRequestFullscreen) { /* IE11 */
            elem.mozCancelFullScreen();
        }
        }



        $(document).ready(function(){
            var w = $( window ).width();

            if(w < 900){
                openFullscreen();
            }

        })



        </script>


    @endsection
