<?php

namespace Drupal\edatawordl_test\Tests;

use Drupal\simpletest\WebTestBase;
use Drupal\Core\Entity\EntityManager;

/**
 * Provides automated tests for the edatawordl_test module.
 */
class TaxByVocabularyTest extends WebTestBase {

  /**
   * Drupal\Core\Entity\EntityManager definition.
   *
   * @var \Drupal\Core\Entity\EntityManager
   */
  protected $entityManager;

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "edatawordl_test TaxByVocabulary's controller functionality",
      'description' => 'Test Unit for module edatawordl_test and controller TaxByVocabulary.',
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
   * Tests edatawordl_test functionality.
   */
  public function testTaxByVocabulary() {
    // Check that the basic functions of module edatawordl_test.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
