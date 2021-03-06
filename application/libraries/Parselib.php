<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Parselib Class
 * 结果解析类，解析返回结果从中提取并返回结果数组。
 *
 * @package		LookingGlassSAE
 * @subpackage	Libraries
 * @category	Library
 * @author		WDLTH
 * @link		http://www.wdlth.com/
 */

class Parselib {
	
	public function parseping($data)
	{
		$resultarr = array(); 
				
		$arr = explode("\n",$data);
		$arr = array_filter($arr);
		$arr = array_values($arr);
		
		preg_match("/([0-9]+|[0-9]+\.[0-9]+)% packet loss/i", $arr[count($arr) - 2], $lossmatches);
		preg_match("/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\ ms/i", $arr[count($arr) - 1], $delaymatches);
		$resultarr["min"] = floor($delaymatches[1]);
		$resultarr["avg"] = floor($delaymatches[2]);
		$resultarr["max"] = floor($delaymatches[3]);
		$resultarr["loss"] = floor($lossmatches[1]);
		
		return $resultarr;
	}
	
	public function parsegblx($data)
	{
		$resultarr = array();
	
		$arr = explode("<br>",$data);
		$arr = array_filter($arr);
		$arr = array_values($arr);
	
		/*preg_match("/([0-9]+)% packet loss/i", $arr[count($arr) - 3], $lossmatches);
		preg_match("/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\ ms/i", $arr[count($arr) - 2], $delaymatches);
		$resultarr["min"] = floor($delaymatches[1]);
		$resultarr["avg"] = floor($delaymatches[2]);
		$resultarr["max"] = floor($delaymatches[4]);
		$resultarr["loss"] = $lossmatches[1];*/
	
		return $arr;
	}
	
	public function parselevel3($data)
	{
		$resultarr = array();
	
		$arr = explode("<br>",$data);
		$arr = array_filter($arr);
		$arr = array_values($arr);
	
		preg_match("/([0-9]+)% packet loss/i", $arr[count($arr) - 3], $lossmatches);
		preg_match("/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\ ms/i", $arr[count($arr) - 2], $delaymatches);
		$resultarr["min"] = floor($delaymatches[1]);
		$resultarr["avg"] = floor($delaymatches[2]);
		$resultarr["max"] = floor($delaymatches[4]);
		$resultarr["loss"] = floor($lossmatches[1]);
	
		return $resultarr;
	}
	
	/**
	 * OAH返回格式
	 * @param $data
	 * @return array
	 */
	public function parseoah($data)
	{
		$resultarr = array();
	
		$arr = explode("\n",$data);
		$arr = array_filter($arr);
		$arr = array_values($arr);
	
		preg_match("/([0-9]+)% packet loss/i", $arr[count($arr) - 3], $lossmatches);
		preg_match("/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\ ms/i", $arr[count($arr) - 2], $delaymatches);
		$resultarr["min"] = floor($delaymatches[1]);
		$resultarr["avg"] = floor($delaymatches[2]);
		$resultarr["max"] = floor($delaymatches[3]);
		$resultarr["loss"] = floor($lossmatches[1]);
	
		return $resultarr;
	}
    
	/**
	 * Peer1返回格式
	 * @param $data
	 * @return array
	 */
    public function parsepeer1($data)
	{
		$resultarr = array();
	
		$arr = explode("\n",$data);
		$arr = array_filter($arr);
		$arr = array_values($arr);
	
		preg_match("/([0-9]+)% packet loss/i", $arr[count($arr) - 2], $lossmatches);
		preg_match("/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\ ms/i", $arr[count($arr) - 1], $delaymatches);
		$resultarr["min"] = floor($delaymatches[1]);
		$resultarr["avg"] = floor($delaymatches[2]);
		$resultarr["max"] = floor($delaymatches[3]);
		$resultarr["loss"] = floor($lossmatches[1]);
	
		return $resultarr;
	}
	
	/**
	 * 新力讯返回格式
	 * @param $data
	 * @return array
	 */
	public function parsesunnyvision($data)
	{
		$resultarr = array();
	
		$arr = explode("\n",$data);
		$arr = array_filter($arr);
		$arr = array_values($arr);
	
		//preg_match("/([0-9]+)% packet loss/i", $arr[count($arr) - 3], $lossmatches);
		//preg_match("/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\ ms/i", $arr[count($arr) - 2], $delaymatches);
		preg_match("/^Success\ rate\ is\ ([0-9]+)\ percent\ (.+)\ =\ ([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\ ms$/i", $arr[count($arr) - 1], $matches);
		$resultarr["min"] = floor($matches[3]);
		$resultarr["avg"] = floor($matches[4]);
		$resultarr["max"] = floor($matches[5]);
		$resultarr["loss"] = 100 - floor($matches[1]);
	
		return $resultarr;
	}
	
	/**
	 * Telephone程序返回格式
	 * @param $data
	 * @return array
	 */
	public function parsetelephone($data)
	{
		
		$resultarr = array();
		$resultstr = preg_replace("/<br \/>([\s]+)/i", " ", $data);
		preg_match("/([0-9]+)% packet loss/i", $resultstr, $lossmatches);
		preg_match("/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\ ms/i", $resultstr, $delaymatches);
		$resultarr["min"] = floor($delaymatches[1]);
		$resultarr["avg"] = floor($delaymatches[2]);
		$resultarr["max"] = floor($delaymatches[3]);
		$resultarr["loss"] = floor($lossmatches[1]);
		
		return $resultarr;
		
	}
	
	/**
	 * Krypt/VPLS返回格式
	 * @param $data
	 * @return array
	 */
	public function parsevpls($data)
	{
		$resultarr = array();
		$xml = simplexml_load_string($data);
		if(!($xml->statistics))
		{
			log_message('warning', "Cannot parse data from vpls.");
			return FALSE;
		}else{
			$resultarr["min"] = floor(floatval($xml->statistics->ttl->min));
			$resultarr["avg"] = floor(floatval($xml->statistics->ttl->avg));
			$resultarr["max"] = floor(floatval($xml->statistics->ttl->max));
			$resultarr["loss"] = 100 - floor(100 * (floatval($xml->statistics->recv) / floatval($xml->statistics->send)));
		}
		return $resultarr;
	}
	
	/**
	 * PCCW返回格式
	 * @param $data
	 * @return array
	 */
	public function parsepccw($data)
	{
		$resultarr = array();
		$xmlarr = array();
		$n = 0;
		$xml = simplexml_load_string($data);
		$url = "http://lookingglass.pccwglobal.com/get/lg_rs/";
		
		if(!($xml->result))
		{
			log_message('warning', "Cannot parse data from pccw.");
			return FALSE;
		}else{
			while(1)
			{
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url . $xml->job_id . "/" . $xml->rs_id);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_REFERER, "http://lookingglass.pccwglobal.com/");
				curl_setopt($ch, CURLOPT_TIMEOUT, 60);
				$result = curl_exec($ch);
				
				$xml = simplexml_load_string($result);
				$xmlarr[$n] = (string)$xml->results;
				$n++;
				
				if (strpos($xml->results, "Query Complete") !== FALSE)
					break;
			}
			preg_match("/^Success\ rate\ is\ ([0-9]+)\ percent\ (.+)\ =\ ([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\/([0-9]+|[0-9]+\.[0-9]+)\ ms$/i", $xmlarr[count($xmlarr) - 3], $matches);
			$resultarr["min"] = floor($matches[3]);
			$resultarr["avg"] = floor($matches[4]);
			$resultarr["max"] = floor($matches[5]);
			$resultarr["loss"] = 100 - floor($matches[1]);
			return $resultarr;
		}
	}
}