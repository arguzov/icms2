var is_filter = false;

function contentFilter(){
    var form_data = $('.datagrid_dataset_filter form').serialize();
    $('#datagrid_filter #advanced_filter').val(form_data);
    $('.cp_toolbar .filter a').hide();
    $('.cp_toolbar .delete_filter a').show();
    icms.datagrid.setPage(1);
    icms.datagrid.loadRows(); // В UPS diff_order обновлется только здесь
    icms.modal.close();
    is_filter = true;
    return false;
}

function contentCancelFilter(ctype_changed){
    $('#datagrid_filter #advanced_filter').val('');
    $('.cp_toolbar .filter a').show();
    $('.cp_toolbar .delete_filter a').hide();
    icms.datagrid.setPage(1);
    $('#datagrid_filter input[name=ctype_changed]').val(ctype_changed ? '1' : '0');
    icms.datagrid.loadRows();
    $('#datagrid_filter input[name=ctype_changed]').val('0');
    is_filter = false;
    return false;
}

function contentCatsReorder(button){
    var url = button.attr('href');
    icms.modal.openAjax(url);
    return false;
}

function contentItemsMoved(form_data){
    icms.datagrid.loadRows();
    icms.modal.close();
}
