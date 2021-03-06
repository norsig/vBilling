<?php 
/*
 * Version: MPL 1.1
 *
 * The contents of this file are subject to the Mozilla Public License
 * Version 1.1 (the "License"); you may not use this file except in
 * compliance with the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 * 
 * Software distributed under the License is distributed on an "AS IS"
 * basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
 * License for the specific language governing rights and limitations
 * under the License.
 * 
 * The Original Code is "vBilling - VoIP Billing and Routing Platform"
 * 
 * The Initial Developer of the Original Code is 
 * Digital Linx [<] info at digitallinx.com [>]
 * Portions created by Initial Developer (Digital Linx) are Copyright (C) 2011
 * Initial Developer (Digital Linx). All Rights Reserved.
 *
 * Contributor(s)
 * "Digital Linx - <vbilling at digitallinx.com>"
 *
 * vBilling - VoIP Billing and Routing Platform
 * version 0.1.3
 *
 */
?>
<?php 
    $row = $rate->row();
?>

<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
  <tbody>
    <tr>
      <td width="21" height="35"></td>
      <td width="825" class="heading"><?php echo $this->lang->line('admin_rate_menu_update_rate_heading');?></td>
      <td width="178"><table cellspacing="0" cellpadding="0" width="170" height="42" class="search_col">
          <tbody>
            <tr>
              <td align="center" width="53" valign="bottom">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" width="53" valign="top">&nbsp;</td>
            </tr>
          </tbody>
        </table></td>
    </tr>
    <tr>
      <td background="<?php echo base_url();?>assets/images/line.png" height="7" colspan="3"></td>
    </tr>
    <tr>
      <td height="10"></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="3"><div class="error" id="err_div" style="display:none;"></div></td>
    </tr>
    <tr>
      <td colspan="3"><div class="success" id="success_div" style="display:none;"></div></td>
    </tr>
    <tr>
      <td align="center" height="20" colspan="3"><form enctype="multipart/form-data"  method="post" action="" name="addRate" id="addRate">
          <table cellspacing="3" cellpadding="2" border="0" width="95%" class="search_col">
            <input type="hidden" name="rate_id" id="rate_id" value="<?php echo $rate_id;?>"/>
            <input type="hidden" name="rate_group_id" id="rate_group_id" value="<?php echo $rate_group_id;?>"/>
            <tbody>
              <tr>
                <td align="right" width="45%"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_country');?></td>
                <td align="left" width="55%"><select name="country" id="country" class="textfield">
                    <?php echo all_countries($row->country_id);?>
                  </select></td>
              </tr>
              <tr>
                <td align="right" width="45%"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_country_code');?></td>
                <td align="left" width="55%"><input type="text" value="<?php echo $row->digits;?>" name="digits" id="digits" maxlength="50" class="textfield"></td>
                <input type="hidden" name="old_digits" value="<?php echo $row->digits;?>" />
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_buying_rate');?></td>
                <td align="left"><input type="text" value="<?php echo $row->cost_rate;?>" name="costrate" id="costrate" maxlength="50" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_min_buy_block');?></td>
                <td align="left"><input type="text" value="<?php echo $row->buyblock_min_duration;?>" name="buyblock_min_duration" id="buyblock_min_duration" maxlength="3" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_buy_rate_init_block');?></td>
                <td align="left"><input type="text" value="<?php echo $row->buy_initblock;?>" name="buyblock" id="buyblock" maxlength="50" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_sell_rate');?></td>
                <td align="left"><input type="text" value="<?php echo $row->sell_rate;?>" name="rate" id="rate" maxlength="50" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_min_sell_block');?></td>
                <td align="left"><input type="text" value="<?php echo $row->sellblock_min_duration;?>" name="sellblock_min_duration" id="sellblock_min_duration" maxlength="3" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_sell_rate_init_block');?></td>
                <td align="left"><input type="text" value="<?php echo $row->sell_initblock;?>" name="sellblock" id="sellblock" maxlength="50" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><span class="optional"></span><?php echo $this->lang->line('admin_rate_menu_remove_prefix');?></td>
                <td align="left"><input type="text" value="<?php echo $row->remove_rate_prefix;?>" name="remove_rate_prefix" id="remove_rate_prefix" maxlength="15" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><span class="optional"></span><?php echo $this->lang->line('admin_rate_menu_remove_suffix');?></td>
                <td align="left"><input type="text" value="<?php echo $row->remove_rate_suffix;?>" name="remove_rate_suffix" id="remove_rate_suffix" maxlength="15" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_lead_strip');?></td>
                <td align="left"><input type="text" value="<?php echo $row->lead_strip;?>" name="leadstrip" id="leadstrip" maxlength="50" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_trail_strip');?></td>
                <td align="left"><input type="text" value="<?php echo $row->trail_strip;?>" name="trailstrip" id="trailstrip" maxlength="50" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><?php echo $this->lang->line('admin_rate_menu_prefix');?></td>
                <td align="left"><input type="text" value="<?php echo $row->prefix;?>" name="prefix" id="prefix" maxlength="50" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><?php echo $this->lang->line('admin_rate_menu_suffix');?></td>
                <td align="left"><input type="text" value="<?php echo $row->suffix;?>" name="suffix" id="suffix" maxlength="50" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><?php echo $this->lang->line('admin_rate_menu_lcr_profile');?></td>
                <td align="left"><input type="text" readonly="readonly" value="<?php echo $row->lcr_profile;?>" name="profile" id="profile" maxlength="50" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_start_date');?></td>
                <td align="left"><input type="text" value="<?php echo $row->date_start;?>" name="startdate" readonly id="startdate" maxlength="50" class="textfield datepicker"></td>
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_end_date');?></td>
                <td align="left"><input type="text" value="<?php echo $row->date_end;?>" name="enddate" readonly id="enddate" maxlength="50" class="textfield datepicker"></td>
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_quality');?></td>
                <td align="left"><input type="text" readonly="readonly" value="<?php echo $row->quality;?>" name="quality" id="quality" maxlength="50" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_reliability');?></td>
                <td align="left"><input type="text" readonly="readonly" value="<?php echo $row->reliability;?>" name="reliability" id="reliability" maxlength="50" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_lrn');?></td>
                <td align="left"><input type="text" readonly="readonly" value="<?php echo $row->lrn;?>" name="lrn" id="lrn" maxlength="50" class="textfield"></td>
              </tr>
              <tr>
                <td align="right"><span class="required">*</span><?php echo $this->lang->line('admin_rate_menu_carrier');?></td>
                <td align="left"><select id="carrier" name="carrier" class="textfield">
                    <?php echo show_carrier_select_box_valid_invalid($row->carrier_id);?>
                  </select></td>
                <input type="hidden" name="old_carrier" value="<?php echo $row->carrier_id;?>" />
              </tr>
              <tr>
                <td align="right" colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" colspan="2"><input border="0" id="submitaddRateForm" type="image" src="<?php echo base_url();?>assets/images/btn-submit.png"></td>
              </tr>
            </tbody>
          </table>
        </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="5"></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="20" colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
  </tbody>
