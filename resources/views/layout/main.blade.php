<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitPool Beta - Play and Earn Crypto with BitPool: The World's First AI-Powered Web-3 Based 8-Ball Pool Game by BitSport</title>

    <meta name="description" content="BitPool is the world's first AI-powered, web3-based 8-ball pool game. Play, earn and compete against AI and other players, earn $BITP and other Crypto">
    <meta name=”robots” content="index, follow">
    <meta name="keywords" content=" BitPool, BitSport, Play-N-Earn Platform, Web-3 based gaming, AI-powered gaming, blockchain gaming, cryptocurrency gaming, 8-ball pool game, $BITP token.">


    <meta property="og:title" content="Play and Earn Crypto with BitPool: The World's First AI-Powered Web-3 Based 8-Ball Pool Game by BitSport" />
    <meta property="og:type" content="game" />
    <meta property="og:url" content="https://bitpool.gg/" />
    <meta property="og:image" content="https://bitpool.gg/img/logo.svg" />
    <meta property="og:description" content="BitPool is the world's first AI-powered, web3-based 8-ball pool game. Play, earn and compete against AI and other players, earn $BITP and other Crypto" />               

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/main.css">

    <link rel="icon" type="image/png" href="/img/favicon.png" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HG470S5CKX"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HG470S5CKX');
    </script>


</head>

