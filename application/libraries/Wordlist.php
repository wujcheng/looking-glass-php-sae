<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define("URL_ABOVENET", "http://lg.zayo.com/lg.cgi");
define("REFERER_ABOVENET", "http://lg.zayo.com/lg.cgi");
define("URL_GBLX", "http://ipstats.globalcrossing.net/cgi-bin/lg/lg.cgi");
define("REFERER_GBLX", "http://ipstats.globalcrossing.net/cgi-bin/lg/lg.cgi");
define("URL_LEVEL3", "http://lookingglass.level3.net/ping/lg_ping_output.php");
define("REFERER_LEVEL3", "http://lookingglass.level3.net/ping/lg_ping_main.php");
define("URL_COLO", "http://lg.la.colocrossing.com/ajax.php?cmd=ping&host=");
define("REFERER_COLO", "http://lg.la.colocrossing.com/");
define("URL_EGI", "http://lg.egihosting.com/ajax.php?cmd=ping&host=");
define("REFERER_EGI", "http://lg.egihosting.com/");
define("URL_FIBERHUB", "http://lg.sonicvps.com/ajax.php?cmd=ping&host=");
define("REFERER_FIBERHUB", "http://lg.sonicvps.com/");
define("URL_IOFLOOD", "http://lg.egihosting.com/ajax.php?cmd=ping&host=");
define("REFERER_IOFLOOD", "http://lg.egihosting.com/");
define("URL_MULTACOM", "http://ca.lg.cloudshards.net/ajax.php?cmd=ping&host=");
define("REFERER_MULTACOM", "http://ca.lg.cloudshards.net/");
define("URL_NLAYER", "http://lg.nlayer.net/");
define("REFERER_NLAYER", "http://lg.nlayer.net/");
define("URL_OAH", "http://www.oneasiahost.com/lg/");
define("REFERER_OAH", "http://www.oneasiahost.com/lg/");
define("URL_PCCW", "http://lookingglass.pccwglobal.com/post/rt/ping/");
define("REFERER_PCCW", "http://lookingglass.pccwglobal.com/");
define("URL_PEER1", "http://lg.peer1.net/result.php");
define("REFERER_PEER1", "http://lg.peer1.net/");
define("URL_QUADRANET", "http://lg.maximumvps.net/ajax.php?cmd=ping&host=");
define("REFERER_QUADRANET", "http://lg.maximumvps.net/");
define("URL_KDDI", "http://lg01.colo01.bbtower.ad.jp/cgi-bin/lg.cgi");
define("REFERER_KDDI", "http://lg01.colo01.bbtower.ad.jp/");
define("URL_SAKURA", "http://as9370.bgp4.jp/lg.cgi?query=31&arg=");
define("REFERER_SAKURA", "http://as9370.bgp4.jp/lg.cgi");
define("URL_SERVERCENTRAL", "http://lg.servercentral.com/");
define("REFERER_SERVERCENTRAL", "http://lg.servercentral.com/");
define("URL_SUNNYVISION", "http://lg.sunnyvision.com/lg/");
define("REFERER_SUNNYVISION", "http://lg.sunnyvision.com/");
define("URL_VPLS", "http://lax.lg.as35908.net/bgplg/ping.xml?format=xml&query=ping4&arg=");
define("REFERER_VPLS", "http://lg.vpls.net/");
define("URL_VR", "http://www.hostvirtual.com/lg/ping/hong-kong-vps/");
define("REFERER_VR", "http://www.hostvirtual.com/lg/");

/**
 * 单词表类，统一存放，方便管理。
 * Wordlist Class
 *
 * @package		LookingGlassSAE
 * @subpackage	Libraries
 * @category	Library
 * @author		WDLTH
 * @link		http://www.wdlth.com/
 */

class Wordlist {
	
