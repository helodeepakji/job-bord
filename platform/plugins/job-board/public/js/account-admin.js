(()=>{"use strict";$(document).ready((function(){$(document).on("click","#confirm-add-credit-button",(function(t){t.preventDefault();var e=$(t.currentTarget),a=e.closest(".modal"),o=a.find("form");$httpClient.make().withButtonLoading(e).post(o.prop("action"),o.serialize()).then((function(t){var e=t.data;Botble.showNotice("success",e.message),a.modal("hide"),o.get(0).reset(),$("#credit-histories").load("".concat($(".page form").prop("action")," #credit-histories > *"))}))})).on("click",".step-item",(function(t){$(t.currentTarget).find("fieldset").slideToggle()})).on("show.bs.modal","#edit-account-entity-modal",(function(t){var e=$(t.relatedTarget),a=$(t.currentTarget),o=e.data("table"),n=e.data("modal-title");a.find(".modal-title").text(n),a.find('[data-bb-toggle="confirm-edit-entity-button"]').data("table",o),$httpClient.make().get(e.prop("href")).then((function(t){var e=t.data;a.find(".modal-body").html(e)}))})).on("click",'[data-bb-toggle="confirm-edit-entity-button"]',(function(t){t.preventDefault();var e=$(t.currentTarget),a=e.closest(".modal"),o=a.find("form"),n=e.data("table");$httpClient.make().withButtonLoading(e).post(o.prop("action"),o.serialize()).then((function(t){var e=t.data;Botble.showNotice("success",e.message),a.modal("hide"),o.get(0).reset(),$(n).load("".concat($(".page-body form").prop("action")," ").concat(n," > *"))}))})).on("click","#confirm-add-entity-button",(function(t){t.preventDefault();var e=$(t.currentTarget),a=e.closest(".modal"),o=a.find("form"),n=null;switch(a.prop("id")){case"add-language-modal":n="#languages-table";break;case"add-experience-modal":n="#experiences-table";break;case"add-education-modal":n="#educations-table"}$httpClient.make().withButtonLoading(e).post(o.prop("action"),o.serialize()).then((function(t){var e=t.data;Botble.showNotice("success",e.message),a.modal("hide"),o.get(0).reset(),$(n).load("".concat($(".page-body form").prop("action")," ").concat(n," > *"))}))})).on("show.bs.modal","#modal-confirm-delete",(function(t){var e=$(t.relatedTarget),a=$(t.currentTarget);a.find('[data-bb-toggle="confirm-delete"]').data("table",e.data("table")),a.find('[data-bb-toggle="confirm-delete"]').data("url",e.prop("href"))})).on("click",'[data-bb-toggle="confirm-delete"]',(function(t){t.preventDefault();var e=$(t.currentTarget),a=e.data("table");$httpClient.make().withButtonLoading(e).delete(e.data("url")).then((function(t){var o=t.data;Botble.showNotice("success",o.message),e.closest(".modal").modal("hide"),$(a).load("".concat($(".page-body form").prop("action")," ").concat(a," > *"))}))}))}))})();