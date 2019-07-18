<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\ColumnChart;
?>

<div class="report-content">
    <div class="text-center">
        <h1>Sales Report</h1>
        <p class="lead">By Month</p>
    </div>

    <?php
    ColumnChart::create(array(
        "dataStore"=>$this->dataStore('sale_by_month'),  
        "columns"=>array(
            "date"=>array(
                "label"=>"Month",
                "type"=>"datetime",
                "format"=>"Y-n",
                "displayFormat"=>"F, Y",
            ),
            "markup"=>array(
                "label"=>"Amount",
                "type"=>"number",
                "prefix"=>"RM",
            )
        ),
        "width"=>"100%",
    ));
    ?>

    <?php
    Table::create(array(
        "dataStore"=>$this->dataStore('sale_by_month'),
        "columns"=>array(
            "date"=>array(
                "label"=>"Month",
                "type"=>"datetime",
                "format"=>"Y-n",
                "displayFormat"=>"F, Y",
            ),
            "markup"=>array(
                "label"=>"Amount",
                "type"=>"number",
                "prefix"=>"RM",
                        )
        ),
        "cssClass"=>array(
            "table"=>"table table-hover table-bordered"
        )
    ));
    ?>
</div>