<?php

/**
 * @file
 * Hooks provided by the Commerce Stacking Dimensions module.
 */

/**
 * Allows modules to alter the volume that has been determined for an order.
 *
 * @param &$volume
 *   A volume value array with keys representing the total 'volume' of the order
 *   in the 'unit' specified or NULL if no volume has yet been determined.
 * @param $order
 *   The order object whose volume is being calculated.
 * @param $unit
 *   The unit of measurement whose corresponding cubic unit will be used for the
 *   returned volume of the order.
 *
 * @see commerce_physical_order_volume()
 */
function hook_commerce_stacking_dimensions_order_volume_alter(&$volume, $order, $unit) {
  // No example.
}
