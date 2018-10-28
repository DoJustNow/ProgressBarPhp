# ProgressBarPhp
Progress Bar for PHP 

##### Usage example:

```php
<?php
$finish = 1000;
for($i = 0; $i < $finish; $i++)
{
  echo "Current iteration: $i\n"; 
  progressBar($i, $finish);
}
```
##### Example result:

![Image alt](https://github.com/DoJustNow/ProgressBarPhp/blob/master/progressBar.gif?raw=true)
