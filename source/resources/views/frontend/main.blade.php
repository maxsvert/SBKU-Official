@include('frontend.head')
@include('frontend.nav')
@include('frontend.slide')

{{-- Section with Hero Image (optional) --}}
<section class="sabbbi-section home-info mt_10">
  <div class="container text-center">
    <img alt="Intro Visual" class="img-fluid" src="{{ asset('assets/img/human.gif') }}">
  </div>
</section>

{{-- Blog Post Grid --}}
<section class="sabbbi-section home-info mt_10">
  <div class="container">
    <div class="row g-4">
      @foreach ($posts as $key => $value)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 d-flex">
          <article class="sabbi-thumlinepost-card shadow-sm rounded overflow-hidden w-100 d-flex flex-column">
            {{-- Thumbnail --}}
            <figure class="sabbi-thumlinepost-card-figure position-relative">
              <img src="{{ asset("source/storage/app/public/{$value->banner}") }}"
                   alt="post banner"
                   class="img-fluid w-100"
                   style="height: 180px; object-fit: cover;">
              <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark"></div>
            </figure>

            {{-- Meta Info --}}
            <div class="sabbi-thumlinepost-card-meta p-3 d-flex flex-column flex-grow-1">
              <h2 class="meta-title hanuman-bold" style="text-align: justify;">
                {{ app()->getLocale() == 'kh' ? $value->title_kh : $value->title_en }}
              </h2>
              <p class="meta-text hanuman-regular text-muted flex-grow-1" style="text-align: justify; overflow: hidden;">
                {!! app()->getLocale() == 'kh' ? $value->excerpt_kh : $value->excerpt_en !!}
              </p>
              <a href="{{ url("/post-detail&$value->id") }}" class="btn btn-primary btn-sm mt-2 w-100 hanuman-regular">
                {{ __('Read More') }}
              </a>
            </div>
          </article>
        </div>
      @endforeach
    </div>

    {{-- Conference Section --}}
    @include('frontend.conference')
  </div>
</section>

{{-- Additional Sections --}}
@include('frontend.statistic')
@include('frontend.vision')
@include('frontend.board')
@include('frontend.page.mou')
@include('frontend.footer')

<style>
  .sabbi-thumlinepost-card {
    background: #fff;
    border: 1px solid #e0e0e0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .sabbi-thumlinepost-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
  }

  .sabbi-thumlinepost-card-figure {
    overflow: hidden;
    position: relative;
  }

  .sabbi-thumlinepost-card-figure img {
    transition: transform 0.3s ease;
  }

  .sabbi-thumlinepost-card:hover .sabbi-thumlinepost-card-figure img {
    transform: scale(1.05);
  }

  .overlay {
    background: rgba(0, 0, 0, 0.4);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .sabbi-thumlinepost-card:hover .overlay {
    opacity: 1;
  }

  .meta-title {
    font-size: 1.1rem;
    color: #333;
    margin-bottom: 0.5rem;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
  }

  .meta-text {
    font-size: 0.9rem;
    color: #666;
    line-height: 1.5;
    max-height: 4.5em;
  }

  .btn-primary {
    background-color: #2563eb;
    border-color: #2563eb;
    transition: background-color 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #1d4ed8;
    border-color: #1d4ed8;
  }

  /* Responsive columns handled by Bootstrap (no need for manual media queries) */
</style>
