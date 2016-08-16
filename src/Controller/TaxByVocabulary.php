<?php

namespace Drupal\edatawordl_test\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityManager;

/**
 * Class TaxByVocabulary.
 *
 * @package Drupal\edatawordl_test\Controller
 */
class TaxByVocabulary extends ControllerBase {

  /**
   * Drupal\Core\Entity\EntityManager definition.
   *
   * @var \Drupal\Core\Entity\EntityManager
   */
  protected $entityManager;

  /**
   * Drupal\Core\Entity\EntityManager definition.
   *
   * @var Drupal\Core\Entity\EntityManager
   */
  protected $storageTax;


  /**
   * {@inheritdoc}
   */
  public function __construct(EntityManager $entity_manager) {
    $this->entityManager = $entity_manager;
    $this->storageTax = $entity_manager->getStorage('taxonomy_term');
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.manager')
    );
  }

  /**
   * Separatetax.
   *
   * @return string
   *   Return Hello string.
   */
  public function SeparateTax() {
//    return [
//      '#type' => 'markup',
//      '#markup' => $this->t('Implement method: SeparateTax')
//    ];

    $build = [
        '#theme' => 'taxbyvocabulary',
        '#attributes' => [],
        '#items' => $this->buildItems(),
        '#count_items' => 0,
        '#cache' => [
            'max-age' => 0
        ]
    ];

    return $build;
  }

  /**
   * @return array $buildItems
   */
  protected function buildItems()
  {
    //
  }

}
