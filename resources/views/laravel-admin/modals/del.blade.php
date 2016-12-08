{{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-val="">删除</button>--}}
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span
                            class="sr-only">关闭</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">删除</h4>
            </div>
            <div class="modal-body">
                您确定要删除吗?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary _delete_">确定</button>
            </div>
        </div>
    </div>
</div>
{{csrf_field()}}
<input type="hidden" name="_path" value="/{{Request::path()}}/">{{--获取当前地址--}}
<script>
    var _token = $("input[name=_token]").val();
    var _path = $("input[name = _path]").val();
    $(".btn-delete").click(function () {
        $('.modal-footer .btn-primary').attr('data-id', $(this).data("val"));
    });
    $('._delete_').click(function () {//重写删除方法
        var id = $(this).data('id');
        if (id) {
            $.post(_path + id, {_method: 'delete', '_token': _token}, function (data) {
                $(".modal-backdrop").remove();
                if (typeof data === 'object') {
                    if (data.status) {
                        noty({
                            text: "<strong>Succeeded!</strong><br/>" + data.message,
                            type: 'success',
                            timeout: 3000
                        });
                    } else {
                        noty({
                            text: "<strong>Failed!</strong><br/>" + data.message,
                            type: 'error',
                            timeout: 3000
                        });
                    }
                }
                $.pjax.reload('#pjax-container');
            });
        }
    });
</script>