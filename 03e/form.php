<?php

// if the from is loaded from WordPress form loader plugin, 
// the phpfmg_display_form() will be called by the loader 
if( !defined('FormmailMakerFormLoader') ){
    # This block must be placed at the very top of page.
    # --------------------------------------------------
	require_once( dirname(__FILE__).'/form.lib.php' );
    phpfmg_display_form();
    # --------------------------------------------------
};


function phpfmg_form( $sErr = false ){
		$style=" class='form_text' ";

?>

<div id='frmFormMailContainer'>
<h2>Register now</h2>
<form name="frmFormMail" id="frmFormMail" target="submitToFrame" action='<?php echo PHPFMG_ADMIN_URL . '' ; ?>' method='post' enctype='multipart/form-data' onsubmit='return fmgHandler.onSubmit(this);'>

<input type='hidden' name='formmail_submit' value='Y'>
<input type='hidden' name='mod' value='ajax'>
<input type='hidden' name='func' value='submit'>
            
            
<ol class='phpfmg_form' >

<li class='field_block' id='field_0_div'><div class='col_label'>
	<label class='form_field'></label><label class='form_required' ></label> </div>
	<div class='col_field'>
	<input placeholder="FIRST NAME" type="text" name="field_0"  id="field_0" value="<?php  phpfmg_hsc("field_0", ""); ?>" class='text_box'>
	<div id='field_0_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_1_div'><div class='col_label'>
	<label class='form_field'></label><label class='form_required' ></label> </div>
	<div class='col_field'>
	<input placeholder="LAST NAME*" type="text" name="field_1"  id="field_1" class='text_box'>
	<div id='field_1_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_4_div'><div class='col_label'>
	<label class='form_field'></label><label class='form_required' ></label> </div>
	<div class='col_field'>
	<input placeholder="EMAIL*" type="text" name="field_4"  id="field_4" value="<?php  phpfmg_hsc("field_4", ""); ?>" class='text_box'>
	<div id='field_4_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_3_div'><div class='col_label'>
	<label class='form_field'></label><label class='form_required' ></label> </div>
	<div class='col_field'>
	<input placeholder="PHONE*" type="text" name="field_3"  id="field_3" value="<?php  phpfmg_hsc("field_3", ""); ?>" class='text_box'>
	<div id='field_3_tip' class='instruction'></div>
	</div>
</li>

<li class='field_block' id='field_2_div'><div class='col_label'>
	<label class='form_field'></label><label class='form_required' ></label> </div>
	<div class='col_field'>
	<input placeholder="POSTCODE*" type="text" name="field_2"  id="field_2" value="<?php  phpfmg_hsc("field_2", ""); ?>" class='text_box'>
	<div id='field_2_tip' class='instruction'></div>
	</div>
</li>
            <li>
            <div class='form_submit_block col_field'>
	                <span id='phpfmg_processing' style='display:none;vertical-align:top'>
                    <img id='phpfmg_processing_gif' src='<?php echo PHPFMG_ADMIN_URL . '?mod=image&amp;func=processing' ;?>' border=0 alt='Processing...'> <label id='phpfmg_processing_dots'></label>
                </span>
				
                <div id="frmFormMailContainer-submit"><input type='submit' value='Submit' class='form_button'></div>

				<div id='err_required' class="form_error" style='display:none;'>
				
				    <label class='form_error_title'>Please check the required fields</label>
				</div>
				

            </div>
            </li>
            
</ol>
</form>

<iframe name="submitToFrame" id="submitToFrame" src="javascript:false" style="position:absolute;top:-10000px;left:-10000px;" /></iframe>

</div> 
<!-- end of form container -->


<!-- [confirmation message] -->
<div id='thank_you_msg' style='display:none;'>
	<br><br>
    <p style="text-align:center;font-size:1.6em">The form has been sent.<br>
    <br>We will be contacting you soon.<br>
    <br>Thank you!
    <br><br></p>
</div>


<?php
			
    phpfmg_javascript($sErr);

} 
# end of form




function phpfmg_form_css(){
    $formOnly = isset($GLOBALS['formOnly']) && true === $GLOBALS['formOnly'];
?>

<?php
}
?>