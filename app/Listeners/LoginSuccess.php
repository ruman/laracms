<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

class LoginSuccess extends ListenerBase
{

	/**
	 * Handle The Event
	 *
	 * @param Login $login
	 *
	 * @return void
	 *
	 */

	public function handle( Login $login )
	{
		$this->statut->setLoginStatut($login);
	}
}