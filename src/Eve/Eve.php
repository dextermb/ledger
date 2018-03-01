<?php
namespace Eve;

use Eve\Helpers\Session;
use Eve\Collections\Character\Character;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoRefreshTokenException;
use Eve\Exceptions\NoAccessTokenException;

final class Eve
{
	/** @var string $client_id */
	private $client_id;

	/** @var string $client_secret */
	private $client_secret;

	/** @var string $redirect_uri */
	private $redirect_uri;

	/** @var array $required_scopes */
	private $required_scopes;

	const EXPIRE_TIME = 1200;

	/** An array of scopes */
	const SCOPES
		= [
			'corporationContactsRead',
			'publicData',
			'characterStatsRead',
			'characterFittingsRead',
			'characterFittingsWrite',
			'characterContactsRead',
			'characterContactsWrite',
			'characterLocationRead',
			'characterNavigationWrite',
			'characterWalletRead',
			'characterAssetsRead',
			'characterCalendarRead',
			'characterFactionalWarfareRead',
			'characterIndustryJobsRead',
			'characterKillsRead',
			'characterMailRead',
			'characterMarketOrdersRead',
			'characterMedalsRead',
			'characterNotificationsRead',
			'characterResearchRead',
			'characterSkillsRead',
			'characterAccountRead',
			'characterContractsRead',
			'characterBookmarksRead',
			'characterChatChannelsRead',
			'characterClonesRead',
			'characterOpportunitiesRead',
			'characterLoyaltyPointsRead',
			'corporationWalletRead',
			'corporationAssetsRead',
			'corporationMedalsRead',
			'corporationFactionalWarfareRead',
			'corporationIndustryJobsRead',
			'corporationKillsRead',
			'corporationMembersRead',
			'corporationMarketOrdersRead',
			'corporationStructuresRead',
			'corporationShareholdersRead',
			'corporationContractsRead',
			'corporationBookmarksRead',
			'fleetRead',
			'fleetWrite',
			'structureVulnUpdate',
			'remoteClientUI',
			'esi-calendar.respond_calendar_events.v1',
			'esi-calendar.read_calendar_events.v1',
			'esi-location.read_location.v1',
			'esi-location.read_ship_type.v1',
			'esi-mail.organize_mail.v1',
			'esi-mail.read_mail.v1',
			'esi-mail.send_mail.v1',
			'esi-skills.read_skills.v1',
			'esi-skills.read_skillqueue.v1',
			'esi-wallet.read_character_wallet.v1',
			'esi-wallet.read_corporation_wallet.v1',
			'esi-search.search_structures.v1',
			'esi-clones.read_clones.v1',
			'esi-characters.read_contacts.v1',
			'esi-universe.read_structures.v1',
			'esi-bookmarks.read_character_bookmarks.v1',
			'esi-killmails.read_killmails.v1',
			'esi-corporations.read_corporation_membership.v1',
			'esi-assets.read_assets.v1',
			'esi-planets.manage_planets.v1',
			'esi-fleets.read_fleet.v1',
			'esi-fleets.write_fleet.v1',
			'esi-ui.open_window.v1',
			'esi-ui.write_waypoint.v1',
			'esi-characters.write_contacts.v1',
			'esi-fittings.read_fittings.v1',
			'esi-fittings.write_fittings.v1',
			'esi-markets.structure_markets.v1',
			'esi-corporations.read_structures.v1',
			'esi-corporations.write_structures.v1',
			'esi-characters.read_loyalty.v1',
			'esi-characters.read_opportunities.v1',
			'esi-characters.read_chat_channels.v1',
			'esi-characters.read_medals.v1',
			'esi-characters.read_standings.v1',
			'esi-characters.read_agents_research.v1',
			'esi-industry.read_character_jobs.v1',
			'esi-markets.read_character_orders.v1',
			'esi-characters.read_blueprints.v1',
			'esi-characters.read_corporation_roles.v1',
			'esi-location.read_online.v1',
			'esi-contracts.read_character_contracts.v1',
			'esi-clones.read_implants.v1',
			'esi-characters.read_fatigue.v1',
			'esi-killmails.read_corporation_killmails.v1',
			'esi-corporations.track_members.v1',
			'esi-wallet.read_corporation_wallets.v1',
			'esi-characters.read_notifications.v1',
			'esi-corporations.read_divisions.v1',
			'esi-corporations.read_contacts.v1',
			'esi-assets.read_corporation_assets.v1',
			'esi-corporations.read_titles.v1',
			'esi-corporations.read_blueprints.v1',
			'esi-bookmarks.read_corporation_bookmarks.v1',
			'esi-contracts.read_corporation_contracts.v1',
			'esi-corporations.read_standings.v1',
			'esi-corporations.read_starbases.v1',
			'esi-industry.read_corporation_jobs.v1',
			'esi-markets.read_corporation_orders.v1',
			'esi-corporations.read_container_logs.v1',
			'esi-industry.read_character_mining.v1',
			'esi-industry.read_corporation_mining.v1',
			'esi-planets.read_customs_offices.v1',
			'esi-corporations.read_facilities.v1',
			'esi-corporations.read_medals.v1',
			'esi-characters.read_titles.v1',
			'esi-alliances.read_contacts.v1',
			'esi-characters.read_fw_stats.v1',
			'esi-corporations.read_fw_stats.v1',
			'esi-corporations.read_outposts.v1',
			'esi-characterstats.read.v1',
		];

