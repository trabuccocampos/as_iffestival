<?php if(!defined('KIRBY')) exit ?>

title: Submit
pages: false
files: false
fields:
  title:
    label: Title
    type:  text
  quote:
    label: Opening Quote
    type:  text
  headlineTimeline:
    label: Timeline Section
    type: headline
  text:
    label: Description
    type:  textarea
  timeline:
    label: Timeline
    type:  structure
    entry: >
      <b>{{deadline}}</b><br />
      <i>{{event}}</i>
    fields:
      deadline:
        label: Deadline Date
        type: text
      event:
        label: Event Title
        type: text
  headlineAwards:
    label: Awards Section
    type: headline
  awardsAudience:
    label: Awards / Audience
    type:  textarea
    width: 1/2
  awardsJury:
    label: Awards / Jury
    type:  textarea
    width: 1/2
  headlineRules:
    label: Rules & Guidelines Section
    type: headline
  rules:
    label: Rules
    type:  textarea
  guidelines:
    label: Guidelines
    type:  textarea
