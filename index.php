    <?php
    $pageTitle = "Welcome to Elliott's Scouts!";
    $section = "home";
      include("inc/header.php");
     ?>
    <!--Main Content-->
    <div class="container-fluid">
      <img class="img-responsive lamoni-scouts" src="img/elliotts_scouts_shoalcreek_revised2.png" alt="Scouts at Shoal Creek"/>
    </div>
  <div class="container">

    <div class="row">
        <div class="col-sm-8">
            <h2 id="boldtxt">Welcome to Elliott's Scouts</h2>
            <h4 id="bold_em">Major Ben Elliott&#39;s Scouts Civil War Re-enactment Unit<br>
                    A Mounted and Dismounted Cavalry Unit</h4>
              <p>Elliott&#39;s Scouts was mustered in 1994 and consists of men, women and family members.
      The name is derived from the actual cavalry scout unit under the famous General Joseph Shelby who never surrendered.
      Our company accurately demonstrates Confederate and Union mounted and dismounted cavalry, Bushwhackers/guerillas, Missouri State Guard and Missouri Enrolled Militia (Union).
      Our dismounted cavalry unit maneuvers and battle as skirmishers and flankers.
      Our mounted Troopers ride in support of our dismounted troopers and as regular cavalry as needed.
      Unlike most re-enactment units who portray a single impression, our unit is very versatile and are prepared for a variety of impressions.
      When the camps are open to the public we will be in living history mode and conduct camp like soldiers in the field  as they did at that time.</p>
              <p>We are dedicated to preserving Civil War history as well as public education of this pivotal point in our State and Country&#39;s history.
      Many of our ancestors fought, struggled and died in America&#39;s War Between the States.  Kansas and Missouri played significant roles.
      The number of men who served from Missouri on the side of the Union was about 110,000 with another 90,000 on the side of the Confederacy.
      In fact, Missouri saw more action than Virginia and West Virginia combined.
      And though our re-enactments are highly entertaining, it is equally important to accurately educate because in the words of the Civil War journalist
      Walt Whitman, &#34;The real war, will never get in the books.&#34;</p>
        <p>We thank you for visiting our site, and your interest in our unit and our events. You will find a wide variety of information about our historical impressions,
      our event schedule, enlisting in the Scouts and Laundresses, etc.  Content on this site will change and be updated, so check back often.
      We are in the process of adding a lot of information, most notably historical information on the four impressions we portray.</p>
        </div>
        <div class="col-sm-4">
            <h2>Company A</h2>
        <a class="btn btn-primary btn-lg btn-block" href="https://melaniegreen19.wixsite.com/elliotts-scouts">Dismounted info</a>
        </div>
        <div class="col-sm-4 compB">
            <h2>Company B</h2>
        <a class="btn btn-primary btn-lg btn-block" href="mounted.php">Mounted info</a>
        </div>
        <div class="col-sm-4 enlistment">
            <h2>Enlistment</h2>
        <p>Interested in joining the scouts? Click and fill out our enlistment form.</p>
        <a class="btn btn-primary btn-lg btn-block" id="modalBtn">Enlistment form</a>
        </div>

<div id="myModal" class="modal">
  <span class="close" title="Close Modal">&times;</span>
<div class="form-container">
<form class="modal-content" action="/action_page.php">

<div class="form-row">
<div class="col-50">
<h3>Billing Address</h3>
<label for="fname"><i class="fa fa-user"></i> Full Name</label>
<input type="text" id="fname" name="firstname" placeholder="John M. Doe">
<label for="email"><i class="fa fa-envelope"></i> Email</label>
<input type="text" id="email" name="email" placeholder="john@example.com">
<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
<input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
<label for="city"><i class="fa fa-institution"></i> City</label>
<input type="text" id="city" name="city" placeholder="New York">

<div class="form-row">
  <div class="col-50">
    <label for="state">State</label>
    <input type="text" id="state" name="state" placeholder="NY">
  </div>
  <div class="col-50">
    <label for="zip">Zip</label>
    <input type="text" id="zip" name="zip" placeholder="10001">
  </div>
</div>
</div>

<div class="col-50">
<h3>Payment</h3>
<label for="fname">Accepted Cards</label>
<div class="icon-container">
  <i class="fa fa-cc-visa" style="color:navy;"></i>
  <i class="fa fa-cc-amex" style="color:blue;"></i>
  <i class="fa fa-cc-mastercard" style="color:red;"></i>
  <i class="fa fa-cc-discover" style="color:orange;"></i>
</div>
<label for="cname">Name on Card</label>
<input type="text" id="cname" name="cardname" placeholder="John More Doe">
<label for="ccnum">Credit card number</label>
<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
<label for="expmonth">Exp Month</label>
<input type="text" id="expmonth" name="expmonth" placeholder="September">

<div class="form-row">
  <div class="col-50">
    <label for="expyear">Exp Year</label>
    <input type="text" id="expyear" name="expyear" placeholder="2018">
  </div>
  <div class="col-50">
    <label for="cvv">CVV</label>
    <input type="text" id="cvv" name="cvv" placeholder="352">
  </div>
</div>
</div>

</div>
<label>
<input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
</label>
<input type="submit" value="Continue to checkout" class="form-btn">
</form>
</div>
</div>
    <!--End Main Content-->
    <?php
      include("inc/footer.php");
     ?>
