<!-- portfolio -->
<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Portfolio</h2>
        </div>
      </div>
      <div class="row shuffle-wrapper">
          @for($i = 0; $i < 4; $i++ )
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/portfolio/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">{{ $btn = "conheça  o projeto" }}</a>
              </div>
            </div>
          </div>
        </div>
        @endfor
      </div>
    </div>

  </section>
  <!-- /portfolio -->
