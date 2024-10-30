<?php

namespace Smartsheet\Resources;

use Smartsheet\SmartsheetClient;

class Contact extends Resource
{
    protected $client;

    protected $id, $name, $email;

    public function __construct(SmartsheetClient $client, array $data)
    {
        parent::__construct($data);

        $this->client = $client;
    }
}
