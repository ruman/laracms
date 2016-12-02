<?php

namespace App\Listeners;

use Illuminate\Queue\InterectsWithQueue;
use Illuminate\Contacts\Queue\ShouldQueue;
use App\Services\Statut;

class ListenerBase
{
	/**
	 * The Statut instance
	 *
	 * @var App\Services\Statut
	 *
	 */

	protected $statut;

	/**
	 * Create the Event Listener
	 *
	 * @param App\Services\Statut $statut
	 *
	 * @return void
	 *
	 */

	public function __construct( Statut $statut)
	{
		$this->statut = $statut;
	}
}