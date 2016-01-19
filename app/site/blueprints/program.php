title: Program
pages: false
files: false
fields:
  title:
    label: Title
    type: text
  quote:
    label: Opening Quote
    type:  text
  text:
    label: Introduction
    type: textarea
  films:
    label: Films
    type: structure
    entry: >
      <b>{{title}}</b><br />
      <i>{{runtime}}</i>
    fields:
      title:
        label: Film Title
        type: text
      description:
        label: Description
        type: textarea
        size:  large
      runtime:
        label: Runtime
        type: text
      image:
        label: Film Picture
        type:  selector
        mode:  single
        types:
          - image
