<html>
 <head>
  <title>AI</title>
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="style.css"  type="text/css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  
  <script>
            var example = document.getElementById("example"),
          ctx     = example.getContext('2d');
            
            ctx.strokeRect(15, 15, 266, 266);
            ctx.strokeRect(18, 18, 260, 260);
            ctx.fillRect(20, 20, 256, 256);
            for (i = 0; i < 8; i += 2)
                for (j = 0; j < 8; j += 2) {
                    ctx.clearRect(20 + i * 32, 20 + j * 32, 32, 32);
                    ctx.clearRect(20 + (i + 1) * 32, 20 + (j + 1) * 32, 32, 32);
                }
        </script>

 </head>

 <body>
    <div id = "main">
      <canvas id='chart'>Тут график

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