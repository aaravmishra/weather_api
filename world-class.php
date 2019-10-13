<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>



<script>
$(document.ready(function() {

$.get("http://api.timezonedb.com/v2.1/get-time-zone?key=N1YS43DPK4Z8&format=json&by=zone&zone=America/Chicago").done(function(jason){

            console.log(jason);

});


                });
</script>