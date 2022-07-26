<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- TAILWIND 3.1 -->
  <script src="assets/js/tw.js"></script>
  <!-- TAILWIND CONFIG -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#da373d',
          }
        }
      }
    }
  </script>
  <!-- CUSTOM STYLING -->
  <style type="text/tailwindcss">
    @layer components {
      .btn-primary {
        @apply py-2 px-4 rounded-sm bg-primary hover:bg-blue-700 text-white;
      }
    }
    /* @layer utilities { plain css } */
  </style>
  <title><?= $title ?></title>
</head>
<body>
<?= $content ?>
</body>
</html>