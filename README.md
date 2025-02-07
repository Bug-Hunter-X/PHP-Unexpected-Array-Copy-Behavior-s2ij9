# PHP Unexpected Array Copy Behavior

This repository demonstrates a subtle bug in PHP where a function unexpectedly returns a copy of an array instead of modifying the original array in place, as might be intended. This can be especially problematic if you're not aware that pass-by-value is the default for arrays. This example highlights this behavior and provides a solution.

## The Bug
The bug lies in the `processData` function.  Even though the function seems to modify the array, the changes are not reflected in the original array due to PHP's pass-by-value array handling. The solution will show a way to handle this issue effectively.