<?php snippet('header') ?>

  <main class="main program" role="main" id="pjax-container">
    <h1 class="opening__title">
      <?php echo $page->title()->text() ?>
    </h1>
    <h2 class="opening__quote">
      <?php echo $page->quote()->text() ?>
    </h2>
    <div class="program__intro">
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <ul class="program__list">
      <?php foreach($page->films()->toStructure() as $film): ?>
        <li class="film">
          <div class="film--image">
             <?php if($image = $film->image()->toFile()): ?>
             <img src="<?php echo $image->url() ?>" alt="" />
             <?php endif ?>
          </div>
          <div class="film--info">
            <h2 class="film--title">
              <?php echo $film->title()->html() ?>
            </h2>
            <div class="film--description">
              &mdash;
              <?php echo $film->description()->kirbytext() ?>
            </div>
            <div class="film--runtime">
              <?php echo $film->runtime()->html() ?>
            </div>
          </div>
        </li>
      <?php endforeach ?>
    </ul>
  </main>

<?php snippet('footer') ?>
