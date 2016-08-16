<?php

namespace Drupal\tax_by_vocabulary\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityManager;

/**
 * Class TaxByVocabulary.
 *
 * @package Drupal\tax_by_vocabulary\Controller
 */
class TaxByVocabulary extends ControllerBase {

  /**
   * Drupal\Core\Entity\EntityManager definition.
   *
   * @var \Drupal\Core\Entity\EntityManager
   */
  protected $entityManager;

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
    $items = [];

    $vids = \Drupal\taxonomy\Entity\Vocabulary::loadMultiple();

    foreach ($vids as $vid) {

      $terms = $this->storageTax->loadTree($vid->id(),0,null,TRUE);
      $taxs = [];

      foreach($terms as $term) {
        $taxs[] = [
            "id"=> $term->id(),
            "name" => $term->getName(),
        ];
      }

      $items[] = [
          "id" => $vid->id(),
          "name" => $vid->label(),
          "terms" => $taxs
      ];
    }

    return $items;

  }




}
