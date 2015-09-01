<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  projectBasics:
    label: Basics
    type: headline
  title:
    label: Project Title
    type:  text
    width: 1/2
  date:
    label: Date
    type:  date
    format: MM.DD.YYYY
    width: 1/2
  intro:
    label: Short Description
    type: text
  categories:
    label: Fields
    type: checkboxes
    default: typography
    options:
      typography: Typography
      editorial: Editorial
      identity: Identity
      web: Web
      interactive: Interactive
      infographics: Infographics
    columns: 3
  cover:
    label: Cover Image
    type: selector
    mode:  single
    filter: cover
    autoselect: first
    size:  1

  projectContext:
    label: Context
    type: headline
  brief:
    label: Brief
    type: text
  client:
    label: Client
    type: text
  concept:
    label: Concept
    type: textarea

  line-b:
    type: line

  role:
    label: Role
    type: tags
    width: 1/2
  team:
    label: Team
    type: text
    width: 1/2


  projectDetails:
    label: Details
    type: headline
  typefaces:
    label: Typefaces
    type: textarea
  tools:
    label: Tools
    type: tags
    type: textarea
  link:
    label: URL
    type: URL

  photos:
    label: Images
    type: selector
    mode:  multiple
    sort:  modified
