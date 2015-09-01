<?php snippet('header') ?>

  <main class="main submit" role="main" id="pjax-container">
    <h1 class="opening__title">
      <?php echo $page->title() ?>
    </h1>
    <section class="submit__intro">
      <h2 class="opening__quote">
        <?php echo $page->quote()->text() ?>
      </h2>
    </section>
    <article class="attend__description">
      <?php echo $page->text()->kirbytext() ?>
    </article>
    <ol class="submit__timeline">
      <?php foreach($page->timeline()->toStructure() as $timeline): ?>
        <li class="submit__timeline--node">
    			<div class="submit__timeline--stamp">
            <?php echo $timeline->deadline() ?>
          </div>
    			<div class="submit__timeline--content">
            <?php echo $timeline->event() ?>
          </div>
    		</li>
      <?php endforeach ?>
    </ol>
    <section class="submit__awards">
      <article class="submit__awards--callout">
        <a href="https://filmfreeway.com/festivals/7912" class="btn btn--lg" target="_blank">Submit your film today &rarr;</a>
        <p>takes you to <strong>FilmFreeway</strong></p>
      </article>
      <article class="submit__awards--audience">
        <h4>Audience Awards</h4>
        <?php echo $page->awardsAudience()->kirbytext() ?>
      </article>
      <article class="submit__awards--jury">
        <h4>Jury Awards</h4>
        <?php echo $page->awardsJury()->kirbytext() ?>
      </article>
    </section>
    <section class="submit__rules">
      <article class="submit__rules--guidelines">
        <h4>Guidelines</h4>
        <?php echo $page->guidelines()->kirbytext() ?>
      </article>
      <article class="submit__rules--rules">
        <h4>Rules</h4>
        <?php echo $page->rules()->kirbytext() ?>
      </article>
    </section>
  </main>

<?php snippet('footer') ?>
