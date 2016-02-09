<?php

/**
 * @file
 * Contains \Drupal\copyright_block\Plugin\Block\CopyrightBlock.
 */

namespace Drupal\copyright_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Adds a copyright block.
 *
 * @Block(
 *   id = "copyright_block",
 *   admin_label = @Translation("Copyright block"),
 * )
 */
class CopyrightBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => t('Copyright block'),
    ];
  }

}
