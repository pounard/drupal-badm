<div <?php echo drupal_attributes($attributes); ?>>
  <?php if ($prefix): ?><?php echo $prefix; ?><?php endif; ?>
  <div class="checkbox<?php if (!empty($element['#disabled'])): ' disabled'; endif;?>">
    <?php if ($label_show && $label): ?>
    <label for="<?php echo $id ?>">
    <?php endif; ?>
    <?php echo $input; ?>
    <?php if ($label_show && $label): ?>
    <?php echo $label; ?>
    </label>
    <?php endif; ?>
    <?php if ($description): ?><p class="help-block"><?php echo $description; ?></p><?php endif; ?>
  </div>
  <?php if ($suffix): ?><?php echo $suffix; ?><?php endif; ?>
</div>
