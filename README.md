# CKEditor Template Widget

Convert CKEditor Content Templates into Widgets.

## Quick start

Start using CKEditor Template Widget in three steps.

1. Download latest CKEditor Template Widget module from [Github][5982ccca] or
via Composer and enable it as usual.
  ```sh
  composer require outlawplz/ckeditor_template_widget
  ```

2. Define a CKEditor plugin in your `libraries/` folder that converts a
template into a widget.
  ```sh
  # Plug-in location
  /libraries/templatewidget/plugin.js
  ```

3. Add a content that uses a template and enjoy your new content editor
experience.

  [5982ccca]: https://github.com/OutlawPlz/ckeditor_template_widget "Github - CKEditor Template Widget"

That's it. You're all set to start using CKEditor Template Widget.

## Define CKEditor Plugin

Suppose you have defined a template that prints the following HTML.

```html
<div class="lt-50 clearfix">
  <div class="lt-50__clm lt-50__clm--left">
    <p>Your content...</p>
  </div>
  <div class="lt-50__clm lt-50__clm--right">
    <p>Your content...</p>
  </div>
</div>
```

Create the plug-in file `libraries/templatewidget/plugin.js` as follow. Here
we're adding a new CKEditor plug-in called `templatewidget`. Inside the plug-in
we add a new widget using the function `editor.widget.add()`; we can define
multiple widgets in a single plug-in.

```js
CKEDITOR.plugins.add( 'templatewidget', {

  requires: 'widget,templates',

  init: function ( editor ) {

    editor.widgets.add( 'lt_50', { // Define a new widget.

      editables: { // Define editable parts.
        left: {
          selector: '.lt-50__clm--left'
        },
        right: {
          selector: '.lt-50__clm--right'
        }
      },
      upcast: function( element ) { // Convert the template into a widget.
        return element.name == 'div' && element.hasClass( 'lt-50' );
      }
    } );
  }
} );
```  

That's it. Now we can try to use the template in CKEditor, and verify that the
widget is working.
