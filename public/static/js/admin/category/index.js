$(
    () => {
        $('#example').DataTable({
            "paging": true,
            "iDisplayLength": 3,
            "bPaginate": true, //翻页功能
            "bLengthChange": true, //改变每页显示数据数量
            "bFilter": true, //过滤功能
            "bSort": true, //排序功能
            "bInfo": true,//页脚信息
            "bAutoWidth": true,
            "lengthMenu": [[3, 4, 5, -1], [3, 4, 5, "All"]]
        });
    }
);

const showDeleteDialog = (id) => {
    $('#delete-dialog').modal({
        onConfirm: () => {
            $('#delete-category-id').val(id);
            $('#delete-form').submit()
        },
        onCancel: () => {

        }
    });
};
const showAddDialog = () => {
    $('#create-category-prompt').modal({
        onConfirm: () => {
            $('#add-category-form').submit()
        },
        onCancel: () => {

        }
    });
};
