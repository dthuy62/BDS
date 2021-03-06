
<div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Thêm Bất động sản</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="{{route('category.store')}}" method="POST">
              @csrf
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label"><b>Tên danh mục :</b></label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class=form-group>
                    <label>Trạng thái</label>
                    <select name="status" class="form-control">
                    <option value="0">Ẩn</option>
                    <option value="1">Hiện</option>
                    </select>
                </div>
                <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
              <button type="submit" class="btn btn-primary">Xác nhận</button>
            </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
     