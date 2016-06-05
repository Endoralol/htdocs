<?php


if (!defined('DS'))
    define('DS', DIRECTORY_SEPARATOR);

if (!defined('FREEDOMCORE_DIR'))
    define('FREEDOMCORE_DIR', '.' . DS . 'Core' . DS);

if (!defined('FREEDOMCORE_EXTENSIONS_DIR'))
     define('FREEDOMCORE_EXTENSIONS_DIR', FREEDOMCORE_DIR . 'Extensions' . DS);

if (!defined('FREEDOMCORE_SYSTEM_DIR'))
     define('FREEDOMCORE_SYSTEM_DIR', FREEDOMCORE_DIR . 'Libraries' . DS .'FreedomCore' . DS . 'System' .DS);

Class FreedomCore
{
	const FREEDOMCORE_VERSION = 'FreedomCore-2.0.1';

	public function __construct() 
	{
		require_once FREEDOMCORE_SYSTEM_DIR.'Manager.FreedomCore.php';
        FreedomCore::InitializeSystem();
		$this->FreedomCore = $this;
        $this->setExtensionsDir(FREEDOMCORE_EXTENSIONS_DIR)
        	->setCacheDir('.' . DS . 'Cache' . DS)
        	->setConfigDir('.' . DS . FREEDOMCORE_DIR . 'Configuration' . DS)
        	->setLanguageDir('.' . DS . FREEDOMCORE_DIR . 'Languages' . DS);
        FreedomCore::VerifyCurlInstallation();
        FreedomCore::VerifyPDOInstallation();
	}

    private static function VerifyCurlInstallation()
    {
        $CurlInstalled = false;
        if(in_array('curl', get_loaded_extensions()))
            $CurlInstalled = true;
        else
            $CurlInstalled = false;

        if(!$CurlInstalled)
            die('Curl Extension is not installed!');
    }

    private static function VerifyPDOInstallation()
    {
        $PDOInstalled = false;
        if(extension_loaded('pdo'))
            $PDOInstalled = true;
        else
            $PDOInstalled = false;

        if(!$PDOInstalled)
            die('PDO_MySQL is not installed!');
    }

    private static function InitializeSystem()
    {
        Manager::LoadSystemExtension("Security");
        Manager::LoadSystemExtension("Session");
        Manager::LoadSystemExtension("Debugger");
        Manager::LoadSystemExtension("Database");
        Manager::LoadSystemExtension("Utilities");
        Manager::LoadSystemExtension("Page");
        Manager::LoadSystemExtension("Text");
        Manager::LoadSystemExtension("File");
    }

    public function __set($name, $value)
    {
        $allowed = array(
        'config_dir' => 'setConfigDir',
        'extensions_dir' => 'setExtensionsDir',
        'cache_dir' => 'setCacheDir',
        'languages_dir' => 'setLanguageDir',
        'load_config' => 'loadConfig',
        'set_timezone' => 'setTimezone',
        );
         if (isset($allowed[$name]))
           $this->{$allowed[$name]}($value);
    }

    public function setExtensionsDir($extensions_dir)
    {
        $this->extensions_dir = rtrim($extensions_dir, '/\\') . DS;
        return $this;
    }

    public function setConfigDir($config_dir)
    {
        $this->config_dir = rtrim($config_dir, '/\\') . DS;
        return $this;
    }

    public function getConfigDir($index=null)
    {
        if ($index !== null) 
        {
           return isset($this->config_dir[$index]) ? $this->config_dir[$index] : null;
        }

        return $this->config_dir;
    }

    public function getExtensionsDir()
    {
        return $this->extensions_dir;
    }

    public function setCacheDir($cache_dir)
    {
        $this->cache_dir = rtrim($cache_dir, '/\\') . DS;
        return $this;
    }

    public function getCacheDir()
    {
        return $this->cache_dir;
    }

    public function setLanguageDir($languages_dir)
    {
        $this->languages_dir = rtrim($languages_dir, '/\\') . DS;
        return $this;
    }

    public function getLanguageDir()
    {
        return $this->languages_dir;
    }

    public function getVersion()
    {
         return FreedomCore::FREEDOMCORE_VERSION;
    }

    public function loadLanguage()
    {
         $UserLanguage = Utilities::GetLanguage();
         return $UserLanguage;
    }

    public function loadConfig()
    {
        $Configuration = FreedomCore::getConfigDir().'Configuration.php';
        if(file_exists($Configuration))
            require_once($Configuration);
        else
            Debugger::ReportError(1,2, 'Configuration File');

    }

    public function setTimezone($TimeZone)
    {
        date_default_timezone_set($TimeZone);
    }

    public function getTimezone()
    {
        return date_default_timezone_get();
    }

}
?>