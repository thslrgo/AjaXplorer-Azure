<?php
defined('AJXP_EXEC') or die('Access not allowed');
require_once INSTALL_PATH . '/plugins/access.fs/class.fsAccessWrapper.php';

class azureAccessWrapper implements AjxpWrapper
{
	public static function getRealFSReference($path, $persistent = FALSE){
		throw new AJXP_Exception('Not implemented: getRealFSReference');
	}	

	public static function isRemote()
	{
		return true;
	}

	public static function copyFileInStream($path, $stream)
	{
		throw new AJXP_Exception('Not implemented: copyFileInStream');
	}

	public function stream_open($url, $mode, $options, &$context)
	{		
		throw new AJXP_Exception('Not implemented: stream_open');
	}

	public function stream_stat()
	{
		throw new AJXP_Exception('Not implemented: stream_stat');
	}	

	public function stream_seek($offset , $whence = SEEK_SET)
	{
		throw new AJXP_Exception('Not implemented: stream_seek');
	}

	public function stream_tell()
	{
		throw new AJXP_Exception('Not implemented: stream_tell');
	}	

	public function stream_read($count)
	{    	
		throw new AJXP_Exception('Not implemented:  stream_read');
	}

	public function stream_write($data)
	{
		throw new AJXP_Exception('Not implemented: getRealFSReference');
	}

	public function stream_eof()
	{
		throw new AJXP_Exception('Not implemented: stream_eof');
	}

	public function stream_close()
	{
		throw new AJXP_Exception('Not implemented: stream_close');
	}

	public function stream_flush()
	{
		throw new AJXP_Exception('Not implemented: stream_flush');
	}

	public function url_stat($path, $flags)
	{
		throw new AJXP_Exception('Not implemented: url_stat');
	}

	public static function changeMode($path, $chmodValue)
	{
		throw new AJXP_Exception('Not implemented: changeMode');
	}    

	public function unlink($url)
	{
		throw new AJXP_Exception('Not implemented: unlink');
	}

	public function rmdir($url, $options)
	{
		throw new AJXP_Exception('Not implemented: rmdir');
	}

	public function mkdir($url, $mode, $options){
		throw new AJXP_Exception('Not implemented: mkdir');
	}

	public function rename($from, $to)
	{
		throw new AJXP_Exception('Not implemented: rename');
	}

	public function dir_opendir($url, $options)
	{
		throw new AJXP_Exception('Not implemented: dir_opendir');
	}

	public function dir_closedir()
	{
		throw new AJXP_Exception('Not implemented: dir_closedir');
	}	

	public function dir_readdir()
	{
		throw new AJXP_Exception('Not implemented:  dir_readdir');
	}	

	public function dir_rewinddir()
	{
		throw new AJXP_Exception('Not implemented:  dir_rewinddir');
	}
	
	protected function parseUrl($url)
	{
		throw new AJXP_Exception('Not implemented: parseUrl');
	}

	protected function createHttpClient()
	{
		throw new AJXP_Exception('Not implemented: createHttpClient'); 	
	}	
}
?>