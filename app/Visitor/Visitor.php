<?php


namespace App\Visitor;

use App\Collection\ReportBenefitsCollection;
use App\Entity\GiftBox;
use App\Entity\Product;

interface Visitor
{
    /**
     * @param GiftBox $box
     *
     * @return void
     */
    public function visitGiftBox(GiftBox $box): void;

    /**
     * @param Product $product
     *
     * @return void
     */
    public function visitProduct(Product $product): void;

    /**
     * @return ReportBenefitsCollection
     */
    public function getReport(): ReportBenefitsCollection;
}
