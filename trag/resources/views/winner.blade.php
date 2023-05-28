


@extends("layout.main")


@section("content")
    

    <div class="col-md-12 mt-4">
        <div class="container">

          
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="/img/logo.svg" alt="">
                            <h1 class = "mt-2 winner-title">YOU WON CHALLENGE</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="/img/winner.svg" alt="" style = "width:14rem">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12 text-center">
                            <h1 class = "winner-price" >+{{$challenge->amount}} BUSD</h1>
                            <p>has been added to your wallet</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href = "/" class="btn btn-info home-btn">Home</a>
                        </div>
                    </div>



                </div>
            </div>



        </div>
    </div>


    @endsection
