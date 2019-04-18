<?php 
		$location          						=  $_POST['location'];
		$annual_income          				=  $_POST['annual_income'];
		$down_payment          					=  $_POST['down_payment'];
		$monthly_debt_obligations       		=  $_POST['monthly_debt_obligations'];
		$annual_interest_rate           		=  $_POST['annual_interest_rate'];
		$monthly_HOA_fee          				=  $_POST['monthly_HOA_fee'];
		$term          							=  $_POST['term'];
		$homeowner_insurance_rate       		=  $_POST['homeowner_insurance_rate'];
		$property_tax_rate          			=  $_POST['property_tax_rate'];
		$DTI_ratio         						=  $_POST['DTI_ratio'];


		$annual_interest_rate_per				=  $annual_interest_rate/100;
		$DTI_ratio_per							=  $DTI_ratio/100;
		$homeowner_insurance_rate_per   		=  $homeowner_insurance_rate/100;
		$property_tax_rate_per		    		=  $property_tax_rate/100;

		//Annuity Factor Calculation//
		$af_step1								=  1 + ($annual_interest_rate_per/12);
		$af_step2								=  (-12)*$term;
		$af_step3								=  pow($af_step1,$af_step2);
		$af_step4								=  1 - $af_step3;
		$af_step5								=  $af_step4/$annual_interest_rate_per;
		$annuity_factor				    		=  $af_step5*12;

		$data['annuity_factor']					=  number_format($annuity_factor,2);
		//Annuity Factor Calculation//

		//Home Price Calculation// =(0.36*B3/12-B4-B5+B8/B11)/(1/B11+(B9+B10)/12)
		$home_price 							= ($DTI_ratio_per * $annual_income/12-$monthly_debt_obligations-$monthly_HOA_fee+$down_payment/$annuity_factor)/(1/$annuity_factor+($homeowner_insurance_rate_per+$property_tax_rate_per)/12);
		$data['home_price']						=  number_format($home_price,2);
	//	print_r($data['home_price']	);exit;
		$data['down_payment']		    		=  number_format($down_payment,2);

		$mortgage_amount						=  $home_price - $down_payment;
		$data['mortgage_amount']	   	 		=  number_format($mortgage_amount,2);

		$monthly_mortgage_payment				=  $mortgage_amount / $annuity_factor;
		//$data['monthly_mortgage_payment'] 		=  number_format($monthly_mortgage_payment,2);
		$data['monthly_mortgage_paymentNew']    =  number_format($monthly_mortgage_payment,2);

		$homeowner_insurance 					=  $home_price * $homeowner_insurance_rate_per/12;
		$data['homeowner_insurance'] 	   		=  number_format($homeowner_insurance,2);

		$property_tax 							=  $home_price * $property_tax_rate_per / 12;
		$data['property_tax'] 	   				=  number_format($property_tax,2);

		$data['monthly_HOA_fee'] 	   			=  number_format($monthly_HOA_fee,2);

		$total_monthly_mortgage_payment			=  $monthly_mortgage_payment + $homeowner_insurance + $property_tax + $monthly_HOA_fee;

		$data['total_monthly_mortgage_payment'] =  number_format($total_monthly_mortgage_payment,2);

		
		//Home Price Calculation//

		echo json_encode($data);exit();
		
	

 ?>