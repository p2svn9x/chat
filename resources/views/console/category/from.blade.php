<div id="additem">
    <div class="form-group">
        <label for="subDomain" id="titleAddMenu">Danh mục cha *</label>
        <select class="form-control input_add_item" id="parent">
            <?php
            echo '<option value="0">Danh mục cha</option>';
            foreach ($categorys as $category ) {

                echo '<option value="'.$category['id'].'" id="location'.$category['id'].'" class ="selectLocation"> '.$category['name'].'</option>';
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="subDomain" id="titleAddMenu">Kiểu danh mục *</label>
        <select class="form-control input_add_item" id="typeCategory" onchange="chomeCategory()">
            <option value="1">Danh mục sản phẩm </option>
            <option value="2">Menu link</option>
        </select>
    </div>

    <div class="form-group">
        <label for="subDomain" id="titleAddMenu">Tên danh mục *</label>
        <input type="text" class="form-control input_add_item" id="name">
    </div>
    <div class="form-group" id="groupIcon">
        <label for="subDomain" id="titleAddMenu">Icon</label>
        <input type="text" class="form-control input_add_item" id="customIcon" placeholder="Icom">
    </div>
    <div class="form-group" id="groupLink" style="display: none">
        <label for="subDomain" id="titleAddMenu">Link *</label>
        <input type="text" class="form-control input_add_item" id="customLink" placeholder="http://">
    </div>

    <div class="alert alert-danger" id="dangerStatus" style="display: none">
        <strong></strong> <span id="textStatusAlert"></span>
    </div>
    <input type="hidden" class="form-control input_add_item" id="idCatefory" value="0"/>
    <button type="button" class="btn btn-primary" id="add_item" onclick="saveCategory()">Lưu lại</button>
    <button type="submit" class="btn btn-default" onclick="closeItem()">Hủy</button>
</div>