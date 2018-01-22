<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/man.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Admin</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'จัดการข้อมูล', 'options' => ['class' => 'header']],
                   // ['label' => 'ข้อมูลการสั่งซื้อ', 'icon' => 'building-o', 'url' => ['/orders/index']],
                    ['label' => 'ข้อมูลร้านอาหาร', 'icon' => 'building-o', 'url' => ['/restaurant/index']],
                    ['label' => 'ข้อมูลรีวิวร้านอาหาร', 'icon' => 'frown-o', 'url' => ['/resreview/index']],
                    ['label' => 'ข้อมูลลูกค้า', 'icon' => 'star-half-o', 'url' => ['/customer/index']],
                    ['label' => 'ข้อมูลที่อยู่ลูกค้า', 'icon' => 'star-half-o', 'url' => ['/customeraddress/index']],
                    ['label' => 'ข้อมูลพนักงาน', 'icon' => 'address-card', 'url' => ['/employee/index']],
                    ['label' => 'ข้อมูลการจัดส่ง', 'icon' => 'paper-plane', 'url' => ['/delivery/index']],
                    ['label' => 'ข้อมูลโปรโมชั่นการจัดส่ง', 'icon' => 'star-half-o', 'url' => ['/deliverypro/index']],
                    ['label' => 'ข้อมูลเวลาการจัดส่ง', 'icon' => 'clock-o', 'url' => ['/deliverytime/index']],
                    ['label' => 'ตำแหน่ง', 'icon' => 'map-marker', 'url' => ['/location/index']],
                    ['label' => 'ประเภทตำแหน่ง', 'icon' => 'podcast', 'url' => ['/locationtype/index']],
                    ['label' => 'ประเภทอาหาร', 'icon' => 'podcast', 'url' => ['/foodtype/index']],
                    ['label' => 'ข้อมูลประเภทการชำระเงิน', 'icon' => 'money', 'url' => ['/payment/index']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    
                ],
            ]
        ) ?>

    </section>

</aside>