<body>


    <!-- side manu  -->
    <div class="">
        <div class="row">


            <div style="width:10rem" class="side-nav">
                <button class = "round-close-btn" id= "sidebar_close_btn" onClick = "closesidenav()"></button>
                <div class="row">
                    <div class="col-md-12">
                        <!-- <img src="https://app.bitsport.gg/img/logo.png" alt="" class="img-fluid side-nav-logo"> -->
                        <img src="/img/logo.svg" alt="BitPool.gg" class="img-fluid side-nav-logo" onClick = "window.location.href = '/'">
                    </div>
                </div>
                <div class="row justify-content-center">


                    <div class="side-nav-item">
                        <a href="/" class="side-nav-link">
                            <img src="/img/featured.svg" alt="BitPool.gg">
                            <br />
                            <span class="side-nav-item-text">bitpool beta</span>
                        </a>
                    </div>



                    <div class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <img src="/img/nft.svg" alt="BitPool.gg">
                            <br />
                            <span class="side-nav-item-text">NFT</span>
                            <spam class="text-danger" style="font-size:12px">coming soon</spam>
                        </a>
                    </div>



                    <div class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <img src="/img/leadership.svg" alt="BitPool.gg">
                            <br />
                            <span class="side-nav-item-text">Leaderboard</span>
                            <spam class="text-danger" style="font-size:12px">coming soon</spam>

                        </a>
                    </div>

                    <div class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <img src="/img/leadership.svg" alt="BitPool.gg">
                            <br />
                            <span class="side-nav-item-text">news & events</span>
                            <spam class="text-danger" style="font-size:12px">coming soon</spam>

                        </a>
                    </div>

                    <div class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <img src="/img/leadership.svg" alt="BitPool.gg">
                            <br />
                            <span class="side-nav-item-text">tutorial</span>
                            <spam class="text-danger" style="font-size:12px">coming soon</spam>
                        </a>
                    </div>

                    <div class="side-nav-item">
                        <a href="https://app.bitsport.gg" class="side-nav-link">
                            <img src="/img/leadership.svg" alt="BitPool.gg">
                            <br />
                            <span class="side-nav-item-text">dapp</span>
                        </a>
                    </div>


                    <div class="side-nav-item">
                        <a href="/logout" class="side-nav-link">
                            <img src="/img/logout.svg" alt="BitPool.gg">
                            <br />
                            <span class="side-nav-item-text">Logout</span>
                        </a>
                    </div>


                </div>
            </div>




            




            <div style="width: calc(100% - 10rem)" class = "content-div">

                <div class="row">
                    <div class="col-md-12">
                        <div class="top-nav">

                            <div class="row d-flex justify-content-between align-items-center">



                                <div class="col-md-4 col-6" style = "display:flex; align-item:center">
                                    <a href="javascript:void(0);" class="icon"  onclick="sidenav()">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                    <h1 class = "site-title" onClick = "window.location.href = '/'">BITPOOL</h1>
                                </div>

                                <div class="col-md-8 col-6  text-right top-nav-right">
                                    
                                    <form action = "https://wallet.bitpool.gg/" method = "post" id = "___wallet">
                                        <input name = "id" value = "{{ Cookie::get('user_id') }}" type = "hidden">
                                    </form> 
                                    <div class = "top-nav-btp-box" onClick = "$('#___wallet').submit()">
                                      

                                        <?php
                                            $d = App\Http\Controllers\FrontendController::getUSDG();
                                        ?>
                                        <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25.194" height="30.075" viewBox="0 0 30.194 35.075">
                                            <g id="Group_1462" data-name="Group 1462" transform="translate(11448.958 12748.326)">
                                                <path id="Exclusion_143" data-name="Exclusion 143" d="M15.153,35.075h0L0,25.816V8.538L15.153,0,30.194,8.538V25.816l-15.039,9.26Zm-.1-30.9h0L3.629,11.014V23.628l11.425,6.98,11.339-6.98V11.014L15.053,4.173Z" transform="translate(-11448.958 -12748.326)" fill="#286bbe"/>
                                                <g id="Group_1381" data-name="Group 1381" transform="translate(-11439.063 -12738.743)">
                                                <path id="Exclusion_135" data-name="Exclusion 135" d="M5.34,15.909a.811.811,0,0,1-.565-.205A.671.671,0,0,1,4.62,15.5v-.828a.512.512,0,0,0-.074-.326.741.741,0,0,0-.319-.2,4.985,4.985,0,0,1-1.479-.541,3.177,3.177,0,0,1-1.019-.882,2.476,2.476,0,0,1-.467-1.473A2.715,2.715,0,0,1,1.7,9.737a3.488,3.488,0,0,1,.973-.969A5.064,5.064,0,0,1,4.091,8.1h0A3.389,3.389,0,0,1,3.3,7.316a2.763,2.763,0,0,1-.444-.938,2.54,2.54,0,0,1,.012-1.26,3.61,3.61,0,0,1,.521-1.162,3.313,3.313,0,0,1,.677-.721A2.873,2.873,0,0,1,4.9,2.764H1.975a1.46,1.46,0,0,0-.81.37,3.5,3.5,0,0,0-.634.987H0c0-.006.33-.786.53-1.445A9.227,9.227,0,0,0,.813,1.444S1,1.6,1.894,1.636c.265.011.622.017,1.061.017.744,0,1.485-.017,1.492-.017a.529.529,0,0,0,.2-.082.333.333,0,0,0,.1-.208v-1a.367.367,0,0,1,.1-.171A.663.663,0,0,1,5.343,0h.014A.7.7,0,0,1,5.87.174a.352.352,0,0,1,.1.169v1a.278.278,0,0,0,.094.181.545.545,0,0,0,.244.07c.01,0,1.022.1,2.036.1s2.051-.1,2.061-.1L9.851,3.033a2.589,2.589,0,0,0-1.223-.269c-.283-.02-.656-.03-1.106-.03-.768,0-1.507.03-1.514.03a4.433,4.433,0,0,0-1.069.605,2.718,2.718,0,0,0-.7.767,1.743,1.743,0,0,0-.235,1.086,2.214,2.214,0,0,0,.445,1.085,3.605,3.605,0,0,0,.8.764,5.2,5.2,0,0,0,1.107.6c.006,0,.62.317,1.26.706a3.2,3.2,0,0,1,1.871,2.763A2.61,2.61,0,0,1,9,12.715a3.168,3.168,0,0,1-1.077.91,5.014,5.014,0,0,1-1.568.521.711.711,0,0,0-.262.2.544.544,0,0,0-.081.326V15.5a.55.55,0,0,1-.128.2.727.727,0,0,1-.542.207Zm-.8-7.621a4.253,4.253,0,0,0-.787.56,3.613,3.613,0,0,0-.6.678,2.527,2.527,0,0,0-.391.923,2.8,2.8,0,0,0-.022.951,2.912,2.912,0,0,0,.215.74,2.662,2.662,0,0,0,.4.65,2.2,2.2,0,0,0,.53.481,2.771,2.771,0,0,0,.681.331,3.126,3.126,0,0,0,.975.15h.07a3.534,3.534,0,0,0,1.009-.163,3.1,3.1,0,0,0,.709-.329,2.34,2.34,0,0,0,.556-.469,1.877,1.877,0,0,0,.266-1.675A2.547,2.547,0,0,0,7.523,10.1a1.856,1.856,0,0,0-.386-.3Z" fill="#286bbe"/>
                                                </g>
                                            </g>
                                            </svg>
                                        </div>
                                        <span class = "top-nav-btp-text">{{$d['usdg']}} USDG</span>


                                        <div style = "margin-left:20px" class="mobile-hide">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29.759" height="34.569" viewBox="0 0 29.759 34.569">
                                            <g id="Group_1461" data-name="Group 1461" transform="translate(11823.259 11935.621)">
                                                <path id="Exclusion_140" data-name="Exclusion 140" d="M8.28,19.318h0L0,13.927V5.409L8.28,0l8.572,5.409v8.518l-1.223.8,0,0-.225.149-.005,0,.226-.149-.272-.28-1.288-1.3a4.8,4.8,0,0,0,.645-1.011,6.242,6.242,0,0,0,.443-1.2,6.52,6.52,0,0,0,.2-1.617,6.066,6.066,0,0,0-.2-1.576,5.1,5.1,0,0,0-.443-1.113,3.556,3.556,0,0,0-.643-.878,6.55,6.55,0,0,0-1.339-1.4,6.644,6.644,0,0,0-1.656-.963,6.181,6.181,0,0,0-2.3-.438c-.067,0-.134,0-.2,0a7.353,7.353,0,0,0-2.409.484,7.933,7.933,0,0,0-1.772.957A7.368,7.368,0,0,0,2.926,5.748a4.837,4.837,0,0,0-.654,1.034,5.748,5.748,0,0,0-.422,1.2,5.564,5.564,0,0,0-.135,1.566,7.562,7.562,0,0,0,.244,1.535,6.859,6.859,0,0,0,.41,1.13,4.714,4.714,0,0,0,.557.936,5.742,5.742,0,0,0,.884.954,7.278,7.278,0,0,0,1.113.808,7.144,7.144,0,0,0,1.567.687,7.928,7.928,0,0,0,2.289.321,9.164,9.164,0,0,0,2.436-.321l-1.99-2.45h0c-.025,0-.118.007-.255.007a4.449,4.449,0,0,1-1.756-.331A3.915,3.915,0,0,1,6.1,12.015a4.894,4.894,0,0,1-.442-.5,2.913,2.913,0,0,1-.33-.589,4.029,4.029,0,0,1-.325-1.61,3.635,3.635,0,0,1,.33-1.539,2.22,2.22,0,0,1,.325-.518,3.162,3.162,0,0,1,.7-.751,3.5,3.5,0,0,1,.908-.519,3.67,3.67,0,0,1,1.307-.24H8.6a3.732,3.732,0,0,1,1.317.236,3.805,3.805,0,0,1,.943.519,3.538,3.538,0,0,1,.757.755A4.129,4.129,0,0,1,12.207,8.8a8.755,8.755,0,0,1,0,2.076,4.538,4.538,0,0,1-.784,1.189A8.32,8.32,0,0,1,10.1,13.147l2.944,2.872.256.238L8.28,19.318Zm5.034-3.045h0l-.017-.016.084-.051h.035l-.1.067Zm3.539-.067H13.415l1.993-1.323,1.444,1.323Z" transform="translate(-11816.655 -11927.995)" fill="#6f48cd"/>
                                                <path id="Exclusion_144" data-name="Exclusion 144" d="M14.935,34.569h0L0,25.443V8.415L14.935,0,29.759,8.415V25.443L14.936,34.569Zm-.1-30.456h0L3.576,10.855V23.287l11.26,6.879,11.176-6.879V10.855L14.836,4.113Z" transform="translate(-11823.259 -11935.621)" fill="#6f48cd"/>
                                                <path id="Exclusion_148" data-name="Exclusion 148" d="M14.935,34.569h0L0,25.443V8.415L14.935,0,29.759,8.415V25.443L14.936,34.569Zm-.1-30.456h0L3.576,10.855V23.287l11.26,6.879,11.176-6.879V10.855L14.836,4.113Z" transform="translate(-11823.259 -11935.621)" fill="#6f48cd"/>
                                            </g>
                                            </svg>
                                        </div>
                                        <span class = "top-nav-btp-text mobile-hide">{{$d['qc']}} QC</span>


                                    </div>
                                    <!-- <div class = "mobile-hide">
                                        <img class="rounded-circle shadow-4-strong top-nav-user" alt="avatar2" src="/img/user.svg" />
                                    </div> -->
                                </div>

                            </div>


                        </div>
                    </div>
                    
                    <div class="col-md-12 main-contant container">
        
                        @yield('content')

                        <br>
                        <br>
                    </div>
                    

                    


                        <div class="row" id = "footer" style  ="padding:1rem 1rem 2rem 1rem; border-top: solid 1px #ffffff5c; text-align:center">
                            
                            <div class="col-md-6 text-left">
                                BitPool © 2023 by <a href = "https://bitsport.gg" clss = "text-white"> BitSport</a>
                            </div>
                            <div class="col-md-6 text-right">
                                @php $cp = \App\Http\Controllers\FrontendController::getOnlinePlayers(); @endphp
                               <span class = "anim-disk"></span> <span class = "online-player-count">{{ $cp*12 }}@if($cp>0)+@endif Players online now</span>
                            </div>
                        </div>



                </div>


                       



                
                @if(Cookie::get('user_id') == '')
                 <!-- Login popup modal -->
                    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" style = "display:block; opacity:1;    background: #000000b3;">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content bg-dark rounded" >
                                <div class="modal-body text-center">
                                    <h3 class = "login-title">BITPOOL</h3>
                                    <h6 class="mb-3">Login to your Bitsport account</h6>
                                    <form action = "/login" method = "post">
                                        @csrf
                                        <div class="mb-3 text-left">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="mb-3 text-left">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>

                                        @if(session()->has('error'))
                                        <div class="" style = "margin:1.5rem">
                                            <span class="alert alert-danger">{{ session()->get('error') }}</span>
                                        </div>
                                        @php session()->forget('error'); @endphp
                                        @endif


                                        <button type="submit" class="btn btn-primary login-btn">Login</button>

                                        <div class="row mt-3">
                                            <div class="col-md-12 text-center">
                                                <span id = "gotologin" onClick = "signup_model()" class="text-decoration-none text-white">Create an account</span>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true" style = "display:none;    background: #000000b3;">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content bg-dark rounded" >
                                <div class="modal-body text-center">
                                    <h3 class = "login-title">BITPOOL</h3>
                                    <h6 class="mb-3">Signup to Bitsport</h6>
                                    <form action = "/reg" method = "post">
                                        @csrf
                                        <div class="mb-3 text-left">
                                            <label for="email" class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="fname" aria-describedby="" required>
                                        </div>
                                        <div class="mb-3 text-left">
                                            <label for="email" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="lname" aria-describedby="" required>
                                        </div>
                                        <div class="mb-3 text-left">
                                            <label for="email" class="form-label">User Name</label>
                                            <input type="text" class="form-control" name="username" aria-describedby="" required>
                                        </div>
                                        <div class="mb-3 text-left">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" name="email" aria-describedby="" required>
                                        </div>
                                        <div class="mb-3 text-left">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>

                                        @if(session()->has('rerror'))
                                        
                                        <div class="" style = "margin:1.5rem">
                                            <span class="alert alert-danger">{{ session()->get('rerror') }}</span>
                                        </div>
                                        
                                        @endif
                                        
                                        <button type="submit" class="btn btn-primary login-btn">Sign Up</button>


                                        <div class="row mt-3">
                                            <div class="col-md-12 text-center">
                                                <span id = "gotologin" onClick = "login_model()" class="text-decoration-none text-white">Already have Bitsport account. Login here</span>
                                            </div>
                                        </div>



                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                @endif





    








            </div>

        </div>
        </div>


        

          <!-- claim reward mode  -->
          @if(session()->get('isnew') && Cookie::get('user_id') != '')
          <?php session()->forget('isnew') ?>
                <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" style = "display:block; opacity:1;    background: #000000b3;">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content bg-dark rounded" >
                                <div class="modal-body text-center">
                                    <h3 class = "login-title" style = "color:#ffff;margin-top:2rem">WELCOME TO BITPOOL</h3>
                                    <h6 style = "margin-top:2rem; margin-bottom:1rem">CONGRATULATIONS YOU WON 3 QUEST CREDITS</h6>
                                        <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="89.518" height="109.139" viewBox="0 0 59.518 69.139">
                                            <g id="Group_1463" data-name="Group 1463" transform="translate(11823.259 11935.621)">
                                                <path id="Exclusion_140" data-name="Exclusion 140" d="M16.56,38.636h0L0,27.854V10.817L16.561,0,33.7,10.817V27.854l-2.446,1.606.008.008-.45.3-.011-.01.452-.3-.544-.561-2.576-2.6a9.6,9.6,0,0,0,1.29-2.022,12.484,12.484,0,0,0,.886-2.409,13.039,13.039,0,0,0,.4-3.235,12.133,12.133,0,0,0-.4-3.152,10.2,10.2,0,0,0-.885-2.226A7.113,7.113,0,0,0,28.138,11.5a13.1,13.1,0,0,0-2.678-2.8,13.289,13.289,0,0,0-3.312-1.926,12.362,12.362,0,0,0-4.595-.876c-.133,0-.268,0-.4.006a14.706,14.706,0,0,0-4.818.968A15.867,15.867,0,0,0,8.789,8.78,14.735,14.735,0,0,0,5.853,11.5a9.674,9.674,0,0,0-1.308,2.069,11.5,11.5,0,0,0-.845,2.4,11.128,11.128,0,0,0-.27,3.133,15.124,15.124,0,0,0,.487,3.071,13.717,13.717,0,0,0,.821,2.259,9.429,9.429,0,0,0,1.115,1.871A11.484,11.484,0,0,0,7.621,28.2a14.556,14.556,0,0,0,2.226,1.616,14.287,14.287,0,0,0,3.134,1.375,15.856,15.856,0,0,0,4.578.642,18.327,18.327,0,0,0,4.871-.642l-3.981-4.9h0c-.05,0-.236.014-.509.014a8.9,8.9,0,0,1-3.512-.662A7.831,7.831,0,0,1,12.2,24.03a9.788,9.788,0,0,1-.885-1,5.826,5.826,0,0,1-.659-1.178,8.058,8.058,0,0,1-.65-3.219,7.27,7.27,0,0,1,.659-3.077,4.439,4.439,0,0,1,.65-1.036,6.323,6.323,0,0,1,1.4-1.5,7,7,0,0,1,1.816-1.037,7.341,7.341,0,0,1,2.615-.481h.043a7.465,7.465,0,0,1,2.635.472,7.61,7.61,0,0,1,1.886,1.038,7.077,7.077,0,0,1,1.514,1.51,8.259,8.259,0,0,1,1.185,3.075,17.51,17.51,0,0,1,0,4.151,9.075,9.075,0,0,1-1.568,2.378,16.64,16.64,0,0,1-2.652,2.175l5.888,5.744.512.477L16.561,38.636Zm10.067-6.089h0l-.034-.032.168-.1h.069l-.2.134Zm7.077-.135H26.83l3.987-2.646L33.7,32.411Z" transform="translate(-11810.052 -11920.369)" fill="#6f48cd"/>
                                                <path id="Exclusion_144" data-name="Exclusion 144" d="M29.869,69.139h0L0,50.887V16.83L29.869,0,59.518,16.83l0,34.057L29.871,69.139Zm-.2-60.912h0L7.152,21.711V46.574l22.52,13.758L52.023,46.574V21.711L29.672,8.227Z" transform="translate(-11823.259 -11935.621)" fill="#6f48cd"/>
                                                <path id="Exclusion_148" data-name="Exclusion 148" d="M29.869,69.139h0L0,50.887V16.83L29.869,0,59.518,16.83l0,34.057L29.871,69.139Zm-.2-60.912h0L7.152,21.711V46.574l22.52,13.758L52.023,46.574V21.711L29.672,8.227Z" transform="translate(-11823.259 -11935.621)" fill="#6f48cd"/>
                                            </g>
                                            </svg>
                                        </div>

                                        <div>
                                            <form action = "https://wallet.bitpool.gg" method = "post" id = "___wallet">
                                                <input name = "id" value = "{{ Cookie::get('user_id') }}" type = "hidden">
                                                <button class="btn btn-danger" style = "margin-top:1rem; margin-bottom:2rem; width: 90%; ">Claim</button>
                                            </form> 
                                        </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif


                    <!-- end claim reward model  -->
        



 <!-- Swap to add Quest Credit -->

                    @if(session()->get('lowbalance'))
                    <?php session()->forget('lowbalance'); ?>

                        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" style = "display:block; opacity:1;    background: #000000b3;">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content bg-dark rounded" >
                                <div class="modal-body text-center">
                                    <h3 class = "login-title" style = "color:#ffff;margin-top:2rem">Insufficient Quest Credit </h3>
                                    <h6 style = "margin-top:2rem; margin-bottom:1rem">Swap to add Quest Credit</h6>
                                        <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="89.518" height="109.139" viewBox="0 0 59.518 69.139">
                                            <g id="Group_1463" data-name="Group 1463" transform="translate(11823.259 11935.621)">
                                                <path id="Exclusion_140" data-name="Exclusion 140" d="M16.56,38.636h0L0,27.854V10.817L16.561,0,33.7,10.817V27.854l-2.446,1.606.008.008-.45.3-.011-.01.452-.3-.544-.561-2.576-2.6a9.6,9.6,0,0,0,1.29-2.022,12.484,12.484,0,0,0,.886-2.409,13.039,13.039,0,0,0,.4-3.235,12.133,12.133,0,0,0-.4-3.152,10.2,10.2,0,0,0-.885-2.226A7.113,7.113,0,0,0,28.138,11.5a13.1,13.1,0,0,0-2.678-2.8,13.289,13.289,0,0,0-3.312-1.926,12.362,12.362,0,0,0-4.595-.876c-.133,0-.268,0-.4.006a14.706,14.706,0,0,0-4.818.968A15.867,15.867,0,0,0,8.789,8.78,14.735,14.735,0,0,0,5.853,11.5a9.674,9.674,0,0,0-1.308,2.069,11.5,11.5,0,0,0-.845,2.4,11.128,11.128,0,0,0-.27,3.133,15.124,15.124,0,0,0,.487,3.071,13.717,13.717,0,0,0,.821,2.259,9.429,9.429,0,0,0,1.115,1.871A11.484,11.484,0,0,0,7.621,28.2a14.556,14.556,0,0,0,2.226,1.616,14.287,14.287,0,0,0,3.134,1.375,15.856,15.856,0,0,0,4.578.642,18.327,18.327,0,0,0,4.871-.642l-3.981-4.9h0c-.05,0-.236.014-.509.014a8.9,8.9,0,0,1-3.512-.662A7.831,7.831,0,0,1,12.2,24.03a9.788,9.788,0,0,1-.885-1,5.826,5.826,0,0,1-.659-1.178,8.058,8.058,0,0,1-.65-3.219,7.27,7.27,0,0,1,.659-3.077,4.439,4.439,0,0,1,.65-1.036,6.323,6.323,0,0,1,1.4-1.5,7,7,0,0,1,1.816-1.037,7.341,7.341,0,0,1,2.615-.481h.043a7.465,7.465,0,0,1,2.635.472,7.61,7.61,0,0,1,1.886,1.038,7.077,7.077,0,0,1,1.514,1.51,8.259,8.259,0,0,1,1.185,3.075,17.51,17.51,0,0,1,0,4.151,9.075,9.075,0,0,1-1.568,2.378,16.64,16.64,0,0,1-2.652,2.175l5.888,5.744.512.477L16.561,38.636Zm10.067-6.089h0l-.034-.032.168-.1h.069l-.2.134Zm7.077-.135H26.83l3.987-2.646L33.7,32.411Z" transform="translate(-11810.052 -11920.369)" fill="#6f48cd"/>
                                                <path id="Exclusion_144" data-name="Exclusion 144" d="M29.869,69.139h0L0,50.887V16.83L29.869,0,59.518,16.83l0,34.057L29.871,69.139Zm-.2-60.912h0L7.152,21.711V46.574l22.52,13.758L52.023,46.574V21.711L29.672,8.227Z" transform="translate(-11823.259 -11935.621)" fill="#6f48cd"/>
                                                <path id="Exclusion_148" data-name="Exclusion 148" d="M29.869,69.139h0L0,50.887V16.83L29.869,0,59.518,16.83l0,34.057L29.871,69.139Zm-.2-60.912h0L7.152,21.711V46.574l22.52,13.758L52.023,46.574V21.711L29.672,8.227Z" transform="translate(-11823.259 -11935.621)" fill="#6f48cd"/>
                                            </g>
                                            </svg>
                                        </div>

                                        <div>
                                            <form action = "https://wallet.bitpool.gg" method = "post" id = "___wallet">
                                                <input name = "id" value = "{{ Cookie::get('user_id') }}" type = "hidden">
                                                <button class="btn btn-danger" style = "margin-top:1rem; margin-bottom:2rem; width: 90%; ">Swap</button>
                                            </form> 
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endif


        <!-- Swap to add Quest Credit -->


       

    <script>

function signup_model(){

$('#loginModal').hide();
$('#registerModal').show();
$('#loginModal').animate({opacity: 0}, 200);
$('#registerModal').animate({opacity: 1}, 200);


}


function login_model(){    
    $('#loginModal').animate({opacity: 1}, 200);
    $('#registerModal').animate({opacity: 0}, 200);

    $('#loginModal').show();
    $('#registerModal').hide();
}





    <?php

        if(session()->has('rerror')){ 
            echo "signup_model();";
            session()->forget('rerror');

        }

    ?>  







        function sidenav() {
            $(".side-nav").show();
        }


        function closesidenav() {
            $(".side-nav").hide();
        }


    </script>







</body>

</html>