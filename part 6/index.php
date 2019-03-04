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
    <h1>Count: {{count}}<h1>
    <button @click="countUp" class="btn btn-primary">Count Up</button>
    <button @click="countDown" class="btn btn-primary">Count Down</button>
    <hr>
    <h1>{{message}}<h1>
    <p>
      Visit: <a :href="url">{{cleanUrl}}</a> 
    </p>
    <input type="text" class="form-control" v-model="url" />
    <button @click="humanizeUrl" class="btn btn-primary">Humanize Me!</button>
</div>

   
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>
var app = new Vue({
    el: "#app",
    data: {
        message: "This is new message",
        count: 0,
        url: "",
        cleanUrl: ""
    },

    methods: {
      countUp: function(){
        this.count += 1
      },
      countDown: function() {
        this.count -= 1
      },
      humanizeUrl: function() {
        this.cleanUrl = this.url.replace(/^https?:\/\//, "").replace(/\/$/, "")
      }
    }


})

</script>

  </body>
</html>