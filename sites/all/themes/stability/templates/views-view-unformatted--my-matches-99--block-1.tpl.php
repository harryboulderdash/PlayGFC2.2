<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php $firstRecord=true; ?>
    <?php foreach ($rows as $id => $row): ?>
        <?php if($firstRecord): ?>
                <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
                <?php print $row; ?>
                </div>
            <?php $firstRecord = false; ?>
        <?php endif; ?>
    <?php endforeach; ?>
