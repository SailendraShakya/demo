<?php

namespace Drupal\ipsum\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the ipsum module.
 */
class IpsumControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "ipsum IpsumController's controller functionality",
      'description' => 'Test Unit for module ipsum and controller IpsumController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests ipsum functionality.
   */
  public function testIpsumController() {
    // Check that the basic functions of module ipsum.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
