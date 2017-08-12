<?php
if (!user_is_logged_in()) {
    echo "Only staff is allowed to view stats. Sorry!";
}
else {
?>

<?php

?>
<!-- End test code -->

<table width="100%" border="1">
  
  <tr>
    <td><?php
$view = views_get_view('total_point_count');
print str_replace('Total SUM', '', $view->preview('default'));
?> points earned</td>
    <td><?php echo cat_get_node_count('activity');?> activities submitted</td>
    <td><?php // count total number of users, subtract 2 for admin and local admin //
$count_users_tot = db_query('SELECT COUNT(uid) FROM {users} where status > 0')->fetchField();
$chapter_count = $count_users_tot - 9; echo $chapter_count;
?> chapters</td>

    <td><?php
$know_view = views_get_view('point_count_per_category_total_cb_');
$know_view2 = str_replace('Total SUM', '', $know_view->preview('default'));
$know_view3 = preg_replace("/<\/?div[^>]*\>/i", "", $know_view2);
$know_view4 = preg_replace('/\s+/','',$know_view3);
echo $know_view4 // actually CB count;
?> Chapter Bulding points</td>

    <td><?php
$pc_view = views_get_view('point_count_per_category_total_pc_');
$pc_view2 = str_replace('Total SUM', '', $pc_view->preview('default'));
$pc_view3 = preg_replace("/<\/?div[^>]*\>/i", "", $pc_view2);
$pc_view4 = preg_replace('/\s+/','',$pc_view3);
echo $pc_view4;
?> Policy Change points</td>

  </tr>
  <tr>
  <td><?php
$te_view = views_get_view('point_count_per_category_total_te2_');
$te_view2 = str_replace('Total SUM', '', $te_view->preview('default'));
$te_view3 = preg_replace("/<\/?div[^>]*\>/i", "", $te_view2);
$te_view4 = preg_replace('/\s+/','',$te_view3);
echo $te_view4;
?> Training and Education points</td>
</tr>
</table>



<div id="container" style="width:100%; height: 400px; float:; margin:0; padding:0;"></div>
<div class="clear"></div>



<?php
$view2 = views_get_view('point_count_per_category_total_pc_');
$total_pc_count = str_replace('Total SUM', '', $view2->preview('default'));

$total_pc_count_trimmed = preg_replace('/\s+/','',$total_pc_count);
$total_pc_count_trimmed2 = str_replace('<divclass="view-content">', '', $total_pc_count_trimmed);

$total_pc_count_trimmed3 = str_replace('</div>', '', $total_pc_count_trimmed2);


$total_pc_count_trimmed4 = preg_replace("/<\/?div[^>]*\>/i", "", $total_pc_count_trimmed3); 

$total_pc_count_trimmed5 = str_replace('<ulclass="contextual-links"><liclass="views-ui-editfirstlast"><ahref="/admin/structure/views/view/point_count_per_category_total_pc_/edit/default?destination=node/5">Editview</a></li></ul>', '', $total_pc_count_trimmed4); 
	?>
<?php 

//Get the High Quality stats 

$database_host = '';
$database_user = '';
$database_password = '';
$database_name = '';

$mysqli = mysqli_connect($database_host, $database_user, $database_password, $database_name) or die ('Could not connect to database server.');

//Get the chapters with 75 or more Chapter Building points
$cbSQL= "SELECT users.name AS users_name, users.uid AS uid, users.created AS users_created, MIN(node_users.nid) AS node_users_nid, 'node' AS field_data_field_point_value_node_entity_type, SUM(node_users__field_data_field_point_value.field_point_value_value) AS node_users__field_data_field_point_value_field_point_value_v
FROM 
dr_users users
LEFT JOIN dr_node node_users ON users.uid = node_users.uid
INNER JOIN dr_taxonomy_index taxonomy_index ON node_users.nid = taxonomy_index.nid AND taxonomy_index.tid IN ( '1', '28', '31', '30', '29', '33', '32', '11', '25', '26', '27', '68', '35', '36', '22', '37', '19', '64' )
LEFT JOIN dr_field_data_field_point_value node_users__field_data_field_point_value ON node_users.nid = node_users__field_data_field_point_value.entity_id AND (node_users__field_data_field_point_value.entity_type = 'node' AND node_users__field_data_field_point_value.deleted = '0')
WHERE (( (users.status <> '0') ))
GROUP BY users_name, uid, field_data_field_point_value_node_entity_type, users_created
HAVING (( (SUM(node_users__field_data_field_point_value.field_point_value_value) >= '75') ))";

$chapterBuilders = $mysqli->query($cbSQL);
$chapterBuildersArray = [];
while($row = mysqli_fetch_array($chapterBuilders))
{
    $chapterBuildersArray[] = $row;
}
	
//Get the chapters with 75 or more Policy Change points
$pcSQL = "SELECT users.name AS users_name, users.uid AS uid, node_users__field_data_field_point_value.field_point_value_value AS node_users__field_data_field_point_value_field_point_value_v, users.created AS users_created, MIN(node_users.nid) AS node_users_nid, 'node' AS field_data_field_point_value_node_entity_type
FROM 
dr_users users
LEFT JOIN dr_node node_users ON users.uid = node_users.uid
INNER JOIN dr_taxonomy_index taxonomy_index ON node_users.nid = taxonomy_index.nid AND taxonomy_index.tid IN ( '6', '23', '76', '77', '21', '38', '2', '40', '45', '43', '39', '41', '42', '47', '44', '49', '14' )
LEFT JOIN dr_field_data_field_point_value node_users__field_data_field_point_value ON node_users.nid = node_users__field_data_field_point_value.entity_id AND (node_users__field_data_field_point_value.entity_type = 'node' AND node_users__field_data_field_point_value.deleted = '0')
WHERE (( (users.status <> '0') ))
GROUP BY users_name, uid, field_data_field_point_value_node_entity_type, node_users__field_data_field_point_value_field_point_value_v, users_created
HAVING (( (SUM(node_users__field_data_field_point_value.field_point_value_value) >= '75') ))";
	
$policyChangers = $mysqli->query($pcSQL);
$policyChangersArray = [];
while($row = mysqli_fetch_array($policyChangers))
{
    $policyChangersArray[] = $row;
}

$teSQL = "SELECT users.name AS users_name, users.uid AS uid, users.created AS users_created, MIN(node_users.nid) AS node_users_nid, 'node' AS field_data_field_point_value_node_entity_type, SUM(node_users__field_data_field_point_value.field_point_value_value) AS node_users__field_data_field_point_value_field_point_value_v
FROM 
dr_users users
LEFT JOIN dr_node node_users ON users.uid = node_users.uid
INNER JOIN dr_taxonomy_index taxonomy_index ON node_users.nid = taxonomy_index.nid AND taxonomy_index.tid IN ( '7', '50', '51', '54', '53', '62', '52', '20', '59', '57', '55', '56', '63', '16' )
LEFT JOIN dr_field_data_field_point_value node_users__field_data_field_point_value ON node_users.nid = node_users__field_data_field_point_value.entity_id AND (node_users__field_data_field_point_value.entity_type = 'node' AND node_users__field_data_field_point_value.deleted = '0')
WHERE (( (users.status = '0') )OR( (users.status <> '0') ))
GROUP BY users_name, uid, field_data_field_point_value_node_entity_type, users_created
HAVING (( (SUM(node_users__field_data_field_point_value.field_point_value_value) >= '50') ))";

$educators = $mysqli->query($teSQL);
$educatorsArray = [];
while($row = mysqli_fetch_array($educators))
{
    $educatorsArray[] = $row;
}
	
//Get chapters with 250 or more points
$pointSQL = "SELECT users.name AS users_name, users.uid AS uid, node_users__field_data_field_point_value.field_point_value_value AS node_users__field_data_field_point_value_field_point_value_v, users.created AS users_created, MIN(node_users.nid) AS node_users_nid, 'node' AS field_data_field_point_value_node_entity_type
FROM 
dr_users users
LEFT JOIN dr_node node_users ON users.uid = node_users.uid
LEFT JOIN dr_field_data_field_point_value node_users__field_data_field_point_value ON node_users.nid = node_users__field_data_field_point_value.entity_id AND (node_users__field_data_field_point_value.entity_type = 'node' AND node_users__field_data_field_point_value.deleted = '0')
GROUP BY users_name, uid, field_data_field_point_value_node_entity_type, node_users__field_data_field_point_value_field_point_value_v, users_created
HAVING (( (SUM(node_users__field_data_field_point_value.field_point_value_value) >= '250') ))";
	
$earners = $mysqli->query($pointSQL);
$earnersArray = [];
while($row = mysqli_fetch_array($earners))
{
    $earnersArray[] = $row;
}

//Loop through each array to build the database of potential HQ chapters
//HQ Array basically gives us an array with each chapter if it appears in Chapter Builders, Policy Changers, or Educators
$hqArray = [];

for ($i = 0; $i < count($chapterBuildersArray); $i++){
	$hqArray[$i] = $chapterBuildersArray[$i][users_name];
}

for ($i = 0; $i < count($policyChangersArray); $i++){
	$hqArray[$i + count($chapterBuildersArray) + 1] = $policyChangersArray[$i][users_name];
}
	
for ($i = 0; $i < count($educatorsArray); $i++){
	$hqArray[$i + count($chapterBuildersArray) + count($policyChangersArray) + 1] = $educatorsArray[$i][users_name];
}

for ($i = 0; $i < count($earnersArray); $i++){
	$hqArray[$i + count($chapterBuildersArray) + count($policyChangersArray) + count($educatorsArray) + 1] = $earnersArray[$i][users_name];
}

//Gets the amount of times each chapter shows up in HQ Array, so how many times it makes one of the three categoreies
$countArray = (array_count_values($hqArray));

//How many chapters hit 3/4 or 4/4 categories: Chapter Building, Policy Change, Training and Education, or 250+ points
//You can't get 250+ points and not also be included in one of the other lists, so this logic should deliver the correct count.
$counter;	
foreach ($countArray as $chapter){
	if ($chapter > 1)
		$counter++;
}
	
echo ' 
<h2>HQ chapters</h2>
<table>
<tr>
	<th>Criteria</th>
	<th># of chapters meeting criteria</th>
    <th>% of chapters meeting criteria</th>
</tr>

<tr><td>75 Chapter Building points</td>
<td><a href="chapters-w-75-chapter-building-points">';
echo count($chapterBuildersArray);
echo'</a></td>
    <td>';
echo number_format((float)((count($chapterBuildersArray) / $chapter_count)*100), 4, '.', '');
echo '%</td>
</tr>

<tr><td>75 Policy Change points</td><td><a href="chapters-w-75-policy-change-points">'; 
echo count($policyChangersArray);
echo'</a></td><td>';
echo number_format((float)((count($policyChangersArray) / $chapter_count)*100), 4, '.', ''); 
echo '%</td>
</tr>

<tr><td>50 Training and Education points</td><td><a href="chapters-w-50-training-education-points">';
echo count($educatorsArray);
echo '</a></td><td>';
echo number_format((float)((count($educatorsArray) / $chapter_count)*100), 4, '.', '');
echo '%</td>
</tr>

<tr><td>High Quality chapters</td><td>';
echo $counter;
echo '</td><td>';
echo number_format((float)($counter / $chapter_count), 4, '.', '');
echo '% HQ</td>
</tr>
</table>

<h2>Completed activities</h2>';
?>

<?php
$database_host = '';
$database_user = '';
$database_password = '';
$database_name = '';

$mysqli = mysqli_connect($database_host, $database_user, $database_password, $database_name) or die ('Could not connect to database server.');


// For each taxonomy term that is not a parent (so one level deep), print the term and count how many users have a node with that term.

$sql = "SELECT a.tid AS tid, a.name as name FROM 
dr_taxonomy_term_data a
		LEFT JOIN dr_taxonomy_term_hierarchy b
		ON a.tid = b.tid
		WHERE b.parent <> 0";

$result_set = $mysqli->query($sql);


$result_row = mysqli_fetch_array($result_set);

$taxonomy_terms = '';
while($result_row) {
	$taxonomy_terms[$result_row['tid']] = $result_row['name'];
	$result_row = mysqli_fetch_array($result_set);
}

$report_array = '';

foreach($taxonomy_terms as $tid=>$termname) {
	$user_count = 0;
	$report_array[$tid]['name'] = $termname;
	$sql = "SELECT count(distinct(c.uid)) as user_count FROM dr_taxonomy_index a
			LEFT JOIN dr_node b
			ON a.nid = b.nid
			LEFT JOIN dr_users c
			on b.uid = c.uid
			WHERE a.tid = '".$tid."'";
	$result_set = $mysqli->query($sql);
	if($result_set) {
		$result_row = mysqli_fetch_array($result_set);
		$user_count = $result_row['user_count'];
	}

	$report_array[$tid]['user_count'] = $user_count;

}

?>
<style>
th, td { padding: 5px; }
th { background: #ccc;}
td { }
</style>
<table>
<tr>
	<th>Activity</th>
	<th>Number of chapters participating</th>
    <th>Percentage of chapters participating</th>
</tr>

<?php

foreach($report_array as $tid=>$report_values) {
	
$perc_part = $report_values['user_count'] / $chapter_count;
$perc_part_friendly = number_format((float)$perc_part, 4, '.', '') * 100;

	echo('<tr>');
	echo('<td>'.$report_values['name'].'</td>');
	echo('<td><a href="taxonomy/term/'.$tid.'" target="_blank">'.$report_values['user_count'].'</a></td>');
	echo('<td>'.$perc_part_friendly.'%</td>');
	echo('</tr>'."\n");
}
?>

</table>






<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Points by category'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Points',
            colorByPoint: true,
            data: [{
                name: 'Chapter Building',
                y: <?php echo $know_view4;?>
            }, {
                name: 'Policy Change',
                y: <?php echo $pc_view4;?>,
                sliced: false,
                selected: false
            }, {
                name: 'Training and Education',
                y: <?php echo $te_view4;?>
            
            }]
        }]
    });
});




$(function () {
    $('#container2').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Activities by category'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,
            data: [{
                name: 'Microsoft Internet Explorer',
                y: 56.33
            }, {
                name: 'Chrome',
                y: 24.03,
                sliced: false,
                selected: false
            }, {
                name: 'Firefox',
                y: 10.38
            
            }]
        }]
    });
});


		</script>
	
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<?php } ?>