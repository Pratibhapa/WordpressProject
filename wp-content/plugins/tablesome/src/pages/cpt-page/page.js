import ajaxEvents from"./ajax-events";var selectors={page:".tablesome_cpt",pageAction:".tablesome_cpt [name='post_action']",title:".tablesome_cpt .tablesome__inputText--title",shortcode:".tablesome_cpt .tablesome__fields .tablesome__field--clipboardText",submitCreateMode:".tablesome_cpt .tablesome__button--submit, #tablesome__container .tablesome__button--submit.create-mode",wpSubMenu:"#menu-posts-tablesome_cpt ul.wp-submenu li",spinner:".tablesome__spinner"},page={init:function(e){this.tableStore=e,this.eventListeners()},eventListeners:function(){this.submitTableCreateMode(),this.setEditPageMenuActive(),this.copyShortcodeToClipboard()},submitTableCreateMode:function(){var e=this;jQuery(selectors.submitCreateMode).on("click",(function(t){t.preventDefault(),ajaxEvents.submitTable(e.tableStore),page.disableSubmitButton(),page.loadSpinner()}))},setEditPageMenuActive:function(){var e=jQuery(selectors.wpSubMenu);if(0==e.length)return!1;var t=jQuery(selectors.pageAction).val();e.each((function(){var o=jQuery(this).find("a").text();"edit"==t&&"All Tables"===o&&(e.removeClass("current"),jQuery(this).addClass("current"))}))},copyShortcodeToClipboard:function(){jQuery(selectors.shortcode).on("click",(function(){var e=document.getElementById("tablesome__field--shortcode");e.select(),e.setSelectionRange(0,99999),document.execCommand("copy")}))},checkTitleforSubmit:function(){jQuery(selectors.title).on("change",(function(){if(0==jQuery(this).val().trim().length)return page.disableSubmitButton(),!1;page.enableSubmitButton()}))},disableSubmitButton:function(){jQuery(selectors.submit).attr("disabled","disabled")},enableSubmitButton:function(){jQuery(selectors.submit).removeAttr("disabled")},loadSpinner:function(){jQuery(selectors.spinner).addClass("active")}};export default page;