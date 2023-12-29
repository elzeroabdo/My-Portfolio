@include('layouts.sidebar')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfoio Details</h2>
          <ol>
            <li><a href="/#hero">Home</a></li>
            <li>Portfoio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                {{-- start --}}
                @foreach ($project->images as $image)
                <div class="swiper-slide">
                  <img src="{{asset('storage/'.$image)}}" alt="">
                </div>
                @endforeach
                {{-- end --}}

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: {{$project->category->name}}</li>
                <li><strong>Client</strong>: {{$project->client}}</li>
                <li><strong>Project date</strong>: {{$project->project_date}}</li>
                <li><strong>Project URL</strong>: <a href="#">{{$project->url}}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>{{$project->name}}</h2>
              <p>
                {{$project->description}}
            </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@include('layouts.footer')

