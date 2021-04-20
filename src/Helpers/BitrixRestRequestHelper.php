<?php


namespace Diynyk\Bitrix\Helpers;


use GuzzleHttp\Client;

class BitrixRestRequestHelper
{

    /**
     * @var BitrixConnectionCredentials
     */
    private $credentials;

    /**
     * @var string
     */
    private $call = '';

    /**
     * @var array
     */
    private $options = [];

    public function __construct(BitrixConnectionCredentials $credentials, $call, array $options = [])
    {
        $this->credentials = $credentials;
        $this->call = $call;
        $this->options = $options;
    }

    /**
     *
     */
    public function execute()
    {
        $baseEndpoint = $this->credentials->getEndpoint($this->call);
        if (!empty($this->options['query'])) {
            $pairs = [];

            foreach ($this->options['query'] as $k => $v) {
                $value = is_numeric($v)
                    ? $v
                    : vsprintf('"%s"', [$v]);
                $pairs[] = vsprintf('%s=%s', [$k, urlencode($value)]);
            }
            $baseEndpoint = vsprintf('%s?%s', [$baseEndpoint, implode('&', $pairs)]);
        }

        $client = new Client();

        if ('GET' == $this->options['method']) {
            return (string)$client->request($this->options['method'], $baseEndpoint)->getBody();
        } else {
            return (string)$client->request(
                $this->options['method'],
                $baseEndpoint,
                ['json' => $this->options['body']]
            )->getBody();
        }
    }
}