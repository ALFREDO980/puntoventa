<?php
    require_once 'app/config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
        require_once 'app/dependencias.php';
    ?>

    <title>Title</title>
     
  </head>
  <body>

    <?php
        if(isset($_GET['vista'])){
          switch ($_GET['vista']){
            case 'registro':
             require_once 'view/registro.php';
              break;
            case 'login':
              require_once 'view/login.php';
                break;
                case 'principal':
                  require_once 'view/principal.php';
                    break;

              default:
                  echo 'error 404';
                  breack;
          }
        }else{
          require_once 'view/login.php';
        }

      ?>
    
  </body>
</html>