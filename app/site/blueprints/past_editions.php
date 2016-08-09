<?php if(!defined('KIRBY')) exit ?>

title: Past Editions
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  quote:
    label: Opening Quote
    type:  text
  text:
    label: Description
    type:  textarea
    size:  large
  editions:
    label: Editions
    type: structure
    entry: >
      <b>{{title}}</b>
    fields:
      title:
        label: Edition Title
        type: text
      theme:
        label: Edition Theme
        type: text
      description:
        label: Description
        type: textarea
        size: large
      link:
        label: URL of edition
        type: text
        icon: link
      image:
        label: Edition Poster
        type:  selector
        mode:  single
        types:
          - image
