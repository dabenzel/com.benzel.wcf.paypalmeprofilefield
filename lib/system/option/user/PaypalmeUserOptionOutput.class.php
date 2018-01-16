<?php
namespace wcf\system\option\user;
use wcf\data\user\option\UserOption;
use wcf\data\user\User;
use wcf\util\StringUtil;
/**
 * @author      Benzel
 * @license     GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @copyright   2018
 * @package     com.jacboy.wcf.paypalmeprofilefield
 */
class PaypalmeUserOptionOutput implements IUserOptionOutput {
    	public function getOutput(User $user, UserOption $option, $value) {
		if (empty($value)) return '';
		
		$url = StringUtil::encodeHTML('https://paypal.me/'.$value);
		$value = StringUtil::encodeHTML($value);
		
		return '<a href="'.$url.'" class="externalURL"'.(EXTERNAL_LINK_REL_NOFOLLOW ? ' rel="nofollow"' : '').(EXTERNAL_LINK_TARGET_BLANK ? ' target="_blank"' : '').'>'.$value.'</a>';
	}
}