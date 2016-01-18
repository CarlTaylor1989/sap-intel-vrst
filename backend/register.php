<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'on');
date_default_timezone_set('Europe/London');
require_once('class.phpmailer.php');
require 'vendor/autoload.php';
use Mailgun\Mailgun;


function getDb() {
	$db = new PDO('mysql:host=localhost;dbname=virtualb_sapintel;charset=utf8', 'virtualb_intelus', 'X1mbFDEq');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	return $db;
}

/*function getUsersByEmail($email) {
	$stmt = getDb()->prepare('SELECT * FROM users WHERE email = :email');
	$stmt->bindValue(':email', $email, PDO::PARAM_STR);
	$stmt->execute();
	$users = $stmt->fetch(PDO::FETCH_OBJ);

	return $users;
}
*/

function addUser($email, $first_name, $last_name, $phone, $address, $town, $organization, $country, $zip, $october6, $october7, $october8, $october9, $october10, $msg_email, $msg_phone) {

	$db = getDb();
	
	//$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		
	try {	
	$stmt = $db->prepare('INSERT INTO users (email, first_name, last_name, phone, address, town, organization, country, zip, october6, october7, october8, october9, october10, msg_email, msg_phone)
							VALUES ("' . $email .'", "' . $first_name .'", "' . $last_name .'", "' . $phone .'", "' . $address .'", "' . $town .'", "' . $organization .'", "' . $country .'", "' . $zip .'", ' . $october6 .', ' . $october7 .', ' . $october8 .', ' . $october9 .', ' . $october10 .', ' . $msg_email .', ' . $msg_phone . ')');
			
//	$stmt = $db->prepare('INSERT INTO users (email, first_name, last_name, phone, address, town, organization, country, zip, october6, october7, october8, october9, october10, msg_email, msg_phone)
//							VALUES ("' . $email .'", "' . $first_name .'", "' . $last_name .'", "' . $phone .'", "' . $address .'", "' . $town .'", "' . $organization .'", "' . $country .'", "' . $zip .'", true, false, true, true, false, true, true)');			
			
		
							
	/*$stmt->bindValue(':email', $email, PDO::PARAM_STR);
	$stmt->bindValue(':first_name', $first_name, PDO::PARAM_STR);
	$stmt->bindValue(':last_name', $last_name, PDO::PARAM_STR);
	$stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
	$stmt->bindValue(':address', $address, PDO::PARAM_STR);
	$stmt->bindValue(':town', $town, PDO::PARAM_STR);
	$stmt->bindValue(':organization', $organization, PDO::PARAM_STR);
	$stmt->bindValue(':country', $country, PDO::PARAM_STR);
	$stmt->bindValue(':zip', $zip, PDO::PARAM_STR);
	$stmt->bindValue(':october6', $october6, PDO::PARAM_BOOL);
	$stmt->bindValue(':october7', $october7, PDO::PARAM_BOOL);
	$stmt->bindValue(':october8', $october8, PDO::PARAM_BOOL);
	$stmt->bindValue(':october9', $october9, PDO::PARAM_BOOL);
	$stmt->bindValue(':october10', $october10, PDO::PARAM_STR);
	$stmt->bindValue(':msg_email', $msg_email, PDO::PARAM_BOOL);
	$stmt->bindValue(':msg_phone', $msg_phone, PDO::PARAM_BOOL); */
        
	$stmt->execute(); // TODO: This does not work, please fix
	
	} catch (PDOException $e) {

//		echo $e->getMessage();
	}	
	
	sendEmail($first_name, $last_name, $october6, $october7, $october8, $october9, $october10, $email);
	
//	print_r($db->errorInfo());
}

function sendEmail($first_name, $last_name, $october6, $october7, $october8, $october9, $october10, $email)
{

		if ($october6 == '1')
		{
			$october6 = '<tr>
									<td>
                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block;">
                                    </td>
									<td>
										<table cellspacing="0" cellpadding="0" border="0" width="560">
											<tbody>
												<tr>
													<td colspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
													<td colspan="7" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td width="10" rowspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>
													<td width="46" align="center" bgcolor="#0070c5" style="font-size: 25px; font-family:Arial, Helvetica, sans-serif; line-height: 25px; color: #FFFFFF">6<sup>th</sup>
												  </td>
													<td width="10" rowspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>

													<td width="20" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="80" alt="" style="display: block;">
													</td>
														<td width="313" height="30" align="left" bgcolor="#F7F7F7" style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; line-height: 20px; color: #333333">
															12:00 CEST / 11:00 BST</td>
													<td width="10" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>
													<td width="31"  rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/calender.png" alt="" style="display: block">
													</td>
													<td width="10"  rowspan="3" bgcolor="#f7f7f7" >
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="31" alt="" style="display: block;">
													</td>
													<td width="89"  rowspan="3" align="center" bgcolor="#f7f7f7" style="font-family:Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; color: #0170c5">
														<a href="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/events/BIG+DATA+WEEK+How+to+Drive+Innovation+Big+Data+and+Analytics.ics" style="font-family:Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; color: #0170c5">Add event<br/>to calender</a>
													</td>
													<td width="21" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="80" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="40" height="10" alt="" style="display: block;">
													</td>
													<td bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="300" height="10" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td align="center" bgcolor="#0070c5" valign="top" style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; line-height: 20px; font-weight: bold; color: #FFFFFF">
														Oct<br/>2014
													</td>
													<td valign="top" bgcolor="#f7f7f7" style="font-family:Arial, Helvetica, sans-serif; font-weight: bold; font-size: 18px; line-height: 20px; color: #333333">How to Drive Innovation:<br/>Big Data and Analytics
													</td>
												</tr>
												<tr>
													<td colspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
													<td colspan="7" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
												</tr>
											</tbody>
										</table>
									</td>
									<td>
                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block;">
                                    </td>
								</tr>';
		}
		else
		{
			$october6 = "";
		}	
		
		if ($october7 == '1')
		{
			$october7 = '<tr>
									<td>
                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block;">
                                    </td>
									<td>
										<table cellspacing="0" cellpadding="0" border="0" width="560">
											<tbody>
												<tr>
													<td colspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
													<td colspan="7" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td width="10" rowspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>
													<td width="46" align="center" bgcolor="#0070c5" style="font-size: 25px; font-family:Arial, Helvetica, sans-serif; line-height: 25px; color: #FFFFFF">7<sup>th</sup>
												  </td>
													<td width="10" rowspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>

													<td width="20" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="80" alt="" style="display: block;">
													</td>
														<td width="313" height="30" align="left" bgcolor="#F7F7F7" style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; line-height: 20px; color: #333333">
															12:00 CEST / 11:00 BST</td>
													<td width="10" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>
													<td width="31"  rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/calender.png" alt="" style="display: block">
													</td>
													<td width="10"  rowspan="3" bgcolor="#f7f7f7" >
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="31" alt="" style="display: block;">
													</td>
													<td width="89"  rowspan="3" align="center" bgcolor="#f7f7f7" style="font-family:Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; color: #0170c5">
														<a href="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/events/BIG+DATA+WEEK+Grow+and+Transform+with+Big+Data+and+Analytics.ics" style="font-family:Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; color: #0170c5">Add event<br/>to calender</a>
													</td>
													<td width="21" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="80" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="40" height="10" alt="" style="display: block;">
													</td>
													<td bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="300" height="10" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td align="center" bgcolor="#0070c5" valign="top" style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; line-height: 20px; font-weight: bold; color: #FFFFFF">
														Oct<br/>2014
													</td>
													<td valign="top" bgcolor="#f7f7f7" style="font-family:Arial, Helvetica, sans-serif; font-weight: bold; font-size: 18px; line-height: 20px; color: #333333">Grow and Transform with<br/>Big Data and Analytics</td>
												</tr>
												<tr>
													<td colspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
													<td colspan="7" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
												</tr>
											</tbody>
										</table>
									</td>
									<td>
                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block;">
                                    </td>
								</tr>';
		}
		else
		{
			$october7 = "";
		}	
		
		if ($october8 == '1')
		{
			$october8 = '<tr>
									<td>
                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block;">
                                    </td>
									<td>
										<table cellspacing="0" cellpadding="0" border="0" width="560">
											<tbody>
												<tr>
													<td colspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
													<td colspan="7" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td width="10" rowspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>
													<td width="46" align="center" bgcolor="#0070c5" style="font-size: 25px; font-family:Arial, Helvetica, sans-serif; line-height: 25px; color: #FFFFFF">8<sup>th</sup>
												  </td>
													<td width="10" rowspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>

													<td width="20" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="80" alt="" style="display: block;">
													</td>
														<td width="313" height="30" align="left" bgcolor="#F7F7F7" style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; line-height: 20px; color: #333333">
															12:00 CEST / 11:00 BST</td>
													<td width="10" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>
													<td width="31"  rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/calender.png" alt="" style="display: block">
													</td>
													<td width="10"  rowspan="3" bgcolor="#f7f7f7" >
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="31" alt="" style="display: block;">
													</td>
													<td width="89"  rowspan="3" align="center" bgcolor="#f7f7f7" style="font-family:Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; color: #0170c5">
														<a href="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/events/BIG+DATA+WEEK+Supporting+Real+Time+Business+with+a+Flexible+Big+Data+Foundation.ics" style="font-family:Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; color: #0170c5">Add event<br/>to calender</a>
													</td>
													<td width="21" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="80" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="40" height="10" alt="" style="display: block;">
													</td>
													<td bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="300" height="10" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td align="center" bgcolor="#0070c5" valign="top" style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; line-height: 20px; font-weight: bold; color: #FFFFFF">
														Oct<br/>2014
													</td>
													<td valign="top" bgcolor="#f7f7f7" style="font-family:Arial, Helvetica, sans-serif; font-weight: bold; font-size: 18px; line-height: 20px; color: #333333">
													Supporting Real Time Business with<br/>a Flexible Big Data Foundation
													</td>
												</tr>
												<tr>
													<td colspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
													<td colspan="7" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
												</tr>
											</tbody>
										</table>
									</td>
									<td>
                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block;">
                                    </td>
								</tr>';
		}
		else
		{
			$october8 = "";
		}	
		
		if ($october9 == '1')
		{
			$october9 = '<tr>
									<td>
                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block;">
                                    </td>
									<td>
										<table cellspacing="0" cellpadding="0" border="0" width="560">
											<tbody>
												<tr>
													<td colspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
													<td colspan="7" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td width="10" rowspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>
													<td width="46" align="center" bgcolor="#0070c5" style="font-size: 25px; font-family:Arial, Helvetica, sans-serif; line-height: 25px; color: #FFFFFF">9<sup>th</sup>
												  </td>
													<td width="10" rowspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>

													<td width="20" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="80" alt="" style="display: block;">
													</td>
														<td width="313" height="30" align="left" bgcolor="#F7F7F7" style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; line-height: 20px; color: #333333">
															12:00 CEST / 11:00 BST</td>
													<td width="10" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>
													<td width="31"  rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/calender.png" alt="" style="display: block">
													</td>
													<td width="10"  rowspan="3" bgcolor="#f7f7f7" >
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="31" alt="" style="display: block;">
													</td>
													<td width="89"  rowspan="3" align="center" bgcolor="#f7f7f7" style="font-family:Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; color: #0170c5">
														<a href="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/events/BIG+DATA+WEEK+Handling+the+challenges+and+speed+of+Big+Data.ics" style="font-family:Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; color: #0170c5">Add event<br/>to calender</a>
													</td>
													<td width="21" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="80" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="40" height="10" alt="" style="display: block;">
													</td>
													<td bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="300" height="10" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td align="center" bgcolor="#0070c5" valign="top" style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; line-height: 20px; font-weight: bold; color: #FFFFFF">
														Oct<br/>2014
													</td>
													<td valign="top" bgcolor="#f7f7f7" style="font-family:Arial, Helvetica, sans-serif; font-weight: bold; font-size: 18px; line-height: 20px; color: #333333">
													Handling the Challenges<br/>
													  and Speed of Big Data
													  </td>
												</tr>
												<tr>
													<td colspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
													<td colspan="7" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
												</tr>
											</tbody>
										</table>
									</td>
									<td>
                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block;">
                                    </td>
								</tr>';
		}
		else
		{
			$october9 = "";
		}	
		
		if ($october10 == '1')
		{
			$october10 = '<tr>
									<td>
                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block;">
                                    </td>
									<td>
										<table cellspacing="0" cellpadding="0" border="0" width="560">
											<tbody>
												<tr>
													<td colspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
													<td colspan="7" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td width="10" rowspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>
													<td width="46" align="center" bgcolor="#0070c5" style="font-size: 25px; font-family:Arial, Helvetica, sans-serif; line-height: 25px; color: #FFFFFF">10<sup>th</sup>
												  </td>
													<td width="10" rowspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>

													<td width="20" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="80" alt="" style="display: block;">
													</td>
														<td width="313" height="30" align="left" bgcolor="#F7F7F7" style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; line-height: 20px; color: #333333">
															12:00 CEST / 11:00 BST</td>
													<td width="10" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="80" alt="" style="display: block;">
													</td>
													<td width="31"  rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/calender.png" alt="" style="display: block">
													</td>
													<td width="10"  rowspan="3" bgcolor="#f7f7f7" >
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="10" height="31" alt="" style="display: block;">
													</td>
													<td width="89"  rowspan="3" align="center" bgcolor="#f7f7f7" style="font-family:Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; color: #0170c5">
														<a href="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/events/BIG+DATA+WEEK+Uncovering+Insights+and+Opportunities+Hidden+in+Big+Data.ics" style="font-family:Arial, Helvetica, sans-serif; font-size: 14px; line-height: 20px; color: #0170c5">Add event<br/>to calender</a>
													</td>
													<td width="21" rowspan="3" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="80" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="40" height="10" alt="" style="display: block;">
													</td>
													<td bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="300" height="10" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td align="center" bgcolor="#0070c5" valign="top" style="font-size: 14px; font-family:Arial, Helvetica, sans-serif; line-height: 20px; font-weight: bold; color: #FFFFFF">
														Oct<br/>2014
													</td>
													<td valign="top" bgcolor="#f7f7f7" style="font-family:Arial, Helvetica, sans-serif; font-weight: bold; font-size: 18px; line-height: 20px; color: #333333">Uncovering Insights and<br/> 
													Opportunities Hidden in Big Data</td>
												</tr>
												<tr>
													<td colspan="3" bgcolor="#0070c5">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
													<td colspan="7" bgcolor="#f7f7f7">
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="60" height="10" alt="" style="display: block;">
													</td>
												</tr>
											</tbody>
										</table>
									</td>
									<td>
                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block;">
                                    </td>
								</tr>';
		}
		else
		{
			$october10 = "";
		}										

		try {
			
			$emailBody = '<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8" />
    	<title>Thank you for registering</title>
    </head>
	<body>
		<table cellspacing="0" cellpadding="0" border="0" width="600" align="center">
			<tbody>
				<tr>
					<td>
						<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/header.jpg" alt="SAP and Intel" style="display: block">
					</td>
				</tr>
				<tr>
					<td height="5" style="font-size: 5px;">
                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="600" height="5" alt="" style="display: block;">
                    </td>
				</tr>
				<tr>
					<td>
						<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/thanks-banner.jpg" alt="SAP and Intel" style="display: block">
					</td>
				</tr>
				<tr>
					<td>
						<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="600" height="20" alt="" style="display: block;">
					</td>
				</tr>
				<tr>
					<td>
						<table cellspacing="0" cellpadding="0" border="0" width="600">
							<tbody>
								<tr>
									<td colspan="3">
										<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="600" height="20" alt="" style="display: block;">
									</td>
								</tr>
								<tr>
									<td>
										<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="40" alt="" style="display: block;">
									</td>
									<td>
										<table cellspacing="0" cellpadding="0" border="0" width="560" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height: 20px; color: #333333">
											<tbody>
												<tr>
													<td>
														Dear '. trim($first_name) .',</td>
												</tr>
												<tr>
													<td>
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="560" height="20" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td>
														Built on a decade\'s experience of delivering SAP solutions on Intel platforms, SAP and Intel bring you BIG DATA WEEK. 
													</td>
												</tr>
												<tr>
													<td>
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="560" height="20" alt="" style="display: block;">
													</td>
												</tr>
												<tr>
													<td>
														Thanks for registering for:
													</td>
												</tr>
												<tr>
													<td>
														<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="560" height="20" alt="" style="display: block;">
													</td>
												</tr>
											</tbody>
										</table>
									</td>
									<td>
										<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="40" alt="" style="display: block;">
									</td>
								</tr>
								
								'.$october6.'
								'.$october7.' 
								'.$october8.' 
								'.$october9.' 
								'.$october10.'
								
								<tr>
                                	<td rowspan="3">
                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block;">
                                    </td>
									<td>
										<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="520" height="20" alt="" style="display: block;">
									</td>
                                    <td rowspan="3">
                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block;">
                                    </td>
								</tr>
								<tr>
									<td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height: 20px; color: #333333">
										We\'ll send you a reminder nearer the time.<br/><br/>Remember, there are five exciting shows in BIG DATA WEEK, so why not register for them all?
									</td>
								</tr>
								<tr>
									<td>
										<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="560" height="20" alt="" style="display: block;">
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
                	<td colspan="3">
                		<table cellspacing="0" cellpadding="0" border="0">
                			<tbody>
                				<tr>
                					<td align="left" valign="middle" bgcolor="#0070c5" style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; line-height:20px; color: #fefefe;">
                                    	<table cellspacing="0" cellpadding="0" border="0" style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; line-height:20px; color: #fefefe;">
                                        	<tbody>
                                            	<tr>
                                                	<td width="20" height="50">
                                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: inline-block">
                                                    </td>
                                                    <td height="50">
                                                    	<a href="http://www.virtualbigdatatour.com/bigdataweek" target="_blank" style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; line-height:20px; color: #fefefe; text-decoration: none;">Register for all five shows</a>
                                                    </td>
                                                    <td height="50" bgcolor="#FFFFFF">
                                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/button-end.jpg" alt="" style="display: block">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                				</tr>
                			</tbody>
                		</table>
                    </td>
                </tr>
                <!--/cta-->
                <tr>
                	<td>
                		<table cellspacing="0" cellpadding="0" border="0" width="600" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height: 20px; color: #333333">
                        	<tbody>
                            	<tr>
                                	<td colspan="2">
                		<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="600" height="50" alt="" style="display: block">
                                    </td>
                                </tr>
                                <!--sign off-->
                                <tr>
                                    <td width="20">
                                        <img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block">
                                    </td>
                                    <td align="left" width="580">
                                        Best regards,</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="600" height="20" alt="" style="display: block">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20">
                                        <img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="20" height="20" alt="" style="display: block">
                                    </td>
                                    <td align="left" width="580">
                                        SAP and Intel
                                    </td>
                                </tr>
                                <!--/sign off-->
                                <tr>
                                    <td colspan="2">
                                        <img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="600" height="50" alt="" style="display: block">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <!--footer-->
                <tr>
                	<td>
                		<table cellspacing="0" cellpadding="0" border="0" width="600" bgcolor="#0070c5">
                			<tbody>
                				<tr>
                					<td bgcolor="#0070c5">
                						<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="600" height="25" alt="" style="display: block">
                					</td>
                				</tr>
                				<tr>
                					<td>
                						<table width="600" cellspacing="0" cellpadding="0" border="0" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height:20px; color: #F3F3F3">
                							<tbody>
                								<tr>
                                                	<td width="300">
                                                    	<table cellspacing="0" cellpadding="0" border="0" width="300" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height:20px; color: #F3F3F3">
                                                        	<tbody>
                                                            	<tr>
                                                                	<td>
                                                                   	 <img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" height="20" width="20" alt="" style="display: block">
	                                                               	</td>
	                                                                <td>
	                                                                    <a href="http://www.sap.com/about/legal/impressum.html" target="_blank" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height:20px; color: #F3F3F3; text-decoration: none;">Legal</a>
	                                                                </td>
	                                                                <td>
	                                                                    <img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" height="20" width="20" alt="" style="display: block">
	                                                                </td>
	                                                                <td>
	                                                                    <a href="http://www.sap.com/corporate-en/about/legal/terms-of-use.html" target="_blank" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height:20px; color: #F3F3F3; text-decoration: none;">Terms</a>
	                                                                </td>
	                                                                <td>
	                                                                    <img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" height="20" width="20" alt="" style="display: block">
	                                                                </td>
	                                                                <td>
	                                                                    <a href="http://www.sap.com/about/legal/privacy.html" target="_blank" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height:20px; color: #F3F3F3; text-decoration: none;">Privacy</a>
	                                                                </td>
	                                                                <td>
	                                                                    <img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" height="20" width="20" alt="" style="display: block">
	                                                                </td>
	                                                                <td>
	                                                                    <a href="http://www.sap.com/about/legal/copyright.html" target="_blank" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height:20px; color: #F3F3F3; text-decoration: none;">Copyright</a>
	                                                                </td>
	                                                            </tr>
                                                        	</tbody>
                                                    	</table>
	                                               	</td>	                                                	
	                                               	<td align="right" width="280">
	                                                    <table cellspacing="0" cellpadding="0" border="0">
                                                        	<tbody>
                                                            	<tr>
                                                               	  <td>
                                                                  	<a href="https://www.facebook.com/HANAbySAP" target="_blank" border="0" style="text-decoration: none; border: none; outline: none;">
                                                                   		<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/facebook.png" alt="" style="display: block; border: none; outline: none;">
                                                                    </a>
                                                                    </td>
                                                                    <td>
                                                                   	  <img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" height="27" width="12.5" alt="" style="display: block">
                                                                    </td>
                                                                  <td>
                                                                  	<a href="https://twitter.com/SAPInMemory" target="_blank" border="0" style="text-decoration: none; border: none; outline: none;">
                                                                   		<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/twitter.png" alt="" style="display: block; border: none; outline: none;">
                                                                    </a>
                                                                    </td>
                                                                  <td>
                                                                    	<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" height="27" width="12.5" alt="" style="display: block">
                                                                    </td>
                                                                    <td>
                                                                    	<a href="https://plus.google.com/communities/108413280272557646593" target="_blank" border="0" style="text-decoration: none; border: none; outline: none;">
                                                                    		<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/2/google.png" alt="" style="display: block; border: none; outline: none;">
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
	                                                </td>
	                                                <td align="right">
	                                                    <img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" height="20" width="20" alt="" style="display: block">
	                                                </td>
	                                            </tr>
	                						</tbody>
	                					</table>
	                				</td>
	                			</tr>
	                			<tr>
                					<td bgcolor="#0070c5">
                						<img src="https://s3-eu-west-1.amazonaws.com/dnx-sap-01/4115/1/spacer.gif" width="600" height="25" alt="" style="display: block">
                					</td>
                				</tr>
                			</tbody>
                		</table>
                	</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>';

                        



# First, instantiate the SDK with your API credentials and define your domain. 
$mg = new Mailgun("key-8ugjnk82unvt9bjpzk3e006zcrd9jbx6");
$domain = "virtualbigdatatour.com";

# Now, compose and send your message.
$mg->sendMessage($domain, array('from'    => 'noreply@virtualdatatour.com', 
                                'to'      => $email, 
                                'subject' => 'Thanks for registering for SAP & Intel BIG DATA WEEK', 
                                'html'    => $emailBody));

							

		} catch (phpmailerException $e) {
			echo $e->errorMessage(); //Pretty error messages from PHPMailer
		} catch (Exception $e) {
			echo $e->getMessage(); //Boring error messages from anything else!
		}	
}

