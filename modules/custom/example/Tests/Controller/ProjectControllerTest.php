<?php

namespace Drupal\example\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the example module.
 */
class ProjectControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "example ProjectController's controller functionality",
      'description' => 'Test Unit for module example and controller ProjectController.',
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
   * Tests example functionality.
   */
  public function testProjectController() {
    // Check that the basic functions of module example.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
