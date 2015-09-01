title: Advisory
pages: false
files: false
fields:
  title:
    label: Title
    type: text
  quote:
    label: Opening Quote
    type:  text
  advisors:
    label: Advisor
    type: structure
    entry: >
      <b>{{name}}</b><br />
      <i>{{role}}</i>
    fields:
      name:
        label: Full Name
        type: text
      role:
        label: Roles
        type: text
      highlights:
        label: Highlights
        type: tags
      description:
        label: Description
        type: textarea
        size:  large
