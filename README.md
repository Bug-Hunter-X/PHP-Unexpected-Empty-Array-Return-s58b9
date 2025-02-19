# PHP Unexpected Empty Array Return

This repository demonstrates an uncommon error in PHP related to handling empty arrays as function parameters.  The `bug.php` file contains a function that unexpectedly returns an empty array when given an empty array as input, even though it's designed to handle such cases. The `bugSolution.php` file provides a corrected version.

## Bug Description

The `processData` function aims to process an array, converting string values to lowercase. However, when provided with an empty array, it returns an empty array, which isn't always the expected behavior.  The issue is subtle and might be overlooked in larger codebases.