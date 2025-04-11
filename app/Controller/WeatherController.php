<?php
class WeatherController {
    // private $apiKey = "YOUR_OPENWEATHERMAP_API_KEY"; // ✅ API 키 입력

    public function getWeatherCondition($city = "Seoul") {
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid=4473ac988705fa29a803df2561002539&units=metric";
        $contents = file_get_contents($url);
        $clima = json_decode($contents, true);
        $weather = $clima["weather"][0];
    
        $weatherm = $clima['main']["temp"];
        $weathert = substr($weatherm, 0, 2);
    
        $clima['main']['temp'] = $weathert;
        $weatherr[] = $clima['main'];


        $weather_icon = $weather["icon"];

        $weather_code = substr($weather_icon, 0, 2);
        // 날씨에 대한 코드값
        $weather_time = substr($weather_icon, 2, 1);
        // 시간에 대한 코드값
        
        $weather_condition = '';
        
        if (in_array($weather_code, ["01", "02"])) {
            $weather_condition = ($weather_time === "d") ? "sunnyd" : "sunnyn";
            // 맑은 하늘 아침 밤
        } else if (in_array($weather_code, ["03", "04"])) {
            $weather_condition = ($weather_time === "d") ? "cloudd" : "cloudn";
            // 비가 오는 아침 밤
        } else if (in_array($weather_code, ["09", "10", "11"])) {
            $weather_condition = ($weather_time === "d") ? "rainingd" : "rainingn";
            // 비가 오는 아침 밤
        } else if (in_array($weather_code, ["13"])) {
            $weather_condition = ($weather_time === "d") ? "snowingd" : "snowingn";
            // 눈이 오는 아침 밤
        } else {
            $weather_condition = ($weather_time === "d") ? "mistetcd" : "mistetcn";
            // 안개 이상 아침 밤
        }
        
        $user_language = $_GET['lang'];
        
        $weather_messages = [
            'kr' => [
                'sunny' => "맑은 하늘입니다 : )",
                'cloud' => "구름이 있어요~",
                'raining' => "비가 주룩주룩 ㅠ",
                'snowing' => "눈이 오고있습니다 : >",
                'default' => "안개? 날씨가 안좋네요~;;"
            ],
            'jp' => [
                'sunny' => "晴天です : )",
                'cloud' => "曇りです~",
                'raining' => "雨が降っています ㅠ",
                'snowing' => "雪が降っています : >",
                'default' => "霧？天気が悪いです~;;"
            ]
        ];
        
        $weather_alert = '';
        
        switch ($weather_condition) {
            case "sunnyd":
            case "sunnyn":
                $weather_alert = $weather_messages[$user_language]['sunny'];
                break;
            case "cloudd":
            case "cloudn":
                $weather_alert = $weather_messages[$user_language]['cloud'];
                break;
            case "rainingd":
            case "rainingn":
                $weather_alert = $weather_messages[$user_language]['raining'];
                break;
            case "snowingd":
            case "snowingn":
                $weather_alert = $weather_messages[$user_language]['snowing'];
                break;
            default:
                $weather_alert = $weather_messages[$user_language]['default'];
                break;
        }



        // ✅ 날씨 조건(Main)만 반환하도록 변경
        return $weather_condition;
    }
}

// ✅ 인스턴스를 생성하고 날씨 값을 설정 (자동 실행되도록 처리)
$weatherController = new WeatherController();
$weatherCondition = $weatherController->getWeatherCondition("Seoul");

// ✅ 전역 변수로 설정 (다른 페이지에서도 접근 가능)
$GLOBALS['weatherCondition'] = $weatherCondition;
?>
