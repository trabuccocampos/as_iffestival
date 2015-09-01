<?php snippet('header') ?>

  <main class="main about" role="main" id="pjax-container">
    <section class="attend__intro">
      <h1 class="opening__title">
        <?php echo $page->title()->text() ?>
      </h1>
      <article class="attend__quote">
        <h2 class="opening__quote">
          <?php echo $page->quote()->text() ?>
        </h2>
      </article>
      <article class="attend__description">
        <?php echo $page->text()->kirbytext() ?>
      </article>
      <article class="attend__action">
        <a class="attend__btn btn btn--lg" href="<?php echo $page->attendLink() ?>" target="_blank">
          <?php echo $page->attend()->text() ?> &rarr;
        </a>
      </article>
      <!-- <?php echo $page->long()->kirbytext() ?> -->
    </section>
    <section class="directions">
      <h2 class="directions__title">
        How to get there
      </h2>
      <div class="directions__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3009.3515718439867!2d-73.8679396!3d41.0394402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2eb15d6244bbb%3A0x15887f9de7fe966a!2sIrvington+Town+Hall+Theater!5e0!3m2!1sen!2sus!4v1439859373952" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </section>
  </main>

<?php snippet('footer') ?>
