<?php snippet('header') ?>

  <main class="main about" role="main" id="pjax-container">
    <h1 class="opening__title">
      <?php echo $page->title() ?>
    </h1>
    <h2 class="opening__quote">
      <?php echo $page->quote()->text() ?>
    </h2>
    <div class="program__intro">
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <ul class="program__list">
      <?php foreach($page->editions()->toStructure() as $edition): ?>
        <li class="edition">
          <a class="edition__wrapper" href="<?php echo $edition->link()->url() ?>">
            <h4>
              <?php echo $edition->title()->html() ?>
            </h4>
            <br>
             <?php if($image = $edition->image()->toFile()): ?>
             <img src="<?php echo $image->url() ?>" alt="<?php echo $edition->title()->html() ?>" />
             <?php endif ?>
             <div class="film--description">
               &mdash;
               <?php echo $edition->theme()->kirbytext() ?>
               &mdash;
               <?php echo $edition->description()->kirbytext() ?>
             </div>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </main>

<?php snippet('footer') ?>
