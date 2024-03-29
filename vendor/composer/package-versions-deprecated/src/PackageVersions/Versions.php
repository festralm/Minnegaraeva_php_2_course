<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'vendor_name/minnegaraeva_php_2_course';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'jawira/plantuml' => 'v1.57.0@4682764a93ed6b70039fd9657ed902581a16c209',
  'jean85/pretty-package-versions' => '1.6.0@1e0104b46f045868f11942aea058cd7186d6c303',
  'laminas/laminas-code' => '4.3.0@1beb4447f9efd26041eba7eff50614e798c353fd',
  'laminas/laminas-eventmanager' => '3.3.1@966c859b67867b179fde1eff0cd38df51472ce4a',
  'laminas/laminas-zendframework-bridge' => '1.2.0@6cccbddfcfc742eb02158d6137ca5687d92cee32',
  'league/commonmark' => '1.6.2@7d70d2f19c84bcc16275ea47edabee24747352eb',
  'league/flysystem' => '1.0.46@f3e0d925c18b92cf3ce84ea5cc58d62a1762a2b2',
  'league/pipeline' => '1.0.0@aa14b0e3133121f8be39e9a3b6ddd011fc5bb9a8',
  'league/tactician' => 'v1.1.0@e79f763170f3d5922ec29e85cffca0bac5cd8975',
  'league/tactician-bundle' => 'v1.3.0@89c51277423ac485b62580c38322426c3ec6ad47',
  'league/tactician-container' => '2.0.0@d1a5d884e072b8cafbff802d07766076eb2ffcb0',
  'league/tactician-logger' => 'v0.10.0@3ff9ee04e4cbec100af827f829ed4c7ff7c08442',
  'league/uri' => '6.4.0@09da64118eaf4c5d52f9923a1e6a5be1da52fd9a',
  'league/uri-interfaces' => '2.2.0@667f150e589d65d79c89ffe662e426704f84224f',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'phpdocumentor/flyfinder' => '1.0.0@0443e747872cc4a4d8f4b830d16a0357c14df7a6',
  'phpdocumentor/graphviz' => '2.0.0@929e97b4ab6765fc4eb2f944b091a4a02807ee5d',
  'phpdocumentor/phpdocumentor' => 'v3.0.0@405da431bdc7ca02512cb6aa15f4ed43ffca8175',
  'phpdocumentor/reflection' => '4.0.1@447928a45710d6313e68774cf12b5f730b909baa',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'scrivo/highlight.php' => 'v9.18.1.6@44a3d4136edb5ad8551590bf90f437db80b2d466',
  'squizlabs/php_codesniffer' => '3.6.0@ffced0d2c8fa8e6cdc4d695a743271fab6c38625',
  'symfony/cache' => 'v5.3.0@44fd0f97d1fb198d344f22379dfc56af2221e608',
  'symfony/config' => 'v5.3.0@9f4a448c2d7fd2c90882dfff930b627ddbe16810',
  'symfony/console' => 'v5.3.0@058553870f7809087fa80fa734704a21b9bcaeb2',
  'symfony/contracts' => 'v2.4.0@8434102b404d119dcaf98c8fe19a2655573ac17a',
  'symfony/dependency-injection' => 'v5.3.0@94d973cb742d8c5c5dcf9534220e6b73b09af1d4',
  'symfony/dom-crawler' => 'v5.1.11@5d89ceb53ec65e1973a555072fac8ed5ecad3384',
  'symfony/dotenv' => 'v5.3.0@1ac423fcc9548709077f90aca26c733cdb7e6e5c',
  'symfony/error-handler' => 'v5.3.0@0e6768b8c0dcef26df087df2bbbaa143867a59b2',
  'symfony/event-dispatcher' => 'v5.3.0@67a5f354afa8e2f231081b3fa11a5912f933c3ce',
  'symfony/expression-language' => 'v5.3.0@e3c136ac5333b0d2ca9de9e7e3efe419362aa046',
  'symfony/filesystem' => 'v5.3.0@348116319d7fb7d1faa781d26a48922428013eb2',
  'symfony/finder' => 'v5.1.11@196f45723b5e618bf0e23b97e96d11652696ea9e',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/framework-bundle' => 'v5.3.0@99196372c703b8cc97ee61d63d98acbf9896d425',
  'symfony/http-foundation' => 'v5.3.0@31f25d99b329a1461f42bcef8505b54926a30be6',
  'symfony/http-kernel' => 'v5.3.0@f8e8f5391b6909e2f0ba8c12220ab7af3050eb4f',
  'symfony/monolog-bridge' => 'v5.3.0@84841557874df015ef2843aa16ac63d09f97c7b9',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-intl-grapheme' => 'v1.23.0@24b72c6baa32c746a4d0840147c9715e42bb68ab',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.0@2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v5.1.11@d279ae7f2d6e0e4e45f66de7d76006246ae00e4d',
  'symfony/proxy-manager-bridge' => 'v5.3.0@4e4997e77f30b4caed2b3cebefdecd7031e25a00',
  'symfony/routing' => 'v5.3.0@368e81376a8e049c37cb80ae87dbfbf411279199',
  'symfony/stopwatch' => 'v5.3.0@313d02f59d6543311865007e5ff4ace05b35ee65',
  'symfony/string' => 'v5.1.11@83bbb92d34881744b8021452a76532b28283dbfb',
  'symfony/var-dumper' => 'v5.3.0@1d3953e627fe4b5f6df503f356b6545ada6351f3',
  'symfony/var-exporter' => 'v5.3.0@7a7c9dd972541f78e7815c03c0bae9f81e0e9dbb',
  'symfony/yaml' => 'v5.3.0@3bbcf262fceb3d8f48175302e6ba0ac96e3a5a11',
  'twig/twig' => 'v2.14.6@27e5cf2b05e3744accf39d4c68a3235d9966d260',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'vendor_name/minnegaraeva_php_2_course' => 'dev-main@9f171c29b5f1514146eaedaad63039ff750a2032',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
