<?php
/**
 * Created by PhpStorm.
 * User: eduardosilvi
 * Date: 10/03/19
 * Time: 20.22
 */

namespace ComposerNoDownload;


use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Class Plugin
 *
 * @package composerNoDownload
 * @author eduardo3q@gmail.com
 */
class Plugin implements PluginInterface {

	public function activate( Composer $composer, IOInterface $io ) {
		$installer = new Installer($io, $composer);
		$composer->getInstallationManager()->addInstaller($installer);
	}
}