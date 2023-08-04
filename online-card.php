<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomos Watch</title>
    <link rel="stylesheet" href="online-card.css">

    <!-- Bootstrap CSS -->
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">

        <div class="card">
            <div id="shopping">
                <i class="fas fa-cart-plus"><sup id="items-added"></sup></i>
            </div>
            <div class="images">
                <h2>NOMOS LUX Glashütte</h2>
                <div class="slider"><img id="big-image" src="images/Grains.jpg" alt=""></div>
                <div id="img-slider" class="img-slider">
                    <div class="imgs"><img id="Nomos1" src="images/Nomos1.webp" alt=""></div>
                    <div class="imgs"><img id="Nomos2" src="images/Nomos2.webp" alt=""></div>
                    <div class="imgs"><img id="Nomos3" src="images/Nomos3.webp" alt=""></div>
                </div>
            </div>
            <div class="infos">
                <h1>Producr Name</h1>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">
                    <h3>2100$</h3>
                    <h3>2350$</h3>
                </div>
                
                <div class="quantity">
                    <h3>QUANTITY</h3>
                <input type="number" name="items" id="counter" min="1" value="1">
               </div>
                <div class="buttons">
                    <button id="add-to-cart"><i class="fas fa-shopping-cart"></i>ADD TO CART</button>
                    <button>BUY NOW</button>
                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>         