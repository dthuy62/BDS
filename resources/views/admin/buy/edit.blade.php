<div class="modal fade bd-example-modal-lg" id="editBuy" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sửa Bất Động Sản <span class="title"></span> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="updateBuy" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" class="idBuy">
                    <fieldset class=form-group>
                        <label>Tiêu đề :</label>
                        <input name="title" class="form-control title" placeholder="Tiêu đề">
                    <div class="alert alert-danger errorTitle"></div>
                    </fieldset>

                        <div class="form-group">
                          <label>Danh mục</label>
                          <select name="idCategory" class="form-control cateBDS">

                          </select>
                        </div>
                        <div class="form-group">
                          <label>Loại bất động sản</label>
                          <select name="idBDSType" class="form-control typeBDS">

                          </select>
                        </div>

                        <div class=form-group>
                          <label>Dịa chỉ :</label>
                          <input type="text" name="address" class="form-control address" placeholder="Địa chỉ">
                          <div class="alert alert-danger errorAddress"></div>
                          </div>

                      <div class="form-group">
                        <label>Mô tả :</label>
                        <div>
                        <textarea class="form-control desc" rows="5" id="demo" name="desc" placeholder="Điền mô tả cho bất động sản"></textarea>
                        <div class="alert alert-danger errorDesc"></div>
                        </div>
                      </div>


                      <div class=form-group>
                        <label for="dt">Diện tích :</label>
                        <div >
                        <input type="number" name="dt"  class="form-control dt" placeholder="Nhập diện tích ">
                        <div class="alert alert-danger errorDt"></div>
                        </div>

                        <div class=form-group>
                          <label for="price">Giá :</label>
                          <input type="text" name="price" class="form-control price">
                          <div class="alert alert-danger errorPrice"></div>
                          </div>
                          <div class="form-group">
                            <label>Trạng thái</label>
                            <select class="form-control status" name="status">
                                <option value="1" class="show">Hiển Thị</option>
                                <option value="0" class="hide">Không Hiển Thị</option>
                            </select>
                        </div>
                        <img class="img img-thumbnail imgThumb"  width="100px" height="100px" lign="center">
                        <div class="form-group">
                          <label>Ảnh</label>
                          <input type="file" name="image" class="form-control image">
                          <div class="alert alert-danger errorImage"></div>
                        </div>
                    <input type="submit" class="btn btn-success" value="Sửa">
                    <a href="#" class="btn btn-danger">Hủy bỏ</a>
                    </form>
          {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary " data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary update">Xác nhận</button>
          </div> --}}
        </div>

      </div>
    </div>
  </div>
