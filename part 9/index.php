<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Vue.js Tutorials</title>
  </head>
  <body>
  <div id="app">
  <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="lead-form">
              <h1 class="text-center">Fill Out This Form</h1>
              <hr />
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Starting Zip" v-model="startingZip">
                  <span class="city-span">{{startingCity}}</span>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Ending Zip" v-model="endingZip">
                  <span class="city-span">{{endingCity}}</span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-primary btn-block" id="submit-form">Submit</button>
                </div>
              </div>
            </div><!-- end of .lead-form -->
          </div> <!-- end of .col-md-6.col-md-offset-3 -->
        </div> <!-- end of .row -->
</div> <!-- end of .container -->
</div>

   
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
<script>
var app = new Vue({
    el: "#app",
    data: {
        startingZip: "",
        startingCity: "",
        endingZip: "",
        endingCity: ""
    },
    watch: {
      startingZip: function() {
        this.startingCity = ""
        if(this.startingZip.length == 5) {
          // call API method
          this.lookupStartingZip()
        }
      },
      endingZip: function() {
        this.endingCity = ""
        if(this.endingZip.length == 5) {
          // call API method
          this.lookupEndingZip()
        }
      }
    },
    methods: {
      lookupStartingZip: function() {
        var app = this
        app.startingCity = "Searching..."
        axios.get("http://ziptasticapi.com/" + app.startingZip).then(function(response){
          app.startingCity = response.data.city + ", " + response.data.state
        }).catch(function(error) {
          app.startingCity = "Invalid Zipcode"
        })
      },
      lookupEndingZip: function() {
        var app = this
        app.endingCity = "Searching..."
        axios.get("http://ziptasticapi.com/" + app.endingZip).then(function(response){
          app.endingCity = response.data.city + ", " + response.data.state
        }).catch(function(error) {
          app.endingCity = "Invalid Zipcode"
        })
      }
    }
      
   

})

</script>

  </body>
</html>