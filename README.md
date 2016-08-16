This is a simple module for Drupal 8, and is an example for:

Drupal 7/8
Write a Function to Separate Drupal Taxonomy Terms Output By Vocabulary

How to use:

1. Install module.
2. Create Vocabularies and Taxonomies

If you use DrupalConsole tool, you can run this commands

```
drupal create:vocabularies
drupal create:terms
```
3. Go to the url

```
/separate_tax
```

![Taxonomies by vocabulary](./taxonomiesbyvocabulary.png "Taxonomies by vocabulary")


For Drupal 7, this script can be work fine.

```
<?php

    function separate_tax_by_vocabularies(){
        $items = [];
        $vocabularies = taxonomy_get_vocabularies();

        foreach($vocabularies as $vocabulary){
            $terms = taxonomy_get_tree($vocabulary->vid);
            $taxs = array();

            foreach($terms as $term) {
                $courses[$term->tid] = $term->name;
                $taxs[] = [
                    "id"=> $term->tid,
                    "name" => $term->name,
                ];
            }

            $items[] = [
                "id" => $vocabulary->vid,
                "name" => $vid->name,
                "terms" => $taxs
            ];
        }

        return $items;

    }

?>

```

