<?php 
    if(!empty($info->ErrorIndicationreturnedforsymbolchangedinvalid)){
echo "<div class=\"error_stock\">Error! Symbol stock not found, please try again...</div>";
}
else{
    echo "<div class = \"stock_info\">";
    echo "<div class=\"infoss\" style=\"color:#000\">".$info->Name." (".$info->symbol.") - <b style=\"font-size: 12px; color:#ccc\">".$info->StockExchange."</b></div>";
    echo "</div>";
    switch ($option) {
        case 'su':
            # code...
            include 'results_sumary.php'; 
            include 'results/chart.php';
            break;
        case 'ob':
            # code...
            include 'results/order_book.php';
            break;
        case 'op':
            # code...
            include 'results/options_stock.php';
            break;
        case 'hp':
            # code...
            include 'results/historicaldata.php';            
            break;
        case 'ch':
            # code...
            include 'results/interactive_chart.php';
            break;
        case 'bc':
            # code...
            include 'results/basic_chart.php';
            break;
        case 'bt':
            # code...
            include 'results/basic_tech.php';

            break;
        case 'hd':
            # code...
            include 'results/headlines';
            break;
        default:
            # code...
            include 'results_sumary.php'; 
            include 'results/chart.php';
            break;
    }


}
?>