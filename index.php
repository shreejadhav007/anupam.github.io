<?php include 'header.php';?>




<!-- banner -->
<div class="banner">    	   
    <img src="images/photos/banner.jpg"   class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">One Of The Best hotels in Mahabaleshwar</h1>
                <p class="animated fadeInUp">Most luxurious rooms with the royal treatments and excellent customer service.</p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft">
        <img src="images/photos/img1.jpg" width="100%" hieght="600px">
    </div>
</div>
<div class="col-sm-5 col-md-4">
<h3>Reservation</h3>
    <form role="form" action="emails/roomsbook.php" method="post" class="wowload fadeInRight">
        <div class="form-group">
            <input name="name" type="text" class="form-control"  placeholder="Name">
        </div>
        <div class="form-group">
            <input name="email" type="email" class="form-control"  placeholder="Email">
        </div>
        <div class="form-group">
            <input name="phone" type="Phone" class="form-control"  placeholder="Phone">
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select name="no" class="form-control">
              <option>No. of Rooms</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>        
            <div class="col-xs-6">
            <select name="adult" class="form-control">
              <option>No. of Adult</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="day" id="expiry-month">
                <option>Date</option>
                <option value="03">1</option>
<option value="03">2</option>
<option value="03">3</option>
<option value="03">4</option>
<option value="03">5</option>
<option value="03">6</option>
<option value="03">7</option>
<option value="03">8</option>
<option value="03">9</option>
<option value="03">10</option>
<option value="03">11</option>
<option value="03">12</option>
<option value="03">13</option>
<option value="03">14</option>
<option value="03">15</option>
<option value="03">16</option>
<option value="03">17</option>
<option value="03">18</option>
<option value="03">19</option>
<option value="03">20</option>
<option value="03">21</option>
<option value="03">22</option>
<option value="03">23</option>
<option value="03">24</option>
<option value="03">25</option>
<option value="03">26</option>
<option value="03">27</option>
<option value="03">28</option>
<option value="03">29</option>
<option value="03">30</option>
<option value="03">31</option>

              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="month" id="expiry-month">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
           
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="msg" placeholder="Message" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>

    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->



<!-- services -->
<div  class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div data-aos="fade-in" id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/8.jpg" height="200px" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="images/photos/9.jpg"  height="200px" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/10.jpg"  height="200px" class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/ss1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/ss5.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/ss3.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Tour Packages<a href="tour.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/f2.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  "><img src="images/photos/f4.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  "><img src="images/photos/f5.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Food and Drinks<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->


<?php include 'footer.php';?>