<?php require_once "header.php";?>

<tr>
					<th>Name: </th>
					<th>Email: </th>
					<th>Phone: </th>
					<th>Date Of Birth: </th>
					<th>Gender: </th>
					<th>City: </th>
					<th>State: </th>
				</tr>
				<tr>
					<td><?php echo $user['name']; ?> </td>
					<td><?php echo $user['email']; ?> </td>
					<td><?php echo $user['mobile']; ?> </td>
					<td><?php echo $user['dob']; ?> </td>
					<td><?php echo $user['gender']; ?> </td>
					<td><?php echo $user['city']; ?> </td>
					<td><?php echo $user['state']; ?> </td>
				</tr>

<?php require_once "footer.php";?>