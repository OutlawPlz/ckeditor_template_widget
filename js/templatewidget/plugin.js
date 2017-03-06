CKEDITOR.plugins.add( 'templatewidget', {

  // requires: 'widget',
  init: function ( editor ) {

    editor.widgets.add( 'clm_50', {

      editables: {
        left: {
          selector: '.clm--50 .left'
        },
        right: {
          selector: '.clm--50 .right'
        }
      },
      allowedContent: 'div(!clm--50)',
      requiredContent: 'div(clm--50)',
      upcast: function( element ) {
        return element.name == 'div' && element.hasClass( 'clm--50' );
      }
    } );

    editor.widgets.add( 'clm_33x66', {

      editables: {
        left: {
          selector: '.clm--33x66 .left'
        },
        right: {
          selector: '.clm--33x66 .right'
        }
      },
      allowedContent: 'div(!clm--33x66)',
      requiredContent: 'div(clm--33x66)',
      upcast: function( element ) {
        return element.name == 'div' && element.hasClass( 'clm--33x66' )
      }
    } );

    editor.widgets.add( 'clm_66x33', {

      editables: {
        left: {
          selector: '.clm--66x33 .left'
        },
        right: {
          selector: '.clm--66x33 .right'
        }
      },
      allowedContent: 'div(!clm--66x33)',
      requiredContent: 'div(clm--66x33)',
      upcast: function( element ) {
        return element.name == 'div' && element.hasClass( 'clm--66x33' );
      }
    } );

    editor.widgets.add( 'clm_33', {

      editables: {
        left: {
          selector: '.clm--33 .left'
        },
        center: {
          selector: '.clm--33 .center'
        },
        right: {
          selector: '.clm--33 .right'
        }
      },
      allowedContent: 'div(!clm--33)',
      requiredContent: 'div(clm--33)',
      upcast: function( element ) {
        return element.name == 'div' && element.hasClass( 'clm--33' );
      }
    } );

  }
} );
