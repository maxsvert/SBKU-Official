@php($samdech=App\Models\Display::find(10))
@php($sivadthana=App\Models\Display::find(11))
@php($somnoble=App\Models\Display::find(12))
@php($sophorn=App\Models\Display::find(13))
<section class="sabbi-section section-meet_the_team">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="profile-card profile-card-meta_center item">
                    <figure>
                        <img class="img-responsive" src="assets/img/profile/profile1.jpg" alt="sabbi-profile-pic">
                        <figcaption class="item">
                            <h3 class="fig-title" style="font-size: 14px;">@if(__('language')=='kh'){!! $samdech->title_kh !!}@else{!! $samdech->title_en !!}@endif</h3>
                            <div class="fig-meta">@if(__('language')=='kh'){!! $samdech->body_kh !!}@else{!! $samdech->body_en !!}@endif</div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="profile-card profile-card-meta_center item">
                    <figure>
                        <img class="img-responsive" src="assets/img/profile/profile2.jpg" alt="sabbi-profile-pic">
                        <figcaption>
                            <h3 class="fig-title">@if(__('language')=='kh'){!! $sivadthana->title_kh !!}@else{!! $sivadthana->title_en !!}@endif</h3>
                            <div class="fig-meta">@if(__('language')=='kh'){!! $sivadthana->body_kh !!}@else{!! $sivadthana->body_en !!}@endif</div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="profile-card profile-card-meta_center item">
                    <figure>
                        <img class="img-responsive" src="assets/img/profile/profile3.jpg" alt="sabbi-profile-pic">
                        <figcaption>
                            <h3 class="fig-title" style="font-size: 14px;">@if(__('language')=='kh'){!! $somnoble->title_kh !!}@else{!! $somnoble->title_en !!}@endif</h3>
                            <div class="fig-meta">@if(__('language')=='kh'){!! $somnoble->body_kh !!}@else{!! $somnoble->body_en !!}@endif</div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="profile-card profile-card-meta_center item">
                    <figure>
                        <img class="img-responsive" src="assets/img/profile/profile4.jpg" alt="sabbi-profile-pic">
                        <figcaption>
                            <h3 class="fig-title">@if(__('language')=='kh'){!! $sophorn->title_kh !!}@else{!! $sophorn->title_en !!}@endif</h3>
                            <div class="fig-meta">@if(__('language')=='kh'){!! $sophorn->body_kh !!}@else{!! $sophorn->body_en !!}@endif</div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="action-wrap text-right-sm"><a href="#" class="btn btn-unsolemn btn-action">View all</a></div>
    </div>
</section><!-- /.section-meet_the_team -->
