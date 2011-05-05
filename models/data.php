<?php

class Data extends CI_Model {
	
	public $states = array(		'AL'=>"Alabama",  
								'AK'=>"Alaska",  
								'AZ'=>"Arizona",  
								'AR'=>"Arkansas",  
								'CA'=>"California",  
								'CO'=>"Colorado",  
								'CT'=>"Connecticut",  
								'DE'=>"Delaware",  
								'DC'=>"District Of Columbia",  
								'FL'=>"Florida",  
								'GA'=>"Georgia",  
								'HI'=>"Hawaii",  
								'ID'=>"Idaho",  
								'IL'=>"Illinois",  
								'IN'=>"Indiana",  
								'IA'=>"Iowa",  
								'KS'=>"Kansas",  
								'KY'=>"Kentucky",  
								'LA'=>"Louisiana",  
								'ME'=>"Maine",  
								'MD'=>"Maryland",  
								'MA'=>"Massachusetts",  
								'MI'=>"Michigan",  
								'MN'=>"Minnesota",  
								'MS'=>"Mississippi",  
								'MO'=>"Missouri",  
								'MT'=>"Montana",
								'NE'=>"Nebraska",
								'NV'=>"Nevada",
								'NH'=>"New Hampshire",
								'NJ'=>"New Jersey",
								'NM'=>"New Mexico",
								'NY'=>"New York",
								'NC'=>"North Carolina",
								'ND'=>"North Dakota",
								'OH'=>"Ohio",  
								'OK'=>"Oklahoma",  
								'OR'=>"Oregon",  
								'PA'=>"Pennsylvania",  
								'RI'=>"Rhode Island",  
								'SC'=>"South Carolina",  
								'SD'=>"South Dakota",
								'TN'=>"Tennessee",  
								'TX'=>"Texas",  
								'UT'=>"Utah",  
								'VT'=>"Vermont",  
								'VA'=>"Virginia",  
								'WA'=>"Washington",  
								'WV'=>"West Virginia",  
								'WI'=>"Wisconsin",  
								'WY'=>"Wyoming");
								
	public $typeAddress = array('b'=>'Business',
								'r'=>'Residential');
			
	function address () {
		return $this->typeAddress;
	}
								
	function months ($short=FALSE) {
		if ($short) $list = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		else $list = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		
		return $list;
	}
	
	function phone ($key=null,$lcvalues=FALSE) {
		
		$this->load->helper('array');
		
		$data['o'] = "Office";
		$data['h'] = "Home";
		$data['m'] = "Mobile";
		$data['f'] = "Fax";
		$data['g'] = "Gizmo";
		
		if ($lcvalues) foreach ($data as $dkey=>$value) $data[$dkey] = strtolower($value);
		
		if ($key != null) return element($key,$data,'generic');
		else return $data;
	}
	
	function orderStatus() {
		
		$this->load->helper('array');
		
		$data['cancelled'] = "Cancelled";
		$data['active'] = "Active";
		$data['complete'] = "Complete";
		$data['fraud_hold'] = "Fraud Hold";
		$data['payment_hold'] = "Payment Hold";
		$data['estimate'] = "Estimate";

		asort($data);
		return $data;
		
	}

}
// End of File
