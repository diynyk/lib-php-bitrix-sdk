<?php


namespace Diynyk\Bitrix;


use Diynyk\Bitrix\Entities\LeadEntity;
use Diynyk\Bitrix\Helpers\BitrixConnectionCredentials;
use Diynyk\Bitrix\Helpers\BitrixRestRequestHelper;

class Lead
{
    private $credetials;

    public function __construct(BitrixConnectionCredentials $credetials)
    {
        $this->credetials = $credetials;
    }


    private function parseResult(array $result) {
        return array_column($result['result'], 'ID');
      }
      

    public function index($page=0): array
    {
        echo "Page=$page\n";
        $items = [];

  $helper = new BitrixRestRequestHelper($this->credetials, 'crm.lead.list', [
    'method' => 'GET',
    'query'=> [
        'select[]'=>'ID',
        'start'=>$page
    ]
]);
  $response = (string) $helper->execute();
  
var_export($response);

    $data = json_decode($response, true);
    $items= $this->parseResult($data);

    if (isset($data['next'])) {
      $items=array_merge($items, $this->index((int)$data['next']));    
    
    } 

    return array_map(function ($i){ return (int) $i;},$items);
    
    }

    public function add(LeadEntity $entity): LeadEntity
    {

    }

    public function get(int $id): LeadEntity
    {

    
          
    }

    public function update(LeadEntity $entity): LeadEntity
    {
    }

    public function delete(int $id): bool
    {
    }
}