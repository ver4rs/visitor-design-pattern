<?php

namespace App\Http\Handlers\Provider;

use App\Entity\BenefitInterface;
use App\Entity\ProductInterface;
use App\Repository\DummyORM\DummyBenefitRepository;

/**
 * Class BenefitProvider
 */
class BenefitProvider
{
    /** @var DummyBenefitRepository $benefitRepository */
    private $benefitRepository;

    /**
     * @param DummyBenefitRepository $benefitRepository
     */
    public function __construct(DummyBenefitRepository $benefitRepository)
    {
        $this->benefitRepository = $benefitRepository;
    }

    /**
     * @param ProductInterface $product
     *
     * @return BenefitInterface
     */
    public function findBenefitForProduct(ProductInterface $product): ?BenefitInterface
    {
        $benefit = $this->benefitRepository->findBenefitByProductCode($product->getCode());

        if (!$product || !$benefit) {
            return null;
        }

        return $benefit;
    }

    /**
     * @param ProductInterface $box
     *
     * @return BenefitInterface|null
     */
    public function findBenefitForGiftBox(ProductInterface $box): ?BenefitInterface
    {
        $benefit = $this->benefitRepository->findBenefitByProductCode($box->getCode());

        if (!$box || !$benefit) {
            return null;
        }

        return $benefit;
    }
}
