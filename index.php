<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            *{
                padding:0;margin:0;border:0;
            }

            html, body {
                width: 100%;
                height: 100%;
            }

            @keyframes load {
                to{transform:rotate(360deg)} /* makes the image rotate */
            }

            .box-load {               /* this id lets de image centralized */
                position: absolute;
                width: 100%;
                height: 100%;
                /* background-color: rebeccapurple;  */
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .pre {
                width: 80px;
                height: 80px;
                background-image: url("img/blue_loading.png");
                background-position: center;
                background-size: contain;
                animation: load 2s infinite linear;
            }

            .content {display: none;}
        </style>
        <script>
            function loading(){
                document.getElementsByClassName('box-load')[0].style.display = "none"   // hides the page while body's page is loading 
                document.getElementsByClassName('content')[0].style.display = "block"   // shows page's content when loading is finished
            }
        </script>
        <title>Document</title>
    </head>
    <body onload="loading()">
        <div class="box-load">
            <div class="pre"></div>
        </div>
        <div class="content">
            <h1>teste</h1>
            <?php 
                //uncomment the test below to see the animation (be fast or it'll gonna break your browser lol)
                // for ($i=-1; $i>= -2; $i++){   
                //     echo $i;
                // }
            ?>
        </div>
    </body>
</html>