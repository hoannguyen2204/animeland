@extends('pages.navigation')

@section('title', "Watching")

@section('content')

    <!--=====================================-->
    <!--=         video Area Start          =-->
    <!--=====================================-->
    <section class="video sec-mar">
        <div class="container">
            <div class="row">
                <div class=" col-lg-9 col-sm-8 col-12">
                    <div class="img-box">
                        <img class="detail-image" src="media/video/video-img.png" alt="">
                        <div class="overlay">
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-box">
                        <video controls>
                            <source src="https://vjs.zencdn.net/v/oceans.mp4?HD" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <ul class="video-sidebar overflow-auto">
                        {{--                        <li>--}}
                        {{--                            <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#season1"--}}
                        {{--                               aria-expanded="true" aria-controls="season1">--}}
                        {{--                                Season 6 <span><i class="fa fa-chevron-down"></i></span>--}}
                        {{--                            </a>--}}
                        {{--                            <div id="season1" class="accordion-collapse collapse "--}}
                        {{--                                 data-bs-parent="#accordionExample">--}}
                        {{--                                <ul class="accordion-body">--}}
                        {{--                                    <li>--}}
                        {{--                                        <a href="#">Season 01</a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <a href="#">Season 02</a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <a href="#">Season 03</a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <a href="#">Season 04</a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <a href="#">Season 05</a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <a href="#">Season 06</a>--}}
                        {{--                                    </li>--}}
                        {{--                                </ul>--}}
                        {{--                            </div>--}}
                        {{--                        </li>--}}
                        <li>
                            <a href="#" class="active">Episode 01</a>
                        </li>
                        <li>
                            <a href="#">Episode 02</a>
                        </li>
                        <li>
                            <a href="#">Episode 03</a>
                        </li>
                        <li>
                            <a href="#">Episode 04</a>
                        </li>
                        <li>
                            <a href="#">Episode 05</a>
                        </li>
                        <li>
                            <a href="#">Episode 06</a>
                        </li>
                        <li>
                            <a href="#">Episode 07</a>
                        </li>
                        <li>
                            <a href="#">Episode 08</a>
                        </li>
                        <li>
                            <a href="#">Episode 09</a>
                        </li>
                        <li>
                            <a href="#">Episode 10</a>
                        </li>
                        <li>
                            <a href="#">Episode 11</a>
                        </li>
                        <li>
                            <a href="#">Episode 12</a>
                        </li>
                        <li>
                            <a href="#">Episode 13</a>
                        </li>
                        <li>
                            <a href="#">Episode 14</a>
                        </li>
                        <li>
                            <a href="#">Episode 15</a>
                        </li>
                        <li>
                            <a href="#">Episode 16</a>
                        </li>
                        <li>
                            <a href="#">Episode 17</a>
                        </li>
                        <li>
                            <a href="#">Episode 18</a>
                        </li>
                        <li>
                            <a href="#">Episode 19</a>
                        </li>
                        <li>
                            <a href="#">Episode 20</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="video-content bg-color-black">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <p>You're watching <b>Episode 1.</b> <br> If current servers doesn't work, please try other
                            servers.</p>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <div class="server-blok">
                            <p class="primery">SUB</p>
                            <div class="btn-block">
                                <a href="" class="active">Server 1</a>
                                <a href="">Server 2</a>
                                <a href="">Server 3</a>
                                <a href="">Server 4</a>
                                <a href="">Server 5</a>
                            </div>
                            <br>
                            <p>DUB</p>
                            <div class="btn-block">
                                <a href="" class="active">Server 1</a>
                                <a href="">Server 2</a>
                                <a href="">Server 3</a>
                                <a href="">Server 4</a>
                                <a href="">Server 5</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-0">
                        <div class="align-middle actions">
                            <a href="" class="anime-btn btn-dark border-change mb-2">DOWNLOAD NOW</a>
                            <p class="text">RATING: 7.8 <b>/10</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-6 col-12">
                            <div class="trailer-box">
                                <img src="media/video/trailer-img.png" alt="" class="image">
                                <div class="overlay">
                                    <a href="#" class="icon" data-bs-toggle="modal" data-bs-target="#videoModal"><i
                                            class="fas fa-play"></i></a>
                                    <p>Watch Trailer</p>
                                </div>
                            </div>
                            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <iframe style="border: 0;width: 100%;height: 350px;"
                                                    src="https://www.youtube.com/embed/6R6q2fAp2n4"
                                                    title="Suzume no Tojimari - Official Trailer 2 | English Sub"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-6 col-12">
                            <div class="trailer-content">
                                <h2>My Hero Academia</h2>
                                <p class="light-text">Season 06</p>
                                <div class="dropdown">
                                    <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.145264" y="0.00012207" width="21.4395" height="2.68125"
                                                  rx="1.34062" fill="#999999"/>
                                            <rect x="0.145264" y="7.41272" width="21.4395" height="2.68125"
                                                  rx="1.34062" fill="#999999"/>
                                            <rect x="0.145264" y="14.8258" width="16.4914" height="2.68125"
                                                  rx="1.34062" fill="#999999"/>
                                            <path
                                                d="M19.8784 16.0712C19.8784 15.4163 20.4093 14.8854 21.0642 14.8854H30.2463C30.9011 14.8854 31.432 15.4163 31.432 16.0712C31.432 16.7261 30.9011 17.257 30.2463 17.257H21.0642C20.4093 17.257 19.8784 16.7261 19.8784 16.0712Z"
                                                fill="#999999"/>
                                            <path
                                                d="M25.6552 22.0001C25.0171 22.0001 24.4999 21.4828 24.4999 20.8447V11.2977C24.4999 10.6596 25.0171 10.1423 25.6552 10.1423C26.2933 10.1423 26.8106 10.6596 26.8106 11.2977V20.8447C26.8106 21.4828 26.2933 22.0001 25.6552 22.0001Z"
                                                fill="#999999"/>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu bg-color-black pt-3 pb-3 ps-3 pe-3">
                                        <li>
                                            <a href="" class="none"><i class="fa fa-check"></i> Watch Later </a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fas fa-plus"></i> Add to Playlist </a>
                                        </li>
                                    </ul>
                                </div>
                                <h3>Plot Summary</h3>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                    officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                    rerum facilis est et expedita distinctio. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="rating-content">
                                <h4>RATE THE SHOW</h4>
                                <p>YOUR RATING: <b>_/10</b></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="rating-content">
                                <h4>IBM RATING</h4>
                                <p>RATING: <span>7.2</span> <b>/10</b></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="rating-content">
                                <h4>ROTTEN TOMATO RATING</h4>
                                <p>RATING: <span>8.8</span> <b>/10</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="trailer-content">
                        <h3>Tech Detail</h3>
                        <p><span>Type:</span> <b>TV</b></p>
                        <p><span>Studio:</span> <b>Bones</b></p>
                        <p><span>Date aired:</span> Jan 15, 2023</p>
                        <p><span>Status:</span> <b>Completed</b></p>
                        <p><span>Genre:</span> Action, School, Shounen</p>
                        <p><span>Country:</span> Japan</p>
                        <p><span>Scores:</span> 2.53 by 4,405 reviews</p>
                        <p><span>Premiered:</span> Winter 2023</p>
                        <p><span>Duration:</span> 24 min</p>
                        <p><span>Views:</span> 18,284</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=         Comment Area Start        =-->
    <!--=====================================-->
    <section class="comment sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="comment-block">
                        <div class="heading style-1 m-0">
                            <h2>COMMENTS</h2>
                        </div>
                        <p>We hope you have a good time browsing the comment section! <br>
                            Please read our <a href="./comments.html">Comment Policy</a> before commenting.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2">
                            <a href="./profile.html"><img src="media/comment/comment-img.png" alt=""></a>
                        </div>
                        <div class="col-lg-11 col-10">
                            <form action="streaming-season.html">
                                <div class="input-group form-group footer-email-box">
                                    <input class="form-control" type="text" name="post"
                                           placeholder="Join the discussion">
                                    <button class="input-group-text post-btn" type="submit">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="site-comment">
                        <div class="row">
                            <div class="col-lg-1 col-2">
                                <a href="./profile.html"><img src="media/comment/comment-img-2.png"
                                                              alt=""></a>
                            </div>
                            <div class="col-lg-11 col-10">
                                <h5><a href="./profile.html">@username</a><b>5 minutes ago</b></h5>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.
                                </p>
                                <a href="" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                <a href="" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                        data-bs-target="#reply1" aria-expanded="true">Reply
                                </button>
                                <div id="reply1" class="accordion-collapse collapse "
                                     data-bs-parent="#accordionExample">
                                    <div class="card card-body">
                                        <div class="d-flex pt-3">
                                            <a href="./profile.html"><img
                                                    src="media/comment/comment-img-sm-2.png" alt=""></a>
                                            <input type="text" placeholder="Add a reply">
                                        </div>
                                        <div class="text-end">
                                            <button class="comment-btn">Cencel</button>
                                            <button class="comment-btn active">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-2">
                                <a href="./profile.html"><img src="media/comment/comment-img-3.png"
                                                              alt=""></a>
                            </div>

                            <div class="col-lg-11 col-10">
                                <h5><a href="./profile.html">@username</a> <b>5 minutes ago</b></h5>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.
                                </p>
                                <a href="" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                <a href="" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                        data-bs-target="#reply2" aria-expanded="true">Reply
                                </button>
                                <div id="reply2" class="accordion-collapse collapse show"
                                     data-bs-parent="#accordionExample">
                                    <div class="card card-body">
                                        <div class="d-flex pt-3">
                                            <a href="./profile.html"><img
                                                    src="media/comment/comment-img-sm-1.png" alt=""></a>
                                            <input type="text" placeholder="Add a reply">
                                        </div>
                                        <div class="text-end">
                                            <button class="comment-btn">Cencel</button>
                                            <button class="comment-btn active">Reply</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <a href="#" class="accordion-button comment-btn active" data-bs-toggle="collapse"
                           data-bs-target="#reply" aria-expanded="true" aria-controls="reply"><i
                                class="fa fa-chevron-up"></i> 40 Replies</a>
                        <div id="reply" class="accordion-collapse collapse show "
                             data-bs-parent="#accordionExample">
                            <div class="card card-body">
                                <div class="row pt-3">
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                        <div class="d-inline-flex align-items-start">

                                            <a href="./profile.html"><img
                                                    src="media/comment/comment-img-sm-1.png" alt=""></a>
                                            <div class="replies">
                                                <h5><a href="./profile.html">@username</a> <b>5 minutes ago</b></h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                    dolores et quas molestias.</p>
                                                <a href="" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                                <button class=" accordion-button comment-btn"
                                                        data-bs-toggle="collapse" data-bs-target="#reply30"
                                                        aria-expanded="true">Reply
                                                </button>
                                                <div id="reply30" class="accordion-collapse collapse"
                                                     data-bs-parent="#accordionExample">
                                                    <div class="card card-body">
                                                        <div class="d-flex pt-3">
                                                            <img src="media/comment/comment-img-sm-2.png"
                                                                 alt="">
                                                            <input type="text" placeholder="Add a reply">
                                                        </div>
                                                        <div class="text-end">
                                                            <button class="comment-btn">Cencel</button>
                                                            <button class="comment-btn active">Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                        <div class="d-inline-flex align-items-start">
                                            <a href="./profile.html"><img
                                                    src="media/comment/comment-img-sm-3.png" alt=""></a>
                                            <div class="replies">
                                                <h5><a href="./profile.html">@username</a> <b>5 minutes ago</b></h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                    dolores et quas molestias.</p>
                                                <a href="" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                                <button class=" accordion-button comment-btn"
                                                        data-bs-toggle="collapse" data-bs-target="#reply60"
                                                        aria-expanded="true">Reply
                                                </button>
                                                <div id="reply60" class="accordion-collapse collapse"
                                                     data-bs-parent="#accordionExample">
                                                    <div class="card card-body">
                                                        <div class="d-flex pt-3">
                                                            <img src="media/comment/comment-img-sm-1.png"
                                                                 alt="">
                                                            <input type="text" placeholder="Add a reply">
                                                        </div>
                                                        <div class="text-end">
                                                            <button class="comment-btn">Cencel</button>
                                                            <button class="comment-btn active">Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                        <div class="d-inline-flex align-items-start">
                                            <a href="./profile.html"><img
                                                    src="media/comment/comment-img-sm-4.png" alt=""></a>
                                            <div class="replies">
                                                <h5><a href="./profile.html">@username</a> <b>5 minutes ago</b></h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                    dolores et quas molestias.</p>
                                                <a href="" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                                <button class=" accordion-button comment-btn"
                                                        data-bs-toggle="collapse" data-bs-target="#reply7"
                                                        aria-expanded="true">Reply
                                                </button>
                                                <div id="reply7" class="accordion-collapse collapse"
                                                     data-bs-parent="#accordionExample">
                                                    <div class="card card-body">
                                                        <div class="d-flex pt-3">
                                                            <img src="media/comment/comment-img-sm-3.png"
                                                                 alt="">
                                                            <input type="text" placeholder="Add a reply">
                                                        </div>
                                                        <div class="text-end">
                                                            <button class="comment-btn">Cencel</button>
                                                            <button class="comment-btn active">Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">

                                        <div id="more" class="accordion-collapse collapse "
                                             data-bs-parent="#accordionExample">
                                            <div class="card card-body">
                                                <div class="d-inline-flex align-items-start">
                                                    <a href="./profile.html"><img
                                                            src="media/comment/comment-img-sm-2.png"
                                                            alt=""></a>
                                                    <div class="replies">
                                                        <h5><a href="./profile.html">@username</a> <b>5 minutes
                                                                ago</b></h5>
                                                        <p>At vero eos et accusamus et iusto odio dignissimos
                                                            ducimus qui
                                                            blanditiis praesentium voluptatum deleniti atque
                                                            corrupti quos
                                                            dolores et quas molestias.</p>
                                                        <button class="comment-btn"><i
                                                                class="fa fa-thumbs-up"></i></button>
                                                        <button class="comment-btn"><i
                                                                class="fa fa-thumbs-down"></i></button>
                                                        <button class=" accordion-button comment-btn"
                                                                data-bs-toggle="collapse" data-bs-target="#reply9"
                                                                aria-expanded="true">Reply
                                                        </button>
                                                        <div id="reply9" class="accordion-collapse collapse "
                                                             data-bs-parent="#accordionExample">
                                                            <div class="card card-body">
                                                                <div class="d-flex pt-3">
                                                                    <img src="media/comment/comment-img-sm-1.png"
                                                                         alt="">
                                                                    <input type="text" placeholder="Add a reply">
                                                                </div>
                                                                <div class="text-end">
                                                                    <button class="comment-btn">Cencel</button>
                                                                    <button
                                                                        class="comment-btn active">Reply
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="accordion-button comment-btn active"
                                           data-bs-toggle="collapse" data-bs-target="#more" aria-expanded="true"
                                           aria-controls="more"><i class="fa fa-chevron-down"></i> Show More
                                            Replies</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-2">
                                <a href="./profile.html"><img src="media/comment/comment-img-4.png"
                                                              alt=""></a>
                            </div>
                            <div class="col-lg-11 col-10">
                                <h5><a href="./profile.html">@username</a> <b>5 minutes ago</b></h5>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.
                                </p>
                                <a href="" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                <a href="" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                <button class=" accordion-button comment-btn" data-bs-toggle="collapse"
                                        data-bs-target="#reply3" aria-expanded="true">Reply
                                </button>
                                <div id="reply3" class="accordion-collapse collapse "
                                     data-bs-parent="#accordionExample">
                                    <div class="card card-body">
                                        <div class="d-flex pt-3">
                                            <a href="./profile.html"><img
                                                    src="media/comment/comment-img-sm-1.png" alt=""></a>
                                            <input type="text" placeholder="Add a reply">
                                        </div>
                                        <div class="text-end">
                                            <button class="comment-btn">Cencel</button>
                                            <button class="comment-btn active">Reply</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <a href="#" class="accordion-button comment-btn active" data-bs-toggle="collapse"
                           data-bs-target="#reply20" aria-expanded="true"><i class="fa fa-chevron-down"></i> 40
                            Replies</a>
                        <div id="reply20" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="card card-body">
                                <div class="row pt-3">
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                        <div class="d-inline-flex align-items-start">
                                            <a href="./profile.html"><img
                                                    src="media/comment/comment-img-sm-3.png" alt=""></a>
                                            <div class="replies">
                                                <h5><a href="./profile.html">@username</a> <b>5 minutes ago</b></h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                    dolores et quas molestias.</p>
                                                <a href="" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                                <button class=" accordion-button comment-btn"
                                                        data-bs-toggle="collapse" data-bs-target="#reply4"
                                                        aria-expanded="true" aria-controls="reply">Reply
                                                </button>
                                                <div id="reply4" class="accordion-collapse collapse  "
                                                     data-bs-parent="#accordionExample">
                                                    <div class="card card-body">
                                                        <div class="d-flex pt-3">
                                                            <img src="media/comment/comment-img-sm-2.png"
                                                                 alt="">
                                                            <input type="text" placeholder="Add a reply">
                                                        </div>
                                                        <div class="text-end">
                                                            <button class="comment-btn">Cencel</button>
                                                            <button class="comment-btn active">Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                        <div class="d-inline-flex align-items-start">
                                            <a href="./profile.html"><img
                                                    src="media/comment/comment-img-sm-1.png" alt=""></a>
                                            <div class="replies">
                                                <h5><a href="./profile.html">@username</a> <b>5 minutes ago</b></h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                    dolores et quas molestias.</p>
                                                <a href="" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                                <button class=" accordion-button comment-btn"
                                                        data-bs-toggle="collapse" data-bs-target="#reply5"
                                                        aria-expanded="true" aria-controls="reply">Reply
                                                </button>
                                                <div id="reply5" class="accordion-collapse collapse  "
                                                     data-bs-parent="#accordionExample">
                                                    <div class="card card-body">
                                                        <div class="d-flex pt-3">
                                                            <img src="media/comment/comment-img-sm-1.png"
                                                                 alt="">
                                                            <input type="text" placeholder="Add a reply">
                                                        </div>
                                                        <div class="text-end">
                                                            <button class="comment-btn">Cencel</button>
                                                            <button class="comment-btn active">Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 offset-lg-1 offset-2 col-10 pb-4">
                                        <div class="d-inline-flex align-items-start">
                                            <a href="./profile.html"><img
                                                    src="media/comment/comment-img-sm-3.png" alt=""></a>
                                            <div class="replies">
                                                <h5><a href="./profile.html">@username</a> <b>5 minutes ago</b></h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                    dolores et quas molestias.</p>
                                                <a href="" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                                                <button class=" accordion-button comment-btn"
                                                        data-bs-toggle="collapse" data-bs-target="#reply6"
                                                        aria-expanded="true" aria-controls="reply">Reply
                                                </button>
                                                <div id="reply6" class="accordion-collapse collapse  "
                                                     data-bs-parent="#accordionExample">
                                                    <div class="card card-body">
                                                        <div class="d-flex pt-3">
                                                            <img src="media/comment/comment-img-sm-2.png"
                                                                 alt="">
                                                            <input type="text" placeholder="Add a reply">
                                                        </div>
                                                        <div class="text-end">
                                                            <button class="comment-btn">Cencel</button>
                                                            <button class="comment-btn active">Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class="comment-btn">Load More Comment</a>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 offset-lg-0 offset-md-3 offset-sm-2 mt-lg-0 mt-3">
                    <h3 class="small-title">SIMILAR</h3>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="media/anime-sm-img/anime-img-7.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>86</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="media/anime-sm-img/anime-img-8.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>Re-Zero</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                        <p class="text-box active">18+</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="media/anime-sm-img/anime-img-9.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>Tokyo Ghoul</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="media/anime-sm-img/anime-img-10.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>Sword Art Online</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="media/anime-sm-img/anime-img-11.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>Sword Alicization</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="anime-box bg-color-black">
                        <a href="streaming-season.html">
                            <div class="row m-0">
                                <div class="p-0 col-2">
                                    <img src="media/anime-sm-img/anime-img-12.png" alt="">
                                </div>
                                <div class="p-0 col-9">
                                    <div class="anime-blog">
                                        <p>One Piece</p>
                                        <p class="text-box">dub 8</p>
                                        <p class="text-box">sub 12</p>
                                    </div>
                                </div>
                                <div class="p-0 col-1 show-type">
                                    <span class="show-type">TV</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection