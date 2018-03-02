<?php
namespace Eve\Models\Corporations;

use Eve\Helpers\Request;

use Eve\Abstracts\Model;
use Eve\Traits\GetAlliance;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;

use Eve\Collections\Character\Character;

final class Corporation extends Model
{
	use GetAlliance;

	/** @var string $name */
	public $name;

	/** @var string $ticket */
	public $ticket;

	/** @var int $member_count */
	public $member_count;

	/** @var int $ceo_id */
	public $ceo_id;

	/** @var string $description */
	public $description;

	/** @var int $tax_rate */
	public $tax_rate;

	/** @var string $date_founded */
	public $date_founded;

	/** @var int $creator_id */
	public $creator_id;

	/** @var string $url */
	public $url;

	/** @var int $faction_id */
	public $faction_id;

	/** @var int $home_station_id */
	public $home_station_id;

	/** @var int $shares */
	public $shares;

	/**
	 * @throws ApiException|JsonException|ModelException
	 * @return Model
	 */
	public function ceo()
	{
		return (new Character)->getItem($this->ceo_id);
	}

	/**
	 * @throws ApiException|JsonException|ModelException
	 * @return Model
	 */
	public function creator()
	{
		return (new Character)->getItem($this->creator_id);
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function allianceHistory()
	{
		return (new Request)
			->setModel(AllianceHistory::class)
			->setEndpoint($this->base_uri . '/alliancehistory')
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
	public function containerLogs()
	{
		return (new Request)
			->setModel(Containers\Log::class)
			->setEndpoint($this->base_uri . '/containers/logs')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function divisions()
	{
		return (new Request)
			->setModel(Division::class)
			->setEndpoint($this->base_uri . '/divisions')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function facilities()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Industry\Facility::class)
			->setEndpoint($this->base_uri . '/facilities')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function icons()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Icon::class)
			->setEndpoint($this->base_uri . '/icons')
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
	public function medalsIssued()
	{
		return (new Request)
			->setModel(Medals\Issued::class)
			->setEndpoint($this->base_uri . '/medals/issued')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array
	 */
	public function members()
	{
		return (new Request)
			->setEndpoint($this->base_uri . '/members')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return string
	 */
	public function membersLimit()
	{
		return (new Request)
			->setEndpoint($this->base_uri . '/members/limit')
			->setExpectJson(false)
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function memberTitles()
	{
		return (new Request)
			->setModel(Members\Title::class)
			->setEndpoint($this->base_uri . '/members/titles')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function memberTracking()
	{
		return (new Request)
			->setModel(MemberTracking::class)
			->setEndpoint($this->base_uri . '/membertracking')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array
	 */
	public function outposts()
	{
		return (new Request)
			->setEndpoint($this->base_uri . '/outposts')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function outpost(int $id)
	{
		return (new Request)
			->setEndpoint($this->base_uri . '/outposts/' . $id)
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
	public function rolesHistory()
	{
		return (new Request)
			->setModel(Roles\History::class)
			->setEndpoint($this->base_uri . '/roles/history')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function shareholders()
	{
		return (new Request)
			->setModel(Shareholder::class)
			->setEndpoint($this->base_uri . '/shareholders')
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
	public function starbases()
	{
		return (new Request)
			->setModel(Starbase::class)
			->setEndpoint($this->base_uri . '/starbases')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function starbase(int $id)
	{
		return (new Request)
			->setModel(Starbases\Starbase::class)
			->setEndpoint($this->base_uri . '/starbases/' . $id)
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function structures()
	{
		return (new Request)
			->setModel(Structure::class)
			->setEndpoint($this->base_uri . '/structures')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function titles()
	{
		return (new Request)
			->setModel(Title::class)
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
	public function industryJobs()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Industry\Job::class)
			->setEndpoint($this->base_uri . '/industry/jobs')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function miningExtractions()
	{
		return (new Request)
			->setModel(Mining\Extraction::class)
			->setEndpoint($this->base_uri . '/mining/extractions')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function miningObservers()
	{
		return (new Request)
			->setModel(Mining\Observer::class)
			->setEndpoint($this->base_uri . '/mining/observers')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function miningObserver(int $id)
	{
		return (new Request)
			->setModel(Mining\Observers\Observer::class)
			->setEndpoint($this->base_uri . '/mining/observers/' . $id)
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
	public function orders()
	{
		return (new Request)
			->setmodel(Order::class)
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
	public function customsOffices()
	{
		return (new Request)
			->setModel(CustomsOffices::class)
			->setEndpoint($this->base_uri . '/customs_offices')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function wallets()
	{
		return (new Request)
			->setModel(Wallet::class)
			->setEndpoint($this->base_uri . '/wallets')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function walletJournal(int $id)
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Wallet\Journal::class)
			->setEndpoint($this->base_uri . '/wallets/' . $id . '/journal')
			->run();
	}

	/**
	 * TODO: MOVE THIS
	 *
	 * @param int $id
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function walletTransactions(int $id)
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Wallet\Transaction::class)
			->setEndpoint($this->base_uri . '/wallets/' . $id . '/transactions')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function offers()
	{
		return (new Request)
			->setModel(\Eve\Models\Loyalty\Stores\Corporation\Offer::class)
			->setEndpoint('/loyalty/stores/' . $this->id . '/offers')
			->run();
	}
}