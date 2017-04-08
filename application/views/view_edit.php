<?php foreach ($products_edit as $row)?>
<br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	<?php
		$attributes = array('class' => 'form-horizontal', 'id' => 'add_product');
		echo form_open('');
	?>
    	<fieldset class="form-horizontal" id="add_product">
          <div class="control-group">
            <label for="inputError" class="control-label">ชื่อขนมปัง</label>
            <div class="controls">
              <input type="text" id="" name="bakery_name" value="<?php echo set_value('bakery_name'); ?>" placeholder="<?php echo $row['bakery_name']; ?>">
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">ประเภท</label>
            <div class="controls">
              <input type="text" id="" name="price_per_unit" value="<?php echo set_value('type'); ?>">
              <!--<span class="help-inline">Cost Price</span>-->
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">หน่วย</label>
            <div class="controls">
              <input type="text" id="" name="unit" value="<?php echo set_value('unit'); ?>">
              <!--<span class="help-inline">Cost Price</span>-->
            </div>
          </div>          
          <div class="control-group">
            <label for="inputError" class="control-label">จำนวน</label>
            <div class="controls">
              <input type="text" name="available" value="<?php echo set_value('amount'); ?>">
              <!--<span class="help-inline">OOps</span>-->
            </div>
          </div>
          <br>
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">บันทึก</button>
            <a class="btn btn-default" href="<?php echo base_url('/index.php/test'); ?>" role="button">ยกเลิก</a>
          </div>
        </fieldset>

      <?php echo form_close(); ?>
    </div>
    <div class="col-md-2"></div>
</div>