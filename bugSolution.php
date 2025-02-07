```php
function processData(array &$data): array {
  // ... some code to process the data ...
  return $data;
}

$myData = [1, 2, 3, 4, 5];
$processedData = processData($myData);

// Now the changes are reflected in $myData
// ... further code using $myData (and $processedData) ...
```