<table border="0" cellpadding="3" cellspacing="1" width="100%">
	<tbody>
		<tr>
			<th scope="col" class="yfnc_tablehead1" width="12%" align="left">Strike</th>
			<th scope="col" class="yfnc_tablehead1" width="12%">Symbol</th>
			<th scope="col" class="yfnc_tablehead1" width="12%" align="right">Last</th>
			<th scope="col" class="yfnc_tablehead1" width="12%" align="right">Chg</th>
			<th scope="col" class="yfnc_tablehead1" width="12%" align="right">Bid</th>
			<th scope="col" class="yfnc_tablehead1" width="12%" align="right">Ask</th>
			<th scope="col" class="yfnc_tablehead1" width="12%" align="right">Vol</th>
			<th scope="col" class="yfnc_tablehead1" width="12%" align="right">Open Int</th>
		</tr>
	</tbody>
</table>
?>
<?php
	$options= options($symbol,'select * from yahoo.finance.options where symbol=',$date);
?>