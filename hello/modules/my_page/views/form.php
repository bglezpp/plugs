<?php echo ajax_modal_template_header(TEXT_INFO) ?>

<?php echo form_tag('my_form', url_for('hello/my_page/index','action=send'),array('class'=>'form-horizontal')) ?>
<div class="modal-body">
  <div class="form-body">
 
    <div class="form-group">
    	<label class="col-md-3 control-label" for="name"><?php echo TEXT_PLUGIN_MESSAGE ?></label>
      <div class="col-md-9">	
    	  <?php echo textarea_tag('message',$obj['name'],array('class'=>'form-control input-large required')) ?>        
      </div>			
    </div>
     
   </div>
</div> 
 
<?php echo ajax_modal_template_footer(TEXT_SEND) ?>

</form> 

<script>
  $(function() {     
    $('#my_form').validate();                                                                                                           
  });
</script>  