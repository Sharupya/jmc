<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .container{
             background-color:lightblue;
         }
         div{
             height : 100px;
             width  : 100px;
         }
         #first{
             background-color: forestgreen;
         }
         #second{
             background-color: greenyellow;
             position: static;/*fixed;/*absolute;*/   /*relative;*/
             left: 100px;
         }
         #third{
             background-color: hotpink;
         }
    </style>
</head>
<body> 
    <section>
        <h1>Learning and climbing position high</h1>
    </section>
        <section class="container">
         <div id="first"></div>
         <div id="second"></div>
         <div id="third"></div>
    </section>
</body>
</html>