<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04ce1158b5a98717630ee74d340bdca4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pauple\\Pluginator\\' => 18,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pauple\\Pluginator\\' => 
        array (
            0 => __DIR__ . '/..' . '/pauple/pluginator/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'BerlinDB\\Database\\Base' => __DIR__ . '/../..' . '/includes/lib/berlin-db/core/base.php',
        'BerlinDB\\Database\\Column' => __DIR__ . '/../..' . '/includes/lib/berlin-db/core/column.php',
        'BerlinDB\\Database\\Queries\\Compare' => __DIR__ . '/../..' . '/includes/lib/berlin-db/core/compare.php',
        'BerlinDB\\Database\\Queries\\Date' => __DIR__ . '/../..' . '/includes/lib/berlin-db/core/date.php',
        'BerlinDB\\Database\\Queries\\Meta' => __DIR__ . '/../..' . '/includes/lib/berlin-db/core/meta.php',
        'BerlinDB\\Database\\Query' => __DIR__ . '/../..' . '/includes/lib/berlin-db/core/query.php',
        'BerlinDB\\Database\\Row' => __DIR__ . '/../..' . '/includes/lib/berlin-db/core/row.php',
        'BerlinDB\\Database\\Schema' => __DIR__ . '/../..' . '/includes/lib/berlin-db/core/schema.php',
        'BerlinDB\\Database\\Table' => __DIR__ . '/../..' . '/includes/lib/berlin-db/core/table.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Tablesome' => __DIR__ . '/../..' . '/includes/plugin.php',
        'Tablesome\\Components\\CellTypes\\Button' => __DIR__ . '/../..' . '/components/cell-types/button.php',
        'Tablesome\\Components\\CellTypes\\Date' => __DIR__ . '/../..' . '/components/cell-types/date.php',
        'Tablesome\\Components\\CellTypes\\Email' => __DIR__ . '/../..' . '/components/cell-types/email.php',
        'Tablesome\\Components\\CellTypes\\File\\Controller' => __DIR__ . '/../..' . '/components/cell-types/file/controller.php',
        'Tablesome\\Components\\CellTypes\\File\\Model' => __DIR__ . '/../..' . '/components/cell-types/file/model.php',
        'Tablesome\\Components\\CellTypes\\File\\View' => __DIR__ . '/../..' . '/components/cell-types/file/view.php',
        'Tablesome\\Components\\CellTypes\\Number' => __DIR__ . '/../..' . '/components/cell-types/number.php',
        'Tablesome\\Components\\CellTypes\\Text' => __DIR__ . '/../..' . '/components/cell-types/text.php',
        'Tablesome\\Components\\CellTypes\\Textarea' => __DIR__ . '/../..' . '/components/cell-types/textarea.php',
        'Tablesome\\Components\\CellTypes\\URL' => __DIR__ . '/../..' . '/components/cell-types/url.php',
        'Tablesome\\Components\\Export' => __DIR__ . '/../..' . '/components/export.php',
        'Tablesome\\Components\\Import\\Controller' => __DIR__ . '/../..' . '/components/import/controller.php',
        'Tablesome\\Components\\Import\\File_Handler' => __DIR__ . '/../..' . '/components/import/file-handler.php',
        'Tablesome\\Components\\Import\\Model' => __DIR__ . '/../..' . '/components/import/model.php',
        'Tablesome\\Components\\Import\\View' => __DIR__ . '/../..' . '/components/import/view.php',
        'Tablesome\\Components\\System_Info\\Controller' => __DIR__ . '/../..' . '/components/system-info/controller.php',
        'Tablesome\\Components\\System_Info\\Model' => __DIR__ . '/../..' . '/components/system-info/model.php',
        'Tablesome\\Components\\System_Info\\View' => __DIR__ . '/../..' . '/components/system-info/view.php',
        'Tablesome\\Components\\Table\\Controller' => __DIR__ . '/../..' . '/components/table/controller.php',
        'Tablesome\\Components\\Table\\Duplicate_Table' => __DIR__ . '/../..' . '/components/table/duplicate-table.php',
        'Tablesome\\Components\\Table\\Filter_Table_Model' => __DIR__ . '/../..' . '/components/table/filter-table-model.php',
        'Tablesome\\Components\\Table\\Model' => __DIR__ . '/../..' . '/components/table/model.php',
        'Tablesome\\Components\\Table\\Other_CPT_Model' => __DIR__ . '/../..' . '/components/table/other-cpt-model.php',
        'Tablesome\\Components\\Table\\Quick_Actions' => __DIR__ . '/../..' . '/components/table/quick-actions.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Common' => __DIR__ . '/../..' . '/components/table/settings/config/common.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Customize\\Fields\\Filter' => __DIR__ . '/../..' . '/components/table/settings/config/customize/fields/filter.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Customize\\Fields\\Header' => __DIR__ . '/../..' . '/components/table/settings/config/customize/fields/header.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Customize\\Fields\\Pagination' => __DIR__ . '/../..' . '/components/table/settings/config/customize/fields/pagination.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Customize\\Fields\\Row' => __DIR__ . '/../..' . '/components/table/settings/config/customize/fields/row.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Customize\\Fields\\Search' => __DIR__ . '/../..' . '/components/table/settings/config/customize/fields/search.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Customize\\Layout\\Filter' => __DIR__ . '/../..' . '/components/table/settings/config/customize/layout/filter.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Customize\\Layout\\Header' => __DIR__ . '/../..' . '/components/table/settings/config/customize/layout/header.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Customize\\Layout\\Pagination' => __DIR__ . '/../..' . '/components/table/settings/config/customize/layout/pagination.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Customize\\Layout\\Row' => __DIR__ . '/../..' . '/components/table/settings/config/customize/layout/row.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Customize\\Layout\\Search' => __DIR__ . '/../..' . '/components/table/settings/config/customize/layout/search.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Display' => __DIR__ . '/../..' . '/components/table/settings/config/display.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Style' => __DIR__ . '/../..' . '/components/table/settings/config/style.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Themes\\Brand' => __DIR__ . '/../..' . '/components/table/settings/config/themes/brand.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Themes\\Classic' => __DIR__ . '/../..' . '/components/table/settings/config/themes/classic.php',
        'Tablesome\\Components\\Table\\Settings\\Config\\Themes\\Purple' => __DIR__ . '/../..' . '/components/table/settings/config/themes/purple.php',
        'Tablesome\\Components\\Table\\Settings\\Settings' => __DIR__ . '/../..' . '/components/table/settings/settings.php',
        'Tablesome\\Components\\Table\\View' => __DIR__ . '/../..' . '/components/table/view.php',
        'Tablesome\\Components\\TablesomeDB\\Access_Controller' => __DIR__ . '/../..' . '/includes/modules/tablesomedb/access-controller.php',
        'Tablesome\\Includes\\Actions' => __DIR__ . '/../..' . '/includes/actions.php',
        'Tablesome\\Includes\\Ajax\\Getter' => __DIR__ . '/../..' . '/includes/ajax/getter.php',
        'Tablesome\\Includes\\Ajax_Handler' => __DIR__ . '/../..' . '/includes/ajax-handler.php',
        'Tablesome\\Includes\\Core\\Deactivation' => __DIR__ . '/../..' . '/includes/core/deactivation.php',
        'Tablesome\\Includes\\Core\\Table' => __DIR__ . '/../..' . '/includes/core/table.php',
        'Tablesome\\Includes\\Cpt' => __DIR__ . '/../..' . '/includes/cpt.php',
        'Tablesome\\Includes\\Cron' => __DIR__ . '/../..' . '/includes/cron.php',
        'Tablesome\\Includes\\Dashboard\\CPT_Page' => __DIR__ . '/../..' . '/includes/dashboard/cpt-page.php',
        'Tablesome\\Includes\\Db\\CRUD' => __DIR__ . '/../..' . '/includes/db/crud.php',
        'Tablesome\\Includes\\Db\\CRUD_Interface' => __DIR__ . '/../..' . '/includes/db/crud-interface.php',
        'Tablesome\\Includes\\Db\\Tablesome_Table' => __DIR__ . '/../..' . '/includes/db/tablesome-table.php',
        'Tablesome\\Includes\\Filters' => __DIR__ . '/../..' . '/includes/filters.php',
        'Tablesome\\Includes\\Freemius_Utils' => __DIR__ . '/../..' . '/includes/freemius-utils.php',
        'Tablesome\\Includes\\Helpers' => __DIR__ . '/../..' . '/includes/helpers.php',
        'Tablesome\\Includes\\Lib\\Table_Crud_WP\\Helper' => __DIR__ . '/../..' . '/includes/lib/table-crud-wp/helper.php',
        'Tablesome\\Includes\\Lib\\Table_Crud_WP\\Schema' => __DIR__ . '/../..' . '/includes/lib/table-crud-wp/schema.php',
        'Tablesome\\Includes\\Lib\\Table_Crud_WP\\Table_Crud_WP' => __DIR__ . '/../..' . '/includes/lib/table-crud-wp/table-crud-wp.php',
        'Tablesome\\Includes\\Modules\\API_Credentials_Handler' => __DIR__ . '/../..' . '/includes/modules/api-credentials-handler.php',
        'Tablesome\\Includes\\Modules\\Delete_Old_Crud_Data' => __DIR__ . '/../..' . '/includes/modules/delete-old-crud-data.php',
        'Tablesome\\Includes\\Modules\\Feature_Notice' => __DIR__ . '/../..' . '/includes/modules/feature-notice.php',
        'Tablesome\\Includes\\Modules\\Migrate_Old_Crud_Data_To_TablesomeDB' => __DIR__ . '/../..' . '/includes/modules/migrate-old-crud-data-to-tablesomedb.php',
        'Tablesome\\Includes\\Modules\\Myque\\Doctrine' => __DIR__ . '/../..' . '/includes/modules/myque/unused/doctrine.php',
        'Tablesome\\Includes\\Modules\\Myque\\Myque' => __DIR__ . '/../..' . '/includes/modules/myque/myque.php',
        'Tablesome\\Includes\\Modules\\Myque\\Myque_Exp' => __DIR__ . '/../..' . '/includes/modules/myque/unused/myque-exp.php',
        'Tablesome\\Includes\\Modules\\Myque\\Mysql' => __DIR__ . '/../..' . '/includes/modules/myque/mysql.php',
        'Tablesome\\Includes\\Modules\\Onboarding' => __DIR__ . '/../..' . '/includes/modules/onboarding.php',
        'Tablesome\\Includes\\Modules\\Proxy' => __DIR__ . '/../..' . '/includes/modules/proxy.php',
        'Tablesome\\Includes\\Modules\\Review_Notification' => __DIR__ . '/../..' . '/includes/modules/review-notification.php',
        'Tablesome\\Includes\\Modules\\Tables\\Tables' => __DIR__ . '/../..' . '/includes/modules/tables/tables.php',
        'Tablesome\\Includes\\Modules\\TablesomeDB\\Berlin_Db_Adapter' => __DIR__ . '/../..' . '/includes/modules/tablesomedb/berlin-db-adapter.php',
        'Tablesome\\Includes\\Modules\\TablesomeDB\\Dummy_Filters' => __DIR__ . '/../..' . '/includes/modules/myque/unused/dummy-filters.php',
        'Tablesome\\Includes\\Modules\\TablesomeDB\\Schema_Generator' => __DIR__ . '/../..' . '/includes/modules/tablesomedb/schema-generator.php',
        'Tablesome\\Includes\\Modules\\TablesomeDB\\TablesomeDB' => __DIR__ . '/../..' . '/includes/modules/tablesomedb/tablesomedb.php',
        'Tablesome\\Includes\\Modules\\TablesomeDB\\Transform_Filters_For_Myque' => __DIR__ . '/../..' . '/includes/modules/tablesomedb/transform-filters-for-myque.php',
        'Tablesome\\Includes\\Modules\\TablesomeDB_Rest_Api\\Import' => __DIR__ . '/../..' . '/includes/modules/tablesomedb-rest-api/import.php',
        'Tablesome\\Includes\\Modules\\TablesomeDB_Rest_Api\\Routes' => __DIR__ . '/../..' . '/includes/modules/tablesomedb-rest-api/routes.php',
        'Tablesome\\Includes\\Modules\\TablesomeDB_Rest_Api\\TablesomeDB_Rest_Api' => __DIR__ . '/../..' . '/includes/modules/tablesomedb-rest-api/tablesomedb-rest-api.php',
        'Tablesome\\Includes\\Modules\\TablesomeDB_Rest_Api\\Workflow_Rest_Api' => __DIR__ . '/../..' . '/includes/modules/tablesomedb-rest-api/workflow-rest-api.php',
        'Tablesome\\Includes\\Modules\\WP_Media_File_Handler' => __DIR__ . '/../..' . '/includes/modules/wp-media-file-handler.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Abstract_Trigger' => __DIR__ . '/../..' . '/includes/modules/workflow/abstract-trigger.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Action' => __DIR__ . '/../..' . '/includes/modules/workflow/action.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Actions_Helper' => __DIR__ . '/../..' . '/includes/modules/workflow/actions-helper.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Event_Log\\Event_Log' => __DIR__ . '/../..' . '/includes/modules/workflow/event-log/event-log.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Event_Log\\Event_Log_List' => __DIR__ . '/../..' . '/includes/modules/workflow/event-log/event-log-list.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Event_Log\\Event_Log_List_Page' => __DIR__ . '/../..' . '/includes/modules/workflow/event-log/event-log-list-page.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Library' => __DIR__ . '/../..' . '/includes/modules/workflow/library.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Traits\\Cell_Format' => __DIR__ . '/../..' . '/includes/modules/workflow/traits/cell-format.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Traits\\Placeholder' => __DIR__ . '/../..' . '/includes/modules/workflow/traits/placeholder.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Traits\\Tablesome_Add_Row_Preprocessor' => __DIR__ . '/../..' . '/includes/modules/workflow/traits/tablesome-add-row-preprocessor.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Trigger' => __DIR__ . '/../..' . '/includes/modules/workflow/trigger.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Workflow_Instance' => __DIR__ . '/../..' . '/includes/modules/workflow/workflow-instance.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Workflow_Manager' => __DIR__ . '/../..' . '/includes/modules/workflow/workflow-manager.php',
        'Tablesome\\Includes\\Modules\\Workflow\\Workflows' => __DIR__ . '/../..' . '/includes/modules/workflow/workflows.php',
        'Tablesome\\Includes\\Pages\\Onboarding' => __DIR__ . '/../..' . '/includes/pages/onboarding.php',
        'Tablesome\\Includes\\Security_Agent' => __DIR__ . '/../..' . '/includes/security-agent.php',
        'Tablesome\\Includes\\Settings\\Settings' => __DIR__ . '/../..' . '/includes/settings/settings.php',
        'Tablesome\\Includes\\Settings\\Tablesome_Getter' => __DIR__ . '/../..' . '/includes/settings/getter.php',
        'Tablesome\\Includes\\Settings\\Typography' => __DIR__ . '/../..' . '/includes/settings/typography.php',
        'Tablesome\\Includes\\Shortcode_Builder\\Builder' => __DIR__ . '/../..' . '/includes/shortcode-builder/builder.php',
        'Tablesome\\Includes\\Shortcode_Builder\\Fields' => __DIR__ . '/../..' . '/includes/shortcode-builder/fields.php',
        'Tablesome\\Includes\\Shortcode_Builder\\Handler' => __DIR__ . '/../..' . '/includes/shortcode-builder/handler.php',
        'Tablesome\\Includes\\Shortcodes' => __DIR__ . '/../..' . '/includes/shortcodes.php',
        'Tablesome\\Includes\\Tracking\\Controller' => __DIR__ . '/../..' . '/includes/tracking/controller.php',
        'Tablesome\\Includes\\Tracking\\Dispatcher' => __DIR__ . '/../..' . '/includes/tracking/dispatcher.php',
        'Tablesome\\Includes\\Tracking\\Dispatcher_Mixpanel' => __DIR__ . '/../..' . '/includes/tracking/dispatcher-mixpanel.php',
        'Tablesome\\Includes\\Tracking\\Event' => __DIR__ . '/../..' . '/includes/tracking/event.php',
        'Tablesome\\Includes\\Tracking\\Model' => __DIR__ . '/../..' . '/includes/tracking/model.php',
        'Tablesome\\Includes\\Tracking\\Notices' => __DIR__ . '/../..' . '/includes/tracking/notices.php',
        'Tablesome\\Includes\\Translations' => __DIR__ . '/../..' . '/includes/translations.php',
        'Tablesome\\Includes\\Update\\Upgrade' => __DIR__ . '/../..' . '/includes/update/upgrade.php',
        'Tablesome\\Includes\\Update\\Upgrade_List' => __DIR__ . '/../..' . '/includes/update/upgrade-list.php',
        'Tablesome\\Includes\\Utils' => __DIR__ . '/../..' . '/includes/utils.php',
        'Tablesome\\Workflow_Library\\Actions\\Fields_Map' => __DIR__ . '/../..' . '/workflow-library/experiments/fields-map.php',
        'Tablesome\\Workflow_Library\\Actions\\Files_Generate_CSV' => __DIR__ . '/../..' . '/workflow-library/actions/files-generate-csv.php',
        'Tablesome\\Workflow_Library\\Actions\\GSheet_Add_Row' => __DIR__ . '/../..' . '/workflow-library/actions/gsheet-add-row.php',
        'Tablesome\\Workflow_Library\\Actions\\Hubspot_Add_Contact' => __DIR__ . '/../..' . '/workflow-library/actions/hubspot-add-contact.php',
        'Tablesome\\Workflow_Library\\Actions\\Hubspot_Add_Contact_To_Static_List' => __DIR__ . '/../..' . '/workflow-library/actions/hubspot-add-contact-to-static-list.php',
        'Tablesome\\Workflow_Library\\Actions\\Mailchimp_Add_Contact' => __DIR__ . '/../..' . '/workflow-library/actions/mailchimp-add-contact.php',
        'Tablesome\\Workflow_Library\\Actions\\Notion_Database' => __DIR__ . '/../..' . '/workflow-library/actions/notion-database.php',
        'Tablesome\\Workflow_Library\\Actions\\Open_Ai_Generate_Text' => __DIR__ . '/../..' . '/workflow-library/actions/open-ai-generate-text.php',
        'Tablesome\\Workflow_Library\\Actions\\Slack_Send_Message_To_Channel' => __DIR__ . '/../..' . '/workflow-library/actions/slack-send-message-to-channel.php',
        'Tablesome\\Workflow_Library\\Actions\\Slack_Send_Message_To_User' => __DIR__ . '/../..' . '/workflow-library/actions/slack-send-message-to-user.php',
        'Tablesome\\Workflow_Library\\Actions\\Store_All_Forms_Entries' => __DIR__ . '/../..' . '/workflow-library/actions/store-all-forms-entries.php',
        'Tablesome\\Workflow_Library\\Actions\\Tablesome_Add_Row' => __DIR__ . '/../..' . '/workflow-library/actions/tablesome-add-row.php',
        'Tablesome\\Workflow_Library\\Actions\\Tablesome_Add_Row_Old' => __DIR__ . '/../..' . '/workflow-library/actions/tablesome-add-row-old.php',
        'Tablesome\\Workflow_Library\\Actions\\Tablesome_Filter_Table' => __DIR__ . '/../..' . '/workflow-library/actions/tablesome-filter-table.php',
        'Tablesome\\Workflow_Library\\Actions\\Tablesome_Load_WP_Query_Content' => __DIR__ . '/../..' . '/workflow-library/actions/tablesome-load-wp-query-content.php',
        'Tablesome\\Workflow_Library\\Actions\\WP_Post_Creation' => __DIR__ . '/../..' . '/workflow-library/actions/wp-post-creation.php',
        'Tablesome\\Workflow_Library\\Actions\\WP_Redirection' => __DIR__ . '/../..' . '/workflow-library/actions/wp-redirection.php',
        'Tablesome\\Workflow_Library\\Actions\\WP_Send_Mail' => __DIR__ . '/../..' . '/workflow-library/actions/wp-send-mail.php',
        'Tablesome\\Workflow_Library\\Actions\\WP_User_Creation' => __DIR__ . '/../..' . '/workflow-library/actions/wp-user-creation.php',
        'Tablesome\\Workflow_Library\\External_Apis\\Api_Connect' => __DIR__ . '/../..' . '/workflow-library/external-apis/api-connect.php',
        'Tablesome\\Workflow_Library\\External_Apis\\GDrive' => __DIR__ . '/../..' . '/workflow-library/external-apis/gdrive.php',
        'Tablesome\\Workflow_Library\\External_Apis\\GSheet' => __DIR__ . '/../..' . '/workflow-library/external-apis/gsheet.php',
        'Tablesome\\Workflow_Library\\External_Apis\\Hubspot' => __DIR__ . '/../..' . '/workflow-library/external-apis/hubspot.php',
        'Tablesome\\Workflow_Library\\External_Apis\\Mailchimp' => __DIR__ . '/../..' . '/workflow-library/external-apis/mailchimp.php',
        'Tablesome\\Workflow_Library\\External_Apis\\Notion' => __DIR__ . '/../..' . '/workflow-library/external-apis/notion.php',
        'Tablesome\\Workflow_Library\\External_Apis\\OpenAI' => __DIR__ . '/../..' . '/workflow-library/external-apis/openai.php',
        'Tablesome\\Workflow_Library\\External_Apis\\Retry' => __DIR__ . '/../..' . '/workflow-library/external-apis/retry.php',
        'Tablesome\\Workflow_Library\\External_Apis\\Slack' => __DIR__ . '/../..' . '/workflow-library/external-apis/slack.php',
        'Tablesome\\Workflow_Library\\Integrations\\Files' => __DIR__ . '/../..' . '/workflow-library/integrations/files.php',
        'Tablesome\\Workflow_Library\\Integrations\\GSheet' => __DIR__ . '/../..' . '/workflow-library/integrations/gsheet.php',
        'Tablesome\\Workflow_Library\\Integrations\\Hubspot' => __DIR__ . '/../..' . '/workflow-library/integrations/hubspot.php',
        'Tablesome\\Workflow_Library\\Integrations\\Mailchimp' => __DIR__ . '/../..' . '/workflow-library/integrations/mailchimp.php',
        'Tablesome\\Workflow_Library\\Integrations\\Notion' => __DIR__ . '/../..' . '/workflow-library/integrations/notion.php',
        'Tablesome\\Workflow_Library\\Integrations\\OpenAi' => __DIR__ . '/../..' . '/workflow-library/integrations/openai.php',
        'Tablesome\\Workflow_Library\\Integrations\\Slack' => __DIR__ . '/../..' . '/workflow-library/integrations/slack.php',
        'Tablesome\\Workflow_Library\\Integrations\\Tablesome' => __DIR__ . '/../..' . '/workflow-library/integrations/tablesome.php',
        'Tablesome\\Workflow_Library\\Integrations\\WP_Core' => __DIR__ . '/../..' . '/workflow-library/integrations/wp-core.php',
        'Tablesome\\Workflow_Library\\Triggers\\Cf7' => __DIR__ . '/../..' . '/workflow-library/triggers/cf7.php',
        'Tablesome\\Workflow_Library\\Triggers\\Elementor' => __DIR__ . '/../..' . '/workflow-library/triggers/elementor.php',
        'Tablesome\\Workflow_Library\\Triggers\\Fluent' => __DIR__ . '/../..' . '/workflow-library/triggers/fluent.php',
        'Tablesome\\Workflow_Library\\Triggers\\Forminator' => __DIR__ . '/../..' . '/workflow-library/triggers/forminator.php',
        'Tablesome\\Workflow_Library\\Triggers\\Gravity' => __DIR__ . '/../..' . '/workflow-library/triggers/gravity.php',
        'Tablesome\\Workflow_Library\\Triggers\\On_Send_Email' => __DIR__ . '/../..' . '/workflow-library/triggers/on-send-email.php',
        'Tablesome\\Workflow_Library\\Triggers\\Tablesome' => __DIR__ . '/../..' . '/workflow-library/triggers/tablesome.php',
        'Tablesome\\Workflow_Library\\Triggers\\WP_Forms' => __DIR__ . '/../..' . '/workflow-library/triggers/wp-forms.php',
        'Tablesome_Event_Log' => __DIR__ . '/../..' . '/includes/modules/workflow/event-log/model/class-event-log.php',
        'Tablesome_Event_Log_Table_Query' => __DIR__ . '/../..' . '/includes/modules/workflow/event-log/model/class-event-log-query.php',
        'Tablesome_Event_Log_Table_Row' => __DIR__ . '/../..' . '/includes/modules/workflow/event-log/model/class-event-log-row.php',
        'Tablesome_Event_Log_Table_Schema' => __DIR__ . '/../..' . '/includes/modules/workflow/event-log/model/class-event-log-schema.php',
        'Tablesome_Table' => __DIR__ . '/../..' . '/includes/modules/tablesomedb/model/class-table.php',
        'Tablesome_Table_Query' => __DIR__ . '/../..' . '/includes/modules/tablesomedb/model/class-table-query.php',
        'Tablesome_Table_Record' => __DIR__ . '/../..' . '/includes/modules/tablesomedb/model/class-table-record.php',
        'Tablesome_Table_Schema' => __DIR__ . '/../..' . '/includes/modules/tablesomedb/model/class-table-schema.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04ce1158b5a98717630ee74d340bdca4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04ce1158b5a98717630ee74d340bdca4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04ce1158b5a98717630ee74d340bdca4::$classMap;

        }, null, ClassLoader::class);
    }
}
