<?php get_header(); ?>

<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/window.jpg') ?>);"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">Welcome!</h1>
    <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
    <h3 class="headline headline--small">Check out our <strong>companions</strong>!</h3>
    <a href="#" class="btn btn--large btn--blue">Find Your Buddy</a>
  </div>
</div>

<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
      
      <div class="event-summary">
        <a class="event-summary__date t-center" href="#">
          <span class="event-summary__month">Mar</span>
          <span class="event-summary__day">25</span>  
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">Acro-Cats</a></h5>
          <p>Always wanted the flexibility of a cat? Join us for a beginner Acroyoga workshop in a room full of adoptable kitties! <a href="#" class="nu gray">Learn more</a></p>
        </div>
      </div>
      <div class="event-summary">
        <a class="event-summary__date t-center" href="#">
          <span class="event-summary__month">Apr</span>
          <span class="event-summary__day">02</span>  
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">Dogs in the Park</a></h5>
          <p>Enjoy a nice walk in the park with our available doggy buddies! Adoption available onsite. <a href="#" class="nu gray">Learn more</a></p>
        </div>
      </div>
      
      <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>

    </div>
  </div>
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Forever Homes: Adopted</h2>

      <div class="event-summary">
        <a class="event-summary__date event-summary__date--beige t-center" href="#">
          <span class="event-summary__month">Jan</span>
          <span class="event-summary__day">5</span>  
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">Matcha</a></h5>
          <p>From disaster-striken streets to a cozy new home filled with love: read Matcha's heart-warming story <a href="#" class="nu gray">here!</a></p>
        </div>
      </div>
      <div class="event-summary">
        <a class="event-summary__date event-summary__date--beige t-center" href="#" style='background-image: url(<?php echo get_theme_file_uri('/images/chewy.jpg'); ?>)'>
          <span class="event-summary__month">Jan</span>
          <span class="event-summary__day">20</span>  
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="#">Chewy</a></h5>
          <p>After months of fighting her injuries, Chewy finally found a forever home<a href="#" class="nu gray"> here!</a></p>
        </div>
      </div>
      
      <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
    </div>
  </div>
</div>

<div class="hero-slider">
<div class="hero-slider__slide" style="background-image: url(images/bus.jpg);">
  <div class="hero-slider__interior container">
    <div class="hero-slider__overlay">
      <h2 class="headline headline--medium t-center">Free Transportation</h2>
      <p class="t-center">All students have free unlimited bus fare.</p>
      <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
    </div>
  </div>
</div>
<div class="hero-slider__slide" style="background-image: url(images/apples.jpg);">
  <div class="hero-slider__interior container">
    <div class="hero-slider__overlay">
      <h2 class="headline headline--medium t-center">An Apple a Day</h2>
      <p class="t-center">Our dentistry program recommends eating apples.</p>
      <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
    </div>
  </div>
</div>
<div class="hero-slider__slide" style="background-image: url(images/bread.jpg);">
  <div class="hero-slider__interior container">
    <div class="hero-slider__overlay">
      <h2 class="headline headline--medium t-center">Free Food</h2>
      <p class="t-center">Fictional University offers lunch plans for those in need.</p>
      <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>