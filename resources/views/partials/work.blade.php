<section id="work" class="portfolio-mf sect-pt4 route">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <div class="title-box text-center">
                  <h3 class="title-a">
                      Portfolio
                  </h3>
                  <p class="subtitle-a">
                      Explore My Work
                  </p>
                  <div class="line-mf"></div>
              </div>
          </div>
      </div>

      <div class="row">
          @foreach ([
              'BotKiller_design.jpg' => ['title' => 'Bot Killer', 'category' => 'Design'],
              'Vibro_dev.png' => ['title' => 'Vibro Development', 'category' => 'Development'],
              'SuperGym_dev.png' => ['title' => 'Super Gym', 'category' => 'Development'],
              'SmartCoffe_dev.png' => ['title' => 'Smart Coffee Development', 'category' => 'Development'],
              'e_commerce_dev.png' => ['title' => 'E-commerce Development', 'category' => 'Development'],
              'SmartCoffe_design.png' => ['title' => 'Smart Coffee Design', 'category' => 'Design'],
              'LOGO_design.png' => ['title' => 'Logo Design', 'category' => 'Design'],
              'CreativeBuilders_dev.png' => ['title' => 'Creative Builders Development', 'category' => 'Development'],
              'poster_design.png' => ['title' => 'Poster Design', 'category' => 'Design'],
          ] as $image => $details)
              <div class="col-md-4">
                  <div class="work-box">
                      <a href="{{ asset('img/' . $image) }}" data-lightbox="gallery-mf">
                          <div class="work-img">
                              <img src="{{ asset('img/' . $image) }}" alt="{{ $details['title'] }}" class="img-fluid">
                          </div>
                          <div class="work-content">
                              <div class="row">
                                  <div class="col-sm-8">
                                      <h2 class="w-title">{{ $details['title'] }}</h2>
                                      <div class="w-more">
                                          <span class="w-category" style="color:#0078ff">{{ $details['category'] }}</span>
                                      </div>
                                  </div>
                                  <div class="col-sm-4">
                                      <div class="w-like">
                                          <span class="ion-ios-plus-outline"></span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          @endforeach
      </div>
  </div>
</section>
