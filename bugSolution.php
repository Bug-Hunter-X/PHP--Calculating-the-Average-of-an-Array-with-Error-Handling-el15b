```php
<?php
function calculate_average($numbers) {
  if (empty($numbers)) {
    return 0; // Handle empty array
  }

  $sum = 0;
  $count = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
      $count++;
    } else {
      trigger_error('Warning: Non-numeric value encountered in array.', E_USER_WARNING);
      return NAN; // Return NAN for non-numeric values
    }
  }

  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: Average: 15

$numbers = [];
$average = calculate_average($numbers); // returns 0
echo "Average: " . $average; // Output: Average: 0

$numbers = [10,20,30,'a'];
$average = calculate_average($numbers); // returns NAN with warning
echo "Average: " . $average; // Output: Average: NAN
?>
```