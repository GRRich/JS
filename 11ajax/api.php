<script>

$ch = curl_init();
$url = 'http://apis.data.go.kr/B552584/ArpltnInforInqireSvc/getMinuDustWeekFrcstDspth'; /*URL*/
$queryParams = '?' . urlencode('serviceKey') . '=2%2BiwVVnkfof36YwtlqH8hINkRrkxr2zvzZIutA%2FdshSSyrzvBN%2FPzlAsivrjFJbWSIwm5YP9cWJrLVV0w%2FofCA%3D%3D'; /*Service Key*/
$queryParams .= '&' . urlencode('returnType') . '=' . urlencode('xml'); /**/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('100'); /**/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
$queryParams .= '&' . urlencode('searchDate') . '=' . urlencode('2020-11-09'); /**/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

var_dump($response);

</script>