<!-- uncomment those fields you want to use, uncomment next line if you want
to use drop-down menus for location -->

<!-- <label for="user_type"><?php _e('User type', 'modern') ; ?></label>
<?php UserForm::is_company_select() ; ?>
<br /> -->

<!-- <label for="phoneMobile"><?php _e('Cell phone', 'modern') ; ?></label>
<?php UserForm::mobile_text() ; ?>
<br /> -->

<!--<label for="country"><?php _e('Country', 'modern') ; ?> *</label>
<?php UserForm::country_select(osc_get_countries()) ; ?>
<br />-->

<!--<label for="region"><?php _e('Region', 'modern') ; ?> *</label>
<?php UserForm::region_select(array()) ; ?>
<br />-->

<!--<label for="city_area"><?php _e('City area', 'modern') ; ?></label>
<?php UserForm::city_area_text() ; ?>
<br />-->

<!-- <label for="webSite"><?php _e('Website', 'modern') ; ?></label>
<?php UserForm::website_text() ; ?>
<br /> -->

<div class="form-section">

<p><strong>The following information will be used to help us deliver your free 20 Calgary Dollars</strong></p>

<?php UserForm::location_javascript(); ?>

<label for="city"><?php _e('City', 'modern') ; ?></label>
<?php UserForm::city_select(osc_get_cities()) ; ?>
<br />
<br />

<label for="address"><?php _e('Address', 'modern') ; ?></label>
<?php UserForm::address_text() ; ?>
<br />

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

<script>
    $(document).ready(function(){

        $("#s_phone_land").rules("add", {required: true, messages: { required: "phone number is required" }});
        $("#city").rules("add", {required: true, messages: { required: "City is required" }});
       	/*$("#s_phone_mobile").rules("add", {required: true, messages: { required: "Mobile phone is required" }});*/
        /*$("#countryId").rules("add", {required: true, messages: { required: "Country is required" }});*/
        /*$("#region").rules("add", {required: true, messages: { required: "Region is required" }});*/
        /*$("#cityArea").rules("add", {required: true, messages: { required: "City area is required" }});*/
        /* $("#s_website").rules("add", {required: true, messages: { required: "Website is required" }});*/
    }); 
</Script>