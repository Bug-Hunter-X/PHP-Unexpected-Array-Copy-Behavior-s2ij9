```php
function processData(array $data): array {
  // ... some code to process the data ...
  return $data;
}

$myData = [1, 2, 3, 4, 5];
$processedData = processData($myData);

// Unexpected behavior here.  The array is not modified as expected.
// ... further code using $processedData ...
```