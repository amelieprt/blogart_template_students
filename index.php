<?php require_once 'header.php';
sql_connect();

//print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
    <div class="slideshow">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img class="slide" src="https://thumbs.dreamstime.com/z/gar%C3%A7on-de-livraison-l-adolescence-pizza-faisant-un-geste-correct-107961743.jpg" style="width:100% ;
  height: 714px;">
                <div class="text">PIZZA</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img class="slide" src="https://st.depositphotos.com/1008939/1330/i/450/depositphotos_13302014-stock-photo-gorging-of-pasta.jpg" style="width:100%; height: 714px;">
                <div class="text">PASTA</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img class="slide" src="https://previews.123rf.com/images/melnyk58/melnyk581909/melnyk58190904773/130774643-young-sad-man-opening-the-biggest-postal-package-isolated-on-white-dissapointed-male-model-on-top-of.jpg" style="width:100%; 
  height: 714px;">
                <div class="text">L'aéroport et Bordeaux
                    centre, bientôt réunis!</div>
            </div>

        </div>
        <br>

        <div style="text-align:center; 
transform: translate(0px,-50px);">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

    </div>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
        }
    </script>

</body>

</html>











<?php require_once 'footer.php'; ?>