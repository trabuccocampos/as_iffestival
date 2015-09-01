<?php

$kirby = kirby();

// $kirby->urls->index = 'http://www.asiffestival.com';

switch(url::host()) {
  case 'http://www.asiffestival.com/':

     $kirby->urls->index = 'http://www.asiffestival.com';

     break;
  case 'http://asiffestival.com':

     $kirby->urls->index = 'http://asiffestival.com';

     break;
}
