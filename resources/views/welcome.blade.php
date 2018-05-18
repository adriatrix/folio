@extends('layouts.app')

@section('title')
web developer
@endsection

@section('content')
<div class="container-fluid">
  <!-- start of #home -->
  <div id="home" class="home-image">
    <div class="">
      <a href="{{url("/")}}">
        <img class="my-brand" src="img/my-brand.png" alt="Adrian Gacayan Ag logo brand" width="50">
      </a>
      <div class="float-right mt-3">
        <a href="#contact" class="btn my-rounded text-secondary btn-outline-light font-weight-bold my-links" name="button">Say Hi</a>
      </div>
      <div class="mt-2" data-aos="fade-up" data-aos-easing="ease-in" data-aos-once="true">
        <a class="home-social-icon" target="_blank" href="https://www.linkedin.com/in/adrian-gacayan-00087514b/" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
        <a class="home-social-icon" target="_blank" href="https://plus.google.com/u/0/+AdrianGacayan" title="Google+"><i class="fab fa-google-plus-g"></i></a>
        <a class="home-social-icon" target="_blank" href="https://github.com/adriatrix" title="Github"><i class="fab fa-github-alt"></i></a>
        <a class="home-social-icon" target="_blank" href="https://codepen.io/adriatrix" title="Codepen"><i class="fab fa-codepen"></i></a>
        <a class="home-social-icon" target="_blank" href="https://steamcommunity.com/id/adriatrix/" title="Steam"><i class="fab fa-steam"></i></a>
      </div>
    </div>
    <div class="home-text text-grey">
      <h1 class="h2">Hi, <span class="short-intro">I'm</span><span class="long-intro">my name is</span> <span class="text-white">Adrian</span>.</h1>
      <p class="my-subtext home-intro">I design and develop beautiful, responsive websites to feed my addiction for coding.</p>
    </div>
    <div id="scrolldownbtn" class="scrollbtn">
      <a href="#about" class="my-links"><span></span></a>
    </div>
  </div>
  <!-- end of #home -->

  <!-- start of #about  -->
  <div id="about" class="about-image">
    <div class="row about-profile">
      <div class="col">
        <div class="row justify-content-center">
          <div class="col mb-5">
            <h2 class="h4 my-sectiontext">About <span class="h5">Me</span></h2>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <img src="img/avatar.jpg" alt="Profile Pic" class="my-profile mb-1">
        </div>
        <p class="typewrite my-subtext" data-period="2000" data-type='["Adrian Gacayan", "web developer", "codename: adriatrix", "husband of one, father of three", "self-starter", "non-professional gamer", "anime lover", "rockstar wannabe"]'>
          <span class="wrap">&nbsp;</span>
        </p>
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-10 col-sm-12">
            <div class="row justify-content-center">
              <div class="col-lg-3 col-md-6 px-1">
                <div class="card skill-container border-light p-1 mb-4" data-aos-easing="ease-in" data-aos-once="true" data-aos-delay="100" data-aos="slide-up">
                  <div class="card-header p-1"><i class="fas fa-expand-arrows-alt fa-3x"></i></div>
                  <div class="card-body p-1">
                    <h5 class="card-title font-weight-bold mt-3">Responsive</h5>
                    <p class="card-text my-subtext">I make sure my layouts will work on any device, big or small.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 px-1">
                <div class="card skill-container border-light p-1 mb-4" data-aos-easing="ease-in" data-aos-once="true" data-aos-delay="200" data-aos="slide-up">
                  <div class="card-header p-1"><i class="fas fa-mobile-alt fa-3x"></i></div>
                  <div class="card-body p-1">
                    <h5 class="card-title font-weight-bold mt-3">Mobile-Friendly</h5>
                    <p class="card-text my-subtext">I am a great adherent of mobile first design. </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 px-1">
                <div class="card skill-container border-light p-1 mb-4" data-aos-easing="ease-in" data-aos-once="true" data-aos-delay="150" data-aos="slide-up">
                  <div class="card-header p-1"><i class="far fa-lightbulb fa-3x"></i></div>
                  <div class="card-body p-1">
                    <h5 class="card-title font-weight-bold mt-3">Intuitive</h5>
                    <p class="card-text my-subtext">I prefer clean content structure and easy-to-use interactions.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 px-1">
                <div class="card skill-container border-light p-1 mb-4" data-aos-easing="ease-in" data-aos-once="true" data-aos-delay="300" data-aos="slide-up">
                  <div class="card-header p-1"><i class="fas fa-rocket fa-3x"></i></div>
                  <div class="card-body p-1">
                    <h5 class="card-title font-weight-bold mt-3">Dynamic</h5>
                    <p class="card-text my-subtext">I want to make the web a brighter place to visit, one code at a time.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="devicon-container">
          <div class="row justify-content-center">
            <div class="col-3 col-md-3 col-lg-1 about-icon"><i class="devicon-html5-plain-wordmark"></i></div>
            <div class="col-3 col-md-3 col-lg-1 about-icon"><i class="devicon-css3-plain-wordmark"></i></div>
            <div class="col-3 col-md-3 col-lg-1 about-icon"><i class="devicon-bootstrap-plain-wordmark"></i></div>
            <div class="col-3 col-md-3 col-lg-1 about-icon"><i class="devicon-javascript-plain"></i></div>
            <div class="col-3 col-md-3 col-lg-1 about-icon"><i class="devicon-jquery-plain-wordmark"></i></div>
            <div class="col-3 col-md-3 col-lg-1 about-icon"><i class="devicon-git-plain-wordmark"></i></div>
            <div class="col-3 col-md-3 col-lg-1 about-icon"><i class="devicon-atom-original"></i></i></div>
            <div class="col-3 col-md-3 col-lg-1 about-icon"><i class="devicon-mysql-plain-wordmark"></i></div>
            <div class="col-3 col-md-3 col-lg-1 about-icon"><i class="devicon-php-plain"></i></div>
            <div class="col-3 col-md-3 col-lg-1 about-icon"><i class="devicon-laravel-plain-wordmark"></i></div>
            <div class="col-3 col-md-3 col-lg-1 about-icon"><i class="devicon-gimp-plain"></i></div>
            <div class="col-3 col-md-3 col-lg-1 about-icon"><i class="devicon-github-plain-wordmark"></i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of #about -->

  <!-- start of #works -->
  <div id="works" class="works-image">
    <div class="works-text p-2">
      <div class="row justify-content-md-center">
        <div class="col">
          <h2 class="h4 my-sectiontext"><span class="h5">My</span> Work</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- end of #works -->

  <!-- start of #projects -->
  <div id="projects" class="projects-image">
    <div class="row">
      <div class="col">
        &nbsp;
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
        <div class="card works-container">
          <div class="card-header">
            <img src="img/overbreak-image.jpg" alt="OverBreak image" class="works-img">
          </div>
          <div class="works-overlay">
            <div class="works-desc">
              <h5 class="font-weight-bold">OverBreak</h5>
              <p class="p-1">My very first static website built on HTML, CSS and Javascript. From someone who just started out in web development, I am proud of what I've created.<br><small>(even though it obviously needs a lot more work to be done).</small></p>
              <div class="col h4"><a class="btn btn-sm text-secondary btn-outline-light" target="_blank" href="https://team-overbreak.000webhostapp.com"><i class="fas fa-external-link-alt fa-2x"></i> visit site</a></div>
            </div>
          </div>
          <div class="card-body text-center">
            <h5 class="card-title font-weight-bold mt-3">OverBreak</h5>
            <p class="card-text my-subtext h6">Weapons of choice: <strong>Bootstrap</strong> CSS framework, HTML, CSS, JS.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
        <div class="card works-container">
          <div class="card-header">
            <img src="img/popstop-image.jpg" alt="PopStopShop image" class="works-img" style="width:100%">
          </div>
          <div class="works-overlay">
            <div class="works-desc">
              <h5 class="font-weight-bold">PopStopShop</h5>
              <p class="p-1">My real-world implementation of a workable E-commerce website. Dyanamic and responsive, this project is the most I've enjoyed creating.</p>
              <div class="col h4 bt-5"><a class="btn btn-sm text-secondary btn-outline-light" target="_blank" href="https://adriatrix-csp2.000webhostapp.com"><i class="fas fa-external-link-alt fa-2x"></i> visit shop</a></div>
            </div>
          </div>
          <div class="card-body text-center">
            <h5 class="card-title font-weight-bold mt-3">PopStopShop</h5>
            <p class="card-text my-subtext h6">Weapons of choice: <strong>Bulma</strong> CSS framework, HTML, CSS, JS, <strong>PHP</strong>, MySQL.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
        <div class="card works-container">
          <div class="card-header">
            <img src="img/cube-image.jpg" alt="Adrian's Cube image" class="works-img" style="width:100%">
          </div>
          <div class="works-overlay">
            <div class="works-desc">
              <h5 class="font-weight-bold">Adrian's Cube</h5>
              <p class="p-1">What started out as a simple to-do list app has become a full-blown Order Management System (OMS) website complete with innovative search and comment functions.</p>
              <div class="col h4 bt-5"><a class="btn btn-sm text-secondary btn-outline-light" id="btnCube" target="_blank" href="https://a-cube.000webhostapp.com"><i class="fas fa-external-link-alt fa-2x"></i> visit app</a></div>
            </div>
          </div>
          <div class="card-body text-center">
            <h5 class="card-title font-weight-bold mt-3">Adrian's Cube</h5>
            <p class="card-text my-subtext h6">Weapons of choice: <strong>Laravel</strong> PHP framework, HTML, CSS, JS, PHP, MySQL, Boostrap CSS framework.</p>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <!-- end of #projects -->

  <!-- start of #contact -->
  <div id="contact" class="contact-image">
    <div class="contact-text">
      <div class="row justify-content-center">
        <div class="col text-center">
          <img class="my-brand" src="img/my-brand.png" alt="Adrian Gacayan Ag logo brand" width="50">
        </div>
      </div>
      <div class="row justify-content-md-center mt-5">
        <div class="col-md-8">
          <form class="g-recaptcha" accept-charset="UTF-8" action="https://usebasin.com/f/88cfc6db015b" enctype="multipart/form-data" method="POST">
            <div class="card text-white bg-dark mb-3">
              <div class="card-header text-left">
                <h2 class="h4 my-sectiontext">Send <span class="h5">me a message</span></h2>
                <p class="h6 my-subtext">Hire me! Let's work on your dream site. Help feed my addiction.</p>
              </div>
              <div class="card-body text-right">
                <div class="row">
                  <div class="col">
                    <div class="form-row">
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" rows="4" name="comment" placeholder="Your Message" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="g-recaptcha" data-sitekey="6Lew3SMUAAAAAJ82QoS7gqOTkRI_dhYrFy1f7Sqy" data-theme="dark"></div>
                <button class="btn btn-secondary" type="submit">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-8 ">
          <div class="form-row">
            <div class="col mt-1">
              <a class="btn my-rounded btn-block btn-light font-weight-bold" data-toggle="tooltip" data-placement="top" title="download my CV" download="Adrian Gacayan" href="assets/adrianGacayan.pdf"><i class="fas fa-download"></i> Save my CV</a>
            </div>
            <div class="col mt-1">
              <a class="btn my-rounded btn-block text-secondary btn-outline-light font-weight-bold" data-toggle="tooltip" data-placement="top" title="view my CV" target="_blank" href="assets/adrianGacayan.pdf"><i class="fas fa-eye"></i> View my CV</a>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-5 text-center">
        <a class="contact-social-icon" target="_blank" href="https://www.linkedin.com/in/adrian-gacayan-00087514b/" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
        <a class="contact-social-icon" target="_blank" href="https://plus.google.com/u/0/+AdrianGacayan" title="Google+"><i class="fab fa-google-plus-g"></i></a>
        <a class="contact-social-icon" target="_blank" href="https://github.com/adriatrix" title="Github"><i class="fab fa-github-alt"></i></a>
        <a class="contact-social-icon" target="_blank" href="https://codepen.io/adriatrix" title="Codepen"><i class="fab fa-codepen"></i></a>
        <a class="contact-social-icon" target="_blank" href="https://steamcommunity.com/id/adriatrix/" title="Steam"><i class="fab fa-steam"></i></a>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <p>&copy; 2018 <a class="text-white" target="_blank" href="https://github.com/adriatrix">Adrian Gacayan</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <p>made with <span style="color:red;"><i class="fas fa-heart"></i></span> and <span style="color:white;"><i class="fas fa-coffee"></i><span>.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- end of #contact -->

</div> <!-- div.container-fluid -->
@endsection
