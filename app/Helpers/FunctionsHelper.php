<?php
use App\Survey;

if (!function_exists('get_survey_status')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function get_survey_status($customer_id)
    {
    	$status_list = ['Sent', 'Complete'];
    	$survey = Survey::where('customer_id', $customer_id)->first();
        if($survey) {
        	return $status_list[($survey->status-1)];
        }
        return "-";
    }

    function get_slug_array() {

        $slug_list = ['web-design', 'web-programming', 'project-management', 'feedback', 'thank-you'];
        return $slug_list;
    }
}
