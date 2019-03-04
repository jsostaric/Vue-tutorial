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
  <div id="app" class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Hello {{fullname}}</h1>
        <ul class="text-left">
          <li>First Name: {{first}}</li>
          <li>Last Name: {{last}}</li>
        </ul>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Full Name:</label>
          <input type="text" class="form-control" v-model="fullname" />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>First Name:</label>
          <input type="text" class="form-control" v-model="first" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Last name:</label>
          <input type="text" class="form-control" v-model="last" />
        </div>
      </div>
    </div>
</div>

   
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>
var app = new Vue({
    el: "#app",
    data: {
        message: "This is new message",
        first: '',
        last: ''
    },

    computed: {
      fullname: {
        //getter function
        get: function() {
        return this.first + (this.last ? ' ' + this.last : '')
        },

        // setter function
        set: function(value) {
          var name = value.split(' ')
          this.first = name[0]
          this.last = name.length > 1 ? name[name.length -1] : ''
        }
      }
    }

})

</script>

  </body>
</html>