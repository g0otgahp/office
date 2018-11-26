<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" ng-Click="onClickExit()">&times;</button>
    <h3 class="modal-title">การจัดการประเภทสินค้า <a href="#" style="font-size:11px;padding-left:10px;color:red;" ng-show="{{delete}}"
    onClick="javascript: return confirm('ต้องการทำสิ่งนี้ใช่หรือไม่')" ng-Click="onClickDelete(form)"><b>ลบ</b></i> </a></h3>
  </div>
  <div class="modal-body">
    <center>
      <table>
        <tr>
          <td><b>ประเภทสินค้า :</b> &nbsp;</td>
          <td>
            <input autocomplete="off" ng-Model="form.product_categoryName" type="text"
            required class="form-control" style="margin-top:10px;"
            placeholder="ตัวอย่าง : Digital Signage" required>
          </td>
        </tr>

      </table>
    </div>
    <div class="modal-footer">
      <button type"submit" class="btn btn-success btn-sm" ng-show="{{insert}}" ng-Click="onClickInsert(form)">เพิ่ม</button>
      <button type"submit" class="btn btn-warning btn-sm" ng-show="{{update}}" ng-Click="onClickUpdate(form)">แก้ไข</button>
    </div>
  </div>
