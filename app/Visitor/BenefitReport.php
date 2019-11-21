<?php

namespace App\Visitor;

use App\Collection\ReportBenefitsCollection;
use App\Entity\GiftBox;
use App\Entity\Product;
use App\Http\Handlers\Provider\BenefitProvider;

/**
 * Class BenefitReport
 */
class BenefitReport implements Visitor
{
    /** @var BenefitProvider $benefitProvider */
    private $benefitProvider;

    /** @var ReportBenefitsCollection $report */
    private $report;

    /**
     * @param BenefitProvider $benefitProvider
     */
    public function __construct(BenefitProvider $benefitProvider)
    {
        $this->benefitProvider = $benefitProvider;
    }

    public function visitGiftBox(GiftBox $giftBox): void
    {
        $benefit = $this->benefitProvider->findBenefitForGiftBox($giftBox);

        if ($benefit !== null) {
            $this->report->add($giftBox->getCode(),$benefit->getDescription());
        }
    }

    public function visitProduct(Product $product): void
    {
        $benefit = $this->benefitProvider->findBenefitForProduct($product);

        if ($benefit !== null) {
            $this->report->add($product->getCode(),$benefit->getDescription());
        }
    }

    /**
     * @return ReportBenefitsCollection
     */
    public function getReport(): ReportBenefitsCollection
    {
        return $this->report;
    }
}
