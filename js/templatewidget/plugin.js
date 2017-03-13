CKEDITOR.plugins.add( 'templatewidget', {

  requires: 'widget',

  init: function ( editor ) {

    editor.widgets.add( 'lt_50', {

      editables: {
        left: {
          selector: '.lt-50__clm--left'
        },
        right: {
          selector: '.lt-50__clm--right'
        }
      },
      upcast: function( element ) {
        return element.name == 'div' && element.hasClass( 'lt-50' );
      }
    } );

    editor.widgets.add( 'lt_33x66', {

      editables: {
        left: {
          selector: '.lt-33x66__clm--left'
        },
        right: {
          selector: '.lt-33x66__clm--right'
        }
      },
      upcast: function( element ) {
        return element.name == 'div' && element.hasClass( 'lt-33x66' )
      }
    } );

    editor.widgets.add( 'lt_66x33', {

      editables: {
        left: {
          selector: '.lt-66x33__clm--left'
        },
        right: {
          selector: '.lt-66x33__clm--right'
        }
      },
      upcast: function( element ) {
        return element.name == 'div' && element.hasClass( 'lt-66x33' );
      }
    } );

    editor.widgets.add( 'lt_33', {

      editables: {
        left: {
          selector: '.lt-33__clm--left'
        },
        center: {
          selector: '.lt-33__clm--center'
        },
        right: {
          selector: '.lt-33__clm--right'
        }
      },
      upcast: function( element ) {
        return element.name == 'div' && element.hasClass( 'lt-33' );
      }
    } );

    editor.widgets.add( 'fp', {

      editables: {
        content: {
          selector: '.fp__content'
        }
      },
      upcast: function( element ) {
        return element.name == 'div' && element.hasClass( 'fp' );
      }
    } );

  }
} );
