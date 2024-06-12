<?php
/**
 * Wilma_Core extension
 * NOTICE OF LICENSE
 * This source file is subject to the GNU General Public License 3 License
 * that is bundled with this package in the file LICENSE
 * It is also available through the world-wide-web at this URL:
 * https://www.gnu.org/licenses/gpl-3.0.de.html
 * @category  wilma
 * @package   Wilma_Core
 * @copyright Copyright © 2024 Wilma Digital GmbH. All rights reserved.
 * @license    https://www.gnu.org/licenses/gpl-3.0.de.html GNU General Public License 3 License
 * @author    support@wilma.tech
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Wilma_Core',
    __DIR__
);
