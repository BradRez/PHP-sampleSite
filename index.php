<?php 
require_once('layout/header.php');

?> 



<div class="content">
<h5>Unit of Competency/Module Title</h5>
	<table cellpadding="20px" cellspacing="0px">
		<thead>
			<td id="name" rowspan="3px" colspan="2px">Name</td>
			<tr>
				<td id="basic" colspan="6px">Basic</td>
				<td id="common" colspan="2px">Common</td>
				<td id="core" colspan="4px">Core</td>
				<tr>
					<td id="id1">S1</td>
					<td id="id1">S2</td>
					<td id="id1">S3</td>
					<td id="id1">S4</td>
					<td id="id1">S5</td>
					<td id="id1">S6</td>
					<td id="id2">S7</td>
					<td id="id2">S8</td>
					<td id="id3">S9</td>
					<td id="id3">S10</td>
					<td id="id3">S11</td>
					<td id="id3">S12</td>
				</tr>
		</thead>
		<tbody>
		<?php for ($i=0; $i < 20 ; $i++) { ?>
				<tr>
					<td id="firstLine"><?php echo $i; ?></td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<?php } ?>
				<tfoot>
				<td colspan="7px">
					S1. Ultilize specialized communication skills <br>
					S2. Develop teams and individuals <br>
					S3. Apply problem solving techniques in the workplace <br>
					S4. Collect, analyze and organize information <br>
					S5. Plan and organize work <br>
					S6. Promote environmental protection <br>
				</td><td colspan="7px">
					S7. Apply quality standards. <br>
					S8. Operate a personal computer <br>
					S9. Design Program Logic <br>
					S10. Apply Program development approach <br>
					S11. Apply object-oriented program language skills <br>
					S12. Apply programming skills in a second language <br>
				</td>
				</tfoot>

				
			</tr>
		
		</tbody>
	</table>
</div>


<?php 
require_once('layout/footer.php');
 ?>