<?php snippet('header') ?>


  <main class="main" role="main" id="pjax-container">
    <?php foreach($page->coverImg()->toStructure() as $coverImg): ?>
      <?php if($image = $coverImg->image()->toFile()): ?>
      <section class="coverImg" style="background: url(<?php echo $image->url() ?>) no-repeat center center; -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;">
      </section>
<?php endif ?>
<?php endforeach ?>

      <section class="intro">
        <article><h1 class="intro__opening">
          <?php echo $page->text()->kirbytext() ?>
        </h1></article>
      </section>

    <ul class="event">
      <li class="event__date">
        <?php echo $page->eventDate() ?>
      </li>
      <li class="event__location">
        <a class="link" href="https://www.google.com/maps/place/Irvington+Town+Hall+Theater/@41.0391455,-73.8710664,16.25z/data=!4m2!3m1!1s0x89c2eb15d6244bbb:0x15887f9de7fe966a" target="_blank"><?php echo $page->location() ?></a>
      </li>
      <!-- <li class="event__callout">
        <a href="/attend">How to get there &rarr;</a>
      </li> -->
    </ul>
    <section class="home__callout">
      <a href="/attend" class="btn pjax"><?php echo $page->attend() ?></a>
      <a href="/submit" class="pjax"><?php echo $page->submit() ?></a>
    </section>
  </main>

<?php snippet('footer') ?>
