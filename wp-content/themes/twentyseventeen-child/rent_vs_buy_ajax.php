<?php 
    $cost_of_house                  =   $_POST['cost_of_house'];
    $down_payment                   =   $_POST['down_payment'];
    $tenure                         =   $_POST['tenure'];
    $tenure_months                  =   $_POST['tenure_months'];
    $annual_interest_rate           =   $_POST['annual_interest_rate'];
    $monthly_interest_rate          =   $_POST['monthly_interest_rate'];
    $initial_rent                   =   $_POST['initial_rent'];
    $mortgage                       =   $_POST['mortgage'];
    $home_owners_insurance          =   $_POST['home_owners_insurance'];
    $rent_increase_interval         =   $_POST['rent_increase_interval'];
    $rent_increase_interval_per     =   $_POST['rent_increase_interval_per'];
    $closing_costs                  =   $_POST['closing_costs'];
    $annual_appreciation_on_house   =   $_POST['annual_appreciation_on_house'];
    $percentage                     =   $_POST['percentage'];
    $monthly_repairs                =   $_POST['monthly_repairs'];
    $tax_rate_percentage            =   $_POST['tax_rate_percentage'];
    $monthly_HOA                    =   $_POST['monthly_HOA'];

  //  print_r($_POST);

 ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div> 
