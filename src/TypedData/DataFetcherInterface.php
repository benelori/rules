<?php

/**
 * @file
 * Contains Drupal\rules\TypedData\DataFetcherInterface.
 */

namespace Drupal\rules\TypedData;

use Drupal\Core\TypedData\TypedDataInterface;

/**
 * Interface for the DataFetcher service.
 */
interface DataFetcherInterface {

  /**
   * Fetches data based upon the given property path.
   *
   * @param \Drupal\Core\TypedData\TypedDataInterface $typed_data
   *   The data from which to select a value.
   * @param string $property_path
   *   The property path string, e.g. "uid.entity.mail.value".
   * @param string $langcode
   *   (optional) The language code used to get the argument value if the
   *   argument value should be translated. Defaults to NULL.
   *
   * @return \Drupal\Core\TypedData\TypedDataInterface
   *   The variable wrapped as typed data.
   *
   * @throws \Drupal\Core\TypedData\Exception\MissingDataException
   *   Thrown if the data cannot be fetched due to missing data; e.g., unset
   *   properties or list items.
   * @throws \InvalidArgumentException
   *   Thrown if the given path is not valid for the given data; e.g., a not
   *   existing property is referenced.
   */
  public function fetchByPropertyPath(TypedDataInterface $typed_data, $property_path, $langcode = NULL);

  /**
   * Fetches data based upon the given sub-paths.
   *
   * @param \Drupal\Core\TypedData\TypedDataInterface $typed_data
   *   The data from which to select a value.
   * @param string[] $sub_paths
   *   A list of sub paths; i.e., a property path separated into its parts.
   * @param string $langcode
   *   (optional) The language code used to get the argument value if the
   *   argument value should be translated. Defaults to NULL.
   *
   * @return \Drupal\Core\TypedData\TypedDataInterface
   *   The variable wrapped as typed data.
   *
   * @throws \Drupal\Core\TypedData\Exception\MissingDataException
   *   Thrown if the data cannot be fetched due to missing data; e.g., unset
   *   properties or list items.
   * @throws \InvalidArgumentException
   *   Thrown if the given path is not valid for the given data; e.g., a not
   *   existing property is referenced.
   */
  public function fetchBySubPaths(TypedDataInterface $typed_data, array $sub_paths, $langcode = NULL);

}