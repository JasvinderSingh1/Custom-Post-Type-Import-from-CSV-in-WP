<?php
require('library/php-excel-reader/excel_reader2.php');
require('library/SpreadsheetReader.php');
require('db_config.php');
if(isset($_POST['Submit']))
{
$mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];
if(in_array($_FILES["file"]["type"],$mimes))
{
$uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);

move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);
$Reader = new SpreadsheetReader($uploadFilePath);

$totalSheet = count($Reader->sheets());
echo "You have total ".$totalSheet." sheets";


/* For Loop for all sheets */
for($i=0;$i<$totalSheet;$i++)
{
$Reader->ChangeSheet($i); 

$ab = 1;
$id = 91;
foreach ($Reader as $Row)
{
//print_r($Row);
$post_title = isset($Row[0]) ? $Row[0] : '';
$post_content = isset($Row[1]) ? $Row[1] : '';

$query = "insert into wp_posts(ID,post_author,post_date,post_date_gmt,post_content, post_title, post_status, comment_status, ping_status, post_name,guid,post_type) values('".$id."','1','2018-09-18 09:30:54','2018-09-18 09:30:54','".$post_content."','".$post_title."', 'publish', 'closed', 'closed','".$ab."','http://localhost/testing2/?post_type=job_listing&#038;p=".$id."','job_listing')";
$mysqli->query($query);

$floor = isset($Row[2]) ? $Row[2] : '';
$use = isset($Row[3]) ? $Row[3] : '';
$space_type = isset($Row[4]) ? $Row[4] : '';
$rentsfyr = isset($Row[5]) ? $Row[5] : '';
$suite_notes = isset($Row[6]) ? $Row[6] : '';
$build_out = isset($Row[7]) ? $Row[7] : '';
$condition = isset($Row[8]) ? $Row[8] : '';
$occupancy = isset($Row[9]) ? $Row[9] : '';
$listing_contact = isset($Row[10]) ? $Row[10] : '';
$term = isset($Row[11]) ? $Row[11] : '';
$suite = isset($Row[12]) ? $Row[12] : '';
$type = isset($Row[13]) ? $Row[13] : '';
$submarket = isset($Row[14]) ? $Row[14] : '';
$city = isset($Row[15]) ? $Row[15] : '';
$st = isset($Row[16]) ? $Row[16] : '';
$county = isset($Row[17]) ? $Row[17] : '';
$company_description = isset($Row[18]) ? $Row[18] : '';
$location_description = isset($Row[19]) ? $Row[19] : '';
$co_working = isset($Row[20]) ? $Row[20] : '';
$private_office = isset($Row[21]) ? $Row[21] : '';
$team_room = isset($Row[22]) ? $Row[22] : '';
$conference_room = isset($Row[23]) ? $Row[23] : '';
$entire_floor__space = isset($Row[24]) ? $Row[24] : '';

$query1 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','floor','".$floor."')"; $mysqli->query($query1);
$query2 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','use','".$use."')"; $mysqli->query($query2);
$query3 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','space_type','".$space_type."')"; $mysqli->query($query3);
$query4 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','rentsfyr','".$rentsfyr."')"; $mysqli->query($query4);
$query5 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','suite_notes','".$suite_notes."')"; $mysqli->query($query5);
$query6 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','build_out','".$build_out."')"; $mysqli->query($query6);
$query7 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','condition','".$condition."')"; $mysqli->query($query7);
$query8 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','occupancy','".$occupancy."')"; $mysqli->query($query8);
$query9 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','listing_contact','".$listing_contact."')"; $mysqli->query($query9);
$query10 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','term','".$term."')"; $mysqli->query($query10);
$query11 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','suite','".$suite."')"; $mysqli->query($query11);
$query12 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','type','".$type."')"; $mysqli->query($query12);
$query13 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','submarket','".$submarket."')"; $mysqli->query($query13);
$query14 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','city','".$city."')"; $mysqli->query($query14);
$query15 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','st','".$st."')"; $mysqli->query($query15);
$query16 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','county','".$county."')"; $mysqli->query($query16);
$query17 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','company_description','".$company_description."')"; $mysqli->query($query17);
$query18 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','location_description','".$location_description."')"; $mysqli->query($query18);
$query19 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','co_working','".$co_working."')"; $mysqli->query($query19);
$query20 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','private_office','".$private_office."')"; $mysqli->query($query20);
$query21 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','team_room','".$team_room."')"; $mysqli->query($query21);
$query22 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','conference_room','".$conference_room."')"; $mysqli->query($query22);
$query23 = "insert into wp_postmeta(post_id, meta_key, meta_value) values('".$id."','entire_floor__space','".$entire_floor__space."')"; $mysqli->query($query23);
//echo $query;
 $ab = $ab +1; 
 $id = $id +1;
}
}
/*$html.="</table>";*/

echo "<br />Data Inserted in dababase";
}
else
{
die("<br/>Sorry, File type is not allowed. Only Excel file.");
}
}
?>