	public function abovenet($args, $ip)
	{
		
		switch ($args)
		{
			case "url":
				return URL_ABOVENET;
				break;
			case "ref":
				return REFERER_ABOVENET;
				break;
			case "post":
				return "query=ping&protocol=IPv4&addr=" . $ip . "&prefix=32&router=Los+Angeles%2C+CA";
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function globalcrossing($args, $ip)
	{
	
		switch ($args)
		{
			case "url":
				return URL_GBLX;
				break;
			case "ref":
				return REFERER_GBLX;
				break;
			case "post":
				return "lgCall=r2hping&source=118724&destAddress=" . $ip;
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function level3($args, $ip)
	{
	
		switch ($args)
		{
			case "url":
				return URL_LEVEL3;
				break;
			case "ref":
				return REFERER_LEVEL3;
				break;
			case "post":
				return "sitename=car1.lax1&address=" . $ip . "&size=64&count=5";
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function colocrossing($args, $ip)
	{
		switch ($args)
		{
			case "url":
				return URL_COLO;
				break;
			case "ref":
				return REFERER_COLO;
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function egihosting($args, $ip)
	{
		switch ($args)
		{
			case "url":
				return URL_EGI;
				break;
			case "ref":
				return REFERER_EGI;
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function fiberhub($args, $ip)
	{
		switch ($args)
		{
			case "url":
				return URL_FIBERHUB;
				break;
			case "ref":
				return REFERER_FIBERHUB;
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function multacom($args, $ip)
	{
		switch ($args)
		{
			case "url":
				return URL_MULTACOM;
				break;
			case "ref":
				return REFERER_MULTACOM;
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function ioflood($args, $ip)
	{
		switch ($args)
		{
			case "url":
				return URL_MULTACOM;
				break;
			case "ref":
				return REFERER_MULTACOM;
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function oneasiahost($args, $ip)
	{
	
		switch ($args)
		{
			case "url":
				return URL_OAH;
				break;
			case "ref":
				return REFERER_OAH;
				break;
			case "post":
				return "query=ping&protocol=ipv4&addr=" . $ip . "&router=OneAsiaHost";
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function pccw($args, $ip)
	{
	
		switch ($args)
		{
			case "url":
				return URL_PCCW;
				break;
			case "ref":
				return REFERER_PCCW;
				break;
			case "post":
				return "cmd=ping&cmd_class=ip&src=cr01.hkg05.pccwbtn.net&dst=" . $ip . "&bytes=64";
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function peer1($args, $ip)
	{
	
		switch ($args)
		{
			case "url":
				return URL_PEER1;
				break;
			case "ref":
				return REFERER_PEER1;
				break;
			case "post":
				return "query=ping&router=0000000007&addr=" . $ip;
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function quadranet($args, $ip)
	{
		switch ($args)
		{
			case "url":
				return URL_QUADRANET;
				break;
			case "ref":
				return REFERER_QUADRANET;
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function kddi($args, $ip)
	{
	
		switch ($args)
		{
			case "url":
				return URL_KDDI;
				break;
			case "ref":
				return REFERER_KDDI;
				break;
			case "post":
				return "CMD=ping&ARG=" . $ip ;
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function sakura($args, $ip)
	{
	
		switch ($args)
		{
			case "url":
				return URL_SAKURA;
				break;
			case "ref":
				return REFERER_SAKURA;
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function servercentral($args, $ip)
	{
	
		switch ($args)
		{
			case "url":
				return URL_SERVERCENTRAL;
				break;
			case "ref":
				return REFERER_SERVERCENTRAL;
				break;
			case "post":
				return "query=ping&protocol=IPv4&addr=" . $ip . "&router=Tokyo+-+Core+1";
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function sunnyvision($args, $ip)
	{
	
		switch ($args)
		{
			case "url":
				return URL_SUNNYVISION;
				break;
			case "ref":
				return REFERER_SUNNYVISION;
				break;
			case "post":
				return "query=ping&protocol=IPv4&addr=" . $ip . "&router=+Hong+Kong+-+HKG";
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function vpls($args, $ip)
	{
	
		switch ($args)
		{
			case "url":
				return URL_VPLS;
				break;
			case "ref":
				return REFERER_VPLS;
				break;
			default:
				return NULL;
				break;
		}
	}
	
	public function vr($args, $ip)
	{
	
		switch ($args)
		{
			case "url":
				return URL_VR;
				break;
			case "ref":
				return REFERER_VR;
				break;
			default:
				return NULL;
				break;
		}
	}
	
}
