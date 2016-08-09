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
    <ul class="program__list">
      <?php foreach($page->editions()->toStructure() as $edition): ?>
        <li class="film">
          <a class="edition__wrapper" href="<?php echo $edition->link()->url() ?>">
             <?php if($image = $edition->image()->toFile()): ?>
             <img src="<?php echo $image->url() ?>" alt="<?php echo $edition->title()->html() ?>" />
             <?php endif ?>
             <h4>
               <?php echo $edition->title()->html() ?>
             </h4>
             <div class="film--description">
               &mdash;
               <p>
                 <?php echo $edition->theme()->kirbytext() ?>
               </p>
               &mdash;
               <?php echo $edition->description()->kirbytext() ?>
             </div>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </main>

<?php snippet('footer') ?>
