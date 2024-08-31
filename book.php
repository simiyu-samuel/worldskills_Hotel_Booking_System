<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
   <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
   <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="main">
      <a href="home.php" class="btn btn-danger" style="position: absolute; left: 30px;">Go to home</a>
        <h1>RESERVATION</h1>
        <form action="booking.php" method="POST" class="reservation">
            <div class="info">
                <div class="left">
                  <?php 
                      $id = 4;
                      $roomno = 4;

                  ?>
                  <input type="hidden" value="<?= $id ?>" name="id">
                  <input type="hidden" value="<?= $roomno ?>" name="roomno">
                    <input type="text" name="fullname" placeholder="Enter fullname" required>
                    <input type="email" name="email" placeholder="Enter Email" required>
                    <select required name="country">
                       <option default>Kenya</option>
                       <option >Burundi</option>
                       <option >Tanzania</option>
                    </select>
                    <input type="text" name="phone"id="phone" placeholder="Enter Phone no" required>
                </div>
                <div class="right">
                  <select required name="roomtype">
                    <option default>Type of room</option>
                    <option >luxury room</option>
                    <option >guest room</option>
                    <option >double room</option>
                    <option >single room</option>
                  </select>
                  <select required name="bedding">
                    <option default>Bedding type</option>
                    <option >one bed</option>
                    <option >two bed</option>
                  </select>
                  <select required name="no_of_rooms">
                    <option default>no of room</option>
                    <option >1</option>
                    <option >2</option>
                    <option >3</option>
                    <option >4</option>
                  </select>
                  <select name="meal">
                    <option default>meal</option>
                    <option >ugali</option>
                    <option >meat</option>
                    <option >chips</option>
                  </select>
                  <select name="facility">
                    <option default>Facility (optional)</option>
                    <option >Gym</option>
                    <option >Swimming pool</option>
                    <option >SPA</option>
                    <option >Restaurant</option>
                  </select>
                  <div class="check">
                <div class="checkin">
                    <p>Check in</p>
                    <input type="date" name="checkin">
                </div>
                <div class="checkout">
                    <p>Check out</p>
                    <input type="date" name="checkout">
                </div>
                </div>
                </div>
                
            </div>
            <button type="submit" class="btn btn-primary" name="book">Submit</button>
            
        </form>
    </div>
</body>
</html>