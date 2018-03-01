<?php
namespace Eve\Models\Character;

use Eve\Helpers\Request;

use Eve\Abstracts\Model;
use Eve\Traits\GetAlliance;
use Eve\Traits\GetCorporation;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;

final class Character extends Model
{
	use GetCorporation, GetAlliance;

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

	/** @var int $faction_id */
	public $faction_id;

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function agentsResearch()
	{
		return (new Request)
			->setModel(AgentsResearch::class)
			->setEndpoint($this->base_uri . '/agents_research')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function blueprints()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Blueprint::class)
			->setEndpoint($this->base_uri . '/blueprints')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function chatChannels()
	{
		return (new Request)
			->setModel(ChatChannel::class)
			->setEndpoint($this->base_uri . '/chat_channels')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function corporationHistory()
	{
		return (new Request)
			->setModel(CorporationHistory::class)
			->setEndpoint($this->base_uri . '/corporationhistory')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function fatigue()
	{
		return (new Request)
			->setModel(Fatigue::class)
			->setEndpoint($this->base_uri . '/fatigue')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function medals()
	{
		return (new Request)
			->setModel(Medal::class)
			->setEndpoint($this->base_uri . '/medals')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function notifications()
	{
		return (new Request)
			->setModel(Notification::class)
			->setEndpoint($this->base_uri . '/notifications')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function notificationContacts()
	{
		return (new Request)
			->setModel(Notifications\Contacts::class)
			->setEndpoint($this->base_uri . '/notifications/contacts')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function portrait()
	{
		return (new Request)
			->setModel(Portrait::class)
			->setEndpoint($this->base_uri . '/portrait')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function roles()
	{
		return (new Request)
			->setModel(Role::class)
			->setEndpoint($this->base_uri . '/roles')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function standings()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Standing::class)
			->setEndpoint($this->base_uri . '/standings')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function stats()
	{
		return (new Request)
			->setModel(Stat::class)
			->setEndpoint($this->base_uri . '/stats')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function titles()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Title::class)
			->setEndpoint($this->base_uri . '/titles')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function assets()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Asset::class)
			->setEndpoint($this->base_uri . '/assets')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function bookmarks()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Bookmark::class)
			->setEndpoint($this->base_uri . '/bookmarks')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function bookmarkFolders()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Bookmarks\Folder::class)
			->setEndpoint($this->base_uri . '/bookmarks/folders')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function calendar()
	{
		return (new Request)
			->setModel(Calendar::class)
			->setEndpoint($this->base_uri . '/calendar')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function calendarEvent(int $id)
	{
		return (new Request)
			->setModel(Calendar\Event::class)
			->setEndpoint($this->base_uri . '/calendar/' . $id)
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function calendarEventAttendees(int $id)
	{
		return (new Request)
			->setModel(Calendar\Event\Attendee::class)
			->setEndpoint($this->base_uri . '/calendar/' . $id . '/attendees')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function clones()
	{
		return (new Request)
			->setModel(Copy::class)
			->setEndpoint($this->base_uri . '/clones')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function implants()
	{
		return (new Request)
			->setEndpoint($this->base_uri . '/implants')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function contacts()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Contact::class)
			->setEndpoint($this->base_uri . '/contacts')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function contactLabels()
	{
		return (new Request)
			->setModel(Contacts\Label::class)
			->setEndpoint($this->base_uri . '/contacts/labels')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function contracts()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Contract::class)
			->setEndpoint($this->base_uri . '/contracts')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function contractBids(int $id)
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Contracts\Bid::class)
			->setEndpoint($this->base_uri . '/contracts/' . $id . '/bids')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function contractItems(int $id)
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Contracts\Item::class)
			->setEndpoint($this->base_uri . '/contracts/' . $id . '/items')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function factionWarfareStats()
	{
		return (new Request)
			->setModel(FactionWarfare\Stat::class)
			->setEndpoint($this->base_uri . '/fw/stats')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function fittings()
	{
		return (new Request)
			->setModel(Fitting::class)
			->setEndpoint($this->base_uri . '/fittings')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function fleet()
	{
		return (new Request)
			->setModel(Fleet::class)
			->setEndpoint($this->base_uri . '/fleet')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function industryJobs()
	{
		return (new Request)
			->setModel(Industry\Job::class)
			->setEndpoint($this->base_uri . '/industry/jobs')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function mining()
	{
		return (new Request)
			->setModel(Mining::class)
			->setEndpoint($this->base_uri . '/mining')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function killMailRecent()
	{
		return (new Request)
			->setmodel(\Eve\Models\Shared\KillMails\KillMail::class)
			->setEndpoint($this->base_uri . '/killmails/recent')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function location()
	{
		return (new Request)
			->setModel(Location::class)
			->setEndpoint($this->base_uri . '/location')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function online()
	{
		return (new Request)
			->setModel(Online::class)
			->setEndpoint($this->base_uri . '/online')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function ship()
	{
		return (new Request)
			->setModel(Ship::class)
			->setEndpoint($this->base_uri . '/ship')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function loyaltyPoints()
	{
		return (new Request)
			->setModel(Loyalty::class)
			->setEndpoint($this->base_uri . '/loyalty/points')
			->run();
	}

	/**
	 * Get all mail
	 *
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function messages()
	{
		return (new Request)
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
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function message(int $id)
	{
		return (new Request)
			->setModel(Mail\Mail::class)
			->setEndpoint($this->base_uri . '/mail/' . $id)
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function mailLabels()
	{
		return (new Request)
			->setModel(Mail\Label::class)
			->setEndpoint($this->base_uri . '/mail/labels')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function mailLists()
	{
		return (new Request)
			->setModel(Mail\Lists::class)
			->setEndpoint($this->base_uri . '/mail/lists')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function orders()
	{
		return (new Request)
			->setModel(Order::class)
			->setEndpoint($this->base_uri . '/orders')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function orderHistory()
	{
		return (new Request)
			->setModel(Orders\History::class)
			->setEndpoint($this->base_uri . '/orders/history')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function opportunities()
	{
		return (new Request)
			->setModel(Opportunity::class)
			->setEndpoint($this->base_uri . '/opportunities')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function planets()
	{
		return (new Request)
			->setModel(Planet::class)
			->setEndpoint($this->base_uri . '/planets')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function planet(int $id)
	{
		return (new Request)
			->setModel(Planets\Planet::class)
			->setEndpoint($this->base_uri . '/planets/' . $id)
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param string $search
	 * @param array  $categories
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function search(string $search, array $categories)
	{
		return (new Request)
			->setModel(Search::class)
			->setEndpoint($this->base_uri . '/search?search=' . $search . '&categories=' . implode(',', $categories))
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function attributes()
	{
		return (new Request)
			->setModel(Attribute::class)
			->setEndpoint($this->base_uri . '/attributes')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function skillQueue()
	{
		return (new Request)
			->setModel(SkillQueue::class)
			->setEndpoint($this->base_uri . '/skillqueue')
			->run();
	}

	/**
	 * TODO: Account for error response (JSON)
	 *
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function wallet()
	{
		return (new Request)
			->setEndpoint($this->base_uri . '/wallet')
			->setExpectJson(false)
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function walletJournal()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Wallet\Journal::class)
			->setEndpoint($this->base_uri . '/wallet/journal')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function walletTransactions()
	{
		return (new Request)
			->setModel(Wallet\Transaction::class)
			->setEndpoint($this->base_uri . '/wallet/transactions')
			->run();
	}
}