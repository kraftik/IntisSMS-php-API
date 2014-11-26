<?php
namespace Intis\API;

abstract class AClient {

    protected $login;
    protected $apiKey;

    const HOST = "http://dev.sms16.ru/get/";

    /**
     * 
     * @param string $scriptName
     * @param string $parameters[]
     * 
     * @return \stdClass
     */
    public function getContent($scriptName, $parameters = array()) {
        $all = $this->getParameters($parameters);

        $url = self::HOST . $scriptName . ".php?" . http_build_query($all);
        $result = $this->getContentFromApi($url);
        $this->checkException($result);

        return $result;
    }
    
    private function getTimestamp() {
        return file_get_contents(self::HOST . 'timestamp.php');
    }

    private function getBaseParameters() {
        return array(
            'login' => $this->login,
            'timestamp' => $this->getTimestamp(),
            'return' => 'json'
        );
    }

    private function getParameters(array $more = array()) {
        $params = $this->getBaseParameters();
        if ($more) {
            foreach ($more as $key => $value) {
                $params[$key] = $value;
            }
        }
        $sig = $this->GetSignature($params);
        $params['signature'] = $sig;

        return $params;
    }

    private function getSignature($params) {
        ksort($params);
        reset($params);
        $str = implode('', $params) . $this->apiKey;

        return md5($str);
    }

    private function getContentFromApi($url) {
        $result = file_get_contents($url);
        if ($result === false)
            return false;
        $result = json_decode($result);
        if (!$result)
            return false;

        return $result;
    }

    private function checkException($result) {
        if (!$result)
            throw new APIException(0);

        if (isset($result->error))
            throw new APIException($result->error);
    }

}
