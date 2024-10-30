<?php

namespace Smartsheet\Resources;

use Smartsheet\SmartsheetClient;

class Cell extends Resource
{
    protected  $client;

    protected  $columnId;
    protected  $value;
    protected  $displayValue;
    protected  $formula;

    public function __construct(SmartsheetClient $client, array $data)
    {
        parent::__construct($data);

        $this->client = $client;
    }

    /**
     * Returns either the formula or the value depending on if the cell uses a formula
     * @return string
     */
    public function getValue(): string
    {
        return $this->value ?? '';
    }

    /**
     * @return string
     */
    public function getColumnId(): string
    {
        return $this->columnId;
    }
}
