<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="checkoutprocess.php" >
              <table class="second_step" align="center" width="99%">
               
                 <tr>
                     <td>First Name</td>
                        <td>:</td>
                        <td><input type="text" name="customer_first_name" value="" required="required"/></td>
                        <td>Address1</td>
                        <td>:</td>
                        <td><input type="text" name="customer_address1" value="" required="required"/></td>
                    </tr>
                    <tr>
                     <td>Last Name</td>
                        <td>:</td>
                        <td><input type="text" name="customer_last_name" value="" required="required"/></td>
                        <td>City</td>
                        <td>:</td>
                        <td><input type="text" name="customer_city" value="" required="required"/></td>
                    </tr>
                    <tr>
                     <td>Credit card type</td>
                        <td>:</td>
                        <td>
                            <select name="customer_credit_card_type" style="width:232px">
                             <option value="visa">Visa</option>
                                <option value="master_card">Master Card</option>
                                <option value="discocer">Discover</option>
                                <option value="visa">Visa</option>
                            </select>
                        </td>
                        
                        <td>Zip</td>
                        <td>:</td>
                        <td><input type="text" name="customer_zip" value="" required="required"/></td>
                    </tr>
                    <tr>
                     <td>Credit Card No</td>
                        <td>:</td>
                        <td><input type="text" name="customer_credit_card_number" value="" required="required"/></td>
                        <td>State</td>
                        <td>:</td>
                        <td ><input type="text" name="customer_state" value="" required="required"/>( State iso code)</td>
                       
                    </tr>
                 <tr>
                     <td>Expiration Date</td>
                        <td>:</td>
                        <td>
                         <select name="cc_expiration_month" style="width:96px;">
                             <option value="1">1</option>
                                                                 <option value="2">2</option>
                                                                 <option value="3">3</option>
                                                                 <option value="4">4</option>
                                                                 <option value="5">5</option>
                                                                 <option value="6">6</option>
                                                                 <option value="7">7</option>
                                                                 <option value="8">8</option>
                                                                 <option value="9">9</option>
                                                                 <option value="10">10</option>
                                                                 <option value="11">11</option>
                                                                 <option value="12">12</option>
                                                            </select>
                            <select name="cc_expiration_year" style="width: 96px; margin-left: 10px;">
                             <option value="2012">2012</option>
                                                                 <option value="2013">2013</option>
                                                                 <option value="2014">2014</option>
                                                                 <option value="2015">2015</option>
                                                                 <option value="2016">2016</option>
                                                                 <option value="2017">2017</option>
                                                                 <option value="2018">2018</option>
                                                                 <option value="2019">2019</option>
                                                                 <option value="2020">2020</option>
                                                            </select>
                        </td>
                         <td>Country</td>
                        <td>:</td>
                        <td>
                         <select name="customer_country" required="required" style="width:232px">
                                                                        <option value="IN">India</option>
                             <option value="GB">United Kingdom</option>
                                                             <option value="US">United States</option>
                                                            
                                                             <option value="ES">Spain</option>
                                                             <option value="LK">Sri Lanka</option>
                                                            
                                                             <option value="TH">Thailand</option>
                                                            
                                                             <option value="UG">Uganda</option>
                                                             <option value="UA">Ukraine</option>
                                                             <option value="AE">United Arab Emirates</option>
                                                            
                                                             <option value="ZM">Zambia</option>
                                                             <option value="ZW">Zimbabwe</option>
                                                            </select>
                        </td>
                    </tr>
                 <tr>
                     <td>Card Varification No</td>
                        <td>:</td>
                        <td><input type="text" name="cc_cvv2_number" value="" required="required"/></td>
                        <td>Price </td>
                        <td>:</td>
                        <td>
                         <input type="text" name="example_payment_amuont" value="50" />
                        </td>
                    </tr>
                    <tr>
                    
                        <td colspan="6" align="center">
                         <input type="submit" name="submit" value="Submit" required="required"/>
                        </td>
                    </tr>
                
                
                </table>
                </form>

<div>
<h2>Demo info for sandbox testing</h2>
<table>
    <tr>
        <td>First Name</td>
        <td>:</td>
        <td>Sachin</td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td>:</td>
        <td>Tendulkar</td>
    </tr>
    <tr>
        <td>Card Type</td>
        <td>:</td>
        <td>visa</td>
    </tr>
    <tr>
        <td>Card Number</td>
        <td>:</td>
        <td>4222222222222</td>
    </tr>
    <tr>
        <td>Expiration Date</td>
        <td>:</td>
        <td>10 2014</td>
    </tr>
     <tr>
        <td>Card Verification Number</td>
        <td>:</td>
        <td>111</td>
    </tr>
    <tr>
        <td>Address 1</td>
        <td>:</td>
        <td>Jayanagar</td>
    </tr>
    <tr>
        <td>City</td>
        <td>:</td>
        <td>Mumbai</td>
    </tr>
    <tr>
        <td>State</td>
        <td>:</td>
        <td>MH</td>
    </tr>
    <tr>
        <td>State</td>
        <td>:</td>
        <td>424001</td>
    </tr>
    <tr>
        <td>Country</td>
        <td>:</td>
        <td>INDIA</td>
    </tr>
</table>

</div>

</body>
</html>
