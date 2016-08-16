<?php

namespace Drupal\tax_by_vocabulary\Tests;

use Drupal\simpletest\WebTestBase;
use Drupal\Core\Entity\EntityManager;

/**
 * Provides automated tests for the tax_by_vocabulary module.
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
      'name' => "tax_by_vocabulary TaxByVocabulary's controller functionality",
      'description' => 'Test Unit for module tax_by_vocabulary and controller TaxByVocabulary.',
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
   * Tests tax_by_vocabulary functionality.
   */
  public function testTaxByVocabulary() {
    // Check that the basic functions of module tax_by_vocabulary.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
