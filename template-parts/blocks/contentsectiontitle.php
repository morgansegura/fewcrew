<?php
/**
 * Block Name: Content Section Title
 *
 * @package fewcrew
 */

// namespace Few_Crew;

$item = new stdClass();
$item->link = get_field('link');
$item->title = get_field('title');
$item->title_size = get_field('title_size');
$item->margin_top = get_field('margin_top');
$item->margin_bottom = get_field('margin_bottom');
$item->container_width = get_field('container_width');
$item->text_color = get_field('text_color');

?>

<div
  class="content-sectiontitle<?php if ($item->title_size) : echo ' font-size-' . $item->title_size; endif; ?><?php if ($item->margin_top) : echo ' spacing-top'; endif; ?><?php if ($item->margin_bottom) : echo ' spacing-bottom'; endif; ?>">
  <div class="contain-xxl">
    <div class="<?php if ($item->container_width) : echo 'contain-' . $item->container_width; endif; ?>">
      <div
        class="content-sectiontitle-heading <?php if ($item->text_color) : echo 'text-color-' . $item->text_color; endif; ?>">
        <?php if ($item->title) : ?>
        <h2 class="content-sectiontitle-title"><?php echo $item->title; ?></h2>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
