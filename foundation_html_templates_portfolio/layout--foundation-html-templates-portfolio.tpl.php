<?php
/**
 * @file
 * Template for a 2 column split screen layout.
 * Supportive themes will have a theme setting for l-big_statement and juiced-main class areas to have a full screen background image
 * This template provides a two column layout a roughly 50/50 split.
 *
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: Array of additional HTML attributes to be added to the layout
 *     wrapper. Flatten using backdrop_attributes().
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following sections:
 *   - $content['header']
 *   - $content['top']
 *   - $content['content']
 *   - $content['footer']
 */
?>

<div class="off-canvas-wrapper">

<div data-off-canvas-wrapper class="layout--foundation-html-templates-portfolio container off-canvas-wrapper-inner <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header off-canvas position-left reveal-for-large" role="banner" aria-label="<?php print t('Site header'); ?>" data-off-canvas data-position="left" aria-hidden="true" data-offcanvas="fpnyr6-offcanvas">
      <div class="row column">
      <?php print $content['header']; ?>
      </div>
    </header>
  <?php endif; ?>


<div class="off-canvas-content" data-off-canvas-content>

  <?php if ($content['top']): ?>
    <header class="l-top callout primary" role="note" aria-label="<?php print t('Site second level menu'); ?>">
      <div class="row column">
        <?php print $content['top']; ?>
      </div>
    </header>
  <?php endif; ?>

  <main class="container column row" role="main" aria-label="<?php print t('Main content'); ?>">
      <a id="main-content"></a>

    <?php if ($messages): ?>
      <div class="l-messages" role="contentinfo" aria-label="<?php print t('Status messages'); ?>">
      <?php print $messages; ?>
      </div>
    <?php endif; ?>

      <section class="l-content" role="region">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($tabs): ?>
        <div class="tabs" role="tablist" aria-label="<?php print t('Admin Content Tabs'); ?>">
          <?php print $tabs; ?>
        </div>
      <?php endif; ?>

      <?php print $action_links; ?>
      <?php print $content['content']; ?>
      </section>
  </main>

  <?php if ($content['footer']): ?>
    <footer class="l-footer row column" role="contentinfo" aria-label="<?php print t('Footer navigation'); ?>">
      <?php print $content['footer']; ?>
    </footer>
  <?php endif; ?>

</div>

</div>
