```php
function processData(array $data): array {
  // ... some code to process the data ...
  if (empty($data)) {
    return []; // Return an empty array if input is empty
  }

  foreach ($data as $key => $value) {
    // ... processing logic ...
    if (is_string($value)) {
      $data[$key] = strtolower($value);
    }
    // ... more processing ...
  }
  return $data;
}

$data = ['apple', 'Banana', 'ORANGE'];
$result = processData($data);
print_r($result); // Output: Array ( [0] => apple [1] => banana [2] => orange )

$emptyData = [];
$emptyResult = processData($emptyData);
print_r($emptyResult); //Output: Array ( )

```