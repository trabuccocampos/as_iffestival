<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
fields:
  title:
    label: Title
    type:  text
  author:
    label: Website Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  facebook:
    label: Facebook
    type: text
    icon: facebook
  twitter:
    label: Twitter
    type: text
    placeholder: @
    icon: twitter
  copyright:
    label: Copyright
    type:  textarea
