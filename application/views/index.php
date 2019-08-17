
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
  
    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url(<?php echo base_url('assets/images/hero_1.jpg');?>);" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Gerons tous nos poches</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">une solution de gerance de paiement</p>
                </div>
                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="<?php echo site_url('welcome/');?>" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">Connexion</h3>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="login" name="login">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" name="passe">
                    </div>
                    
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Se connecter">
                    </div>
                  </form>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
  </div>
    
  </body>
</html>
