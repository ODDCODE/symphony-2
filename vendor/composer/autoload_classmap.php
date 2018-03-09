<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Administration' => $baseDir . '/symphony/lib/core/class.administration.php',
    'AdministrationPage' => $baseDir . '/symphony/lib/toolkit/class.administrationpage.php',
    'AjaxPage' => $baseDir . '/symphony/lib/toolkit/class.ajaxpage.php',
    'Alert' => $baseDir . '/symphony/lib/toolkit/class.alert.php',
    'Author' => $baseDir . '/symphony/lib/toolkit/class.author.php',
    'AuthorDatasource' => $baseDir . '/symphony/lib/toolkit/data-sources/class.datasource.author.php',
    'AuthorManager' => $baseDir . '/symphony/lib/toolkit/class.authormanager.php',
    'CacheDatabase' => $baseDir . '/symphony/lib/toolkit/cache/cache.database.php',
    'Cacheable' => $baseDir . '/symphony/lib/core/class.cacheable.php',
    'Configuration' => $baseDir . '/symphony/lib/core/class.configuration.php',
    'Cookie' => $baseDir . '/symphony/lib/core/class.cookie.php',
    'Cryptography' => $baseDir . '/symphony/lib/toolkit/class.cryptography.php',
    'DatabaseException' => $baseDir . '/symphony/lib/toolkit/class.mysql.php',
    'DatabaseExceptionHandler' => $baseDir . '/symphony/lib/core/class.symphony.php',
    'Datasource' => $baseDir . '/symphony/lib/toolkit/class.datasource.php',
    'DatasourceManager' => $baseDir . '/symphony/lib/toolkit/class.datasourcemanager.php',
    'DateTimeObj' => $baseDir . '/symphony/lib/core/class.datetimeobj.php',
    'DevKit' => $baseDir . '/symphony/lib/toolkit/class.devkit.php',
    'DynamicXMLDatasource' => $baseDir . '/symphony/lib/toolkit/data-sources/class.datasource.dynamic_xml.php',
    'Email' => $baseDir . '/symphony/lib/toolkit/class.email.php',
    'EmailException' => $baseDir . '/symphony/lib/toolkit/class.email.php',
    'EmailGateway' => $baseDir . '/symphony/lib/toolkit/class.emailgateway.php',
    'EmailGatewayException' => $baseDir . '/symphony/lib/toolkit/class.emailgateway.php',
    'EmailGatewayManager' => $baseDir . '/symphony/lib/toolkit/class.emailgatewaymanager.php',
    'EmailHelper' => $baseDir . '/symphony/lib/toolkit/class.emailhelper.php',
    'EmailValidationException' => $baseDir . '/symphony/lib/toolkit/class.emailgateway.php',
    'Entry' => $baseDir . '/symphony/lib/toolkit/class.entry.php',
    'EntryManager' => $baseDir . '/symphony/lib/toolkit/class.entrymanager.php',
    'Event' => $baseDir . '/symphony/lib/toolkit/class.event.php',
    'EventManager' => $baseDir . '/symphony/lib/toolkit/class.eventmanager.php',
    'EventMessages' => $baseDir . '/symphony/lib/toolkit/events/class.event.section.php',
    'ExportableField' => $baseDir . '/symphony/lib/interface/interface.exportablefield.php',
    'Extension' => $baseDir . '/symphony/lib/toolkit/class.extension.php',
    'ExtensionManager' => $baseDir . '/symphony/lib/toolkit/class.extensionmanager.php',
    'Field' => $baseDir . '/symphony/lib/toolkit/class.field.php',
    'FieldAuthor' => $baseDir . '/symphony/lib/toolkit/fields/field.author.php',
    'FieldCheckbox' => $baseDir . '/symphony/lib/toolkit/fields/field.checkbox.php',
    'FieldDate' => $baseDir . '/symphony/lib/toolkit/fields/field.date.php',
    'FieldInput' => $baseDir . '/symphony/lib/toolkit/fields/field.input.php',
    'FieldManager' => $baseDir . '/symphony/lib/toolkit/class.fieldmanager.php',
    'FieldSelect' => $baseDir . '/symphony/lib/toolkit/fields/field.select.php',
    'FieldTagList' => $baseDir . '/symphony/lib/toolkit/fields/field.taglist.php',
    'FieldUpload' => $baseDir . '/symphony/lib/toolkit/fields/field.upload.php',
    'FileResource' => $baseDir . '/symphony/lib/interface/interface.fileresource.php',
    'Frontend' => $baseDir . '/symphony/lib/core/class.frontend.php',
    'FrontendPage' => $baseDir . '/symphony/lib/toolkit/class.frontendpage.php',
    'FrontendPageNotFoundException' => $baseDir . '/symphony/lib/core/class.frontend.php',
    'FrontendPageNotFoundExceptionHandler' => $baseDir . '/symphony/lib/core/class.frontend.php',
    'Gateway' => $baseDir . '/symphony/lib/toolkit/class.gateway.php',
    'General' => $baseDir . '/symphony/lib/toolkit/class.general.php',
    'GenericErrorHandler' => $baseDir . '/symphony/lib/core/class.errorhandler.php',
    'GenericExceptionHandler' => $baseDir . '/symphony/lib/core/class.errorhandler.php',
    'HTMLPage' => $baseDir . '/symphony/lib/toolkit/class.htmlpage.php',
    'ImportableField' => $baseDir . '/symphony/lib/interface/interface.importablefield.php',
    'Installer' => $baseDir . '/install/lib/class.installer.php',
    'InstallerPage' => $baseDir . '/install/lib/class.installerpage.php',
    'JSON' => $baseDir . '/symphony/lib/toolkit/class.json.php',
    'JSONException' => $baseDir . '/symphony/lib/toolkit/class.json.php',
    'JSONPage' => $baseDir . '/symphony/lib/toolkit/class.jsonpage.php',
    'Lang' => $baseDir . '/symphony/lib/toolkit/class.lang.php',
    'Log' => $baseDir . '/symphony/lib/core/class.log.php',
    'MD5' => $baseDir . '/symphony/lib/toolkit/cryptography/class.md5.php',
    'Migration' => $baseDir . '/install/lib/class.migration.php',
    'Mutex' => $baseDir . '/symphony/lib/toolkit/class.mutex.php',
    'MySQL' => $baseDir . '/symphony/lib/toolkit/class.mysql.php',
    'NavigationDatasource' => $baseDir . '/symphony/lib/toolkit/data-sources/class.datasource.navigation.php',
    'PBKDF2' => $baseDir . '/symphony/lib/toolkit/cryptography/class.pbkdf2.php',
    'Page' => $baseDir . '/symphony/lib/toolkit/class.page.php',
    'PageManager' => $baseDir . '/symphony/lib/toolkit/class.pagemanager.php',
    'Profiler' => $baseDir . '/symphony/lib/toolkit/class.profiler.php',
    'ResourceManager' => $baseDir . '/symphony/lib/toolkit/class.resourcemanager.php',
    'ResourcesPage' => $baseDir . '/symphony/lib/toolkit/class.resourcespage.php',
    'SHA1' => $baseDir . '/symphony/lib/toolkit/cryptography/class.sha1.php',
    'SMTP' => $baseDir . '/symphony/lib/toolkit/class.smtp.php',
    'SMTPException' => $baseDir . '/symphony/lib/toolkit/class.smtp.php',
    'SMTPGateway' => $baseDir . '/symphony/lib/toolkit/email-gateways/email.smtp.php',
    'Section' => $baseDir . '/symphony/lib/toolkit/class.section.php',
    'SectionDatasource' => $baseDir . '/symphony/lib/toolkit/data-sources/class.datasource.section.php',
    'SectionEvent' => $baseDir . '/symphony/lib/toolkit/events/class.event.section.php',
    'SectionManager' => $baseDir . '/symphony/lib/toolkit/class.sectionmanager.php',
    'SendmailGateway' => $baseDir . '/symphony/lib/toolkit/email-gateways/email.sendmail.php',
    'Session' => $baseDir . '/symphony/lib/core/class.session.php',
    'Singleton' => $baseDir . '/symphony/lib/interface/interface.singleton.php',
    'Sortable' => $baseDir . '/symphony/content/class.sortable.php',
    'StaticXMLDatasource' => $baseDir . '/symphony/lib/toolkit/data-sources/class.datasource.static.php',
    'Symphony' => $baseDir . '/symphony/lib/core/class.symphony.php',
    'SymphonyErrorPage' => $baseDir . '/symphony/lib/core/class.symphony.php',
    'SymphonyErrorPageHandler' => $baseDir . '/symphony/lib/core/class.symphony.php',
    'TextFormatter' => $baseDir . '/symphony/lib/toolkit/class.textformatter.php',
    'TextPage' => $baseDir . '/symphony/lib/toolkit/class.textpage.php',
    'TextformatterManager' => $baseDir . '/symphony/lib/toolkit/class.textformattermanager.php',
    'Throwable' => $baseDir . '/symphony/lib/core/class.throwable.php',
    'TimestampValidator' => $baseDir . '/symphony/lib/toolkit/class.timestampvalidator.php',
    'Updater' => $baseDir . '/install/lib/class.updater.php',
    'UpdaterPage' => $baseDir . '/install/lib/class.updaterpage.php',
    'Widget' => $baseDir . '/symphony/lib/toolkit/class.widget.php',
    'XMLElement' => $baseDir . '/symphony/lib/toolkit/class.xmlelement.php',
    'XMLElementChildrenFilter' => $baseDir . '/symphony/lib/toolkit/class.xmlelement.php',
    'XMLPage' => $baseDir . '/symphony/lib/toolkit/class.xmlpage.php',
    'XSLTPage' => $baseDir . '/symphony/lib/toolkit/class.xsltpage.php',
    'XSRF' => $baseDir . '/symphony/lib/toolkit/class.xsrf.php',
    'XsltProcess' => $baseDir . '/symphony/lib/toolkit/class.xsltprocess.php',
    'contentAjaxEventDocumentation' => $baseDir . '/symphony/content/content.ajaxeventdocumentation.php',
    'contentAjaxFilters' => $baseDir . '/symphony/content/content.ajaxfilters.php',
    'contentAjaxHandle' => $baseDir . '/symphony/content/content.ajaxhandle.php',
    'contentAjaxLog' => $baseDir . '/symphony/content/content.ajaxlog.php',
    'contentAjaxParameters' => $baseDir . '/symphony/content/content.ajaxparameters.php',
    'contentAjaxQuery' => $baseDir . '/symphony/content/content.ajaxquery.php',
    'contentAjaxReorder' => $baseDir . '/symphony/content/content.ajaxreorder.php',
    'contentAjaxSections' => $baseDir . '/symphony/content/content.ajaxsections.php',
    'contentAjaxTranslate' => $baseDir . '/symphony/content/content.ajaxtranslate.php',
    'contentBlueprintsDatasources' => $baseDir . '/symphony/content/content.blueprintsdatasources.php',
    'contentBlueprintsEvents' => $baseDir . '/symphony/content/content.blueprintsevents.php',
    'contentBlueprintsPages' => $baseDir . '/symphony/content/content.blueprintspages.php',
    'contentBlueprintsSections' => $baseDir . '/symphony/content/content.blueprintssections.php',
    'contentLogin' => $baseDir . '/symphony/content/content.login.php',
    'contentLogout' => $baseDir . '/symphony/content/content.logout.php',
    'contentPublish' => $baseDir . '/symphony/content/content.publish.php',
    'contentSystemAuthors' => $baseDir . '/symphony/content/content.systemauthors.php',
    'contentSystemExtensions' => $baseDir . '/symphony/content/content.systemextensions.php',
    'contentSystemLog' => $baseDir . '/symphony/content/content.systemlog.php',
    'contentSystemPreferences' => $baseDir . '/symphony/content/content.systempreferences.php',
    'fieldTextarea' => $baseDir . '/symphony/lib/toolkit/fields/field.textarea.php',
    'iCache' => $baseDir . '/symphony/lib/interface/interface.cache.php',
    'iDatasource' => $baseDir . '/symphony/lib/interface/interface.datasource.php',
    'iEvent' => $baseDir . '/symphony/lib/interface/interface.event.php',
    'iNamespacedCache' => $baseDir . '/symphony/lib/interface/interface.namespacedcache.php',
    'iProvider' => $baseDir . '/symphony/lib/interface/interface.provider.php',
    'migration_220' => $baseDir . '/install/migrations/2.2.0.php',
    'migration_221' => $baseDir . '/install/migrations/2.2.1.php',
    'migration_222' => $baseDir . '/install/migrations/2.2.2.php',
    'migration_223' => $baseDir . '/install/migrations/2.2.3.php',
    'migration_224' => $baseDir . '/install/migrations/2.2.4.php',
    'migration_225' => $baseDir . '/install/migrations/2.2.5.php',
    'migration_230' => $baseDir . '/install/migrations/2.3.0.php',
    'migration_231' => $baseDir . '/install/migrations/2.3.1.php',
    'migration_232' => $baseDir . '/install/migrations/2.3.2.php',
    'migration_233' => $baseDir . '/install/migrations/2.3.3.php',
    'migration_234' => $baseDir . '/install/migrations/2.3.4.php',
    'migration_235' => $baseDir . '/install/migrations/2.3.5.php',
    'migration_236' => $baseDir . '/install/migrations/2.3.6.php',
    'migration_240' => $baseDir . '/install/migrations/2.4.0.php',
    'migration_250' => $baseDir . '/install/migrations/2.5.0.php',
    'migration_251' => $baseDir . '/install/migrations/2.5.1.php',
    'migration_252' => $baseDir . '/install/migrations/2.5.2.php',
    'migration_253' => $baseDir . '/install/migrations/2.5.3.php',
    'migration_260' => $baseDir . '/install/migrations/2.6.0.php',
    'migration_261' => $baseDir . '/install/migrations/2.6.1.php',
    'migration_2610' => $baseDir . '/install/migrations/2.6.10.php',
    'migration_2611' => $baseDir . '/install/migrations/2.6.11.php',
    'migration_262' => $baseDir . '/install/migrations/2.6.2.php',
    'migration_263' => $baseDir . '/install/migrations/2.6.3.php',
    'migration_264' => $baseDir . '/install/migrations/2.6.4.php',
    'migration_265' => $baseDir . '/install/migrations/2.6.5.php',
    'migration_266' => $baseDir . '/install/migrations/2.6.6.php',
    'migration_267' => $baseDir . '/install/migrations/2.6.7.php',
    'migration_268' => $baseDir . '/install/migrations/2.6.8.php',
    'migration_269' => $baseDir . '/install/migrations/2.6.9.php',
    'migration_270' => $baseDir . '/install/migrations/2.7.0.php',
    'migration_271' => $baseDir . '/install/migrations/2.7.1.php',
    'migration_272' => $baseDir . '/install/migrations/2.7.2.php',
    'migration_273' => $baseDir . '/install/migrations/2.7.3.php',
    'migration_274' => $baseDir . '/install/migrations/2.7.4.php',
);