</table>
<script type="text/javascript">
    $('#addRate').submit(function(){
        //show wait msg 
    $.blockUI({ css: { 
                    border: 'none', 
                    padding: '15px', 
                    backgroundColor: '#000', 
                    '-webkit-border-radius': '10px', 
                    '-moz-border-radius': '10px', 
                    opacity: .5, 
                    color: '#fff' 
                    } 
                });
        
        var digits = $('#digits').val();
        var rate = $('#rate').val();
        var costrate = $('#costrate').val();
		var buyblock_min_duration = $('#buyblock_min_duration').val();
		var sellblock_min_duration = $('#sellblock_min_duration').val();
        var buyblock = $('#buyblock').val();
        var sellblock = $('#sellblock').val();
        var remove_rate_prefix = $('#remove_rate_prefix').val();
        var remove_rate_suffix = $('#remove_rate_suffix').val();
        var leadstrip = $('#leadstrip').val();
        var trailstrip = $('#trailstrip').val();
        var prefix = $('#prefix').val();
        var suffix = $('#suffix').val();
        var profile = $('#profile').val();
        var startdate = $('#startdate').val();
        var enddate = $('#enddate').val();
        var quality = $('#quality').val();
        var reliability = $('#reliability').val();
        var lrn = $('#lrn').val();
        var carrier = $('#carrier').val();
        var country = $('#country').val();
        
        
        var required_error = 0;
        var rate_error = 0;
        
        //common required fields check
        if(digits == '' || rate == '' || costrate == '' || buyblock == '' || sellblock_min_duration == '' || buyblock_min_duration == '' || sellblock == '' || leadstrip == '' || trailstrip == '' ||  startdate == '' || enddate == '' || quality == '' || reliability == '' || lrn == '' || carrier == '' || country == '')
        {
            required_error = 1;
        }
        
        if(rate != '' && costrate != '')
        {
            if(rate < costrate)
            {
                rate_error = 1;
            }
        }
        
        var text = "";
        
        if(required_error == 1)
        {
            text += "<?php echo $this->lang->line('admin_new_rate_required_error');?><br/>";
        }
        
        if(rate_error == 1)
        {
            text += "<?php echo $this->lang->line('admin_new_rate_rate_error');?><br/>";
        }
        
        if(text != '')
        {
            $('.success').hide();
            $('.error').html(text);
            $('.error').fadeOut();
            $('.error').fadeIn();
            document.getElementById('err_div').scrollIntoView();
            $.unblockUI();
            return false;
        }
        else
        {
           var form = $('#addRate').serialize();
            $.ajax({
                    type: "POST",
					url: base_url+"groups/edit_rate_db",
					data: form,
                    success: function(html){
                            if(html == 'carrier_invalid')
                            {
                                $('.success').hide();
                                $('.error').html('<?php echo $this->lang->line('admin_new_rate_this_carrier_is_invalid');?>');
                                $('.error').fadeOut();
                                $('.error').fadeIn();
                                document.getElementById('err_div').scrollIntoView();
                                $.unblockUI();
                            }
                            else if(html == 'duplicate')
                            {
                                $('.success').hide();
                                $('.error').html('<?php echo $this->lang->line('admin_new_rate_duplicate_rate');?>');
                                $('.error').fadeOut();
                                $('.error').fadeIn();
                                document.getElementById('err_div').scrollIntoView();
                                $.unblockUI();
                            }
                            else
                            {
                                $('.error').hide();
                                $('.success').html("<?php echo $this->lang->line('admin_new_rate_rate_updated');?>");
                                $('.success').fadeOut();
                                $('.success').fadeIn();
                                document.getElementById('success_div').scrollIntoView();
                                $.unblockUI();
                            }
                    }
				});
                
            return false;
        }
        return false;
    });
    
   $('.datepicker').datetimepicker({
        showSecond: true,
        showMillisec: false,
        timeFormat: 'hh:mm:ss',
        dateFormat: 'yy-mm-dd'
    });
    
</script> 
