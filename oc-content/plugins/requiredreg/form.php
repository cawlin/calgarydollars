<div class="form-section">

<p><strong>The following information will be used to deliver your free 20 C$ (Calgary Dollars)</strong></p>

<?php UserForm::location_javascript(); ?>

<label for="country"><?php _e('Country', 'modern') ; ?></label>
<?php UserForm::country_select(osc_get_countries()) ; ?>
<br /><br />

<label for="regionId"><?php _e('Province', 'modern') ; ?></label>
<?php UserForm::region_select(osc_get_regions()) ; ?>
<br /><br />

<label for="city"><?php _e('City', 'modern') ; ?></label>
<?php UserForm::city_select(osc_get_cities()) ; ?>
<br /><br />

<label for="address"><?php _e('Address', 'modern') ; ?></label>
<?php UserForm::address_text() ; ?>

<label for="city_area"><?php _e('Zip Code', 'modern') ; ?></label>
<?php UserForm::city_area_text() ; ?>

<label for="phoneLand"><?php _e('Phone Number', 'modern') ; ?></label>
<?php UserForm::phone_land_text() ; ?>

</div>

<div class="form-section btm">

<p><strong>By Clicking "Create" Below You are Agreeing to the Following Terms and Conditions:</strong></p>

<p>I agree to accept at least 25% Calgary Dollars in exchange for my goods and/or services. For
agreeing to accept and spend Calgary Dollars, I will receive 20 Calgary Dollars (the equivalent
of $20 Canadian currency). Calgary Dollars retains the right to edit listings. Ads can be changed
at any time online. If you require assistance call our office at (403) 270-8002 between the hours of
10:00am - 2:00pm Monday through Friday.</p>

<p>I have viewed/reviewed the Calgary Dollars introductory video and understand the use of
Calgary Dollars as a complementary currency.</p>

</p>Calgary Dollars accepts no responsibility for the availability of goods and/or services.</p>

</div>