	/** @var self $instance */
	private static $instance;

	/** @var string $access_token */
	private $access_token;

	/** @var string $refresh_token */
	private $refresh_token;

	/** @var string $unique_id */
	protected $unique_id;

	public static function init()
	{
		if (self::$instance === null) {
			self::$instance = new self;
		}

		self::$instance->client_id       = env('CLIENT_ID');
		self::$instance->client_secret   = env('CLIENT_SECRET');
		self::$instance->redirect_uri    = env('REDIRECT_URI');
		self::$instance->required_scopes = env('REQUIRED_SCOPES', self::SCOPES);

		self::$instance->unique_id = uniqid();

		return self::$instance;
	}

	/**
	 * @return string
	 */
	public function getAuthenticationURL()
	{
		$url = 'https://login.eveonline.com/oauth/authorize/?response_type=code';
		$url .= '&redirect_uri=' . urlencode($this->redirect_uri);
		$url .= '&client_id=' . $this->client_id;
		$url .= '&scope=' . urlencode(implode(' ', $this->required_scopes));
		$url .= '&state=' . $this->unique_id;

		return $url;
	}

	/**
	 * @param string $code
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException
	 * @return bool
	 */
	public function verify(string $code)
	{
		if (!$code) {
			return false;
		}

		$json = $this->request(
			'https://login.eveonline.com/oauth/token',
			json_encode([
				'grant_type' => 'authorization_code',
				'code'       => $code,
			])
		);

		$session                = Session::init();
		$session->access_token  = $json['access_token'];
		$session->refresh_token = $json['refresh_token'];
		$session->valid_until   = time() + self::EXPIRE_TIME;

		$this->self();

		return true;
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoRefreshTokenException|NoAccessTokenException
	 * @return bool
	 */
	public function refresh()
	{
		if (!isset(Session::init()->refresh_token)) {
			throw new NoRefreshTokenException;
		}

		$json = $this->request(
			'https://login.eveonline.com/oauth/token',
			http_build_query([
				'grant_type'    => 'refresh_token',
				'refresh_token' => Session::init()->refresh_token,
			]),
			[ 'content_type' => 'Content-Type: application/x-www-form-urlencoded' ]
		);

		$session                = Session::init();
		$session->access_token  = $json['access_token'];
		$session->refresh_token = $json['refresh_token'];
		$session->valid_until   = time() + self::EXPIRE_TIME;

		$this->self();

		return true;
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException
	 * @return \Eve\Models\Character\Character
	 */
	public function self()
	{
		if (!isset(Session::init()->access_token)) {
			throw new NoAccessTokenException;
		}

		$json = $this->request(
			'https://login.eveonline.com/oauth/verify',
			null,
			[ 'authorization' => 'Authorization: Bearer ' . Session::init()->access_token ],
			false
		);

		$session       = Session::init();
		$session->self = (new Character)->getItem($json['CharacterID']);

		return $session->self;
	}

	/**
	 * @return bool
	 */
	public function hasExpired()
	{
		return time() >= Session::init()->valid_until;
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoRefreshTokenException|NoAccessTokenException
	 * @return void
	 */
	public function refreshIfExpired()
	{
		if ($this->hasExpired()) {
			$this->refresh();
		}
	}

	/**
	 * @param string $url
	 * @param string $data
	 * @param array  $headers
	 * @param bool   $post
	 * @throws ApiException|JsonException
	 * @return array
	 */
	private function request($url, $data, array $headers = [], bool $post = true)
	{
		$ch = curl_init();

		curl_setopt_array($ch, [
			CURLOPT_URL            => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_POST           => $post,
			CURLOPT_CUSTOMREQUEST  => $post ? 'POST' : 'GET',
			CURLOPT_HTTPHEADER     => array_values(array_merge([
				'authorization' => 'Authorization: Basic ' . base64_encode($this->client_id . ':' . $this->client_secret),
				'content_type'  => 'Content-Type: application/json',
				'host'          => 'Host: login.eveonline.com',
			], $headers)),
		]);

		if ($post) {
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		}

		$response = curl_exec($ch);
		$json     = json_decode($response, true);

		if (!$json) {
			throw new JsonException;
		}

		if (isset($json['error'])) {
			throw new ApiException($json['error'] . ': ' . $json['error_description']);
		}

		return $json;
	}
}