  <footer role="contentinfo">
    <div class="footer__wrap">
      <section class="footer__img">
        <figure class="footer__logo__wrap">
          <svg version="1.1" class="footer__logo" preserveAspectRatio="xMinYMin meet"
          	 viewBox="0 0 149.333 46.998">
            <g>
            	<g>
            		<polygon class="light" points="49.496,18.624 49.496,29.456 131.829,43.664 131.829,29.456 131.829,8.624 131.829,4.416"/>
            	</g>
            	<path class="quotes" d="M28.889,8.614l-4.123,10.13h3.675v10.937H17.504V18.194l6.903-9.58H28.889z M40.274,18.744h3.585
            		v10.937H32.923V18.194l6.903-9.58h4.483L40.274,18.744z"/>
            </g>
          </svg>
        </figure>
      </section>
      <section class="footer__info">
        <article class="footer__info--contact">
          <h4>Contact Us</h4>
          <p>We always love hearing from filmmakers and filmgoers. Feel free to reach out!</p>
          <a href="mailto:hello@asiffestival.com" class="link">hello@asiffestival.com</a>
        </article>
        <article class="footer__info--social">
          <h4>Be Social</h4>
          <p>For special updates and interesting links,<br>
            follow us below.</p>
          <a href="<?php echo $site->twitter() ?>" class="social--twitter" target="_blank">
            <span>
              <svg version="1.1"
      	 viewBox="-302 394.5 5.5 4.5" preserveAspectRatio="xMinYMin meet">
              <g>
              	<path d="M-297,395.6v0.1c0,1.5-1.1,3.2-3.2,3.2c-0.7,0.1-1.3-0.1-1.8-0.4c0.1,0,0.2,0,0.3,0c0.5,0,1-0.2,1.4-0.5
              		c-0.5,0-0.9-0.3-1.1-0.8c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0c-0.5-0.1-0.9-0.6-0.9-1.1l0,0c0.1,0.1,0.3,0.1,0.5,0.1
              		c-0.3-0.2-0.5-0.5-0.5-0.9c0-0.2,0.1-0.4,0.2-0.6c0.6,0.7,1.4,1.1,2.3,1.2c0-0.1,0-0.2,0-0.3c0-0.6,0.5-1.1,1.1-1.1
              		c0.3,0,0.6,0.1,0.8,0.3c0.3,0,0.5-0.1,0.7-0.3c0,0.3-0.2,0.6-0.4,0.7c0.2,0,0.4-0.1,0.6-0.2C-296.6,395.3-296.8,395.4-297,395.6z"
              		/>
              </g>
              </svg>
            </span>
        </a>
          <a href="<?php echo $site->facebook() ?>" class="social--facebook" target="_blank">
            <span>
              <svg version="1.1"
    	 viewBox="-302 394.8 5.2 5.2" preserveAspectRatio="xMinYMin meet">
              <g>
              	<path d="M-296.8,395.4v3.9c0,0.3-0.3,0.6-0.6,0.6h-1v-1.8h0.7v-0.8h-0.8v-0.4c0-0.1,0-0.2,0.2-0.2h0.5v-0.9h-0.6
              		c-0.6,0-1,0.5-1,1.1v0.4h-0.6v0.8h0.6v1.9h-2c-0.3,0-0.6-0.3-0.6-0.7v-3.9c0-0.3,0.3-0.6,0.6-0.6h3.9
              		C-297.1,394.8-296.8,395.1-296.8,395.4z"/>
              </g>
              </svg>
            <span>
          </a>
        </article>
      </section>
      <section class="footer__copyright">
        <?php echo kirbytext($site->copyright()) ?>
        <p class="footer__copyright--address">A NY festival dedicated to the <span style="font-weight:100">short films</span> of the future’s <b>biggest filmmakers</b></p>
      </section>
      <section class="designby">
        designed &amp; coded by <a href="http://www.trabuc.co" target="_blank" class="link">Trabucco-Campos</a>
      </section>
    </div>
  </footer>


  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-66457386-2', 'auto');
    ga('send', 'pageview');
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <?php echo js('assets/scripts/build/main.min.js') ?>
</body>
</html>
