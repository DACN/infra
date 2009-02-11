<html>
<head>
<title>Open Access to State-collected Geodata</title>
<link rel="stylesheet" href="opengeo.css">
</head>
<body>

<div id="container">

<div id="header">
<h1><a href="/">Open Geodata</a></h1>
<p>State-Collected Geographic Data is public property</p>
</div>

<div id="content">
<p class="notes">English | 
<a href="manifesto.it.php">[ Italiano ]</a> | <a href="manifiesto.es.php">[ Espa&ntilde;ol ]</a> </p>

<h1>Open Access to State-Collected Geospatial Data</h1>

<p>We believe that state-collected geodata should be <a href="http://okd.okfn.org/">openly</a> available to citizens.  
Please <a href="#signup"><b>sign up</b></a> below to support this manifesto.</a></p>
<h2>How This Would Work</h2>

<h3>All government-collected geodata should be open, that is, available for free distribution and re-use under a ShareAlike license.</h3>

<p>Geodata is a public good. Open access to it, under a 'Commons' (ShareAlike) license, is the best way to see its full benefits realized by industry and citizens. At the same time such an arrangement, by requiring users to redistribute updates and improvements to the data, promises to deliver more and better data for less.</p>
<p>Related efforts include the <A href="http://urbantapestries.net">Urban Tapestries</a> group's model <a href="http://www.okfn.org/geo/geodata_cc_license_draft.rtf">non-profit open geodata license</a> developed with advice from <a href="http://creativecommons.org.uk/">Creative Commons UK</a>.
This was submitted it to the UK's National Mapping Agency, the <a href="http://www.ordnancesurvey.gov.uk/">Ordnance Survey</a>, as a basis for open collaboration. </p>

<h3>Online mapping projects creating freely reusable geodata should offer a compatible open license.</h3> 

<p>The <a href="http://openstreetmap.org/">OpenStreetmap</a> project offers its growing body of data under an <A href="http://creativecommons.org/licenses/by-sa/2.0/">Attribution-Sharealike</a> license, which allows any kind of re-use of the data providing that derived works are also released into the public domain.</a>

<h3>Common, standard formats for describing and exchanging geodata should be adopted.</h3>

<p>The <a href="http://opengis.org/">Open Geospatial Consortium</a> has created a family of standards for open exchange of geodata via the Internet, and the <a href="http://www.w3.org/RDF/">World Wide Web Consortium</a>'s metadata standards are in general use.</p> 

<h3>Ultimately, all state-collected information should be openly available, in a structured machine-readable format.</h3>

<h2>How This Would Help</h2>

<h3>Open Geodata means better and cheaper geodata.</h3>

<p>When more information producers have the opportunity to contribute timely and accurate geodata, quality improves. When more organisations have the chance to offer spatial information services competitively, prices lower.</p>

<p>Over 50% of UK national mapping data sales are to government
or government-funded organisations; a false economy sending 60M of tax-based revenue back to a government-owned semi-private company.
Ordinary citizens and not-for-profit organisations can't afford
the current monopoly-priced data licenses, and are reduced to supplication.
</p>

<h3>Open geodata would be good for the economy.</h3>

<p>In the United States, national policy places all government-collected geospatial information into the public domain, free of cost and free of restrictions on re-use. This lowers the cost of research and development, and innovation by industry and by individuals creates economic activity.</p>


<h3>Open access to geodata would be good for democracy and citizen engagement</h3>
<p> 75-80% of the information generated by government
has a spatial component. For public sector information to be effectively exploited, it needs to be as widely available as possible. EU Freedom Of Information laws heavily emphasise availability of geographic data<a href="http://europa.eu.int/celex/cgi/sga_rqst?SESS=14772!CTXT=8!UNIQ=9!APPLIC=celexext!FILE=VISU_vitxt_8__1!DGP=0!VI_all0#texte">[2]</a>.</p>

