# PHP Average Calculator with Robust Error Handling

This PHP script demonstrates a function designed to calculate the average of a numerical array.  The function incorporates essential error handling to gracefully manage edge cases, such as empty arrays and non-numeric input.

## Function: `calculate_average()`

The `calculate_average()` function takes a single argument:

* `$numbers`: An array of numbers.

The function returns the average of the numbers in the array. It handles the following cases:

1. **Empty Array:** If the input array is empty, the function returns 0 to avoid division by zero errors.
2. **Non-numeric Values:** The function now checks for non-numeric values in the array. If non-numeric values are present, it will issue a warning and return NAN. 

## Usage

The script includes several examples to illustrate the function's behavior with various inputs, including an empty array and an array containing both numeric and non-numeric values. 

## How to Use

1. Save the code as `bug.php`
2. Run the script from your command line using `php bug.php`

## Improvements in bugSolution.php
The `bugSolution.php` demonstrates improved error handling using `is_numeric()` to explicitly check for numeric values before performing the calculation, preventing unexpected results and warnings from non-numeric inputs. 