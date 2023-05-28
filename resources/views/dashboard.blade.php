
@extends("layout.main")


@section("content")
    

    <div class="col-md-12 mt-4">
        <div class="container">



            <div class="row mb-4">
                <div class="col-md-12">
                    <img src="/img/banner.png" alt="Bitpool - Play and Earn Crypto with BitPool: The World's First AI-Powered Web-3 Based 8-Ball Pool Game by BitSport" class = "main-banner">
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class = "cus-card-titile-text">Quests</h4>
                                    <p class = "cus-card-titile-sub-text">Accept and play some of the below F2E (Free to Earn) modes, earn $BITP and other Crypto</p>
                                </div>
                            </div>
                </div>
            </div>


    


            @foreach($challenges as $c)

            <div class = "row mb-3">
                <div class = "col-md-12">
                    <div class="card bg-dark rounded">
                        <div class="card-body">
                            <div class="row">

                                <!-- <div class="col-md-2 adin-challenge-table-cell">
                                    BITPOOL
                                </div> -->

                                <div class="col-md-2 adin-challenge-table-cell mobile-padding-top">
                                    <p class = "table-cell-title">AMOUNT</p>
                                    <p class = "table-cell-text">{{ $c->amount }} {{ $c->coin_sku }}</p>
                                </div>

                                <div class="col-md-2 adin-challenge-table-cell mobile-padding-top">
                                    <p class = "table-cell-title">WIN STREAK</p>
                                    <p class = "table-cell-text">{{ $c->streak }}</p>
                                </div>

                                <div class="col-md-2 adin-challenge-table-cell mobile-padding-top">
                                    <p class = "table-cell-title">Quest Credit</p>
                                    <p class = "table-cell-text">{{ $c->qc }}</p>
                                </div>

                                <div class="col-md-2 adin-challenge-table-cell mobile-padding-top">
                                    <p class = "table-cell-title">DIFFICULTY</p>
                                    <p class = "table-cell-text">
                                        @if($c->difficalty == 0)
                                            EASY
                                        @elseif($c->difficalty == '1')
                                            MEDIUM
                                        @elseif($c->difficalty == '2')
                                            HARD
                                        @endif
                                    </p>
                                </div>

                                <div class="col-md-4 text-right adin-challenge-table-cell mobile-padding-top">

                                    <a class="btn btn-info accept-button" href = "/quests/{{$c->id}}">ACCEPT ({{ \App\Http\Controllers\FrontendController::getCurrantMatc($c->id) }}/{{$c->streak}})</a>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

            @if($isSeeMore)
            <div class="row">
                <div class="col-md-12 text-center">
                    <button class = "btn-see-more" onClick = "window.location.href = '?lmt={{$lmt}}'">See More</button>
                </div>
            </div>
            @endif




            <div class="row mt-4">
                <div class="col-md-12">
                    <a href="{{ \App\Http\Controllers\FrontendController::getBannerBottomUrl() }}" target = "_blank">
                        <img src="{{ \App\Http\Controllers\FrontendController::getBannerBottom() }}" alt="" style = "width:100%">
                    </a>
                </div>
            </div>
    


       





        </div>


    @endsection
