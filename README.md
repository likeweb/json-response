# json-response
A simple Json Response Class for PHP

## Installation

composer require herrmann/json-response

### Usage

```php
<?php
require_once __DIR__ ."/vendor/autoload.php";

use FroTest\ResponseClass\JsonResponse;

$student = array(
	'name' => 'John Doe',
	'course' => 'Software',
	'level' => '200',
	'collection' => ['book' => 'Intro to UML', 'music' => 'rap']
);

new JsonResponse('ok', '', $student);
```

### Param 1 (Required)

1. success or ok - 200 http status
2. unauthorized - 401 http status
3. exeption - 500 http status

### Param 2 (Optional)
string - the return message, use empty quote if not available

### param 3 (Optional)

Array - Array of Data