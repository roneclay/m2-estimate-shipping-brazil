<?php
/**
 * Simulates all Shipping methods on the product page.
 * Copyright (C) 2020  Copyright (c) 2020 Fineweb (https://www.fineweb.com.br)
 *
 * This file is part of Fineweb/SimulateProductShipping.
 *
 * Fineweb/SimulateProductShipping is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Fineweb\SimulateProductShipping\Block\Product;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class View
 *
 * Fineweb\SimulateProductShipping\Block\Product
 */
class View extends Template
{
    const FINE_ACTION_URL = 'fineweb/simulate/index';
    const BUSCA_CEP_URL = 'http://www.buscacep.correios.com.br/sistemas/buscacep/BuscaCepEndereco.cfm';

    /**
     * Constructor
     *
     * @param Context  $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getActionUrl()
    {
        return $this::FINE_ACTION_URL;
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getBuscaCepUrl()
    {
        return $this::BUSCA_CEP_URL;
    }
}
