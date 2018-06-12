<?php

namespace Drupal\upchuk_utils;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Generic static class that contains helpers for dealing with Entity (field) values.
 */
class EntityHelpers {

  /**
   * Given a field name, it returns an array of field values.
   *
   * @param \Drupal\Core\Entity\ContentEntityInterface $entity
   * @param string $field
   * @param string $column
   *
   * @return array
   */
  public static function arrayColumn(ContentEntityInterface $entity, $field, $column = 'value') {
    $values = $entity->get($field)->getValue();
    if (!$values) {
      return [];
    }

    return array_column($values, $column);
  }

}