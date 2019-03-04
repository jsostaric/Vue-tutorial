<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Vue.js Tutorials</title>
  </head>
  <body>
  <div id="app">
    <h1 :title="title">{{message}}<h1>
    <img :src="url" :alt="title" :title="title" />
</div>

   
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>
var app = new Vue({
    el: "#app",
    data: {
        message: "This is new message",
        title: "You loaded page on" + " " + new Date(),
        url: "http://vuejs.org/images/logo.png"
    }

})

</script>

  </body>
</html>