<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * appProdProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appProdProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /*
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'sidus_eav_model.family.baseasset' => 'sidus_eav_model.family.BaseAsset',
            'sidus_eav_model.family.document' => 'sidus_eav_model.family.Document',
            'sidus_eav_model.family.image' => 'sidus_eav_model.family.Image',
            'sidus_eav_model.family.node' => 'sidus_eav_model.family.Node',
            'symfony\\component\\security\\core\\authorization\\authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
            'symfony\\component\\security\\core\\encoder\\userpasswordencoderinterface' => 'Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface',
        );
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService',
            'argument_resolver.request' => 'getArgumentResolver_RequestService',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService',
            'argument_resolver.session' => 'getArgumentResolver_SessionService',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter.uglifycss' => 'getAssetic_Filter_UglifycssService',
            'assetic.filter.uglifyjs2' => 'getAssetic_Filter_Uglifyjs2Service',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.default_clearer' => 'getCache_DefaultClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.property_access' => 'getCache_PropertyAccessService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'circle.curl' => 'getCircle_CurlService',
            'circle.curl.options.handler' => 'getCircle_Curl_Options_HandlerService',
            'circle.restclient' => 'getCircle_RestclientService',
            'cleverage_process.manager.process' => 'getCleverageProcess_Manager_ProcessService',
            'cleverage_process.registry.process_configuration' => 'getCleverageProcess_Registry_ProcessConfigurationService',
            'cleverage_process.registry.transformer' => 'getCleverageProcess_Registry_TransformerService',
            'cleverage_process.task.constant_iterable_output' => 'getCleverageProcess_Task_ConstantIterableOutputService',
            'cleverage_process.task.constant_output' => 'getCleverageProcess_Task_ConstantOutputService',
            'cleverage_process.task.csv_reader' => 'getCleverageProcess_Task_CsvReaderService',
            'cleverage_process.task.csv_writer' => 'getCleverageProcess_Task_CsvWriterService',
            'cleverage_process.task.database_reader' => 'getCleverageProcess_Task_DatabaseReaderService',
            'cleverage_process.task.debug' => 'getCleverageProcess_Task_DebugService',
            'cleverage_process.task.denormalizer' => 'getCleverageProcess_Task_DenormalizerService',
            'cleverage_process.task.doctrine_reader' => 'getCleverageProcess_Task_DoctrineReaderService',
            'cleverage_process.task.doctrine_writer' => 'getCleverageProcess_Task_DoctrineWriterService',
            'cleverage_process.task.dummy' => 'getCleverageProcess_Task_DummyService',
            'cleverage_process.task.normalizer' => 'getCleverageProcess_Task_NormalizerService',
            'cleverage_process.task.property_setter' => 'getCleverageProcess_Task_PropertySetterService',
            'cleverage_process.task.stat_counter' => 'getCleverageProcess_Task_StatCounterService',
            'cleverage_process.task.transformer' => 'getCleverageProcess_Task_TransformerService',
            'cleverage_process.task.validator' => 'getCleverageProcess_Task_ValidatorService',
            'cleverage_process.transformer.array_first' => 'getCleverageProcess_Transformer_ArrayFirstService',
            'cleverage_process.transformer.array_map' => 'getCleverageProcess_Transformer_ArrayMapService',
            'cleverage_process.transformer.explode' => 'getCleverageProcess_Transformer_ExplodeService',
            'cleverage_process.transformer.mapping' => 'getCleverageProcess_Transformer_MappingService',
            'cleverage_process.transformer.property_accessor' => 'getCleverageProcess_Transformer_PropertyAccessorService',
            'cleverage_process.transformer.slugify' => 'getCleverageProcess_Transformer_SlugifyService',
            'cleverage_process.transformer.trim' => 'getCleverageProcess_Transformer_TrimService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService',
            'console.error_listener' => 'getConsole_ErrorListenerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'eavmanager.form.extension.data_selector' => 'getEavmanager_Form_Extension_DataSelectorService',
            'eavmanager.twig.context.extension' => 'getEavmanager_Twig_Context_ExtensionService',
            'eavmanager_admin.form.image.type' => 'getEavmanagerAdmin_Form_Image_TypeService',
            'eavmanager_admin.form.link.type' => 'getEavmanagerAdmin_Form_Link_TypeService',
            'eavmanager_admin.form.variant_family_selector.type' => 'getEavmanagerAdmin_Form_VariantFamilySelector_TypeService',
            'eavmanager_admin.listener.routing.cache' => 'getEavmanagerAdmin_Listener_Routing_CacheService',
            'eavmanager_asset.doctrine.subscriber' => 'getEavmanagerAsset_Doctrine_SubscriberService',
            'eavmanager_asset.form.media_browser.type' => 'getEavmanagerAsset_Form_MediaBrowser_TypeService',
            'eavmanager_asset.twig.media.extension' => 'getEavmanagerAsset_Twig_Media_ExtensionService',
            'eavmanager_eav_model.attribute_type.document' => 'getEavmanagerEavModel_AttributeType_DocumentService',
            'eavmanager_eav_model.attribute_type.image' => 'getEavmanagerEavModel_AttributeType_ImageService',
            'eavmanager_eav_model.attribute_type.media_browser' => 'getEavmanagerEavModel_AttributeType_MediaBrowserService',
            'eavmanager_security.family.voter' => 'getEavmanagerSecurity_Family_VoterService',
            'eavmanager_security.form.family_permission.type' => 'getEavmanagerSecurity_Form_FamilyPermission_TypeService',
            'eavmanager_security.form.role_hierarchy.type' => 'getEavmanagerSecurity_Form_RoleHierarchy_TypeService',
            'eavmanager_user.config.holder' => 'getEavmanagerUser_Config_HolderService',
            'eavmanager_user.doctrine.event.authorable.subscriber' => 'getEavmanagerUser_Doctrine_Event_Authorable_SubscriberService',
            'eavmanager_user.form.group.type' => 'getEavmanagerUser_Form_Group_TypeService',
            'eavmanager_user.form.user.type' => 'getEavmanagerUser_Form_User_TypeService',
            'eavmanager_user.form.user_profile.type' => 'getEavmanagerUser_Form_UserProfile_TypeService',
            'eavmanager_user.mailer.user' => 'getEavmanagerUser_Mailer_UserService',
            'eavmanager_user.normalizer.user' => 'getEavmanagerUser_Normalizer_UserService',
            'eavmanager_user.normalizer.user.flat' => 'getEavmanagerUser_Normalizer_User_FlatService',
            'eavmanager_user.user.manager' => 'getEavmanagerUser_User_ManagerService',
            'eavmanager_user.user.provider' => 'getEavmanagerUser_User_ProviderService',
            'event_dispatcher' => 'getEventDispatcherService',
            'exercise_html_purifier.cache_warmer.serializer' => 'getExerciseHtmlPurifier_CacheWarmer_SerializerService',
            'exercise_html_purifier.config.default' => 'getExerciseHtmlPurifier_Config_DefaultService',
            'exercise_html_purifier.default' => 'getExerciseHtmlPurifier_DefaultService',
            'exercise_html_purifier.twig_extension' => 'getExerciseHtmlPurifier_TwigExtensionService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_js_routing.controller' => 'getFosJsRouting_ControllerService',
            'fos_js_routing.extractor' => 'getFosJsRouting_ExtractorService',
            'fos_js_routing.serializer' => 'getFosJsRouting_SerializerService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'liip_imagine' => 'getLiipImagineService',
            'liip_imagine.binary.loader.default' => 'getLiipImagine_Binary_Loader_DefaultService',
            'liip_imagine.binary.loader.images' => 'getLiipImagine_Binary_Loader_ImagesService',
            'liip_imagine.binary.loader.prototype.filesystem' => 'getLiipImagine_Binary_Loader_Prototype_FilesystemService',
            'liip_imagine.binary.loader.prototype.stream' => 'getLiipImagine_Binary_Loader_Prototype_StreamService',
            'liip_imagine.binary.mime_type_guesser' => 'getLiipImagine_Binary_MimeTypeGuesserService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.default' => 'getLiipImagine_Cache_Resolver_DefaultService',
            'liip_imagine.cache.resolver.no_cache_web_path' => 'getLiipImagine_Cache_Resolver_NoCacheWebPathService',
            'liip_imagine.cache.signer' => 'getLiipImagine_Cache_SignerService',
            'liip_imagine.controller' => 'getLiipImagine_ControllerService',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService',
            'liip_imagine.extension_guesser' => 'getLiipImagine_ExtensionGuesserService',
            'liip_imagine.filter.configuration' => 'getLiipImagine_Filter_ConfigurationService',
            'liip_imagine.filter.loader.auto_rotate' => 'getLiipImagine_Filter_Loader_AutoRotateService',
            'liip_imagine.filter.loader.background' => 'getLiipImagine_Filter_Loader_BackgroundService',
            'liip_imagine.filter.loader.crop' => 'getLiipImagine_Filter_Loader_CropService',
            'liip_imagine.filter.loader.downscale' => 'getLiipImagine_Filter_Loader_DownscaleService',
            'liip_imagine.filter.loader.flip' => 'getLiipImagine_Filter_Loader_FlipService',
            'liip_imagine.filter.loader.grayscale' => 'getLiipImagine_Filter_Loader_GrayscaleService',
            'liip_imagine.filter.loader.interlace' => 'getLiipImagine_Filter_Loader_InterlaceService',
            'liip_imagine.filter.loader.paste' => 'getLiipImagine_Filter_Loader_PasteService',
            'liip_imagine.filter.loader.relative_resize' => 'getLiipImagine_Filter_Loader_RelativeResizeService',
            'liip_imagine.filter.loader.resize' => 'getLiipImagine_Filter_Loader_ResizeService',
            'liip_imagine.filter.loader.rotate' => 'getLiipImagine_Filter_Loader_RotateService',
            'liip_imagine.filter.loader.scale' => 'getLiipImagine_Filter_Loader_ScaleService',
            'liip_imagine.filter.loader.strip' => 'getLiipImagine_Filter_Loader_StripService',
            'liip_imagine.filter.loader.thumbnail' => 'getLiipImagine_Filter_Loader_ThumbnailService',
            'liip_imagine.filter.loader.upscale' => 'getLiipImagine_Filter_Loader_UpscaleService',
            'liip_imagine.filter.loader.watermark' => 'getLiipImagine_Filter_Loader_WatermarkService',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService',
            'liip_imagine.filter.post_processor.jpegoptim' => 'getLiipImagine_Filter_PostProcessor_JpegoptimService',
            'liip_imagine.filter.post_processor.mozjpeg' => 'getLiipImagine_Filter_PostProcessor_MozjpegService',
            'liip_imagine.filter.post_processor.optipng' => 'getLiipImagine_Filter_PostProcessor_OptipngService',
            'liip_imagine.filter.post_processor.pngquant' => 'getLiipImagine_Filter_PostProcessor_PngquantService',
            'liip_imagine.form.type.image' => 'getLiipImagine_Form_Type_ImageService',
            'liip_imagine.mime_type_guesser' => 'getLiipImagine_MimeTypeGuesserService',
            'liip_imagine.templating.helper' => 'getLiipImagine_Templating_HelperService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.activation_strategy.not_found' => 'getMonolog_ActivationStrategy_NotFoundService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => 'getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'mopa_bootstrap.form.type.form_actions' => 'getMopaBootstrap_Form_Type_FormActionsService',
            'mopa_bootstrap.form.type.tab' => 'getMopaBootstrap_Form_Type_TabService',
            'mopa_bootstrap.form.type_extension.button' => 'getMopaBootstrap_Form_TypeExtension_ButtonService',
            'mopa_bootstrap.form.type_extension.date' => 'getMopaBootstrap_Form_TypeExtension_DateService',
            'mopa_bootstrap.form.type_extension.datetime' => 'getMopaBootstrap_Form_TypeExtension_DatetimeService',
            'mopa_bootstrap.form.type_extension.embed_form' => 'getMopaBootstrap_Form_TypeExtension_EmbedFormService',
            'mopa_bootstrap.form.type_extension.error' => 'getMopaBootstrap_Form_TypeExtension_ErrorService',
            'mopa_bootstrap.form.type_extension.help' => 'getMopaBootstrap_Form_TypeExtension_HelpService',
            'mopa_bootstrap.form.type_extension.horizontal' => 'getMopaBootstrap_Form_TypeExtension_HorizontalService',
            'mopa_bootstrap.form.type_extension.legend' => 'getMopaBootstrap_Form_TypeExtension_LegendService',
            'mopa_bootstrap.form.type_extension.offset_button' => 'getMopaBootstrap_Form_TypeExtension_OffsetButtonService',
            'mopa_bootstrap.form.type_extension.static_text' => 'getMopaBootstrap_Form_TypeExtension_StaticTextService',
            'mopa_bootstrap.form.type_extension.tabbed' => 'getMopaBootstrap_Form_TypeExtension_TabbedService',
            'mopa_bootstrap.form.type_extension.time' => 'getMopaBootstrap_Form_TypeExtension_TimeService',
            'mopa_bootstrap.form.type_extension.widget' => 'getMopaBootstrap_Form_TypeExtension_WidgetService',
            'mopa_bootstrap.form.type_extension.widget_collection' => 'getMopaBootstrap_Form_TypeExtension_WidgetCollectionService',
            'mopa_bootstrap.twig.extension.bootstrap_flash' => 'getMopaBootstrap_Twig_Extension_BootstrapFlashService',
            'mopa_bootstrap.twig.extension.bootstrap_form' => 'getMopaBootstrap_Twig_Extension_BootstrapFormService',
            'mopa_bootstrap.twig.extension.bootstrap_icon' => 'getMopaBootstrap_Twig_Extension_BootstrapIconService',
            'oneup_flysystem.adapter_factory.awss3v2' => 'getOneupFlysystem_AdapterFactory_Awss3v2Service',
            'oneup_flysystem.adapter_factory.awss3v3' => 'getOneupFlysystem_AdapterFactory_Awss3v3Service',
            'oneup_flysystem.adapter_factory.customadapter' => 'getOneupFlysystem_AdapterFactory_CustomadapterService',
            'oneup_flysystem.adapter_factory.dropbox' => 'getOneupFlysystem_AdapterFactory_DropboxService',
            'oneup_flysystem.adapter_factory.fallback' => 'getOneupFlysystem_AdapterFactory_FallbackService',
            'oneup_flysystem.adapter_factory.ftp' => 'getOneupFlysystem_AdapterFactory_FtpService',
            'oneup_flysystem.adapter_factory.gaufrette' => 'getOneupFlysystem_AdapterFactory_GaufretteService',
            'oneup_flysystem.adapter_factory.googlecloudstorage' => 'getOneupFlysystem_AdapterFactory_GooglecloudstorageService',
            'oneup_flysystem.adapter_factory.gridfs' => 'getOneupFlysystem_AdapterFactory_GridfsService',
            'oneup_flysystem.adapter_factory.local' => 'getOneupFlysystem_AdapterFactory_LocalService',
            'oneup_flysystem.adapter_factory.memory' => 'getOneupFlysystem_AdapterFactory_MemoryService',
            'oneup_flysystem.adapter_factory.nulladapter' => 'getOneupFlysystem_AdapterFactory_NulladapterService',
            'oneup_flysystem.adapter_factory.rackspace' => 'getOneupFlysystem_AdapterFactory_RackspaceService',
            'oneup_flysystem.adapter_factory.replicate' => 'getOneupFlysystem_AdapterFactory_ReplicateService',
            'oneup_flysystem.adapter_factory.sftp' => 'getOneupFlysystem_AdapterFactory_SftpService',
            'oneup_flysystem.adapter_factory.webdav' => 'getOneupFlysystem_AdapterFactory_WebdavService',
            'oneup_flysystem.adapter_factory.zip' => 'getOneupFlysystem_AdapterFactory_ZipService',
            'oneup_flysystem.cache_factory.adapter' => 'getOneupFlysystem_CacheFactory_AdapterService',
            'oneup_flysystem.cache_factory.memcached' => 'getOneupFlysystem_CacheFactory_MemcachedService',
            'oneup_flysystem.cache_factory.memory' => 'getOneupFlysystem_CacheFactory_MemoryService',
            'oneup_flysystem.cache_factory.noop' => 'getOneupFlysystem_CacheFactory_NoopService',
            'oneup_flysystem.cache_factory.php_redis' => 'getOneupFlysystem_CacheFactory_PhpRedisService',
            'oneup_flysystem.cache_factory.predis' => 'getOneupFlysystem_CacheFactory_PredisService',
            'oneup_flysystem.cache_factory.psr6' => 'getOneupFlysystem_CacheFactory_Psr6Service',
            'oneup_flysystem.cache_factory.stash' => 'getOneupFlysystem_CacheFactory_StashService',
            'oneup_flysystem.documents_filesystem' => 'getOneupFlysystem_DocumentsFilesystemService',
            'oneup_flysystem.images_filesystem' => 'getOneupFlysystem_ImagesFilesystemService',
            'oneup_flysystem.mount_manager' => 'getOneupFlysystem_MountManagerService',
            'oneup_flysystem.plugin.empty_dir' => 'getOneupFlysystem_Plugin_EmptyDirService',
            'oneup_flysystem.plugin.get_with_metadata' => 'getOneupFlysystem_Plugin_GetWithMetadataService',
            'oneup_flysystem.plugin.list_files' => 'getOneupFlysystem_Plugin_ListFilesService',
            'oneup_flysystem.plugin.list_paths' => 'getOneupFlysystem_Plugin_ListPathsService',
            'oneup_flysystem.plugin.list_with' => 'getOneupFlysystem_Plugin_ListWithService',
            'oneup_flysystem.resources_adapter' => 'getOneupFlysystem_ResourcesAdapterService',
            'oneup_uploader.chunk_manager' => 'getOneupUploader_ChunkManagerService',
            'oneup_uploader.chunks_storage' => 'getOneupUploader_ChunksStorageService',
            'oneup_uploader.controller.document' => 'getOneupUploader_Controller_DocumentService',
            'oneup_uploader.controller.image' => 'getOneupUploader_Controller_ImageService',
            'oneup_uploader.error_handler.blueimp' => 'getOneupUploader_ErrorHandler_BlueimpService',
            'oneup_uploader.namer.uniqid' => 'getOneupUploader_Namer_UniqidService',
            'oneup_uploader.orphanage_manager' => 'getOneupUploader_OrphanageManagerService',
            'oneup_uploader.routing.loader' => 'getOneupUploader_Routing_LoaderService',
            'oneup_uploader.storage.document' => 'getOneupUploader_Storage_DocumentService',
            'oneup_uploader.storage.image' => 'getOneupUploader_Storage_ImageService',
            'oneup_uploader.templating.uploader_helper' => 'getOneupUploader_Templating_UploaderHelperService',
            'oneup_uploader.twig.extension.uploader' => 'getOneupUploader_Twig_Extension_UploaderService',
            'oneup_uploader.validation_listener.allowed_mimetype' => 'getOneupUploader_ValidationListener_AllowedMimetypeService',
            'oneup_uploader.validation_listener.disallowed_mimetype' => 'getOneupUploader_ValidationListener_DisallowedMimetypeService',
            'oneup_uploader.validation_listener.max_size' => 'getOneupUploader_ValidationListener_MaxSizeService',
            'pagerfanta.convert_not_valid_current_page_to_not_found_listener' => 'getPagerfanta_ConvertNotValidCurrentPageToNotFoundListenerService',
            'pagerfanta.convert_not_valid_max_per_page_to_not_found_listener' => 'getPagerfanta_ConvertNotValidMaxPerPageToNotFoundListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService',
            'security.access.role_hierarchy_voter' => 'getSecurity_Access_RoleHierarchyVoterService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.provider.anonymous.main' => 'getSecurity_Authentication_Provider_Anonymous_MainService',
            'security.authentication.provider.dao.main' => 'getSecurity_Authentication_Provider_Dao_MainService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => 'getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'serializer' => 'getSerializerService',
            'serializer.mapping.cache.symfony' => 'getSerializer_Mapping_Cache_SymfonyService',
            'serializer.mapping.cache_class_metadata_factory' => 'getSerializer_Mapping_CacheClassMetadataFactoryService',
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => 'getServiceLocator_E64d23c3bf770e2cf44b71643280668dService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.handler.memcached' => 'getSession_Handler_MemcachedService',
            'session.memcached' => 'getSession_MemcachedService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'sidus_admin.configuration.admin.handler' => 'getSidusAdmin_Configuration_Admin_HandlerService',
            'sidus_admin.entity.matcher' => 'getSidusAdmin_Entity_MatcherService',
            'sidus_admin.kernel.event.controller_injecter' => 'getSidusAdmin_Kernel_Event_ControllerInjecterService',
            'sidus_admin.routing.admin_router' => 'getSidusAdmin_Routing_AdminRouterService',
            'sidus_admin.routing.route_loader' => 'getSidusAdmin_Routing_RouteLoaderService',
            'sidus_admin.templating.template_resolver' => 'getSidusAdmin_Templating_TemplateResolverService',
            'sidus_admin.twig.extension.admin' => 'getSidusAdmin_Twig_Extension_AdminService',
            'sidus_data_grid.datagrid_configuration.handler' => 'getSidusDataGrid_DatagridConfiguration_HandlerService',
            'sidus_data_grid.form.link.type' => 'getSidusDataGrid_Form_Link_TypeService',
            'sidus_data_grid.renderer.twig' => 'getSidusDataGrid_Renderer_TwigService',
            'sidus_eav_bootstrap.attribute_type.autocomplete_data_selector' => 'getSidusEavBootstrap_AttributeType_AutocompleteDataSelectorService',
            'sidus_eav_bootstrap.attribute_type.combo_data_selector' => 'getSidusEavBootstrap_AttributeType_ComboDataSelectorService',
            'sidus_eav_bootstrap.attribute_type.switch' => 'getSidusEavBootstrap_AttributeType_SwitchService',
            'sidus_eav_bootstrap.controller.autocomplete' => 'getSidusEavBootstrap_Controller_AutocompleteService',
            'sidus_eav_bootstrap.form.helper.compute_label' => 'getSidusEavBootstrap_Form_Helper_ComputeLabelService',
            'sidus_eav_bootstrap.form.type.autocomplete_data_selector' => 'getSidusEavBootstrap_Form_Type_AutocompleteDataSelectorService',
            'sidus_eav_bootstrap.form.type.combo_data_selector' => 'getSidusEavBootstrap_Form_Type_ComboDataSelectorService',
            'sidus_eav_bootstrap.form.type.tabbed_data' => 'getSidusEavBootstrap_Form_Type_TabbedDataService',
            'sidus_eav_filter.filter.type.autocomplete_data' => 'getSidusEavFilter_Filter_Type_AutocompleteDataService',
            'sidus_eav_model.attribute.registry' => 'getSidusEavModel_Attribute_RegistryService',
            'sidus_eav_model.attribute_type.boolean' => 'getSidusEavModel_AttributeType_BooleanService',
            'sidus_eav_model.attribute_type.choice' => 'getSidusEavModel_AttributeType_ChoiceService',
            'sidus_eav_model.attribute_type.data_selector' => 'getSidusEavModel_AttributeType_DataSelectorService',
            'sidus_eav_model.attribute_type.date' => 'getSidusEavModel_AttributeType_DateService',
            'sidus_eav_model.attribute_type.datetime' => 'getSidusEavModel_AttributeType_DatetimeService',
            'sidus_eav_model.attribute_type.decimal' => 'getSidusEavModel_AttributeType_DecimalService',
            'sidus_eav_model.attribute_type.embed' => 'getSidusEavModel_AttributeType_EmbedService',
            'sidus_eav_model.attribute_type.hidden' => 'getSidusEavModel_AttributeType_HiddenService',
            'sidus_eav_model.attribute_type.html' => 'getSidusEavModel_AttributeType_HtmlService',
            'sidus_eav_model.attribute_type.integer' => 'getSidusEavModel_AttributeType_IntegerService',
            'sidus_eav_model.attribute_type.integer_identifier' => 'getSidusEavModel_AttributeType_IntegerIdentifierService',
            'sidus_eav_model.attribute_type.registry' => 'getSidusEavModel_AttributeType_RegistryService',
            'sidus_eav_model.attribute_type.string' => 'getSidusEavModel_AttributeType_StringService',
            'sidus_eav_model.attribute_type.string_identifier' => 'getSidusEavModel_AttributeType_StringIdentifierService',
            'sidus_eav_model.attribute_type.text' => 'getSidusEavModel_AttributeType_TextService',
            'sidus_eav_model.context.manager' => 'getSidusEavModel_Context_ManagerService',
            'sidus_eav_model.denormalizer.family' => 'getSidusEavModel_Denormalizer_FamilyService',
            'sidus_eav_model.doctrine.metadata.mapper' => 'getSidusEavModel_Doctrine_Metadata_MapperService',
            'sidus_eav_model.family.BaseAsset' => 'getSidusEavModel_Family_BaseAssetService',
            'sidus_eav_model.family.Document' => 'getSidusEavModel_Family_DocumentService',
            'sidus_eav_model.family.Image' => 'getSidusEavModel_Family_ImageService',
            'sidus_eav_model.family.Node' => 'getSidusEavModel_Family_NodeService',
            'sidus_eav_model.family.registry' => 'getSidusEavModel_Family_RegistryService',
            'sidus_eav_model.finder' => 'getSidusEavModel_FinderService',
            'sidus_eav_model.form.attribute_builder' => 'getSidusEavModel_Form_AttributeBuilderService',
            'sidus_eav_model.form.extension.choice' => 'getSidusEavModel_Form_Extension_ChoiceService',
            'sidus_eav_model.form.type.data' => 'getSidusEavModel_Form_Type_DataService',
            'sidus_eav_model.form.type.family_selector' => 'getSidusEavModel_Form_Type_FamilySelectorService',
            'sidus_eav_model.form.type.grouped_data' => 'getSidusEavModel_Form_Type_GroupedDataService',
            'sidus_eav_model.form.type.simple_data_selector' => 'getSidusEavModel_Form_Type_SimpleDataSelectorService',
            'sidus_eav_model.normalizer.attribute' => 'getSidusEavModel_Normalizer_AttributeService',
            'sidus_eav_model.normalizer.attribute.flat' => 'getSidusEavModel_Normalizer_Attribute_FlatService',
            'sidus_eav_model.normalizer.data' => 'getSidusEavModel_Normalizer_DataService',
            'sidus_eav_model.normalizer.data.flat' => 'getSidusEavModel_Normalizer_Data_FlatService',
            'sidus_eav_model.normalizer.family' => 'getSidusEavModel_Normalizer_FamilyService',
            'sidus_eav_model.normalizer.family.flat' => 'getSidusEavModel_Normalizer_Family_FlatService',
            'sidus_eav_model.serializer.entity_provider' => 'getSidusEavModel_Serializer_EntityProviderService',
            'sidus_eav_model.serializer.handler.by_reference' => 'getSidusEavModel_Serializer_Handler_ByReferenceService',
            'sidus_eav_model.serializer.handler.circular_reference' => 'getSidusEavModel_Serializer_Handler_CircularReferenceService',
            'sidus_eav_model.serializer.handler.max_depth' => 'getSidusEavModel_Serializer_Handler_MaxDepthService',
            'sidus_eav_model.twig.extension' => 'getSidusEavModel_Twig_ExtensionService',
            'sidus_eav_model.validator.sidus_data' => 'getSidusEavModel_Validator_SidusDataService',
            'sidus_eav_publishing.doctrine_orm.subscriber' => 'getSidusEavPublishing_DoctrineOrm_SubscriberService',
            'sidus_eav_variant.attribute_type.variants' => 'getSidusEavVariant_AttributeType_VariantsService',
            'sidus_eav_variant.form.type.axles' => 'getSidusEavVariant_Form_Type_AxlesService',
            'sidus_eav_variant.form.type.variant' => 'getSidusEavVariant_Form_Type_VariantService',
            'sidus_eav_variant.form.type.variant_collection' => 'getSidusEavVariant_Form_Type_VariantCollectionService',
            'sidus_eav_variant.form.type.variant_family_selector' => 'getSidusEavVariant_Form_Type_VariantFamilySelectorService',
            'sidus_eav_variant.validator.unique_variant' => 'getSidusEavVariant_Validator_UniqueVariantService',
            'sidus_file_upload.form.resource_type' => 'getSidusFileUpload_Form_ResourceTypeService',
            'sidus_file_upload.registry.filesystem' => 'getSidusFileUpload_Registry_FilesystemService',
            'sidus_file_upload.resource.manager' => 'getSidusFileUpload_Resource_ManagerService',
            'sidus_file_upload.resource.subscriber' => 'getSidusFileUpload_Resource_SubscriberService',
            'sidus_file_upload.resource.uploader' => 'getSidusFileUpload_Resource_UploaderService',
            'sidus_file_upload.twig.upload_extension' => 'getSidusFileUpload_Twig_UploadExtensionService',
            'sidus_filter.filter.factory' => 'getSidusFilter_Filter_FactoryService',
            'sidus_filter.filter.type.choice' => 'getSidusFilter_Filter_Type_ChoiceService',
            'sidus_filter.filter.type.date_range' => 'getSidusFilter_Filter_Type_DateRangeService',
            'sidus_filter.filter.type.text' => 'getSidusFilter_Filter_Type_TextService',
            'sidus_filter.filter_type_configuration.handler' => 'getSidusFilter_FilterTypeConfiguration_HandlerService',
            'sidus_filter.form.type.date_range' => 'getSidusFilter_Form_Type_DateRangeService',
            'sidus_filter.form.type.order_button' => 'getSidusFilter_Form_Type_OrderButtonService',
            'sidus_filter.form.type.sort_config' => 'getSidusFilter_Form_Type_SortConfigService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.stfalcon_tinymce' => 'getTwig_Extension_StfalconTinymceService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'white_october_pagerfanta.view_factory' => 'getWhiteOctoberPagerfanta_ViewFactoryService',
        );
        $this->privates = array(
            'annotations.reader' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assetic.asset_factory' => true,
            'cache.annotations' => true,
            'cache.property_access' => true,
            'cache.serializer' => true,
            'cache.validator' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'debug.file_link_formatter' => true,
            'eavmanager_security.family.voter' => true,
            'eavmanager_user.normalizer.user' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.form' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.validator' => true,
            'monolog.processor.psr_log_message' => true,
            'oneup_flysystem.resources_adapter' => true,
            'oneup_uploader.error_handler.blueimp' => true,
            'resolve_controller_name_subscriber' => true,
            'router.request_context' => true,
            'security.access.authenticated_voter' => true,
            'security.access.decision_manager' => true,
            'security.access.expression_voter' => true,
            'security.access.role_hierarchy_voter' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.provider.dao.main' => true,
            'security.authentication.trust_resolver' => true,
            'security.logout_url_generator' => true,
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => true,
            'security.user_value_resolver' => true,
            'serializer.mapping.cache_class_metadata_factory' => true,
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => true,
            'session.storage.metadata_bag' => true,
            'sidus_eav_model.normalizer.attribute' => true,
            'sidus_eav_model.normalizer.data' => true,
            'sidus_eav_model.normalizer.family' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.locator' => true,
        );
        $this->aliases = array(
            'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface' => 'security.authorization_checker',
            'Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface' => 'security.password_encoder',
            'cache.app_clearer' => 'cache.default_clearer',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'translator' => 'translator.default',
        );
    }

    /*
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    /*
     * {@inheritdoc}
     */
    public function isCompiled()
    {
        return true;
    }

    /*
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since version 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /*
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), false);
    }

    /*
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = ${($_ = isset($this->services['templating.loader']) ? $this->services['templating.loader'] : $this->get('templating.loader')) && false ?: '_'};

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, array('config' => new \Symfony\Bundle\AsseticBundle\Factory\Loader\ConfigurationLoader(), 'twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.assetic']) ? $this->services['monolog.logger.assetic'] : $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), false)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\ConfigurationResource(array('map1' => array(0 => array(0 => ($this->targetDirs[2].'/../web/assets/jquery/jquery.min.map')), 1 => array(), 2 => array('output' => 'js/jquery.min.map')), 'src1' => array(0 => array(0 => ($this->targetDirs[2].'/../web/assets/jquery/jquery.js')), 1 => array(), 2 => array('output' => 'js/jquery.js')))), 'config');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CleverAgeEAVManagerLayoutBundle', ($this->targetDirs[2].'/Resources/CleverAgeEAVManagerLayoutBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CleverAgeEAVManagerLayoutBundle', ($this->targetDirs[3].'/vendor/cleverage/eav-manager/LayoutBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[2].'/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /*
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /*
     * Gets the 'assetic.filter.uglifycss' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\UglifyCssFilter A Assetic\Filter\UglifyCssFilter instance
     */
    protected function getAssetic_Filter_UglifycssService()
    {
        $this->services['assetic.filter.uglifycss'] = $instance = new \Assetic\Filter\UglifyCssFilter('/usr/local/bin/uglifycss', '/usr/bin/nodejs');

        $instance->setTimeout(NULL);
        $instance->setNodePaths(array());
        $instance->setExpandVars(false);
        $instance->setUglyComments(false);
        $instance->setCuteComments(false);

        return $instance;
    }

    /*
     * Gets the 'assetic.filter.uglifyjs2' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\UglifyJs2Filter A Assetic\Filter\UglifyJs2Filter instance
     */
    protected function getAssetic_Filter_Uglifyjs2Service()
    {
        $this->services['assetic.filter.uglifyjs2'] = $instance = new \Assetic\Filter\UglifyJs2Filter('/usr/local/bin/uglifyjs', '/usr/bin/nodejs');

        $instance->setTimeout(NULL);
        $instance->setNodePaths(array());
        $instance->setCompress(false);
        $instance->setBeautify(false);
        $instance->setMangle(false);
        $instance->setScrewIe8(false);
        $instance->setComments(false);
        $instance->setWrap(false);
        $instance->setDefines(array());

        return $instance;
    }

    /*
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite', 'uglifyjs2' => 'assetic.filter.uglifyjs2', 'uglifycss' => 'assetic.filter.uglifycss'));
    }

    /*
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->get('assets.context')) && false ?: '_'}), array());
    }

    /*
     * Gets the 'cache.app' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter A Symfony\Component\Cache\Adapter\FilesystemAdapter instance
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('mMZvUNJ+kZ', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }

        return $instance;
    }

    /*
     * Gets the 'cache.default_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer A Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer instance
     */
    protected function getCache_DefaultClearerService()
    {
        return $this->services['cache.default_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.serializer' => ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}, 'cache.property_access' => ${($_ = isset($this->services['cache.property_access']) ? $this->services['cache.property_access'] : $this->getCache_PropertyAccessService()) && false ?: '_'}));
    }

    /*
     * Gets the 'cache.global_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer A Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer instance
     */
    protected function getCache_GlobalClearerService()
    {
        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.serializer' => ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}, 'cache.property_access' => ${($_ = isset($this->services['cache.property_access']) ? $this->services['cache.property_access'] : $this->getCache_PropertyAccessService()) && false ?: '_'}));
    }

    /*
     * Gets the 'cache.system' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('ZNsqab0jsn', 0, 'FvFUuaWroj3O8kvsz0e55V', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => ${($_ = isset($this->services['cache.default_clearer']) ? $this->services['cache.default_clearer'] : $this->get('cache.default_clearer')) && false ?: '_'}));
    }

    /*
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance
     */
    protected function getCacheWarmerService()
    {
        $a = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};
        $b = ${($_ = isset($this->services['templating.filename_parser']) ? $this->services['templating.filename_parser'] : $this->get('templating.filename_parser')) && false ?: '_'};

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}, (__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}), 5 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, (__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}), 6 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'})), (__DIR__.'/serialization.php'), ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}), 7 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(new \Symfony\Component\DependencyInjection\ServiceLocator(array('twig' => function () {
            $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
        })), $c, array()), 8 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this, new \Symfony\Bundle\TwigBundle\TemplateIterator($a, $this->targetDirs[2], array())), 9 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}), 10 => ${($_ = isset($this->services['exercise_html_purifier.cache_warmer.serializer']) ? $this->services['exercise_html_purifier.cache_warmer.serializer'] : $this->get('exercise_html_purifier.cache_warmer.serializer')) && false ?: '_'}));
    }

    /*
     * Gets the 'circle.curl' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Circle\RestClientBundle\Services\Curl A Circle\RestClientBundle\Services\Curl instance
     */
    protected function getCircle_CurlService()
    {
        return $this->services['circle.curl'] = new \Circle\RestClientBundle\Services\Curl(${($_ = isset($this->services['circle.curl.options.handler']) ? $this->services['circle.curl.options.handler'] : $this->get('circle.curl.options.handler')) && false ?: '_'});
    }

    /*
     * Gets the 'circle.curl.options.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Circle\RestClientBundle\Services\CurlOptionsHandler A Circle\RestClientBundle\Services\CurlOptionsHandler instance
     */
    protected function getCircle_Curl_Options_HandlerService()
    {
        return $this->services['circle.curl.options.handler'] = new \Circle\RestClientBundle\Services\CurlOptionsHandler(array(10023 => array(0 => 'Content-Type: text/plain'), 68 => 25, 13 => 25, 78 => 25, 27 => true, 32 => 3, 52 => true, 64 => true));
    }

    /*
     * Gets the 'circle.restclient' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Circle\RestClientBundle\Services\RestClient A Circle\RestClientBundle\Services\RestClient instance
     */
    protected function getCircle_RestclientService()
    {
        return $this->services['circle.restclient'] = new \Circle\RestClientBundle\Services\RestClient(${($_ = isset($this->services['circle.curl']) ? $this->services['circle.curl'] : $this->get('circle.curl')) && false ?: '_'});
    }

    /*
     * Gets the 'cleverage_process.manager.process' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\ProcessBundle\Manager\ProcessManager A CleverAge\ProcessBundle\Manager\ProcessManager instance
     */
    protected function getCleverageProcess_Manager_ProcessService()
    {
        return $this->services['cleverage_process.manager.process'] = new \CleverAge\ProcessBundle\Manager\ProcessManager($this, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger')) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}, ${($_ = isset($this->services['cleverage_process.registry.process_configuration']) ? $this->services['cleverage_process.registry.process_configuration'] : $this->get('cleverage_process.registry.process_configuration')) && false ?: '_'});
    }

    /*
     * Gets the 'cleverage_process.registry.process_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\ProcessBundle\Registry\ProcessConfigurationRegistry A CleverAge\ProcessBundle\Registry\ProcessConfigurationRegistry instance
     */
    protected function getCleverageProcess_Registry_ProcessConfigurationService()
    {
        return $this->services['cleverage_process.registry.process_configuration'] = new \CleverAge\ProcessBundle\Registry\ProcessConfigurationRegistry(array());
    }

    /*
     * Gets the 'cleverage_process.registry.transformer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\ProcessBundle\Registry\TransformerRegistry A CleverAge\ProcessBundle\Registry\TransformerRegistry instance
     */
    protected function getCleverageProcess_Registry_TransformerService()
    {
        $this->services['cleverage_process.registry.transformer'] = $instance = new \CleverAge\ProcessBundle\Registry\TransformerRegistry();

        $instance->addTransformer(${($_ = isset($this->services['cleverage_process.transformer.mapping']) ? $this->services['cleverage_process.transformer.mapping'] : $this->get('cleverage_process.transformer.mapping')) && false ?: '_'});
        $instance->addTransformer(${($_ = isset($this->services['cleverage_process.transformer.slugify']) ? $this->services['cleverage_process.transformer.slugify'] : $this->get('cleverage_process.transformer.slugify')) && false ?: '_'});
        $instance->addTransformer(${($_ = isset($this->services['cleverage_process.transformer.explode']) ? $this->services['cleverage_process.transformer.explode'] : $this->get('cleverage_process.transformer.explode')) && false ?: '_'});
        $instance->addTransformer(${($_ = isset($this->services['cleverage_process.transformer.trim']) ? $this->services['cleverage_process.transformer.trim'] : $this->get('cleverage_process.transformer.trim')) && false ?: '_'});
        $instance->addTransformer(${($_ = isset($this->services['cleverage_process.transformer.array_map']) ? $this->services['cleverage_process.transformer.array_map'] : $this->get('cleverage_process.transformer.array_map')) && false ?: '_'});
        $instance->addTransformer(${($_ = isset($this->services['cleverage_process.transformer.array_first']) ? $this->services['cleverage_process.transformer.array_first'] : $this->get('cleverage_process.transformer.array_first')) && false ?: '_'});
        $instance->addTransformer(${($_ = isset($this->services['cleverage_process.transformer.property_accessor']) ? $this->services['cleverage_process.transformer.property_accessor'] : $this->get('cleverage_process.transformer.property_accessor')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'cleverage_process.task.constant_iterable_output' service.
     *
     * @return \CleverAge\ProcessBundle\Task\ConstantIterableOutputTask A CleverAge\ProcessBundle\Task\ConstantIterableOutputTask instance
     */
    protected function getCleverageProcess_Task_ConstantIterableOutputService()
    {
        return new \CleverAge\ProcessBundle\Task\ConstantIterableOutputTask();
    }

    /*
     * Gets the 'cleverage_process.task.constant_output' service.
     *
     * @return \CleverAge\ProcessBundle\Task\ConstantOutputTask A CleverAge\ProcessBundle\Task\ConstantOutputTask instance
     */
    protected function getCleverageProcess_Task_ConstantOutputService()
    {
        return new \CleverAge\ProcessBundle\Task\ConstantOutputTask();
    }

    /*
     * Gets the 'cleverage_process.task.csv_reader' service.
     *
     * @return \CleverAge\ProcessBundle\Task\CsvReaderTask A CleverAge\ProcessBundle\Task\CsvReaderTask instance
     */
    protected function getCleverageProcess_Task_CsvReaderService()
    {
        return new \CleverAge\ProcessBundle\Task\CsvReaderTask();
    }

    /*
     * Gets the 'cleverage_process.task.csv_writer' service.
     *
     * @return \CleverAge\ProcessBundle\Task\CsvWriterTask A CleverAge\ProcessBundle\Task\CsvWriterTask instance
     */
    protected function getCleverageProcess_Task_CsvWriterService()
    {
        return new \CleverAge\ProcessBundle\Task\CsvWriterTask();
    }

    /*
     * Gets the 'cleverage_process.task.database_reader' service.
     *
     * @return \CleverAge\ProcessBundle\Task\DatabaseReaderTask A CleverAge\ProcessBundle\Task\DatabaseReaderTask instance
     */
    protected function getCleverageProcess_Task_DatabaseReaderService()
    {
        return new \CleverAge\ProcessBundle\Task\DatabaseReaderTask(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /*
     * Gets the 'cleverage_process.task.debug' service.
     *
     * @return \CleverAge\ProcessBundle\Task\DebugTask A CleverAge\ProcessBundle\Task\DebugTask instance
     */
    protected function getCleverageProcess_Task_DebugService()
    {
        return new \CleverAge\ProcessBundle\Task\DebugTask();
    }

    /*
     * Gets the 'cleverage_process.task.denormalizer' service.
     *
     * @return \CleverAge\ProcessBundle\Task\DenormalizerTask A CleverAge\ProcessBundle\Task\DenormalizerTask instance
     */
    protected function getCleverageProcess_Task_DenormalizerService()
    {
        return new \CleverAge\ProcessBundle\Task\DenormalizerTask(${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->get('serializer')) && false ?: '_'});
    }

    /*
     * Gets the 'cleverage_process.task.doctrine_reader' service.
     *
     * @return \CleverAge\ProcessBundle\Task\DoctrineReaderTask A CleverAge\ProcessBundle\Task\DoctrineReaderTask instance
     */
    protected function getCleverageProcess_Task_DoctrineReaderService()
    {
        return new \CleverAge\ProcessBundle\Task\DoctrineReaderTask(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /*
     * Gets the 'cleverage_process.task.doctrine_writer' service.
     *
     * @return \CleverAge\ProcessBundle\Task\DoctrineWriterTask A CleverAge\ProcessBundle\Task\DoctrineWriterTask instance
     */
    protected function getCleverageProcess_Task_DoctrineWriterService()
    {
        return new \CleverAge\ProcessBundle\Task\DoctrineWriterTask(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /*
     * Gets the 'cleverage_process.task.dummy' service.
     *
     * @return \CleverAge\ProcessBundle\Task\DummyTask A CleverAge\ProcessBundle\Task\DummyTask instance
     */
    protected function getCleverageProcess_Task_DummyService()
    {
        return new \CleverAge\ProcessBundle\Task\DummyTask();
    }

    /*
     * Gets the 'cleverage_process.task.normalizer' service.
     *
     * @return \CleverAge\ProcessBundle\Task\NormalizerTask A CleverAge\ProcessBundle\Task\NormalizerTask instance
     */
    protected function getCleverageProcess_Task_NormalizerService()
    {
        return new \CleverAge\ProcessBundle\Task\NormalizerTask(${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->get('serializer')) && false ?: '_'});
    }

    /*
     * Gets the 'cleverage_process.task.property_setter' service.
     *
     * @return \CleverAge\ProcessBundle\Task\PropertySetterTask A CleverAge\ProcessBundle\Task\PropertySetterTask instance
     */
    protected function getCleverageProcess_Task_PropertySetterService()
    {
        return new \CleverAge\ProcessBundle\Task\PropertySetterTask(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /*
     * Gets the 'cleverage_process.task.stat_counter' service.
     *
     * @return \CleverAge\ProcessBundle\Task\StatCounterTask A CleverAge\ProcessBundle\Task\StatCounterTask instance
     */
    protected function getCleverageProcess_Task_StatCounterService()
    {
        return new \CleverAge\ProcessBundle\Task\StatCounterTask();
    }

    /*
     * Gets the 'cleverage_process.task.transformer' service.
     *
     * @return \CleverAge\ProcessBundle\Task\TransformerTask A CleverAge\ProcessBundle\Task\TransformerTask instance
     */
    protected function getCleverageProcess_Task_TransformerService()
    {
        return new \CleverAge\ProcessBundle\Task\TransformerTask(${($_ = isset($this->services['cleverage_process.registry.transformer']) ? $this->services['cleverage_process.registry.transformer'] : $this->get('cleverage_process.registry.transformer')) && false ?: '_'}, 'mapping');
    }

    /*
     * Gets the 'cleverage_process.task.validator' service.
     *
     * @return \CleverAge\ProcessBundle\Task\ValidatorTask A CleverAge\ProcessBundle\Task\ValidatorTask instance
     */
    protected function getCleverageProcess_Task_ValidatorService()
    {
        return new \CleverAge\ProcessBundle\Task\ValidatorTask(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /*
     * Gets the 'cleverage_process.transformer.array_first' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\ProcessBundle\Transformer\ArrayFirstTransformer A CleverAge\ProcessBundle\Transformer\ArrayFirstTransformer instance
     */
    protected function getCleverageProcess_Transformer_ArrayFirstService()
    {
        return $this->services['cleverage_process.transformer.array_first'] = new \CleverAge\ProcessBundle\Transformer\ArrayFirstTransformer();
    }

    /*
     * Gets the 'cleverage_process.transformer.array_map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\ProcessBundle\Transformer\ArrayMapTransformer A CleverAge\ProcessBundle\Transformer\ArrayMapTransformer instance
     */
    protected function getCleverageProcess_Transformer_ArrayMapService()
    {
        return $this->services['cleverage_process.transformer.array_map'] = new \CleverAge\ProcessBundle\Transformer\ArrayMapTransformer();
    }

    /*
     * Gets the 'cleverage_process.transformer.explode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\ProcessBundle\Transformer\ExplodeTransformer A CleverAge\ProcessBundle\Transformer\ExplodeTransformer instance
     */
    protected function getCleverageProcess_Transformer_ExplodeService()
    {
        return $this->services['cleverage_process.transformer.explode'] = new \CleverAge\ProcessBundle\Transformer\ExplodeTransformer();
    }

    /*
     * Gets the 'cleverage_process.transformer.mapping' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\ProcessBundle\Transformer\MappingTransformer A CleverAge\ProcessBundle\Transformer\MappingTransformer instance
     */
    protected function getCleverageProcess_Transformer_MappingService()
    {
        return $this->services['cleverage_process.transformer.mapping'] = new \CleverAge\ProcessBundle\Transformer\MappingTransformer(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /*
     * Gets the 'cleverage_process.transformer.property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\ProcessBundle\Transformer\PropertyAccessorTransformer A CleverAge\ProcessBundle\Transformer\PropertyAccessorTransformer instance
     */
    protected function getCleverageProcess_Transformer_PropertyAccessorService()
    {
        return $this->services['cleverage_process.transformer.property_accessor'] = new \CleverAge\ProcessBundle\Transformer\PropertyAccessorTransformer(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /*
     * Gets the 'cleverage_process.transformer.slugify' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\ProcessBundle\Transformer\SlugifyTransformer A CleverAge\ProcessBundle\Transformer\SlugifyTransformer instance
     */
    protected function getCleverageProcess_Transformer_SlugifyService()
    {
        return $this->services['cleverage_process.transformer.slugify'] = new \CleverAge\ProcessBundle\Transformer\SlugifyTransformer();
    }

    /*
     * Gets the 'cleverage_process.transformer.trim' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\ProcessBundle\Transformer\TrimTransformer A CleverAge\ProcessBundle\Transformer\TrimTransformer instance
     */
    protected function getCleverageProcess_Transformer_TrimService()
    {
        return $this->services['cleverage_process.transformer.trim'] = new \CleverAge\ProcessBundle\Transformer\TrimTransformer();
    }

    /*
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory('');
    }

    /*
     * Gets the 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand A Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand instance
     */
    protected function getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService()
    {
        return $this->services['console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand'] = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, array(0 => 'CleverAge\\EAVManager\\UserBundle\\Entity\\User'));
    }

    /*
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, -1, 0, false, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, false);
    }

    /*
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /*
     * Gets the 'deprecated.form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \stdClass A stdClass instance
     *
     * @deprecated The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_RegistryService()
    {
        @trigger_error('The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'}, 5 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'}, 6 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'}, 7 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'deprecated.form.registry.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \stdClass A stdClass instance
     *
     * @deprecated The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_Registry_CsrfService()
    {
        @trigger_error('The service "deprecated.form.registry.csrf" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry.csrf'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->getForm_TypeExtension_CsrfService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /*
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array('sidus_family' => array('class' => 'Sidus\\EAVModelBundle\\Doctrine\\Types\\FamilyType', 'commented' => true)));
    }

    /*
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $a->addEventSubscriber(${($_ = isset($this->services['eavmanager_asset.doctrine.subscriber']) ? $this->services['eavmanager_asset.doctrine.subscriber'] : $this->get('eavmanager_asset.doctrine.subscriber')) && false ?: '_'});
        $a->addEventSubscriber(${($_ = isset($this->services['sidus_file_upload.resource.subscriber']) ? $this->services['sidus_file_upload.resource.subscriber'] : $this->get('sidus_file_upload.resource.subscriber')) && false ?: '_'});
        $a->addEventSubscriber(${($_ = isset($this->services['eavmanager_user.doctrine.event.authorable.subscriber']) ? $this->services['eavmanager_user.doctrine.event.authorable.subscriber'] : $this->get('eavmanager_user.doctrine.event.authorable.subscriber')) && false ?: '_'});
        $a->addEventSubscriber(${($_ = isset($this->services['sidus_eav_publishing.doctrine_orm.subscriber']) ? $this->services['sidus_eav_publishing.doctrine_orm.subscriber'] : $this->get('sidus_eav_publishing.doctrine_orm.subscriber')) && false ?: '_'});
        $a->addEventListener(array(0 => 'sidus_family_configuration'), ${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'});
        $a->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['sidus_eav_model.doctrine.metadata.mapper']) ? $this->services['sidus_eav_model.doctrine.metadata.mapper'] : $this->get('sidus_eav_model.doctrine.metadata.mapper')) && false ?: '_'});
        $a->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['doctrine.orm.default_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] : $this->get('doctrine.orm.default_listeners.attach_entity_listeners')) && false ?: '_'});

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->get('doctrine.dbal.connection_factory')) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'myeml_cdm', 'user' => 'myeml_cdm', 'password' => 'myeml_cdm', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), new \Doctrine\DBAL\Configuration(), $a, array());
    }

    /*
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver A Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver instance
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /*
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'};

        $b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'/vendor/sidus/eav-model-bundle/Entity'), 1 => ($this->targetDirs[3].'/vendor/sidus/publishing-bundle/Entity'), 2 => ($this->targetDirs[3].'/vendor/sidus/file-upload-bundle/Entity'), 3 => ($this->targetDirs[3].'/vendor/sidus/admin-bundle/Entity'), 4 => ($this->targetDirs[3].'/vendor/cleverage/process-bundle/Entity'), 5 => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/EAVModelBundle/Entity'), 6 => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/AdminBundle/Entity'), 7 => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/UserBundle/Entity'), 8 => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/SecurityBundle/Entity'), 9 => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/AssetBundle/Entity'), 10 => ($this->targetDirs[3].'/src/MyEML/EAVModelBundle/Entity')));

        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver($b, 'Sidus\\EAVModelBundle\\Entity');
        $c->addDriver($b, 'Sidus\\PublishingBundle\\Entity');
        $c->addDriver($b, 'Sidus\\FileUploadBundle\\Entity');
        $c->addDriver($b, 'Sidus\\AdminBundle\\Entity');
        $c->addDriver($b, 'CleverAge\\ProcessBundle\\Entity');
        $c->addDriver($b, 'CleverAge\\EAVManager\\EAVModelBundle\\Entity');
        $c->addDriver($b, 'CleverAge\\EAVManager\\AdminBundle\\Entity');
        $c->addDriver($b, 'CleverAge\\EAVManager\\UserBundle\\Entity');
        $c->addDriver($b, 'CleverAge\\EAVManager\\SecurityBundle\\Entity');
        $c->addDriver($b, 'CleverAge\\EAVManager\\AssetBundle\\Entity');
        $c->addDriver($b, 'MyEML\\EAVModelBundle\\Entity');

        $d = new \Doctrine\ORM\Configuration();
        $d->setEntityNamespaces(array('SidusEAVModelBundle' => 'Sidus\\EAVModelBundle\\Entity', 'SidusPublishingBundle' => 'Sidus\\PublishingBundle\\Entity', 'SidusFileUploadBundle' => 'Sidus\\FileUploadBundle\\Entity', 'SidusAdminBundle' => 'Sidus\\AdminBundle\\Entity', 'CleverAgeProcessBundle' => 'CleverAge\\ProcessBundle\\Entity', 'CleverAgeEAVManagerEAVModelBundle' => 'CleverAge\\EAVManager\\EAVModelBundle\\Entity', 'CleverAgeEAVManagerAdminBundle' => 'CleverAge\\EAVManager\\AdminBundle\\Entity', 'CleverAgeEAVManagerUserBundle' => 'CleverAge\\EAVManager\\UserBundle\\Entity', 'CleverAgeEAVManagerSecurityBundle' => 'CleverAge\\EAVManager\\SecurityBundle\\Entity', 'CleverAgeEAVManagerAssetBundle' => 'CleverAge\\EAVManager\\AssetBundle\\Entity', 'MyEMLEAVModelBundle' => 'MyEML\\EAVModelBundle\\Entity'));
        $d->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache')) && false ?: '_'});
        $d->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_query_cache')) && false ?: '_'});
        $d->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_result_cache')) && false ?: '_'});
        $d->setMetadataDriverImpl($c);
        $d->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $d->setProxyNamespace('Proxies');
        $d->setAutoGenerateProxyClasses(false);
        $d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $d->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $d->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $d->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : $this->get('doctrine.orm.default_entity_listener_resolver')) && false ?: '_'});

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->get('doctrine.dbal.default_connection')) && false ?: '_'}, $d);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : $this->get('doctrine.orm.default_manager_configurator')) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /*
     * Gets the 'doctrine.orm.default_entity_manager.property_info_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor A Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor instance
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}->getMetadataFactory());
    }

    /*
     * Gets the 'doctrine.orm.default_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /*
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /*
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /*
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_c36b560b79f7239b8e4bc94a9c65cbff30c700ae3c9dbd726203f5927ec2a0b9');

        return $instance;
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_c36b560b79f7239b8e4bc94a9c65cbff30c700ae3c9dbd726203f5927ec2a0b9');

        return $instance;
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_c36b560b79f7239b8e4bc94a9c65cbff30c700ae3c9dbd726203f5927ec2a0b9');

        return $instance;
    }

    /*
     * Gets the 'eavmanager.form.extension.data_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\EAVModelBundle\Form\Extension\DataSelectorTypeExtension A CleverAge\EAVManager\EAVModelBundle\Form\Extension\DataSelectorTypeExtension instance
     */
    protected function getEavmanager_Form_Extension_DataSelectorService()
    {
        return $this->services['eavmanager.form.extension.data_selector'] = new \CleverAge\EAVManager\EAVModelBundle\Form\Extension\DataSelectorTypeExtension('Sidus\\EAVModelBundle\\Form\\Type\\SimpleDataSelectorType');
    }

    /*
     * Gets the 'eavmanager.twig.context.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\EAVModelBundle\Twig\EAVContextExtension A CleverAge\EAVManager\EAVModelBundle\Twig\EAVContextExtension instance
     */
    protected function getEavmanager_Twig_Context_ExtensionService()
    {
        return $this->services['eavmanager.twig.context.extension'] = new \CleverAge\EAVManager\EAVModelBundle\Twig\EAVContextExtension(${($_ = isset($this->services['sidus_eav_model.context.manager']) ? $this->services['sidus_eav_model.context.manager'] : $this->get('sidus_eav_model.context.manager')) && false ?: '_'});
    }

    /*
     * Gets the 'eavmanager_admin.form.image.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\AdminBundle\Form\Type\ImageType A CleverAge\EAVManager\AdminBundle\Form\Type\ImageType instance
     */
    protected function getEavmanagerAdmin_Form_Image_TypeService()
    {
        return $this->services['eavmanager_admin.form.image.type'] = new \CleverAge\EAVManager\AdminBundle\Form\Type\ImageType();
    }

    /*
     * Gets the 'eavmanager_admin.form.link.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\AdminBundle\Form\Type\AdminLink A CleverAge\EAVManager\AdminBundle\Form\Type\AdminLink instance
     */
    protected function getEavmanagerAdmin_Form_Link_TypeService()
    {
        return $this->services['eavmanager_admin.form.link.type'] = new \CleverAge\EAVManager\AdminBundle\Form\Type\AdminLink(${($_ = isset($this->services['sidus_admin.routing.admin_router']) ? $this->services['sidus_admin.routing.admin_router'] : $this->get('sidus_admin.routing.admin_router')) && false ?: '_'});
    }

    /*
     * Gets the 'eavmanager_admin.form.variant_family_selector.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\AdminBundle\Form\Type\VariantFamilySelector A CleverAge\EAVManager\AdminBundle\Form\Type\VariantFamilySelector instance
     */
    protected function getEavmanagerAdmin_Form_VariantFamilySelector_TypeService()
    {
        return $this->services['eavmanager_admin.form.variant_family_selector.type'] = new \CleverAge\EAVManager\AdminBundle\Form\Type\VariantFamilySelector();
    }

    /*
     * Gets the 'eavmanager_admin.listener.routing.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\AdminBundle\Listener\Routing\CacheListener A CleverAge\EAVManager\AdminBundle\Listener\Routing\CacheListener instance
     */
    protected function getEavmanagerAdmin_Listener_Routing_CacheService()
    {
        return $this->services['eavmanager_admin.listener.routing.cache'] = new \CleverAge\EAVManager\AdminBundle\Listener\Routing\CacheListener(${($_ = isset($this->services['sidus_admin.configuration.admin.handler']) ? $this->services['sidus_admin.configuration.admin.handler'] : $this->get('sidus_admin.configuration.admin.handler')) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger')) && false ?: '_'});
    }

    /*
     * Gets the 'eavmanager_asset.doctrine.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\AssetBundle\Event\AssetSubscriber A CleverAge\EAVManager\AssetBundle\Event\AssetSubscriber instance
     */
    protected function getEavmanagerAsset_Doctrine_SubscriberService()
    {
        return $this->services['eavmanager_asset.doctrine.subscriber'] = new \CleverAge\EAVManager\AssetBundle\Event\AssetSubscriber('MyEML\\EAVModelBundle\\Entity\\Data');
    }

    /*
     * Gets the 'eavmanager_asset.form.media_browser.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\AssetBundle\Form\Type\MediaBrowserType A CleverAge\EAVManager\AssetBundle\Form\Type\MediaBrowserType instance
     */
    protected function getEavmanagerAsset_Form_MediaBrowser_TypeService()
    {
        return $this->services['eavmanager_asset.form.media_browser.type'] = new \CleverAge\EAVManager\AssetBundle\Form\Type\MediaBrowserType();
    }

    /*
     * Gets the 'eavmanager_asset.twig.media.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\AssetBundle\Twig\MediaExtension A CleverAge\EAVManager\AssetBundle\Twig\MediaExtension instance
     */
    protected function getEavmanagerAsset_Twig_Media_ExtensionService()
    {
        return $this->services['eavmanager_asset.twig.media.extension'] = new \CleverAge\EAVManager\AssetBundle\Twig\MediaExtension(${($_ = isset($this->services['liip_imagine.filter.configuration']) ? $this->services['liip_imagine.filter.configuration'] : $this->get('liip_imagine.filter.configuration')) && false ?: '_'});
    }

    /*
     * Gets the 'eavmanager_eav_model.attribute_type.document' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\RelationAttributeType A Sidus\EAVModelBundle\Model\RelationAttributeType instance
     */
    protected function getEavmanagerEavModel_AttributeType_DocumentService()
    {
        return $this->services['eavmanager_eav_model.attribute_type.document'] = new \Sidus\EAVModelBundle\Model\RelationAttributeType('document', 'documentValue', 'Sidus\\FileUploadBundle\\Form\\Type\\ResourceType', array('resource_type' => 'document'));
    }

    /*
     * Gets the 'eavmanager_eav_model.attribute_type.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\RelationAttributeType A Sidus\EAVModelBundle\Model\RelationAttributeType instance
     */
    protected function getEavmanagerEavModel_AttributeType_ImageService()
    {
        return $this->services['eavmanager_eav_model.attribute_type.image'] = new \Sidus\EAVModelBundle\Model\RelationAttributeType('image', 'imageValue', 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\ImageType', array('resource_type' => 'image'));
    }

    /*
     * Gets the 'eavmanager_eav_model.attribute_type.media_browser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\EAVRelationAttributeType A Sidus\EAVModelBundle\Model\EAVRelationAttributeType instance
     */
    protected function getEavmanagerEavModel_AttributeType_MediaBrowserService()
    {
        return $this->services['eavmanager_eav_model.attribute_type.media_browser'] = new \Sidus\EAVModelBundle\Model\EAVRelationAttributeType('media_browser', 'dataValue', 'CleverAge\\EAVManager\\AssetBundle\\Form\\Type\\MediaBrowserType');
    }

    /*
     * Gets the 'eavmanager_security.form.family_permission.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\SecurityBundle\Form\Type\FamilyPermissionType A CleverAge\EAVManager\SecurityBundle\Form\Type\FamilyPermissionType instance
     */
    protected function getEavmanagerSecurity_Form_FamilyPermission_TypeService()
    {
        return $this->services['eavmanager_security.form.family_permission.type'] = new \CleverAge\EAVManager\SecurityBundle\Form\Type\FamilyPermissionType();
    }

    /*
     * Gets the 'eavmanager_security.form.role_hierarchy.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\SecurityBundle\Form\Type\RoleHierarchyType A CleverAge\EAVManager\SecurityBundle\Form\Type\RoleHierarchyType instance
     */
    protected function getEavmanagerSecurity_Form_RoleHierarchy_TypeService()
    {
        return $this->services['eavmanager_security.form.role_hierarchy.type'] = new \CleverAge\EAVManager\SecurityBundle\Form\Type\RoleHierarchyType(${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->get('security.role_hierarchy')) && false ?: '_'});
    }

    /*
     * Gets the 'eavmanager_user.config.holder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\UserBundle\Configuration\Configuration A CleverAge\EAVManager\UserBundle\Configuration\Configuration instance
     */
    protected function getEavmanagerUser_Config_HolderService()
    {
        return $this->services['eavmanager_user.config.holder'] = new \CleverAge\EAVManager\UserBundle\Configuration\Configuration(array('mailer' => array('company' => 'Client Company', 'from_email' => 'no-reply@client-company.com', 'from_name' => 'Client'), 'home_route' => 'eavmanager_layout.dashboard'));
    }

    /*
     * Gets the 'eavmanager_user.doctrine.event.authorable.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\UserBundle\Event\AuthorableSubscriber A CleverAge\EAVManager\UserBundle\Event\AuthorableSubscriber instance
     */
    protected function getEavmanagerUser_Doctrine_Event_Authorable_SubscriberService()
    {
        return $this->services['eavmanager_user.doctrine.event.authorable.subscriber'] = new \CleverAge\EAVManager\UserBundle\Event\AuthorableSubscriber(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'});
    }

    /*
     * Gets the 'eavmanager_user.form.group.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\UserBundle\Form\Type\GroupType A CleverAge\EAVManager\UserBundle\Form\Type\GroupType instance
     */
    protected function getEavmanagerUser_Form_Group_TypeService()
    {
        return $this->services['eavmanager_user.form.group.type'] = new \CleverAge\EAVManager\UserBundle\Form\Type\GroupType();
    }

    /*
     * Gets the 'eavmanager_user.form.user.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\UserBundle\Form\Type\UserType A CleverAge\EAVManager\UserBundle\Form\Type\UserType instance
     */
    protected function getEavmanagerUser_Form_User_TypeService()
    {
        return $this->services['eavmanager_user.form.user.type'] = new \CleverAge\EAVManager\UserBundle\Form\Type\UserType(${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker')) && false ?: '_'});
    }

    /*
     * Gets the 'eavmanager_user.form.user_profile.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\UserBundle\Form\Type\UserProfileType A CleverAge\EAVManager\UserBundle\Form\Type\UserProfileType instance
     */
    protected function getEavmanagerUser_Form_UserProfile_TypeService()
    {
        return $this->services['eavmanager_user.form.user_profile.type'] = new \CleverAge\EAVManager\UserBundle\Form\Type\UserProfileType(${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker')) && false ?: '_'});
    }

    /*
     * Gets the 'eavmanager_user.mailer.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\UserBundle\Mailer\UserMailer A CleverAge\EAVManager\UserBundle\Mailer\UserMailer instance
     */
    protected function getEavmanagerUser_Mailer_UserService()
    {
        return $this->services['eavmanager_user.mailer.user'] = new \CleverAge\EAVManager\UserBundle\Mailer\UserMailer(${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->get('swiftmailer.mailer.default')) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'}, ${($_ = isset($this->services['eavmanager_user.config.holder']) ? $this->services['eavmanager_user.config.holder'] : $this->get('eavmanager_user.config.holder')) && false ?: '_'});
    }

    /*
     * Gets the 'eavmanager_user.normalizer.user.flat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Serializer\Normalizer\Flat\FlatNormalizer A Sidus\EAVModelBundle\Serializer\Normalizer\Flat\FlatNormalizer instance
     */
    protected function getEavmanagerUser_Normalizer_User_FlatService()
    {
        return $this->services['eavmanager_user.normalizer.user.flat'] = new \Sidus\EAVModelBundle\Serializer\Normalizer\Flat\FlatNormalizer(${($_ = isset($this->services['eavmanager_user.normalizer.user']) ? $this->services['eavmanager_user.normalizer.user'] : $this->getEavmanagerUser_Normalizer_UserService()) && false ?: '_'}, array(0 => 'csv'));
    }

    /*
     * Gets the 'eavmanager_user.user.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\UserBundle\Infrastructure\Manager\UserManager A CleverAge\EAVManager\UserBundle\Infrastructure\Manager\UserManager instance
     */
    protected function getEavmanagerUser_User_ManagerService()
    {
        return $this->services['eavmanager_user.user.manager'] = new \CleverAge\EAVManager\UserBundle\Infrastructure\Manager\UserManager(${($_ = isset($this->services['eavmanager_user.user.provider']) ? $this->services['eavmanager_user.user.provider'] : $this->get('eavmanager_user.user.provider')) && false ?: '_'}, ${($_ = isset($this->services['security.password_encoder']) ? $this->services['security.password_encoder'] : $this->get('security.password_encoder')) && false ?: '_'}, ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'}, ${($_ = isset($this->services['eavmanager_user.mailer.user']) ? $this->services['eavmanager_user.mailer.user'] : $this->get('eavmanager_user.mailer.user')) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger')) && false ?: '_'});
    }

    /*
     * Gets the 'eavmanager_user.user.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\UserBundle\Security\UserProvider A CleverAge\EAVManager\UserBundle\Security\UserProvider instance
     */
    protected function getEavmanagerUser_User_ProviderService()
    {
        return $this->services['eavmanager_user.user.provider'] = new \CleverAge\EAVManager\UserBundle\Security\UserProvider(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /*
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ${($_ = isset($this->services['oneup_uploader.validation_listener.max_size']) ? $this->services['oneup_uploader.validation_listener.max_size'] : $this->get('oneup_uploader.validation_listener.max_size')) && false ?: '_'};
        }, 1 => 'onValidate'), 0);
        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ${($_ = isset($this->services['oneup_uploader.validation_listener.allowed_mimetype']) ? $this->services['oneup_uploader.validation_listener.allowed_mimetype'] : $this->get('oneup_uploader.validation_listener.allowed_mimetype')) && false ?: '_'};
        }, 1 => 'onValidate'), 0);
        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ${($_ = isset($this->services['oneup_uploader.validation_listener.disallowed_mimetype']) ? $this->services['oneup_uploader.validation_listener.disallowed_mimetype'] : $this->get('oneup_uploader.validation_listener.disallowed_mimetype')) && false ?: '_'};
        }, 1 => 'onValidate'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['sidus_eav_model.context.manager']) ? $this->services['sidus_eav_model.context.manager'] : $this->get('sidus_eav_model.context.manager')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['sidus_eav_publishing.doctrine_orm.subscriber']) ? $this->services['sidus_eav_publishing.doctrine_orm.subscriber'] : $this->get('sidus_eav_publishing.doctrine_orm.subscriber')) && false ?: '_'};
        }, 1 => 'onKernelTerminate'), 0);
        $instance->addListener('oneup_uploader.post_persist', array(0 => function () {
            return ${($_ = isset($this->services['sidus_file_upload.resource.uploader']) ? $this->services['sidus_file_upload.resource.uploader'] : $this->get('sidus_file_upload.resource.uploader')) && false ?: '_'};
        }, 1 => 'onUpload'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sidus_admin.kernel.event.controller_injecter']) ? $this->services['sidus_admin.kernel.event.controller_injecter'] : $this->get('sidus_admin.kernel.event.controller_injecter')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['eavmanager_admin.listener.routing.cache']) ? $this->services['eavmanager_admin.listener.routing.cache'] : $this->get('eavmanager_admin.listener.routing.cache')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->get('response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->get('streamed_response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->get('validate_request_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->get('session_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->get('session.save_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->get('fragment.listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->get('translator_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->get('translator_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->get('security.rememberme.response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->get('twig.exception_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->get('sensio_framework_extra.controller.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->get('sensio_framework_extra.converter.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->get('sensio_framework_extra.security.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener']) ? $this->services['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] : $this->get('pagerfanta.convert_not_valid_max_per_page_to_not_found_listener')) && false ?: '_'};
        }, 1 => 'onException'), 512);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['pagerfanta.convert_not_valid_current_page_to_not_found_listener']) ? $this->services['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] : $this->get('pagerfanta.convert_not_valid_current_page_to_not_found_listener')) && false ?: '_'};
        }, 1 => 'onException'), 512);

        return $instance;
    }

    /*
     * Gets the 'exercise_html_purifier.cache_warmer.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Exercise\HTMLPurifierBundle\CacheWarmer\SerializerCacheWarmer A Exercise\HTMLPurifierBundle\CacheWarmer\SerializerCacheWarmer instance
     */
    protected function getExerciseHtmlPurifier_CacheWarmer_SerializerService()
    {
        return $this->services['exercise_html_purifier.cache_warmer.serializer'] = new \Exercise\HTMLPurifierBundle\CacheWarmer\SerializerCacheWarmer(array(0 => (__DIR__.'/htmlpurifier')), ${($_ = isset($this->services['exercise_html_purifier.default']) ? $this->services['exercise_html_purifier.default'] : $this->get('exercise_html_purifier.default')) && false ?: '_'});
    }

    /*
     * Gets the 'exercise_html_purifier.config.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \HTMLPurifier_Config A HTMLPurifier_Config instance
     */
    protected function getExerciseHtmlPurifier_Config_DefaultService()
    {
        return $this->services['exercise_html_purifier.config.default'] = \HTMLPurifier_Config::create(array('Cache.SerializerPath' => (__DIR__.'/htmlpurifier')));
    }

    /*
     * Gets the 'exercise_html_purifier.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \HTMLPurifier A HTMLPurifier instance
     */
    protected function getExerciseHtmlPurifier_DefaultService()
    {
        return $this->services['exercise_html_purifier.default'] = new \HTMLPurifier(${($_ = isset($this->services['exercise_html_purifier.config.default']) ? $this->services['exercise_html_purifier.config.default'] : $this->get('exercise_html_purifier.config.default')) && false ?: '_'});
    }

    /*
     * Gets the 'exercise_html_purifier.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Exercise\HTMLPurifierBundle\Twig\HTMLPurifierExtension A Exercise\HTMLPurifierBundle\Twig\HTMLPurifierExtension instance
     */
    protected function getExerciseHtmlPurifier_TwigExtensionService()
    {
        return $this->services['exercise_html_purifier.twig_extension'] = new \Exercise\HTMLPurifierBundle\Twig\HTMLPurifierExtension($this);
    }

    /*
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[2].'/Resources'), array(0 => $this->targetDirs[2]));
    }

    /*
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->get('form.registry')) && false ?: '_'}, ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /*
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Liip\\ImagineBundle\\Form\\Type\\ImageType' => function () {
            return ${($_ = isset($this->services['liip_imagine.form.type.image']) ? $this->services['liip_imagine.form.type.image'] : $this->get('liip_imagine.form.type.image')) && false ?: '_'};
        }, 'Mopa\\Bundle\\BootstrapBundle\\Form\\Type\\FormActionsType' => function () {
            return ${($_ = isset($this->services['mopa_bootstrap.form.type.form_actions']) ? $this->services['mopa_bootstrap.form.type.form_actions'] : $this->get('mopa_bootstrap.form.type.form_actions')) && false ?: '_'};
        }, 'Mopa\\Bundle\\BootstrapBundle\\Form\\Type\\TabType' => function () {
            return ${($_ = isset($this->services['mopa_bootstrap.form.type.tab']) ? $this->services['mopa_bootstrap.form.type.tab'] : $this->get('mopa_bootstrap.form.type.tab')) && false ?: '_'};
        }, 'Sidus\\FilterBundle\\Form\\Type\\DateRangeType' => function () {
            return ${($_ = isset($this->services['sidus_filter.form.type.date_range']) ? $this->services['sidus_filter.form.type.date_range'] : $this->get('sidus_filter.form.type.date_range')) && false ?: '_'};
        }, 'Sidus\\FilterBundle\\Form\\Type\\OrderButtonType' => function () {
            return ${($_ = isset($this->services['sidus_filter.form.type.order_button']) ? $this->services['sidus_filter.form.type.order_button'] : $this->get('sidus_filter.form.type.order_button')) && false ?: '_'};
        }, 'Sidus\\FilterBundle\\Form\\Type\\SortConfigType' => function () {
            return ${($_ = isset($this->services['sidus_filter.form.type.sort_config']) ? $this->services['sidus_filter.form.type.sort_config'] : $this->get('sidus_filter.form.type.sort_config')) && false ?: '_'};
        }, 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\AdminLink' => function () {
            return ${($_ = isset($this->services['eavmanager_admin.form.link.type']) ? $this->services['eavmanager_admin.form.link.type'] : $this->get('eavmanager_admin.form.link.type')) && false ?: '_'};
        }, 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\ImageType' => function () {
            return ${($_ = isset($this->services['eavmanager_admin.form.image.type']) ? $this->services['eavmanager_admin.form.image.type'] : $this->get('eavmanager_admin.form.image.type')) && false ?: '_'};
        }, 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\VariantFamilySelector' => function () {
            return ${($_ = isset($this->services['eavmanager_admin.form.variant_family_selector.type']) ? $this->services['eavmanager_admin.form.variant_family_selector.type'] : $this->get('eavmanager_admin.form.variant_family_selector.type')) && false ?: '_'};
        }, 'CleverAge\\EAVManager\\AssetBundle\\Form\\Type\\MediaBrowserType' => function () {
            return ${($_ = isset($this->services['eavmanager_asset.form.media_browser.type']) ? $this->services['eavmanager_asset.form.media_browser.type'] : $this->get('eavmanager_asset.form.media_browser.type')) && false ?: '_'};
        }, 'CleverAge\\EAVManager\\SecurityBundle\\Form\\Type\\FamilyPermissionType' => function () {
            return ${($_ = isset($this->services['eavmanager_security.form.family_permission.type']) ? $this->services['eavmanager_security.form.family_permission.type'] : $this->get('eavmanager_security.form.family_permission.type')) && false ?: '_'};
        }, 'CleverAge\\EAVManager\\SecurityBundle\\Form\\Type\\RoleHierarchyType' => function () {
            return ${($_ = isset($this->services['eavmanager_security.form.role_hierarchy.type']) ? $this->services['eavmanager_security.form.role_hierarchy.type'] : $this->get('eavmanager_security.form.role_hierarchy.type')) && false ?: '_'};
        }, 'CleverAge\\EAVManager\\UserBundle\\Form\\Type\\GroupType' => function () {
            return ${($_ = isset($this->services['eavmanager_user.form.group.type']) ? $this->services['eavmanager_user.form.group.type'] : $this->get('eavmanager_user.form.group.type')) && false ?: '_'};
        }, 'CleverAge\\EAVManager\\UserBundle\\Form\\Type\\UserProfileType' => function () {
            return ${($_ = isset($this->services['eavmanager_user.form.user_profile.type']) ? $this->services['eavmanager_user.form.user_profile.type'] : $this->get('eavmanager_user.form.user_profile.type')) && false ?: '_'};
        }, 'CleverAge\\EAVManager\\UserBundle\\Form\\Type\\UserType' => function () {
            return ${($_ = isset($this->services['eavmanager_user.form.user.type']) ? $this->services['eavmanager_user.form.user.type'] : $this->get('eavmanager_user.form.user.type')) && false ?: '_'};
        }, 'Sidus\\DataGridBundle\\Form\\Type\\LinkType' => function () {
            return ${($_ = isset($this->services['sidus_data_grid.form.link.type']) ? $this->services['sidus_data_grid.form.link.type'] : $this->get('sidus_data_grid.form.link.type')) && false ?: '_'};
        }, 'Sidus\\EAVBootstrapBundle\\Form\\Type\\AutocompleteDataSelectorType' => function () {
            return ${($_ = isset($this->services['sidus_eav_bootstrap.form.type.autocomplete_data_selector']) ? $this->services['sidus_eav_bootstrap.form.type.autocomplete_data_selector'] : $this->get('sidus_eav_bootstrap.form.type.autocomplete_data_selector')) && false ?: '_'};
        }, 'Sidus\\EAVBootstrapBundle\\Form\\Type\\ComboDataSelectorType' => function () {
            return ${($_ = isset($this->services['sidus_eav_bootstrap.form.type.combo_data_selector']) ? $this->services['sidus_eav_bootstrap.form.type.combo_data_selector'] : $this->get('sidus_eav_bootstrap.form.type.combo_data_selector')) && false ?: '_'};
        }, 'Sidus\\EAVBootstrapBundle\\Form\\Type\\TabbedDataType' => function () {
            return ${($_ = isset($this->services['sidus_eav_bootstrap.form.type.tabbed_data']) ? $this->services['sidus_eav_bootstrap.form.type.tabbed_data'] : $this->get('sidus_eav_bootstrap.form.type.tabbed_data')) && false ?: '_'};
        }, 'Sidus\\EAVModelBundle\\Form\\Type\\DataType' => function () {
            return ${($_ = isset($this->services['sidus_eav_model.form.type.data']) ? $this->services['sidus_eav_model.form.type.data'] : $this->get('sidus_eav_model.form.type.data')) && false ?: '_'};
        }, 'Sidus\\EAVModelBundle\\Form\\Type\\FamilySelectorType' => function () {
            return ${($_ = isset($this->services['sidus_eav_model.form.type.family_selector']) ? $this->services['sidus_eav_model.form.type.family_selector'] : $this->get('sidus_eav_model.form.type.family_selector')) && false ?: '_'};
        }, 'Sidus\\EAVModelBundle\\Form\\Type\\GroupedDataType' => function () {
            return ${($_ = isset($this->services['sidus_eav_model.form.type.grouped_data']) ? $this->services['sidus_eav_model.form.type.grouped_data'] : $this->get('sidus_eav_model.form.type.grouped_data')) && false ?: '_'};
        }, 'Sidus\\EAVModelBundle\\Form\\Type\\SimpleDataSelectorType' => function () {
            return ${($_ = isset($this->services['sidus_eav_model.form.type.simple_data_selector']) ? $this->services['sidus_eav_model.form.type.simple_data_selector'] : $this->get('sidus_eav_model.form.type.simple_data_selector')) && false ?: '_'};
        }, 'Sidus\\EAVVariantBundle\\Form\\Type\\AxlesType' => function () {
            return ${($_ = isset($this->services['sidus_eav_variant.form.type.axles']) ? $this->services['sidus_eav_variant.form.type.axles'] : $this->get('sidus_eav_variant.form.type.axles')) && false ?: '_'};
        }, 'Sidus\\EAVVariantBundle\\Form\\Type\\VariantCollectionType' => function () {
            return ${($_ = isset($this->services['sidus_eav_variant.form.type.variant_collection']) ? $this->services['sidus_eav_variant.form.type.variant_collection'] : $this->get('sidus_eav_variant.form.type.variant_collection')) && false ?: '_'};
        }, 'Sidus\\EAVVariantBundle\\Form\\Type\\VariantFamilySelectorType' => function () {
            return ${($_ = isset($this->services['sidus_eav_variant.form.type.variant_family_selector']) ? $this->services['sidus_eav_variant.form.type.variant_family_selector'] : $this->get('sidus_eav_variant.form.type.variant_family_selector')) && false ?: '_'};
        }, 'Sidus\\EAVVariantBundle\\Form\\Type\\VariantType' => function () {
            return ${($_ = isset($this->services['sidus_eav_variant.form.type.variant']) ? $this->services['sidus_eav_variant.form.type.variant'] : $this->get('sidus_eav_variant.form.type.variant')) && false ?: '_'};
        }, 'Sidus\\FileUploadBundle\\Form\\Type\\ResourceType' => function () {
            return ${($_ = isset($this->services['sidus_file_upload.form.resource_type']) ? $this->services['sidus_file_upload.form.resource_type'] : $this->get('sidus_file_upload.form.resource_type')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
            return ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : $this->get('form.type.entity')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
            return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
            return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'};
        })), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->getForm_TypeExtension_CsrfService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.embed_form']) ? $this->services['mopa_bootstrap.form.type_extension.embed_form'] : $this->get('mopa_bootstrap.form.type_extension.embed_form')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.static_text']) ? $this->services['mopa_bootstrap.form.type_extension.static_text'] : $this->get('mopa_bootstrap.form.type_extension.static_text')) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.help']) ? $this->services['mopa_bootstrap.form.type_extension.help'] : $this->get('mopa_bootstrap.form.type_extension.help')) && false ?: '_'};
            yield 7 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.legend']) ? $this->services['mopa_bootstrap.form.type_extension.legend'] : $this->get('mopa_bootstrap.form.type_extension.legend')) && false ?: '_'};
            yield 8 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.error']) ? $this->services['mopa_bootstrap.form.type_extension.error'] : $this->get('mopa_bootstrap.form.type_extension.error')) && false ?: '_'};
            yield 9 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.widget']) ? $this->services['mopa_bootstrap.form.type_extension.widget'] : $this->get('mopa_bootstrap.form.type_extension.widget')) && false ?: '_'};
            yield 10 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.horizontal']) ? $this->services['mopa_bootstrap.form.type_extension.horizontal'] : $this->get('mopa_bootstrap.form.type_extension.horizontal')) && false ?: '_'};
            yield 11 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.widget_collection']) ? $this->services['mopa_bootstrap.form.type_extension.widget_collection'] : $this->get('mopa_bootstrap.form.type_extension.widget_collection')) && false ?: '_'};
            yield 12 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.tabbed']) ? $this->services['mopa_bootstrap.form.type_extension.tabbed'] : $this->get('mopa_bootstrap.form.type_extension.tabbed')) && false ?: '_'};
        }, 13), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.offset_button']) ? $this->services['mopa_bootstrap.form.type_extension.offset_button'] : $this->get('mopa_bootstrap.form.type_extension.offset_button')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.button']) ? $this->services['mopa_bootstrap.form.type_extension.button'] : $this->get('mopa_bootstrap.form.type_extension.button')) && false ?: '_'};
        }, 2), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.date']) ? $this->services['mopa_bootstrap.form.type_extension.date'] : $this->get('mopa_bootstrap.form.type_extension.date')) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.datetime']) ? $this->services['mopa_bootstrap.form.type_extension.datetime'] : $this->get('mopa_bootstrap.form.type_extension.datetime')) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['mopa_bootstrap.form.type_extension.time']) ? $this->services['mopa_bootstrap.form.type_extension.time'] : $this->get('mopa_bootstrap.form.type_extension.time')) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['sidus_eav_model.form.extension.choice']) ? $this->services['sidus_eav_model.form.extension.choice'] : $this->get('sidus_eav_model.form.extension.choice')) && false ?: '_'};
        }, 1), 'Sidus\\EAVModelBundle\\Form\\Type\\SimpleDataSelectorType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['eavmanager.form.extension.data_selector']) ? $this->services['eavmanager.form.extension.data_selector'] : $this->get('eavmanager.form.extension.data_selector')) && false ?: '_'};
        }, 1)), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->get('form.type_guesser.doctrine')) && false ?: '_'};
        }, 2), NULL)), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /*
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\ResolvedFormTypeFactory A Symfony\Component\Form\ResolvedFormTypeFactory instance
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /*
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /*
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /*
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /*
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /*
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /*
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /*
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /*
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /*
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /*
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /*
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /*
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /*
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /*
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /*
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /*
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /*
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /*
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /*
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /*
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /*
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /*
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /*
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /*
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /*
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /*
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /*
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /*
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /*
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /*
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /*
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /*
     * Gets the 'fos_js_routing.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\JsRoutingBundle\Controller\Controller A FOS\JsRoutingBundle\Controller\Controller instance
     */
    protected function getFosJsRouting_ControllerService()
    {
        return $this->services['fos_js_routing.controller'] = new \FOS\JsRoutingBundle\Controller\Controller(${($_ = isset($this->services['fos_js_routing.serializer']) ? $this->services['fos_js_routing.serializer'] : $this->get('fos_js_routing.serializer')) && false ?: '_'}, ${($_ = isset($this->services['fos_js_routing.extractor']) ? $this->services['fos_js_routing.extractor'] : $this->get('fos_js_routing.extractor')) && false ?: '_'}, array('enabled' => false), false);
    }

    /*
     * Gets the 'fos_js_routing.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor A FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor instance
     */
    protected function getFosJsRouting_ExtractorService()
    {
        return $this->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, array(), __DIR__, array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'MopaBootstrapBundle' => 'Mopa\\Bundle\\BootstrapBundle\\MopaBootstrapBundle', 'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle', 'PinanoSelect2Bundle' => 'Pinano\\Select2Bundle\\PinanoSelect2Bundle', 'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle', 'OneupFlysystemBundle' => 'Oneup\\FlysystemBundle\\OneupFlysystemBundle', 'CircleRestClientBundle' => 'Circle\\RestClientBundle\\CircleRestClientBundle', 'SidusEAVModelBundle' => 'Sidus\\EAVModelBundle\\SidusEAVModelBundle', 'SidusFilterBundle' => 'Sidus\\FilterBundle\\SidusFilterBundle', 'SidusEAVFilterBundle' => 'Sidus\\EAVFilterBundle\\SidusEAVFilterBundle', 'SidusEAVBootstrapBundle' => 'Sidus\\EAVBootstrapBundle\\SidusEAVBootstrapBundle', 'SidusDataGridBundle' => 'Sidus\\DataGridBundle\\SidusDataGridBundle', 'SidusEAVDataGridBundle' => 'Sidus\\EAVDataGridBundle\\SidusEAVDataGridBundle', 'SidusEAVVariantBundle' => 'Sidus\\EAVVariantBundle\\SidusEAVVariantBundle', 'SidusPublishingBundle' => 'Sidus\\PublishingBundle\\SidusPublishingBundle', 'SidusFileUploadBundle' => 'Sidus\\FileUploadBundle\\SidusFileUploadBundle', 'SidusAdminBundle' => 'Sidus\\AdminBundle\\SidusAdminBundle', 'StfalconTinymceBundle' => 'Stfalcon\\Bundle\\TinymceBundle\\StfalconTinymceBundle', 'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle', 'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle', 'ExerciseHTMLPurifierBundle' => 'Exercise\\HTMLPurifierBundle\\ExerciseHTMLPurifierBundle', 'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle', 'CleverAgeProcessBundle' => 'CleverAge\\ProcessBundle\\CleverAgeProcessBundle', 'CleverAgeEAVManagerEAVModelBundle' => 'CleverAge\\EAVManager\\EAVModelBundle\\CleverAgeEAVManagerEAVModelBundle', 'CleverAgeEAVManagerLayoutBundle' => 'CleverAge\\EAVManager\\LayoutBundle\\CleverAgeEAVManagerLayoutBundle', 'CleverAgeEAVManagerAdminBundle' => 'CleverAge\\EAVManager\\AdminBundle\\CleverAgeEAVManagerAdminBundle', 'CleverAgeEAVManagerUserBundle' => 'CleverAge\\EAVManager\\UserBundle\\CleverAgeEAVManagerUserBundle', 'CleverAgeEAVManagerSecurityBundle' => 'CleverAge\\EAVManager\\SecurityBundle\\CleverAgeEAVManagerSecurityBundle', 'CleverAgeEAVManagerAssetBundle' => 'CleverAge\\EAVManager\\AssetBundle\\CleverAgeEAVManagerAssetBundle', 'CleverAgeEAVManagerApiPlatformBundle' => 'CleverAge\\EAVManager\\ApiPlatformBundle\\CleverAgeEAVManagerApiPlatformBundle', 'MyEMLEAVModelBundle' => 'MyEML\\EAVModelBundle\\MyEMLEAVModelBundle'));
    }

    /*
     * Gets the 'fos_js_routing.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Serializer\Serializer A Symfony\Component\Serializer\Serializer instance
     */
    protected function getFosJsRouting_SerializerService()
    {
        return $this->services['fos_js_routing.serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer()), array('json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder()));
    }

    /*
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance
     */
    protected function getFragment_HandlerService()
    {
        return $this->services['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(${($_ = isset($this->services['service_locator.e64d23c3bf770e2cf44b71643280668d']) ? $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] : $this->getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, false);
    }

    /*
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, '/_fragment');
    }

    /*
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel A Symfony\Component\HttpKernel\HttpKernel instance
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'}, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}), ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->getArgumentResolver_RequestAttributeService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->getArgumentResolver_RequestService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->getArgumentResolver_SessionService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->getSecurity_UserValueResolverService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->getArgumentResolver_ServiceService()) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->getArgumentResolver_DefaultService()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->getArgumentResolver_VariadicService()) && false ?: '_'};
        }, 7)));
    }

    /*
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance
     *
     * @deprecated The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        @trigger_error('The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer(array(0 => 'Symfony\\Component\\HttpFoundation\\ParameterBag', 1 => 'Symfony\\Component\\HttpFoundation\\HeaderBag', 2 => 'Symfony\\Component\\HttpFoundation\\FileBag', 3 => 'Symfony\\Component\\HttpFoundation\\ServerBag', 4 => 'Symfony\\Component\\HttpFoundation\\Request', 5 => 'Symfony\\Component\\HttpKernel\\Kernel'));
    }

    /*
     * Gets the 'liip_imagine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Imagine\Gd\Imagine A Imagine\Gd\Imagine instance
     */
    protected function getLiipImagineService()
    {
        $this->services['liip_imagine'] = $instance = new \Imagine\Gd\Imagine();

        $instance->setMetadataReader(new \Imagine\Image\Metadata\ExifMetadataReader());

        return $instance;
    }

    /*
     * Gets the 'liip_imagine.binary.loader.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader A Liip\ImagineBundle\Binary\Loader\FileSystemLoader instance
     */
    protected function getLiipImagine_Binary_Loader_DefaultService()
    {
        return $this->services['liip_imagine.binary.loader.default'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader(${($_ = isset($this->services['liip_imagine.mime_type_guesser']) ? $this->services['liip_imagine.mime_type_guesser'] : $this->get('liip_imagine.mime_type_guesser')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.extension_guesser']) ? $this->services['liip_imagine.extension_guesser'] : $this->get('liip_imagine.extension_guesser')) && false ?: '_'}, array(0 => ($this->targetDirs[2].'/../web')), new \Liip\ImagineBundle\Binary\Locator\FileSystemLocator());
    }

    /*
     * Gets the 'liip_imagine.binary.loader.images' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FlysystemLoader A Liip\ImagineBundle\Binary\Loader\FlysystemLoader instance
     */
    protected function getLiipImagine_Binary_Loader_ImagesService()
    {
        return $this->services['liip_imagine.binary.loader.images'] = new \Liip\ImagineBundle\Binary\Loader\FlysystemLoader(${($_ = isset($this->services['liip_imagine.extension_guesser']) ? $this->services['liip_imagine.extension_guesser'] : $this->get('liip_imagine.extension_guesser')) && false ?: '_'}, ${($_ = isset($this->services['oneup_flysystem.images_filesystem']) ? $this->services['oneup_flysystem.images_filesystem'] : $this->get('oneup_flysystem.images_filesystem')) && false ?: '_'});
    }

    /*
     * Gets the 'liip_imagine.binary.loader.prototype.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\FileSystemLoader A Liip\ImagineBundle\Binary\Loader\FileSystemLoader instance
     */
    protected function getLiipImagine_Binary_Loader_Prototype_FilesystemService()
    {
        return $this->services['liip_imagine.binary.loader.prototype.filesystem'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader(${($_ = isset($this->services['liip_imagine.mime_type_guesser']) ? $this->services['liip_imagine.mime_type_guesser'] : $this->get('liip_imagine.mime_type_guesser')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.extension_guesser']) ? $this->services['liip_imagine.extension_guesser'] : $this->get('liip_imagine.extension_guesser')) && false ?: '_'}, '', '');
    }

    /*
     * Gets the 'liip_imagine.binary.loader.prototype.stream' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\Loader\StreamLoader A Liip\ImagineBundle\Binary\Loader\StreamLoader instance
     */
    protected function getLiipImagine_Binary_Loader_Prototype_StreamService()
    {
        return $this->services['liip_imagine.binary.loader.prototype.stream'] = new \Liip\ImagineBundle\Binary\Loader\StreamLoader('', '');
    }

    /*
     * Gets the 'liip_imagine.binary.mime_type_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser A Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser instance
     */
    protected function getLiipImagine_Binary_MimeTypeGuesserService()
    {
        return $this->services['liip_imagine.binary.mime_type_guesser'] = new \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser(${($_ = isset($this->services['liip_imagine.mime_type_guesser']) ? $this->services['liip_imagine.mime_type_guesser'] : $this->get('liip_imagine.mime_type_guesser')) && false ?: '_'});
    }

    /*
     * Gets the 'liip_imagine.cache.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheManager A Liip\ImagineBundle\Imagine\Cache\CacheManager instance
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager(${($_ = isset($this->services['liip_imagine.filter.configuration']) ? $this->services['liip_imagine.filter.configuration'] : $this->get('liip_imagine.filter.configuration')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.cache.signer']) ? $this->services['liip_imagine.cache.signer'] : $this->get('liip_imagine.cache.signer')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'}, 'default');

        $instance->addResolver('default', ${($_ = isset($this->services['liip_imagine.cache.resolver.default']) ? $this->services['liip_imagine.cache.resolver.default'] : $this->get('liip_imagine.cache.resolver.default')) && false ?: '_'});
        $instance->addResolver('no_cache', ${($_ = isset($this->services['liip_imagine.cache.resolver.no_cache_web_path']) ? $this->services['liip_imagine.cache.resolver.no_cache_web_path'] : $this->get('liip_imagine.cache.resolver.no_cache_web_path')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'liip_imagine.cache.resolver.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver A Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver instance
     */
    protected function getLiipImagine_Cache_Resolver_DefaultService()
    {
        return $this->services['liip_imagine.cache.resolver.default'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : $this->get('filesystem')) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ($this->targetDirs[2].'/../web'), 'images/cache');
    }

    /*
     * Gets the 'liip_imagine.cache.resolver.no_cache_web_path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver A Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver instance
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheWebPathService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache_web_path'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheWebPathResolver(${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});
    }

    /*
     * Gets the 'liip_imagine.cache.signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Signer A Liip\ImagineBundle\Imagine\Cache\Signer instance
     */
    protected function getLiipImagine_Cache_SignerService()
    {
        return $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer('ThisTokenIsNotSoSecretChangeIt');
    }

    /*
     * Gets the 'liip_imagine.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Controller\ImagineController A Liip\ImagineBundle\Controller\ImagineController instance
     */
    protected function getLiipImagine_ControllerService()
    {
        return $this->services['liip_imagine.controller'] = new \Liip\ImagineBundle\Controller\ImagineController(${($_ = isset($this->services['liip_imagine.data.manager']) ? $this->services['liip_imagine.data.manager'] : $this->get('liip_imagine.data.manager')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.filter.manager']) ? $this->services['liip_imagine.filter.manager'] : $this->get('liip_imagine.filter.manager')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.cache.manager']) ? $this->services['liip_imagine.cache.manager'] : $this->get('liip_imagine.cache.manager')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.cache.signer']) ? $this->services['liip_imagine.cache.signer'] : $this->get('liip_imagine.cache.signer')) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'liip_imagine.data.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\DataManager A Liip\ImagineBundle\Imagine\Data\DataManager instance
     */
    protected function getLiipImagine_Data_ManagerService()
    {
        $this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager(${($_ = isset($this->services['liip_imagine.binary.mime_type_guesser']) ? $this->services['liip_imagine.binary.mime_type_guesser'] : $this->get('liip_imagine.binary.mime_type_guesser')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.extension_guesser']) ? $this->services['liip_imagine.extension_guesser'] : $this->get('liip_imagine.extension_guesser')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.filter.configuration']) ? $this->services['liip_imagine.filter.configuration'] : $this->get('liip_imagine.filter.configuration')) && false ?: '_'}, 'default', NULL);

        $instance->addLoader('images', ${($_ = isset($this->services['liip_imagine.binary.loader.images']) ? $this->services['liip_imagine.binary.loader.images'] : $this->get('liip_imagine.binary.loader.images')) && false ?: '_'});
        $instance->addLoader('default', ${($_ = isset($this->services['liip_imagine.binary.loader.default']) ? $this->services['liip_imagine.binary.loader.default'] : $this->get('liip_imagine.binary.loader.default')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'liip_imagine.extension_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesserInterface A Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesserInterface instance
     */
    protected function getLiipImagine_ExtensionGuesserService()
    {
        return $this->services['liip_imagine.extension_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser::getInstance();
    }

    /*
     * Gets the 'liip_imagine.filter.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration A Liip\ImagineBundle\Imagine\Filter\FilterConfiguration instance
     */
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->services['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration(array('tiny' => array('data_loader' => 'images', 'quality' => 70, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 64, 1 => 64), 'mode' => 'outbound')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'thumbnail' => array('data_loader' => 'images', 'quality' => 70, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 128, 1 => 128), 'mode' => 'outbound')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'small' => array('data_loader' => 'images', 'quality' => 75, 'filters' => array('thumbnail' => array('size' => array(0 => 300, 1 => 200), 'mode' => 'outbound')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'preview' => array('data_loader' => 'images', 'quality' => 80, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 730, 1 => 730), 'mode' => 'inset')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'default_image' => NULL, 'post_processors' => array()), 'large' => array('data_loader' => 'images', 'quality' => 90, 'filters' => array('auto_rotate' => array(), 'thumbnail' => array('size' => array(0 => 1900, 1 => 1000), 'mode' => 'inset')), 'jpeg_quality' => NULL, 'png_compression_level' => NULL, 'png_compression_filter' => NULL, 'format' => NULL, 'animated' => false, 'cache' => NULL, 'default_image' => NULL, 'post_processors' => array())));
    }

    /*
     * Gets the 'liip_imagine.filter.loader.auto_rotate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_AutoRotateService()
    {
        return $this->services['liip_imagine.filter.loader.auto_rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.background' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_BackgroundService()
    {
        return $this->services['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader(${($_ = isset($this->services['liip_imagine']) ? $this->services['liip_imagine'] : $this->get('liip_imagine')) && false ?: '_'});
    }

    /*
     * Gets the 'liip_imagine.filter.loader.crop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_CropService()
    {
        return $this->services['liip_imagine.filter.loader.crop'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.downscale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_DownscaleService()
    {
        return $this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.flip' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_FlipService()
    {
        return $this->services['liip_imagine.filter.loader.flip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.grayscale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_GrayscaleService()
    {
        return $this->services['liip_imagine.filter.loader.grayscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\GrayscaleFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.interlace' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_InterlaceService()
    {
        return $this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.paste' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_PasteService()
    {
        return $this->services['liip_imagine.filter.loader.paste'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader(${($_ = isset($this->services['liip_imagine']) ? $this->services['liip_imagine'] : $this->get('liip_imagine')) && false ?: '_'}, $this->targetDirs[2]);
    }

    /*
     * Gets the 'liip_imagine.filter.loader.relative_resize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_RelativeResizeService()
    {
        return $this->services['liip_imagine.filter.loader.relative_resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.resize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_ResizeService()
    {
        return $this->services['liip_imagine.filter.loader.resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.rotate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_RotateService()
    {
        return $this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.scale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_ScaleService()
    {
        return $this->services['liip_imagine.filter.loader.scale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ScaleFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.strip' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_StripService()
    {
        return $this->services['liip_imagine.filter.loader.strip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.thumbnail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_ThumbnailService()
    {
        return $this->services['liip_imagine.filter.loader.thumbnail'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.upscale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_UpscaleService()
    {
        return $this->services['liip_imagine.filter.loader.upscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader();
    }

    /*
     * Gets the 'liip_imagine.filter.loader.watermark' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader instance
     */
    protected function getLiipImagine_Filter_Loader_WatermarkService()
    {
        return $this->services['liip_imagine.filter.loader.watermark'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader(${($_ = isset($this->services['liip_imagine']) ? $this->services['liip_imagine'] : $this->get('liip_imagine')) && false ?: '_'}, $this->targetDirs[2]);
    }

    /*
     * Gets the 'liip_imagine.filter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterManager A Liip\ImagineBundle\Imagine\Filter\FilterManager instance
     */
    protected function getLiipImagine_Filter_ManagerService()
    {
        $this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager(${($_ = isset($this->services['liip_imagine.filter.configuration']) ? $this->services['liip_imagine.filter.configuration'] : $this->get('liip_imagine.filter.configuration')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine']) ? $this->services['liip_imagine'] : $this->get('liip_imagine')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.binary.mime_type_guesser']) ? $this->services['liip_imagine.binary.mime_type_guesser'] : $this->get('liip_imagine.binary.mime_type_guesser')) && false ?: '_'});

        $instance->addLoader('relative_resize', ${($_ = isset($this->services['liip_imagine.filter.loader.relative_resize']) ? $this->services['liip_imagine.filter.loader.relative_resize'] : $this->get('liip_imagine.filter.loader.relative_resize')) && false ?: '_'});
        $instance->addLoader('resize', ${($_ = isset($this->services['liip_imagine.filter.loader.resize']) ? $this->services['liip_imagine.filter.loader.resize'] : $this->get('liip_imagine.filter.loader.resize')) && false ?: '_'});
        $instance->addLoader('thumbnail', ${($_ = isset($this->services['liip_imagine.filter.loader.thumbnail']) ? $this->services['liip_imagine.filter.loader.thumbnail'] : $this->get('liip_imagine.filter.loader.thumbnail')) && false ?: '_'});
        $instance->addLoader('crop', ${($_ = isset($this->services['liip_imagine.filter.loader.crop']) ? $this->services['liip_imagine.filter.loader.crop'] : $this->get('liip_imagine.filter.loader.crop')) && false ?: '_'});
        $instance->addLoader('grayscale', ${($_ = isset($this->services['liip_imagine.filter.loader.grayscale']) ? $this->services['liip_imagine.filter.loader.grayscale'] : $this->get('liip_imagine.filter.loader.grayscale')) && false ?: '_'});
        $instance->addLoader('paste', ${($_ = isset($this->services['liip_imagine.filter.loader.paste']) ? $this->services['liip_imagine.filter.loader.paste'] : $this->get('liip_imagine.filter.loader.paste')) && false ?: '_'});
        $instance->addLoader('watermark', ${($_ = isset($this->services['liip_imagine.filter.loader.watermark']) ? $this->services['liip_imagine.filter.loader.watermark'] : $this->get('liip_imagine.filter.loader.watermark')) && false ?: '_'});
        $instance->addLoader('background', ${($_ = isset($this->services['liip_imagine.filter.loader.background']) ? $this->services['liip_imagine.filter.loader.background'] : $this->get('liip_imagine.filter.loader.background')) && false ?: '_'});
        $instance->addLoader('strip', ${($_ = isset($this->services['liip_imagine.filter.loader.strip']) ? $this->services['liip_imagine.filter.loader.strip'] : $this->get('liip_imagine.filter.loader.strip')) && false ?: '_'});
        $instance->addLoader('scale', ${($_ = isset($this->services['liip_imagine.filter.loader.scale']) ? $this->services['liip_imagine.filter.loader.scale'] : $this->get('liip_imagine.filter.loader.scale')) && false ?: '_'});
        $instance->addLoader('upscale', ${($_ = isset($this->services['liip_imagine.filter.loader.upscale']) ? $this->services['liip_imagine.filter.loader.upscale'] : $this->get('liip_imagine.filter.loader.upscale')) && false ?: '_'});
        $instance->addLoader('downscale', ${($_ = isset($this->services['liip_imagine.filter.loader.downscale']) ? $this->services['liip_imagine.filter.loader.downscale'] : $this->get('liip_imagine.filter.loader.downscale')) && false ?: '_'});
        $instance->addLoader('auto_rotate', ${($_ = isset($this->services['liip_imagine.filter.loader.auto_rotate']) ? $this->services['liip_imagine.filter.loader.auto_rotate'] : $this->get('liip_imagine.filter.loader.auto_rotate')) && false ?: '_'});
        $instance->addLoader('rotate', ${($_ = isset($this->services['liip_imagine.filter.loader.rotate']) ? $this->services['liip_imagine.filter.loader.rotate'] : $this->get('liip_imagine.filter.loader.rotate')) && false ?: '_'});
        $instance->addLoader('flip', ${($_ = isset($this->services['liip_imagine.filter.loader.flip']) ? $this->services['liip_imagine.filter.loader.flip'] : $this->get('liip_imagine.filter.loader.flip')) && false ?: '_'});
        $instance->addLoader('interlace', ${($_ = isset($this->services['liip_imagine.filter.loader.interlace']) ? $this->services['liip_imagine.filter.loader.interlace'] : $this->get('liip_imagine.filter.loader.interlace')) && false ?: '_'});
        $instance->addPostProcessor('jpegoptim', ${($_ = isset($this->services['liip_imagine.filter.post_processor.jpegoptim']) ? $this->services['liip_imagine.filter.post_processor.jpegoptim'] : $this->get('liip_imagine.filter.post_processor.jpegoptim')) && false ?: '_'});
        $instance->addPostProcessor('optipng', ${($_ = isset($this->services['liip_imagine.filter.post_processor.optipng']) ? $this->services['liip_imagine.filter.post_processor.optipng'] : $this->get('liip_imagine.filter.post_processor.optipng')) && false ?: '_'});
        $instance->addPostProcessor('pngquant', ${($_ = isset($this->services['liip_imagine.filter.post_processor.pngquant']) ? $this->services['liip_imagine.filter.post_processor.pngquant'] : $this->get('liip_imagine.filter.post_processor.pngquant')) && false ?: '_'});
        $instance->addPostProcessor('mozjpeg', ${($_ = isset($this->services['liip_imagine.filter.post_processor.mozjpeg']) ? $this->services['liip_imagine.filter.post_processor.mozjpeg'] : $this->get('liip_imagine.filter.post_processor.mozjpeg')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'liip_imagine.filter.post_processor.jpegoptim' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_JpegoptimService()
    {
        return $this->services['liip_imagine.filter.post_processor.jpegoptim'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor('/usr/bin/jpegoptim', true, NULL, true, NULL);
    }

    /*
     * Gets the 'liip_imagine.filter.post_processor.mozjpeg' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_MozjpegService()
    {
        return $this->services['liip_imagine.filter.post_processor.mozjpeg'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor('/opt/mozjpeg/bin/cjpeg');
    }

    /*
     * Gets the 'liip_imagine.filter.post_processor.optipng' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_OptipngService()
    {
        return $this->services['liip_imagine.filter.post_processor.optipng'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor('/usr/bin/optipng', 7, true, NULL);
    }

    /*
     * Gets the 'liip_imagine.filter.post_processor.pngquant' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor A Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor instance
     */
    protected function getLiipImagine_Filter_PostProcessor_PngquantService()
    {
        return $this->services['liip_imagine.filter.post_processor.pngquant'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\PngquantPostProcessor('/usr/bin/pngquant');
    }

    /*
     * Gets the 'liip_imagine.form.type.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Form\Type\ImageType A Liip\ImagineBundle\Form\Type\ImageType instance
     */
    protected function getLiipImagine_Form_Type_ImageService()
    {
        return $this->services['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }

    /*
     * Gets the 'liip_imagine.mime_type_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface A Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface instance
     */
    protected function getLiipImagine_MimeTypeGuesserService()
    {
        return $this->services['liip_imagine.mime_type_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser::getInstance();
    }

    /*
     * Gets the 'liip_imagine.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Templating\Helper\ImagineHelper A Liip\ImagineBundle\Templating\Helper\ImagineHelper instance
     */
    protected function getLiipImagine_Templating_HelperService()
    {
        return $this->services['liip_imagine.templating.helper'] = new \Liip\ImagineBundle\Templating\Helper\ImagineHelper(${($_ = isset($this->services['liip_imagine.cache.manager']) ? $this->services['liip_imagine.cache.manager'] : $this->get('liip_imagine.cache.manager')) && false ?: '_'});
    }

    /*
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.activation_strategy.not_found' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy A Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy instance
     */
    protected function getMonolog_ActivationStrategy_NotFoundService()
    {
        return $this->services['monolog.activation_strategy.not_found'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy();
    }

    /*
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }

    /*
     * Gets the 'monolog.handler.fingers_crossed.error_level_activation_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy A Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy instance
     */
    protected function getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService()
    {
        return $this->services['monolog.handler.fingers_crossed.error_level_activation_strategy'] = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy();
    }

    /*
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler A Monolog\Handler\FingersCrossedHandler instance
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler(${($_ = isset($this->services['monolog.handler.nested']) ? $this->services['monolog.handler.nested'] : $this->get('monolog.handler.nested')) && false ?: '_'}, 400, 0, true, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.handler.nested' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance
     */
    protected function getMonolog_Handler_NestedService()
    {
        $this->services['monolog.handler.nested'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/prod.log'), 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.handler.null_internal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\NullHandler A Monolog\Handler\NullHandler instance
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /*
     * Gets the 'monolog.logger.assetic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ConsoleService()
    {
        $this->services['monolog.logger.console'] = $instance = new \Symfony\Bridge\Monolog\Logger('console');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'mopa_bootstrap.form.type.form_actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Type\FormActionsType A Mopa\Bundle\BootstrapBundle\Form\Type\FormActionsType instance
     */
    protected function getMopaBootstrap_Form_Type_FormActionsService()
    {
        return $this->services['mopa_bootstrap.form.type.form_actions'] = new \Mopa\Bundle\BootstrapBundle\Form\Type\FormActionsType();
    }

    /*
     * Gets the 'mopa_bootstrap.form.type.tab' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Type\TabType A Mopa\Bundle\BootstrapBundle\Form\Type\TabType instance
     */
    protected function getMopaBootstrap_Form_Type_TabService()
    {
        return $this->services['mopa_bootstrap.form.type.tab'] = new \Mopa\Bundle\BootstrapBundle\Form\Type\TabType();
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Extension\IconButtonExtension A Mopa\Bundle\BootstrapBundle\Form\Extension\IconButtonExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_ButtonService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.button'] = new \Mopa\Bundle\BootstrapBundle\Form\Extension\IconButtonExtension();
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Extension\DateTypeExtension A Mopa\Bundle\BootstrapBundle\Form\Extension\DateTypeExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_DateService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.date'] = new \Mopa\Bundle\BootstrapBundle\Form\Extension\DateTypeExtension(array('date_wrapper_class' => array('year' => 'col-xs-4', 'month' => 'col-xs-4', 'day' => 'col-xs-4')));
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Extension\DatetimeTypeExtension A Mopa\Bundle\BootstrapBundle\Form\Extension\DatetimeTypeExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_DatetimeService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.datetime'] = new \Mopa\Bundle\BootstrapBundle\Form\Extension\DatetimeTypeExtension();
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.embed_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Extension\EmbedFormExtension A Mopa\Bundle\BootstrapBundle\Form\Extension\EmbedFormExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_EmbedFormService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.embed_form'] = new \Mopa\Bundle\BootstrapBundle\Form\Extension\EmbedFormExtension();
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Extension\ErrorTypeFormTypeExtension A Mopa\Bundle\BootstrapBundle\Form\Extension\ErrorTypeFormTypeExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_ErrorService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.error'] = new \Mopa\Bundle\BootstrapBundle\Form\Extension\ErrorTypeFormTypeExtension(array('error_type' => NULL));
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.help' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Extension\HelpFormTypeExtension A Mopa\Bundle\BootstrapBundle\Form\Extension\HelpFormTypeExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_HelpService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.help'] = new \Mopa\Bundle\BootstrapBundle\Form\Extension\HelpFormTypeExtension(array('help_block_tooltip' => array('title' => NULL, 'text' => NULL, 'icon' => 'info-sign', 'placement' => 'top'), 'help_block_popover' => array('title' => NULL, 'content' => NULL, 'text' => NULL, 'icon' => 'info-sign', 'placement' => 'top'), 'help_label_tooltip' => array('title' => NULL, 'text' => NULL, 'icon' => 'info-sign', 'placement' => 'top'), 'help_label_popover' => array('title' => NULL, 'content' => NULL, 'text' => NULL, 'icon' => 'info-sign', 'placement' => 'top'), 'help_widget_popover' => array('title' => NULL, 'content' => NULL, 'trigger' => 'hover', 'toggle' => 'popover', 'placement' => 'right', 'selector' => NULL)));
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.horizontal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Extension\HorizontalFormTypeExtension A Mopa\Bundle\BootstrapBundle\Form\Extension\HorizontalFormTypeExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_HorizontalService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.horizontal'] = new \Mopa\Bundle\BootstrapBundle\Form\Extension\HorizontalFormTypeExtension(array('horizontal' => true, 'horizontal_label_class' => 'col-sm-3', 'horizontal_label_div_class' => NULL, 'horizontal_label_offset_class' => 'col-sm-offset-3', 'horizontal_input_wrapper_class' => 'col-sm-9'));
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.legend' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Extension\LegendFormTypeExtension A Mopa\Bundle\BootstrapBundle\Form\Extension\LegendFormTypeExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_LegendService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.legend'] = new \Mopa\Bundle\BootstrapBundle\Form\Extension\LegendFormTypeExtension(array('render_fieldset' => true, 'show_legend' => true, 'show_child_legend' => false, 'legend_tag' => 'legend', 'render_required_asterisk' => true, 'render_optional_text' => false));
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.offset_button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Extension\OffsetButtonExtension A Mopa\Bundle\BootstrapBundle\Form\Extension\OffsetButtonExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_OffsetButtonService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.offset_button'] = new \Mopa\Bundle\BootstrapBundle\Form\Extension\OffsetButtonExtension();
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.static_text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Extension\StaticTextExtension A Mopa\Bundle\BootstrapBundle\Form\Extension\StaticTextExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_StaticTextService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.static_text'] = new \Mopa\Bundle\BootstrapBundle\Form\Extension\StaticTextExtension();
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.tabbed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVBootstrapBundle\Form\Extension\TabbedFormTypeExtension A Sidus\EAVBootstrapBundle\Form\Extension\TabbedFormTypeExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_TabbedService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.tabbed'] = new \Sidus\EAVBootstrapBundle\Form\Extension\TabbedFormTypeExtension(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->get('form.factory')) && false ?: '_'}, array('class' => 'nav nav-tabs'));
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Extension\TimeTypeExtension A Mopa\Bundle\BootstrapBundle\Form\Extension\TimeTypeExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_TimeService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.time'] = new \Mopa\Bundle\BootstrapBundle\Form\Extension\TimeTypeExtension();
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.widget' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Extension\WidgetFormTypeExtension A Mopa\Bundle\BootstrapBundle\Form\Extension\WidgetFormTypeExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_WidgetService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.widget'] = new \Mopa\Bundle\BootstrapBundle\Form\Extension\WidgetFormTypeExtension(array('checkbox_label' => 'both'));
    }

    /*
     * Gets the 'mopa_bootstrap.form.type_extension.widget_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Form\Extension\WidgetCollectionFormTypeExtension A Mopa\Bundle\BootstrapBundle\Form\Extension\WidgetCollectionFormTypeExtension instance
     */
    protected function getMopaBootstrap_Form_TypeExtension_WidgetCollectionService()
    {
        return $this->services['mopa_bootstrap.form.type_extension.widget_collection'] = new \Mopa\Bundle\BootstrapBundle\Form\Extension\WidgetCollectionFormTypeExtension(array('render_collection_item' => true, 'widget_add_btn' => array('attr' => array('class' => 'btn btn-default'), 'label' => 'add_item', 'translation_domain' => NULL, 'icon' => NULL, 'icon_inverted' => false), 'widget_remove_btn' => array('attr' => array('class' => 'btn btn-default'), 'wrapper_div' => array('class' => 'form-group'), 'horizontal_wrapper_div' => array('class' => 'col-sm-3 col-sm-offset-3'), 'label' => 'remove_item', 'translation_domain' => NULL, 'icon' => NULL, 'icon_inverted' => false)));
    }

    /*
     * Gets the 'mopa_bootstrap.twig.extension.bootstrap_flash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Twig\FlashExtension A Mopa\Bundle\BootstrapBundle\Twig\FlashExtension instance
     */
    protected function getMopaBootstrap_Twig_Extension_BootstrapFlashService()
    {
        return $this->services['mopa_bootstrap.twig.extension.bootstrap_flash'] = new \Mopa\Bundle\BootstrapBundle\Twig\FlashExtension(array('success' => 'success', 'error' => 'danger', 'danger' => 'danger', 'warning' => 'warning', 'warn' => 'warning', 'info' => 'info', 'notice' => 'info'));
    }

    /*
     * Gets the 'mopa_bootstrap.twig.extension.bootstrap_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Twig\FormExtension A Mopa\Bundle\BootstrapBundle\Twig\FormExtension instance
     */
    protected function getMopaBootstrap_Twig_Extension_BootstrapFormService()
    {
        return $this->services['mopa_bootstrap.twig.extension.bootstrap_form'] = new \Mopa\Bundle\BootstrapBundle\Twig\FormExtension();
    }

    /*
     * Gets the 'mopa_bootstrap.twig.extension.bootstrap_icon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Mopa\Bundle\BootstrapBundle\Twig\IconExtension A Mopa\Bundle\BootstrapBundle\Twig\IconExtension instance
     */
    protected function getMopaBootstrap_Twig_Extension_BootstrapIconService()
    {
        return $this->services['mopa_bootstrap.twig.extension.bootstrap_icon'] = new \Mopa\Bundle\BootstrapBundle\Twig\IconExtension('glyphicons', 'icon');
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.awss3v2' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\AwsS3V2Factory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\AwsS3V2Factory instance
     */
    protected function getOneupFlysystem_AdapterFactory_Awss3v2Service()
    {
        return $this->services['oneup_flysystem.adapter_factory.awss3v2'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\AwsS3V2Factory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.awss3v3' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\AwsS3V3Factory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\AwsS3V3Factory instance
     */
    protected function getOneupFlysystem_AdapterFactory_Awss3v3Service()
    {
        return $this->services['oneup_flysystem.adapter_factory.awss3v3'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\AwsS3V3Factory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.customadapter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\CustomAdapterFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\CustomAdapterFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_CustomadapterService()
    {
        return $this->services['oneup_flysystem.adapter_factory.customadapter'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\CustomAdapterFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.dropbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\DropboxFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\DropboxFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_DropboxService()
    {
        return $this->services['oneup_flysystem.adapter_factory.dropbox'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\DropboxFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.fallback' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\FallbackFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\FallbackFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_FallbackService()
    {
        return $this->services['oneup_flysystem.adapter_factory.fallback'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\FallbackFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.ftp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\FtpFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\FtpFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_FtpService()
    {
        return $this->services['oneup_flysystem.adapter_factory.ftp'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\FtpFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.gaufrette' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\GaufretteFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\GaufretteFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_GaufretteService()
    {
        return $this->services['oneup_flysystem.adapter_factory.gaufrette'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\GaufretteFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.googlecloudstorage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\GoogleCloudStorageFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\GoogleCloudStorageFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_GooglecloudstorageService()
    {
        return $this->services['oneup_flysystem.adapter_factory.googlecloudstorage'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\GoogleCloudStorageFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.gridfs' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\GridFSFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\GridFSFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_GridfsService()
    {
        return $this->services['oneup_flysystem.adapter_factory.gridfs'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\GridFSFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.local' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\LocalFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\LocalFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_LocalService()
    {
        return $this->services['oneup_flysystem.adapter_factory.local'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\LocalFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.memory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\MemoryAdapterFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\MemoryAdapterFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_MemoryService()
    {
        return $this->services['oneup_flysystem.adapter_factory.memory'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\MemoryAdapterFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.nulladapter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\NullAdapterFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\NullAdapterFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_NulladapterService()
    {
        return $this->services['oneup_flysystem.adapter_factory.nulladapter'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\NullAdapterFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.rackspace' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\RackspaceFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\RackspaceFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_RackspaceService()
    {
        return $this->services['oneup_flysystem.adapter_factory.rackspace'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\RackspaceFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.replicate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\ReplicateFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\ReplicateFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_ReplicateService()
    {
        return $this->services['oneup_flysystem.adapter_factory.replicate'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\ReplicateFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.sftp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\SftpFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\SftpFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_SftpService()
    {
        return $this->services['oneup_flysystem.adapter_factory.sftp'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\SftpFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.webdav' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\WebDavFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\WebDavFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_WebdavService()
    {
        return $this->services['oneup_flysystem.adapter_factory.webdav'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\WebDavFactory();
    }

    /*
     * Gets the 'oneup_flysystem.adapter_factory.zip' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\ZipFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\ZipFactory instance
     */
    protected function getOneupFlysystem_AdapterFactory_ZipService()
    {
        return $this->services['oneup_flysystem.adapter_factory.zip'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Adapter\ZipFactory();
    }

    /*
     * Gets the 'oneup_flysystem.cache_factory.adapter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\AdapterFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\AdapterFactory instance
     */
    protected function getOneupFlysystem_CacheFactory_AdapterService()
    {
        return $this->services['oneup_flysystem.cache_factory.adapter'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\AdapterFactory();
    }

    /*
     * Gets the 'oneup_flysystem.cache_factory.memcached' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\MemcachedFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\MemcachedFactory instance
     */
    protected function getOneupFlysystem_CacheFactory_MemcachedService()
    {
        return $this->services['oneup_flysystem.cache_factory.memcached'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\MemcachedFactory();
    }

    /*
     * Gets the 'oneup_flysystem.cache_factory.memory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\MemoryFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\MemoryFactory instance
     */
    protected function getOneupFlysystem_CacheFactory_MemoryService()
    {
        return $this->services['oneup_flysystem.cache_factory.memory'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\MemoryFactory();
    }

    /*
     * Gets the 'oneup_flysystem.cache_factory.noop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\NoopFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\NoopFactory instance
     */
    protected function getOneupFlysystem_CacheFactory_NoopService()
    {
        return $this->services['oneup_flysystem.cache_factory.noop'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\NoopFactory();
    }

    /*
     * Gets the 'oneup_flysystem.cache_factory.php_redis' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\PhpRedisFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\PhpRedisFactory instance
     */
    protected function getOneupFlysystem_CacheFactory_PhpRedisService()
    {
        return $this->services['oneup_flysystem.cache_factory.php_redis'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\PhpRedisFactory();
    }

    /*
     * Gets the 'oneup_flysystem.cache_factory.predis' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\PredisFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\PredisFactory instance
     */
    protected function getOneupFlysystem_CacheFactory_PredisService()
    {
        return $this->services['oneup_flysystem.cache_factory.predis'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\PredisFactory();
    }

    /*
     * Gets the 'oneup_flysystem.cache_factory.psr6' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\Psr6Factory A Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\Psr6Factory instance
     */
    protected function getOneupFlysystem_CacheFactory_Psr6Service()
    {
        return $this->services['oneup_flysystem.cache_factory.psr6'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\Psr6Factory();
    }

    /*
     * Gets the 'oneup_flysystem.cache_factory.stash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\StashFactory A Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\StashFactory instance
     */
    protected function getOneupFlysystem_CacheFactory_StashService()
    {
        return $this->services['oneup_flysystem.cache_factory.stash'] = new \Oneup\FlysystemBundle\DependencyInjection\Factory\Cache\StashFactory();
    }

    /*
     * Gets the 'oneup_flysystem.documents_filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \League\Flysystem\Filesystem A League\Flysystem\Filesystem instance
     */
    protected function getOneupFlysystem_DocumentsFilesystemService()
    {
        return $this->services['oneup_flysystem.documents_filesystem'] = new \League\Flysystem\Filesystem(${($_ = isset($this->services['oneup_flysystem.resources_adapter']) ? $this->services['oneup_flysystem.resources_adapter'] : $this->getOneupFlysystem_ResourcesAdapterService()) && false ?: '_'}, array('disable_asserts' => false));
    }

    /*
     * Gets the 'oneup_flysystem.images_filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \League\Flysystem\Filesystem A League\Flysystem\Filesystem instance
     */
    protected function getOneupFlysystem_ImagesFilesystemService()
    {
        return $this->services['oneup_flysystem.images_filesystem'] = new \League\Flysystem\Filesystem(${($_ = isset($this->services['oneup_flysystem.resources_adapter']) ? $this->services['oneup_flysystem.resources_adapter'] : $this->getOneupFlysystem_ResourcesAdapterService()) && false ?: '_'}, array('disable_asserts' => false));
    }

    /*
     * Gets the 'oneup_flysystem.mount_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \League\Flysystem\MountManager A League\Flysystem\MountManager instance
     */
    protected function getOneupFlysystem_MountManagerService()
    {
        return $this->services['oneup_flysystem.mount_manager'] = new \League\Flysystem\MountManager();
    }

    /*
     * Gets the 'oneup_flysystem.plugin.empty_dir' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \League\Flysystem\Plugin\EmptyDir A League\Flysystem\Plugin\EmptyDir instance
     */
    protected function getOneupFlysystem_Plugin_EmptyDirService()
    {
        return $this->services['oneup_flysystem.plugin.empty_dir'] = new \League\Flysystem\Plugin\EmptyDir();
    }

    /*
     * Gets the 'oneup_flysystem.plugin.get_with_metadata' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \League\Flysystem\Plugin\GetWithMetadata A League\Flysystem\Plugin\GetWithMetadata instance
     */
    protected function getOneupFlysystem_Plugin_GetWithMetadataService()
    {
        return $this->services['oneup_flysystem.plugin.get_with_metadata'] = new \League\Flysystem\Plugin\GetWithMetadata();
    }

    /*
     * Gets the 'oneup_flysystem.plugin.list_files' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \League\Flysystem\Plugin\ListFiles A League\Flysystem\Plugin\ListFiles instance
     */
    protected function getOneupFlysystem_Plugin_ListFilesService()
    {
        return $this->services['oneup_flysystem.plugin.list_files'] = new \League\Flysystem\Plugin\ListFiles();
    }

    /*
     * Gets the 'oneup_flysystem.plugin.list_paths' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \League\Flysystem\Plugin\ListPaths A League\Flysystem\Plugin\ListPaths instance
     */
    protected function getOneupFlysystem_Plugin_ListPathsService()
    {
        return $this->services['oneup_flysystem.plugin.list_paths'] = new \League\Flysystem\Plugin\ListPaths();
    }

    /*
     * Gets the 'oneup_flysystem.plugin.list_with' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \League\Flysystem\Plugin\ListWith A League\Flysystem\Plugin\ListWith instance
     */
    protected function getOneupFlysystem_Plugin_ListWithService()
    {
        return $this->services['oneup_flysystem.plugin.list_with'] = new \League\Flysystem\Plugin\ListWith();
    }

    /*
     * Gets the 'oneup_uploader.chunk_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Chunk\ChunkManager A Oneup\UploaderBundle\Uploader\Chunk\ChunkManager instance
     */
    protected function getOneupUploader_ChunkManagerService()
    {
        return $this->services['oneup_uploader.chunk_manager'] = new \Oneup\UploaderBundle\Uploader\Chunk\ChunkManager(array('maxage' => 604800, 'storage' => array('type' => 'filesystem', 'filesystem' => NULL, 'directory' => (__DIR__.'/uploader/chunks'), 'stream_wrapper' => NULL, 'sync_buffer_size' => '100K', 'prefix' => 'chunks'), 'load_distribution' => true), ${($_ = isset($this->services['oneup_uploader.chunks_storage']) ? $this->services['oneup_uploader.chunks_storage'] : $this->get('oneup_uploader.chunks_storage')) && false ?: '_'});
    }

    /*
     * Gets the 'oneup_uploader.chunks_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Chunk\Storage\FilesystemStorage A Oneup\UploaderBundle\Uploader\Chunk\Storage\FilesystemStorage instance
     */
    protected function getOneupUploader_ChunksStorageService()
    {
        return $this->services['oneup_uploader.chunks_storage'] = new \Oneup\UploaderBundle\Uploader\Chunk\Storage\FilesystemStorage((__DIR__.'/uploader/chunks'));
    }

    /*
     * Gets the 'oneup_uploader.controller.document' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FileUploadBundle\Controller\BlueimpController A Sidus\FileUploadBundle\Controller\BlueimpController instance
     */
    protected function getOneupUploader_Controller_DocumentService()
    {
        return $this->services['oneup_uploader.controller.document'] = new \Sidus\FileUploadBundle\Controller\BlueimpController($this, ${($_ = isset($this->services['oneup_uploader.storage.document']) ? $this->services['oneup_uploader.storage.document'] : $this->get('oneup_uploader.storage.document')) && false ?: '_'}, ${($_ = isset($this->services['oneup_uploader.error_handler.blueimp']) ? $this->services['oneup_uploader.error_handler.blueimp'] : $this->getOneupUploader_ErrorHandler_BlueimpService()) && false ?: '_'}, array('frontend' => 'blueimp', 'storage' => array('type' => 'flysystem', 'filesystem' => 'oneup_flysystem.documents_filesystem', 'service' => NULL, 'directory' => NULL, 'stream_wrapper' => NULL, 'sync_buffer_size' => '100K'), 'max_size' => 64000000, 'custom_frontend' => array('name' => NULL, 'class' => NULL), 'route_prefix' => '', 'allowed_mimetypes' => array(), 'disallowed_mimetypes' => array(), 'error_handler' => NULL, 'use_orphanage' => false, 'enable_progress' => false, 'enable_cancelation' => false, 'namer' => 'oneup_uploader.namer.uniqid', 'root_folder' => false), 'document');
    }

    /*
     * Gets the 'oneup_uploader.controller.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FileUploadBundle\Controller\BlueimpController A Sidus\FileUploadBundle\Controller\BlueimpController instance
     */
    protected function getOneupUploader_Controller_ImageService()
    {
        return $this->services['oneup_uploader.controller.image'] = new \Sidus\FileUploadBundle\Controller\BlueimpController($this, ${($_ = isset($this->services['oneup_uploader.storage.image']) ? $this->services['oneup_uploader.storage.image'] : $this->get('oneup_uploader.storage.image')) && false ?: '_'}, ${($_ = isset($this->services['oneup_uploader.error_handler.blueimp']) ? $this->services['oneup_uploader.error_handler.blueimp'] : $this->getOneupUploader_ErrorHandler_BlueimpService()) && false ?: '_'}, array('frontend' => 'blueimp', 'allowed_mimetypes' => array(0 => 'image/jpg', 1 => 'image/jpeg', 2 => 'image/png', 3 => 'image/gif'), 'storage' => array('type' => 'flysystem', 'filesystem' => 'oneup_flysystem.images_filesystem', 'service' => NULL, 'directory' => NULL, 'stream_wrapper' => NULL, 'sync_buffer_size' => '100K'), 'max_size' => 64000000, 'custom_frontend' => array('name' => NULL, 'class' => NULL), 'route_prefix' => '', 'disallowed_mimetypes' => array(), 'error_handler' => NULL, 'use_orphanage' => false, 'enable_progress' => false, 'enable_cancelation' => false, 'namer' => 'oneup_uploader.namer.uniqid', 'root_folder' => false), 'image');
    }

    /*
     * Gets the 'oneup_uploader.namer.uniqid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Naming\UniqidNamer A Oneup\UploaderBundle\Uploader\Naming\UniqidNamer instance
     */
    protected function getOneupUploader_Namer_UniqidService()
    {
        return $this->services['oneup_uploader.namer.uniqid'] = new \Oneup\UploaderBundle\Uploader\Naming\UniqidNamer();
    }

    /*
     * Gets the 'oneup_uploader.orphanage_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Orphanage\OrphanageManager A Oneup\UploaderBundle\Uploader\Orphanage\OrphanageManager instance
     */
    protected function getOneupUploader_OrphanageManagerService()
    {
        return $this->services['oneup_uploader.orphanage_manager'] = new \Oneup\UploaderBundle\Uploader\Orphanage\OrphanageManager($this, array('maxage' => 604800, 'directory' => (__DIR__.'/uploader/orphanage')));
    }

    /*
     * Gets the 'oneup_uploader.routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Routing\RouteLoader A Oneup\UploaderBundle\Routing\RouteLoader instance
     */
    protected function getOneupUploader_Routing_LoaderService()
    {
        return $this->services['oneup_uploader.routing.loader'] = new \Oneup\UploaderBundle\Routing\RouteLoader(array('image' => array(0 => 'oneup_uploader.controller.image', 1 => array('enable_progress' => false, 'enable_cancelation' => false, 'route_prefix' => '')), 'document' => array(0 => 'oneup_uploader.controller.document', 1 => array('enable_progress' => false, 'enable_cancelation' => false, 'route_prefix' => ''))));
    }

    /*
     * Gets the 'oneup_uploader.storage.document' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Storage\FlysystemStorage A Oneup\UploaderBundle\Uploader\Storage\FlysystemStorage instance
     */
    protected function getOneupUploader_Storage_DocumentService()
    {
        return $this->services['oneup_uploader.storage.document'] = new \Oneup\UploaderBundle\Uploader\Storage\FlysystemStorage(${($_ = isset($this->services['oneup_flysystem.documents_filesystem']) ? $this->services['oneup_flysystem.documents_filesystem'] : $this->get('oneup_flysystem.documents_filesystem')) && false ?: '_'}, 102400.0, NULL, '');
    }

    /*
     * Gets the 'oneup_uploader.storage.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Storage\FlysystemStorage A Oneup\UploaderBundle\Uploader\Storage\FlysystemStorage instance
     */
    protected function getOneupUploader_Storage_ImageService()
    {
        return $this->services['oneup_uploader.storage.image'] = new \Oneup\UploaderBundle\Uploader\Storage\FlysystemStorage(${($_ = isset($this->services['oneup_flysystem.images_filesystem']) ? $this->services['oneup_flysystem.images_filesystem'] : $this->get('oneup_flysystem.images_filesystem')) && false ?: '_'}, 102400.0, NULL, '');
    }

    /*
     * Gets the 'oneup_uploader.templating.uploader_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Templating\Helper\UploaderHelper A Oneup\UploaderBundle\Templating\Helper\UploaderHelper instance
     */
    protected function getOneupUploader_Templating_UploaderHelperService()
    {
        return $this->services['oneup_uploader.templating.uploader_helper'] = new \Oneup\UploaderBundle\Templating\Helper\UploaderHelper(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, array('image' => 33554432.0, 'document' => 33554432.0));
    }

    /*
     * Gets the 'oneup_uploader.twig.extension.uploader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Twig\Extension\UploaderExtension A Oneup\UploaderBundle\Twig\Extension\UploaderExtension instance
     */
    protected function getOneupUploader_Twig_Extension_UploaderService()
    {
        return $this->services['oneup_uploader.twig.extension.uploader'] = new \Oneup\UploaderBundle\Twig\Extension\UploaderExtension(${($_ = isset($this->services['oneup_uploader.templating.uploader_helper']) ? $this->services['oneup_uploader.templating.uploader_helper'] : $this->get('oneup_uploader.templating.uploader_helper')) && false ?: '_'});
    }

    /*
     * Gets the 'oneup_uploader.validation_listener.allowed_mimetype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\EventListener\AllowedMimetypeValidationListener A Oneup\UploaderBundle\EventListener\AllowedMimetypeValidationListener instance
     */
    protected function getOneupUploader_ValidationListener_AllowedMimetypeService()
    {
        return $this->services['oneup_uploader.validation_listener.allowed_mimetype'] = new \Oneup\UploaderBundle\EventListener\AllowedMimetypeValidationListener();
    }

    /*
     * Gets the 'oneup_uploader.validation_listener.disallowed_mimetype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\EventListener\DisallowedMimetypeValidationListener A Oneup\UploaderBundle\EventListener\DisallowedMimetypeValidationListener instance
     */
    protected function getOneupUploader_ValidationListener_DisallowedMimetypeService()
    {
        return $this->services['oneup_uploader.validation_listener.disallowed_mimetype'] = new \Oneup\UploaderBundle\EventListener\DisallowedMimetypeValidationListener();
    }

    /*
     * Gets the 'oneup_uploader.validation_listener.max_size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\EventListener\MaxSizeValidationListener A Oneup\UploaderBundle\EventListener\MaxSizeValidationListener instance
     */
    protected function getOneupUploader_ValidationListener_MaxSizeService()
    {
        return $this->services['oneup_uploader.validation_listener.max_size'] = new \Oneup\UploaderBundle\EventListener\MaxSizeValidationListener();
    }

    /*
     * Gets the 'pagerfanta.convert_not_valid_current_page_to_not_found_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener A WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener instance
     */
    protected function getPagerfanta_ConvertNotValidCurrentPageToNotFoundListenerService()
    {
        return $this->services['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener();
    }

    /*
     * Gets the 'pagerfanta.convert_not_valid_max_per_page_to_not_found_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener A WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener instance
     */
    protected function getPagerfanta_ConvertNotValidMaxPerPageToNotFoundListenerService()
    {
        return $this->services['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener();
    }

    /*
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, ${($_ = isset($this->services['cache.property_access']) ? $this->services['cache.property_access'] : $this->getCache_PropertyAccessService()) && false ?: '_'});
    }

    /*
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /*
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[2].'/config/routing.yml'), array('cache_dir' => __DIR__, 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdProjectContainerUrlMatcher', 'strict_requirements' => NULL), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.router']) ? $this->services['monolog.logger.router'] : $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->get('config_cache_factory')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance
     */
    protected function getRouting_LoaderService()
    {
        $a = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'};
        $b = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'};

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Config\Loader\GlobFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader(${($_ = isset($this->services['oneup_uploader.routing.loader']) ? $this->services['oneup_uploader.routing.loader'] : $this->get('oneup_uploader.routing.loader')) && false ?: '_'});
        $d->addLoader(${($_ = isset($this->services['sidus_admin.routing.route_loader']) ? $this->services['sidus_admin.routing.route_loader'] : $this->get('sidus_admin.routing.route_loader')) && false ?: '_'});

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $d);
    }

    /*
     * Gets the 'security.authentication.guard_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler A Symfony\Component\Security\Guard\GuardAuthenticatorHandler instance
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /*
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session')) && false ?: '_'}));
    }

    /*
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('CleverAge\\EAVManager\\UserBundle\\Entity\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => array(0 => 13))));
    }

    /*
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener A Symfony\Bundle\SecurityBundle\EventListener\FirewallListener instance
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->get('security.firewall.map.context.dev')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->get('security.firewall.map.context.main')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d']) ? $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] : $this->getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()) && false ?: '_'};
            yield 'security.firewall.map.context.main' => NULL;
        }, 2)), ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /*
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d', false, '', '', '', '', '', '', array()));
    }

    /*
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'};
        $c = ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $d = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $e = ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $f = ${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'};
        $g = ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'};

        $h = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$');

        $i = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login/reset-password');

        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login/lost-password');

        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/');

        $l = new \Symfony\Component\Security\Http\AccessMap();
        $l->add($h, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $l->add($i, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $l->add($j, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $l->add($k, array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);

        $m = new \Symfony\Component\Security\Http\HttpUtils($e, $e);

        $n = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $m, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($m, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'logout'));
        $n->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        $o = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($m, array());
        $o->setOptions(array('login_path' => 'login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $o->setProviderKey('main');

        $p = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($f, $m, array(), $a);
        $p->setOptions(array('login_path' => 'login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($l, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => ${($_ = isset($this->services['eavmanager_user.user.provider']) ? $this->services['eavmanager_user.user.provider'] : $this->get('eavmanager_user.user.provider')) && false ?: '_'}), 'main', $a, $c, $d), 2 => $n, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $g, new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), $m, 'main', $o, $p, array('check_path' => 'login', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $a, $c, ${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager')) && false ?: '_'}), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '5963aba619a763.40199936', $a, $g), 5 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'}, $l, $g)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $d, $m, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $m, 'login', false), NULL, NULL, $a, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'eavmanager_user.user.provider', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, array(0 => 'logout', 1 => 'form_login', 2 => 'anonymous')));
    }

    /*
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /*
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /*
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\SecurityBundle\Security\Core\Role\RoleHierarchy A CleverAge\EAVManager\SecurityBundle\Security\Core\Role\RoleHierarchy instance
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \CleverAge\EAVManager\SecurityBundle\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_DATA_ADMIN', 1 => 'ROLE_USER_MANAGER', 2 => 'ROLE_MEDIA_MANAGER', 3 => 'ROLE_PROCESS_MANAGER', 4 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN'), 'ROLE_DATA_ADMIN' => array(0 => 'ROLE_DATA_MANAGER')));
    }

    /*
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /*
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /*
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
    }

    /*
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /*
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->get('sensio_framework_extra.converter.manager')) && false ?: '_'}, true);
    }

    /*
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.doctrine.orm']) ? $this->services['sensio_framework_extra.converter.doctrine.orm'] : $this->get('sensio_framework_extra.converter.doctrine.orm')) && false ?: '_'}, 0, 'doctrine.orm');
        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.datetime']) ? $this->services['sensio_framework_extra.converter.datetime'] : $this->get('sensio_framework_extra.converter.datetime')) && false ?: '_'}, 0, 'datetime');
        $instance->add(new \Sidus\EAVModelBundle\Request\ParamConverter\DataParamConverter('MyEML\\EAVModelBundle\\Entity\\Data', ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}), 0, NULL);
        $instance->add(new \Sidus\EAVModelBundle\Request\ParamConverter\FamilyParamConverter(${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}), 0, NULL);
        $instance->add(new \Sidus\EAVModelBundle\Request\ParamConverter\AttributeParamConverter(${($_ = isset($this->services['sidus_eav_model.attribute.registry']) ? $this->services['sidus_eav_model.attribute.registry'] : $this->get('sidus_eav_model.attribute.registry')) && false ?: '_'}), 0, NULL);

        return $instance;
    }

    /*
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /*
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /*
     * Gets the 'serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Serializer\Serializer A Symfony\Component\Serializer\Serializer instance
     */
    protected function getSerializerService()
    {
        $a = ${($_ = isset($this->services['serializer.mapping.cache_class_metadata_factory']) ? $this->services['serializer.mapping.cache_class_metadata_factory'] : $this->getSerializer_Mapping_CacheClassMetadataFactoryService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'};

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => ${($_ = isset($this->services['sidus_eav_model.denormalizer.family']) ? $this->services['sidus_eav_model.denormalizer.family'] : $this->get('sidus_eav_model.denormalizer.family')) && false ?: '_'}, 1 => ${($_ = isset($this->services['sidus_eav_model.normalizer.data.flat']) ? $this->services['sidus_eav_model.normalizer.data.flat'] : $this->get('sidus_eav_model.normalizer.data.flat')) && false ?: '_'}, 2 => ${($_ = isset($this->services['sidus_eav_model.normalizer.family.flat']) ? $this->services['sidus_eav_model.normalizer.family.flat'] : $this->get('sidus_eav_model.normalizer.family.flat')) && false ?: '_'}, 3 => ${($_ = isset($this->services['sidus_eav_model.normalizer.attribute.flat']) ? $this->services['sidus_eav_model.normalizer.attribute.flat'] : $this->get('sidus_eav_model.normalizer.attribute.flat')) && false ?: '_'}, 4 => ${($_ = isset($this->services['eavmanager_user.normalizer.user.flat']) ? $this->services['eavmanager_user.normalizer.user.flat'] : $this->get('eavmanager_user.normalizer.user.flat')) && false ?: '_'}, 5 => ${($_ = isset($this->services['sidus_eav_model.normalizer.data']) ? $this->services['sidus_eav_model.normalizer.data'] : $this->getSidusEavModel_Normalizer_DataService()) && false ?: '_'}, 6 => ${($_ = isset($this->services['sidus_eav_model.normalizer.family']) ? $this->services['sidus_eav_model.normalizer.family'] : $this->getSidusEavModel_Normalizer_FamilyService()) && false ?: '_'}, 7 => ${($_ = isset($this->services['sidus_eav_model.normalizer.attribute']) ? $this->services['sidus_eav_model.normalizer.attribute'] : $this->getSidusEavModel_Normalizer_AttributeService()) && false ?: '_'}, 8 => new \Sidus\EAVModelBundle\Serializer\Denormalizer\EAVDataDenormalizer($a, NULL, $b, NULL, ${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}, ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.serializer.entity_provider']) ? $this->services['sidus_eav_model.serializer.entity_provider'] : $this->get('sidus_eav_model.serializer.entity_provider')) && false ?: '_'}, array(0 => 'createdBy', 1 => 'updatedBy', 2 => 'createdAt', 3 => 'updatedAt', 4 => 'label', 5 => 'id', 6 => 'identifier', 7 => 'family', 8 => 'familyCode', 9 => 'refererValues', 10 => 'refererDatas', 11 => 'stringIdentifier', 12 => 'integerIdentifier', 13 => 'values')), 9 => ${($_ = isset($this->services['eavmanager_user.normalizer.user']) ? $this->services['eavmanager_user.normalizer.user'] : $this->getEavmanagerUser_Normalizer_UserService()) && false ?: '_'}, 10 => new \CleverAge\EAVManager\AssetBundle\Serializer\Normalizer\ResourceNormalizer($a, NULL, $b, NULL, ${($_ = isset($this->services['sidus_file_upload.resource.manager']) ? $this->services['sidus_file_upload.resource.manager'] : $this->get('sidus_file_upload.resource.manager')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.serializer.handler.max_depth']) ? $this->services['sidus_eav_model.serializer.handler.max_depth'] : $this->get('sidus_eav_model.serializer.handler.max_depth')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.serializer.handler.by_reference']) ? $this->services['sidus_eav_model.serializer.handler.by_reference'] : $this->get('sidus_eav_model.serializer.handler.by_reference')) && false ?: '_'}), 11 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 12 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 13 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(), 14 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 15 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($a, NULL, $b, NULL)), array(0 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\CsvEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\JsonEncoder()));
    }

    /*
     * Gets the 'serializer.mapping.cache.symfony' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter A Symfony\Component\Cache\Adapter\PhpArrayAdapter instance
     */
    protected function getSerializer_Mapping_Cache_SymfonyService()
    {
        return $this->services['serializer.mapping.cache.symfony'] = \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/serialization.php'), ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
    }

    /*
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(${($_ = isset($this->services['session.storage.native']) ? $this->services['session.storage.native'] : $this->get('session.storage.native')) && false ?: '_'}, new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /*
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[3].'/var/sessions/prod'));
    }

    /*
     * Gets the 'session.handler.memcached' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\MemcachedSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\MemcachedSessionHandler instance
     */
    protected function getSession_Handler_MemcachedService()
    {
        return $this->services['session.handler.memcached'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\MemcachedSessionHandler(${($_ = isset($this->services['session.memcached']) ? $this->services['session.memcached'] : $this->get('session.memcached')) && false ?: '_'}, array('prefix' => 'sess', 'expiretime' => 3600));
    }

    /*
     * Gets the 'session.memcached' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Memcached A Memcached instance
     */
    protected function getSession_MemcachedService()
    {
        $this->services['session.memcached'] = $instance = new \Memcached('sess');

        $instance->addServer('localhost', 11211);

        return $instance;
    }

    /*
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /*
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), ${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener A Symfony\Component\HttpKernel\EventListener\SessionListener instance
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        })));
    }

    /*
     * Gets the 'sidus_admin.configuration.admin.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\AdminBundle\Configuration\AdminConfigurationHandler A Sidus\AdminBundle\Configuration\AdminConfigurationHandler instance
     */
    protected function getSidusAdmin_Configuration_Admin_HandlerService()
    {
        $this->services['sidus_admin.configuration.admin.handler'] = $instance = new \Sidus\AdminBundle\Configuration\AdminConfigurationHandler();

        $instance->addAdmin(new \Sidus\AdminBundle\Admin\Admin('media', array('action_class' => 'Sidus\\AdminBundle\\Admin\\Action', 'controller' => 'CleverAgeEAVManagerAdminBundle:EAVData', 'entity' => 'MyEML\\EAVModelBundle\\Entity\\Data', 'prefix' => '/medias', 'actions' => array('list' => array('path' => '/{familyCode}/list', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'create' => array('path' => '/{familyCode}/create', 'form_type' => 'Sidus\\EAVBootstrapBundle\\Form\\Type\\TabbedDataType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'edit' => array('path' => '/{familyCode}/{id}/edit', 'form_type' => 'Sidus\\EAVBootstrapBundle\\Form\\Type\\TabbedDataType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'delete' => array('path' => '/{familyCode}/{id}/delete', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL)), 'options' => array('hidden' => true, 'icon' => 'image', 'families' => array('Image' => NULL, 'Document' => NULL)), 'base_template' => NULL, 'fallback_template_directory' => NULL)));
        $instance->addAdmin(new \Sidus\AdminBundle\Admin\Admin('media_browser', array('action_class' => 'Sidus\\AdminBundle\\Admin\\Action', 'controller' => 'CleverAgeEAVManagerAdminBundle:EAVData', 'entity' => 'MyEML\\EAVModelBundle\\Entity\\Data', 'prefix' => '/medias_browser', 'actions' => array('list' => array('path' => '/{familyCode}/list', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'create' => array('path' => '/{familyCode}/create', 'form_type' => 'Sidus\\EAVBootstrapBundle\\Form\\Type\\TabbedDataType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'edit' => array('path' => '/{familyCode}/{id}/edit', 'form_type' => 'Sidus\\EAVBootstrapBundle\\Form\\Type\\TabbedDataType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'delete' => array('path' => '/{familyCode}/{id}/delete', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL)), 'options' => array('hidden' => true, 'allow_back' => true, 'families' => array('Image' => array('datagrid' => 'image_browser'), 'Document' => array('datagrid' => 'document_browser'))), 'base_template' => NULL, 'fallback_template_directory' => NULL)));
        $instance->addAdmin(new \Sidus\AdminBundle\Admin\Admin('resource', array('action_class' => 'Sidus\\AdminBundle\\Admin\\Action', 'controller' => 'CleverAgeEAVManagerAdminBundle:GenericAdmin', 'entity' => 'CleverAge\\EAVManager\\AssetBundle\\Entity\\Document', 'prefix' => '/resources', 'actions' => array('list' => array('path' => '/', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'delete' => array('path' => '/{id}/delete', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL)), 'options' => array('hidden' => true), 'base_template' => NULL, 'fallback_template_directory' => NULL)));
        $instance->addAdmin(new \Sidus\AdminBundle\Admin\Admin('user', array('action_class' => 'Sidus\\AdminBundle\\Admin\\Action', 'controller' => 'CleverAgeEAVManagerAdminBundle:User', 'entity' => 'CleverAge\\EAVManager\\UserBundle\\Entity\\User', 'prefix' => '/users', 'actions' => array('list' => array('path' => '/', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'create' => array('path' => '/create', 'form_type' => 'CleverAge\\EAVManager\\UserBundle\\Form\\Type\\UserType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'edit' => array('path' => '/{id}/edit', 'form_type' => 'CleverAge\\EAVManager\\UserBundle\\Form\\Type\\UserType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'delete' => array('path' => '/{id}/delete', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'resetPassword' => array('path' => '/{id}/reset-password', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL)), 'options' => array('hidden' => true), 'base_template' => NULL, 'fallback_template_directory' => NULL)));
        $instance->addAdmin(new \Sidus\AdminBundle\Admin\Admin('group', array('action_class' => 'Sidus\\AdminBundle\\Admin\\Action', 'controller' => 'CleverAgeEAVManagerAdminBundle:User', 'entity' => 'CleverAge\\EAVManager\\UserBundle\\Entity\\Group', 'prefix' => '/groups', 'actions' => array('list' => array('path' => '/', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'create' => array('path' => '/create', 'form_type' => 'CleverAge\\EAVManager\\UserBundle\\Form\\Type\\GroupType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'edit' => array('path' => '/{id}/edit', 'form_type' => 'CleverAge\\EAVManager\\UserBundle\\Form\\Type\\GroupType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'delete' => array('path' => '/{id}/delete', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL)), 'options' => array('hidden' => true), 'base_template' => NULL, 'fallback_template_directory' => NULL)));
        $instance->addAdmin(new \Sidus\AdminBundle\Admin\Admin('process', array('action_class' => 'Sidus\\AdminBundle\\Admin\\Action', 'controller' => 'CleverAgeEAVManagerAdminBundle:GenericAdmin', 'entity' => 'CleverAge\\ProcessBundle\\Entity\\ProcessHistory', 'prefix' => '/process', 'actions' => array('list' => array('path' => '/', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'show' => array('path' => '/{id}/show', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'delete' => array('path' => '/{id}/delete', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL)), 'options' => array('icon' => 'history', 'hidden' => true), 'base_template' => NULL, 'fallback_template_directory' => NULL)));
        $instance->addAdmin(new \Sidus\AdminBundle\Admin\Admin('task', array('action_class' => 'Sidus\\AdminBundle\\Admin\\Action', 'controller' => 'CleverAgeEAVManagerAdminBundle:GenericAdmin', 'entity' => 'CleverAge\\ProcessBundle\\Entity\\TaskHistory', 'prefix' => '/task', 'actions' => array('list' => array('path' => '/', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'show' => array('path' => '/{id}/show', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'delete' => array('path' => '/{id}/delete', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL)), 'options' => array('icon' => 'tasks', 'hidden' => true), 'base_template' => NULL, 'fallback_template_directory' => NULL)));
        $instance->addAdmin(new \Sidus\AdminBundle\Admin\Admin('variant', array('action_class' => 'Sidus\\AdminBundle\\Admin\\Action', 'controller' => 'CleverAgeEAVManagerAdminBundle:Variant', 'entity' => 'MyEML\\EAVModelBundle\\Entity\\Data', 'prefix' => '/variant', 'actions' => array('select' => array('path' => '/{attribute}/{parentId}/select', 'form_type' => 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\VariantFamilySelector', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'create' => array('path' => '/{attribute}/{parentId}/{familyCode}/create', 'form_type' => 'Sidus\\EAVVariantBundle\\Form\\Type\\VariantType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'edit' => array('path' => '/{attribute}/{parentId}/{familyCode}/{id}/edit', 'form_type' => 'Sidus\\EAVVariantBundle\\Form\\Type\\VariantType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'delete' => array('path' => '/{attribute}/{parentId}/{familyCode}/{id}/delete', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL)), 'options' => array('hidden' => true, 'datagrid' => 'base'), 'base_template' => NULL, 'fallback_template_directory' => NULL)));
        $instance->addAdmin(new \Sidus\AdminBundle\Admin\Admin('_data', array('action_class' => 'Sidus\\AdminBundle\\Admin\\Action', 'controller' => 'CleverAgeEAVManagerAdminBundle:InlineEAVData', 'entity' => 'MyEML\\EAVModelBundle\\Entity\\Data', 'prefix' => '/_data', 'actions' => array('create' => array('path' => '/{familyCode}/create', 'form_type' => 'Sidus\\EAVBootstrapBundle\\Form\\Type\\TabbedDataType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'edit' => array('path' => '/{familyCode}/{id}/edit', 'form_type' => 'Sidus\\EAVBootstrapBundle\\Form\\Type\\TabbedDataType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'editInline' => array('path' => '/{id}/edit', 'form_type' => 'Sidus\\EAVBootstrapBundle\\Form\\Type\\TabbedDataType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'delete' => array('path' => '/{familyCode}/{id}/delete', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL)), 'options' => array('hidden' => true), 'base_template' => NULL, 'fallback_template_directory' => NULL)));
        $instance->addAdmin(new \Sidus\AdminBundle\Admin\Admin('tree', array('action_class' => 'Sidus\\AdminBundle\\Admin\\Action', 'controller' => 'CleverAgeEAVManagerAdminBundle:EAVData', 'entity' => 'MyEML\\EAVModelBundle\\Entity\\Data', 'prefix' => '/tree', 'actions' => array('index' => array('path' => '/', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'list' => array('path' => '/{familyCode}/list', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'create' => array('path' => '/{familyCode}/create', 'form_type' => 'Sidus\\EAVBootstrapBundle\\Form\\Type\\TabbedDataType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'edit' => array('path' => '/{familyCode}/{id}/edit', 'form_type' => 'Sidus\\EAVBootstrapBundle\\Form\\Type\\TabbedDataType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'clone' => array('path' => '/{familyCode}/{id}/clone', 'form_type' => 'Sidus\\EAVBootstrapBundle\\Form\\Type\\TabbedDataType', 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL), 'delete' => array('path' => '/{familyCode}/{id}/delete', 'form_type' => NULL, 'template' => NULL, 'defaults' => array(), 'requirements' => array(), 'options' => array(), 'host' => '', 'schemes' => array(), 'methods' => array(), 'condition' => NULL)), 'options' => array('icon' => 'sitemap', 'datagrid' => 'tree', 'families' => array('Node' => NULL)), 'base_template' => NULL, 'fallback_template_directory' => NULL)));

        return $instance;
    }

    /*
     * Gets the 'sidus_admin.entity.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\AdminBundle\Entity\AdminEntityMatcher A CleverAge\EAVManager\AdminBundle\Entity\AdminEntityMatcher instance
     */
    protected function getSidusAdmin_Entity_MatcherService()
    {
        return $this->services['sidus_admin.entity.matcher'] = new \CleverAge\EAVManager\AdminBundle\Entity\AdminEntityMatcher(${($_ = isset($this->services['sidus_admin.configuration.admin.handler']) ? $this->services['sidus_admin.configuration.admin.handler'] : $this->get('sidus_admin.configuration.admin.handler')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_admin.kernel.event.controller_injecter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\AdminBundle\Event\AdminControllerInjecter A Sidus\AdminBundle\Event\AdminControllerInjecter instance
     */
    protected function getSidusAdmin_Kernel_Event_ControllerInjecterService()
    {
        return $this->services['sidus_admin.kernel.event.controller_injecter'] = new \Sidus\AdminBundle\Event\AdminControllerInjecter(${($_ = isset($this->services['sidus_admin.configuration.admin.handler']) ? $this->services['sidus_admin.configuration.admin.handler'] : $this->get('sidus_admin.configuration.admin.handler')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_admin.routing.admin_router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\AdminBundle\Routing\AdminRouter A Sidus\AdminBundle\Routing\AdminRouter instance
     */
    protected function getSidusAdmin_Routing_AdminRouterService()
    {
        return $this->services['sidus_admin.routing.admin_router'] = new \Sidus\AdminBundle\Routing\AdminRouter(${($_ = isset($this->services['sidus_admin.configuration.admin.handler']) ? $this->services['sidus_admin.configuration.admin.handler'] : $this->get('sidus_admin.configuration.admin.handler')) && false ?: '_'}, ${($_ = isset($this->services['sidus_admin.entity.matcher']) ? $this->services['sidus_admin.entity.matcher'] : $this->get('sidus_admin.entity.matcher')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_admin.routing.route_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\AdminBundle\Routing\AdminRouteLoader A Sidus\AdminBundle\Routing\AdminRouteLoader instance
     */
    protected function getSidusAdmin_Routing_RouteLoaderService()
    {
        return $this->services['sidus_admin.routing.route_loader'] = new \Sidus\AdminBundle\Routing\AdminRouteLoader(${($_ = isset($this->services['sidus_admin.configuration.admin.handler']) ? $this->services['sidus_admin.configuration.admin.handler'] : $this->get('sidus_admin.configuration.admin.handler')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_admin.templating.template_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\AdminBundle\Twig\TemplateResolver A Sidus\AdminBundle\Twig\TemplateResolver instance
     */
    protected function getSidusAdmin_Templating_TemplateResolverService()
    {
        return $this->services['sidus_admin.templating.template_resolver'] = new \Sidus\AdminBundle\Twig\TemplateResolver(${($_ = isset($this->services['sidus_admin.configuration.admin.handler']) ? $this->services['sidus_admin.configuration.admin.handler'] : $this->get('sidus_admin.configuration.admin.handler')) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, 'CleverAgeEAVManagerAdminBundle:Base', ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_admin.twig.extension.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\AdminBundle\Twig\AdminExtension A Sidus\AdminBundle\Twig\AdminExtension instance
     */
    protected function getSidusAdmin_Twig_Extension_AdminService()
    {
        return $this->services['sidus_admin.twig.extension.admin'] = new \Sidus\AdminBundle\Twig\AdminExtension(${($_ = isset($this->services['sidus_admin.configuration.admin.handler']) ? $this->services['sidus_admin.configuration.admin.handler'] : $this->get('sidus_admin.configuration.admin.handler')) && false ?: '_'}, ${($_ = isset($this->services['sidus_admin.entity.matcher']) ? $this->services['sidus_admin.entity.matcher'] : $this->get('sidus_admin.entity.matcher')) && false ?: '_'}, ${($_ = isset($this->services['sidus_admin.routing.admin_router']) ? $this->services['sidus_admin.routing.admin_router'] : $this->get('sidus_admin.routing.admin_router')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_data_grid.datagrid_configuration.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\DataGridBundle\Configuration\DataGridConfigurationHandler A Sidus\DataGridBundle\Configuration\DataGridConfigurationHandler instance
     */
    protected function getSidusDataGrid_DatagridConfiguration_HandlerService()
    {
        $a = ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'};
        $b = ${($_ = isset($this->services['sidus_filter.filter.factory']) ? $this->services['sidus_filter.filter.factory'] : $this->get('sidus_filter.filter.factory')) && false ?: '_'};
        $c = ${($_ = isset($this->services['sidus_data_grid.renderer.twig']) ? $this->services['sidus_data_grid.renderer.twig'] : $this->get('sidus_data_grid.renderer.twig')) && false ?: '_'};
        $d = ${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'};
        $e = ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'};

        $this->services['sidus_data_grid.datagrid_configuration.handler'] = $instance = new \Sidus\DataGridBundle\Configuration\DataGridConfigurationHandler();

        $instance->addDataGrid(new \Sidus\DataGridBundle\Model\DataGrid('user', array('filter_config' => new \Sidus\FilterBundle\Configuration\FilterConfigurationHandler('user', $a, $b, array('entity' => 'CleverAgeEAVManagerUserBundle:User', 'sortable' => array(0 => 'id', 1 => 'createdAt', 2 => 'username', 3 => 'email'), 'fields' => array('createdAt' => array('type' => 'date_range', 'label' => 'Création', 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'email' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'username' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL)), 'results_per_page' => 15, 'default_sort' => array())), 'columns' => array('id' => array('label' => '#', 'template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'username' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'email' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'lastName' => array('property_path' => 'data.lastName', 'template' => NULL, 'sort_column' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'firstName' => array('property_path' => 'data.firstName', 'template' => NULL, 'sort_column' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'printableRoles' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'createdAt' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'actions' => array('template' => 'CleverAgeEAVManagerAdminBundle:User:partials/list.row.actions.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array())), 'actions' => array('create' => array('form_type' => 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\AdminLink', 'label' => 'admin.action.create.label', 'action' => 'create', 'icon' => 'plus', 'attr' => array('class' => 'btn-primary', 'data-target-element' => '#tg_right'))), 'form_theme' => 'SidusDataGridBundle:Form:filter_theme.html.twig', 'renderer' => $c, 'submit_button' => array(), 'reset_button' => array())));
        $instance->addDataGrid(new \Sidus\DataGridBundle\Model\DataGrid('group', array('filter_config' => new \Sidus\FilterBundle\Configuration\FilterConfigurationHandler('group', $a, $b, array('entity' => 'CleverAgeEAVManagerUserBundle:Group', 'sortable' => array(0 => 'id', 1 => 'createdAt', 2 => 'name', 3 => 'roles'), 'fields' => array('createdAt' => array('type' => 'date_range', 'label' => 'Création', 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'name' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL)), 'results_per_page' => 15, 'default_sort' => array())), 'columns' => array('id' => array('label' => '#', 'template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'name' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'roles' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'createdAt' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'actions' => array('template' => 'CleverAgeEAVManagerAdminBundle:Base:partials/list.row.actions.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array())), 'actions' => array('create' => array('form_type' => 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\AdminLink', 'label' => 'admin.action.create.label', 'action' => 'create', 'icon' => 'plus', 'attr' => array('class' => 'btn-primary', 'data-target-element' => '#tg_right'))), 'form_theme' => 'SidusDataGridBundle:Form:filter_theme.html.twig', 'renderer' => $c, 'submit_button' => array(), 'reset_button' => array())));
        $instance->addDataGrid(new \Sidus\DataGridBundle\Model\DataGrid('resource', array('filter_config' => new \Sidus\FilterBundle\Configuration\FilterConfigurationHandler('resource', $a, $b, array('entity' => 'CleverAge\\EAVManager\\AssetBundle\\Entity\\Document', 'sortable' => array(0 => 'id', 1 => 'originalFileName', 2 => 'fileSize', 3 => 'mimeType', 4 => 'fileModifiedAt'), 'default_sort' => array('id' => 'DESC'), 'fields' => array('originalFileName' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'mimeType' => array('type' => 'choice', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'fileModifiedAt' => array('type' => 'date_range', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL)), 'results_per_page' => 15)), 'columns' => array('id' => array('label' => '#', 'template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'originalFileName' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'type' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'fileSize' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'mimeType' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'fileModifiedAt' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'actions' => array('template' => 'CleverAgeEAVManagerAdminBundle:Asset/partials:resource.row.actions.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array())), 'form_theme' => 'SidusDataGridBundle:Form:filter_theme.html.twig', 'renderer' => $c, 'submit_button' => array(), 'reset_button' => array())));
        $instance->addDataGrid(new \Sidus\DataGridBundle\Model\DataGrid('process', array('filter_config' => new \Sidus\FilterBundle\Configuration\FilterConfigurationHandler('process', $a, $b, array('entity' => 'CleverAge\\ProcessBundle\\Entity\\ProcessHistory', 'sortable' => array(0 => 'processCode', 1 => 'startDate', 2 => 'endDate', 3 => 'state'), 'default_sort' => array('startDate' => 'DESC'), 'fields' => array('processCode' => array('type' => 'choice', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'startDate' => array('type' => 'date_range', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'endDate' => array('type' => 'date_range', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'state' => array('type' => 'choice', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL)), 'results_per_page' => 15)), 'columns' => array('processCode' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'startDate' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'endDate' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'state' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'actions' => array('template' => 'CleverAgeEAVManagerAdminBundle:Process/partials:process.row.actions.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array())), 'form_theme' => 'SidusDataGridBundle:Form:filter_theme.html.twig', 'renderer' => $c, 'submit_button' => array(), 'reset_button' => array())));
        $instance->addDataGrid(new \Sidus\DataGridBundle\Model\DataGrid('task', array('filter_config' => new \Sidus\FilterBundle\Configuration\FilterConfigurationHandler('task', $a, $b, array('entity' => 'CleverAge\\ProcessBundle\\Entity\\TaskHistory', 'sortable' => array(0 => 'taskCode', 1 => 'message', 2 => 'loggedAt', 3 => 'level', 4 => 'reference'), 'default_sort' => array('loggedAt' => 'DESC'), 'fields' => array('taskCode' => array('type' => 'choice', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'message' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'loggedAt' => array('type' => 'date_range', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'level' => array('type' => 'choice', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'reference' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL)), 'results_per_page' => 15)), 'columns' => array('processCode' => array('property_path' => 'processHistory.processCode', 'template' => NULL, 'sort_column' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'taskCode' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'message' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'loggedAt' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'level' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'reference' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'actions' => array('template' => 'CleverAgeEAVManagerAdminBundle:Process/partials:task.row.actions.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array())), 'form_theme' => 'SidusDataGridBundle:Form:filter_theme.html.twig', 'renderer' => $c, 'submit_button' => array(), 'reset_button' => array())));
        $instance->addDataGrid(new \Sidus\EAVDataGridBundle\Model\DataGrid('baseasset', array('family' => 'BaseAsset', 'filter_config' => new \Sidus\EAVFilterBundle\Configuration\EAVFilterConfigurationHandler('baseasset', $a, $b, array('sortable' => array(0 => 'id', 1 => 'createdAt', 2 => 'updatedAt'), 'fields' => array(), 'family' => 'BaseAsset', 'entity' => NULL, 'results_per_page' => 15, 'default_sort' => array()), $d), 'columns' => array('id' => array('label' => '#', 'template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'label' => array('template' => 'CleverAgeEAVManagerAdminBundle:Base:partials/clickable.column.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'createdAt' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'updatedAt' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'actions' => array('template' => 'CleverAgeEAVManagerAdminBundle:EAVData:partials/list.row.actions.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array())), 'actions' => array('create' => array('form_type' => 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\AdminLink', 'label' => 'admin.action.create.label', 'action' => 'create', 'icon' => 'plus', 'attr' => array('class' => 'btn-primary', 'data-target-element' => '#tg_right'))), 'reset_button' => array('attr' => array('data-target-element' => '#tg_center')), 'form_theme' => 'SidusDataGridBundle:Form:filter_theme.html.twig', 'renderer' => $c, 'submit_button' => array()), $e));
        $instance->addDataGrid(new \Sidus\EAVDataGridBundle\Model\DataGrid('document', array('family' => 'Document', 'filter_config' => new \Sidus\EAVFilterBundle\Configuration\EAVFilterConfigurationHandler('document', $a, $b, array('sortable' => array(0 => 'id', 1 => 'title', 2 => 'mimeType', 3 => 'fileName'), 'fields' => array('title' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'fileName' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'mimeType' => array('type' => 'choice', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL)), 'family' => 'Document', 'entity' => NULL, 'results_per_page' => 15, 'default_sort' => array()), $d), 'columns' => array('id' => array('label' => '#', 'template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'title' => array('template' => 'CleverAgeEAVManagerAdminBundle:Base:partials/clickable.column.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'fileSize' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'mimeType' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'fileName' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'actions' => array('template' => 'CleverAgeEAVManagerAdminBundle:EAVData:partials/list.row.actions.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array())), 'actions' => array('create' => array('form_type' => 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\AdminLink', 'label' => 'admin.action.create.label', 'action' => 'create', 'icon' => 'plus', 'attr' => array('class' => 'btn-primary', 'data-target-element' => '#tg_right'))), 'reset_button' => array(), 'form_theme' => 'SidusDataGridBundle:Form:filter_theme.html.twig', 'renderer' => $c, 'submit_button' => array()), $e));
        $instance->addDataGrid(new \Sidus\EAVDataGridBundle\Model\DataGrid('image', array('family' => 'Image', 'filter_config' => new \Sidus\EAVFilterBundle\Configuration\EAVFilterConfigurationHandler('image', $a, $b, array('sortable' => array(0 => 'id', 1 => 'title', 2 => 'mimeType'), 'fields' => array('title' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'tags' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'fileName' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'mimeType' => array('type' => 'choice', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL)), 'family' => 'Image', 'entity' => NULL, 'results_per_page' => 15, 'default_sort' => array()), $d), 'columns' => array('id' => array('label' => '#', 'template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'imageFile' => array('template' => 'CleverAgeEAVManagerAdminBundle:Asset:partials/browse.thumbnail.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'title' => array('template' => 'CleverAgeEAVManagerAdminBundle:Base:partials/clickable.column.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'tags' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'mimeType' => array('template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'filename' => array('property_path' => 'imageFile.originalFilename', 'template' => NULL, 'sort_column' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'actions' => array('template' => 'CleverAgeEAVManagerAdminBundle:EAVData:partials/list.row.actions.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array())), 'actions' => array('create' => array('form_type' => 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\AdminLink', 'label' => 'admin.action.create.label', 'action' => 'create', 'icon' => 'plus', 'attr' => array('class' => 'btn-primary', 'data-target-element' => '#tg_right'))), 'reset_button' => array(), 'form_theme' => 'SidusDataGridBundle:Form:filter_theme.html.twig', 'renderer' => $c, 'submit_button' => array()), $e));
        $instance->addDataGrid(new \Sidus\EAVDataGridBundle\Model\DataGrid('image_browser', array('family' => 'Image', 'filter_config' => new \Sidus\EAVFilterBundle\Configuration\EAVFilterConfigurationHandler('image_browser', $a, $b, array('results_per_page' => 5, 'sortable' => array(0 => 'id', 1 => 'title'), 'default_sort' => array('id' => 'DESC'), 'fields' => array('title' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'tags' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL)), 'family' => 'Image', 'entity' => NULL), $d), 'columns' => array('id' => array('label' => '#', 'template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'imageFile' => array('template' => 'CleverAgeEAVManagerAdminBundle:Asset:partials/browse.thumbnail.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'title' => array('template' => 'CleverAgeEAVManagerAdminBundle:Asset:partials/browse.row.label.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'actions' => array('template' => 'CleverAgeEAVManagerAdminBundle:Asset:partials/browse.row.actions.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array())), 'actions' => array('create' => array('form_type' => 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\AdminLink', 'label' => 'admin.action.create.label', 'action' => 'create', 'icon' => 'plus', 'attr' => array('class' => 'btn-primary', 'data-target-element' => '_CURRENT_MODAL'))), 'reset_button' => array('attr' => array('data-target-element' => '_CURRENT_MODAL')), 'form_theme' => 'SidusDataGridBundle:Form:filter_theme.html.twig', 'renderer' => $c, 'submit_button' => array()), $e));
        $instance->addDataGrid(new \Sidus\EAVDataGridBundle\Model\DataGrid('document_browser', array('family' => 'Document', 'filter_config' => new \Sidus\EAVFilterBundle\Configuration\EAVFilterConfigurationHandler('document_browser', $a, $b, array('results_per_page' => 5, 'sortable' => array(0 => 'id', 1 => 'title'), 'default_sort' => array('id' => 'DESC'), 'fields' => array('title' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL), 'tags' => array('type' => 'text', 'label' => NULL, 'attributes' => array(), 'options' => NULL, 'form_type' => 'text', 'form_options' => NULL)), 'family' => 'Document', 'entity' => NULL), $d), 'columns' => array('id' => array('label' => '#', 'template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'title' => array('template' => 'CleverAgeEAVManagerAdminBundle:Asset:partials/browse.row.label.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'actions' => array('template' => 'CleverAgeEAVManagerAdminBundle:Asset:partials/browse.row.actions.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array())), 'actions' => array('create' => array('form_type' => 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\AdminLink', 'label' => 'admin.action.create.label', 'action' => 'create', 'icon' => 'plus', 'attr' => array('class' => 'btn-primary', 'data-target-element' => '_CURRENT_MODAL'))), 'reset_button' => array('attr' => array('data-target-element' => '_CURRENT_MODAL')), 'form_theme' => 'SidusDataGridBundle:Form:filter_theme.html.twig', 'renderer' => $c, 'submit_button' => array()), $e));
        $instance->addDataGrid(new \Sidus\EAVDataGridBundle\Model\DataGrid('node', array('family' => 'Node', 'filter_config' => new \Sidus\EAVFilterBundle\Configuration\EAVFilterConfigurationHandler('node', $a, $b, array('sortable' => array(0 => 'id'), 'fields' => array(), 'family' => 'Node', 'entity' => NULL, 'results_per_page' => 15, 'default_sort' => array()), $d), 'columns' => array('id' => array('label' => '#', 'template' => NULL, 'sort_column' => NULL, 'property_path' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'nodeTitle' => array('template' => 'CleverAgeEAVManagerAdminBundle:Base:partials/clickable.column.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array()), 'actions' => array('template' => 'CleverAgeEAVManagerAdminBundle:EAVData:partials/list.row.actions.html.twig', 'sort_column' => NULL, 'property_path' => NULL, 'label' => NULL, 'renderer' => NULL, 'formatting_options' => array())), 'actions' => array('create' => array('form_type' => 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\AdminLink', 'label' => 'admin.action.create.label', 'action' => 'create', 'icon' => 'plus', 'attr' => array('class' => 'btn-primary', 'data-target-element' => '#tg_right'))), 'reset_button' => array('attr' => array('data-target' => 'tg_center')), 'form_theme' => 'SidusDataGridBundle:Form:filter_theme.html.twig', 'renderer' => $c, 'submit_button' => array()), $e));

        return $instance;
    }

    /*
     * Gets the 'sidus_data_grid.form.link.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\DataGridBundle\Form\Type\LinkType A Sidus\DataGridBundle\Form\Type\LinkType instance
     */
    protected function getSidusDataGrid_Form_Link_TypeService()
    {
        return $this->services['sidus_data_grid.form.link.type'] = new \Sidus\DataGridBundle\Form\Type\LinkType();
    }

    /*
     * Gets the 'sidus_data_grid.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\DataGridBundle\Templating\TwigRenderer A Sidus\DataGridBundle\Templating\TwigRenderer instance
     */
    protected function getSidusDataGrid_Renderer_TwigService()
    {
        return $this->services['sidus_data_grid.renderer.twig'] = new \Sidus\DataGridBundle\Templating\TwigRenderer(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'}, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_eav_bootstrap.attribute_type.autocomplete_data_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\EAVRelationAttributeType A Sidus\EAVModelBundle\Model\EAVRelationAttributeType instance
     */
    protected function getSidusEavBootstrap_AttributeType_AutocompleteDataSelectorService()
    {
        return $this->services['sidus_eav_bootstrap.attribute_type.autocomplete_data_selector'] = new \Sidus\EAVModelBundle\Model\EAVRelationAttributeType('autocomplete_data_selector', 'dataValue', 'Sidus\\EAVBootstrapBundle\\Form\\Type\\AutocompleteDataSelectorType');
    }

    /*
     * Gets the 'sidus_eav_bootstrap.attribute_type.combo_data_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\EAVRelationAttributeType A Sidus\EAVModelBundle\Model\EAVRelationAttributeType instance
     */
    protected function getSidusEavBootstrap_AttributeType_ComboDataSelectorService()
    {
        return $this->services['sidus_eav_bootstrap.attribute_type.combo_data_selector'] = new \Sidus\EAVModelBundle\Model\EAVRelationAttributeType('combo_data_selector', 'dataValue', 'Sidus\\EAVBootstrapBundle\\Form\\Type\\ComboDataSelectorType');
    }

    /*
     * Gets the 'sidus_eav_bootstrap.attribute_type.switch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\AttributeType A Sidus\EAVModelBundle\Model\AttributeType instance
     */
    protected function getSidusEavBootstrap_AttributeType_SwitchService()
    {
        return $this->services['sidus_eav_bootstrap.attribute_type.switch'] = new \Sidus\EAVModelBundle\Model\AttributeType('switch', 'boolValue', 'Sidus\\EAVBootstrapBundle\\Form\\Type\\SwitchType');
    }

    /*
     * Gets the 'sidus_eav_bootstrap.controller.autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVBootstrapBundle\Controller\AutocompleteApiController A Sidus\EAVBootstrapBundle\Controller\AutocompleteApiController instance
     */
    protected function getSidusEavBootstrap_Controller_AutocompleteService()
    {
        return $this->services['sidus_eav_bootstrap.controller.autocomplete'] = new \Sidus\EAVBootstrapBundle\Controller\AutocompleteApiController(${($_ = isset($this->services['sidus_eav_bootstrap.form.helper.compute_label']) ? $this->services['sidus_eav_bootstrap.form.helper.compute_label'] : $this->get('sidus_eav_bootstrap.form.helper.compute_label')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}, ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}, 'MyEML\\EAVModelBundle\\Entity\\Data');
    }

    /*
     * Gets the 'sidus_eav_bootstrap.form.helper.compute_label' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVBootstrapBundle\Form\Helper\ComputeLabelHelper A Sidus\EAVBootstrapBundle\Form\Helper\ComputeLabelHelper instance
     */
    protected function getSidusEavBootstrap_Form_Helper_ComputeLabelService()
    {
        return $this->services['sidus_eav_bootstrap.form.helper.compute_label'] = new \Sidus\EAVBootstrapBundle\Form\Helper\ComputeLabelHelper(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_eav_bootstrap.form.type.autocomplete_data_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVBootstrapBundle\Form\Type\AutocompleteDataSelectorType A Sidus\EAVBootstrapBundle\Form\Type\AutocompleteDataSelectorType instance
     */
    protected function getSidusEavBootstrap_Form_Type_AutocompleteDataSelectorService()
    {
        return $this->services['sidus_eav_bootstrap.form.type.autocomplete_data_selector'] = new \Sidus\EAVBootstrapBundle\Form\Type\AutocompleteDataSelectorType(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_bootstrap.form.helper.compute_label']) ? $this->services['sidus_eav_bootstrap.form.helper.compute_label'] : $this->get('sidus_eav_bootstrap.form.helper.compute_label')) && false ?: '_'}, ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}, 'MyEML\\EAVModelBundle\\Entity\\Data');
    }

    /*
     * Gets the 'sidus_eav_bootstrap.form.type.combo_data_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVBootstrapBundle\Form\Type\ComboDataSelectorType A Sidus\EAVBootstrapBundle\Form\Type\ComboDataSelectorType instance
     */
    protected function getSidusEavBootstrap_Form_Type_ComboDataSelectorService()
    {
        return $this->services['sidus_eav_bootstrap.form.type.combo_data_selector'] = new \Sidus\EAVBootstrapBundle\Form\Type\ComboDataSelectorType(${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_eav_bootstrap.form.type.tabbed_data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVBootstrapBundle\Form\Type\TabbedDataType A Sidus\EAVBootstrapBundle\Form\Type\TabbedDataType instance
     */
    protected function getSidusEavBootstrap_Form_Type_TabbedDataService()
    {
        $this->services['sidus_eav_bootstrap.form.type.tabbed_data'] = $instance = new \Sidus\EAVBootstrapBundle\Form\Type\TabbedDataType(${($_ = isset($this->services['sidus_eav_model.form.attribute_builder']) ? $this->services['sidus_eav_model.form.attribute_builder'] : $this->get('sidus_eav_model.form.attribute_builder')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'});

        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'sidus_eav_filter.filter.type.autocomplete_data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVFilterBundle\Filter\Type\AutocompleteDataFilterType A Sidus\EAVFilterBundle\Filter\Type\AutocompleteDataFilterType instance
     */
    protected function getSidusEavFilter_Filter_Type_AutocompleteDataService()
    {
        return $this->services['sidus_eav_filter.filter.type.autocomplete_data'] = new \Sidus\EAVFilterBundle\Filter\Type\AutocompleteDataFilterType('autocomplete_data', 'Sidus\\EAVBootstrapBundle\\Form\\Type\\AutocompleteDataSelectorType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Registry\AttributeRegistry A Sidus\EAVModelBundle\Registry\AttributeRegistry instance
     */
    protected function getSidusEavModel_Attribute_RegistryService()
    {
        $this->services['sidus_eav_model.attribute.registry'] = $instance = new \Sidus\EAVModelBundle\Registry\AttributeRegistry('Sidus\\EAVModelBundle\\Model\\Attribute', array(), ${($_ = isset($this->services['sidus_eav_model.attribute_type.registry']) ? $this->services['sidus_eav_model.attribute_type.registry'] : $this->get('sidus_eav_model.attribute_type.registry')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'});

        $instance->parseGlobalConfig(array());

        return $instance;
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.boolean' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\AttributeType A Sidus\EAVModelBundle\Model\AttributeType instance
     */
    protected function getSidusEavModel_AttributeType_BooleanService()
    {
        return $this->services['sidus_eav_model.attribute_type.boolean'] = new \Sidus\EAVModelBundle\Model\AttributeType('boolean', 'boolValue', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\AttributeType A Sidus\EAVModelBundle\Model\AttributeType instance
     */
    protected function getSidusEavModel_AttributeType_ChoiceService()
    {
        return $this->services['sidus_eav_model.attribute_type.choice'] = new \Sidus\EAVModelBundle\Model\AttributeType('choice', 'stringValue', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.data_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\EAVRelationAttributeType A Sidus\EAVModelBundle\Model\EAVRelationAttributeType instance
     */
    protected function getSidusEavModel_AttributeType_DataSelectorService()
    {
        return $this->services['sidus_eav_model.attribute_type.data_selector'] = new \Sidus\EAVModelBundle\Model\EAVRelationAttributeType('data_selector', 'dataValue', 'Sidus\\EAVModelBundle\\Form\\Type\\SimpleDataSelectorType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\AttributeType A Sidus\EAVModelBundle\Model\AttributeType instance
     */
    protected function getSidusEavModel_AttributeType_DateService()
    {
        return $this->services['sidus_eav_model.attribute_type.date'] = new \Sidus\EAVModelBundle\Model\AttributeType('date', 'dateValue', 'Sidus\\EAVBootstrapBundle\\Form\\Type\\DatePickerType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\AttributeType A Sidus\EAVModelBundle\Model\AttributeType instance
     */
    protected function getSidusEavModel_AttributeType_DatetimeService()
    {
        return $this->services['sidus_eav_model.attribute_type.datetime'] = new \Sidus\EAVModelBundle\Model\AttributeType('datetime', 'datetimeValue', 'Sidus\\EAVBootstrapBundle\\Form\\Type\\DateTimePickerType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.decimal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\AttributeType A Sidus\EAVModelBundle\Model\AttributeType instance
     */
    protected function getSidusEavModel_AttributeType_DecimalService()
    {
        return $this->services['sidus_eav_model.attribute_type.decimal'] = new \Sidus\EAVModelBundle\Model\AttributeType('decimal', 'decimalValue', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.embed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\EAVEmbedAttributeType A Sidus\EAVModelBundle\Model\EAVEmbedAttributeType instance
     */
    protected function getSidusEavModel_AttributeType_EmbedService()
    {
        return $this->services['sidus_eav_model.attribute_type.embed'] = new \Sidus\EAVModelBundle\Model\EAVEmbedAttributeType('embed', 'dataValue', 'Sidus\\EAVModelBundle\\Form\\Type\\DataType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\AttributeType A Sidus\EAVModelBundle\Model\AttributeType instance
     */
    protected function getSidusEavModel_AttributeType_HiddenService()
    {
        return $this->services['sidus_eav_model.attribute_type.hidden'] = new \Sidus\EAVModelBundle\Model\AttributeType('hidden', 'stringValue', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\AttributeType A Sidus\EAVModelBundle\Model\AttributeType instance
     */
    protected function getSidusEavModel_AttributeType_HtmlService()
    {
        return $this->services['sidus_eav_model.attribute_type.html'] = new \Sidus\EAVModelBundle\Model\AttributeType('html', 'textValue', 'Sidus\\EAVBootstrapBundle\\Form\\Type\\WysiwygType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\AttributeType A Sidus\EAVModelBundle\Model\AttributeType instance
     */
    protected function getSidusEavModel_AttributeType_IntegerService()
    {
        return $this->services['sidus_eav_model.attribute_type.integer'] = new \Sidus\EAVModelBundle\Model\AttributeType('integer', 'integerValue', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.integer_identifier' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\IdentifierAttributeType A Sidus\EAVModelBundle\Model\IdentifierAttributeType instance
     */
    protected function getSidusEavModel_AttributeType_IntegerIdentifierService()
    {
        return $this->services['sidus_eav_model.attribute_type.integer_identifier'] = new \Sidus\EAVModelBundle\Model\IdentifierAttributeType('integer_identifier', 'integerValue', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Registry\AttributeTypeRegistry A Sidus\EAVModelBundle\Registry\AttributeTypeRegistry instance
     */
    protected function getSidusEavModel_AttributeType_RegistryService()
    {
        $this->services['sidus_eav_model.attribute_type.registry'] = $instance = new \Sidus\EAVModelBundle\Registry\AttributeTypeRegistry();

        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.string']) ? $this->services['sidus_eav_model.attribute_type.string'] : $this->get('sidus_eav_model.attribute_type.string')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.text']) ? $this->services['sidus_eav_model.attribute_type.text'] : $this->get('sidus_eav_model.attribute_type.text')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.integer']) ? $this->services['sidus_eav_model.attribute_type.integer'] : $this->get('sidus_eav_model.attribute_type.integer')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.decimal']) ? $this->services['sidus_eav_model.attribute_type.decimal'] : $this->get('sidus_eav_model.attribute_type.decimal')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.boolean']) ? $this->services['sidus_eav_model.attribute_type.boolean'] : $this->get('sidus_eav_model.attribute_type.boolean')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.html']) ? $this->services['sidus_eav_model.attribute_type.html'] : $this->get('sidus_eav_model.attribute_type.html')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.date']) ? $this->services['sidus_eav_model.attribute_type.date'] : $this->get('sidus_eav_model.attribute_type.date')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.datetime']) ? $this->services['sidus_eav_model.attribute_type.datetime'] : $this->get('sidus_eav_model.attribute_type.datetime')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.choice']) ? $this->services['sidus_eav_model.attribute_type.choice'] : $this->get('sidus_eav_model.attribute_type.choice')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.hidden']) ? $this->services['sidus_eav_model.attribute_type.hidden'] : $this->get('sidus_eav_model.attribute_type.hidden')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.data_selector']) ? $this->services['sidus_eav_model.attribute_type.data_selector'] : $this->get('sidus_eav_model.attribute_type.data_selector')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.embed']) ? $this->services['sidus_eav_model.attribute_type.embed'] : $this->get('sidus_eav_model.attribute_type.embed')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.string_identifier']) ? $this->services['sidus_eav_model.attribute_type.string_identifier'] : $this->get('sidus_eav_model.attribute_type.string_identifier')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_model.attribute_type.integer_identifier']) ? $this->services['sidus_eav_model.attribute_type.integer_identifier'] : $this->get('sidus_eav_model.attribute_type.integer_identifier')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_bootstrap.attribute_type.switch']) ? $this->services['sidus_eav_bootstrap.attribute_type.switch'] : $this->get('sidus_eav_bootstrap.attribute_type.switch')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_bootstrap.attribute_type.autocomplete_data_selector']) ? $this->services['sidus_eav_bootstrap.attribute_type.autocomplete_data_selector'] : $this->get('sidus_eav_bootstrap.attribute_type.autocomplete_data_selector')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_bootstrap.attribute_type.combo_data_selector']) ? $this->services['sidus_eav_bootstrap.attribute_type.combo_data_selector'] : $this->get('sidus_eav_bootstrap.attribute_type.combo_data_selector')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['sidus_eav_variant.attribute_type.variants']) ? $this->services['sidus_eav_variant.attribute_type.variants'] : $this->get('sidus_eav_variant.attribute_type.variants')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['eavmanager_eav_model.attribute_type.document']) ? $this->services['eavmanager_eav_model.attribute_type.document'] : $this->get('eavmanager_eav_model.attribute_type.document')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['eavmanager_eav_model.attribute_type.image']) ? $this->services['eavmanager_eav_model.attribute_type.image'] : $this->get('eavmanager_eav_model.attribute_type.image')) && false ?: '_'}, 0);
        $instance->addType(${($_ = isset($this->services['eavmanager_eav_model.attribute_type.media_browser']) ? $this->services['eavmanager_eav_model.attribute_type.media_browser'] : $this->get('eavmanager_eav_model.attribute_type.media_browser')) && false ?: '_'}, 0);

        return $instance;
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.string' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\AttributeType A Sidus\EAVModelBundle\Model\AttributeType instance
     */
    protected function getSidusEavModel_AttributeType_StringService()
    {
        return $this->services['sidus_eav_model.attribute_type.string'] = new \Sidus\EAVModelBundle\Model\AttributeType('string', 'stringValue', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.string_identifier' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\IdentifierAttributeType A Sidus\EAVModelBundle\Model\IdentifierAttributeType instance
     */
    protected function getSidusEavModel_AttributeType_StringIdentifierService()
    {
        return $this->services['sidus_eav_model.attribute_type.string_identifier'] = new \Sidus\EAVModelBundle\Model\IdentifierAttributeType('string_identifier', 'stringValue', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
    }

    /*
     * Gets the 'sidus_eav_model.attribute_type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Model\AttributeType A Sidus\EAVModelBundle\Model\AttributeType instance
     */
    protected function getSidusEavModel_AttributeType_TextService()
    {
        return $this->services['sidus_eav_model.attribute_type.text'] = new \Sidus\EAVModelBundle\Model\AttributeType('text', 'textValue', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType');
    }

    /*
     * Gets the 'sidus_eav_model.context.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Context\ContextManager A Sidus\EAVModelBundle\Context\ContextManager instance
     */
    protected function getSidusEavModel_Context_ManagerService()
    {
        return $this->services['sidus_eav_model.context.manager'] = new \Sidus\EAVModelBundle\Context\ContextManager(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->get('form.factory')) && false ?: '_'}, 'MyEML\\EAVModelBundle\\Form\\ContextSwitcherType', array('campus' => 'lyon', 'program' => 'master', 'locale' => 'fr_FR', 'profile' => 'student'));
    }

    /*
     * Gets the 'sidus_eav_model.denormalizer.family' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Serializer\Denormalizer\FamilyDenormalizer A Sidus\EAVModelBundle\Serializer\Denormalizer\FamilyDenormalizer instance
     */
    protected function getSidusEavModel_Denormalizer_FamilyService()
    {
        return $this->services['sidus_eav_model.denormalizer.family'] = new \Sidus\EAVModelBundle\Serializer\Denormalizer\FamilyDenormalizer(${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_eav_model.doctrine.metadata.mapper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Event\DoctrineMetadataListener A Sidus\EAVModelBundle\Event\DoctrineMetadataListener instance
     */
    protected function getSidusEavModel_Doctrine_Metadata_MapperService()
    {
        return $this->services['sidus_eav_model.doctrine.metadata.mapper'] = new \Sidus\EAVModelBundle\Event\DoctrineMetadataListener('MyEML\\EAVModelBundle\\Entity\\Data', 'MyEML\\EAVModelBundle\\Entity\\Value');
    }

    /*
     * Gets the 'sidus_eav_model.family.BaseAsset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \sidus_eav_model.family.class A sidus_eav_model.family.class instance
     */
    protected function getSidusEavModel_Family_BaseAssetService()
    {
        $this->services['sidus_eav_model.family.BaseAsset'] = $instance = new \Sidus\EAVModelBundle\Model\Family('BaseAsset', ${($_ = isset($this->services['sidus_eav_model.attribute.registry']) ? $this->services['sidus_eav_model.attribute.registry'] : $this->get('sidus_eav_model.attribute.registry')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.context.manager']) ? $this->services['sidus_eav_model.context.manager'] : $this->get('sidus_eav_model.context.manager')) && false ?: '_'}, array('instantiable' => false, 'attributeAsLabel' => 'title', 'attributes' => array('title' => array('group' => 'content', 'required' => true, 'unique' => false, 'multiple' => false, 'context_mask' => NULL), 'fileSize' => array('group' => 'meta', 'type' => 'integer', 'form_options' => array('disabled' => true), 'required' => false, 'unique' => false, 'multiple' => false, 'context_mask' => NULL), 'mimeType' => array('group' => 'meta', 'form_options' => array('disabled' => true), 'required' => false, 'unique' => false, 'multiple' => false, 'context_mask' => NULL), 'fileName' => array('group' => 'meta', 'form_options' => array('disabled' => true), 'required' => false, 'unique' => false, 'multiple' => false, 'context_mask' => NULL), 'tags' => array('group' => 'content', 'multiple' => true, 'required' => false, 'unique' => false, 'context_mask' => NULL)), 'label' => NULL, 'attributeAsIdentifier' => NULL, 'singleton' => false, 'data_class' => 'MyEML\\EAVModelBundle\\Entity\\Data', 'value_class' => 'MyEML\\EAVModelBundle\\Entity\\Value'));

        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'sidus_eav_model.family.Document' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \sidus_eav_model.family.class A sidus_eav_model.family.class instance
     */
    protected function getSidusEavModel_Family_DocumentService()
    {
        $this->services['sidus_eav_model.family.Document'] = $instance = new \Sidus\EAVModelBundle\Model\Family('Document', ${($_ = isset($this->services['sidus_eav_model.attribute.registry']) ? $this->services['sidus_eav_model.attribute.registry'] : $this->get('sidus_eav_model.attribute.registry')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.context.manager']) ? $this->services['sidus_eav_model.context.manager'] : $this->get('sidus_eav_model.context.manager')) && false ?: '_'}, array('parent' => 'BaseAsset', 'attributeAsLabel' => 'title', 'attributes' => array('documentFile' => array('group' => 'content', 'type' => 'document', 'required' => true, 'unique' => false, 'multiple' => false, 'context_mask' => NULL)), 'label' => NULL, 'attributeAsIdentifier' => NULL, 'singleton' => false, 'instantiable' => true, 'data_class' => 'MyEML\\EAVModelBundle\\Entity\\Data', 'value_class' => 'MyEML\\EAVModelBundle\\Entity\\Value'));

        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'sidus_eav_model.family.Image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \sidus_eav_model.family.class A sidus_eav_model.family.class instance
     */
    protected function getSidusEavModel_Family_ImageService()
    {
        $this->services['sidus_eav_model.family.Image'] = $instance = new \Sidus\EAVModelBundle\Model\Family('Image', ${($_ = isset($this->services['sidus_eav_model.attribute.registry']) ? $this->services['sidus_eav_model.attribute.registry'] : $this->get('sidus_eav_model.attribute.registry')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.context.manager']) ? $this->services['sidus_eav_model.context.manager'] : $this->get('sidus_eav_model.context.manager')) && false ?: '_'}, array('parent' => 'BaseAsset', 'attributeAsLabel' => 'title', 'attributes' => array('imageFile' => array('group' => 'content', 'required' => true, 'type' => 'image', 'unique' => false, 'multiple' => false, 'context_mask' => NULL), 'altText' => array('group' => 'meta', 'form_options' => array('help_block' => 'Laisser vide pour utiliser le titre'), 'required' => false, 'unique' => false, 'multiple' => false, 'context_mask' => NULL), 'copyright' => array('group' => 'meta', 'required' => false, 'unique' => false, 'multiple' => false, 'context_mask' => NULL)), 'label' => NULL, 'attributeAsIdentifier' => NULL, 'singleton' => false, 'instantiable' => true, 'data_class' => 'MyEML\\EAVModelBundle\\Entity\\Data', 'value_class' => 'MyEML\\EAVModelBundle\\Entity\\Value'));

        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'sidus_eav_model.family.Node' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \sidus_eav_model.family.class A sidus_eav_model.family.class instance
     */
    protected function getSidusEavModel_Family_NodeService()
    {
        $this->services['sidus_eav_model.family.Node'] = $instance = new \Sidus\EAVModelBundle\Model\Family('Node', ${($_ = isset($this->services['sidus_eav_model.attribute.registry']) ? $this->services['sidus_eav_model.attribute.registry'] : $this->get('sidus_eav_model.attribute.registry')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.context.manager']) ? $this->services['sidus_eav_model.context.manager'] : $this->get('sidus_eav_model.context.manager')) && false ?: '_'}, array('attributeAsLabel' => 'nodeTitle', 'attributes' => array('nodeTitle' => array('type' => 'string', 'required' => true, 'context_mask' => array(0 => 'campus', 1 => 'program', 2 => 'locale', 3 => 'profile'), 'unique' => false, 'multiple' => false), 'children' => array('type' => 'data_selector', 'multiple' => true, 'options' => array('allowed_families' => array(0 => 'Node')), 'required' => false, 'unique' => false, 'context_mask' => NULL)), 'label' => NULL, 'attributeAsIdentifier' => NULL, 'singleton' => false, 'instantiable' => true, 'data_class' => 'MyEML\\EAVModelBundle\\Entity\\Data', 'value_class' => 'MyEML\\EAVModelBundle\\Entity\\Value'));

        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'sidus_eav_model.family.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Registry\FamilyRegistry A Sidus\EAVModelBundle\Registry\FamilyRegistry instance
     */
    protected function getSidusEavModel_Family_RegistryService()
    {
        $this->services['sidus_eav_model.family.registry'] = $instance = new \Sidus\EAVModelBundle\Registry\FamilyRegistry();

        $instance->addFamily(${($_ = isset($this->services['sidus_eav_model.family.BaseAsset']) ? $this->services['sidus_eav_model.family.BaseAsset'] : $this->get('sidus_eav_model.family.BaseAsset')) && false ?: '_'}, 0);
        $instance->addFamily(${($_ = isset($this->services['sidus_eav_model.family.Image']) ? $this->services['sidus_eav_model.family.Image'] : $this->get('sidus_eav_model.family.Image')) && false ?: '_'}, 0);
        $instance->addFamily(${($_ = isset($this->services['sidus_eav_model.family.Document']) ? $this->services['sidus_eav_model.family.Document'] : $this->get('sidus_eav_model.family.Document')) && false ?: '_'}, 0);
        $instance->addFamily(${($_ = isset($this->services['sidus_eav_model.family.Node']) ? $this->services['sidus_eav_model.family.Node'] : $this->get('sidus_eav_model.family.Node')) && false ?: '_'}, 0);

        return $instance;
    }

    /*
     * Gets the 'sidus_eav_model.finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Doctrine\EAVFinder A Sidus\EAVModelBundle\Doctrine\EAVFinder instance
     */
    protected function getSidusEavModel_FinderService()
    {
        return $this->services['sidus_eav_model.finder'] = new \Sidus\EAVModelBundle\Doctrine\EAVFinder(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_eav_model.form.attribute_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Form\AttributeFormBuilder A Sidus\EAVModelBundle\Form\AttributeFormBuilder instance
     */
    protected function getSidusEavModel_Form_AttributeBuilderService()
    {
        $this->services['sidus_eav_model.form.attribute_builder'] = $instance = new \Sidus\EAVModelBundle\Form\AttributeFormBuilder('Sidus\\EAVBootstrapBundle\\Form\\Type\\BootstrapCollectionType');

        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'sidus_eav_model.form.extension.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Form\Extension\ChoiceTypeExtension A Sidus\EAVModelBundle\Form\Extension\ChoiceTypeExtension instance
     */
    protected function getSidusEavModel_Form_Extension_ChoiceService()
    {
        return $this->services['sidus_eav_model.form.extension.choice'] = new \Sidus\EAVModelBundle\Form\Extension\ChoiceTypeExtension();
    }

    /*
     * Gets the 'sidus_eav_model.form.type.data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Form\Type\DataType A Sidus\EAVModelBundle\Form\Type\DataType instance
     */
    protected function getSidusEavModel_Form_Type_DataService()
    {
        return $this->services['sidus_eav_model.form.type.data'] = new \Sidus\EAVModelBundle\Form\Type\DataType(${($_ = isset($this->services['sidus_eav_model.form.attribute_builder']) ? $this->services['sidus_eav_model.form.attribute_builder'] : $this->get('sidus_eav_model.form.attribute_builder')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_eav_model.form.type.family_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Form\Type\FamilySelectorType A Sidus\EAVModelBundle\Form\Type\FamilySelectorType instance
     */
    protected function getSidusEavModel_Form_Type_FamilySelectorService()
    {
        return $this->services['sidus_eav_model.form.type.family_selector'] = new \Sidus\EAVModelBundle\Form\Type\FamilySelectorType(${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_eav_model.form.type.grouped_data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Form\Type\GroupedDataType A Sidus\EAVModelBundle\Form\Type\GroupedDataType instance
     */
    protected function getSidusEavModel_Form_Type_GroupedDataService()
    {
        return $this->services['sidus_eav_model.form.type.grouped_data'] = new \Sidus\EAVModelBundle\Form\Type\GroupedDataType(${($_ = isset($this->services['sidus_eav_model.form.attribute_builder']) ? $this->services['sidus_eav_model.form.attribute_builder'] : $this->get('sidus_eav_model.form.attribute_builder')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_eav_model.form.type.simple_data_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Form\Type\SimpleDataSelectorType A Sidus\EAVModelBundle\Form\Type\SimpleDataSelectorType instance
     */
    protected function getSidusEavModel_Form_Type_SimpleDataSelectorService()
    {
        return $this->services['sidus_eav_model.form.type.simple_data_selector'] = new \Sidus\EAVModelBundle\Form\Type\SimpleDataSelectorType(${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}, 'MyEML\\EAVModelBundle\\Entity\\Data');
    }

    /*
     * Gets the 'sidus_eav_model.normalizer.attribute.flat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Serializer\Normalizer\Flat\FlatNormalizer A Sidus\EAVModelBundle\Serializer\Normalizer\Flat\FlatNormalizer instance
     */
    protected function getSidusEavModel_Normalizer_Attribute_FlatService()
    {
        return $this->services['sidus_eav_model.normalizer.attribute.flat'] = new \Sidus\EAVModelBundle\Serializer\Normalizer\Flat\FlatNormalizer(${($_ = isset($this->services['sidus_eav_model.normalizer.attribute']) ? $this->services['sidus_eav_model.normalizer.attribute'] : $this->getSidusEavModel_Normalizer_AttributeService()) && false ?: '_'}, array(0 => 'csv'));
    }

    /*
     * Gets the 'sidus_eav_model.normalizer.data.flat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Serializer\Normalizer\Flat\FlatNormalizer A Sidus\EAVModelBundle\Serializer\Normalizer\Flat\FlatNormalizer instance
     */
    protected function getSidusEavModel_Normalizer_Data_FlatService()
    {
        return $this->services['sidus_eav_model.normalizer.data.flat'] = new \Sidus\EAVModelBundle\Serializer\Normalizer\Flat\FlatNormalizer(${($_ = isset($this->services['sidus_eav_model.normalizer.data']) ? $this->services['sidus_eav_model.normalizer.data'] : $this->getSidusEavModel_Normalizer_DataService()) && false ?: '_'}, array(0 => 'csv'));
    }

    /*
     * Gets the 'sidus_eav_model.normalizer.family.flat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Serializer\Normalizer\Flat\FlatNormalizer A Sidus\EAVModelBundle\Serializer\Normalizer\Flat\FlatNormalizer instance
     */
    protected function getSidusEavModel_Normalizer_Family_FlatService()
    {
        return $this->services['sidus_eav_model.normalizer.family.flat'] = new \Sidus\EAVModelBundle\Serializer\Normalizer\Flat\FlatNormalizer(${($_ = isset($this->services['sidus_eav_model.normalizer.family']) ? $this->services['sidus_eav_model.normalizer.family'] : $this->getSidusEavModel_Normalizer_FamilyService()) && false ?: '_'}, array(0 => 'csv'));
    }

    /*
     * Gets the 'sidus_eav_model.serializer.entity_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Serializer\EntityProvider A Sidus\EAVModelBundle\Serializer\EntityProvider instance
     */
    protected function getSidusEavModel_Serializer_EntityProviderService()
    {
        return $this->services['sidus_eav_model.serializer.entity_provider'] = new \Sidus\EAVModelBundle\Serializer\EntityProvider(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_eav_model.serializer.handler.by_reference' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Serializer\ByReferenceHandler A Sidus\EAVModelBundle\Serializer\ByReferenceHandler instance
     */
    protected function getSidusEavModel_Serializer_Handler_ByReferenceService()
    {
        return $this->services['sidus_eav_model.serializer.handler.by_reference'] = new \Sidus\EAVModelBundle\Serializer\ByReferenceHandler();
    }

    /*
     * Gets the 'sidus_eav_model.serializer.handler.circular_reference' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Serializer\CircularReferenceHandler A Sidus\EAVModelBundle\Serializer\CircularReferenceHandler instance
     */
    protected function getSidusEavModel_Serializer_Handler_CircularReferenceService()
    {
        return $this->services['sidus_eav_model.serializer.handler.circular_reference'] = new \Sidus\EAVModelBundle\Serializer\CircularReferenceHandler();
    }

    /*
     * Gets the 'sidus_eav_model.serializer.handler.max_depth' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Serializer\MaxDepthHandler A Sidus\EAVModelBundle\Serializer\MaxDepthHandler instance
     */
    protected function getSidusEavModel_Serializer_Handler_MaxDepthService()
    {
        return $this->services['sidus_eav_model.serializer.handler.max_depth'] = new \Sidus\EAVModelBundle\Serializer\MaxDepthHandler();
    }

    /*
     * Gets the 'sidus_eav_model.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Twig\SidusTwigExtension A Sidus\EAVModelBundle\Twig\SidusTwigExtension instance
     */
    protected function getSidusEavModel_Twig_ExtensionService()
    {
        return $this->services['sidus_eav_model.twig.extension'] = new \Sidus\EAVModelBundle\Twig\SidusTwigExtension(${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_eav_model.validator.sidus_data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVModelBundle\Validator\Constraints\DataValidator A Sidus\EAVModelBundle\Validator\Constraints\DataValidator instance
     */
    protected function getSidusEavModel_Validator_SidusDataService()
    {
        return $this->services['sidus_eav_model.validator.sidus_data'] = new \Sidus\EAVModelBundle\Validator\Constraints\DataValidator('MyEML\\EAVModelBundle\\Entity\\Data', ${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'}, ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_eav_publishing.doctrine_orm.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\PublishingBundle\Event\ORMSubscriber A Sidus\PublishingBundle\Event\ORMSubscriber instance
     */
    protected function getSidusEavPublishing_DoctrineOrm_SubscriberService()
    {
        return $this->services['sidus_eav_publishing.doctrine_orm.subscriber'] = new \Sidus\PublishingBundle\Event\ORMSubscriber(false);
    }

    /*
     * Gets the 'sidus_eav_variant.attribute_type.variants' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVVariantBundle\Model\VariantAttributeType A Sidus\EAVVariantBundle\Model\VariantAttributeType instance
     */
    protected function getSidusEavVariant_AttributeType_VariantsService()
    {
        return $this->services['sidus_eav_variant.attribute_type.variants'] = new \Sidus\EAVVariantBundle\Model\VariantAttributeType('variants', 'dataValue', 'Sidus\\EAVVariantBundle\\Form\\Type\\VariantCollectionType');
    }

    /*
     * Gets the 'sidus_eav_variant.form.type.axles' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVVariantBundle\Form\Type\AxlesType A Sidus\EAVVariantBundle\Form\Type\AxlesType instance
     */
    protected function getSidusEavVariant_Form_Type_AxlesService()
    {
        return $this->services['sidus_eav_variant.form.type.axles'] = new \Sidus\EAVVariantBundle\Form\Type\AxlesType();
    }

    /*
     * Gets the 'sidus_eav_variant.form.type.variant' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVVariantBundle\Form\Type\VariantType A Sidus\EAVVariantBundle\Form\Type\VariantType instance
     */
    protected function getSidusEavVariant_Form_Type_VariantService()
    {
        return $this->services['sidus_eav_variant.form.type.variant'] = new \Sidus\EAVVariantBundle\Form\Type\VariantType(${($_ = isset($this->services['sidus_eav_model.form.attribute_builder']) ? $this->services['sidus_eav_model.form.attribute_builder'] : $this->get('sidus_eav_model.form.attribute_builder')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_eav_variant.form.type.variant_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVVariantBundle\Form\Type\VariantCollectionType A Sidus\EAVVariantBundle\Form\Type\VariantCollectionType instance
     */
    protected function getSidusEavVariant_Form_Type_VariantCollectionService()
    {
        return $this->services['sidus_eav_variant.form.type.variant_collection'] = new \Sidus\EAVVariantBundle\Form\Type\VariantCollectionType(${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.attribute.registry']) ? $this->services['sidus_eav_model.attribute.registry'] : $this->get('sidus_eav_model.attribute.registry')) && false ?: '_'}, array('select' => 'admin.variant.select', 'create' => 'admin.variant.create', 'edit' => 'admin.variant.edit', 'delete' => 'admin.variant.delete'));
    }

    /*
     * Gets the 'sidus_eav_variant.form.type.variant_family_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVVariantBundle\Form\Type\VariantFamilySelectorType A Sidus\EAVVariantBundle\Form\Type\VariantFamilySelectorType instance
     */
    protected function getSidusEavVariant_Form_Type_VariantFamilySelectorService()
    {
        return $this->services['sidus_eav_variant.form.type.variant_family_selector'] = new \Sidus\EAVVariantBundle\Form\Type\VariantFamilySelectorType(${($_ = isset($this->services['sidus_eav_model.family.registry']) ? $this->services['sidus_eav_model.family.registry'] : $this->get('sidus_eav_model.family.registry')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_eav_variant.validator.unique_variant' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\EAVVariantBundle\Validator\Constraints\UniqueVariantValidator A Sidus\EAVVariantBundle\Validator\Constraints\UniqueVariantValidator instance
     */
    protected function getSidusEavVariant_Validator_UniqueVariantService()
    {
        return $this->services['sidus_eav_variant.validator.unique_variant'] = new \Sidus\EAVVariantBundle\Validator\Constraints\UniqueVariantValidator('MyEML\\EAVModelBundle\\Entity\\Data');
    }

    /*
     * Gets the 'sidus_file_upload.form.resource_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FileUploadBundle\Form\Type\ResourceType A Sidus\FileUploadBundle\Form\Type\ResourceType instance
     */
    protected function getSidusFileUpload_Form_ResourceTypeService()
    {
        return $this->services['sidus_file_upload.form.resource_type'] = new \Sidus\FileUploadBundle\Form\Type\ResourceType(${($_ = isset($this->services['sidus_file_upload.resource.manager']) ? $this->services['sidus_file_upload.resource.manager'] : $this->get('sidus_file_upload.resource.manager')) && false ?: '_'}, ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_file_upload.registry.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FileUploadBundle\Registry\FilesystemRegistry A Sidus\FileUploadBundle\Registry\FilesystemRegistry instance
     */
    protected function getSidusFileUpload_Registry_FilesystemService()
    {
        $this->services['sidus_file_upload.registry.filesystem'] = $instance = new \Sidus\FileUploadBundle\Registry\FilesystemRegistry();

        $instance->addFilesystem('images', ${($_ = isset($this->services['oneup_flysystem.images_filesystem']) ? $this->services['oneup_flysystem.images_filesystem'] : $this->get('oneup_flysystem.images_filesystem')) && false ?: '_'});
        $instance->addFilesystem('documents', ${($_ = isset($this->services['oneup_flysystem.documents_filesystem']) ? $this->services['oneup_flysystem.documents_filesystem'] : $this->get('oneup_flysystem.documents_filesystem')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'sidus_file_upload.resource.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CleverAge\EAVManager\AssetBundle\Manager\ResourceManager A CleverAge\EAVManager\AssetBundle\Manager\ResourceManager instance
     */
    protected function getSidusFileUpload_Resource_ManagerService()
    {
        $this->services['sidus_file_upload.resource.manager'] = $instance = new \CleverAge\EAVManager\AssetBundle\Manager\ResourceManager(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger')) && false ?: '_'}, ${($_ = isset($this->services['sidus_file_upload.registry.filesystem']) ? $this->services['sidus_file_upload.registry.filesystem'] : $this->get('sidus_file_upload.registry.filesystem')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'});

        $instance->addResourceConfiguration('image', array('entity' => 'CleverAge\\EAVManager\\AssetBundle\\Entity\\Image', 'filesystem' => 'images', 'uploader' => NULL));
        $instance->addResourceConfiguration('document', array('entity' => 'CleverAge\\EAVManager\\AssetBundle\\Entity\\Document', 'filesystem' => 'documents', 'uploader' => NULL));

        return $instance;
    }

    /*
     * Gets the 'sidus_file_upload.resource.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FileUploadBundle\EventListener\ResourceSubscriber A Sidus\FileUploadBundle\EventListener\ResourceSubscriber instance
     */
    protected function getSidusFileUpload_Resource_SubscriberService()
    {
        return $this->services['sidus_file_upload.resource.subscriber'] = new \Sidus\FileUploadBundle\EventListener\ResourceSubscriber(${($_ = isset($this->services['sidus_file_upload.resource.manager']) ? $this->services['sidus_file_upload.resource.manager'] : $this->get('sidus_file_upload.resource.manager')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_file_upload.resource.uploader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FileUploadBundle\EventListener\ResourceUploader A Sidus\FileUploadBundle\EventListener\ResourceUploader instance
     */
    protected function getSidusFileUpload_Resource_UploaderService()
    {
        return $this->services['sidus_file_upload.resource.uploader'] = new \Sidus\FileUploadBundle\EventListener\ResourceUploader(${($_ = isset($this->services['sidus_file_upload.resource.manager']) ? $this->services['sidus_file_upload.resource.manager'] : $this->get('sidus_file_upload.resource.manager')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_file_upload.twig.upload_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FileUploadBundle\Twig\UploadExtension A Sidus\FileUploadBundle\Twig\UploadExtension instance
     */
    protected function getSidusFileUpload_Twig_UploadExtensionService()
    {
        return $this->services['sidus_file_upload.twig.upload_extension'] = new \Sidus\FileUploadBundle\Twig\UploadExtension(${($_ = isset($this->services['sidus_file_upload.resource.manager']) ? $this->services['sidus_file_upload.resource.manager'] : $this->get('sidus_file_upload.resource.manager')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_filter.filter.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FilterBundle\Filter\FilterFactory A Sidus\FilterBundle\Filter\FilterFactory instance
     */
    protected function getSidusFilter_Filter_FactoryService()
    {
        return $this->services['sidus_filter.filter.factory'] = new \Sidus\FilterBundle\Filter\FilterFactory('Sidus\\EAVFilterBundle\\Filter\\Filter', ${($_ = isset($this->services['sidus_filter.filter_type_configuration.handler']) ? $this->services['sidus_filter.filter_type_configuration.handler'] : $this->get('sidus_filter.filter_type_configuration.handler')) && false ?: '_'});
    }

    /*
     * Gets the 'sidus_filter.filter.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FilterBundle\Filter\Type\ChoiceFilterType A Sidus\FilterBundle\Filter\Type\ChoiceFilterType instance
     */
    protected function getSidusFilter_Filter_Type_ChoiceService()
    {
        return $this->services['sidus_filter.filter.type.choice'] = new \Sidus\FilterBundle\Filter\Type\ChoiceFilterType('choice', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType');
    }

    /*
     * Gets the 'sidus_filter.filter.type.date_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FilterBundle\Filter\Type\DateRangeFilterType A Sidus\FilterBundle\Filter\Type\DateRangeFilterType instance
     */
    protected function getSidusFilter_Filter_Type_DateRangeService()
    {
        return $this->services['sidus_filter.filter.type.date_range'] = new \Sidus\FilterBundle\Filter\Type\DateRangeFilterType('date_range', 'Sidus\\FilterBundle\\Form\\Type\\DateRangeType');
    }

    /*
     * Gets the 'sidus_filter.filter.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FilterBundle\Filter\Type\TextFilterType A Sidus\FilterBundle\Filter\Type\TextFilterType instance
     */
    protected function getSidusFilter_Filter_Type_TextService()
    {
        return $this->services['sidus_filter.filter.type.text'] = new \Sidus\FilterBundle\Filter\Type\TextFilterType('text', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType');
    }

    /*
     * Gets the 'sidus_filter.filter_type_configuration.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FilterBundle\Configuration\FilterTypeConfigurationHandler A Sidus\FilterBundle\Configuration\FilterTypeConfigurationHandler instance
     */
    protected function getSidusFilter_FilterTypeConfiguration_HandlerService()
    {
        $this->services['sidus_filter.filter_type_configuration.handler'] = $instance = new \Sidus\FilterBundle\Configuration\FilterTypeConfigurationHandler();

        $instance->addFilterType(${($_ = isset($this->services['sidus_filter.filter.type.date_range']) ? $this->services['sidus_filter.filter.type.date_range'] : $this->get('sidus_filter.filter.type.date_range')) && false ?: '_'});
        $instance->addFilterType(${($_ = isset($this->services['sidus_filter.filter.type.text']) ? $this->services['sidus_filter.filter.type.text'] : $this->get('sidus_filter.filter.type.text')) && false ?: '_'});
        $instance->addFilterType(${($_ = isset($this->services['sidus_filter.filter.type.choice']) ? $this->services['sidus_filter.filter.type.choice'] : $this->get('sidus_filter.filter.type.choice')) && false ?: '_'});
        $instance->addFilterType(${($_ = isset($this->services['sidus_eav_filter.filter.type.autocomplete_data']) ? $this->services['sidus_eav_filter.filter.type.autocomplete_data'] : $this->get('sidus_eav_filter.filter.type.autocomplete_data')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'sidus_filter.form.type.date_range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FilterBundle\Form\Type\DateRangeType A Sidus\FilterBundle\Form\Type\DateRangeType instance
     */
    protected function getSidusFilter_Form_Type_DateRangeService()
    {
        return $this->services['sidus_filter.form.type.date_range'] = new \Sidus\FilterBundle\Form\Type\DateRangeType();
    }

    /*
     * Gets the 'sidus_filter.form.type.order_button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FilterBundle\Form\Type\OrderButtonType A Sidus\FilterBundle\Form\Type\OrderButtonType instance
     */
    protected function getSidusFilter_Form_Type_OrderButtonService()
    {
        return $this->services['sidus_filter.form.type.order_button'] = new \Sidus\FilterBundle\Form\Type\OrderButtonType();
    }

    /*
     * Gets the 'sidus_filter.form.type.sort_config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sidus\FilterBundle\Form\Type\SortConfigType A Sidus\FilterBundle\Form\Type\SortConfigType instance
     */
    protected function getSidusFilter_Form_Type_SortConfigService()
    {
        return $this->services['sidus_filter.form.type.sort_config'] = new \Sidus\FilterBundle\Form\Type\SortConfigType('Sidus\\FilterBundle\\DTO\\SortConfig');
    }

    /*
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(${($_ = isset($this->services['swiftmailer.mailer.default.transport']) ? $this->services['swiftmailer.mailer.default.transport'] : $this->get('swiftmailer.mailer.default.transport')) && false ?: '_'});
    }

    /*
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        return $this->services['swiftmailer.mailer.default.transport'] = new \Swift_Transport_SpoolTransport(${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['swiftmailer.mailer.default.spool']) ? $this->services['swiftmailer.mailer.default.spool'] : $this->get('swiftmailer.mailer.default.spool')) && false ?: '_'});
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), ${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'});

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}))->configure($instance);

        return $instance;
    }

    /*
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /*
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /*
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /*
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /*
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /*
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /*
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /*
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /*
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /*
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /*
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /*
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /*
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /*
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /*
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /*
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', ${($_ = isset($this->services['translation.extractor.php']) ? $this->services['translation.extractor.php'] : $this->get('translation.extractor.php')) && false ?: '_'});
        $instance->addExtractor('twig', ${($_ = isset($this->services['twig.translation.extractor']) ? $this->services['twig.translation.extractor'] : $this->get('twig.translation.extractor')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /*
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance
     */
    protected function getTranslation_LoaderService()
    {
        $a = ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->get('translation.loader.xliff')) && false ?: '_'};

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->get('translation.loader.php')) && false ?: '_'});
        $instance->addLoader('yml', ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->get('translation.loader.yml')) && false ?: '_'});
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->get('translation.loader.po')) && false ?: '_'});
        $instance->addLoader('mo', ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->get('translation.loader.mo')) && false ?: '_'});
        $instance->addLoader('ts', ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->get('translation.loader.qt')) && false ?: '_'});
        $instance->addLoader('csv', ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->get('translation.loader.csv')) && false ?: '_'});
        $instance->addLoader('res', ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->get('translation.loader.res')) && false ?: '_'});
        $instance->addLoader('dat', ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->get('translation.loader.dat')) && false ?: '_'});
        $instance->addLoader('ini', ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->get('translation.loader.ini')) && false ?: '_'});
        $instance->addLoader('json', ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->get('translation.loader.json')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', ${($_ = isset($this->services['translation.dumper.php']) ? $this->services['translation.dumper.php'] : $this->get('translation.dumper.php')) && false ?: '_'});
        $instance->addDumper('xlf', ${($_ = isset($this->services['translation.dumper.xliff']) ? $this->services['translation.dumper.xliff'] : $this->get('translation.dumper.xliff')) && false ?: '_'});
        $instance->addDumper('po', ${($_ = isset($this->services['translation.dumper.po']) ? $this->services['translation.dumper.po'] : $this->get('translation.dumper.po')) && false ?: '_'});
        $instance->addDumper('mo', ${($_ = isset($this->services['translation.dumper.mo']) ? $this->services['translation.dumper.mo'] : $this->get('translation.dumper.mo')) && false ?: '_'});
        $instance->addDumper('yml', ${($_ = isset($this->services['translation.dumper.yml']) ? $this->services['translation.dumper.yml'] : $this->get('translation.dumper.yml')) && false ?: '_'});
        $instance->addDumper('ts', ${($_ = isset($this->services['translation.dumper.qt']) ? $this->services['translation.dumper.qt'] : $this->get('translation.dumper.qt')) && false ?: '_'});
        $instance->addDumper('csv', ${($_ = isset($this->services['translation.dumper.csv']) ? $this->services['translation.dumper.csv'] : $this->get('translation.dumper.csv')) && false ?: '_'});
        $instance->addDumper('ini', ${($_ = isset($this->services['translation.dumper.ini']) ? $this->services['translation.dumper.ini'] : $this->get('translation.dumper.ini')) && false ?: '_'});
        $instance->addDumper('json', ${($_ = isset($this->services['translation.dumper.json']) ? $this->services['translation.dumper.json'] : $this->get('translation.dumper.json')) && false ?: '_'});
        $instance->addDumper('res', ${($_ = isset($this->services['translation.dumper.res']) ? $this->services['translation.dumper.res'] : $this->get('translation.dumper.res')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->get('translation.loader.csv')) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->get('translation.loader.dat')) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->get('translation.loader.ini')) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->get('translation.loader.json')) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->get('translation.loader.mo')) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->get('translation.loader.php')) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->get('translation.loader.po')) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->get('translation.loader.qt')) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->get('translation.loader.res')) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->get('translation.loader.xliff')) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->get('translation.loader.yml')) && false ?: '_'};
        })), new \Symfony\Component\Translation\MessageSelector(), 'en', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => false, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.ar.yml'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ar.xliff')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.az.xliff')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ca.xliff')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.cs.xliff')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.da.xliff')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.de.yml'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.de.xliff')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.en.yml'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.en.xliff'), 5 => ($this->targetDirs[3].'/vendor/oneup/uploader-bundle/Oneup/UploaderBundle/Resources/translations/OneupUploaderBundle.en.yml'), 6 => ($this->targetDirs[3].'/vendor/sidus/eav-model-bundle/Resources/translations/messages.en.yml'), 7 => ($this->targetDirs[3].'/vendor/sidus/filter-bundle/Resources/translations/messages.en.yml'), 8 => ($this->targetDirs[3].'/vendor/sidus/eav-bootstrap-bundle/Resources/translations/messages.en.yml'), 9 => ($this->targetDirs[3].'/vendor/sidus/datagrid-bundle/Resources/translations/messages.en.yml'), 10 => ($this->targetDirs[3].'/vendor/sidus/eav-variant-bundle/Resources/translations/messages.en.yml'), 11 => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/AdminBundle/Resources/translations/messages.en.yml'), 12 => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/UserBundle/Resources/translations/messages.en.yml'), 13 => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/AssetBundle/Resources/translations/messages.en.yml')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.es.yml'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.es.xliff')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fa.xliff')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.fr.yml'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fr.xliff'), 5 => ($this->targetDirs[3].'/vendor/sidus/filter-bundle/Resources/translations/messages.fr.yml'), 6 => ($this->targetDirs[3].'/vendor/sidus/datagrid-bundle/Resources/translations/messages.fr.yml'), 7 => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/AdminBundle/Resources/translations/messages.fr.yml'), 8 => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/UserBundle/Resources/translations/messages.fr.yml')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.hr.xliff')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.it.yml'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.it.xliff')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.ja.yml')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.lt.yml')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.nl.yml'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.nl.xliff')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.pl.yml'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pl.xliff')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.pt.yml'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pt.xliff')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ro.xliff')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.ru.yml'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ru.xliff')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.sk.yml'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sk.xliff')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.sl.yml'), 4 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sl.xliff')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Cyrl.xliff')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Latn.xliff')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.sv.yml')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.th.xliff')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.tr.xliff')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/translations/pagination.uk.yml'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.uk.xliff')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.zh_CN.xliff')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'oc' => array(0 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.oc.xliff')))));

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->get('config_cache_factory')) && false ?: '_'});
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /*
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig\Environment A Twig\Environment instance
     */
    protected function getTwigService()
    {
        $a = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'};

        $b = new \Symfony\Bridge\Twig\AppVariable();
        $b->setEnvironment('prod');
        $b->setDebug(false);
        if ($this->has('security.token_storage')) {
            $b->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $b->setRequestStack($a);
        }

        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->get('twig.loader')) && false ?: '_'}, array('debug' => false, 'strict_variables' => false, 'form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'SidusDataGridBundle:Form:fields.html.twig', 2 => 'CleverAgeEAVManagerLayoutBundle:Form:form.fields.html.twig'), 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->get('assets.packages')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($a, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($a));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, false, array(), array(0 => 'CleverAgeEAVManagerLayoutBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(${($_ = isset($this->services['mopa_bootstrap.twig.extension.bootstrap_form']) ? $this->services['mopa_bootstrap.twig.extension.bootstrap_form'] : $this->get('mopa_bootstrap.twig.extension.bootstrap_form')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['mopa_bootstrap.twig.extension.bootstrap_icon']) ? $this->services['mopa_bootstrap.twig.extension.bootstrap_icon'] : $this->get('mopa_bootstrap.twig.extension.bootstrap_icon')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['mopa_bootstrap.twig.extension.bootstrap_flash']) ? $this->services['mopa_bootstrap.twig.extension.bootstrap_flash'] : $this->get('mopa_bootstrap.twig.extension.bootstrap_flash')) && false ?: '_'});
        $instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension($this));
        $instance->addExtension(${($_ = isset($this->services['oneup_uploader.twig.extension.uploader']) ? $this->services['oneup_uploader.twig.extension.uploader'] : $this->get('oneup_uploader.twig.extension.uploader')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sidus_eav_model.twig.extension']) ? $this->services['sidus_eav_model.twig.extension'] : $this->get('sidus_eav_model.twig.extension')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sidus_data_grid.renderer.twig']) ? $this->services['sidus_data_grid.renderer.twig'] : $this->get('sidus_data_grid.renderer.twig')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sidus_file_upload.twig.upload_extension']) ? $this->services['sidus_file_upload.twig.upload_extension'] : $this->get('sidus_file_upload.twig.upload_extension')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['sidus_admin.twig.extension.admin']) ? $this->services['sidus_admin.twig.extension.admin'] : $this->get('sidus_admin.twig.extension.admin')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['twig.extension.stfalcon_tinymce']) ? $this->services['twig.extension.stfalcon_tinymce'] : $this->get('twig.extension.stfalcon_tinymce')) && false ?: '_'});
        $instance->addExtension(new \Liip\ImagineBundle\Templating\ImagineExtension(${($_ = isset($this->services['liip_imagine.cache.manager']) ? $this->services['liip_imagine.cache.manager'] : $this->get('liip_imagine.cache.manager')) && false ?: '_'}));
        $instance->addExtension(${($_ = isset($this->services['exercise_html_purifier.twig_extension']) ? $this->services['exercise_html_purifier.twig_extension'] : $this->get('exercise_html_purifier.twig_extension')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['eavmanager.twig.context.extension']) ? $this->services['eavmanager.twig.context.extension'] : $this->get('eavmanager.twig.context.extension')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['eavmanager_asset.twig.media.extension']) ? $this->services['eavmanager_asset.twig.media.extension'] : $this->get('eavmanager_asset.twig.media.extension')) && false ?: '_'});
        $instance->addGlobal('app', $b);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->get('twig.runtime.httpkernel')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->get('twig.form.renderer')) && false ?: '_'};
        }))));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, false);
    }

    /*
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, 'twig.controller.exception:showAction');
    }

    /*
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'twig.extension.stfalcon_tinymce' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension A Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension instance
     */
    protected function getTwig_Extension_StfalconTinymceService()
    {
        return $this->services['twig.extension.stfalcon_tinymce'] = new \Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension($this);
    }

    /*
     * Gets the 'twig.form.renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer A Symfony\Bridge\Twig\Form\TwigRenderer instance
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'MopaBootstrapBundle:Form:fields.html.twig', 2 => 'SidusDataGridBundle:Form:fields.html.twig', 3 => 'CleverAgeEAVManagerLayoutBundle:Form:form.fields.html.twig', 4 => 'LiipImagineBundle:Form:form_div_layout.html.twig', 5 => 'SidusFileUploadBundle:Form:fields.html.twig'), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}), ${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle/Resources/views'), 'MopaBootstrap');
        $instance->addPath(($this->targetDirs[3].'/vendor/sidus/eav-variant-bundle/Resources/views'), 'SidusEAVModel');
        $instance->addPath(($this->targetDirs[3].'/vendor/sidus/filter-bundle/Resources/views'), 'SidusFilter');
        $instance->addPath(($this->targetDirs[3].'/vendor/sidus/eav-bootstrap-bundle/Resources/views'), 'SidusEAVBootstrap');
        $instance->addPath(($this->targetDirs[3].'/vendor/sidus/datagrid-bundle/Resources/views'), 'SidusDataGrid');
        $instance->addPath(($this->targetDirs[3].'/vendor/sidus/eav-variant-bundle/Resources/views'), 'SidusEAVVariant');
        $instance->addPath(($this->targetDirs[3].'/vendor/sidus/file-upload-bundle/Resources/views'), 'SidusFileUpload');
        $instance->addPath(($this->targetDirs[3].'/vendor/stfalcon/tinymce-bundle/Stfalcon/Bundle/TinymceBundle/Resources/views'), 'StfalconTinymce');
        $instance->addPath(($this->targetDirs[3].'/vendor/liip/imagine-bundle/Resources/views'), 'LiipImagine');
        $instance->addPath(($this->targetDirs[3].'/src/MyEML/EAVModelBundle/Resources/views'), 'CleverAgeEAVManagerEAVModel');
        $instance->addPath(($this->targetDirs[3].'/vendor/cleverage/eav-manager/LayoutBundle/Resources/views'), 'CleverAgeEAVManagerLayout');
        $instance->addPath(($this->targetDirs[3].'/vendor/cleverage/eav-manager/AdminBundle/Resources/views'), 'CleverAgeEAVManagerAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/cleverage/eav-manager/UserBundle/Resources/views'), 'CleverAgeEAVManagerUser');
        $instance->addPath(($this->targetDirs[3].'/src/MyEML/EAVModelBundle/Resources/views'), 'MyEMLEAVModel');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /*
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig\Profiler\Profile A Twig\Profiler\Profile instance
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /*
     * Gets the 'twig.runtime.httpkernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime A Symfony\Bridge\Twig\Extension\HttpKernelRuntime instance
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->services['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(${($_ = isset($this->services['fragment.handler']) ? $this->services['fragment.handler'] : $this->get('fragment.handler')) && false ?: '_'});
    }

    /*
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
    }

    /*
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /*
     * Gets the 'validate_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener A Symfony\Component\HttpKernel\EventListener\ValidateRequestListener instance
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /*
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}->getValidator();
    }

    /*
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Sidus\\EAVModelBundle\\Validator\\Constraints\\DataValidator' => function () {
            return ${($_ = isset($this->services['sidus_eav_model.validator.sidus_data']) ? $this->services['sidus_eav_model.validator.sidus_data'] : $this->get('sidus_eav_model.validator.sidus_data')) && false ?: '_'};
        }, 'Sidus\\EAVVariantBundle\\Validator\\Constraints\\UniqueVariantValidator' => function () {
            return ${($_ = isset($this->services['sidus_eav_variant.validator.unique_variant']) ? $this->services['sidus_eav_variant.validator.unique_variant'] : $this->get('sidus_eav_variant.validator.unique_variant')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->get('validator.email')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }, 'doctrine.orm.validator.unique' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'sidus_unique_variant' => function () {
            return ${($_ = isset($this->services['sidus_eav_variant.validator.unique_variant']) ? $this->services['sidus_eav_variant.validator.unique_variant'] : $this->get('sidus_eav_variant.validator.unique_variant')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }))));
        $instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'});
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')));
        $instance->addYamlMappings(array(0 => ($this->targetDirs[3].'/vendor/sidus/file-upload-bundle/Resources/config/validation.yml'), 1 => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/EAVModelBundle/Resources/config/validation.yml'), 2 => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/UserBundle/Resources/config/validation.yml')));
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMetadataCache(new \Symfony\Component\Validator\Mapping\Cache\Psr6Cache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'})));
        $instance->addObjectInitializers(array(0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->get('doctrine.orm.validator_initializer')) && false ?: '_'}));

        return $instance;
    }

    /*
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /*
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /*
     * Gets the 'white_october_pagerfanta.view_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Pagerfanta\View\ViewFactory A Pagerfanta\View\ViewFactory instance
     */
    protected function getWhiteOctoberPagerfanta_ViewFactoryService()
    {
        $a = ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'};

        $b = new \Pagerfanta\View\DefaultView();

        $c = new \Pagerfanta\View\TwitterBootstrapView();

        $d = new \Pagerfanta\View\TwitterBootstrap3View();

        $e = new \Pagerfanta\View\SemanticUiView();

        $this->services['white_october_pagerfanta.view_factory'] = $instance = new \Pagerfanta\View\ViewFactory(array());

        $instance->add(array('default' => $b, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($b, $a), 'twitter_bootstrap' => $c, 'twitter_bootstrap3' => $d, 'semantic_ui' => $e, 'twitter_bootstrap3_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap3TranslatedView($d, $a), 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($c, $a), 'semantic_ui_translated' => new \WhiteOctober\PagerfantaBundle\View\SemanticUiTranslatedView($e, $a)));

        return $instance;
    }

    /*
     * Gets the 'annotations.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader A Doctrine\Common\Annotations\AnnotationReader instance
     */
    protected function getAnnotations_ReaderService()
    {
        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the 'argument_resolver.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver A Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver instance
     */
    protected function getArgumentResolver_DefaultService()
    {
        return $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /*
     * Gets the 'argument_resolver.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver A Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver instance
     */
    protected function getArgumentResolver_RequestService()
    {
        return $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /*
     * Gets the 'argument_resolver.request_attribute' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver A Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver instance
     */
    protected function getArgumentResolver_RequestAttributeService()
    {
        return $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /*
     * Gets the 'argument_resolver.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver A Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver instance
     */
    protected function getArgumentResolver_ServiceService()
    {
        return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array()));
    }

    /*
     * Gets the 'argument_resolver.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver A Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver instance
     */
    protected function getArgumentResolver_SessionService()
    {
        return $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /*
     * Gets the 'argument_resolver.variadic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver A Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver instance
     */
    protected function getArgumentResolver_VariadicService()
    {
        return $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /*
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance
     */
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, $this, $this->getParameterBag(), ($this->targetDirs[2].'/../web'), false);
    }

    /*
     * Gets the 'cache.annotations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_AnnotationsService($lazyLoad = true)
    {
        return $this->services['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('UjDN3P6eQ0', 0, 'FvFUuaWroj3O8kvsz0e55V', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'cache.property_access' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_PropertyAccessService()
    {
        return $this->services['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('6oXzQANjhl', NULL, 'FvFUuaWroj3O8kvsz0e55V', ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'cache.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_SerializerService($lazyLoad = true)
    {
        return $this->services['cache.serializer'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('tfUHr8kKhU', 0, 'FvFUuaWroj3O8kvsz0e55V', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'cache.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_ValidatorService($lazyLoad = true)
    {
        return $this->services['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('l+5bipZdaL', 0, 'FvFUuaWroj3O8kvsz0e55V', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'console.error_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener A Symfony\Component\Console\EventListener\ErrorListener instance
     */
    protected function getConsole_ErrorListenerService()
    {
        return $this->services['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(${($_ = isset($this->services['monolog.logger.console']) ? $this->services['monolog.logger.console'] : $this->get('monolog.logger.console', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /*
     * Gets the 'debug.file_link_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter A Symfony\Component\HttpKernel\Debug\FileLinkFormatter instance
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL);
    }

    /*
     * Gets the 'eavmanager_security.family.voter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \CleverAge\EAVManager\SecurityBundle\Voter\FamilyVoter A CleverAge\EAVManager\SecurityBundle\Voter\FamilyVoter instance
     */
    protected function getEavmanagerSecurity_Family_VoterService()
    {
        return $this->services['eavmanager_security.family.voter'] = new \CleverAge\EAVManager\SecurityBundle\Voter\FamilyVoter(${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->get('security.role_hierarchy')) && false ?: '_'});
    }

    /*
     * Gets the 'eavmanager_user.normalizer.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \CleverAge\EAVManager\UserBundle\Serializer\Normalizer\UserNormalizer A CleverAge\EAVManager\UserBundle\Serializer\Normalizer\UserNormalizer instance
     */
    protected function getEavmanagerUser_Normalizer_UserService()
    {
        $this->services['eavmanager_user.normalizer.user'] = $instance = new \CleverAge\EAVManager\UserBundle\Serializer\Normalizer\UserNormalizer(${($_ = isset($this->services['serializer.mapping.cache_class_metadata_factory']) ? $this->services['serializer.mapping.cache_class_metadata_factory'] : $this->getSerializer_Mapping_CacheClassMetadataFactoryService()) && false ?: '_'}, NULL, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'}, NULL, ${($_ = isset($this->services['sidus_eav_model.serializer.handler.max_depth']) ? $this->services['sidus_eav_model.serializer.handler.max_depth'] : $this->get('sidus_eav_model.serializer.handler.max_depth')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.serializer.handler.by_reference']) ? $this->services['sidus_eav_model.serializer.handler.by_reference'] : $this->get('sidus_eav_model.serializer.handler.by_reference')) && false ?: '_'});

        $instance->setIgnoredAttributes(array(0 => 'password', 1 => 'plainPassword', 2 => 'salt', 3 => 'authenticationToken', 4 => 'rawRoles', 5 => 'combinedFamilyPermissions'));

        return $instance;
    }

    /*
     * Gets the 'form.server_params' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Util\ServerParams A Symfony\Component\Form\Util\ServerParams instance
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /*
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'})));
    }

    /*
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /*
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->get('security.csrf.token_manager')) && false ?: '_'}, true, '_token', ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'}, 'validators', ${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'});
    }

    /*
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'}));
    }

    /*
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /*
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /*
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /*
     * Gets the 'form.type_extension.upload.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension instance
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'}, 'validators');
    }

    /*
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /*
     * Gets the 'monolog.processor.psr_log_message' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor A Monolog\Processor\PsrLogMessageProcessor instance
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /*
     * Gets the 'oneup_flysystem.resources_adapter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \League\Flysystem\Adapter\Local A League\Flysystem\Adapter\Local instance
     */
    protected function getOneupFlysystem_ResourcesAdapterService()
    {
        return $this->services['oneup_flysystem.resources_adapter'] = new \League\Flysystem\Adapter\Local(($this->targetDirs[2].'/data/resources'), 2, 2, array('file' => array('public' => 420, 'private' => 384), 'dir' => array('public' => 493, 'private' => 448)));
    }

    /*
     * Gets the 'oneup_uploader.error_handler.blueimp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Oneup\UploaderBundle\Uploader\ErrorHandler\BlueimpErrorHandler A Oneup\UploaderBundle\Uploader\ErrorHandler\BlueimpErrorHandler instance
     */
    protected function getOneupUploader_ErrorHandler_BlueimpService()
    {
        return $this->services['oneup_uploader.error_handler.blueimp'] = new \Oneup\UploaderBundle\Uploader\ErrorHandler\BlueimpErrorHandler(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->get('translator.default')) && false ?: '_'});
    }

    /*
     * Gets the 'resolve_controller_name_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber A Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber instance
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'});
    }

    /*
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the 'security.access.authenticated_voter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter A Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter instance
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        return $this->services['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'});
    }

    /*
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->getSecurity_Access_AuthenticatedVoterService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.role_hierarchy_voter']) ? $this->services['security.access.role_hierarchy_voter'] : $this->getSecurity_Access_RoleHierarchyVoterService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->getSecurity_Access_ExpressionVoterService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['eavmanager_security.family.voter']) ? $this->services['eavmanager_security.family.voter'] : $this->getEavmanagerSecurity_Family_VoterService()) && false ?: '_'};
        }, 4), 'affirmative', false, true);
    }

    /*
     * Gets the 'security.access.expression_voter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter A Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter instance
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        return $this->services['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /*
     * Gets the 'security.access.role_hierarchy_voter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter A Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter instance
     */
    protected function getSecurity_Access_RoleHierarchyVoterService()
    {
        return $this->services['security.access.role_hierarchy_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->get('security.role_hierarchy')) && false ?: '_'});
    }

    /*
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.main']) ? $this->services['security.authentication.provider.dao.main'] : $this->getSecurity_Authentication_Provider_Dao_MainService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : $this->getSecurity_Authentication_Provider_Anonymous_MainService()) && false ?: '_'};
        }, 2), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->get('event_dispatcher')) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'security.authentication.provider.anonymous.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider A Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider instance
     */
    protected function getSecurity_Authentication_Provider_Anonymous_MainService()
    {
        return $this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5963aba619a763.40199936');
    }

    /*
     * Gets the 'security.authentication.provider.dao.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider A Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider instance
     */
    protected function getSecurity_Authentication_Provider_Dao_MainService()
    {
        return $this->services['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['eavmanager_user.user.provider']) ? $this->services['eavmanager_user.user.provider'] : $this->get('eavmanager_user.user.provider')) && false ?: '_'}, new \Symfony\Component\Security\Core\User\UserChecker(), 'main', ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, true);
    }

    /*
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /*
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->registerListener('main', 'logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher A Symfony\Component\HttpFoundation\RequestMatcher instance
     */
    protected function getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()
    {
        return $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/');
    }

    /*
     * Gets the 'security.user_value_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver A Symfony\Bundle\SecurityBundle\SecurityUserValueResolver instance
     */
    protected function getSecurity_UserValueResolverService()
    {
        return $this->services['security.user_value_resolver'] = new \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'});
    }

    /*
     * Gets the 'serializer.mapping.cache_class_metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory A Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory instance
     */
    protected function getSerializer_Mapping_CacheClassMetadataFactoryService()
    {
        return $this->services['serializer.mapping.cache_class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}))), NULL), ${($_ = isset($this->services['serializer.mapping.cache.symfony']) ? $this->services['serializer.mapping.cache.symfony'] : $this->get('serializer.mapping.cache.symfony')) && false ?: '_'});
    }

    /*
     * Gets the 'service_locator.e64d23c3bf770e2cf44b71643280668d' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator A Symfony\Component\DependencyInjection\ServiceLocator instance
     */
    protected function getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()
    {
        return $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('esi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.esi']) ? $this->services['fragment.renderer.esi'] : $this->get('fragment.renderer.esi')) && false ?: '_'};
        }, 'hinclude' => function () {
            return ${($_ = isset($this->services['fragment.renderer.hinclude']) ? $this->services['fragment.renderer.hinclude'] : $this->get('fragment.renderer.hinclude')) && false ?: '_'};
        }, 'inline' => function () {
            return ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'};
        }, 'ssi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.ssi']) ? $this->services['fragment.renderer.ssi'] : $this->get('fragment.renderer.ssi')) && false ?: '_'};
        }));
    }

    /*
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /*
     * Gets the 'sidus_eav_model.normalizer.attribute' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sidus\EAVModelBundle\Serializer\Normalizer\AttributeNormalizer A Sidus\EAVModelBundle\Serializer\Normalizer\AttributeNormalizer instance
     */
    protected function getSidusEavModel_Normalizer_AttributeService()
    {
        $this->services['sidus_eav_model.normalizer.attribute'] = $instance = new \Sidus\EAVModelBundle\Serializer\Normalizer\AttributeNormalizer(${($_ = isset($this->services['serializer.mapping.cache_class_metadata_factory']) ? $this->services['serializer.mapping.cache_class_metadata_factory'] : $this->getSerializer_Mapping_CacheClassMetadataFactoryService()) && false ?: '_'}, NULL, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'}, NULL, ${($_ = isset($this->services['sidus_eav_model.serializer.handler.max_depth']) ? $this->services['sidus_eav_model.serializer.handler.max_depth'] : $this->get('sidus_eav_model.serializer.handler.max_depth')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.serializer.handler.by_reference']) ? $this->services['sidus_eav_model.serializer.handler.by_reference'] : $this->get('sidus_eav_model.serializer.handler.by_reference')) && false ?: '_'});

        $instance->setIgnoredAttributes(array(0 => 'family'));

        return $instance;
    }

    /*
     * Gets the 'sidus_eav_model.normalizer.data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sidus\EAVModelBundle\Serializer\Normalizer\EAVDataNormalizer A Sidus\EAVModelBundle\Serializer\Normalizer\EAVDataNormalizer instance
     */
    protected function getSidusEavModel_Normalizer_DataService()
    {
        $this->services['sidus_eav_model.normalizer.data'] = $instance = new \Sidus\EAVModelBundle\Serializer\Normalizer\EAVDataNormalizer(${($_ = isset($this->services['serializer.mapping.cache_class_metadata_factory']) ? $this->services['serializer.mapping.cache_class_metadata_factory'] : $this->getSerializer_Mapping_CacheClassMetadataFactoryService()) && false ?: '_'}, NULL, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'}, NULL, ${($_ = isset($this->services['sidus_eav_model.serializer.handler.max_depth']) ? $this->services['sidus_eav_model.serializer.handler.max_depth'] : $this->get('sidus_eav_model.serializer.handler.max_depth')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.serializer.handler.circular_reference']) ? $this->services['sidus_eav_model.serializer.handler.circular_reference'] : $this->get('sidus_eav_model.serializer.handler.circular_reference')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.serializer.handler.by_reference']) ? $this->services['sidus_eav_model.serializer.handler.by_reference'] : $this->get('sidus_eav_model.serializer.handler.by_reference')) && false ?: '_'});

        $instance->setIgnoredAttributes(array(0 => 'refererValues', 1 => 'refererDatas', 2 => 'currentContext', 3 => 'values', 4 => 'valueData', 5 => 'valuesData', 6 => 'value', 7 => 'familyCode', 8 => 'empty'));
        $instance->setReferenceAttributes(array(0 => 'id', 1 => 'identifier', 2 => 'familyCode', 3 => 'label'));

        return $instance;
    }

    /*
     * Gets the 'sidus_eav_model.normalizer.family' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Sidus\EAVModelBundle\Serializer\Normalizer\FamilyNormalizer A Sidus\EAVModelBundle\Serializer\Normalizer\FamilyNormalizer instance
     */
    protected function getSidusEavModel_Normalizer_FamilyService()
    {
        $this->services['sidus_eav_model.normalizer.family'] = $instance = new \Sidus\EAVModelBundle\Serializer\Normalizer\FamilyNormalizer(${($_ = isset($this->services['serializer.mapping.cache_class_metadata_factory']) ? $this->services['serializer.mapping.cache_class_metadata_factory'] : $this->getSerializer_Mapping_CacheClassMetadataFactoryService()) && false ?: '_'}, NULL, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'}, NULL, ${($_ = isset($this->services['sidus_eav_model.serializer.handler.max_depth']) ? $this->services['sidus_eav_model.serializer.handler.max_depth'] : $this->get('sidus_eav_model.serializer.handler.max_depth')) && false ?: '_'}, ${($_ = isset($this->services['sidus_eav_model.serializer.handler.by_reference']) ? $this->services['sidus_eav_model.serializer.handler.by_reference'] : $this->get('sidus_eav_model.serializer.handler.by_reference')) && false ?: '_'});

        $instance->setIgnoredAttributes(array(0 => 'matchingCodes', 1 => 'valueClass', 2 => 'context', 3 => 'parent', 4 => 'children'));

        return $instance;
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /*
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'}, __DIR__);
    }

    /*
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    /*
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]);
    }

    /*
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /*
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'session.save_path' => false,
        'router.resource' => false,
        'assetic.read_from' => false,
        'assetic.write_to' => false,
        'sidus_eav_publishing.queue.configuration' => false,
    );
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = $this->targetDirs[2]; break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'AsseticBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/assetic-bundle'),
                    'namespace' => 'Symfony\\Bundle\\AsseticBundle',
                ),
                'MopaBootstrapBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/mopa/bootstrap-bundle/Mopa/Bundle/BootstrapBundle'),
                    'namespace' => 'Mopa\\Bundle\\BootstrapBundle',
                ),
                'WhiteOctoberPagerfantaBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle'),
                    'namespace' => 'WhiteOctober\\PagerfantaBundle',
                ),
                'PinanoSelect2Bundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/pinano/select2-bundle/Pinano/Select2Bundle'),
                    'namespace' => 'Pinano\\Select2Bundle',
                ),
                'OneupUploaderBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/oneup/uploader-bundle/Oneup/UploaderBundle'),
                    'namespace' => 'Oneup\\UploaderBundle',
                ),
                'OneupFlysystemBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/oneup/flysystem-bundle'),
                    'namespace' => 'Oneup\\FlysystemBundle',
                ),
                'CircleRestClientBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/ci/restclientbundle/Circle/RestClientBundle'),
                    'namespace' => 'Circle\\RestClientBundle',
                ),
                'SidusEAVModelBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sidus/eav-model-bundle'),
                    'namespace' => 'Sidus\\EAVModelBundle',
                ),
                'SidusFilterBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sidus/filter-bundle'),
                    'namespace' => 'Sidus\\FilterBundle',
                ),
                'SidusEAVFilterBundle' => array(
                    'parent' => 'SidusFilterBundle',
                    'path' => ($this->targetDirs[3].'/vendor/sidus/eav-filter-bundle'),
                    'namespace' => 'Sidus\\EAVFilterBundle',
                ),
                'SidusEAVBootstrapBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sidus/eav-bootstrap-bundle'),
                    'namespace' => 'Sidus\\EAVBootstrapBundle',
                ),
                'SidusDataGridBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sidus/datagrid-bundle'),
                    'namespace' => 'Sidus\\DataGridBundle',
                ),
                'SidusEAVDataGridBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sidus/eav-datagrid-bundle'),
                    'namespace' => 'Sidus\\EAVDataGridBundle',
                ),
                'SidusEAVVariantBundle' => array(
                    'parent' => 'SidusEAVModelBundle',
                    'path' => ($this->targetDirs[3].'/vendor/sidus/eav-variant-bundle'),
                    'namespace' => 'Sidus\\EAVVariantBundle',
                ),
                'SidusPublishingBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sidus/publishing-bundle'),
                    'namespace' => 'Sidus\\PublishingBundle',
                ),
                'SidusFileUploadBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sidus/file-upload-bundle'),
                    'namespace' => 'Sidus\\FileUploadBundle',
                ),
                'SidusAdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sidus/admin-bundle'),
                    'namespace' => 'Sidus\\AdminBundle',
                ),
                'StfalconTinymceBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/stfalcon/tinymce-bundle/Stfalcon/Bundle/TinymceBundle'),
                    'namespace' => 'Stfalcon\\Bundle\\TinymceBundle',
                ),
                'FOSJsRoutingBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/jsrouting-bundle'),
                    'namespace' => 'FOS\\JsRoutingBundle',
                ),
                'LiipImagineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/liip/imagine-bundle'),
                    'namespace' => 'Liip\\ImagineBundle',
                ),
                'ExerciseHTMLPurifierBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/exercise/htmlpurifier-bundle'),
                    'namespace' => 'Exercise\\HTMLPurifierBundle',
                ),
                'DoctrineCacheBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ),
                'CleverAgeProcessBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/cleverage/process-bundle'),
                    'namespace' => 'CleverAge\\ProcessBundle',
                ),
                'CleverAgeEAVManagerEAVModelBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/EAVModelBundle'),
                    'namespace' => 'CleverAge\\EAVManager\\EAVModelBundle',
                ),
                'CleverAgeEAVManagerLayoutBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/LayoutBundle'),
                    'namespace' => 'CleverAge\\EAVManager\\LayoutBundle',
                ),
                'CleverAgeEAVManagerAdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/AdminBundle'),
                    'namespace' => 'CleverAge\\EAVManager\\AdminBundle',
                ),
                'CleverAgeEAVManagerUserBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/UserBundle'),
                    'namespace' => 'CleverAge\\EAVManager\\UserBundle',
                ),
                'CleverAgeEAVManagerSecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/SecurityBundle'),
                    'namespace' => 'CleverAge\\EAVManager\\SecurityBundle',
                ),
                'CleverAgeEAVManagerAssetBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/AssetBundle'),
                    'namespace' => 'CleverAge\\EAVManager\\AssetBundle',
                ),
                'CleverAgeEAVManagerApiPlatformBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/cleverage/eav-manager/ApiPlatformBundle'),
                    'namespace' => 'CleverAge\\EAVManager\\ApiPlatformBundle',
                ),
                'MyEMLEAVModelBundle' => array(
                    'parent' => 'CleverAgeEAVManagerEAVModelBundle',
                    'path' => ($this->targetDirs[3].'/src/MyEML/EAVModelBundle'),
                    'namespace' => 'MyEML\\EAVModelBundle',
                ),
            ); break;
            case 'session.save_path': $value = ($this->targetDirs[3].'/var/sessions/prod'); break;
            case 'router.resource': $value = ($this->targetDirs[2].'/config/routing.yml'); break;
            case 'assetic.read_from': $value = ($this->targetDirs[2].'/../web'); break;
            case 'assetic.write_to': $value = ($this->targetDirs[2].'/../web'); break;
            case 'sidus_eav_publishing.queue.configuration': $value = array(
                'base_directory' => ($this->targetDirs[2].'/../var/publishing'),
                'lockfile' => ($this->targetDirs[2].'/../var/publishing/.lock'),
                'override_timeout' => 60,
            ); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'MopaBootstrapBundle' => 'Mopa\\Bundle\\BootstrapBundle\\MopaBootstrapBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'PinanoSelect2Bundle' => 'Pinano\\Select2Bundle\\PinanoSelect2Bundle',
                'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle',
                'OneupFlysystemBundle' => 'Oneup\\FlysystemBundle\\OneupFlysystemBundle',
                'CircleRestClientBundle' => 'Circle\\RestClientBundle\\CircleRestClientBundle',
                'SidusEAVModelBundle' => 'Sidus\\EAVModelBundle\\SidusEAVModelBundle',
                'SidusFilterBundle' => 'Sidus\\FilterBundle\\SidusFilterBundle',
                'SidusEAVFilterBundle' => 'Sidus\\EAVFilterBundle\\SidusEAVFilterBundle',
                'SidusEAVBootstrapBundle' => 'Sidus\\EAVBootstrapBundle\\SidusEAVBootstrapBundle',
                'SidusDataGridBundle' => 'Sidus\\DataGridBundle\\SidusDataGridBundle',
                'SidusEAVDataGridBundle' => 'Sidus\\EAVDataGridBundle\\SidusEAVDataGridBundle',
                'SidusEAVVariantBundle' => 'Sidus\\EAVVariantBundle\\SidusEAVVariantBundle',
                'SidusPublishingBundle' => 'Sidus\\PublishingBundle\\SidusPublishingBundle',
                'SidusFileUploadBundle' => 'Sidus\\FileUploadBundle\\SidusFileUploadBundle',
                'SidusAdminBundle' => 'Sidus\\AdminBundle\\SidusAdminBundle',
                'StfalconTinymceBundle' => 'Stfalcon\\Bundle\\TinymceBundle\\StfalconTinymceBundle',
                'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'ExerciseHTMLPurifierBundle' => 'Exercise\\HTMLPurifierBundle\\ExerciseHTMLPurifierBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'CleverAgeProcessBundle' => 'CleverAge\\ProcessBundle\\CleverAgeProcessBundle',
                'CleverAgeEAVManagerEAVModelBundle' => 'CleverAge\\EAVManager\\EAVModelBundle\\CleverAgeEAVManagerEAVModelBundle',
                'CleverAgeEAVManagerLayoutBundle' => 'CleverAge\\EAVManager\\LayoutBundle\\CleverAgeEAVManagerLayoutBundle',
                'CleverAgeEAVManagerAdminBundle' => 'CleverAge\\EAVManager\\AdminBundle\\CleverAgeEAVManagerAdminBundle',
                'CleverAgeEAVManagerUserBundle' => 'CleverAge\\EAVManager\\UserBundle\\CleverAgeEAVManagerUserBundle',
                'CleverAgeEAVManagerSecurityBundle' => 'CleverAge\\EAVManager\\SecurityBundle\\CleverAgeEAVManagerSecurityBundle',
                'CleverAgeEAVManagerAssetBundle' => 'CleverAge\\EAVManager\\AssetBundle\\CleverAgeEAVManagerAssetBundle',
                'CleverAgeEAVManagerApiPlatformBundle' => 'CleverAge\\EAVManager\\ApiPlatformBundle\\CleverAgeEAVManagerApiPlatformBundle',
                'MyEMLEAVModelBundle' => 'MyEML\\EAVModelBundle\\MyEMLEAVModelBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'myeml_cdm',
            'database_user' => 'myeml_cdm',
            'database_password' => 'myeml_cdm',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'node_path' => '/usr/bin/nodejs',
            'node_uglifyjs_path' => '/usr/local/bin/uglifyjs',
            'node_uglifycss_path' => '/usr/local/bin/uglifycss',
            'trusted_proxies' => NULL,
            'session_memcached_host' => 'localhost',
            'session_memcached_port' => 11211,
            'session_memcached_prefix' => 'sess',
            'session_memcached_expire' => 3600,
            'session.handler_id' => 'session.handler.memcached',
            'clickable.template' => 'CleverAgeEAVManagerAdminBundle:Base:partials/clickable.column.html.twig',
            'eav_datagrid.actions' => 'CleverAgeEAVManagerAdminBundle:EAVData:partials/list.row.actions.html.twig',
            'datagrid.actions' => 'CleverAgeEAVManagerAdminBundle:Base:partials/list.row.actions.html.twig',
            'eav_form.type' => 'Sidus\\EAVBootstrapBundle\\Form\\Type\\TabbedDataType',
            'eav.controller' => 'CleverAgeEAVManagerAdminBundle:EAVData',
            'create.button' => array(
                'form_type' => 'CleverAge\\EAVManager\\AdminBundle\\Form\\Type\\AdminLink',
                'label' => 'admin.action.create.label',
                'action' => 'create',
                'icon' => 'plus',
                'attr' => array(
                    'class' => 'btn-primary',
                    'data-target-element' => '#tg_right',
                ),
            ),
            'sidus_data_class' => 'MyEML\\EAVModelBundle\\Entity\\Data',
            'sidus_value_class' => 'MyEML\\EAVModelBundle\\Entity\\Value',
            'sidus_eav_model.context.form_type' => 'MyEML\\EAVModelBundle\\Form\\ContextSwitcherType',
            'sidus_eav_model.context.default_context' => array(
                'campus' => 'lyon',
                'program' => 'master',
                'locale' => 'fr_FR',
                'profile' => 'student',
            ),
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.cache.file' => (__DIR__.'/validation.php'),
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'data_collector.templates' => array(

            ),
            'debug.error_handler.throw_at' => 0,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appProdProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appProdProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appProdProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.file' => (__DIR__.'/serialization.php'),
            'serializer.mapping.cache.prefix' => '',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_DATA_ADMIN',
                    1 => 'ROLE_USER_MANAGER',
                    2 => 'ROLE_MEDIA_MANAGER',
                    3 => 'ROLE_PROCESS_MANAGER',
                    4 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
                'ROLE_DATA_ADMIN' => array(
                    0 => 'ROLE_DATA_MANAGER',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'MopaBootstrapBundle:Form:fields.html.twig',
                2 => 'SidusDataGridBundle:Form:fields.html.twig',
                3 => 'CleverAgeEAVManagerLayoutBundle:Form:form.fields.html.twig',
                4 => 'LiipImagineBundle:Form:form_div_layout.html.twig',
                5 => 'SidusFileUploadBundle:Form:fields.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
                'sidus_family' => array(
                    'class' => 'Sidus\\EAVModelBundle\\Doctrine\\Types\\FamilyType',
                    'commented' => true,
                ),
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'CleverAgeEAVManagerLayoutBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/nodejs',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.filter.uglifyjs2.class' => 'Assetic\\Filter\\UglifyJs2Filter',
            'assetic.filter.uglifyjs2.bin' => '/usr/local/bin/uglifyjs',
            'assetic.filter.uglifyjs2.node' => '/usr/bin/nodejs',
            'assetic.filter.uglifyjs2.timeout' => NULL,
            'assetic.filter.uglifyjs2.node_paths' => array(

            ),
            'assetic.filter.uglifyjs2.compress' => false,
            'assetic.filter.uglifyjs2.beautify' => false,
            'assetic.filter.uglifyjs2.mangle' => false,
            'assetic.filter.uglifyjs2.screw_ie8' => false,
            'assetic.filter.uglifyjs2.comments' => false,
            'assetic.filter.uglifyjs2.wrap' => false,
            'assetic.filter.uglifyjs2.defines' => array(

            ),
            'assetic.filter.uglifycss.class' => 'Assetic\\Filter\\UglifyCssFilter',
            'assetic.filter.uglifycss.bin' => '/usr/local/bin/uglifycss',
            'assetic.filter.uglifycss.node' => '/usr/bin/nodejs',
            'assetic.filter.uglifycss.timeout' => NULL,
            'assetic.filter.uglifycss.node_paths' => array(

            ),
            'assetic.filter.uglifycss.expand_vars' => false,
            'assetic.filter.uglifycss.ugly_comments' => false,
            'assetic.filter.uglifycss.cute_comments' => false,
            'assetic.twig_extension.functions' => array(

            ),
            'mopa_bootstrap.bootstrap.install_path' => 'Resources/public/bootstrap',
            'mopa_bootstrap.twig.extension.form.class' => 'Mopa\\Bundle\\BootstrapBundle\\Twig\\FormExtension',
            'mopa_bootstrap.twig.extension.icon.class' => 'Mopa\\Bundle\\BootstrapBundle\\Twig\\IconExtension',
            'mopa_bootstrap.twig.extension.flash.class' => 'Mopa\\Bundle\\BootstrapBundle\\Twig\\FlashExtension',
            'mopa_bootstrap.form.type_extension.embed_form.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Extension\\EmbedFormExtension',
            'mopa_bootstrap.form.type_extension.static_text.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Extension\\StaticTextExtension',
            'mopa_bootstrap.form.type_extension.offset_button.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Extension\\OffsetButtonExtension',
            'mopa_bootstrap.form.type_extension.button.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Extension\\IconButtonExtension',
            'mopa_bootstrap.form.type_extension.help.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Extension\\HelpFormTypeExtension',
            'mopa_bootstrap.form.type_extension.legend.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Extension\\LegendFormTypeExtension',
            'mopa_bootstrap.form.type_extension.error.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Extension\\ErrorTypeFormTypeExtension',
            'mopa_bootstrap.form.type_extension.widget.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Extension\\WidgetFormTypeExtension',
            'mopa_bootstrap.form.type_extension.horizontal.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Extension\\HorizontalFormTypeExtension',
            'mopa_bootstrap.form.type_extension.widget_collection.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Extension\\WidgetCollectionFormTypeExtension',
            'mopa_bootstrap.form.type_extension.date.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Extension\\DateTypeExtension',
            'mopa_bootstrap.form.type_extension.datetime.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Extension\\DatetimeTypeExtension',
            'mopa_bootstrap.form.type_extension.time.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Extension\\TimeTypeExtension',
            'mopa_bootstrap.form.type_extension.tabbed.class' => 'Sidus\\EAVBootstrapBundle\\Form\\Extension\\TabbedFormTypeExtension',
            'mopa_bootstrap.form.type.tab.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Type\\TabType',
            'mopa_bootstrap.form.type.form_actions.class' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Type\\FormActionsType',
            'mopa_bootstrap.form.render_required_asterisk' => true,
            'mopa_bootstrap.form.render_optional_text' => false,
            'mopa_bootstrap.form.allow_legacy' => false,
            'mopa_bootstrap.form.templating' => 'MopaBootstrapBundle:Form:fields.html.twig',
            'mopa_bootstrap.form.horizontal' => true,
            'mopa_bootstrap.form.horizontal_label_class' => 'col-sm-3',
            'mopa_bootstrap.form.horizontal_label_div_class' => NULL,
            'mopa_bootstrap.form.horizontal_label_offset_class' => 'col-sm-offset-3',
            'mopa_bootstrap.form.horizontal_input_wrapper_class' => 'col-sm-9',
            'mopa_bootstrap.form.date_wrapper_class.year' => 'col-xs-4',
            'mopa_bootstrap.form.date_wrapper_class.month' => 'col-xs-4',
            'mopa_bootstrap.form.date_wrapper_class.day' => 'col-xs-4',
            'mopa_bootstrap.form.render_fieldset' => true,
            'mopa_bootstrap.form.render_collection_item' => true,
            'mopa_bootstrap.form.show_legend' => true,
            'mopa_bootstrap.form.show_child_legend' => false,
            'mopa_bootstrap.form.legend_tag' => 'legend',
            'mopa_bootstrap.form.checkbox_label' => 'both',
            'mopa_bootstrap.form.error_type' => NULL,
            'mopa_bootstrap.form.tabs.class' => 'nav nav-tabs',
            'mopa_bootstrap.form.help_widget.popover' => array(
                'title' => NULL,
                'content' => NULL,
                'trigger' => 'hover',
                'toggle' => 'popover',
                'placement' => 'right',
                'selector' => NULL,
            ),
            'mopa_bootstrap.form.help_label.tooltip' => array(
                'title' => NULL,
                'text' => NULL,
                'icon' => 'info-sign',
                'placement' => 'top',
            ),
            'mopa_bootstrap.form.help_label.popover' => array(
                'title' => NULL,
                'content' => NULL,
                'text' => NULL,
                'icon' => 'info-sign',
                'placement' => 'top',
            ),
            'mopa_bootstrap.form.help_block.tooltip' => array(
                'title' => NULL,
                'text' => NULL,
                'icon' => 'info-sign',
                'placement' => 'top',
            ),
            'mopa_bootstrap.form.help_block.popover' => array(
                'title' => NULL,
                'content' => NULL,
                'text' => NULL,
                'icon' => 'info-sign',
                'placement' => 'top',
            ),
            'mopa_bootstrap.form.collection.widget_remove_btn' => array(
                'attr' => array(
                    'class' => 'btn btn-default',
                ),
                'wrapper_div' => array(
                    'class' => 'form-group',
                ),
                'horizontal_wrapper_div' => array(
                    'class' => 'col-sm-3 col-sm-offset-3',
                ),
                'label' => 'remove_item',
                'translation_domain' => NULL,
                'icon' => NULL,
                'icon_inverted' => false,
            ),
            'mopa_bootstrap.form.collection.widget_add_btn' => array(
                'attr' => array(
                    'class' => 'btn btn-default',
                ),
                'label' => 'add_item',
                'translation_domain' => NULL,
                'icon' => NULL,
                'icon_inverted' => false,
            ),
            'mopa_bootstrap.icons.icon_set' => 'glyphicons',
            'mopa_bootstrap.icons.shortcut' => 'icon',
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'oneup_uploader.chunks.manager.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\ChunkManager',
            'oneup_uploader.chunks_storage.gaufrette.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\GaufretteStorage',
            'oneup_uploader.chunks_storage.flysystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\FlysystemStorage',
            'oneup_uploader.chunks_storage.filesystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\FilesystemStorage',
            'oneup_uploader.namer.uniqid.class' => 'Oneup\\UploaderBundle\\Uploader\\Naming\\UniqidNamer',
            'oneup_uploader.routing.loader.class' => 'Oneup\\UploaderBundle\\Routing\\RouteLoader',
            'oneup_uploader.storage.gaufrette.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\GaufretteStorage',
            'oneup_uploader.storage.flysystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FlysystemStorage',
            'oneup_uploader.storage.filesystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FilesystemStorage',
            'oneup_uploader.orphanage.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FilesystemOrphanageStorage',
            'oneup_uploader.orphanage.manager.class' => 'Oneup\\UploaderBundle\\Uploader\\Orphanage\\OrphanageManager',
            'oneup_uploader.controller.fineuploader.class' => 'Oneup\\UploaderBundle\\Controller\\FineUploaderController',
            'oneup_uploader.controller.blueimp.class' => 'Sidus\\FileUploadBundle\\Controller\\BlueimpController',
            'oneup_uploader.controller.uploadify.class' => 'Oneup\\UploaderBundle\\Controller\\UploadifyController',
            'oneup_uploader.controller.yui3.class' => 'Oneup\\UploaderBundle\\Controller\\YUI3Controller',
            'oneup_uploader.controller.fancyupload.class' => 'Oneup\\UploaderBundle\\Controller\\FancyUploadController',
            'oneup_uploader.controller.mooupload.class' => 'Oneup\\UploaderBundle\\Controller\\MooUploadController',
            'oneup_uploader.controller.plupload.class' => 'Oneup\\UploaderBundle\\Controller\\PluploadController',
            'oneup_uploader.controller.dropzone.class' => 'Oneup\\UploaderBundle\\Controller\\DropzoneController',
            'oneup_uploader.error_handler.noop.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\NoopErrorHandler',
            'oneup_uploader.error_handler.blueimp.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\BlueimpErrorHandler',
            'oneup_uploader.error_handler.dropzone.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\DropzoneErrorHandler',
            'oneup_uploader.chunks' => array(
                'maxage' => 604800,
                'storage' => array(
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'directory' => (__DIR__.'/uploader/chunks'),
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                    'prefix' => 'chunks',
                ),
                'load_distribution' => true,
            ),
            'oneup_uploader.orphanage' => array(
                'maxage' => 604800,
                'directory' => (__DIR__.'/uploader/orphanage'),
            ),
            'oneup_uploader.config.image' => array(
                'frontend' => 'blueimp',
                'allowed_mimetypes' => array(
                    0 => 'image/jpg',
                    1 => 'image/jpeg',
                    2 => 'image/png',
                    3 => 'image/gif',
                ),
                'storage' => array(
                    'type' => 'flysystem',
                    'filesystem' => 'oneup_flysystem.images_filesystem',
                    'service' => NULL,
                    'directory' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                ),
                'max_size' => 64000000,
                'custom_frontend' => array(
                    'name' => NULL,
                    'class' => NULL,
                ),
                'route_prefix' => '',
                'disallowed_mimetypes' => array(

                ),
                'error_handler' => NULL,
                'use_orphanage' => false,
                'enable_progress' => false,
                'enable_cancelation' => false,
                'namer' => 'oneup_uploader.namer.uniqid',
                'root_folder' => false,
            ),
            'oneup_uploader.config.document' => array(
                'frontend' => 'blueimp',
                'storage' => array(
                    'type' => 'flysystem',
                    'filesystem' => 'oneup_flysystem.documents_filesystem',
                    'service' => NULL,
                    'directory' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                ),
                'max_size' => 64000000,
                'custom_frontend' => array(
                    'name' => NULL,
                    'class' => NULL,
                ),
                'route_prefix' => '',
                'allowed_mimetypes' => array(

                ),
                'disallowed_mimetypes' => array(

                ),
                'error_handler' => NULL,
                'use_orphanage' => false,
                'enable_progress' => false,
                'enable_cancelation' => false,
                'namer' => 'oneup_uploader.namer.uniqid',
                'root_folder' => false,
            ),
            'oneup_uploader.config' => array(
                'mappings' => array(
                    'image' => array(
                        'frontend' => 'blueimp',
                        'allowed_mimetypes' => array(
                            0 => 'image/jpg',
                            1 => 'image/jpeg',
                            2 => 'image/png',
                            3 => 'image/gif',
                        ),
                        'storage' => array(
                            'type' => 'flysystem',
                            'filesystem' => 'oneup_flysystem.images_filesystem',
                            'service' => NULL,
                            'directory' => NULL,
                            'stream_wrapper' => NULL,
                            'sync_buffer_size' => '100K',
                        ),
                        'max_size' => 64000000,
                        'custom_frontend' => array(
                            'name' => NULL,
                            'class' => NULL,
                        ),
                        'route_prefix' => '',
                        'disallowed_mimetypes' => array(

                        ),
                        'error_handler' => NULL,
                        'use_orphanage' => false,
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'namer' => 'oneup_uploader.namer.uniqid',
                        'root_folder' => false,
                    ),
                    'document' => array(
                        'frontend' => 'blueimp',
                        'storage' => array(
                            'type' => 'flysystem',
                            'filesystem' => 'oneup_flysystem.documents_filesystem',
                            'service' => NULL,
                            'directory' => NULL,
                            'stream_wrapper' => NULL,
                            'sync_buffer_size' => '100K',
                        ),
                        'max_size' => 64000000,
                        'custom_frontend' => array(
                            'name' => NULL,
                            'class' => NULL,
                        ),
                        'route_prefix' => '',
                        'allowed_mimetypes' => array(

                        ),
                        'disallowed_mimetypes' => array(

                        ),
                        'error_handler' => NULL,
                        'use_orphanage' => false,
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'namer' => 'oneup_uploader.namer.uniqid',
                        'root_folder' => false,
                    ),
                ),
                'chunks' => array(
                    'maxage' => 604800,
                    'storage' => array(
                        'type' => 'filesystem',
                        'filesystem' => NULL,
                        'directory' => (__DIR__.'/uploader/chunks'),
                        'stream_wrapper' => NULL,
                        'sync_buffer_size' => '100K',
                        'prefix' => 'chunks',
                    ),
                    'load_distribution' => true,
                ),
                'orphanage' => array(
                    'maxage' => 604800,
                    'directory' => (__DIR__.'/uploader/orphanage'),
                ),
                'twig' => true,
            ),
            'oneup_uploader.controllers' => array(
                'image' => array(
                    0 => 'oneup_uploader.controller.image',
                    1 => array(
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'route_prefix' => '',
                    ),
                ),
                'document' => array(
                    0 => 'oneup_uploader.controller.document',
                    1 => array(
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'route_prefix' => '',
                    ),
                ),
            ),
            'oneup_uploader.maxsize' => array(
                'image' => 33554432.0,
                'document' => 33554432.0,
            ),
            'circle.restclient.curl.defaults' => array(
                10023 => array(
                    0 => 'Content-Type: text/plain',
                ),
                68 => 25,
                13 => 25,
                78 => 25,
                27 => true,
                32 => 3,
                52 => true,
                64 => true,
            ),
            'circle.restclient.class' => 'Circle\\RestClientBundle\\Services\\RestClient',
            'sidus_eav_model.entity.data.class' => 'MyEML\\EAVModelBundle\\Entity\\Data',
            'sidus_eav_model.entity.value.class' => 'MyEML\\EAVModelBundle\\Entity\\Value',
            'sidus_eav_model.form.collection_type' => 'Sidus\\EAVBootstrapBundle\\Form\\Type\\BootstrapCollectionType',
            'sidus_eav_model.context.global_mask' => array(

            ),
            'sidus_eav_model.attribute_type.default.class' => 'Sidus\\EAVModelBundle\\Model\\AttributeType',
            'sidus_eav_model.attribute_type.relation.class' => 'Sidus\\EAVModelBundle\\Model\\RelationAttributeType',
            'sidus_eav_model.attribute_type.eav_relation.class' => 'Sidus\\EAVModelBundle\\Model\\EAVRelationAttributeType',
            'sidus_eav_model.attribute_type.embed.class' => 'Sidus\\EAVModelBundle\\Model\\EmbedAttributeType',
            'sidus_eav_model.attribute_type.eav_embed.class' => 'Sidus\\EAVModelBundle\\Model\\EAVEmbedAttributeType',
            'sidus_eav_model.attribute_type.identifier.class' => 'Sidus\\EAVModelBundle\\Model\\IdentifierAttributeType',
            'sidus_eav_model.attribute.class' => 'Sidus\\EAVModelBundle\\Model\\Attribute',
            'sidus_eav_model.family.class' => 'Sidus\\EAVModelBundle\\Model\\Family',
            'sidus_eav_model.normalizer.data.ignored_attributes' => array(
                0 => 'refererValues',
                1 => 'refererDatas',
                2 => 'currentContext',
                3 => 'values',
                4 => 'valueData',
                5 => 'valuesData',
                6 => 'value',
                7 => 'familyCode',
                8 => 'empty',
            ),
            'sidus_eav_model.normalizer.data.reference_attributes' => array(
                0 => 'id',
                1 => 'identifier',
                2 => 'familyCode',
                3 => 'label',
            ),
            'sidus_eav_model.normalizer.family.ignored_attributes' => array(
                0 => 'matchingCodes',
                1 => 'valueClass',
                2 => 'context',
                3 => 'parent',
                4 => 'children',
            ),
            'sidus_eav_model.normalizer.attribute.ignored_attributes' => array(
                0 => 'family',
            ),
            'sidus_eav_model.denormalizer.data.ignored_attributes' => array(
                0 => 'createdBy',
                1 => 'updatedBy',
                2 => 'createdAt',
                3 => 'updatedAt',
                4 => 'label',
                5 => 'id',
                6 => 'identifier',
                7 => 'family',
                8 => 'familyCode',
                9 => 'refererValues',
                10 => 'refererDatas',
                11 => 'stringIdentifier',
                12 => 'integerIdentifier',
                13 => 'values',
            ),
            'sidus_filter.filter.class' => 'Sidus\\EAVFilterBundle\\Filter\\Filter',
            'sidus_filter.configuration.class' => 'Sidus\\FilterBundle\\Configuration\\FilterConfigurationHandler',
            'sidus_filter.filter.dto.sort_config' => 'Sidus\\FilterBundle\\DTO\\SortConfig',
            'sidus_filter.form.type.date_range.class' => 'Sidus\\FilterBundle\\Form\\Type\\DateRangeType',
            'sidus_filter.form.type.order_button.class' => 'Sidus\\FilterBundle\\Form\\Type\\OrderButtonType',
            'sidus_filter.form.type.sort_config.class' => 'Sidus\\FilterBundle\\Form\\Type\\SortConfigType',
            'sidus_eav_filter.configuration.class' => 'Sidus\\EAVFilterBundle\\Configuration\\EAVFilterConfigurationHandler',
            'sidus_data_grid.model.datagrid.class' => 'Sidus\\DataGridBundle\\Model\\DataGrid',
            'sidus_eav_data_grid.model.datagrid.class' => 'Sidus\\EAVDataGridBundle\\Model\\DataGrid',
            'sidus_eav_variant.config.routes' => array(
                'select' => 'admin.variant.select',
                'create' => 'admin.variant.create',
                'edit' => 'admin.variant.edit',
                'delete' => 'admin.variant.delete',
            ),
            'sidus_eav_variant.family.class' => 'Sidus\\EAVVariantBundle\\Model\\VariantFamily',
            'sidus_eav_publishing.publisher.default.class' => 'Sidus\\PublishingBundle\\Publishing\\Publisher',
            'sidus_file_upload.resource.manager.class' => 'CleverAge\\EAVManager\\AssetBundle\\Manager\\ResourceManager',
            'sidus_admin.templating.fallback_template_directory' => 'CleverAgeEAVManagerAdminBundle:Base',
            'stfalcon_tinymce.config' => array(
                'include_jquery' => false,
                'tinymce_jquery' => false,
                'use_callback_tinymce_init' => true,
                'language' => 'en',
                'external_plugins' => array(
                    'datalink' => array(
                        'url' => 'asset[bundles/cleverageeavmanagerlayout/js/tinymce/plugins/datalink/plugin.js]',
                    ),
                    'datamedia' => array(
                        'url' => 'asset[bundles/cleverageeavmanagerlayout/js/tinymce/plugins/datamedia/plugin.js]',
                    ),
                ),
                'theme' => array(
                    'simple' => array(
                        'menubar' => false,
                    ),
                    'advanced' => array(
                        'plugins' => array(
                            0 => 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                            1 => 'searchreplace wordcount visualblocks visualchars code fullscreen',
                            2 => 'insertdatetime media nonbreaking save table contextmenu directionality',
                            3 => 'emoticons template paste textcolor datalink',
                        ),
                        'toolbar1' => 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink image',
                        'toolbar2' => 'print preview media | forecolor backcolor emoticons | stfalcon | datalink datamedia',
                        'image_advtab' => true,
                        'relative_urls' => false,
                        'remove_script_host' => false,
                    ),
                ),
                'selector' => '.tinymce',
                'tinymce_buttons' => array(

                ),
            ),
            'stfalcon_tinymce.twig.extension.class' => 'Stfalcon\\Bundle\\TinymceBundle\\Twig\\Extension\\StfalconTinymceExtension',
            'fos_js_routing.extractor.class' => 'FOS\\JsRoutingBundle\\Extractor\\ExposedRoutesExtractor',
            'fos_js_routing.controller.class' => 'FOS\\JsRoutingBundle\\Controller\\Controller',
            'fos_js_routing.cache_control' => array(
                'enabled' => false,
            ),
            'liip_imagine.filter.configuration.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterConfiguration',
            'liip_imagine.filter.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterManager',
            'liip_imagine.data.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\DataManager',
            'liip_imagine.cache.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheManager',
            'liip_imagine.cache.signer.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Signer',
            'liip_imagine.binary.mime_type_guesser.class' => 'Liip\\ImagineBundle\\Binary\\SimpleMimeTypeGuesser',
            'liip_imagine.controller.class' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'liip_imagine.twig.extension.class' => 'Liip\\ImagineBundle\\Templating\\ImagineExtension',
            'liip_imagine.templating.helper.class' => 'Liip\\ImagineBundle\\Templating\\Helper\\ImagineHelper',
            'liip_imagine.gd.class' => 'Imagine\\Gd\\Imagine',
            'liip_imagine.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'liip_imagine.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'liip_imagine.filter.loader.relative_resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RelativeResizeFilterLoader',
            'liip_imagine.filter.loader.resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ResizeFilterLoader',
            'liip_imagine.filter.loader.thumbnail.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ThumbnailFilterLoader',
            'liip_imagine.filter.loader.crop.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\CropFilterLoader',
            'liip_imagine.filter.loader.grayscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\GrayscaleFilterLoader',
            'liip_imagine.filter.loader.paste.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\PasteFilterLoader',
            'liip_imagine.filter.loader.watermark.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\WatermarkFilterLoader',
            'liip_imagine.filter.loader.strip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\StripFilterLoader',
            'liip_imagine.filter.loader.background.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\BackgroundFilterLoader',
            'liip_imagine.filter.loader.scale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ScaleFilterLoader',
            'liip_imagine.filter.loader.upscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\UpscaleFilterLoader',
            'liip_imagine.filter.loader.downscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\DownscaleFilterLoader',
            'liip_imagine.filter.loader.auto_rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\AutoRotateFilterLoader',
            'liip_imagine.filter.loader.rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RotateFilterLoader',
            'liip_imagine.filter.loader.flip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\FlipFilterLoader',
            'liip_imagine.filter.loader.interlace.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\InterlaceFilterLoader',
            'liip_imagine.binary.loader.filesystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FileSystemLoader',
            'liip_imagine.binary.loader.stream.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\StreamLoader',
            'liip_imagine.binary.loader.flysystem.class' => 'Liip\\ImagineBundle\\Binary\\Loader\\FlysystemLoader',
            'liip_imagine.binary.locator.filesystem.class' => 'Liip\\ImagineBundle\\Binary\\Locator\\FileSystemLocator',
            'liip_imagine.binary.locator.filesystem_insecure.class' => 'Liip\\ImagineBundle\\Binary\\Locator\\FileSystemInsecureLocator',
            'liip_imagine.cache.resolver.web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\WebPathResolver',
            'liip_imagine.cache.resolver.no_cache_web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\NoCacheWebPathResolver',
            'liip_imagine.cache.resolver.aws_s3.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\AwsS3Resolver',
            'liip_imagine.cache.resolver.cache.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\CacheResolver',
            'liip_imagine.cache.resolver.flysystem.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\FlysystemResolver',
            'liip_imagine.cache.resolver.proxy.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\ProxyResolver',
            'liip_imagine.form.type.image.class' => 'Liip\\ImagineBundle\\Form\\Type\\ImageType',
            'liip_imagine.meta_data.reader.class' => 'Imagine\\Image\\Metadata\\ExifMetadataReader',
            'liip_imagine.filter.post_processor.jpegoptim.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\JpegOptimPostProcessor',
            'liip_imagine.jpegoptim.binary' => '/usr/bin/jpegoptim',
            'liip_imagine.jpegoptim.stripall' => true,
            'liip_imagine.jpegoptim.max' => NULL,
            'liip_imagine.jpegoptim.progressive' => true,
            'liip_imagine.jpegoptim.tempdir' => NULL,
            'liip_imagine.filter.post_processor.optipng.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\OptiPngPostProcessor',
            'liip_imagine.optipng.binary' => '/usr/bin/optipng',
            'liip_imagine.optipng.level' => 7,
            'liip_imagine.optipng.stripall' => true,
            'liip_imagine.optipng.tempdir' => NULL,
            'liip_imagine.filter.post_processor.pngquant.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\PngquantPostProcessor',
            'liip_imagine.pngquant.binary' => '/usr/bin/pngquant',
            'liip_imagine.filter.post_processor.mozjpeg.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\PostProcessor\\MozJpegPostProcessor',
            'liip_imagine.mozjpeg.binary' => '/opt/mozjpeg/bin/cjpeg',
            'liip_imagine.cache.resolver.default' => 'default',
            'liip_imagine.default_image' => NULL,
            'liip_imagine.filter_sets' => array(
                'tiny' => array(
                    'data_loader' => 'images',
                    'quality' => 70,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 64,
                                1 => 64,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'thumbnail' => array(
                    'data_loader' => 'images',
                    'quality' => 70,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 128,
                                1 => 128,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'small' => array(
                    'data_loader' => 'images',
                    'quality' => 75,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 300,
                                1 => 200,
                            ),
                            'mode' => 'outbound',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'preview' => array(
                    'data_loader' => 'images',
                    'quality' => 80,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 730,
                                1 => 730,
                            ),
                            'mode' => 'inset',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
                'large' => array(
                    'data_loader' => 'images',
                    'quality' => 90,
                    'filters' => array(
                        'auto_rotate' => array(

                        ),
                        'thumbnail' => array(
                            'size' => array(
                                0 => 1900,
                                1 => 1000,
                            ),
                            'mode' => 'inset',
                        ),
                    ),
                    'jpeg_quality' => NULL,
                    'png_compression_level' => NULL,
                    'png_compression_filter' => NULL,
                    'format' => NULL,
                    'animated' => false,
                    'cache' => NULL,
                    'default_image' => NULL,
                    'post_processors' => array(

                    ),
                ),
            ),
            'liip_imagine.binary.loader.default' => 'default',
            'liip_imagine.controller.filter_action' => 'liip_imagine.controller:filterAction',
            'liip_imagine.controller.filter_runtime_action' => 'liip_imagine.controller:filterRuntimeAction',
            'exercise_html_purifier.class' => 'HTMLPurifier',
            'exercise_html_purifier.config.class' => 'HTMLPurifier_Config',
            'exercise_html_purifier.cache_warmer.serializer.class' => 'Exercise\\HTMLPurifierBundle\\CacheWarmer\\SerializerCacheWarmer',
            'exercise_html_purifier.twig_extension.class' => 'Exercise\\HTMLPurifierBundle\\Twig\\HTMLPurifierExtension',
            'exercise_html_purifier.cache_warmer.serializer.paths' => array(
                0 => (__DIR__.'/htmlpurifier'),
            ),
            'sidus_admin.entity.matcher.class' => 'CleverAge\\EAVManager\\AdminBundle\\Entity\\AdminEntityMatcher',
            'cleverage_eavmanager.configuration' => array(
                'wysiwyg' => array(

                ),
            ),
            'eavmanager_user.config' => array(
                'mailer' => array(
                    'company' => 'Client Company',
                    'from_email' => 'no-reply@client-company.com',
                    'from_name' => 'Client',
                ),
                'home_route' => 'eavmanager_layout.dashboard',
            ),
            'eavmanager_user.normalizer.user.ignored_attributes' => array(
                0 => 'password',
                1 => 'plainPassword',
                2 => 'salt',
                3 => 'authenticationToken',
                4 => 'rawRoles',
                5 => 'combinedFamilyPermissions',
            ),
            'console.command.ids' => array(
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand',
            ),
        );
    }
}
