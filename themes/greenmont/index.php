  </head>
<?php get_header(); ?>
  <body>
<div class="container-fluid">

<header class="col-12 p-0 float-left">
  <a href="<?php bloginfo('url'); ?>" class="logotype"><img src="<?php echo get_template_directory_uri(); ?>/images/components/logotype.svg" alt="logo/home button"></a>
  <button onclick="myFunction()" class="col-1 float-right p-0 toggle-button d-lg-none"><img src="<?php echo get_template_directory_uri(); ?>/images/components/nav-button.svg" alt="toggle navigation"></button>




<?php get_template_part('nav'); ?>


  </header>

<div class="main-container">





<div class="article-main-container col-12 col-lg-7 col-xl-7 float-left p-0">
    <article class="home col-12 float-left">
      <div class="photo-container-home col-12 col-lg-5 p-0 p-lg-3 float-left d-lg-none">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home/home-1.png" alt="Street view of Greenmont" class="col-12 p-0">
      </div>


<div class="col-12 float-left p-0">
      <h2 class="col-12 d-lg-none float-left">WELCOME TO GREENMONT</h2>
</div>

      <p class="col-12 float-left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/home-2.png" alt="Street view of Greenmont" class="col-5 col-xl-5 d-none d-lg-block float-left">
<span class="h2-duplicate col-12 d-none d-lg-block">WELCOME TO GREENMONT</span> Welcome to Greenmont, Morgantown's oldest and most diverse community. Though relatively small in size, Greenmont  contains a historic district, a multitude of small businesses, including pubs and eateries, access to parks and trails, the best rated school district   in   the   state, public art displays, and most importantly a place to call home. Greenmont is one of the few areas within Morgantown city limits that offers affordable housing for both renters and buyers. Take a minute to explore our neighborhood and discover all we have to offer.
          </p>
      </article>

      <main class="current-projects d-none d-lg-block col-12 float-left">
<h2 class="col-12 float-left">CURRENT PROJECTS</h2>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="images/current-projects/interior-2.png" class="d-block w-100" alt="...">

              <div class="carousel-text-container col-12 float-left p-0">

                <div class="col-6 float-left">
                <h3 class="col-12 float-left">Kitchen Renovations</h3>
                <p class="col-12 float-left">  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                </p>
                </div>
                <div class="link-container col-6 float-left">
                <a href="#" class="col-12 float-left">Read More</a>
                </div>
                </div>
            </div>


            <div class="carousel-item">
              <img src="/images/current-projects/about-us-1.png" class="d-block w-100" alt="...">
              <div class="carousel-text-container col-12 float-left p-0">

                <div class="col-6 float-left">
                <h3 class="col-12 float-left">Kitchen Renovations</h3>
                <p class="col-12 float-left">  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                </p>
                </div>
                <div class="link-container col-6 float-left">
                <a href="#" class="col-12 float-left">Read More</a>
                </div>
                </div>
            </div>

            <div class="carousel-item">
              <img src="images/current-projects/about-us-2.png" class="d-block w-100" alt="...">
              <div class="carousel-text-container col-12 float-left p-0">

                <div class="col-6 float-left">
                <h3 class="col-12 float-left">Kitchen Renovations</h3>
                <p class="col-12 float-left">  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                </p>
                </div>
                <div class="link-container col-6 float-left">
                <a href="#" class="col-12 float-left">Read More</a>
                </div>
                </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        </main>
        </div>

      <aside class="col-12 col-lg-5 float-left float-lg-right">
        <div class="aside-container home-aside col-12 float-left">
        <h2 class="col-12 col-lg-10 offset-lg-1 float-left">PERKS & POINTS OF INTEREST</h2>

<ul class="list col-12 col-lg-10 offset-lg-1 p-0">

  <li class="col-12 col-md-6 col-lg-12 float-left"><a href="#" class="col-5 float-left p-0"><img src="<?php echo get_template_directory_uri(); ?>/images/perks/genes.png" alt="Mural on Gene's Beer Garden" class="col-12 float-left p-0"></a>
<div class="content-container col-7 float-left"><a href="#" class="col-12 float-left p-0"><h3 class="col-12 float-left p-0">Gene's Beer Garden</h3></a>
<a href="#" class="contact-tiny">(304) 292-1147</a> | <a href="http://genesbeergarden.com/" target="_blank" class="contact-tiny">Website</a>
<p class="about-tiny col-12 float-left p-0">Gene’s Beer Garden is the oldest running bar in Morgantown – started in 1944.</p>
</div>
  </li>

  <li class="col-12 col-md-6 col-lg-12 float-left"><a href="#" class="col-5 float-left p-0"><img src="images/perks/crosswalk.png" alt="Rainbow Crosswalk" class="col-12 float-left p-0"></a>
<div class="content-container col-7 float-left"><a href="#" class="col-12 float-left p-0"><h3 class="col-12 float-left p-0">Rainbow Crosswalk</h3></a>
<a href="#" class="contact-tiny">No Phone</a> | <a href="http://genesbeergarden.com/" target="_blank" class="contact-tiny">No Website</a>
<p class="about-tiny col-12 float-left p-0">The rainbow crosswalk celebrates the diversity of the Greenmont community.</p>
</div>
  </li>

  <li class="col-12 col-md-6 col-lg-12 float-left"><a href="#" class="col-5 float-left p-0"><img src="images/perks/quantum.png" alt="Quantum Bean Cafe storefront" class="col-12 float-left p-0"></a>
<div class="content-container col-7 float-left"><a href="#" class="col-12 float-left p-0"><h3 class="col-12 float-left p-0">Quantum Bean Coffee</h3></a>
<a href="#" class="contact-tiny">(304) 292-1147</a> | <a href="https://www.quantumbean.com/" target="_blank" class="contact-tiny">Website</a>
<p class="about-tiny col-12 float-left p-0">Quantum Bean Coffee is a Micro Roaster of specialty coffee of West Virginia.</p>
</div>
  </li>

  <li class="col-12 col-md-6 col-lg-12 float-left"><a href="#" class="col-5 float-left p-0"><img src="images/perks/bear.png" alt="Mural on Gene's Beer Garden" class="col-12 float-left p-0"></a>
<div class="content-container col-7 float-left"><a href="#" class="col-12 float-left p-0"><h3 class="col-12 float-left p-0">Greenmont Bears</h3></a>
<a href="#" class="contact-tiny">No Phone</a> | <a href="http://genesbeergarden.com/" target="_blank" class="contact-tiny">No Website</a>
<p class="about-tiny col-12 float-left p-0">the Greenmont Bears have made their way to the neighborhood to highlight Greenmont and allow local artists.</p>
</div>
  </li>

  <li class="col-12 float-left"><a href="perks.html" class="view-more col-12 float-left">View More</a></li>
  </ul>
  </div>
        </aside>


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12292.45563130529!2d-79.9543548133689!3d39.624639021439165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88357c9c2e3cbc41%3A0xb6fcbc1b6044a404!2sGreenmont%2C%20Morgantown%2C%20WV%2026501!5e0!3m2!1sen!2sus!4v1598121882596!5m2!1sen!2sus" width="600" height="450" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" class="map col-12 float-left p-0"></iframe>

<?php get_footer(); ?>



</div> <!--Closes Main Container -->
</div> <!--Closes Container-fluid -->

<script>
function myFunction() {
  var element =
  document.getElementById("nav");
  element.classList.toggle("toggle-display-on");
}
</script>

          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>