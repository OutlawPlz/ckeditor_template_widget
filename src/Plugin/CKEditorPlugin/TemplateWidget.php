<?php
/**
 * @file
 * Contains \Drupal\template_widget\Plugin\CKEditorPlugin\TemplateWidget
 */

namespace Drupal\ckeditor_template_widget\Plugin\CKEditorPlugin;


use Drupal\ckeditor\CKEditorPluginContextualInterface;
use Drupal\ckeditor\CKEditorPluginCssInterface;
use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "Template widget" plugin.
 *
 * @CKEditorPlugin(
 *   id = "templatewidget",
 *   label = @Translation("Templates widget")
 * )
 */
class TemplateWidget extends PluginBase implements CKEditorPluginInterface, CKEditorPluginContextualInterface, CKEditorPluginCssInterface {

  /**
   * Checks if this plugin should be enabled based on the editor configuration.
   *
   * The editor's settings can be retrieved via $editor->getSettings().
   *
   * @param \Drupal\editor\Entity\Editor $editor
   *   A configured text editor object.
   *
   * @return bool
   */
  public function isEnabled(Editor $editor) {

    return TRUE;
  }

  /**
   * Indicates if this plugin is part of the optimized CKEditor build.
   *
   * Plugins marked as internal are implicitly loaded as part of CKEditor.
   *
   * @return bool
   */
  public function isInternal() {

    return FALSE;
  }

  /**
   * Returns a list of plugins this plugin requires.
   *
   * @param \Drupal\editor\Entity\Editor $editor
   *   A configured text editor object.
   * @return array
   *   An unindexed array of plugin names this plugin requires. Each plugin is
   *   is identified by its annotated ID.
   */
  public function getDependencies(Editor $editor) {

    return array();
  }

  /**
   * Returns a list of libraries this plugin requires.
   *
   * These libraries will be attached to the text_format element on which the
   * editor is being loaded.
   *
   * @param \Drupal\editor\Entity\Editor $editor
   *   A configured text editor object.
   * @return array
   *   An array of libraries suitable for usage in a render API #attached
   *   property.
   */
  public function getLibraries(Editor $editor) {

    return array();
  }

  /**
   * Returns the Drupal root-relative file path to the plugin JavaScript file.
   *
   * Note: this does not use a Drupal library because this uses CKEditor's API,
   * see http://docs.cksource.com/ckeditor_api/symbols/CKEDITOR.resourceManager.html#addExternal.
   *
   * @return string|false
   *   The Drupal root-relative path to the file, FALSE if an internal plugin.
   */
  public function getFile() {

    return drupal_get_path('module', 'ckeditor_template_widget') . '/js/templatewidget/plugin.js';

  }

  /**
   * Returns the additions to CKEDITOR.config for a specific CKEditor instance.
   *
   * The editor's settings can be retrieved via $editor->getSettings(), but be
   * aware that it may not yet contain plugin-specific settings, because the
   * user may not yet have configured the form.
   * If there are plugin-specific settings (verify with isset()), they can be
   * found at
   * @code
   * $settings = $editor->getSettings();
   * $plugin_specific_settings = $settings['plugins'][$plugin_id];
   * @endcode
   *
   * @param \Drupal\editor\Entity\Editor $editor
   *   A configured text editor object.
   * @return array
   *   A keyed array, whose keys will end up as keys under CKEDITOR.config.
   */
  public function getConfig(Editor $editor) {

    return array();
  }

  /**
   * Retrieves enabled plugins' iframe instance CSS files.
   *
   * Note: this does not use a Drupal asset library because this CSS will be
   * loaded by CKEditor, not by Drupal.
   *
   * @param \Drupal\editor\Entity\Editor $editor
   *   A configured text editor object.
   *
   * @return string[]
   *   An array of CSS files. This is a flat list of file paths relative to
   *   the Drupal root.
   */
  public function getCssFiles(Editor $editor) {

    return array(
      drupal_get_path('module', 'system') . '/css/components/clearfix.module.css'
    );
  }
}