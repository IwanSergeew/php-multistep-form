
# PHP Multistep Form Class

## Usage/Examples

In the controller:
```php
<?php
    include_once 'classes/FormSteps.php';
    $step = $_GET['step'] ?? 1;
    $steps = new FormSteps($step, 5, './form_steps'); // (current step, total steps, path to form files)
?>
```
In the view:
```php
<body>
    <?php $steps->stepsHeadHtml(); ?>
    <?php $steps->getNextStepForm(); ?>
</body>
```

## Screenshots

![App Screenshot](https://gcdnb.pbrd.co/images/nv7LzlETCiZC.png?o=1)

