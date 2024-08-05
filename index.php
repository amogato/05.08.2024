<?php
  if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
      case 'info':
        phpinfo(); 
        exit;
      break;
    }
  }

  //Listamos o diretório e removemos os pontos da lista
$listDiretorio = array_diff(scandir('/laragon\/www'), ['.', '..']);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Laragon</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .opt {
                margin-top: 30px;
            }

            .opt a {
              text-decoration: none;
              font-size: 150%;
            }
            
            a:hover {
              color: red;
            }

            .projetos{
              font-size: 100%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title" title="Laragon">Laragon</div>
     
                <div class="info"><br />
                      <?php print($_SERVER['SERVER_SOFTWARE']); ?><br />
                      PHP version: <?php print phpversion(); ?>   <span><a title="phpinfo()" href="/?q=info">info</a></span><br />
                      Document Root: <?php print ($_SERVER['DOCUMENT_ROOT']); ?><br />

                </div>
                <div class="opt">
                  <div><a title="Getting Started" href="https://laragon.org/docs">Getting Started</a></div>
                </div>
                <hr>
                <div class="opt">
                  <div><h1>Projetos</h1></div>
                </div>
                <div class="opt">
                  <?php  
                      foreach($listDiretorio as $diretorio){
                        if(is_dir('/laragon\/www\/' . $diretorio)){
                          echo "<div><a style='font-size:100%' href='http://$diretorio.local'>$diretorio.local</a></div>";
                        }
                      }

                  ?>
                  
                </div>
            </div>

        </div>
    </body>
</html>