<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  coverImg:
    label: Cover Image
    type:  selector
    mode:  single
    types:
      - image
  eventDate:
    label: Event Date
    type: text
    width: 1/2
  location:
    label: Location
    type: text
    width: 1/2
  text:
    label: Introductory Paragraph
    type:  textarea
    size:  large
  attend:
    label: Attend Button
    type: text
    width: 1/2
  submit:
    label: Submit Button
    type: text
    width: 1/2
