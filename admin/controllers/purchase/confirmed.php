<?php
require_once('admin/models/purchase.php');
global $user_nav;
if (!empty($user_nav)) {
    $options = array(
        'where' => 'status = 0 and user_id =' . $user_nav,
        'order_by' => 'createtime DESC'
    );
    $order_receied  = get_all('orders', $options);

    $title = 'Đơn hàng đã xác nhận';
    $status = array(
        0 => 'Đã xác nhận đơn hàng',
        2 => 'Đang giao hàng',
        1 => 'Đã giao hàng'
    );
}
require('admin/views/purchase/index.php');
