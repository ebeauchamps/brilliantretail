<?php
/************************************************************/
/*	BrilliantRetail 										*/
/*															*/
/*	@package	BrilliantRetail								*/
/*	@Author		David Dexter  								*/
/* 	@copyright	Copyright (c) 2010-2015						*/
/* 	@license	http://opensource.org/licenses/OSL-3.0	*/
/* 	@link		http://brilliantretail.com 					*/
/*															*/
/************************************************************/
/* NOTICE													*/
/*															*/
/* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF 	*/
/* ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED	*/
/* TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 		*/
/* PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT 		*/
/* SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY */
/* CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION	*/
/* OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR 	*/
/* IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER 		*/
/* DEALINGS IN THE SOFTWARE. 								*/	
/************************************************************/
?>
<table id="siteTable" class="product_edit" width="100%" cellpadding="0" cellspacing="0">
	<thead>
    	<tr>
    		<th>
    			<?=lang('br_title')?></th>
    	</tr>
	</thead>
	<tbody>
    	<?php
			foreach($groups as $key => $val){
				$link = ($key == 1) ? '<b>'.$val.'</b>' : '<a href="'.$base_url.AMP.'method=config_permission_edit&group_id='.$key.'">'.$val.'</a>';
				echo '	<tr>
				        	<td>
				        		'.$link.'</td>
				        </tr>';
			}
    	?>
	</tbody>
</table>