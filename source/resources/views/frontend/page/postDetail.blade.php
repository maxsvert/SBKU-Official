@include('frontend.head')
@include('frontend.nav')
@include('frontend.slide')
<style>
  p{
    text-align: justify;
  }
  .title{
    font-size: 16px;
    color: blue;
  }
  .stage-future_member{
    margin-top: 20px;
  }
  .attachment img{
    height: auto;
  }
  .attachment__caption{
    text-align: center;
  }
</style>
<div class="auth-breadcrumb-wrap">
    <div class="container">
        <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/page-news')}}">News</a></li>
        </ol>
    </div>
</div><!-- /.auth-breadcrumb-wrap -->
<section class="sabbi-section stage-future_member">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <article class="sabbi-thumlinepost-card solitude-bg__x item">
                    <div class="sabbi-thumlinepost-card-meta">
                        <h2 class="meta-title ht-5" style="font-size:18px">@if(__('language')=='kh'){!! $post->title_kh !!}@else{!! $post->title_en !!}@endif</h2>
                            <p class="future_member-text" style="margin-bottom:15px">@if(__('language')=='kh'){!! $post->content_kh !!}@else{!! $post->content_en !!}@endif</p>
                            <p class="future_member-text" style="margin-bottom:15px"> {!! $post->photos !!}</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-4">
                <article class="sabbi-thumlinepost-card solitude-bg__x item">
                    <address>
                        <div class="sabbi-thumlinepost-card-meta">
                            <h3 class="entry-title" style="text-align:center;font-size:18px">{{ __("SBKU's Activity")}}</h3>
                            <ul class="event-list list-unstyled">
                              @foreach ($posts as $key => $value)
                                <li style="border-bottom: 1px solid black;padding: 3px;">
                                    <div class="title"><a href="{{ url("/page-detail&$value->id") }}">@if(__('language')=='kh'){!! $value->title_kh !!}@else{!! $value->title_en !!}@endif</a></div>
                                    <div class="date" style="font-size:12px;">{{ $value->created_at }}</div>
                                </li>
                              @endforeach
                            </ul>
                        </div>
                    </address>
                </article>
            </div>
        </div>
    </div>
</section><!-- /.stage-future_member -->

@include('frontend.footer')
