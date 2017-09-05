<?php
/**
 * @file views-view-table.tpl.php
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $class: A class or classes to apply to the table, based on settings.
 * - $rows: An array of row items. Each row is an array of content
 * - $totals: An array of calculated totals. Each row contains the total for one calculation.
 *   keyed by field ID.
 * @ingroup views_templates
 */
if (empty($rows) && empty($totals)) {
  return;
}
?>

  <?php if (!empty($title)) : ?>
    <caption><?php print $title; ?></caption>
  <?php endif; ?>
  
      <?php foreach ($header as $field => $label): ?>
        
          <?php print $label; ?>
      
      <?php endforeach; ?>
    
 
    <?php foreach ($rows as $count => $row): ?>
    
        <?php foreach ($row as $field => $content): ?>
         
            <?php print $content; ?>
          
        <?php endforeach; ?>
      
    <?php endforeach; ?>
 
    <?php foreach ($sub_totals as $type => $row): ?>
        <?php foreach ($row as $field => $content): ?>
         
            <?php print $content; ?>
          
        <?php endforeach; ?>
      
    <?php endforeach; ?>
    <?php foreach ($totals as $type => $row): ?>
        <?php foreach ($row as $field => $content): ?>
         
            <?php print $content; ?>
          
        <?php endforeach; ?>
      
    <?php endforeach; ?>
 
