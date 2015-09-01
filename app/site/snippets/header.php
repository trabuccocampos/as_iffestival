<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo html($site->title()) ?> / <?php echo html($page->title()) ?></title>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


  <!-- Development  -->
  <!-- <?php echo css('assets/styles/app.css') ?> -->

  <!-- Production -->
  <?php echo css('assets/styles/build/app.min.css') ?>

</head>
<body>
  <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <header class="cf" role="banner">
    <a class="logo pjax" href="<?php echo url() ?>">
      <!-- <img src="<?php echo url('assets/images/as_iff_mark.svg') ?>" alt="<?php echo html($site->title()) ?>" /> -->
      <div>
        <svg version="1.1" preserveAspectRatio="xMinYMin meet"
      	 viewBox="-235 376 140 42">
          <g class="logo--mark">
          	<g>
              <path class="logo--mark--quotes" d="M-223.5,380.1l-2.3,5.4h2v5.9h-5.8v-5.9l3.7-5.4H-223.5z M-217.4,385.5h1.9v5.9h-5.9v-5.9l3.7-5.4h2.4L-217.4,385.5z"/>
          		<path d="M-199.6,405.2h-9.2l-2.3,8.4h-5.3L-206,386l-2-6h7.1l11.2,33.6h-7.1L-199.6,405.2z M-200.7,401.9l-3.9-11.7l-3.3,11.7
          			H-200.7z"/>
          		<path d="M-180.8,411c2.2,0,3.3-1.2,3.3-2.9c0-4.7-10.2-3.5-10.2-11.6c0-4.5,4.4-7.5,8.5-7.5c2.8,0,6,0.9,7.5,2.2l-1.3,4.7
          			c-1.4-2-3-3.5-5.4-3.6c-2.3,0-3.6,1.2-3.6,2.8c0,4.6,11.5,3.5,11.5,10.9c0,4.7-4,8.4-9.9,8.4c-3.3,0-6.4-1.1-8.5-3.1l2.7-5.3
          			C-185.3,409.1-182.6,411-180.8,411z"/>
          		<path d="M-154.6,379.9h6.9v3.8l-6.9-0.5V379.9z M-154.6,389.6h6.9v24h-6.9V389.6z M-115.3,386.4v9.7l10.9-2v7.5l-10.9-2v13.9h-6.9
          			v-27.6l-14.8-1.1v11.3l10.9-2v7.5l-10.9-2v13.9h-6.9V380h42.9v7.5L-115.3,386.4z"/>
          	</g>
          </g>
        </svg>
      </div>
    </a>
    <?php snippet('menu') ?>
  </header>
