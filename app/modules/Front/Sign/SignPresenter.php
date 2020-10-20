<?php declare(strict_types=1);

namespace App\Modules\Front\Sign;

use App\Model\App;
use App\Modules\Base\UnsecuredPresenter;
use App\Modules\Front\BaseFrontPresenter;

final class SignPresenter extends UnsecuredPresenter
{

	public function actionIn(): void
	{
		$this->getUser()->login($_SERVER['PHP_AUTH_USER'], null);

		if ($this->user->isLoggedIn()) {
			$this->redirect(App::DESTINATION_AFTER_SIGN_IN);
		}
	}

	public function startup()
	{
		parent::startup();
	}


	public function actionOut(): void
	{
		if ($this->user->isLoggedIn()) {
			$this->user->logout();
			$this->flashSuccess('_front.sign.out.success');
			$this->redirect(App::DESTINATION_AFTER_SIGN_OUT);
		}
	}

}
