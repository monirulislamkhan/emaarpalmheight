<div class="hm_map">
<ul>
<li><input type="checkbox" name="mytype" class="chkbox" id="school"  value="school" /><label for="school">School</label></li>
<li><input type="checkbox" name="mytype" class="chkbox" id="restaurant"  value="restaurant"/><label for="restaurant" >Restaurant</label></li>
<li><input type="checkbox" name="mytype" class="chkbox"  id="hospital"  value="hospital"/><label for="hospital" >Hospital</label></li>
<li><input type="checkbox" name="mytype"  class="chkbox" id="bus_station"  value="bus_station"/><label for="bus_station" >Bus Stopedge</label></li>
<li><input type="checkbox" name="mytype"  class="chkbox" id="park"  value="park"/><label for="park" >Park</label></li>
<li><input type="checkbox" name="mytype"  class="chkbox" id="bank"  value="bank"/><label for="bank" >Bank</label></li>
<li><input type="checkbox" name="mytype"  class="chkbox" id="bar"  value="bar"/><label for="bar" >Bar</label></li>
<li><input type="checkbox" name="mytype"  class="chkbox" id="movie_theater"  value="movie_theater"/><label for="movie_theater" >Movie Theater</label></li>
<li><input type="checkbox" name="mytype"  class="chkbox" id="night_club"  value="night_club"/><label for="night_club" >Night Club</label></li>
<li><input type="checkbox" name="mytype"  class="chkbox" id="supermarket"  value="supermarket"/><label for="supermarket" >Super Market</label></li>
<li><input type="checkbox" name="mytype"  class="chkbox" id="gym"  value="gym"/><label for="gym" >Gym</label></li>
<li><input type="checkbox" name="mytype"  class="chkbox" id="atm"  value="atm"/><label for="atm" >ATM</label></li>
</ul>
<input id="address"  type="hidden" value="Emaar Palm Heights Sector 77, Gurgaon" onload="showMap();"/>
<input id="pic"  type="hidden" value="" onload="showMap();"/>

<div id="map"></div>
<input type="text" id="latitude" style="display:none;" placeholder="Latitude"/>
<input type="text" id="longitude" style="display:none;" placeholder="Longitude"/>
<input type="text" id="lat"  value="28.387431" style="display:none;"/>
<input type="text" id="long" value="76.979755" style="display:none;"/>
<input type="button" id="show_btn" value="show  markers" onClick="showMarkers();" style="display:none;" />
<div id="test"></div>
</div>