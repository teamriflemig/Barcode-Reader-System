<?php
require_once('dbconnect.php');
require_once "koolreport/core/autoload.php";

use \koolreport\KoolReport;
use \koolreport\processes\Filter;
use \koolreport\processes\TimeBucket;
use \koolreport\processes\Group;
use \koolreport\processes\Limit;

class SakilaRental extends KoolReport
{
    function settings()
    {
        return array(
            "dataSources"=>array(
                "sakila_rental"=>array(
                    "connectionString"=>"mysql:host=localhost;dbname=db1",
                    "username"=>"root",
                    "password"=>"",
                    "charset"=>"utf8"
                ),
            )
        ); 
    }    
    protected function setup()
    {
        $this->src('sakila_rental')
        ->query("SELECT date,markup FROM report")
        ->pipe(new TimeBucket(array(
            "date"=>"month"
        )))
        ->pipe(new Group(array(
            "by"=>"date",
            "sum"=>"markup"
        )))
        ->pipe($this->dataStore('sale_by_month'));
    } 
}
?>