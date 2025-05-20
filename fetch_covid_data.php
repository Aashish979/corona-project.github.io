<?php
function fetchCovidData() {
    // Use disease.sh API instead
    $url = "https://disease.sh/v3/covid-19/countries";
    $curl = curl_init($url);
    
    // Set curl options
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => ["Accept: application/json"]
    ]);
    
    try {
        $response = curl_exec($curl);
        $err = curl_error($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        
        curl_close($curl);
        
        if ($err) {
            error_log("cURL Error: " . $err);
            return ["error" => "Failed to fetch data: " . $err];
        }
        
        if ($httpCode !== 200) {
            error_log("HTTP Error: " . $httpCode);
            return ["error" => "API returned error code: " . $httpCode];
        }
        
        $data = json_decode($response, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            error_log("JSON Decode Error: " . json_last_error_msg());
            return ["error" => "Failed to parse API response"];
        }
        
        // Transform data to match expected format
        $countries = array_map(function($country) {
            return [
                'Country' => $country['country'],
                'NewConfirmed' => $country['todayCases'],
                'NewDeaths' => $country['todayDeaths'],
                'NewRecovered' => $country['todayRecovered'],
                'TotalConfirmed' => $country['cases'],
                'TotalDeaths' => $country['deaths'],
                'TotalRecovered' => $country['recovered']
            ];
        }, $data);
        
        return ['Countries' => $countries];
        
    } catch (Exception $e) {
        error_log("Exception: " . $e->getMessage());
        return ["error" => "An unexpected error occurred"];
    }
}

// Test if the function is working
$result = fetchCovidData();
if (isset($result['error'])) {
    echo "Error: " . $result['error'];
}
?>