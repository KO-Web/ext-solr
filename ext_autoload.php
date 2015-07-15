<?php
// DO NOT CHANGE THIS FILE! It is automatically generated by extdeveval::buildAutoloadRegistry.
// This file was generated on 2009-09-15 18:31

$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('solr');
return array(

		// SolrPhpClient

	'apache_solr_httptransport_abstract' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/HttpTransport/Abstract.php',
	'apache_solr_httptransport_curl' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/HttpTransport/Curl.php',
	'apache_solr_httptransport_curlnoreuse' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/HttpTransport/CurlNoReuse.php',
	'apache_solr_httptransport_filegetcontents' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/HttpTransport/FileGetContents.php',
	'apache_solr_httptransport_interface' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/HttpTransport/Interface.php',
	'apache_solr_httptransport_response' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/HttpTransport/Response.php',
	'apache_solr_service_balancer' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/Service/Balancer.php',
	'apache_solr_document' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/Document.php',
	'apache_solr_exception' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/Exception.php',
	'apache_solr_httptransportexception' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/HttpTransportException.php',
	'apache_solr_invalidargumentexception' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/InvalidArgumentException.php',
	'apache_solr_noserviceavailableexception' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/NoServiceAvailableException.php',
	'apache_solr_parserexception' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/ParserException.php',
	'apache_solr_response' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/Response.php',
	'apache_solr_service' => $extensionPath . 'Lib/SolrPhpClient/Apache/Solr/Service.php',

		// EXT:solr

	'tx_solr_api' => $extensionPath . 'Classes/Api.php',
	'tx_solr_additionalfieldsindexer' => $extensionPath . 'Classes/AdditionalFieldsIndexer.php',
	'tx_solr_commandresolver' => $extensionPath . 'Classes/CommandResolver.php',
	'tx_solr_connectionmanager' => $extensionPath . 'Classes/ConnectionManager.php',
	'tx_solr_contextmenuactioncontroller' => $extensionPath . 'Classes/ContextMenuActionController.php',
	'tx_solr_databaseutility' => $extensionPath . 'Classes/DatabaseUtility.php',
	'tx_solr_garbagecollector' => $extensionPath . 'Classes/GarbageCollector.php',
	'tx_solr_htmlcontentextractor' => $extensionPath . 'Classes/HtmlContentExtractor.php',
	'tx_solr_javascriptmanager' => $extensionPath . 'Classes/JavascriptManager.php',
	'tx_solr_languagefileunavailableexception' => $extensionPath . 'Classes/LanguageFileUnavailableException.php',
	'tx_solr_nosolrconnectionfoundexception' => $extensionPath . 'Classes/NoSolrConnectionFoundException.php',
	'tx_solr_query' => $extensionPath . 'Classes/Query.php',
	'tx_solr_search' => $extensionPath . 'Classes/Search.php',
	'tx_solr_site' => $extensionPath . 'Classes/Site.php',
	'tx_solr_solrservice' => $extensionPath . 'Classes/SolrService.php',
	'tx_solr_sorting' => $extensionPath . 'Classes/Sorting.php',
	'tx_solr_spellchecker' => $extensionPath . 'Classes/SpellChecker.php',
	'tx_solr_suggestquery' => $extensionPath . 'Classes/SuggestQuery.php',
	'tx_solr_template' => $extensionPath . 'Classes/Template.php',
	'tx_solr_typo3environment' => $extensionPath . 'Classes/Typo3Environment.php',
	'tx_solr_typo3pagecontentextractor' => $extensionPath . 'Classes/Typo3PageContentExtractor.php',
	'tx_solr_typo3pageindexer' => $extensionPath . 'Classes/Typo3PageIndexer.php',
	'tx_solr_util' => $extensionPath . 'Classes/Util.php',

	'ApacheSolrForTypo3\Solr\Access\Rootline' => $extensionPath . 'Classes/Access/Rootline.php',
	'ApacheSolrForTypo3\Solr\Access\RootlineElement' => $extensionPath . 'Classes/Access/RootlineElement.php',
	'ApacheSolrForTypo3\Solr\Access\RootlineElementFormatException' => $extensionPath . 'Classes/Access/RootlineElementFormatException.php',

	'ApacheSolrForTypo3\Solr\Backend\IndexingConfigurationSelectorField' => $extensionPath . 'Classes/Backend/IndexingConfigurationSelectorField.php',

	'ApacheSolrForTypo3\Solr\Cli\Dispatcher' => $extensionPath . 'Classes/Cli/Dispatcher.php',

	'ApacheSolrForTypo3\Solr\ContentObject\Content' => $extensionPath . 'Classes/ContentObject/Content.php',
	'ApacheSolrForTypo3\Solr\ContentObject\Multivalue' => $extensionPath . 'Classes/ContentObject/Multivalue.php',
	'ApacheSolrForTypo3\Solr\ContentObject\Relation' => $extensionPath . 'Classes/ContentObject/Relation.php',

	'tx_solr_facet_abstractfacetrenderer' => $extensionPath . 'Classes/Facet/AbstractFacetRenderer.php',
	'tx_solr_facet_daterangefacetrenderer' => $extensionPath . 'Classes/Facet/DateRangeFacetRenderer.php',
	'tx_solr_facet_facet' => $extensionPath . 'Classes/Facet/Facet.php',
	'tx_solr_facet_facetoption' => $extensionPath . 'Classes/Facet/FacetOption.php',
	'tx_solr_facet_facetrendererfactory' => $extensionPath . 'Classes/Facet/FacetRendererFactory.php',
	'tx_solr_facet_hierarchicalfacetrenderer' => $extensionPath . 'Classes/Facet/HierarchicalFacetRenderer.php',
	'tx_solr_facet_hierarchicalfacethelper' => $extensionPath . 'Classes/Facet/HierarchicalFacetHelper.php',
	'tx_solr_facet_linkbuilder' => $extensionPath . 'Classes/Facet/LinkBuilder.php',
	'tx_solr_facet_numericrangefacetrenderer' => $extensionPath . 'Classes/Facet/NumericRangeFacetRenderer.php',
	'tx_solr_facet_querygroupfacetrenderer' => $extensionPath . 'Classes/Facet/QueryGroupFacetRenderer.php',
	'tx_solr_facet_simplefacetrenderer' => $extensionPath . 'Classes/Facet/SimpleFacetRenderer.php',
	'tx_solr_facet_simplefacetoptionsrenderer' => $extensionPath . 'Classes/Facet/SimpleFacetOptionsRenderer.php',
	'tx_solr_facet_usedfacetrenderer' => $extensionPath . 'Classes/Facet/UsedFacetRenderer.php',

	'tx_solr_fieldprocessor_abstracthierarchyprocessor' => $extensionPath . 'Classes/FieldProcessor/AbstractHierarchyProcessor.php',
	'tx_solr_fieldprocessor_categoryuidtohierarchy' => $extensionPath . 'Classes/FieldProcessor/CategoryUidToHierarchy.php',
	'tx_solr_fieldprocessor_pageuidtohierarchy' => $extensionPath . 'Classes/FieldProcessor/PageUidToHierarchy.php',
	'tx_solr_fieldprocessor_pathtohierarchy' => $extensionPath . 'Classes/FieldProcessor/PathToHierarchy.php',
	'tx_solr_fieldprocessor_service' => $extensionPath . 'Classes/FieldProcessor/Service.php',
	'tx_solr_fieldprocessor_timestamptoisodate' => $extensionPath . 'Classes/FieldProcessor/TimestampToIsoDate.php',
	'tx_solr_fieldprocessor_timestamptoutcisodate' => $extensionPath . 'Classes/FieldProcessor/TimestampToUtcIsoDate.php',

	'tx_solr_indexqueue_abstractindexer' => $extensionPath . 'Classes/IndexQueue/AbstractIndexer.php',
	'tx_solr_indexqueue_indexer' => $extensionPath . 'Classes/IndexQueue/Indexer.php',
	'tx_solr_indexqueue_invalidfieldnameexception' => $extensionPath . 'Classes/IndexQueue/InvalidFieldNameException.php',
	'tx_solr_indexqueue_item' => $extensionPath . 'Classes/IndexQueue/Item.php',
	'tx_solr_indexqueue_pageindexer' => $extensionPath . 'Classes/IndexQueue/PageIndexer.php',
	'tx_solr_indexqueue_pageindexerrequest' => $extensionPath . 'Classes/IndexQueue/PageIndexerRequest.php',
	'tx_solr_indexqueue_pageindexerrequesthandler' => $extensionPath . 'Classes/IndexQueue/PageIndexerRequestHandler.php',
	'tx_solr_indexqueue_pageindexerresponse' => $extensionPath . 'Classes/IndexQueue/PageIndexerResponse.php',
	'tx_solr_indexqueue_queue' => $extensionPath . 'Classes/IndexQueue/Queue.php',
	'tx_solr_indexqueue_recordmonitor' => $extensionPath . 'Classes/IndexQueue/RecordMonitor.php',

	'tx_solr_indexqueue_frontendhelper_abstract' => $extensionPath . 'Classes/IndexQueue/FrontendHelper/Abstract.php',
	'tx_solr_indexqueue_frontendhelper_authorizationservice' => $extensionPath . 'Classes/IndexQueue/FrontendHelper/AuthorizationService.php',
	'tx_solr_indexqueue_frontendhelper_dispatcher' => $extensionPath . 'Classes/IndexQueue/FrontendHelper/Dispatcher.php',
	'tx_solr_indexqueue_frontendhelper_manager' => $extensionPath . 'Classes/IndexQueue/FrontendHelper/Manager.php',
	'tx_solr_indexqueue_frontendhelper_usergroupdetector' => $extensionPath . 'Classes/IndexQueue/FrontendHelper/UserGroupDetector.php',
	'tx_solr_indexqueue_frontendhelper_pagefieldmappingindexer' => $extensionPath . 'Classes/IndexQueue/FrontendHelper/PageFieldMappingIndexer.php',
	'tx_solr_indexqueue_frontendhelper_pageindexer' => $extensionPath . 'Classes/IndexQueue/FrontendHelper/PageIndexer.php',

	'tx_solr_indexqueue_initializer_abstract' => $extensionPath . 'Classes/IndexQueue/Initializer/Abstract.php',
	'tx_solr_indexqueue_initializer_page' => $extensionPath . 'Classes/IndexQueue/Initializer/Page.php',
	'tx_solr_indexqueue_initializer_record' => $extensionPath . 'Classes/IndexQueue/Initializer/Record.php',

	'tx_solr_pluginbase_backendsummary' => $extensionPath . 'Classes/PluginBase/BackendSummary.php',
	'tx_solr_pluginbase_commandpluginbase' => $extensionPath . 'Classes/PluginBase/CommandPluginBase.php',
	'tx_solr_pluginbase_pluginbase' => $extensionPath . 'Classes/PluginBase/PluginBase.php',

	'tx_solr_query_linkbuilder' => $extensionPath . 'Classes/Query/LinkBuilder.php',

	'tx_solr_query_filterencoder_daterange' => $extensionPath . 'Classes/Query/FilterEncoder/DateRange.php',
	'tx_solr_query_filterencoder_hierarchy' => $extensionPath . 'Classes/Query/FilterEncoder/Hierarchy.php',
	'tx_solr_query_filterencoder_querygroup' => $extensionPath . 'Classes/Query/FilterEncoder/QueryGroup.php',
	'tx_solr_query_filterencoder_range' => $extensionPath . 'Classes/Query/FilterEncoder/Range.php',

	'tx_solr_query_modifier_elevation' => $extensionPath . 'Classes/Query/Modifier/Elevation.php',
	'tx_solr_query_modifier_faceting' => $extensionPath . 'Classes/Query/Modifier/Faceting.php',
	'tx_solr_query_modifier_statistics' => $extensionPath . 'Classes/Query/Modifier/Statistics.php',

	'tx_solr_response_processor_statisticswriter' => $extensionPath . 'Classes/Response/Processor/StatisticsWriter.php',

	'tx_solr_resultdocumentmodifier_scoreanalyzer' => $extensionPath . 'Classes/ResultDocumentModifier/ScoreAnalyzer.php',
	'tx_solr_resultdocumentmodifier_sitehighlighter' => $extensionPath . 'Classes/ResultDocumentModifier/SiteHighlighter.php',

	'tx_solr_resultsetmodifier_lastsearches' => $extensionPath . 'Classes/ResultsetModifier/LastSearches.php',

	'tx_solr_search_abstractcomponent' => $extensionPath . 'Classes/Search/AbstractComponent.php',
	'tx_solr_search_accesscomponent' => $extensionPath . 'Classes/Search/AccessComponent.php',
	'tx_solr_search_analysiscomponent' => $extensionPath . 'Classes/Search/AnalysisComponent.php',
	'tx_solr_search_debugcomponent' => $extensionPath . 'Classes/Search/DebugComponent.php',
	'tx_solr_search_elevationcomponent' => $extensionPath . 'Classes/Search/ElevationComponent.php',
	'tx_solr_search_facetingcomponent' => $extensionPath . 'Classes/Search/FacetingComponent.php',
	'tx_solr_search_highlightingcomponent' => $extensionPath . 'Classes/Search/HighlightingComponent.php',
	'tx_solr_search_lastsearchescomponent' => $extensionPath . 'Classes/Search/LastSearchesComponent.php',
	'tx_solr_search_relevancecomponent' => $extensionPath . 'Classes/Search/RelevanceComponent.php',
	'tx_solr_search_searchcomponentmanager' => $extensionPath . 'Classes/Search/SearchComponentManager.php',
	'tx_solr_search_sortingcomponent' => $extensionPath . 'Classes/Search/SortingComponent.php',
	'tx_solr_search_spellcheckingcomponent' => $extensionPath . 'Classes/Search/SpellcheckingComponent.php',
	'tx_solr_search_statisticscomponent' => $extensionPath . 'Classes/Search/StatisticsComponent.php',

	'tx_solr_viewhelper_abstractsubpartviewhelper' => $extensionPath . 'Classes/ViewHelper/AbstractSubpartViewHelper.php',
	'tx_solr_viewhelper_crop' => $extensionPath . 'Classes/ViewHelper/Crop.php',
	'tx_solr_viewhelper_currentresultnumber' => $extensionPath . 'Classes/ViewHelper/CurrentResultNumber.php',
	'tx_solr_viewhelper_date' => $extensionPath . 'Classes/ViewHelper/Date.php',
	'tx_solr_viewhelper_facet' => $extensionPath . 'Classes/ViewHelper/Facet.php',
	'tx_solr_viewhelper_link' => $extensionPath . 'Classes/ViewHelper/Link.php',
	'tx_solr_viewhelper_lll' => $extensionPath . 'Classes/ViewHelper/Lll.php',
	'tx_solr_viewhelper_multivalue' => $extensionPath . 'Classes/ViewHelper/Multivalue.php',
	'tx_solr_viewhelper_oddeven' => $extensionPath . 'Classes/ViewHelper/OddEven.php',
	'tx_solr_viewhelper_relevance' => $extensionPath . 'Classes/ViewHelper/Relevance.php',
	'tx_solr_viewhelper_relevancebar' => $extensionPath . 'Classes/ViewHelper/RelevanceBar.php',
	'tx_solr_viewhelper_solrlink' => $extensionPath . 'Classes/ViewHelper/SolrLink.php',
	'tx_solr_viewhelper_sortindicator' => $extensionPath . 'Classes/ViewHelper/SortIndicator.php',
	'tx_solr_viewhelper_sorturl' => $extensionPath . 'Classes/ViewHelper/SortUrl.php',
	'tx_solr_viewhelper_ts' => $extensionPath . 'Classes/ViewHelper/Ts.php',

		// modules

	'tx_solr_modindex_indexinspector' => $extensionPath . 'ModIndex/IndexInspector.php',
	'tx_solr_modindex_indexinspectorremotecontroller' => $extensionPath . 'ModIndex/IndexInspectorRemoteController.php',

		// plugins

	'tx_solr_pifrequentsearches_frequentsearches' => $extensionPath . 'PiFrequentSearches/FrequentSearches.php',
	'tx_solr_piresults_results' => $extensionPath . 'PiResults/Results.php',
	'tx_solr_pisearch_search' => $extensionPath . 'PiSearch/Search.php',

	'tx_solr_piresults_advancedformcommand' => $extensionPath . 'PiResults/AdvancedFormCommand.php',
	'tx_solr_piresults_errorscommand' => $extensionPath . 'PiResults/ErrorsCommand.php',
	'tx_solr_piresults_facetingcommand' => $extensionPath . 'PiResults/FacetingCommand.php',
	'tx_solr_piresults_formcommand' => $extensionPath . 'PiResults/FormCommand.php',
	'tx_solr_piresults_frequentsearchescommand' => $extensionPath . 'PiResults/FrequentSearchesCommand.php',
	'tx_solr_piresults_highlightingresultdocumentmodifier' => $extensionPath . 'PiResults/HighlightingResultDocumentModifier.php',
	'tx_solr_piresults_lastsearchescommand' => $extensionPath . 'PiResults/LastSearchesCommand.php',
	'tx_solr_piresults_noresultscommand' => $extensionPath . 'PiResults/NoResultsCommand.php',
	'tx_solr_piresults_resultscommand' => $extensionPath . 'PiResults/ResultsCommand.php',
	'tx_solr_piresults_resultsperpageswitchcommand' => $extensionPath . 'PiResults/ResultsPerPageSwitchCommand.php',
	'tx_solr_piresults_sortingcommand' => $extensionPath . 'PiResults/SortingCommand.php',

	'tx_solr_piresults_parameterkeepingformmodifier' => $extensionPath . 'PiResults/ParameterKeepingFormModifier.php',
	'tx_solr_piresults_spellcheckformmodifier' => $extensionPath . 'PiResults/SpellCheckFormModifier.php',
	'tx_solr_piresults_suggestformmodifier' => $extensionPath . 'PiResults/SuggestFormModifier.php',
	'tx_solr_piresults_queryanalyzerformmodifier' => $extensionPath . 'PiResults/QueryAnalyzerFormModifier.php',

		// scheduler tasks

	'tx_solr_scheduler_indexqueueworkertask' => $extensionPath . 'Scheduler/IndexQueueWorkerTask.php',
	'tx_solr_scheduler_indexqueueworkertaskadditionalfieldprovider' => $extensionPath . 'Scheduler/IndexQueueWorkerTaskAdditionalFieldProvider.php',
	'tx_solr_scheduler_reindextask' => $extensionPath . 'Scheduler/ReIndexTask.php',
	'tx_solr_scheduler_reindextaskadditionalfieldprovider' => $extensionPath . 'Scheduler/ReIndexTaskAdditionalFieldProvider.php',

	// reports

	'tx_solr_report_accessfilterplugininstalledstatus' => $extensionPath . 'Report/AccessFilterPluginInstalledStatus.php',
	'tx_solr_report_allowurlfopenstatus' => $extensionPath . 'Report/AllowUrlFOpenStatus.php',
	'tx_solr_report_filtervarstatus' => $extensionPath . 'Report/FilterVarStatus.php',
	'tx_solr_report_schemastatus' => $extensionPath . 'Report/SchemaStatus.php',
	'tx_solr_report_solrconfigstatus' => $extensionPath . 'Report/SolrConfigStatus.php',
	'tx_solr_report_solrconfigurationstatus' => $extensionPath . 'Report/SolrConfigurationStatus.php',
	'tx_solr_report_solrstatus' => $extensionPath . 'Report/SolrStatus.php',
	'tx_solr_report_solrversionstatus' => $extensionPath . 'Report/SolrVersionStatus.php',

	// interfaces

	'tx_solr_additionalindexqueueitemindexer' => $extensionPath . 'Interfaces/AdditionalIndexQueueItemIndexer.php',
	'tx_solr_additionalpageindexer' => $extensionPath . 'Interfaces/AdditionalPageIndexer.php',
	'tx_solr_commandpluginaware' => $extensionPath . 'Interfaces/CommandPluginAware.php',
	'tx_solr_commandpostprocessor' => $extensionPath . 'Interfaces/CommandPostProcessor.php',
	'tx_solr_errordetector' => $extensionPath . 'Interfaces/ErrorDetector.php',
	'tx_solr_facetoptionsrenderer' => $extensionPath . 'Interfaces/FacetOptionsRenderer.php',
	'tx_solr_facetrenderer' => $extensionPath . 'Interfaces/FacetRenderer.php',
	'tx_solr_facetsmodifier' =>  $extensionPath . 'Interfaces/FacetsModifier.php',
	'tx_solr_fieldprocessor' => $extensionPath . 'Interfaces/FieldProcessor.php',
	'tx_solr_formmodifier' => $extensionPath . 'Interfaces/FormModifier.php',
	'tx_solr_garbagecollectorpostprocessor' => $extensionPath . 'Interfaces/GarbageCollectorPostProcessor.php',
	'tx_solr_indexqueueinitializationpostprocessor' => $extensionPath . 'Interfaces/IndexQueueInitializationPostProcessor.php',
	'tx_solr_indexqueueinitializer' => $extensionPath . 'Interfaces/IndexQueueInitializer.php',
	'tx_solr_indexqueuepageindexerdataurlmodifier' => $extensionPath . 'Interfaces/IndexQueuePageIndexerDataUrlModifier.php',
	'tx_solr_indexqueuepageindexerdocumentsmodifier' => $extensionPath . 'Interfaces/IndexQueuePageIndexerDocumentsModifier.php',
	'tx_solr_indexqueuepageindexerfrontendhelper' => $extensionPath . 'Interfaces/IndexQueuePageIndexerFrontendHelper.php',
	'tx_solr_pagedocumentpostprocessor' => $extensionPath . 'Interfaces/PageDocumentPostProcessor.php',
	'tx_solr_pluginaware' => $extensionPath . 'Interfaces/PluginAware.php',
	'tx_solr_plugincommand' => $extensionPath . 'Interfaces/PluginCommand.php',
	'tx_solr_queryaware' => $extensionPath . 'Interfaces/QueryAware.php',
	'tx_solr_queryfacetbuilder' => $extensionPath . 'Interfaces/QueryFacetBuilder.php',
	'tx_solr_queryfilterencoder' => $extensionPath . 'Interfaces/QueryFilterEncoder.php',
	'tx_solr_querymodifier' => $extensionPath . 'Interfaces/QueryModifier.php',
	'tx_solr_responsemodifier' => $extensionPath . 'Interfaces/ResponseModifier.php',
	'tx_solr_responseprocessor' => $extensionPath . 'Interfaces/ResponseProcessor.php',
	'tx_solr_resultdocumentmodifier' => $extensionPath . 'Interfaces/ResultDocumentModifier.php',
	'tx_solr_resultsetmodifier' => $extensionPath . 'Interfaces/ResultSetModifier.php',
	'tx_solr_searchaware' => $extensionPath . 'Interfaces/SearchAware.php',
	'tx_solr_searchcomponent' => $extensionPath . 'Interfaces/SearchComponent.php',
	'tx_solr_serializedvaluedetector' => $extensionPath . 'Interfaces/SerializedValueDetector.php',
	'tx_solr_subpartviewhelper' => $extensionPath . 'Interfaces/SubpartViewHelper.php',
	'tx_solr_substitutepageindexer' => $extensionPath . 'Interfaces/SubstitutePageIndexer.php',
	'tx_solr_templatemodifier' => $extensionPath . 'Interfaces/TemplateModifier.php',
	'tx_solr_viewhelper' => $extensionPath . 'Interfaces/ViewHelper.php',
	'tx_solr_viewhelperprovider' => $extensionPath . 'Interfaces/ViewHelperProvider.php',
);

