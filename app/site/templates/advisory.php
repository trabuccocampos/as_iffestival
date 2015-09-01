<?php snippet('header') ?>

  <main class="main advisory" role="main" id="pjax-container">
    <h1 class="opening__title">
      <?php echo $page->title()->text() ?> Board
    </h1>
    <h2 class="opening__quote">
      <?php echo $page->quote()->text() ?>
    </h2>
    <ul class="advisory__list">
      <?php foreach($page->advisors()->toStructure() as $advisor): ?>
        <li class="advisor">
          <h2 class="advisor--name">
            <?php echo $advisor->name()->html() ?>
          </h2>
          <div class="advisor--role">
            <?php echo $advisor->role()->html() ?>
          </div>
          <ul class="advisor--highlights">
            <?php foreach($advisor->highlights()->split(',') as $highlight): ?>
              <li class="advisor--highlights__single"><?php echo $highlight ?></li>
            <?php endforeach ?>
          </ul>
          <div class="advisor--description">
            &mdash;
            <?php echo $advisor->description()->kirbytext() ?>
          </div>
        </li>
      <?php endforeach ?>
    </ul>
  </main>

<?php snippet('footer') ?>
