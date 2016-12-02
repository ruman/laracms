<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;

class LogoutSuccess extends ListenerBase
{

	/**
	 * Handle The Event
	 *
	 * @param Login $login
	 *
	 * @return void
	 *
	 */

	public function handle( Logout $event)
	{
		$this->statut->setVisitorStatut();
	}
}