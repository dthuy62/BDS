
<div class="modal fade" id="editType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sửa Loại BDS <span class="title"></span> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><b>Loại Bất động sản :</b></label>
            <input type="text" name="name" class="form-control name">
            <div class="errors" style="color:darkred"></div>
          </div>
          <div class=form-group>
            <label><b>Danh mục</b></label>
            <select name="idCategory" class="form-control idCategory"></select>
        </div>
          <div class=form-group>
              <label><b>Trạng thái</b></label>
              <select name="status" class="form-control status">
              <option value="0" class="show">Ẩn</option>
              <option value="1" class="hide">Hiện</option>
              </select>
          </div>
         
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary " data-dismiss="modal">Đóng</button>
          <button type="submit" class="btn btn-primary updateType">Xác nhận</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
