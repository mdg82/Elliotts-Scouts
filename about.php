<?php
$pageTitle = "About Elliott's Scouts";
$section = "about";
include("inc/header.php"); ?>
        <div class="container">
        <div class="row">
        <div class="col-sm-8">
            <h2 id="boldtxt">About Elliott's Scouts</h2>
                <p>Elliott&#39;s Scouts was mustered in 1994 and consists of men, women and family members.
                    The name is derived from the actual cavalry scout unit under the famous General Joseph Shelby
                    who never surrendered. Our company accurately demonstrates Confederate and Union mounted and dismounted cavalry, Bushwhackers/guerillas,
                    Missouri State Guard and Missouri Enrolled Militia (Union). Our dismounted cavalry unit maneuvers and battle as skirmishers and flankers.
                    Our mounted Troopers ride in support of our dismounted troopers and as regular cavalry as needed. Unlike most re-enactment units who portray
                    a single impression, our unit is very versatile and are prepared for a variety of impressions. When the camps are open to the public we will
                    be in living history mode and conduct camp like soldiers in the field as they did at that time.

                <p><strong>Becoming a member of the Scouts offers&#133;</strong></p>

                <p><strong>Variety-</strong>Our diverse impressions offer you experience in a wide variety of Civil War life and battle.</p>
                <p><strong>Tactics-</strong>This unit does a lot of ambushes, raids, skirmishing and flanking.  For example, as Bushwhackers, this unit is
                asked every year to conduct raids on the Mahaffie House in Olathe for the general public.</p>
                <p><strong>Historical Correctness-</strong>Our unit possesses and exhibits a great deal of knowledge regarding the Western Theater/Missouri region
                of the Civil War.  Our weapons, clothing and encampments reflect this as well.</p>
                <p><strong>Expand Your Knowledge-</strong>Our members are continually researching and supplementing their knowledge of the unique and relatively
                unknown aspects of the Civil War in Western Missouri.  Missouri was a hotbed of activity and there is a good chance something took place on or
                close to where you are standing or where you live.</p>
                <p><strong>Help Keep History Alive-</strong>Our unit will do talks at schools, support great Civil War organizations like Friends of Lone Jack and
                the Bushwhacker Museum as well as our re-enactments and living history.  Our unit has also been asked to help with KCPT documentaries and was
                used extensively in the Missouri-based Civil War Hollywood movie, Ride With The Devil, (starring Toby Maguire of Spiderman.)</p>
                <p><strong>Family-Oriented-</strong>There is something for everyone and all are encouraged and welcome.</p>

                <p>You must be 16 years of age or older to join Elliott's Scouts Military & Laundress unit. Anyone under the age of 16 must join with a parent or
                guardian 21 or older. Parent or guardian will be present and responsible for their troopers or laundresses under the age of 16 at events.
                Individual dues are $15 a year and family dues are $20 a year.  We'll train the right recruits.</p>

                <p>New Mounted Recruits must pass a horsemanship and riding competency test to demonstrate command of your horse and your riding abilities. If you
                are a novice rider and want to learn, we will train you if you are committed to putting in the time it takes to get up to speed.</p>
        </div>
        <div class="col-sm-4">
            <h2>Enlistment</h2>
           <p>Interested in joining the scouts? Click and fill out our enlistment form.</p>
           <a class="btn btn-primary btn-lg btn-block" onclick="modalButton()">Enlistment form</a>
        </div>
        <div class="col-sm-4 hidden-xs">
            <img class="img-responsive volunteers" src="img/volunteers.png" alt="Volunteers"/>
        </div>
        <div class="col-sm-4 hidden-xs">
            <img class="img-responsive riders" src="img/riders_wanted2.png" alt="Riders wanted"/>
        </div>
      </div>
      <div id="myModal" class="modal">
        <span class="close" onclick="closeButton()" title="Close Modal">&times;</span>
      <div class="form-container">
      <form class="modal-content" method="post" name="enlistmentform" action="enlistment-form.php">

      <div class="form-row">
      <div class="col-50">
      <h3>Enlistment Form</h3>
      <label for="fname">Full Name</label>
      <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="john@example.com">
      <div class="form-row">
      <div class="col-50">
        <label for="cellPhone">Cell Phone</label>
        <input type="tel" id="cellPhone" name="cellPhone" placeholder="816-555-5555">
      </div>
      <div class="col-50">
        <label for="workPhone">Work Phone</label>
        <input type="tel" id="workPhone" name="workPhone" placeholder="816-555-5555">
      </div>
      </div>
      <label for="adr">Address</label>
      <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
      <label for="city">City</label>
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
        <h3>Additional Info</h3>
      <label for="cavUnit">Dismounted or Mounted</label>
      <input type="text" id="cavUnit" name="cavUnit" placeholder="Dismounted or Mounted">
      <label for="ownHorse">If Mounted, do you own a horse?</label>
      <input type="text" id="ownHorse" name="ownHorse">
      <label for="ownTrailer">If Mounted, do you own a trailer?</label>
      <input type="text" id="ownTrailer" name="ownTrailer">
      <label for="familyComment">Spouse and/or children wanting to join:</label>
      <textarea name="message" rows="5" cols="50" <textarea name="message" rows="5" cols="50" placeholder="Spouse/children/children ages/etc"></textarea>

      <div class="form-row">
        <div class="col-50">
          <a class="btn btn-primary btn-md btn-block" href="enlistment-form.pdf">PDF version</a>
        </div>
        <div class="col-50">
          <a class="btn btn-primary btn-md btn-block" href="enlistment-form.docx">Microsoft Word version</a>
        </div>
      </div>
      </div>

      </div>
      <input type="submit" value="Submit" class="form-btn">
      </form>
      </div>
      </div>
<?php
include("inc/footer.php"); ?>
