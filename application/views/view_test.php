<body>
<br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<table class="table table-hover">
			<thead>
				<tr>
					<th></th>
					<th>ลำดับ</th>
					<th>ชื่อขนมปัง</th>
					<th>ประเภท</th>
					<th>หน่วย</th>
					<th>จำนวน</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($products as $row)
				{
					echo "<tr>";
					echo "<td><input type='checkbox' id='' value=''></td>";
			        echo "<td>".$row->bakery_id."</td>";
			        echo "<td>".$row->bakery_name."</td>";
			        echo "<td>".$row->type."</td>";
			        echo "<td>".$row->unit."</td>";
			        echo "<td>".$row->amount."</td>";
			        echo "<td><a class='btn btn-info' href='".base_url('/index.php/test/edit/'.$row->bakery_id)."' role='button'>แก้ไข</a></td>";
			        echo "</tr>";
				}
				?>
			</tbody>
		</table>
	</div>
	<div class="col-md-2"></div>
</div>
	<center><a class="btn btn-default" href="<?php echo base_url('/index.php/test/add'); ?>" role="button">เพิ่มเมนู</a></center>
</body>
</html>