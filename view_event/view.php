<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); 
	$db = Loader::db();
	$query = 'SELECT * FROM `event` WHERE `event_date` >= CURDATE() ORDER BY `event_date` ASC LIMIT 5'; 
	$result = $db->query($query);
	$counter = 0;
	while ($row = $result->fetchRow()) {
		$time = strtotime($row['event_date']);
			echo "<table id='category". $row['event_id'] ."'>
					<tr>
						<td><strong>". $row['event_name'] ."</strong> <br />". $row['event_description'] ."</td>
					</tr>
					
				  </table>
				  <br />
				 
				  ";
		$counter += 1;
	}
	if ($counter==0){
		echo "<strong>No upcoming events at this time.</strong> <br />";
	}