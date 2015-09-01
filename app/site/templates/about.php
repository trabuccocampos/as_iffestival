<?php snippet('header') ?>

  <main class="main about" role="main" id="pjax-container">
    <h1 class="opening__title">
      <?php echo $page->title() ?>
    </h1>
    <h2 class="opening__quote">
      <?php echo $page->quote()->text() ?>
    </h2>
    <div class="about__description">
      <?php echo $page->text()->kirbytext() ?>
    </div>
  </main>

<?php snippet('footer') ?>
