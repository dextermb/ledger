<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

use Eve\Traits\GetAlliance;
use Eve\Traits\GetCorporation;
use Eve\Traits\GetFaction;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

final class Character extends Model
{
	use GetCorporation, GetAlliance, GetFaction;

	/** @var string $name */
	public $name;

	/** @var string $birthday */
	public $birthday;

	/** @var string $gender */
	public $gender;

	/** @var int $race_id */
	public $race_id;

	/** @var string $description */
	public $description;

	/** @var int $bloodline_id */
	public $bloodline_id;

	/** @var int $ancestry_id */
	public $ancestry_id;

	/** @var int $security_status */
	public $security_status;

	/** @var string $access_token */
	public $access_token;

	/** @var string $refresh_token */
	public $refresh_token;

	/** @var int $valid_until */
	public $valid_until;

	/**
	 * @param string $access_token
	 * @param string $refresh_token
	 * @param int    $valid_until
	 * @return $this
	 */
	public function setAuth(string $access_token, string $refresh_token = null, int $valid_until = null)
	{
		$this->access_token  = $access_token;
		$this->refresh_token = $refresh_token;
		$this->valid_until   = $valid_until;

		return $this;
	}

	/**
	 * @param string $access_token
	 * @return $this
	 */
	public function setAccessToken(string $access_token)
	{
		$this->access_token = $access_token;

		return $this;
	}

	/**
	 * @param string $refresh_token
	 * @return $this
	 */
	public function setRefreshToken(string $refresh_token)
	{
		$this->refresh_token = $refresh_token;

		return $this;
	}

