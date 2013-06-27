<?php
	$symbol = $_GET['s'];
	include 'functions/YQL_functions.php';
?>
<!DOCTYPE html>
<html lang="EN-US">
    <?php
        include 'header.php';
    ?>
    <body class="custom-background">
        <div class="wrapper sticky_footer" id="top">
            <!-- HEADER BEGIN -->
           <?php 
            include 'head.php';
           ?>
            <!-- HEADER END -->
            
            <!-- CONTENT BEGIN -->
            <div id="content"  class="right_sidebar">
                
                <div class="inner">
                    <div class="markets_real_time" style="width:960px; padding:0px 9px;">
                        <script src="http://markets.financialcontent.com/stocks?Module=tickerbar&Output=JS"></script>
                    </div>
                    <div class="general_content">
                        <div class="main_content">
                        	<?php
                        		$info=quotes($symbol,'select * from yahoo.finance.quotes where symbol=');
                        		$info_keys=keystats($symbol,'select * from yahoo.finance.keystats where symbol=');
                        	?>
                        	<div class = "summary">
                        		<div class = "name">
                        				<p><?php echo $info->Name." (".$info->symbol.")  ".$info->StockExchange?></p>
                        		</div>
                        		<table border="0" bordercolor="#FFCC00" style="font-size: 16px; background-color:#FFFFCC" width="100%" cellpadding="3" cellspacing="3">
	<tr>
		<td>Prev Close: </td>
		<td><?php echo $info->PreviousClose;?></td>
		<td>Day's Range</td>
		<td><?php echo $info->DaysRange;?></td>
	</tr>
	<tr>
		<td>Open: </td>
		<td><?php echo $info->Open;?></td>
		<td>52wk Range: </td>
		<td><?php echo $info_keys->p_52_WeekLow->content." - ".$info_keys->p_52_WeekHigh->content;?></td>
	</tr>
	<tr>
		<td>Bid: </td>
		<td><?php echo $info->Bid;?></td>
		<td>Volume: </td>
		<td><?php echo $info->Volume;?></td>
	</tr>
	<tr>
		<td>Ask: </td>
		<td><?php echo $info->Ask;?></td>
		<td>Avg Vol (3m): </td>
		<td><?php echo $info_keys->AvgVol[0]->content;?></td>
	</tr>
	<tr>
		<td>1y Target Est: </td>
		<td><?php echo $info->OneyrTargetPrice;?></td>
		
		<td>Market Cap: </td>
		<td><?php echo $info->MarketCapitalization;?></td>
	</tr>
	<tr>
		<td>Beta: </td>
		<td><?php echo $info_keys->Beta;?></td>
		<td>P/E (ttm):</td>
		<td><?php echo $info_keys->TrailingPE->content;?></td>
	</tr>
	<tr>
		<td>Next Earnings Date:</td>
		<td>TO DO </td>
		<td>EPS (ttm): </td>
		<td><?php echo $info_keys->DilutedEPS->content;?></td>
	</tr>
	<tr>
		<td> </td>
		<td> </td>
		<td>Div & Yield: </td>
		<td><?php echo $info->DividendYield;?></td>
	</tr>
</table>




                        	</div>

                        	

            <!-- Recent News -->
            
        
                        </div>
                        
                        <div class="sidebar">
                           <div id="yfi_investing_nav" style="height: 1729px;">
	<div class="hd">
		<h2>More On <?php echo $symbol; ?></h2>
	</div>
	<div class="bd">
		<h3>Quotes</h3>
		<ul>
			<li>
				<a href="stock_search.php?s=<?php echo $symbol;?>">Summary</a>
			</li>
			<li>
				<a href="process.php?s=<?php echo $symbol;?>">Order Book</a>
			</li>
			<li>
				<a href="process.php?s=<?php echo $symbol;?>">Options</a>
			</li>
			<li>
				<a href="/q/hp?s=GOOG+Historical+Prices">Historical Prices</a>
			</li>
		</ul>
		<h3>Charts</h3>
		<ul>
			<li>
				<a href="/echarts?s=GOOG+Interactive#symbol=GOOG;range=">Interactive</a>
			</li>
			<li>
				<a href="/q/bc?s=GOOG+Basic+Chart">Basic Chart</a>
			</li>
			<li>
				<a href="/q/ta?s=GOOG+Basic+Tech.+Analysis">Basic Tech. Analysis</a>
			</li>
		</ul>
		<h3>News &amp; Info</h3>
		<ul>
			<li>
				<a href="/q/h?s=GOOG+Headlines">Headlines</a>
			</li>
			<li>
				<a href="/q/p?s=GOOG+Press+Releases">Press Releases</a>
			</li>
			<li>
				<a href="/q/ce?s=GOOG+Company+Events">Company Events</a>
			</li>
			<li>
				<a href="/mb/GOOG/">Message Boards</a>
			</li>
			<li>
				<a href="/marketpulse/GOOG">Market Pulse</a>
			</li>
		</ul>
		<h3>Company</h3>
		<ul>
			<li>
				<a href="/q/pr?s=GOOG+Profile">Profile</a>
			</li>
			<li class="selected">Key Statistics</li>
			<li>
				<a href="/q/sec?s=GOOG+SEC+Filings">SEC Filings</a>
			</li>
			<li>
				<a href="/q/co?s=GOOG+Competitors">Competitors</a>
			</li>
			<li>
				<a href="/q/in?s=GOOG+Industry">Industry</a>
			</li>
			<li>
				<a href="/q/ct?s=GOOG+Components">Components</a>
			</li>
		</ul>
		<h3>Analyst Coverage</h3>
		<ul>
			<li>
				<a href="/q/ao?s=GOOG+Analyst+Opinion">Analyst Opinion</a>
			</li>
			<li>
				<a href="/q/ae?s=GOOG+Analyst+Estimates">Analyst Estimates</a>
			</li>
			<li>
				<a href="/q/rr?s=GOOG+Research+Reports">Research Reports</a>
			</li>
		</ul>
		<h3>Ownership</h3>
		<ul>
			<li>
				<a href="/q/mh?s=GOOG+Major+Holders">Major Holders</a>
			</li>
			<li>
				<a href="/q/it?s=GOOG+Insider+Transactions">Insider Transactions</a>
			</li>
			<li>
				<a href="/q/ir?s=GOOG+Insider+Roster">Insider Roster</a>
			</li>
		</ul>
		<h3>Financials</h3>
		<ul>
			<li>
				<a href="/q/is?s=GOOG+Income+Statement&amp;annual">Income Statement</a>
			</li>
			<li><a href="/q/bs?s=GOOG+Balance+Sheet&amp;annual">Balance Sheet</a>
			</li>
			<li>
				<a href="/q/cf?s=GOOG+Cash+Flow&amp;annual">Cash Flow</a>
			</li>
		</ul>
	</div>
	<div class="ft">
	</div>
</div>
                        </div>
                        <div class="clearboth"></div>
                    </div>
                </div>
            </div>
            <!-- CONTENT END -->
            
            <!-- FOOTER BEGIN -->
            <?php 
                include 'footer.php';
            ?>
            <!-- FOOTER END -->
        </div>
    </div>
        <!-- POPUP BEGIN -->
        
    </body>
</html>