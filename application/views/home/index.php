<div class="container sitecontainer bgw">
            <div class="row hidden-xs">
                <div class="col-md-12">
                    <div class="news-ticker clearfix">
                        <div class="news-title">
                            <h3>Trending News</h3>
                        </div>
                        <ul id="ticker">
                            <li><a href="single.html" title="">ThePhone thriller will change the way film [..] - <span>March 01, 2016</span></a></li>
                            <li><a href="single.html" title="">User details can reportedly be [..]  - <span>March 01, 2016</span></a></li>
                            <li><a href="single.html" title="">Outstanding Office Design and Workspace [..]  - <span>March 01, 2016</span></a></li>
                        </ul>
                        <div class="random clearfix">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Random">
                            <span class="random-article">
                                <i class="fa fa-random"></i>
                            </span>
                            </a>
                        </div><!-- end random -->
                    </div><!-- end news-ticker -->
                </div><!-- end col -->
            </div><!-- end row -->
 

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Artikel Terbaru</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="review-posts m30">

                        <?php foreach ($terbaru as $list ): ?>
                            
                       
                            <div class="post-review">
                                <div class="post-media entry">
                                    <a href="single-review.html" title="">
                                    <img src="<?php echo base_url().$list->image?>" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="review-stat">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div><!-- end review-stat -->
                                        <div class="hover-title">
                                            <span> <?php echo $list->namecategory?> </span>
                                        </div><!-- end title -->
                                    </div><!-- end magnifier -->
                                    </a>
                                </div><!-- end media -->
                                <div class="post-title">
                                    <h3><a href=" "> <?php echo $list->title ; ?> </a></h3>
                                </div><!-- end post-title -->
                            </div><!-- end post-review -->

                            <hr>
                             <?php endforeach ?>
                           

                           
                        </div><!-- end review-posts -->
                    </div><!-- end widget -->   

                    <div class="widget">
                        <div class="widget-title">
                            <h4>Artikel Terpopuler</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="mini-widget m30">
                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/mini_widget_01.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Jessica and Martin talking about...</a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/mini_widget_02.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> ShowWP team moved to a new office </a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/mini_widget_03.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> How do web design? If no information</a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/mini_widget_04.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> A good strategy is to create 5 rule </a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/mini_widget_05.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Google material design, colors</a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/mini_widget_06.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="#"> The best desk and office designs for ever!</a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>
                        </div><!-- end mini-widget -->
                    </div><!-- end widget -->   
                </div><!-- end col -->

                <div class="col-md-6 col-sm-6 col-xs-12 m22">
                    <div class="widget">
                        <div class="large-widget m30">

                        <?php foreach ($terbaru as $list ): ?>
                            
                       

                            <div class="post clearfix">
                                <div class="post-media">
                                    <a href=" <?php echo base_url().'article/detail/'.$list->slug ?> ">
                                        
                                 <img src="<?php echo base_url().$list->image?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="large-post-meta">
                                    <span class="avatar"><a href="author.html"><img src="upload/avatar_02.png" alt="" class="img-circle"> Mark Twisted</a></span>
                                    <small>&#124;</small>
                                    <span><a href="category.html">Cinema News</a></span>
                                    <small>&#124;</small>
                                    <span><a href="single.html#comments">92 Comments</a></span>
                                </div><!-- end meta -->
                                <div class="large-widget-title">
                                    <a href="<?php echo base_url().'article/detail/'.$list->slug?> "> <?php echo $list->title ?>  </a>
                                </div>
                                <div class="post-share">
                                    <div class="customshare">
                                         <span class="list">
                                            <strong><i class="fa fa-share-alt"></i> 980
                                            <a href="#" class="tw"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
                                            </strong>
                                        </span>
                                    </div>
                                </div><!-- end share -->
                            </div><!-- end post -->

                            <hr>
                             <?php endforeach ?>


                          
                            <hr>

                            
                        </div><!-- end large-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
  <div class="col-md-3 col-sm-6 col-xs-12">

                    <div class="widget">
                        <div class="widget-title">
                            <h4>Social Media</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="social-media-widget m30">
                            <ul class="list-social clearfix">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i> <small>12.042</small></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i> <small>67.221</small></a></li>
                                <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i> <small>44.213</small></a></li>
                                <li class="rss"><a href="#"><i class="fa fa-rss"></i> <small>22.551</small></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i> <small>33.122</small></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i> <small>55.123</small></a></li>
                                <li class="youtube"><a href="#"><i class="fa fa-youtube"></i> <small>44.112</small></a></li>
                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i> <small>12.441</small></a></li>
                            </ul>
                        </div><!-- end social -->
                    </div>

                    <div class="widget hidden-xs">
                        <div class="widget-title">
                            <h4>Advertising</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="ads-widget m30">
                            <a href="#"><img src="upload/banner_01.jpg" alt="" class="img-responsive"></a>
                        </div><!-- end ads-widget -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <div class="widget-title">
                            <h4>Karir</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="mini-widget carrier-widget m30">
                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/carrer_01.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> We are looking a team member</a>
                                    <span class="label label-primary">Full time</span>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/carrer_02.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Looking for support members (15-25 mails)</a>
                                    <span class="label label-danger">Part time</span>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/carrer_03.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Who fix my PHP problem?</a>
                                    <span class="label label-info">Freelancer</span>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/carrer_04.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Looking Logo Designer ($15 Budget) </a>
                                    <span class="label label-info">Freelancer</span>
                                </div>
                            </div>
                        </div><!-- end mini-widget -->
                    </div><!-- end widget -->   
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <div class="ads-widget">
                            <a href="#"><img src="upload/banner_02.jpg" alt="" class="img-responsive"></a>
                        </div><!-- end ads-widget -->
                    </div><!-- end widget -->   
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Tutorial Belajar Pemrograman </h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="review-posts row m30">
                            <div class="post-review col-md-3 col-sm-12 col-xs-12">
                                <div class="post-media entry">
                                    <img src="upload/news_01.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="hover-title-left">
                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Mobile</a></span>
                                        </div><!-- end title -->
                                        <div class="hover-title">
                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                        </div><!-- end title -->
                                    </div><!-- end magnifier -->
                                </div><!-- end media -->
                                <div class="post-title">
                                    <h3><a href="single.html">TechMag's all the details of the March 21 event at Apple!</a></h3>
                                </div><!-- end post-title -->
                            </div><!-- end post-review -->

                            <div class="post-review col-md-3 col-sm-12 col-xs-12">
                                <div class="post-media entry">
                                    <img src="upload/news_02.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="hover-title-left">
                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Automotive</a></span>
                                        </div><!-- end title -->
                                        <div class="hover-title">
                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                        </div><!-- end title -->
                                    </div><!-- end magnifier -->
                                </div><!-- end media -->
                                <div class="post-title">
                                    <h3><a href="single.html">Say Hello to Apple Titan Automative News Released</a></h3>
                                </div><!-- end post-title -->
                            </div><!-- end post-review -->

                            <div class="post-review col-md-3 col-sm-12 col-xs-12">
                                <div class="post-media entry">
                                    <img src="upload/news_03.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="hover-title-left">
                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Space</a></span>
                                        </div><!-- end title -->
                                        <div class="hover-title">
                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 12 Comments</a></span>
                                        </div><!-- end title -->
                                    </div><!-- end magnifier -->
                                </div><!-- end media -->
                                <div class="post-title">
                                    <h3><a href="single.html">Starts over the world travel to Mars in March 2017</a></h3>
                                </div><!-- end post-title -->
                            </div><!-- end post-review -->

                            <div class="post-review col-md-3 col-sm-12 col-xs-12">
                                <div class="post-media entry">
                                    <img src="upload/news_04.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="hover-title-left">
                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Space</a></span>
                                        </div><!-- end title -->
                                        <div class="hover-title">
                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 13 Comments</a></span>
                                        </div><!-- end title -->
                                    </div><!-- end magnifier -->
                                </div><!-- end media -->
                                <div class="post-title">
                                    <h3><a href="single.html">Supported Uber for next month, last time to change anything</a></h3>
                                </div><!-- end post-title -->
                            </div><!-- end post-review -->
                        </div><!-- end review-post -->

                        <div class="review-posts row m30">
                            <div class="post-review col-md-3 col-sm-12 col-xs-12">
                                <div class="post-media entry">
                                    <img src="upload/news_05.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="hover-title-left">
                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Mobile</a></span>
                                        </div><!-- end title -->
                                        <div class="hover-title">
                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                        </div><!-- end title -->
                                    </div><!-- end magnifier -->
                                </div><!-- end media -->
                                <div class="post-title">
                                    <h3><a href="single.html">Freddie Mac Die time 2016 News and Updates</a></h3>
                                </div><!-- end post-title -->
                            </div><!-- end post-review -->

                            <div class="post-review col-md-3 col-sm-12 col-xs-12">
                                <div class="post-media entry">
                                    <img src="upload/news_06.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="hover-title-left">
                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Automotive</a></span>
                                        </div><!-- end title -->
                                        <div class="hover-title">
                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 21 Comments</a></span>
                                        </div><!-- end title -->
                                    </div><!-- end magnifier -->
                                </div><!-- end media -->
                                <div class="post-title">
                                    <h3><a href="single.html">Bloomberg Has been released new site called Name..</a></h3>
                                </div><!-- end post-title -->
                            </div><!-- end post-review -->

                            <div class="post-review col-md-3 col-sm-12 col-xs-12">
                                <div class="post-media entry">
                                    <img src="upload/news_07.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="hover-title-left">
                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Space</a></span>
                                        </div><!-- end title -->
                                        <div class="hover-title">
                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 12 Comments</a></span>
                                        </div><!-- end title -->
                                    </div><!-- end magnifier -->
                                </div><!-- end media -->
                                <div class="post-title">
                                    <h3><a href="single.html">Did you see new airforce from Island Republic?</a></h3>
                                </div><!-- end post-title -->
                            </div><!-- end post-review -->

                            <div class="post-review col-md-3 col-sm-12 col-xs-12">
                                <div class="post-media entry">
                                    <img src="upload/news_08.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="hover-title-left">
                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> Space</a></span>
                                        </div><!-- end title -->
                                        <div class="hover-title">
                                            <span><a href="#" title=""><i class="fa fa-comments-o"></i> 13 Comments</a></span>
                                        </div><!-- end title -->
                                    </div><!-- end magnifier -->
                                </div><!-- end media -->
                                <div class="post-title">
                                    <h3><a href="single.html">The Ferrari New Time Has been released in 2016</a></h3>
                                </div><!-- end post-title -->
                            </div><!-- end post-review -->
                        </div><!-- end review-post -->
                    </div><!-- end widget -->   
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Html & css</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="mini-widget m30">
                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_01.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Top 10 Android Widgets..</a>
                                    <small>21 March 2016</small>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_02.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Creative Calendar widget</a>
                                    <small>12 March 2016</small>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_03.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Mobile Device Mockup Builder</a>
                                    <small>11 March 2016</small>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_04.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Web Design Icon Builder for Mac</a>
                                    <small>10 March 2016</small>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>
                        </div><!-- end mini-widget -->
                    </div><!-- end widget -->  
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Web Development</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="mini-widget m30">
                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_05.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> A Software Developer Tools</a>
                                    <small>21 March 2016</small>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_06.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Web Development Tools</a>
                                    <small>21 March 2016</small>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_07.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Limitless Functional Web Tools</a>
                                    <small>21 March 2016</small>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_08.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Custom Color Builder Tool</a>
                                    <small>21 March 2016</small>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>
                        </div><!-- end mini-widget -->
                    </div><!-- end widget -->  
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Php</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="mini-widget m30">
                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_09.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Jessica and Martin talking about...</a>
                                    <small>21 March 2016</small>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_10.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> ShowWP team moved to a new office </a>
                                    <small>21 March 2016</small>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_11.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> How do web design? If no information</a>
                                    <small>21 March 2016</small>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_12.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> A good strategy is to create 5 rule </a>
                                    <small>21 March 2016</small>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end mini-widget -->
                    </div><!-- end widget -->  
                </div><!-- end col -->
Yuk Berkenalan dengan "Counter" dalam CSS Permudah Output Web-mu - See more at: https://www.codepolitan.com/yuk-berkenalan-dengan-quotcounterquot-dalam-css-permudah-output-web-mu-57b75182553aa-13559#sthash.kB9Cbub9.dpuf
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Javascript</h4>
                            <hr>
                        </div><!-- end widget-title -->

                        <div class="mini-widget m30">
                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_13.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> Jessica and Martin talking about...</a>
                                    <small>21 March 2016</small>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_14.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> ShowWP team moved to a new office </a>
                                    <small>21 March 2016</small>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_15.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> How do web design? If no information</a>
                                    <small>21 March 2016</small>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>

                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="single.html">
                                        <img alt="" src="upload/widget_16.jpg" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="single.html"> A good strategy is to create 5 rule </a>
                                    <small>21 March 2016</small>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>
                        </div><!-- end mini-widget -->
                    </div><!-- end widget -->  
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->