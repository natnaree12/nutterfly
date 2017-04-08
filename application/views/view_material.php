<br>
<center><h1>จัดการวัตถุดิบ</h1></center>
<br>
<center><nav aria-label="...">
  <ul class="pager">
  	<li><a href="<?php echo base_url('/index.php/material'); ?>">ทั้งหมด</a></li>
    <li><a href="<?php echo base_url('/index.php/material/view_raw_material'); ?>">วัตถุดิบ</a></li>
    <li><a href="<?php echo base_url('/index.php/material/view_package'); ?>">บรรจุภัณฑ์</a></li>
  </ul>
</nav></center>

<br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ลำดับ</th>
					<th>รายการ</th>
					<th>คงเหลือ</th>
					<th>หน่วย</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php $count = 1 ?>
				<?php foreach ($products as $row)
				{
					echo "<tr>";
			        echo "<td>".$count."</td>";
			        echo "<td>".$row->mat_name."</td>";
			        echo "<td>".$row->amount_available."</td>";
			        echo "<td>".$row->unit."</td>";
			        $amount = ($row->amount_available/$row->amount_expect)*100;
			        echo "<td><div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='".$amount."' aria-valuemin='0' aria-valuemax='100' style='width: ".$amount."%;''>".$amount."%</div></td>";
			        echo "<td><center><a class='btn btn-info' href='".base_url('/index.php/material')."' role='button'>สั่งซื้อ</a></center></td>";
			        echo "</tr>";
			        $count++;
				}
				?>
			</tbody>
		</table>
	</div>
	<div class="col-md-2"></div>
</div>