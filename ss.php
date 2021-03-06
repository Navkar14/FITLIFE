<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Responsive CSS Image Slider</title>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="css/ss.css"> -->
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; }
div#slider { overflow: hidden; }
div#slider figure img { width: 20%; float: left; height: 500px;}
div#slider figure {
  position: relative;
  width: 500%;

  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite;
}
img {
  width: auto;
}
    </style>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

<div id="slider">
<figure>
<img src="img/ss1.jpg" width="" alt>
<img src="img/paris1.jpg" alt>
<img src="img/mumbai1.jpg" alt>
<img src="img/mumbai.png" alt>

</figure>
</div>
</body>

</html>