<!-- <table cellpadding="10px" cellspacing="10px" align="center" border="1">
  <tr>
    <th>Month </th>
    <th>Monthly Payment</th>
    <th>Interest Paid</th>
    <th>Principal Paid</th>
    <th>Outstanding Balance</th>
    <th>Rent</th>
    <th>Cumulative Rent</th>
    <th>Value of House</th>
    <th>Insurance Due</th>
    <th>Taxes Due</th>
    <th>PMI</th>
    <th>Repair Costs</th>
    <th>Cumulative Net Cost of Owning Home</th>
    <th>Return on Capital</th>
    <th>Cumulative Net Cost of Rent</th>
    <th>Benefit to Home Purchase</th>
  </tr>
  
  <tr>
    <td>0</td>
    <td></td>
    <td></td>
    <td></td>
    <td><?= number_format($mortgage,2) ?></td>
    <td></td>
    <td></td>
    <td><?= number_format($cost_of_house,2) ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  
  </tr> -->
  
  <?php  

  $value_of_houseArr                    =   array();
  $cumulative_net_cost_owning_houseArr  =   array();
  $cumulative_net_cost_of_rentArr       =   array();

  for($i=1;$i<=$tenure_months;$i++){
  
    $mp_step1                           =   $_POST['mortgage'] * ($monthly_interest_rate/100);
    $mp_step2                           =   $monthly_interest_rate / 100;
    $mp_step3                           =   1 + $mp_step2;
    $mp_step4                           =   pow($mp_step3, -$tenure_months);
    $mp_step5                           =   1 - $mp_step4;
    $monthlyPayment                     =   $mp_step1 / $mp_step5;
    $intrestPaid                        =   $mortgage * ($monthly_interest_rate / 100);
    $principalPaid                      =   $monthlyPayment - $intrestPaid;
    $mortgage                           =   $mortgage - $principalPaid;

    if($i==1){
       $rent                            =   $initial_rent + (2 * $initial_rent);
       $cumulative_rent                 =   $rent;
       $value_of_house                  =   $cost_of_house *( 1 +( $annual_appreciation_on_house / 100) / 12);
       $taxes_due                       =   (($tax_rate_percentage) / 12) * $value_of_house;
       $repair_costs                    =   $value_of_house * (0.03/100);
       $insurance_due                   =   (($percentage / 100) * $value_of_house) / 12;
      
    }else{

        if($i <= $rent_increase_interval){
            $rent                       = $initial_rent;
        }else{
          
        if($i % ($rent_increase_interval+1) === 0){
        $rentNew                        =   $initial_rent * $rent_increase_interval_per/100;

        $rent                           =   $initial_rent + $rentNew;

        $initial_rent                   =   $rent;
        }
        
      }
       $cumulative_rent                 =  $cumulative_rent + $initial_rent;

       $value_of_house                  =  $value_of_house * (1 + ($annual_appreciation_on_house / 100) / 12);
       
       $taxes_due                       =  (($tax_rate_percentage) / 12) * $value_of_house;

       $repair_costs                    =  $value_of_house * (0.03 / 100);

       $insurance_due                   =  (($percentage / 100) * $value_of_house) / 12;
       
  }

      $final_insurance_due              += $insurance_due;



      $final_taxes_due                  += $taxes_due;

    if($down_payment < ($cost_of_house * 0.2)){
      if (((($down_payment) + ($mortgage)) - ($mortgage)) > ($cost_of_house * 0.22)) {
          $pmi                                =   0;
      } else {
          $pmi                                =   ((0.00133 * $mortgage) / 12);
      }
    }else{
          $pmi                                =   0;
    }

    $final_monthly_payment                    =   $monthlyPayment * $i;

  

    $monthly_repairs                          =   $repair_costs * $cost_of_house;

    $final_PMI                                +=  $pmi;

    $final_repair_costs                       +=  $repair_costs;

    $cumulative_net_cost_owning_house__       =   ((($down_payment + $final_monthly_payment + $mortgage) - $value_of_house) + 
                                                  $closing_costs + $final_insurance_due + $final_taxes_due + $final_PMI + 
                                                  $monthly_repairs + $monthly_HOA) ;

    $value_of_houseArr[$i]                    =    $value_of_house;

  
    if($i == 1){
       $last_step                             =   ($value_of_house - $cost_of_house);
    }else {
       $last_step                             =   ($value_of_house - $value_of_houseArr[$i-1]);
    }

    
    $last_step1                               =   $last_step * 0.15;

    $cumulative_net_cost_owning_house1        =   $down_payment + $final_monthly_payment + $mortgage - $value_of_house + $closing_costs 
                                                    + $final_insurance_due + $final_taxes_due + $final_PMI + $final_repair_costs;


    $cumulative_net_cost_owning_house         =   $cumulative_net_cost_owning_house1 - $last_step;


    $return_on_capital                        =   (($down_payment + $final_monthly_payment) - $cumulative_rent) * (0.04 - 0.02)/12;
    

    $final_return_on_capital                  +=  $return_on_capital;

    $cumulative_net_cost_of_rent              =   $cumulative_rent - $final_return_on_capital;

    $benefit_to_home_purchase                 =   $cumulative_net_cost_of_rent - $cumulative_net_cost_owning_house;

    if($cumulative_net_cost_owning_house < $cumulative_net_cost_of_rent){
      $is_rent_more_expensive                 =   "TRUE";     
    }else{
      $is_rent_more_expensive                 =   "FALSE";     
    }
    

    $cumulative_net_cost_owning_houseArr[]    =   $cumulative_net_cost_owning_house;

    $cumulative_net_cost_of_rentArr[]         =   $cumulative_net_cost_of_rent;


 
   ?>
<!--   <tr>
    <td><?= $i ?></td>
    <td><?= number_format($monthlyPayment,2) ?></td>
    <td><?= number_format($intrestPaid,2) ?></td>
    <td><?= number_format($principalPaid,2) ?></td>
    <td><?= number_format($mortgage,2) ?></td>
    <td><?= number_format($rent,2) ?></td>
    <td><?= number_format($cumulative_rent,2) ?></td>
    <td><?= number_format($value_of_house,2) ?></td>
    <td><?= number_format($insurance_due,2) ?></td>
    <td><?= number_format($taxes_due,2) ?></td>
    <td><?= number_format($pmi,2) ?></td>
    <td><?= number_format($repair_costs,2) ?></td>
    <td><?= number_format($cumulative_net_cost_owning_house,2) ?></td>
    <td><?= number_format($return_on_capital,2) ?></td>
    <td><?= number_format($cumulative_net_cost_of_rent,2) ?></td>
    <td><?= number_format($benefit_to_home_purchase,2) ?></td>
  
   
   
  </tr>  -->
  <?php }  ?>
<!-- </table> -->



<script type="text/javascript">
  Highcharts.chart('container', {
  chart: {
    type: 'line'
  },
  title: {
    text: 'Breakevent Point of Rent vs Buy'
  },
  subtitle: {
    text: '<span style="color:#000";font-weight:bold;font-size:20px">Breakevent Point of Rent vs Buy</span>'
  },
  xAxis: {
   
    categories: ['']
  },
  yAxis: {

   /* title: {
      text: '',
     
    }*/
  },
  plotOptions: {
    line: {
      dataLabels: {
        enabled: false
      },
      enableMouseTracking: true
    }
  },
  series: [{
    name: 'Cumulative Net Cost of Owning Home',
    data: [<?php foreach($cumulative_net_cost_owning_houseArr as $val) { echo $val.', '; } ?>]
  }, {
    name: 'Cumulative Net Cost of  Rent',
    data: [<?php foreach($cumulative_net_cost_of_rentArr as $val1) { echo $val1.', '; } ?>]
  }]
});
</script>