<?php
echo "Hello world" . PHP_EOL;

$env_array = getenv();

echo "The list of environment variables with values are :" . PHP_EOL;

foreach ($env_array as $key=>$value)
{
    echo "$key => $value" . PHP_EOL;
}
