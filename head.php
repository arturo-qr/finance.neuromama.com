  <?php
if(isset($_POST['submit']))
{
//Do all the submission part or storing in DB work and all here
header('Location: stock_search.php');
}
?>
 <header>
               <div id="header">
                    <section class="top">
                        <div class="inner">
                            <div class="fl">
                                <div class="block_top_menu">
                                    <ul id="top-left-menu" class=""><li id="menu-item-16" class="menu-item menu-item-16"><a title="NeuroMama" href="http://neuromama.com/#">NeuroMama</a></li>
                                        <li id="menu-item-17" class="menu-item menu-item-17"><a title="Neuro Points" href="http://neuromama.com/#">Neuro Points</a></li>
                                        <li id="menu-item-19" class="menu-item menu-item-19"><a title="Neuro World" href="http://neuromama.com/#">Neuro World</a></li>
                                        <li id="menu-item-18" class="menu-item menu-item-18"><a title="Contact Us" href="http://neuromama.com/#">Contact Us</a></li>
                                        </ul>                            
                                </div>
                            </div>
                            
                            <div class="fr">
                                <div class="block_top_menu">
                                    <ul id="top-right-menu" class="">
                                        <li id="menu-item-15" class="menu-item menu-item-15">
                                            <a title="Registration" href="http://neuromama.com/index.php?action=reg" target="_blank">Registration</a>
                                        </li>
                                        <li id="menu-item-14" class="menu-item menu-item-14">
                                            <a title="NeuroMail" href="http://neuromama.com/index.php?action=neuromail" target="_blank">NeuroMail</a>
                                        </li>
                                    </ul>                            
                                </div>
                                
                            <div class="block_social_top">
                                <ul>
                                    <li><a href="http://twitter.com/NeuroMamaFinance" class="tw">Twitter</a></li>                                    
                                    <li><a href="http://facebook.com/NeuroMamaFinance" class="fb">Facebook</a></li>                                                                     
                                    <li><a href="http://finance.neuromama.com/rss" class="rss">RSS</a></li>                                
                                </ul>   
                            </div>
                                                        </div>
                            
                            <div class="clearboth"></div>
                        </div>
                    </section>
                                    
                    <section class="bottom">
                        <div class="inner">
                            <div id="logo_top" style="margin-top: -4px; margin-left: 0px; ">
                                <a href="http://finance.neuromama.com">
                                    <img src="http://finance.neuromama.com/wp-content/uploads/2013/06/Top.logo_2.png" alt="Finance NeuroMama" title="Finance NeuroMama">
                                </a>
                            </div>
                                                    
                            <div class="block_today_date">
                                <div class="num">
                                    <p id="num_top_day">24</p>
                                </div>
                                <div class="other">
                                    <p class="month_year">
                                        <span id="month_top_display">Jun</span>, <span id="year_top_display">2013</span>
                                    </p>
                                    <p id="day_top_display" class="day">Monday</p>
                                </div>
                            </div>
                            <div class="fr"></div>
                            <div class="clearboth"></div>
                        </div>
                    </section>
                                    
                    <section class="section_main_menu">
                        <div class="inner">
                            <nav class="main_menu">
                                <ul id="main-primary-menu" class="">
                                    <li id="menu-item-22" class="menu-item menu-item-22">
                                        <a title="Home" href="/">Home</a>
                                    </li>
                                    <li id="menu-item-63" class="menu-item menu-item-63">
                                        <a title="Markets" href="markets/">Markets</a>
                                    </li>
                                    <li id="menu-item-21" class="menu-item menu-item-21">
                                        <a title="Business" href="business/">Business</a>
                                    </li>
                                    <li id="menu-item-20" class="menu-item menu-item-20">
                                        <a title="Technology" href="http://finance.neuromama.com/technology/">Technology</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-65" class="menu-item menu-item-65"><a title="Science" href="http://finance.neuromama.com/science/">Science</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-64" class="menu-item menu-item-64">
                                        <a title="Media" href="http://finance.neuromama.com/media/">Media</a>
                                    </li>
                                        <form class="searchform" name="upcoming_form"action="stock_search.php" method="get">
                                            <input class="searchfield" type="text" id="symbol" name="s" value="" placeholder="Stock Symbol..." />
                                            <input class="searchbutton" id='find_symbol' value="Go"  type="submit"/>
                                        </form>
                                        


                                </ul>
<!-- <form name='upcoming_form'><script>
                                            // Attach event handler to button
                                            document.getElementById("find_symbol").addEventListener("click",find_symbol,false);// Get user input and submit form
                                            function find_symbol(){
                                                document.upcoming_form.symbol.value = document.getElementById('symbol').value || "nero";
                                                document.upcoming_form.submit();
                                            }
                                        </script>
                                                Symbol: <input name='symbol' id='symbol' type='text' size='20'/><br/>
                                                <p><button id='find_symbol'>Find Symbol</button></p>
                                            </form>

                                        -->
                            </nav>
                        </div>
                    </section>

                    <section class="section_secondary_menu">
                        <div class="inner">
                            <nav class="secondary_menu">
                                <ul id="main-secondary-menu" class="">
                                    <li id="menu-item-67" class="menu-item menu-item-67">
                                        <a title="All News" href="http://finance.neuromama.com/all-news/">All News</a>
                                    </li>
                                    <li id="menu-item-79" class="menu-item menu-item-79">
                                        <a title="World" href="http://finance.neuromama.com/world/">World</a>
                                    </li>
                                    <li id="menu-item-66" class="menu-item menu-item-66">
                                        <a title="Africa" href="http://finance.neuromama.com/africa/">Africa</a>
                                    </li>
                                    <li id="menu-item-68" class="menu-item menu-item-68">
                                        <a title="Asia" href="http://finance.neuromama.com/asia/">Asia</a>
                                    </li>
                                    <li id="menu-item-71" class="menu-item menu-item-71"><a title="BRICS" href="http://finance.neuromama.com/brics/">BRICS</a></li>
                                    <li id="menu-item-73" class="menu-item menu-item-73"><a title="Europe" href="http://finance.neuromama.com/europe/">Europe</a></li>
                                    <li id="menu-item-75" class="menu-item menu-item-75"><a title="Middle East" href="http://finance.neuromama.com/middle-east/">Middle East</a></li>
                                    <li id="menu-item-78" class="menu-item menu-item-78"><a title="USA" href="http://finance.neuromama.com/usa/">USA</a></li>
                                </ul>
                            </nav>
                            <div class="block_clock">
                                <p>Time: <span id="time_display">4:06 am</span></p>
                            </div>
                        </div>
                    </section>
                                    
                </div>
            </header>