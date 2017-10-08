<?php

namespace Hwt\HwtAddress\UserFunc;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Heiko Westermann <hwt3@gmx.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Hook ItemsProcFunc
 *
 * @package TYPO3
 * @subpackage tx_hwtaddress
 * @author Heiko Westermann <hwt3@gmx.de>
 */
class ItemsProcFunc {
    public function user_templateVariant(array $config, $parentObject) {
        $action = $config['flexParentDatabaseRow']['pi_flexform']['data']['sDEF']['lDEF']['switchableControllerActions']['vDEF'][0];
    \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($action);
    }
}
