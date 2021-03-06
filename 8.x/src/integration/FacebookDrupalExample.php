<?php

/*
 * Copyright (C) 2017-present, Facebook, Inc.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 of the License.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

/**
 * @file
 * Contains \Drupal\official_facebook_pixel
 * \integration\FacebookDrupalExample.
 */

namespace Drupal\official_facebook_pixel\integration;

/**
 * Class FacebookDrupalExample.
 *
 * @package Drupal\official_facebook_pixel\integration
 */

class FacebookDrupalExample extends FacebookDrupalIntegrationBase {
  const TRACKING_NAME = 'example';

  public static function injectPixelCode(array &$page) {
  }
}