	/**
	 * @param int $valid_until
	 * @return $this
	 */
	public function setValidUntil(int $valid_until)
	{
		$this->valid_until = $valid_until;

		return $this;
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function agentsResearch()
	{
		return $this->_request
			->setModel(AgentsResearch::class)
			->setEndpoint($this->base_uri . '/agents_research')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function blueprints()
	{
		return $this->_request
			->setModel(\Eve\Models\Shared\Blueprint::class)
			->setEndpoint($this->base_uri . '/blueprints')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function chatChannels()
	{
		return $this->_request
			->setModel(ChatChannel::class)
			->setEndpoint($this->base_uri . '/chat_channels')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function corporationHistory()
	{
		return $this->_request
			->setModel(CorporationHistory::class)
			->setEndpoint($this->base_uri . '/corporationhistory')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function fatigue()
	{
		return $this->_request
			->setModel(Fatigue::class)
			->setEndpoint($this->base_uri . '/fatigue')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function medals()
	{
		return $this->_request
			->setModel(Medal::class)
			->setEndpoint($this->base_uri . '/medals')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function notifications()
	{
		return $this->_request
			->setModel(Notification::class)
			->setEndpoint($this->base_uri . '/notifications')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function notificationContacts()
	{
		return $this->_request
			->setModel(Notifications\Contacts::class)
			->setEndpoint($this->base_uri . '/notifications/contacts')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function portrait()
	{
		return $this->_request
			->setModel(Portrait::class)
			->setEndpoint($this->base_uri . '/portrait')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function roles()
	{
		return $this->_request
			->setModel(Role::class)
			->setEndpoint($this->base_uri . '/roles')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function standings()
	{
		return $this->_request
			->setModel(\Eve\Models\Shared\Standing::class)
			->setEndpoint($this->base_uri . '/standings')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function stats()
	{
		return $this->_request
			->setModel(Stat::class)
			->setEndpoint($this->base_uri . '/stats')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function titles()
	{
		return $this->_request
			->setModel(\Eve\Models\Shared\Title::class)
			->setEndpoint($this->base_uri . '/titles')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function assets()
	{
		return $this->_request
			->setModel(\Eve\Models\Shared\Asset::class)
			->setEndpoint($this->base_uri . '/assets')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function bookmarks()
	{
		return $this->_request
			->setModel(\Eve\Models\Shared\Bookmark::class)
			->setEndpoint($this->base_uri . '/bookmarks')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function bookmarkFolders()
	{
		return $this->_request
			->setModel(\Eve\Models\Shared\Bookmarks\Folder::class)
			->setEndpoint($this->base_uri . '/bookmarks/folders')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function calendar()
	{
		return $this->_request
			->setModel(Calendar::class)
			->setEndpoint($this->base_uri . '/calendar')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function calendarEvent(int $id)
	{
		return $this->_request
			->setModel(Calendar\Event::class)
			->setEndpoint($this->base_uri . '/calendar/' . $id)
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function calendarEventAttendees(int $id)
	{
		return $this->_request
			->setModel(Calendar\Event\Attendee::class)
			->setEndpoint($this->base_uri . '/calendar/' . $id . '/attendees')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function clones()
	{
		return $this->_request
			->setModel(Copy::class)
			->setEndpoint($this->base_uri . '/clones')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function implants()
	{
		return $this->_request
			->setEndpoint($this->base_uri . '/implants')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function contacts()
	{
		return $this->_request
			->setModel(\Eve\Models\Shared\Contact::class)
			->setEndpoint($this->base_uri . '/contacts')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function contactLabels()
	{
		return $this->_request
			->setModel(Contacts\Label::class)
			->setEndpoint($this->base_uri . '/contacts/labels')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function contracts()
	{
		return $this->_request
			->setModel(\Eve\Models\Shared\Contract::class)
			->setEndpoint($this->base_uri . '/contracts')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function contractBids(int $id)
	{
		return $this->_request
			->setModel(\Eve\Models\Shared\Contracts\Bid::class)
			->setEndpoint($this->base_uri . '/contracts/' . $id . '/bids')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function contractItems(int $id)
	{
		return $this->_request
			->setModel(\Eve\Models\Shared\Contracts\Item::class)
			->setEndpoint($this->base_uri . '/contracts/' . $id . '/items')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function factionWarfareStats()
	{
		return $this->_request
			->setModel(FactionWarfare\Stat::class)
			->setEndpoint($this->base_uri . '/fw/stats')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function fittings()
	{
		return $this->_request
			->setModel(Fitting::class)
			->setEndpoint($this->base_uri . '/fittings')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function fleet()
	{
		return $this->_request
			->setModel(Fleet::class)
			->setEndpoint($this->base_uri . '/fleet')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function industryJobs()
	{
		return $this->_request
			->setModel(Industry\Job::class)
			->setEndpoint($this->base_uri . '/industry/jobs')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function mining()
	{
		return $this->_request
			->setModel(Mining::class)
			->setEndpoint($this->base_uri . '/mining')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function killMailRecent()
	{
		return $this->_request
			->setmodel(\Eve\Models\Shared\KillMails\KillMail::class)
			->setEndpoint($this->base_uri . '/killmails/recent')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function location()
	{
		return $this->_request
			->setModel(Location::class)
			->setEndpoint($this->base_uri . '/location')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function online()
	{
		return $this->_request
			->setModel(Online::class)
			->setEndpoint($this->base_uri . '/online')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function ship()
	{
		return $this->_request
			->setModel(Ship::class)
			->setEndpoint($this->base_uri . '/ship')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function loyaltyPoints()
	{
		return $this->_request
			->setModel(Loyalty::class)
			->setEndpoint($this->base_uri . '/loyalty/points')
			->run();
	}

	/**
	 * Get all mail
	 *
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function messages()
	{
		return $this->_request
			->setModel(Mail::class)
			->setEndpoint($this->base_uri . '/mail')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * Get a mail
	 *
	 * @param int $id
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function message(int $id)
	{
		return $this->_request
			->setModel(Mail\Mail::class)
			->setEndpoint($this->base_uri . '/mail/' . $id)
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function mailLabels()
	{
		return $this->_request
			->setModel(Mail\Label::class)
			->setEndpoint($this->base_uri . '/mail/labels')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function mailLists()
	{
		return $this->_request
			->setModel(Mail\Lists::class)
			->setEndpoint($this->base_uri . '/mail/lists')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function orders()
	{
		return $this->_request
			->setModel(Order::class)
			->setEndpoint($this->base_uri . '/orders')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function orderHistory()
	{
		return $this->_request
			->setModel(Orders\History::class)
			->setEndpoint($this->base_uri . '/orders/history')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function opportunities()
	{
		return $this->_request
			->setModel(Opportunity::class)
			->setEndpoint($this->base_uri . '/opportunities')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function planets()
	{
		return $this->_request
			->setModel(Planet::class)
			->setEndpoint($this->base_uri . '/planets')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function planet(int $id)
	{
		return $this->_request
			->setModel(Planets\Planet::class)
			->setEndpoint($this->base_uri . '/planets/' . $id)
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param string $search
	 * @param array  $categories
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function search(string $search, array $categories)
	{
		return $this->_request
			->setModel(Search::class)
			->setEndpoint($this->base_uri . '/search?search=' . $search . '&categories=' . implode(',', $categories))
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function attributes()
	{
		return $this->_request
			->setModel(Attribute::class)
			->setEndpoint($this->base_uri . '/attributes')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function skillQueue()
	{
		return $this->_request
			->setModel(SkillQueue::class)
			->setEndpoint($this->base_uri . '/skillqueue')
			->run();
	}

	/**
	 * TODO: Account for error response (JSON)
	 *
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function wallet()
	{
		return $this->_request
			->setEndpoint($this->base_uri . '/wallet')
			->setExpectJson(false)
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function walletJournal()
	{
		return $this->_request
			->setModel(\Eve\Models\Shared\Wallet\Journal::class)
			->setEndpoint($this->base_uri . '/wallet/journal')
			->run();
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return array|Model|Model[]
	 */
	public function walletTransactions()
	{
		return $this->_request
			->setModel(Wallet\Transaction::class)
			->setEndpoint($this->base_uri . '/wallet/transactions')
			->run();
	}
}