<p>Geographic data underpins civic services developed by non-profit civic information groups, such as <a href="http://writetothem.com/">WriteToThem</a>  
and <a href="http://theyworkforyou.com/">They Work For You</a>. It is indispensible to efforts to analyse public information and make it more available to interested members of the public.</p>

<a name="signup">

<h3>
<?php

$lines = file('signups.txt');
$cur_signups = count($lines);

echo($cur_signups);
?>
 people have signed in support of this statement.</h3>

<p>If you agree with these statements, please <b>sign up</b> to endorse them. We are collecting signatures from spatial data users and GIS software developers worldwide to help demonstrate broad support for open access to geodata policies.</p> 

<p>
  <strong>Due to spam problems this petition has been temporarily disabled. We hope to have it back up very soon in a more robust form. Apologies to those who want to sign up but aren't able to.</strong>
</p>
<form method="post" action="none">
<input type="hidden" name="lang" value="en"/>
<table>
<tr><td>Name:
</td><td>
<input type="text" name="name">
</td></tr>

<tr><td>Email address:
<br/><span class="notes">We won't publish this, but might want to get in touch</span> 
</td><td>
<input type="text" name="mbox">
</td></tr>

<tr><td>
Organisation:
</td><td>
<input type="text" name="org">
</td></tr>

<tr><td>
Web site:
</td><td>
<input type="text" name="url">
</td></tr>

<tr><td>
Country:

</td>
<td>
<select name="country">
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>

<option value="Antarctica">Antarctica</option>
<option value="Antigua, Barbuda">Antigua, Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>

<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>

<option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="British Virgin Islands">British Virgin Islands</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burma">Burma</option>

<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central Africa">Central Africa</option>
<option value="Chad">Chad</option>

<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>

<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Democratic Republic of Congo">Democratic Republic of Congo</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>

<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="FYRO Macedonia">FYRO Macedonia</option>

<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>

<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>

<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>

<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Ivory Coast">Ivory Coast</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>

<option value="Kazachstan">Kazachstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>

<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>

<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Moldova">Moldova</option>

<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>

<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="North Korea">North Korea</option>
<option value="Norway">Norway</option>

<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestine National Authority">Palestine National Authority</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>

<option value="Pitcairn Islands">Pitcairn Islands</option>
<option value="Poland">Poland</option>
<option value="Polynesia">Polynesia</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>

<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome">Sao Tome</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>

<option value="Serbia and Montenegro">Serbia and Montenegro</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>

<option value="South Korea">South Korea</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>

<option value="Syria">Syria</option>
<option value="Tadjikistan">Tadjikistan</option>
<option value="Taiwan">Taiwan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>

<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United States">United States</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands, British">Virgin Islands, British</option>
<option value="Virgin Islands, US">Virgin Islands, US</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>

<option value="Zimbabwe">Zimbabwe</option>
</select>
</td>
</tr>
<tr><td colspan="2">
<input type="submit" value="sign up"/>
</td></tr>
</table>
</form>

<p><a href="signup.php">View the current list of supporters</a></p>

<p>Please add comments and links to the <a href="http://okfn.org/wiki/OpenGeodataManifesto">wiki page about the Open Geodata Manifesto.</a></p>

<p>For background information and links, please visit the <a href="http://okfn.org/wiki/OpenGeoData">Open Geodata</a> pages at the <a href="http://okfn.org/">Open Knowledge Foundation</a> wiki.</p>
</div>


</div>

<div id="menu">
<a href="index.html">Open Geodata</a>
<br/>
<a href="projects.html">Open Mapping Projects</a>
<br/>
<a href="access.html">Open Access Policies</a>
<br/>
<a href="help.html">How You Can Help</a>
<br/>
<a href="http://www.openknowledgefoundation.org/okforums/geodata/">Open Geodata Forum</a>
<br/>
<a href="manifesto.php"><b>Sign the manifesto</b></a>
<br/>
</div>

</div>


</body>
</html>
