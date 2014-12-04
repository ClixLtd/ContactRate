@extends('dante.template')

@section('content')
    <div class="home-slider-wrap">
        @include('dante.partials.bootstrapCarousel')
    </div>

    <!-- #page-warp -->
    <div id="page-wrap">
        <div class="inner-page-wrap has-no-sidebar no-bottom-spacing no-top-spacing clearfix">
            <div class="page-content clearfix">
                <!--spacing-->
                <div class="container">
                    <div class="row"><div class="blank_spacer col-sm-12 " style="height:70px;"></div></div>
                </div>
                @include('dante.partials.features')
                @include('dante.partials.projects')
                <!--spacing-->
                <div class="container">
                    <div class="row"><div class="blank_spacer col-sm-12 " style="height:86px;"></div></div>
                </div>
                @include('dante.partials.figures')
                @include('dante.partials.videoScrolling')
                <!--spacing-->
                <div class="container">
                    <div class="row"><div class="blank_spacer col-sm-12 " style="height:70px;"></div></div>
                </div>
                @include('dante.partials.twoColBulletedInfo')
                @include('dante.partials.parllax')
                @include('dante.partials.chevron')
                @include('dante.partials.3cols3rows')
                @include('dante.partials.quotes')
                @include('dante.partials.team')
                <div class="container"> <!-- space -->
                    <div class="row"><div class="blank_spacer col-sm-12 " style="height:43px;"></div></div>
                </div>
                <div class="container"> <!-- divider -->
                    <div class="row"><div class="spb_divider thin spb_content_element alt-bg col-sm-12 "></div></div>
                </div>
                @include('dante.partials.flipCards')
                <div class="container"> <!-- space -->
                    <div class="row"><div class="blank_spacer col-sm-12 " style="height:43px;"></div></div>
                </div>
                <!-- #base-promo -->
                <div id="base-promo" class="footer-promo-arrow">
                    <a href="http://themeforest.net/item/dante-responsive-multipurpose-wordpress-theme/6175269?ref=swiftideas&amp;utm_source=demo&amp;utm_medium=promo&amp;utm_campaign=promobar" target="_self">
                        Ready to take it to the next level?<i class="ss-navigateright"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrap -->
@stop
