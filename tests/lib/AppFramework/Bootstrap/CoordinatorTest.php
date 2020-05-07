<?php

declare(strict_types=1);

/**
 * @copyright 2020 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @author 2020 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace lib\AppFramework\Bootstrap;

use OC\AppFramework\Bootstrap\Coordinator;
use OC\ServerContainer;
use OCP\App\IAppManager;
use OCP\EventDispatcher\IEventDispatcher;
use OCP\ILogger;
use Test\TestCase;

class CoordinatorTest extends TestCase {

	private $appManager;
	private $serverContainer;
	private $eventDispatcher;

	protected function setUp(): void {
		parent::setUp();

		$this->appManager = $this->createMock(IAppManager::class);
		$this->serverContainer = $this->createMock(ServerContainer::class);
		$this->eventDispatcher = $this->createMock(IEventDispatcher::class);

		$this->coordinator = new Coordinator(
			$this->appManager,
			$this->serverContainer,
			$this->eventDispatcher,
			$this->createMock(ILogger::class)
		);
	}

}
