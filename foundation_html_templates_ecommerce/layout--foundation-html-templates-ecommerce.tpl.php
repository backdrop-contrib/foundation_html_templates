<?php
/**
 * @file
 * Template for a full screen layout in which the header menu is out of the initial view.
 * Supportive themes will have a theme setting for l-big_statement and juiced-main class areas to have a full screen background image
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
 *   - $content['big_statement']
 *   - $content['big_statement_second']
 *   - $content['triptych_first']
 *   - $content['triptych_middle']
 *   - $content['triptych_last']
 *   - $content['footer_action']
 *   - $content['footer']
 */
?>

<div class="layout--foundation-html-templates-ecommerce container <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header top-bar" role="banner" aria-label="<?php print t('Site header'); ?>">
      <?php print $content['header']; ?>
    </header>
  <?php endif; ?>

  <?php if ($content['top']): ?>
    <header class="l-top callout text-center row column extended" role="note" aria-label="<?php print t('Site second level menu'); ?>">
      <?php print $content['top']; ?>
    </header>
  <?php endif; ?>

  <main class="container row text-center" role="main" aria-label="<?php print t('Main content'); ?>">
      <a id="main-content"></a>

    <?php if ($messages): ?>
    <div class="l-messages" role="contentinfo" aria-label="<?php print t('Status messages'); ?>">
      <?php print $messages; ?>
    </div>
    <?php endif; ?>

      <section class="l-content small-up-2 large-up-4" role="region">
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

  <?php if ($content['big_statement']): ?>
      <section class="l-big-statement container row column text-center callout primary" role="region">
        <?php print $content['big_statement']; ?>
      </section>
  <?php endif; ?>

  <?php if ($content['big_statement_second']): ?>
      <section class="l-big-statement-second container row column text-center" role="region">
        <?php print $content['big_statement_second']; ?>
      </section>
  <?php endif; ?>

  <?php if ($content['triptych_first'] || $content['triptych_middle'] || $content['triptych_last']): ?>
    <section class="l-triptych container row" role="region">
      <div class="l-triptych-first medium-4 columns">
        <?php print $content['triptych_first']; ?>
      </div>
      <div class="l-triptych-middle medium-4 columns">
        <?php print $content['triptych_middle']; ?>
      </div>
      <div class="l-triptych-last medium-4 columns">
        <?php print $content['triptych_last']; ?>
      </div>
    </section>
  <?php endif; ?>

  <?php if ($content['footer_action']): ?>
    <footer class="l-footer-action container row column callout large secondary" role="secondary" aria-label="<?php print t('Action to take'); ?>">
      <?php print $content['footer_action']; ?>
    </footer>
  <?php endif; ?>

  <?php if ($content['footer']): ?>
    <footer class="l-footer container row column" role="contentinfo" aria-label="<?php print t('Footer navigation'); ?>">
      <?php print $content['footer']; ?>
    </footer>
  <?php endif; ?>

</div>
