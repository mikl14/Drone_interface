<html>
 <head>
  <title>AI</title>
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="style.css"  type="text/css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

 </head>

 <body>
    <div id = "main">
      <canvas id='chart'>Тут график
         <script>
            var chart = document.getElementById("chart");
            chart.width = (document.getElementById("chart")).getBoundingClientRect().width;
            chart.height = (document.getElementById("chart")).getBoundingClientRect().height;
           var ctx = chart.getContext('2d');
           var width_rect = 100;
           var height_rect = 100;
           // ctx.strokeStyle = 'rgba(255, 255, 255, 1) ';

           ctx.rect((width/2)-width_rect, (height_rect/2)-height_rect, width_rect, height_rect);
           ctx.stroke();
        </script>

      </canvas>
    </div>

    <div id = "controls">
      <select id="select_room">

        <option value="1">Room1</option>

        <option value="2">Room2</option>

        <option value="3">Room3</option>

        <option value="4">Room4</option>

        <option value="5">Room5</option>

</select>
    </div>
 </body>
</html>