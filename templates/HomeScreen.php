<?php $title = "Accueil"; ?>
<?php ob_start(); ?>

<div class="min-h-screen w-full grid place-items-center">
  <div class="flex flex-col items-center space-y-4">
    <h1 class="text-red-600 ">Home screen made new !</h1>
    <button class="btn-primary">Click me!</button>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('templates/_layout.php'); ?>