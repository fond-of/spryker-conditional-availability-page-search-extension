<?php

namespace FondOfSpryker\Zed\ConditionalAvailabilityPageSearchExtension\Dependency\Plugin;

use Generated\Shared\Transfer\LocaleTransfer;
use Generated\Shared\Transfer\PageMapTransfer;
use Spryker\Zed\Search\Business\Model\Elasticsearch\DataMapper\PageMapBuilderInterface;

interface ConditionalAvailabilityPeriodPageMapExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands the provided PageMap transfer object and returns the modified version.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\PageMapTransfer $pageMapTransfer
     * @param \Spryker\Zed\Search\Business\Model\Elasticsearch\DataMapper\PageMapBuilderInterface $pageMapBuilder
     * @param array $conditionalAvailabilityPeriodData
     * @param \Generated\Shared\Transfer\LocaleTransfer $localeTransfer
     *
     * @return \Generated\Shared\Transfer\PageMapTransfer
     */
    public function expand(
        PageMapTransfer $pageMapTransfer,
        PageMapBuilderInterface $pageMapBuilder,
        array $conditionalAvailabilityPeriodData,
        LocaleTransfer $localeTransfer
    ): PageMapTransfer;
}
