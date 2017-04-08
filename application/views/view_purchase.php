<!-- <?php foreach ($items as $row) {
			echo "ใบสั่งซื้อลำดับที่: ".$row->po_id;
		} ?> -->
<br>
<center><h1>ใบสั่งซื้อวัตถุดิบ</h1></center>
<br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ลำดับ</th>
					<th>รายการ</th>
					<th>จำนวน</th>
					<th>หน่วย</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php $count = 1 ?>
				<?php foreach ($items as $row)
				{
					echo "<tr>";
			        echo "<td>".$count."</td>";
			        echo "<td>".$row->mat_name."</td>";
			        echo "<td>".$row->amount."</td>";
			        echo "<td>".$row->unit."</td>";
			        echo "<td><center><a class='btn btn-info' href='".base_url('/index.php/purchase/delete/'.$row->po_item_id)."' role='button'>ลบ</a></center></td>";
			        echo "</tr>";
			        $count++;
				}
				?>
			</tbody>
		</table>
	</div>
	<div class="col-md-2"></div>
</div>
<br>
<center><nav aria-label="...">
  <ul class="pager">
  	<li><a href="<?php echo base_url('/index.php/material'); ?>">กลับ</a></li>
  </ul>
</nav></center>