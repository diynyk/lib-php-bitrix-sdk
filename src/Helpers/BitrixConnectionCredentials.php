<?php

namespace Diynyk\Bitrix\Helpers;

class BitrixConnectionCredentials
{
    /**
     * @var string
     */
    private $url = '';

    /**
     * @var string
     */
    private $userId = '';

    /**
     * @var string
     */
    private $token = '';

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return BitrixConnectionCredentials
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return BitrixConnectionCredentials
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return BitrixConnectionCredentials
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    public function getEndpoint($call)
    {
        $template = '%s/%s/%s/%s.json';
        return vsprintf($template, [$this->getUrl(), $this->getUserId(), $this->getToken(), $call]);
    }
}