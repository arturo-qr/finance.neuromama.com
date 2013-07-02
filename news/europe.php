<div style="width:600px;">
				<?php
					$i=0;
					$url = "http://news.google.com/?ned=us&topic=t&output=rss"; // url of google news
					$xml = simplexml_load_file('http://www.economist.com/rss/europe_rss.xml'); //loading the document
					$items = $xml->channel->item; //gets the title of the document.		

					foreach($items as $item){
						if($i<10){
							$i++;
							$story= $item->description;
							$story = preg_replace("/width=\"([0-9]{2}|[0-9]{3}|[0-9]{4})\"/","width=\"200\"",$story);
							$story = preg_replace("/height=\"([0-9]{2}|[0-9]{3}|[0-9]{4})\"/","height=\"175\"",$story);
							$story = preg_replace("/div class=\"([a-zA-Z0-9_\-\.]{1,})\"/","div class=\"newsblock\"",$story);
							$bool =preg_match("/<img/",$story);

							$startimg = strpos($story, '<img') ;
							$endimg = strpos($story, '/>');
							$image = substr($story, $startimg,$endimg - $startimg+2);
							$bfimg = substr($story,0,$startimg-1);
							$aftimg = substr($story,$endimg+2,strlen($story));
							?>
							<div id="imagefoo" style="postion:relative; float:left; width:200px; padding-right:8px;">
								<?php 
									if($bool){
										echo $image;
									}
									else{
										echo "&nbsp";
									}
								?>
							</div>
							<div id="p_news" style="postion:relative; float:left; width:390px; ">
								<?php
									echo $item->pubDate."</br></br>";

									echo "<a href=\"".$item->link."\" target=\"_blank\">".$item->title."</a>";
									echo "</br></br>";
									if($bool){
										echo $bfimg;
										echo $aftimg;
									}
									else{
										echo $bfimg;
									}
									?>
								</br></br>
							</div>
							<div class="clearall" style="clear:both; padding-top:10px;"></div>
						<?php
						}
						else
							break;
					}
				?>
			</div>