@include('frontend.head')
@include('frontend.nav')
@include('frontend.slide')
{{-- <section class="sabbbi-section home-info mt_10">
  <div class="container">
    <img alt="" class="img-responsive" src="assets/img/human.gif">
  </div>
</section> --}}

<section class="sabbbi-section home-info mt_10">
  <div class="container">
    <div class="mySlides">
      <img src="assets/img/science.gif" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="assets/img/human.gif" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="assets/img/social.gif" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="assets/img/engineer.gif" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="assets/img/tourist.gif" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="assets/img/econimic.gif" style="width:100%">
    </div>
  </div>
</section>
<script>
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 10000); // Change image every 2 seconds
  }
</script>
<section class="sabbbi-section home-info mt_10">
  <div class="container">
    <div class="row home-info-block-first">
      @foreach ($posts as $key => $value)
      <div class="col-md-3 col-sm-6">
        <article class="sabbi-thumlinepost-card solitude-bg__x item">
          <figure class="sabbi-thumlinepost-card-figure">
            <img src='{{ asset("source/storage/app/public") }}/{{ $value->banner }}' alt="" class="img-responsive img-thumpost">
          </figure>
          <div class="sabbi-thumlinepost-card-meta">
            <h2 class="meta-title ht-5" style="text-align: justify">@if(__('language')=='kh'){{ $value->title_kh }}@else{{ $value->title_en }}@endif</h2>
            <p class="meta-text" style="text-align: justify">@if(__('language')=='kh'){!! $value->excerpt_kh !!}@else{!! $value->excerpt_en !!}@endif</p>
            <a href='{{ url("/post-detail&$value->id") }}' class="font-hanuman">{{ __('Read More') }}</a>
          </div>
        </article>
      </div>
      @endforeach
    </div>
    @include('frontend.conference')
  </div>
</section><!-- /.home-info -->
@include('frontend.statistic')
@include('frontend.vision')
@include('frontend.board')
@include('frontend.contact')
@include('frontend.footer')