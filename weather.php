<?php include("navigation.php")?>
<style>
    #container{
        background-image: url(" img.jpg ")
    }
    </style>

    <div id="container">
       
        <div class="container"style="text-align:center;margin-top:40px;">
            <h2> Wish the country </h2><br>
            	<form action="get.php" method="GET">
                <input type="text" name="q" class="form-control"  style="width:600px;margin-left:240px;"><br>
                <input type="submit" name="submit" class="btn btn-primary" value="Click to see the result">
            	</form>
			</div><br><br><br><br>


    </div>

</body>

<?php include("footer.php")?>