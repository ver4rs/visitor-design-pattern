<?php
namespace App\Collection;

use App\ValueObject\BenefitReportData;

/**
 * Class ReportBenefitsCollection
 */
class ReportBenefitsCollection
{
    /** @var string $code */
    private $code;

    /** @var string $description */
    private $description;

    /** @var array $items */
    private $items = [];

    /**
     * @param string $code
     * @param string $description
     */
    public function __construct(string $code, string $description)
    {
        $this->code        = $code;
        $this->description = $description;

        $this->add($code, $description);
    }

    /**
     * @param string $code
     * @param string $description
     */
    public function add(string $code, string $description)
    {
        $this->items[$code] = $description;
        $this->items[] = new BenefitReportData($code, $description);
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->items);
    }
}
